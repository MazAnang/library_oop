<?php
require_once __DIR__ . '/book.php';

$buku1 = new Book("Bumi", "Tere Liye", 2014, 8);
$buku2 = new Book("Bulan", "Tere Liye", 2015, 1);
$buku3 = new Book("Matahari", "Tere Liye", 2016, 2);
$book4 = new Book("Bintang", "Tere Liye", 2016, 20);

echo "List Buku yang tersedia : <br>";
echo $buku1->Data() . "<br>";
echo $buku2->Data() . "<br>";
echo $buku3->Data() . "<br>";
echo $book4->Data() . "<br><br>";
?>
