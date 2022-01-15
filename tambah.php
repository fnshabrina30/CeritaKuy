<?php 

session_start();

if (!isset($_SESSION['user'])) {
   echo "<script>
         window.location.replace('login.php');
       </script>";
  exit;
}
require 'functions.php';


if (isset($_POST["register"])) {
  
  if (tambah($_POST) > 0 ) {
     echo "<script>
        alert('Konten Berhasil Ditambahkan!');
        window.location.href='katalog.php';
      </script>";
  } else {
    echo mysqli_error($conn);
  }

} 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Tambah Data CeritaKuy</title>
    <style>
        .btn {
            text-decoration: none;
            padding: 3px 10px;
            background-color: darkred;
        }
        #content {
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <div class="jumbotron">
            <h3>Tambah Data CeritaKuy <i class="fab fa-accusoft"></i></h3>
        </div>
    </header>

   <main>
        <div id="content">
            <h2 class="judul">Tambah Cerita</h2>
            <article class="card">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="jarak">
                         <label for="gambar">Gambar</label>
                         <input type="file" id="gambar" name="gambar" required>
                    </div>
                    <div class="jarak">
                         <label for="judul">Judul Cerita</label>
                         <input type="text" id="judul" name="judul" placeholder="Masukkan Judul Konten" required>
                    </div>
                    <div class="jarak">
                         <label for="isi1">Isi Paragraf 1</label>
                         <textarea id="isi1" name="isi1" rows="4"></textarea>
                    </div>
                    <div class="jarak">
                         <label for="isi2">Isi Paragraf 2</label>
                         <textarea id="isi2" name="isi2" rows="4"></textarea>
                    </div>
                    <div class="jarak">
                         <label for="isi3">Isi Paragraf 3</label>
                         <textarea id="isi3" name="isi3" rows="4"></textarea>
                    </div>
                    <div class="jarak">
                         <label for="tanggal_post">Tanggal Posting</label>
                         <input type="date" id="tanggal_post" name="tanggal_post" required>
                    </div>
                    <button type="submit" name="register" class="btn" style="width: 100%;padding:10px;background-color: lightpink;">Tambah</button>
                </form>
            </article>
        </div>
    </main>


    <footer>
        <p style="color: black;">CONTACT US</p>
        <p>
            <ul style="list-style-type: none; display: inline-flex; margin-right: 37px; color: black;">
                <li><i class="fab fa-facebook"></i></li>
                <li>&nbsp;&nbsp;&nbsp;<i class="fab fa-instagram"> </i></li>
                <li>&nbsp;&nbsp;&nbsp;<i class="fab fa-twitter"> </i></li>
                <li>&nbsp;&nbsp;&nbsp;<i class="fab fa-whatsapp"> </i></li>
            </ul>
            
        </p>  
    </footer>

</body>
</html>