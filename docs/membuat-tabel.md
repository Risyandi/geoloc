# Membuat tabel
Untuk membuat tabel di project ini kita akan menggunakan perintah `make:model` dan hal yang dilakukan adalah sebagai berikut.
- Ketikan perintah `php artisan make:model -m` untuk membuat model dan migrasi nya dan nantinya model akan dibuat beserta file migrasi nya seperti  ini
![screenshot create model and migrate](https://link)  
setelah proses selesai langkah selanjutnya membuat sebuah field ke tabel yang sebelumnya dibuat menggunakan perintah `make:model`.  
- Caranya adalah dengan cara masuk ke folder `database/migration/..` lalu cari file yang sebelumnya telah dibuat. lalu tambahkan field seperti ini  
a. File migration space_table
![screenshoot field migration space_table](https://link)  
b. File migration space_photo_table
![screenshoot field migration space_photo_table](https://link)  
setelah membuat field di dalam file migration tersebut, langkah selanjutnya membuat relasi tabel.
- Untuk membuat relasi tabel yang dilakukan adalah dengan masuk kedalam folder `app/..` lalu cari file User, Space, SpacePhoto. lalu ubah file tersebut dan yang harus dirubah dan ditambahkan adalah seperti ini.  
a. User  
![screenshot User ](https://link)  
b. Space  
![screenshot User ](https://link)  
c. SpacePhoto    
![screenshot User ](https://link)  
- Setelah menambahkan relasi, langkah selanjutnya adalah melakukan proses migrate field tabel yang dibuat sebelumnya kedalam database. ketikan perintah ini untuk menjalankan migrate `php artisan migrate` dan hasilnya akan seperti ini.  
![screenshot process migrate](https://link)