<?php 
session_start();

require 'functions.php';

if (isset($_SESSION["admin"])) {
  echo "<script>
         window.location.replace('admin');
       </script>";
  exit;
}
if (!isset($_SESSION['user'])) {
   echo "<script>
         window.location.replace('login.php');
       </script>";
  exit;
}


$id = $_GET["id"];
$konten = query("SELECT * FROM konten WHERE id = $id")[0];


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Icon dari Fontawesome -->
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
    <title>CeritaKuy</title>
    <style>
        .btn {
            text-decoration: none;
            padding: 5px 10px;
            background-color: red;
        }
        .flex {
            display: flex;
            flex-direction: column;
        }
        .btn-beli {
            text-decoration: none;
            padding: 5px 10px;
            background-color: green;
        }
        #content {
            float: right;
        }
        aside {
            float: left;
            padding-left: 0;
            padding-right: 30px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="logout.php" class="btn" style="border-bottom: none;">Logout</a></li>
            </ul>
        </nav>
        <div class="jumbotron">
            <nav style="background-color: lightpink; color: black">
                <ul>
                    <li><h1 style="float: left;margin-top: -10px">CeritaKuy</h1></li>
                    <li><a href="index.php" style="color: black">Home</a></li>
                    <li><a href="profil.php" style="color: black">Profil</a></li>
                    <li><a href="katalog.php">Cerita</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
         <article class="card">
                <center><h3 style="color:hotpink;"><?= $konten["judul"]; ?></h3></center>
        </article>

        <div id="content">
                <div class="flex">
                    <div class="card">
                        <center>
                        <img src="images/<?= $konten["gambar"]; ?>" class="featured-image"></a>
                        <h4><?= $konten["judul"]; ?></h4>
                        <p style="text-indent: 22px; margin: 10px 50px;">
                            <?= $konten["isi1"]; ?>
                        </p>
                        <p style="text-indent: 22px; margin: 10px 50px;">
                            <?= $konten["isi2"]; ?>
                        </p>
                        <p style="text-indent: 22px; margin: 10px 50px;">
                            <?= $konten["isi3"]; ?>
                        </p>
                        <br>
                        <a href="katalog.php" style="color: hotpink; font-size: 22px;">Kembali</a>
                        </center>
                   </div>
                </div>
        </div>

        <aside>
             <div class="card">
                <center><p>Ingin menambahkan cerita ?</p>
                    <p><a href="tambah.php">Klik disini!</a></p> 
                </center>
            </div>
        </aside>
           
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