<?php
	//membuat class
	class hewan{
		public $nama;
		public $umur;
		public $warna;
	}
	//membuat objek
	$hewan= new hewan;
	$hewan->nama="Bebek_198160002";
	$hewan->umur="3 bulan";
	$hewan->warna="Yellow";

	//memanggil properti dari objek
	echo "$hewan->nama<br>";
	echo "Berenang <br>";
	echo "Suara : webek-webeek <br>";
	echo "Usia : $hewan->umur <br>";
	echo "$hewan->warna <br>";