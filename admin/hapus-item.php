<?php 
require 'functions.php';
$id = $_GET["id"];
if (hapusitem($id) > 0 ) {
	echo "
		<script>
			alert('Konten berhasil dihapus!');
			document.location.href = 'index.php';
		</script>
	";
    } else {
	echo "
		<script>
			alert('Konten gagal dihapus!');
			document.location.href = 'index.php';
		</script>
	";
	}
 ?>