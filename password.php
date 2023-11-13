 <?php
$link_update = '?page=password';
$id_pengguna = $_SESSION['LOG_USER'];

if (isset($_POST['save'])) {
    $password = $_POST['password'];
    $password_baru = $_POST['password_baru'];
    $ulangi = $_POST['ulangi'];
    $error = '';
    $success = '';

    if ($password_baru != $ulangi) {
        $error .= 'Password baru tidak sama';
    }
    if (empty($error)) {
        if (mysqli_num_rows(mysqli_query($con, "select * from pengguna where id_pengguna='" . $id_pengguna . "' and password='" . $password . "'")) > 0) {
            mysqli_query($con, "update pengguna set password='" . $password_baru . "' where id_pengguna='" . $id_pengguna . "'");
            $success = 'Password berhasil diubah';
        } else {
            $error .= 'Password lama salah';
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Ubah Password</title>
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  
  <!-- Stylesheet -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f1f1f1; 
    }
    
    .form-container {
      background: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);  
      margin: 50px auto;
      max-width: 600px;
    }
    
    h2 {
      text-align: center;
      margin-bottom: 40px;
    }
    
    .form-group {
      margin-bottom: 30px;
    }
    
    label {
      display: block;
      font-size: 18px;
      color: #555;  
    }
    
    input {
      width: 100%;
      padding: 12px;
      border-radius: 5px;
      border: 1px solid #ddd;
      outline: none;
      color: #555;
      font-size: 16px;
    }
    
    button {
      background: #007bff;
      border: 0;
      padding: 12px 30px;
      border-radius: 30px;
      color: #fff;
      font-size: 18px;  
      cursor: pointer;
    }
    
    button:hover {
      background: #0062cc;
    }

  </style>

</head>

<body>

  <div class="form-container">
  
    <h2>Ubah Password</h2>
  
    <form action="<?php echo $link_update; ?>" method="post">
    <?php
            if (!empty($error)) {
                echo '<div class="alert bg-danger" role="alert">' . $error . '</div>';
            }
            if (!empty($success)) {
                echo '<div class="alert bg-success" role="alert">' . $success . '</div>';
            }
            ?>  
      <div class="form-group">
        <label>Password Lama</label>
        <input name="password" id="password" required autofocus type="password" value="">
      </div>
      
      <div class="form-group">
        <label>Password Baru</label>
        <input  id="password_baru" name="password_baru" required type="password" value="" >
      </div>

      <div class="form-group">
        <label>Ulangi Password Baru</label>  
        <input type="password" id="ulangi" name="ulangi" required type="password" value="" >
      </div>
      
      <button name="save" type="submit" >Simpan</button>
      
    </form>
  
  </div>

</body>
</html>


