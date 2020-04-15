# Membuat Halaman Index
Untuk membuat halaman index di dalam laravel kamu bisa memanfaatkan perintah  
`$ php artisan make:controller NamaControllerKamu --resource`  
*Noted : untuk `NamaControllerKamu` bisa diubah dengan nama controller kamu ya*  
- Pertama kita akan membuat halaman index untuk space dan ketikan perintah berikut ini  
`$ php artisan make:controller SpaceController --resouce` sampai muncul bahwa controller sudah dibuat seperti ini.  
![screenshot created controller Space](https://link)  
setelah controller untuk space telah terbuat selanjutnya adalah menambahkan  
```php 
public function __construct(){ 
    $this->middleware(['auth']); 
    }
``` 
dimana function tersebut untuk mengautentikasi bahwa halaman space hanya bisa diakses jika sudah login.  
- Setelah menambahkan function untuk `auth` halaman, selanjutnya adalah menambahkan `return view` untuk `function index()` yang ada dicontroller yang sama. 
```php
public function index(){
    return view('pages.space.index');
    }
```
disini kamu harus membuat folder terlebih dahulu dengan lokasi nya di `/your-folder/resources/views/pages/space` lalu buat file php dengan nama `index.blade.php` untuk halaman yang akan ditampilkan sebagai index space. lalu isikan default dari file `home.blade.php` 

# Membuat Components
Untuk membuat components yang bisa dilakukan adalah membuat folder terlebih dahulu untuk menyimpan components yang dibuat. apa itu components dan manfaat membuat components?  
  
Components bersifat `modular` dan bisa dipakai di berbagai tempat. semisal kita punya components button login. button login bisa di pakai di halaman utama, di halaman form dan halaman website yang lain.
- Buat folder dengan nama `components` yang lokasinya di `/yourFolderProject/resources/views/components` lalu buat file dengan nama `space.blade.php` dan masukan kode seperti berikut ini
```html
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="d-flex justify-content-between mb-3">
            <div id="create-space">
                <a href="#" class="btn btn-primary">Pin!</a>
            </div>
            <div id="view-space">
                <a href="" class="btn btn-secondary"><i class="fas fa-list"></i></a> |
                <a href="" class="btn btn-secondary"><i class="fas fa-globe"></i></a>
            </div>
        </div>
    </div>
</div>
```
Lalu bagaimana untuk menampilkan components yang sebelumnya dibuat? 
untuk memanggil components yang dibuat kamu bisa menggunakan tag berikut dan referensi yang ada di [dokumentasi laravel](https://laravel.com/docs/7.x/blade#displaying-components).  

```php
<div class="container">
    <x-namafilecomponents/>
    <div class="row justify-content-center">
    </div>
</div>
```

# Menambahkan Routes
Untuk menambahkan routes kamu bisa membuka file `web.php` di dalam folder `routes ` lalu ubah dengan menambahkan baris kode berikut ini.  
```php
Route::resource('space', 'SpaceController');
```