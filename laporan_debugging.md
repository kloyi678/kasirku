# LAPORAN DEBUGGING KASIRKU

### Bug 1 - Penambahan Produk tidak bisa

### Nama Bug
Error 500 saat membuka halaman tambah 
produk.

### Halaman yang Bermasalah
web.php
Bagian :
Route::get('/create', [ProdukController::class, 'creates'])->name('create');

### Penyebab
Keselahan penulisan atau migrasi yang tuju mengakibatkan
tidak bisa membuka halaman produk.

harusnya :
  Route::get('/create', [ProdukController::class, 'create'])->name('create');
   karna nama Views yg di panggil salah "create -> creates".

### Solusi 
Melihat/mengecek 'Storage/logs/laravel.log' untuk melihat dimana
letak error nya,
    
dan yg bermasalah hanya pada kesalahan pemanggilan di bagian 'class'
solusinya,
Hanya memperbaiki nama nama nya saja
"creates -> create" sesuai yg ada di views.

### Status 
** FIXED **
