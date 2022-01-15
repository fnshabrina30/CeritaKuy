<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "cerita");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	};
	return $rows;
};

function registrasi($data) {
	global $conn;

	$username = mysqli_real_escape_string($conn, $data["username"]);
	$password_sebelum = mysqli_real_escape_string($conn, $data["password"]);
	$nama = mysqli_real_escape_string($conn, $data["nama"]);

	// cek username user sudah ada atau belum

	$cekusernameuser = "SELECT * FROM user where username='$username'";
	$prosescek= mysqli_query($conn, $cekusernameuser);

	if (mysqli_num_rows($prosescek)>0) { 
	    echo "<script>alert('Username Sudah Digunakan!');history.go(-1) </script>";
	    exit;
	}

	// enkripsi password
	$password = password_hash($password_sebelum, PASSWORD_DEFAULT);

	// Masukkan Data ke Database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', '$nama')");
	return mysqli_affected_rows($conn);
}

function tambah($data) {
	global $conn;

	// htmlspecialchars berfungsi untuk tidak menjalankan script
	$judul = htmlspecialchars($data["judul"]);
	$isi1 = htmlspecialchars($data["isi1"]);
	$isi2 = htmlspecialchars($data["isi2"]);
	$isi3 = htmlspecialchars($data["isi3"]);
	$tanggal_post = htmlspecialchars($data["tanggal_post"]);

	$gambar = upload();


		// tambahkan ke database
		// NULL digunakan karena jika dikosongkan maka akan terjadi error di database yang sudah online
		// sedangkan jika masih di localhost, bisa memakai ''
	mysqli_query($conn, "INSERT INTO konten VALUES(NULL, '$gambar', '$judul', '$isi1', '$isi2','$isi3','$tanggal_post')");
	return mysqli_affected_rows($conn);
}

function upload() {
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];


    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'images/' . $namaFileBaru);

    return $namaFileBaru;
}