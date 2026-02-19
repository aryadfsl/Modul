Index.html

•  <!DOCTYPE html> → Menandakan dokumen HTML5.
•  <html lang="id"> → Bahasa halaman Indonesia.
•  <meta charset="UTF-8"> → Encoding karakter agar simbol/teks normal.
•  <title> → Judul tab browser.


•
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css"/>
Bootstrap digunakan untuk mempercepat pembuatan tampilan seperti navbar, card, grid, dan form, sedangkan style.css berisi styling tambahan.


•
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">CIBADUYUT SHOES</a>
Navbar berfungsi sebagai menu navigasi dengan tema gelap dan responsif.


•
<div class="hero text-center text-white d-flex align-items-center">
<h1>Sistem Manajemen Sepatu</h1>
<p>Kelola Data Sepatu dengan Mudah</p>
banner utama dengan background gambar.


•  <div class="card dashboard-card">
<h5>Total Produk</h5>
<h2>12</h2>
</div>
Menampilkan jumlah produk, stok, dan kategori. Data masih statis.


•  <div class="card mb-4">
<img src="assets/NIKE_P_6000.jpg" class="card-img-top"/>
<h5 class="card-title">Nike P-6000</h5>
<p>Harga: Rp 1.429.000</p>
<p>Stok: 10</p>
<button class="btn btn-primary">Detail</button>
</div>
Card menampilkan gambar sepatu, harga, stok, dan tombol detail.


•  <form>
<input type="text" class="form-control" placeholder="Masukkan nama sepatu">
<input type="number" class="form-control" placeholder="Masukkan harga"> 
<input type="number" class="form-control" placeholder="Masukkan stok">
<select class="form-select">
<option>Running</option>
<option>Basket</option>
<option>Casual</option>
</select>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
Form ini digunakan untuk input data sepatu, namun belum terhubung database.


•  <footer class="bg-dark text-white text-center p-3">
@ 2026 Sistem Manajemen Sepatu
</footer>
Footer berfungsi sebagai penutup halaman website.


Style.css
•
body {
font-family: Arial, sans-serif;
background-color: #f0f8ff;
} Penjelasan:
-font-family digunakan untuk menentukan jenis huruf (Arial).
- background-color memberi warna latar belakang biru muda.

•  .hero {
height: 400px;
background-image: url("../assets/background.jpg");
background-size: cover; background-position: center; background-repeat: no-repeat; position: relative;
} Penjelasan:
- height mengatur tinggi banner 400px.
- background-image menampilkan gambar background.
- background-size: cover agar gambar memenuhi area.
- background-position: center supaya gambar di tengah.
- background-repeat: no-repeat agar gambar tidak berulang.

•  .dashboard {
transition: 0.3s;
}

.dashboard:hover {
transform: scale(1.05);
} Penjelasan: 
- transition memberi efek animasi halus.
- transform: scale(1.05) membuat card membesar sedikit saat cursor diarahkan.

•  footer {
margin-top: 50px;
} Penjelasan:
Memberikan jarak antara footer dengan konten di atasnya agar tampilan tidak terlalu rapat.
