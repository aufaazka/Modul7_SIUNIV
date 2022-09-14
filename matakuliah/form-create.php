<?php
include '../connect.php';

$query ="SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tambah Data Matakuliah</h1>
<form action="create.php" method="POST">
    Kode : <input type="text" name="kode" id="kode"><br>
    Matakuliah : <input type="text" name="nama_matkul" id="nama_matkul"><br>
    SKS : <input type="text" name="sks" id="sks"><br>
    Semester : <input type="text" name="semester" id="semester"><br>
    Dosen Pengajar :  <select name="id_dosen" id="nama_dosen">
                        <option value="-">Pilih salah satu--</option>
                        <?php
                        while ($data= mysqli_fetch_assoc($result)){
                            ?>
                            <option value="<?php echo $data['id_dosen'];?>">">
                            <?php echo $data['nama_dosen']; ?>
                        </option>
                        <?php
                        }
                        ?>
                      </select>
    <input type="submit" value="Save" name="btnSimpan"><br>
</form>  
</body>
</html>