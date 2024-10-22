<?php
// Array Produk 1
$produk1 = array(
    "nama" => "Laptop Gaming",
    "deskripsi" => "Laptop dengan spesifikasi tinggi untuk gaming.",
    "harga" => 15000000,
    "gambar" => "laptop_gaming.jpg"
);

// Array Produk 2
$produk2 = array(
    "nama" => "Smartphone Flagship",
    "deskripsi" => "Smartphone dengan performa terbaik dan kamera canggih.",
    "harga" => 10000000,
    "gambar" => "smartphone_flagship.jpg"
);

// Array Produk 3
$produk3 = array(
    "nama" => "Headphone Wireless",
    "deskripsi" => "Headphone tanpa kabel dengan kualitas suara jernih.",
    "harga" => 2000000,
    "gambar" => "headphone_wireless.jpg"
);

// Array Produk 4
$produk4 = array(
    "nama" => "Smartwatch",
    "deskripsi" => "Jam tangan pintar dengan fitur kesehatan dan notifikasi.",
    "harga" => 3000000,
    "gambar" => "smartwatch.jpg"
);

// Array Produk 5
$produk5 = array(
    "nama" => "Kamera Mirrorless",
    "deskripsi" => "Kamera compact dengan kualitas foto profesional.",
    "harga" => 12000000,
    "gambar" => "kamera_mirrorless.jpg"
);

// Array Produk 6
$produk6 = array(
    "nama" => "Tablet",
    "deskripsi" => "Tablet serbaguna untuk hiburan dan produktivitas.",
    "harga" => 5000000,
    "gambar" => "tablet.jpg"
);

// Menggabungkan semua produk ke dalam satu array
$produkList = array($produk1, $produk2, $produk3, $produk4, $produk5, $produk6);

// Menampilkan semua produk
foreach ($produkList as $produk) {
    echo "Nama Produk: " . $produk["nama"] . "<br>";
    echo "Deskripsi: " . $produk["deskripsi"] . "<br>";
    echo "Harga: Rp" . number_format($produk["harga"], 0, ',', '.') . "<br>";
    echo "Gambar: " . $produk["gambar"] . "<br><br>";
}
?>
