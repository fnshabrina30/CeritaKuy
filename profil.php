<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Icon dari Fontawesome -->
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
    <title>Profil</title>
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
                    <li><a href="#" style="color: black">Profil</a></li>
                    <li><a href="katalog.php">Cerita</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
         <article class="card">
                <center>
                    <h3 style="color:hotpink;">PROFIL</h3>
                    <p>Nama <span style="color: hotpink">Putra</span></p>
                    <p>Reading List  <span style="color: hotpink">3</span></p>
                </center>

        </article>
           
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