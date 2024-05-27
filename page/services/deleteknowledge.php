<?php
include('../helper/koneksi.php');
$query="DELETE from basispengetahuan where namapenyakit='".$_GET['id']."'";
mysqli_query($konek_db, $query);
header("location:../admin/knowledge.php");
?>