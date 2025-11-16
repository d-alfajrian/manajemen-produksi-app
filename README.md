**Aplikasi Manajemen Produksi**

**Deskripsi**
Aplikasi manajemen produksi manufaktur ban yang dibangun menggunakan Laravel dan Laragon dengan struktur CRUD lengkap dan relasi database menggunakan hasMany dan belongsTo. Sistem ini mengelola tiga proses utama: produksi, gudang, dan distribusi barang keluar.

**Fitur Utama**
1. Tab Produksi
   
Fungsi: Mengelola data produksi ban motor

Fiturs:
- Tambah data produksi baru
- Edit data produksi existing
- Lihat detail produksi
- Hapus data produksi

Data yang dikelola:
- Kode Produksi
- Nama Barang 
- Jumlah Produksi
- Tanggal Produksi
- Keterangan

2. Tab Gudang

Fungsi: Management inventory dan stok barang

Fitur:
- Tambah barang ke gudang
- Update stok gudang
- Kelola persediaan

Data yang dikelola:
- Kode Produksi referensi dari produksi
- Nama Barang
- Jumlah barang di gudang
- Tanggal Masuk gudang

3. Tab Barang Keluar

Fungsi: Tracking distribusi dan pengiriman barang

Fitur:
- Record barang keluar
- Management tanggal distribusi

Data yang dikelola:
- Kode Produksi
- Nama Barang
- Jumlah Keluar
- Tanggal Keluar

software yang harus terinstall
Laragon
PHP 7.4+
MySQL 5.7+
