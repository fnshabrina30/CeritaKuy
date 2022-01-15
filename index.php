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
                    <li><a href="#" style="color: black">Home</a></li>
                    <li><a href="profil.php" style="color: black">Profil</a></li>
                    <li><a href="katalog.php">Cerita</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main style="margin: 50px 0;">
        <div style="display: flex;">
            <div style="flex-grow: 1; text-align: center;">
                <br><br>
                <h1>Hi!</h1>
                <p style="font-size: 20px;">Disini adalah tempat terbaik</p> 
                <p style="font-size: 20px;">untuk berbagi pengalaman cerita terbaik</p>
            </div>

            <div style="flex-grow: 1">
              <center>
                <img src="images/login-page.jpg" alt="" width="300px" height="300px"> 
              </center>
            </div>
        </div>
        <br><br><br>
        <center>
          
          <h2>Rekomendasi buat kamu nih :)</h2>
          <img src="images/palang.png" alt="" width="200">
          </center>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Menjadi sosok Ibu tidak mewajibkan harus memiliki anak sendiri. Banyak cara dan pilihan yang bisa di pilih, apalagi dewasa ini masih banyak anak-anak yang membutuhkan kasih dan penjagaan dari sosok yang di panggil ibu. Panti Asuhan, Tempat Penitipan Anak, dan Madrasah merupakan beberapa contohnya. Alika, sebagai aktifis PMR bersama teman-temannya seringkali mendapati di mana ia harus berurusan dengan anak-anak lucu untuk dibantu. Kegiatan sederhana seperti membacakan buku, mengajak anak-anak bermain, memasak makanan untuk mereka, bahkan sampai kegiatan yang cukup sulit seperti harus menghabiskan tenaga demi mencapai ke pelosok yang mejadi tujuan kegiatan mereka.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Tugasnya sebagai anggota Palang Merah Remaja tidak menyurutkan semangat gadis itu untuk bertemu manusia-manusia kecil kesukaannya. Ia menyukai kegiatan di organisasi ini. mengenal orag baru, belajar hal baru, ke tempat yang belum pernah ia datangi, dan merasakan pengalaman-pengalaman seru di luar kegiatan yang biasanya di ajarkan di sekolah. Sekolah memang penting, namun pelajaran yang tidak kalah penting lebih banyak di dapatkan dalam kegiatan-kegiatan seperti ini; Pelajaran menjadi manusia yang berguna untuk sekitar.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Hampir dua tahun ia berdiri bersama anggotanya, dimulai saat menjadi yang dibimbing  sampai ia yang menjadi kakak pembimbing. Sudah cukup banyak desa dan pelosok yang ia datangi, menghadirkan pelajaran-pelajaran berguna bagi pribadinya. Di sekolah, Alika di ajarkan apa itu bersyukur, tapi di tempat kegiatan berlangung Alika mengetahui apa itu bersyukur yang sebenarnya. Ketika di sekolah ia diajarkan untuk meraih nilai yang tinggi, di organisasi ini ia di ajarkan bagimana menjadi manusia yang berhasil, selain mendapatkan nilai alademik, ia juga mendapati nilai kemanusiaan.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Hampir menujukkan pukul sepuluh pagi, Alika baru saja berhasil mengunjungi salah satu desa di daerah Yogyakarta. Bersama kakak-kakak dari PMI dan relawan, mereka akan memberikan pelayanan Kesehatan dan pembelajaran bagi anak-anak di desa itu. Mulai besok pagi, Alika, Maya, Tian, dan beberapa teman lainnya akan menemani anak-anak membaca buku di salah satu teras rumah warga, tentu mereka melakukan semua itu atas izin yang telah dimandatkan kepada ketua kegiatan. Sesampainya di sana, mereka langsung mengistirahatkan diri sebentar dan memulai persiapan kegiatan.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Warga cukup antusias dengan kehadiran mereka, begitupun anak-anak manis yang satu persatu berkumpul di rumah Pak Agus—yang meminjamkan teras rumahnya untuk kegiatan PRM—untuk memuaskan rasa penasaran mereka akan susunan literasi.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Ah, aku akan memakan timun Pak Tani,” kata Kancil. “Kalau cuma makan sedikit pasti tidak apa-apa.”
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Kancil menyusup lewat celah pagar lading Pak Tani dan mengunyah sebuah ketimun. “Krrs … hmm, segar sekali.”
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Satu lagi, ah. Lalu aku akan menyusul teman-teman.” Kemudian Kacil memetic satu lagi dan memakannya. Satu lagi, satu lagi, satu lagi, sampai ia kekenyangan dan tertidur. Ketika ia terbangun, Kancil terkejut karena hari sudah sore sehingga ia segera meninggalkan lading itu.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Alika berhenti membacakan cerita kepada anak-anak karena namanya yang di panggil oleh Adi, teman PMR nya.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Sebentar, ya,” tenang alika pada anak-anak lalu menghampiri Maya untuk menggantikan posisinya serta menyerahkan buku yang sebelumnya ia baca. 
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Ada apa?” tanya Alika kepada Adi.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Kamu sama Dea pulang ke kantor, ya. Tolong ambilin P3K, tadi tangannya luka, kegores kertas.” Alika terkejut dan segera mencari teman perempuannya itu. Di dapatinya Dea yang sedang duduk di pinggir teras, membaluti jarinya yang terluka dengan tisu.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Oke, oke. Aku izin pegi dulu,” ucap gadis itu terburu menghampiri temannya untuk kembali ke kantor kepala desa yang dijadikan tempat berhenti mereka sebelumnya.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Kamu enggak apa-apa, De?” Tanya Alika ketika akan menaiki motor pinjaman menuju Kantor Kepala Desa, gadis itu meringis melihat bercak darah yang melumuri tisu di tangan temannya. Dea menggeleng pelan. “Masih sakit?”
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Lumayan,” Dea sedikit meringis, “baru kali ini, loh, aku luka gara-gara kertas. Tajem juga ya ternyata.”
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Iya, apalagi kertas itu tipis, kan. Jadi kalau kelibas, bisa luka.”
              “Kamu pernah kena, Ka?” Tanya Dea di belakangnya kemudian.
              “Pernah. Dulu, udah lama. Ya, itu. Gara-gara pengen cepet-ceper beberes, nggak sadar kegores sama bagian pinggirnya.”
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Sesampainya mereka di kantor, Alika langsung bertanya kepada Kak Eka letak P3K dan segera membawanya kepada Dea yang duduk di kursi tamu kantor. Membantu gadis itu mengobati lukanya. Ketika akan kembali ke rumah Pak Agus, Aika dipanggil oleh Kak Eka untuk turut membantunya mengecek kesehatan warga desa.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Sore harinya, rombongan mereka pamit undur diri karena telah menyelesaikan kegiatan hari ini. Diakhiri oleh doa, satu persatu anggota Palang merah memasuki bis yang mereka tumpangi sebelumnya untuk kembali ke kantor PMI sebelum kembali ke rumah masing-masing.
            </p>
            <br><br><br><br><br><br>

            <center>
              <h2>Emia dan Program Kerja</h2>
              <img src="images/plan.png" alt="" width="200">
            </center>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Seperti kebanyakan kegiatan wajib sekolah ada umumnya, Senin pagi akan selalu di mulai dengan berdirinya barisan para siswa dan guru, menghadap hormat pada sangsaka merah putih. Kegiatan pagi ini sebenarnya sudah hampir selesai, ditemani oleh bintang terbesar Bimasakti yang bersinar dengan angkuhnya. Tentakel mentari seakan memanggang sedang kulit sawo matang manusia di bawahnya. Musim pancaroba layaknya balita yang rewel, tidak bisa diprediksi; akan menangis atau marah.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Emia adalah salah satu dari hampir sepuluh siswi yang tumbang pagi ini. Brankar UKS yang hanya berjumlah empat buah membuat beberapa siswi tersebut harus rela untuk berbagi brankar atau bahkan hanya duduk di kursi yang disediakan. Tiga siswi diantaranya yang baru saja diangkut dari lapangan upacara masih tidak sadarkan diri, mengharuskan siswi yang sudah cukup pulih dari rasa pening sebelumnya untuk bangkit di brankar dan menyingkir; menyediakan brankar kosong untuk ditempati siswi pingsan tadi.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Keadaan di luar hanya diisi oleh suara Pembina Upacara; Pak Ridwan yang menyampaikan pesan tentang kritik saran pelaksaan upacara, nasehat untuk anak didik, dan lain sebagainya. Bermenit-menit berlalu, tepuk tangan riuh terdengar sampai ke ruangan UKS yang pintunya tertutup. Lalu teriakan pemimpin upacara mengakhiri kegitan. Menghamburkan para siswa siswi yang kepanasan. Pembubaran yang dilakukan Yofi; Pemimpin Upacara turut serta dalam pengosongan ruang UKS ini hingga tersisa empat orang yang di brangkar dan dua anak PMR yang bertugas disini.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Emia baru saja mencapai pintu UKS—setelah sebelumnya mengoleskan minyak kayu putih di pergelangan tangan kiri untuk dihirup—ketika Andin menjemputnya untuk kembali ke kelas bersama.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Lo nggak sarapan lagi?” Tanya Andin yang menggaet tangan kiri Emia.
              “Sarapan, kok. Ini gara-gara tamu bulanan gue datang, baru semalem kena. Ya, biasalah,” jawab Emia menjelaskan. Jarak antara ruang UKS dan kelasnya tidak terlalu jauh, hanya butuh untuk berbelok sekali, dan mereka pun tiba di kelas.

            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Gua kaget tadi pas lo tumbang ke belakang, untung nggak kesurupan kaya Sinta waktu itu. Hahahaha.”
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Heh, gini-gini iman gue kuat, ya. Setan, mah, mana berani sama gue.” Emia menyentak pelan pegangan Andin padanya hingga terlepas. Berjalan lebih dulu ke kelas sebelum panggilan atas dirinya menarik etensinya.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Orang yang memanggilnya adalah Yofi, sahabatnya yang sekaligus menjadi orang kepercayaan orangtua Emia untuk menjaga gadis itu. Yofi adalah wakil ketua OSIS yang pagi tadi menjadi pemimpin upacara, menggantikan Ketua OSIS yang sedang mengikuti lomba debat di luar kota. Lelaki yang berpenampilan agak kusam itu menyodorkan sebotol air mineral, tau kebiasaan Emia yang tidak sudi untuk membawa air di tasnya.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Thanks.” Emia mengambil botol yang sudah dibukakan oleh Yofi sebelumya, meneguk air di depan lelaki itu; menunjukkan kalau ia patuh untuk meminum mata air botolan.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Thanks.” Emia mengambil botol yang sudah dibukakan oleh Yofi sebelumya, meneguk air di depan lelaki itu; menunjukkan kalau ia patuh untuk meminum mata air botolan.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Lo—” belum selesai protes hati yang menciptakan silabel pedas, Yofi sudah pergi dari hadapannya. “YOFI! AWAS YA LO NANTI!” Gadis itu berteriak sambal menunjuk punggung lebar yang menginggalkannya. Andin terpingkal, sudah terbiasa dengan adegan tinggal meninggalkan ini.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Kelas pagi selama dua jam dihabiskan dengan penjelasan  dan contoh soal Matematika, dua bulan disemester pertama kelas dua belas ini, panas matahari ternyata tidak cukup untuk mendidihkan otak para remaja tingkat akhir di sekolah ini. Emia suka matematika, tetapi tidak suka dengan perkawinan antara angka dan huruf yang membuat rumus tematik itu semakin memisahkan sel-sel otaknya.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Bel istirahat pertama berhasil membuat bunyi pada perut siswa kelaparan yang langsung menghambur ke teras kantin untuk mendapatkan asupan makanan. Setelah melakukan transaksi pada ibu kantin, sepiring nasi uduk sudah di proses oleh mulut Emia sesuap demi sesuap. Ada Andin, Yofi, dan Deni di dekatnya yang juga sedang memberi makan cacing-cacing di perut.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Mi, Jangan lupa pulang sekolah kita ada rapat di kelas IPS 3,” ingat Yofi pada sahabat perempuannya itu. Emia mengangguk dan berdeham sembelum kembali mengunyah.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Eh, Kamis ini jadi sparing sama tim Dion nggak, Den?” Yofi kembali mengeluarkan intonasi suaranya. Perannya sebagai Wakil Ketua OSIS yang cukup sibuk ditambah jadwalnya mengikuti beberapa ektrakulikuler membuatnya terkadang kualahan dengan jadwalnya. Tidak heran lagi ketika ia selalu menanyakan jadwal-jadwal yang terkadang harus di re-scedule¬ tanpa ia tau alasannya.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Nggak jadi,” jawab Deni, kemudian berkata setelah meminum es jeruknya,“tapi katanya bakal diganti hari Minggu, jam tiga sore. Lo bisa ikut nggak?”
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Alfi menghentikan gerakannya lalu termenung sebentar, kemudian menjawab ragu, “Emm … nggak tau. Nanti deh, gue liat jadwal yang lain dulu. Entar gue kabarin.”
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              “Oke. Gue tunggu.”
            “Gue sama Emia udah beres. Kita balik ke kelas dulu, ya.” Andin dan Emia berdiri lalu mulai melangkah menjauh. “Sampah di meja, lo yang buang ya, Fi, Den,” kata Emia yang menyulut kesal kedua lelaki sepantarannya. Lalu kembali menuju kelas diiringi kikikan jahilnya bersama Andin.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Emia kira rapat kali ini hanyalah rapat evaluasi anggota saja yang lebih kurang hanya akan menghabiskan waktu tiga putuh menitan. Dari semua ektrakulikuler di sekolah, Emia hanya mengikuti kegiatan OSIS saja, sudah dua tahun menjabat sebagai anggota organisasi ini membuatnya bisa naik pangkat dari anggota menjadi ketua Seksi Kebersihan Lingkungan. Di mana tugasnya memiliki keterkaitan dengan kebersihan diri maupun lingkungan sekolah. Apalagi untuk acara-acara yang besar dan membutuhkan gotong royong teman-temannya untuk menjaga kebersihan lingkungan kegiatan.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Bulan depan akan diadakan acara tujuh belasan yang membuat anggota OSIS dan PMR yang turut membantu menyukseskan acara akan cukup sibuk dalam bergotong royong demi kelancaran acara yang akan diadakan nantinya. Beberapa lomba yang akan diikutsertakan juga sudah didafatarkan untuk memeriahkan acara. Rapat diketuai oleh Alfi yang nantinya hasil rapat akan disampaikan kepada Rian sang ketua OSIS untuk disikusikan selanjutnya. Alfi hanya menyampaikan pion-poi penting mengenai acara yang sudah ia diskusikan bersama beberapa guru yang menjadi Pembina organisasi ini agar nantinya acara akan berjalan dengan baik.
            </p>
            <p style="text-indent: 22px; margin: 10px 50px;">
              Rapat menghabiskan waktu sekitar dua jam lebih dan sekarang sudah pukul setengah enam sore. Wajah-wajah yang sudah kusam sepulang sekolah, semakin kusam ketika rapat telah usai. Sebelum program kegiatan di mulai nantinya, Emia dan teman-teman seorganisasinya harus menyiapkan mental dan fisik agar program kerja mereka memberikan hasil yang baik nantinya. 
            </p>
    </main>

    <div style="display: flex;">
            <div style="flex-grow: 1; text-align: center;">
                <br><br>
                <h1>Ayo lihat koleksi Cerpen <a href="katalog.php">disini!</a></h1>
                <p style="font-size: 20px;">Temukan cerita terbaru!</p> 
            </div>

            <div style="flex-grow: 1">
              <center>
                <img src="images/login-page.jpg" alt="" width="300px" height="300px"> 
              </center>
            </div>
    </div>
        <br><br>
    <div>
      <center>
        <h1>Tau Ga sih?</h1>
        <h3>The Star and I - Ilana Tan</h3>
        <img src="images/berita.png" alt="" width="200px">
      </center>
        <p style="text-indent: 22px; margin: 10px 50px; font-size: 20px;">Kembali dari masa hiatusnya, Ilana Tan melanjutkan kisah trilogi New York. Buku pertamanya adalah Sunshine Becomes You (2012) dan sudah diadaptasi ke film layar lebar. Trilogi New York ini benar-benar ditunggu kisah kelanjutannya, apalagi rentang dari buku kedua, In A Blue Moon (2015), ke buku yang ketiga ini terpaut lima tahun penantian.</p>
    </div>
    
    <br>  <br>  

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