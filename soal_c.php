<?php
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nama Produk</th>";
echo "<th>Stok</th>";
echo "<th>Harga</th>";
echo "<th>Jumlah</th>";
echo "</tr>";

$data = array(
    array(1, "Pepsodent", 30, 10000),
    array(2, "Sunlight", 15, 11000),
    array(3, "Baygon", 10, 16000),
    array(4, "Dove", 20, 22000),
    array(5, "Rinso", 20, 20000),
    array(6, "Downy", 15, 12000),
    array(7, "Le Mineral", 25, 5000),
);

$totalJumlah = 0; 

foreach($data as $row) {
    echo "<tr>";
    $jumlah = $row[2] * $row[3]; 
    $totalJumlah += $jumlah; 
    $row[] = $jumlah; 
    foreach($row as $column) {
        echo "<td>$column</td>";
    }
    echo "</tr>";
}

echo "</table>";

echo "Total Jumlah: " . $totalJumlah; 

$diskon = 0; 

if ($totalJumlah >= 100000) {
    $diskon = 0.1; // Diskon 10%
} elseif ($totalJumlah >= 200000) {
    $diskon = 0.2; // Diskon 20%
}

if ($diskon > 0) {
    $totalDiskon = $totalJumlah * $diskon; 
    $totalBayar = $totalJumlah - $totalDiskon; 
    echo "<br>Discount: " . ($diskon * 100) . "%"; 
    echo "<br>Total yang harus dibayar setelah diskon: " . $totalBayar;
}
?>