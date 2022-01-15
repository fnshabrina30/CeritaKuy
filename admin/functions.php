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


function hapusitem($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM konten WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;
     
    // htmlspecialchars berfungsi untuk tidak menjalankan script
	$id = htmlspecialchars($data["id"]);
	$gambar = htmlspecialchars($data["gambar"]);
	$judul = htmlspecialchars($data["judul"]);
	$isi1 = htmlspecialchars($data["isi1"]);
	$isi2 = htmlspecialchars($data["isi2"]);
	$isi3 = htmlspecialchars($data["isi3"]);
	$tanggal_post = htmlspecialchars($data["tanggal_post"]);

	$query = "UPDATE konten SET
				gambar = '$gambar',
				judul = '$judul',
				isi1 = '$isi1',
				isi2 = '$isi2',
				isi3 = '$isi3',
				tanggal_post = '$tanggal_post'
			  WHERE id = $id
			";
			
	mysqli_query($conn, $query);

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
    move_uploaded_file($tmpName, '../images/' . $namaFileBaru);

    return $namaFileBaru;
}