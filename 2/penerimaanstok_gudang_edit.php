<?php
include "../koneksi.php";

$id_pnsgdg	= $_POST["id_pnsgdg"];
$id_jenisbr	= $_POST["id_jenisbr"];
$id_gudangbr	= $_POST["id_gudangbr"];
$jumlahbr	= $_POST["jumlahbr"];
$tgl_terimabr	= $_POST["tgl_terimabr"];

if ($edit = mysqli_query($konek, "UPDATE tb_penerimaanstokgudang SET id_jenis='$id_jenisbr', id_gudang='$id_gudangbr', jumlah='$jumlahbr', tgl_terima='$tgl_terimabr' WHERE id_pnsgdg='$id_pnsgdg'")){
	header("Location: penerimaanstok_gudang.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>