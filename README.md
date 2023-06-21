# UASPPW1_22-499338-SV-21304_Green-Leaf
Repository UAS PPW1

Muhammad Haikal Adityo (22/499338/SV/21304)

Penjelasan file :

Dalam repository ini terdapat 2 folder utama, pertama index yang berisi dengan web utama, dan folder table untuk melihat isi tabel database inquiry. Dan di dalam folder index terdapat folder assets yang berisi foto” yang dipakai. Dan terdapat file inquiry.sql sebagai databasenya.


Folder index:

•	Index.php : Web utama

•	about.html : web yang diakses melalui index (tekan logo untuk balik ke index)

•	green-world.html : web yang diakses melalui index (tekan logo untuk balik ke index)

•	inquiry.php : perintah php yang menginput data form kedalam database

•	style.css : style yang dipakai untuk web

•	script.js : javascript yang dipakai untuk web (submit form, animasi, dll) 

•	carouselScript.js : javascript yang dipakai untuk div carousel yang terdapat dalam index.php (#product-carousel)


Folder table:

•	table.php : page untuk melihat isi tabel database inquiry

•	table-style.css : style css yang digunakan untuk table.php




Penjelasan page:

Page utama :

•	Web ini untuk perusahaan buatan saya (Green Leaf) yang berjualan teh. Maka web ini memiliki tema hijau.

•	Header mempunyai position sticky. Mempunyai animasi apabila sedang scroll kebawah maka akan dihide, apabila sedang scroll ke atas maka banner akan terlihat.

•	Category masih hanya sebagai hiasan.

•	Content berisi info mengenai perusahaan ini.

•	Carousel untuk menunjukan produk the unggulan dengan cara yang menarik.

•	Form untuk memberi tanggapan dari pengunjung web yang hasilnya diinput kedalam database. 


Komponen utama form agar hasilnya diinput kedalam database adalah Javascript dan PHP.


Script.js (Javascript) :

Dalam kode script.js, terjadi penanganan pengiriman formulir (form submission). Ketika formulir dengan id "form" disubmit, fungsi ini akan dijalankan. Fungsi tersebut mencegah perilaku default dari pengiriman formulir menggunakan e.preventDefault(). Kemudian, nilai dari field-form seperti nama, email, dan pesan diambil menggunakan metode jQuery "$('#name').val()", "$('#email').val()", dan "$('#message').val()". Data ini kemudian dikirimkan ke script PHP "inquiry.php" menggunakan metode AJAX dengan metode HTTP POST. Jika permintaan berhasil, maka fungsi success akan dijalankan. Pada fungsi ini, pesan terima kasih akan ditampilkan, form akan disembunyikan, dan halaman akan digulirkan ke bawah secara perlahan. Jika terjadi kesalahan, fungsi error akan dijalankan dan pesan kesalahan akan ditampilkan. Kembalikan nilai false untuk mencegah perilaku default pengiriman formulir.

Inquiry.php (php) :

File "inquiry.php" adalah sebuah script PHP yang melakukan koneksi ke database MySQL menggunakan informasi yang diberikan (seperti nama server, username, password, dan nama database). Setelah koneksi berhasil, script tersebut mengatur zona waktu dan memeriksa jika metode permintaan adalah "POST". Jika permintaan POST terdeteksi, script akan mengambil nilai dari field-form yang diterima (seperti nama, email, dan pesan), memeriksa apakah field-form tersebut tidak kosong, dan jika tidak kosong, melakukan operasi database. Operasi database meliputi menghitung jumlah baris dalam tabel "inquiry", menghasilkan ID baru untuk data yang akan disimpan, mengambil tanggal saat ini, dan menyimpan data tersebut ke dalam tabel "inquiry". Jika operasi database berhasil, script akan mengirimkan respons JSON dengan status "success" dan pesan "Message sent successfully". Jika terjadi kesalahan dalam operasi database, respons JSON akan memiliki status "error" dan pesan "Failed to send message". Jika terdapat field-form yang kosong, respons JSON akan memiliki status "error" dan pesan "Please fill out all the fields". Setelah semua operasi selesai, script akan menutup koneksi database.


Page table :

Berguna untuk melihat data yang terdapat pada tabel inquiry (data dari form).
