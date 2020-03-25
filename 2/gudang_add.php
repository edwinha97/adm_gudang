<?php
include "../koneksi.php";

$id_gdg	= $_POST["id_gdg"];
$nm_gudang	= $_POST["nm_gudang"];

if($add = mysqli_query($konek, "INSERT INTO tb_gudang (id_gdg, nm_gudang) VALUES ('$id_gdg', '$nm_gudang')")){
	header("Location: gudang.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>