<?php
include '../connect.php';
$id_dosen=$_POST['id_dosen'];
$nama_dosen=$_POST['nama_dosen'];
$telp = $_POST ['telp'];

$query=" UPDATE dosen SET nama_dosen= '$nama_dosen', telp='$telp' WHERE id_dosen =$id_dosen";
$result = mysqli_query($connect, $query);
// echo $query;
$row = mysqli_affected_rows($connect);

if($row > 0){
    echo"Berhasil ubah data" ;
}else{
echo"Gagal ubah data";
}
echo"<a href='read.php'Lihat Data<a/>;"
?>


