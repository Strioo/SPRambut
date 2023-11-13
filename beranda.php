<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pakar Diagnosa Penyakit Rambut</title>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Stylesheet -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: #ecf0f1; /* Light background color */
      color: #34495e; /* Dark text color */
      height: 100vh;
      overflow: hidden;
    }
    
    .container {
      width: 1200px; /* Reduced width for better readability */
      margin: 0 auto;
      padding: 60px 30px;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      height: 800px;
      margin-top: 30px;
    }
    
    header {
      text-align: center;
    }
    
    header h1 {
      font-size: 48px; /* Larger font size for title */
      font-weight: 700;
      margin-bottom: 20px;
      color: #3498db; /* Blue color for title */
    }
    
    header p {
      font-size: 18px;
      color: #555;
    }

    .hero {
      display: flex;
      gap: 50px;
      align-items: center;
      justify-content: center;
      margin-top: 40px;
    }

    .hero img {
        margin-top:50px ;
      max-width: 400px;
      border-radius: 15px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .hero-text {
      max-width: 400px;
      color: #333;
    }

    .hero-text h2 {
      font-size: 36px; /* Larger font size for heading */
      margin-bottom: 15px;
      color: #3498db; /* Blue color for heading */
    }

    .hero-text p {
      font-size: 18px;
      line-height: 1.5;
      margin-bottom: 20px;
    }

    button {
      background: #e74c3c; /* Red color for button */
      border: none;
      color: #fff;
      padding: 12px 24px;
      border-radius: 30px;
      font-size: 18px;
      cursor: pointer;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      transition: background 0.3s ease-in-out;
    }

    button:hover {
      background: #c0392b; /* Darker red color on hover */
    }

  </style>

</head>
<body>

  <div class="container">
  
    <header>
      <h1>Sistem Pakar Diagnosa Penyakit Rambut</h1>
      <p>Temukan solusi terbaik untuk masalah rambut Anda</p>
    </header>

    <section class="hero">
      <img src="./assets/images/ilustrasifotorambut.jpg" alt="Hair Image">
      
      <div class="hero-text">
        <h2>Dapatkan Diagnosa & Solusi untuk Masalah Rambut Anda</h2>
        <p>Konsultasikan masalah rambut Anda dengan sistem pakar kami dan dapatkan diagnosa serta solusi terbaik dari pakar.</p>
        <a href="?page=konsultasi"><button>Mulai Diagnosa</button></a>
      </div>
    </section>

  </div>
  
</body>
</html>
