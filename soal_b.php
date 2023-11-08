
<?php

$barang = array(
    array("Nama Produk" => "Pepsodent", "Jumlah" => 2, "Harga" => 10000),
    array("Nama Produk" => "Rinso", "Jumlah" => 3, "Harga" => 20000),
    array("Nama Produk" => "Downy", "Jumlah" => 2, "Harga" => 12000),
    array("Nama Produk" => "Dove", "Jumlah" => 2, "Harga" => 22000)
);

function hitungTotalJumlah($barang) {
    $totalJumlah = 0;
    foreach ($barang as $item) {
        $totalJumlah += $item['Jumlah'] * $item['Harga'];
    }
    return $totalJumlah;
}

$totalJumlah = hitungTotalJumlah($barang);

$diskon = 0;
if ($totalJumlah >= 100000) {
    $diskon = 0.1; // 10%
} elseif ($totalJumlah >= 200000) {
    $diskon = 0.2; // 20%
}

$totalBayar = $totalJumlah - ($totalJumlah * $diskon);

echo "Tanggal Transaksi: 08 November 2023<br>";
echo "<table border='1'>";
echo "<tr><th>Nama Produk</th><th>Jumlah</th><th>Harga</th></tr>";

usort($barang, function($a, $b) {
    return strcmp($a['Nama Produk'], $b['Nama Produk']);
});

foreach ($barang as $item) {
    echo "<tr>";
    echo "<td>" . $item['Nama Produk'] . "</td>";
    echo "<td>" . $item['Jumlah'] . "</td>";
    echo "<td>" . $item['Harga'] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo " Total Jumlah: " . $totalJumlah . " Rupiah<br>";
echo " Diskon: " . ($diskon * 100) . "%<br>";
echo " Total Pembayaran: " . $totalBayar." Rupiah";
?>
