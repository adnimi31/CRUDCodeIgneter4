CRUD ini dibuat oleh AM
Silahkan digunakan dengan gratis, mohon jagan hapus creditnya ini(readme.txt, maupun readme.md)

===========================================================================

spesifikasi:

*CRUD ini menggunakan CodeIgniter4, untuk spesifikasi bisa menjalankanya bisa kunjungi dokumentasi nya di https://codeigniter.com/user_guide/index.html

*CRUD ini sudah dilengkapi dengan library faker untuk mengetes load jika datanya banyak

*CRUD ini sudah mengimplementasikan modal

===========================================================================

point penting:
*semua settingan dasar ada di file .env

*jika ingin menghosting app ini cek dulu apakah webhost mendukung .env file atau tidak, jika tidak bisa melakukan setting secara manual 

 	seperti : -base url atau index page berada di folder app/Config/App.php
 		  -database setting berada di folder app/Config/Database.php

*struktur database sudah saya buatkan di migration yg terletak di folder app/Databse/Migrations , jika saya lupa menambahkan file sql

*untuk settings/cara menggunakan faker sudah saya berikan contoh di seeder nya negara yg terletak di folder app/Databse/Seeds/NegaraSeeder.php

*untuk info faker lebih lengkapnya bisa kunjungi di https://github.com/fzaninotto/Faker#installation

===========================================================================
# Preview Aplikasi
1. Tampilan hamalan index
![Capture](https://user-images.githubusercontent.com/23350205/119840688-65f73500-bf2f-11eb-8511-a301e22eed4b.PNG)

2. Tampilan data CRUD
![Capture2](https://user-images.githubusercontent.com/23350205/119840831-845d3080-bf2f-11eb-8b97-ded6f2c5d4cc.PNG)

3. Tampilan tambah data CRUD
![Capture3](https://user-images.githubusercontent.com/23350205/119840946-9939c400-bf2f-11eb-8ce3-09f18f555ef6.PNG)

4. Tampilan edit data dengan Modal
![Capture4](https://user-images.githubusercontent.com/23350205/119841028-ace52a80-bf2f-11eb-8451-4c82b674170d.PNG)
