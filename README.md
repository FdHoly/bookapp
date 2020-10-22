Joey Vilbert 185150707111001
Step : 

1. Membuka command prompt windows dan menjalankan composer create-project --prefer-dist laravel/lumen bookapp, proses akan membuat direktori bookapp didalam folder user

2. Membuka phpmyadmin xampp dan membuat database baru "bookapp_lumen"

3. Menyetup file .env sesuai dengan environment database

4. Mengubah file app.php menghilangkan comment yang diperlukan

5. Membuat migration dengan run command "php artisan make:migration create_books_table --create=books" di terminal visual studio code

6. Menyesuaikan file migration yang dibuat dengan title ,desc, auth

7. Menjalankan perintah php artisan migrate

8. Membuat seeder di file DatabaseSeeder.php dengan isi title, description, author, created_at, dan updated_at

9. Menjalankan perintah "php artisan db:seed"

10. Membuat model dengan file Book.php dengan mendefinisikan atribut dari tabel

11. Membuat Controller menyesuaikan dengan kode modul untuk mereturn Book dan menambahkan line use App\Models\Book;

12. Membuat route untuk membuka menjalankan method index

13. Menjalankan aplikasi dengan perintah php -S localhost:8081 -t public

14. Menambahkan method di controller show($id) untuk menampilkan detail buku sesuai dengan id

15. Menambahkan route di web.php untuk mengakses database sesuai dengan id

16. Mengedit file README.md di direktori bookapp

17. Menginitiate git dengan git init

18. Commit file dengan git add . 

19. Membuat commit dengan git commit -m "BookApp Commit Lengkap"

20. Menambahkan link repo dengan git remote add origin "https://github.com/FdHoly/bookapp.git"

21. Melakukan push terakhir dengan perintah "git push -u origin master"