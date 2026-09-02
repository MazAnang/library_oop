<?php
require_once __DIR__ . '/digitalbook.php';
require_once __DIR__ . '/member.php';

$member = new Member("2410631250017", "Farhan", "Bekasi");
echo "Nama Peminjam : <br>";
echo $member->Data() . "<br><br>";

if ($buku1->pinjam()) {
    echo "Alur peminjaman :<br>";
    echo "{$member->getNama()} berhasil meminjam buku '{$buku1->getJudul()}'.<br>";
    echo "Sisa stok buku '{$buku1->getJudul()}': {$buku1->getStok()}";
} else {
    echo "Alur peminjaman :<br>";
    echo "Buku '{$buku1->getJudul()}' sedang kosong atau stok habis.";
}
?>