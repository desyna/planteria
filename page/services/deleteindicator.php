<?php
include('../helper/koneksi.php');
$query="DELETE from gejala where idgejala='".$_GET['id']."'";
mysqli_query($konek_db, $query);
header("location:../admin/indication.php");
?>