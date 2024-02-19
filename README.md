# Alat Enkripsi dan Dekripsi MD5

Alat web sederhana ini memungkinkan Anda untuk mengenkripsi dan mendekripsi pesan menggunakan algoritma hash MD5.

## Fitur

- **Enkripsi:** Masukkan pesan Anda, dan alat ini akan menghasilkan hash MD5-nya.
- **Dekripsi:** Karena MD5 adalah fungsi hash satu arah, dekripsi tidak mungkin dilakukan. Alat ini akan menampilkan pesan yang mengindikasikan hal ini.

## Cara Menggunakan

1. Clone repositori ini ke komputer lokal Anda.
2. Buka direktori tempat Anda mengkloning repositori tersebut.
3. Buka `index.php` di peramban web.

## Penggunaan

1. Masukkan pesan Anda di bidang input "Masukkan pesan Anda".
2. Klik tombol "Enkripsi" untuk menghasilkan hash MD5 dari pesan Anda.
3. Jika Anda mencoba mendekripsi hash dengan mengklik tombol "Dekripsi", alat ini akan menampilkan pesan yang menunjukkan bahwa dekripsi tidak mungkin dilakukan.

## Teknologi yang Digunakan

- PHP
- HTML
- CSS (Bootstrap)

## Penyangkalan

Harap dicatat bahwa MD5 adalah algoritma hash satu arah. Meskipun dapat digunakan untuk verifikasi integritas data, sebaiknya tidak digunakan untuk tujuan kriptografi karena rentan terhadap serangan tabrakan.

## Lisensi

Projek ini dilisensikan di bawah [Lisensi MIT](LICENSE).
