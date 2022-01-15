<?php
session_start();

if (!isset($_SESSION['admin'])) {
   echo "<script>
         window.location.replace('../login.php');
       </script>";
  exit;
}
 
require 'functions.php';


$id = $_GET["id"];
$konten = query("SELECT * FROM konten WHERE id = $id")[0];

if (isset($_POST["submit"])) {

  if (ubah($_POST) > 0 ) {
    echo "
      <script>
        alert('Konten Berhasil Diubah!');
        window.location.href='index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Konten Gagal Diubah!');
        
      </script>
    ";
  }
} 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>

    <title>CeritaKuy</title>
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
            <h3>CeritaKuy</h3>
        </div>
    </header>

   <main>
        <div id="content">
            <h2 class="judul">Edit konten</h2>
            <article class="card">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?= $konten["id"]; ?>">
                    <input type="hidden" name="gambar" id="gambar" value="<?= $konten["gambar"]; ?>">
                    <div class="jarak">
                         <label for="judul">Judul konten</label>
                         <input type="text" id="judul" name="judul" placeholder="Masukkan Judul Konten" required value="<?= $konten["judul"]; ?>">
                    </div>
                    <div class="jarak">
                         <label for="isi1">Paragraf 1</label>
                         <input type="text" id="isi1" name="isi1" value="<?= $konten["isi1"]; ?>"></input>
                    </div>
                    <div class="jarak">
                         <label for="isi2">Paragraf 2</label>
                         <input type="text" id="isi2" name="isi2" value="<?= $konten["isi2"]; ?>"></input>
                    </div>
                    <div class="jarak">
                         <label for="isi3">Paragraf 3</label>
                         <input type="text" id="isi3" name="isi3" value="<?= $konten["isi3"]; ?>"></input>
                    </div>
                    <div class="jarak">
                         <label for="tanggal_post">Tanggal Posting</label>
                         <input type="date" id="tanggal_post" name="tanggal_post" required value="<?= $konten["tanggal_post"]; ?>">
                    </div>
                    <button type="submit" name="submit" class="btn" style="width: 100%;padding:10px;background-color: hotpink;">Ubah Konten</button>
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