<?php
// agar browser mengetahui type data yang dihasilkan
header('Content-Type: application/json');

// ambil data dari request
$request = file_get_contents('php://input');

// ubah data json menjadi array
$data = json_decode($request, true);

// simpan dalam variabel
$Pbangunan = $data['Pbangunan'] * 100;
$Lbangunan = $data['Lbangunan'] * 100;
$Pkeramik = $data['Pkeramik'];
$Lkeramik = $data['Lkeramik'];
$Isi = $data['Isi'];

// masukkan rumus perhitungan
$luasRuangan = $Pbangunan * $Lbangunan;
$luasKeramik = $Pkeramik * $Lkeramik;
$luasPerdus = $luasKeramik * $Isi;

$jumlahDusKeramik = 0;

while ($luasRuangan >= $luasPerdus) {
    $jumlahDusKeramik++;
    $luasRuangan -= $luasPerdus;
}

// kembalikan data hasil perhitungan dalam bentuk json
echo json_encode(['JumlahDusKeramik' => $jumlahDusKeramik]);
