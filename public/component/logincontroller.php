<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'db_connection.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($connection,"SELECT * FROM tbl_users where username='$username' and password='$password'");

$cek = mysqli_num_rows($result);

if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['username'] = $username;
	$_SESSION['name'] = $data['name'];
	$_SESSION['status'] = "has_login";
	$_SESSION['id'] = $data['id'];
	header("location:welcome.php");
} else {
	header("location:login.php?pesan=Username atau Password ada tidak valid.");
}
?>
