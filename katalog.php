<?php 
session_start();

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
require 'functions.php';

$konten = mysqli_query($conn, "SELECT * FROM konten");
$total_konten = mysqli_num_rows($konten);

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
                    <li><a href="#">Cerita</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
         <article class="card">
                <center><h3 style="color:hotpink;">Daftar Cerita</h3></center>
        </article>

        <div id="content">
            <?php foreach ($konten as $p) : ?>
            <div class="flex">
                <div class="card">
                    <center>
                    <a href="katalog_lengkap.php?id=<?= $p["id"]; ?>"><img src="images/<?= $p["gambar"]; ?>" class="featured-image"></a>
                    <h4><?= $p["judul"]; ?></h4>
                    </center>
               </div>
            </div>
            <?php endforeach; ?>
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