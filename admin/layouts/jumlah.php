<?php

// Pendaftar
$pendaftar = query("SELECT * FROM pendaftar WHERE stat = 'Menunggu Keputusan' ");
// Pendaftar

// Jurusan
$jurusan = query("SELECT * FROM jurusan");
// Jurusan

// RPL
$prakweb = query("SELECT * FROM pendaftar WHERE asdos = 'Praktikum Web' AND  stat = 'Menunggu Keputusan' ");

$prakweb1 = count($prakweb);
$total_prakweb = $prakweb1;
// RPL

// TKJ
$prakmobile = query("SELECT * FROM pendaftar WHERE asdos = 'Praktikum Mobile' AND  stat = 'Menunggu Keputusan' ");

$prakmobile1 = count($prakmobile);
$total_prakmobile = $prakmobile;
// TKJ

// MM
$prakalgo = query("SELECT * FROM pendaftar WHERE asdos = 'Praktikum Algoritma' AND  stat = 'Menunggu Keputusan' ");
$prakalgo1 = count($prakalgo);
$total_prakalgo = $prakalgo1;
// MM

// Terima
$terima_prakweb = query("SELECT * FROM terima WHERE jurusan = 'Praktikum Web' ");
$j_prakweb = count($terima_prakweb);
$terima_prakmobile = query("SELECT * FROM terima WHERE jurusan = 'Praktikum Mobile' ");
$j_prakmobile = count($terima_prakmobile);
$terima_prakalgo = query("SELECT * FROM terima WHERE jurusan = 'Praktikum Algoritma' ");
$j_prakalgo = count($prakalgo);
// 

// Tolak
$tolak = query("SELECT * FROM pendaftar WHERE stat = 'Ditolak' ");
$j_tolak = count($tolak);
// Tolak

// Terima
$terima = query("SELECT * FROM terima");
// Terima

?>