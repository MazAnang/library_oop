<?php
class Member {
	private $id;
	private $nama;
	private $alamat;

	public function __construct($id, $nama, $alamat) {
		$this->id = $id;
		$this->nama = $nama;
		$this->alamat = $alamat;
	}

	public function getId() {
		return $this->id;
	}

	public function getNama() {
		return $this->nama;
	}

	public function getAlamat() {
		return $this->alamat;
	}

	public function Data() {
		return "ID: {$this->id} | Nama: {$this->nama} | Alamat: {$this->alamat}";
	}
}
?>
