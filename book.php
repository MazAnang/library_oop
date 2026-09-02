<?php
class Book {
	private $judul;
	private $penulis;
	private $tahun;
	private $stok;

	public function __construct($judul, $penulis, $tahun, $stok) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->tahun = $tahun;
		$this->stok = $stok;
	}

	public function getJudul() {
		return $this->judul;
	}

	public function getPenulis() {
		return $this->penulis;
	}

	public function getTahun() {
		return $this->tahun;
	}

	public function getStok() {
		return $this->stok;
	}

	public function pinjam() {
		if ($this->stok > 0) {
			$this->stok--;
			return true;
		}
		return false;
	}

	public function Data() {
		return "Judul: {$this->judul} | Penulis: {$this->penulis} | Tahun: {$this->tahun} | Stok: {$this->stok}";
	}
}
?>
