<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id_pelamar = stripslashes(strip_tags(htmlspecialchars($_POST['id_pelamar'] ,ENT_QUOTES)));
	$nama_pelamar = stripslashes(strip_tags(htmlspecialchars($_POST['nama_pelamar'] ,ENT_QUOTES)));
	$no_hp = stripslashes(strip_tags(htmlspecialchars($_POST['no_hp'] ,ENT_QUOTES)));
	$email = stripslashes(strip_tags(htmlspecialchars($_POST['email'] ,ENT_QUOTES)));
    $jurusan = stripslashes(strip_tags(htmlspecialchars($_POST['jurusan'] ,ENT_QUOTES)));
    

	$query = "UPDATE master_pelamar SET nama_pelamar=?, no_hp=?, email=?, jurusan=? WHERE id_pelamar=?";
    $pelamar = $koneksi->prepare($query);
    $pelamar->bind_param("ssssi", $nama_pelamar, $no_hp, $email, $jurusan, $id_pelamar);
    
    if ($pelamar->execute()) {
    	echo "<script>alert('Data Berhasil Diubah');location='home.php?page=pelamar';</script>";
    } else {
    	echo "<script>alert('Error');window.history.go(-1);</script>";
    }
}

$db1->close();
?>