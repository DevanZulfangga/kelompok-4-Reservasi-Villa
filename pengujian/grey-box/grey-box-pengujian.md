# Gray Box Testing


1.🔧 Orthogolanal Array Testing

Tujuan: Menguji kombinasi input secara sistematis agar semua kombinasi penting diuji tanpa pengujian yang berlebihan.

| No | Email              | Password                                      | Tanggal Booking                                    | File upload                                           | Hasil             |
| -- | ---------------------- | ----------------------------------------- | -------------------------------------------------------------- | --------------------------------------------------------- |--------------------------------------------------------- |
| 1  | Valid   | valid  |     valid              | Valid (.jpg) | Booking Sukses
| 2  | Kosong  | Valid  |     Valid               | Valid (.jpg) | Eror:Email Wajid diisi
| 3  | Valid   | Kosong | Valid | Valid (.jpg) | Eror:password wajib diisi
| 4  | Valid   | Kosong | Valid | Valid (.jpg) | Eror:password wajib diisi
| 5  | Valid   | Kosong | Valid | Valid (.exe) | Eror:File ditolak
| 6  | InValid | Kosong | Valid | Valid (.jpg) | Eror:Format email salah



2. 🔄 Matrix Testing: integraasi antar modul

Tujuan: Menguji integrasi antar modul, apakah data antar modul saling terhubung dengan baik.

| **No** | **Modul**  | **Terkoneksi Ke** | **Status** |
| ------ | ---------- | ----------------- | ---------- |
| 1      | Register   | Login             | OK         |
| 2      | Login      | Booking           | OK         |
| 3      | Booking    | Pembayaran        | OK         |
| 4      | Pembayaran | Riwayat Booking   | OK         |
| 5      | Admin      | Manajemen Data    | OK         |

  
3. 🔁 Regression Testing

Tujuan: Menguji bahwa fitur lama tetap berjalan normal setelah adanya penambahan/modifikasi fitur baru.

| **No** | **Perubahan**                        | **Dampak Diuji**     | **Status** | **Gambar** |
| ------ | ------------------------------------ | ------------------------------------ | -------------------- | ---------- |
| 1      | Penambahan validasi email            | Registrasi           | OK         |![Register](regis.png)
| 2      | Penambahan validasi file upload      | Booking & Pembayaran | OK         |
| 3      | Penambahan pengecekan tanggal lampau | Booking              | OK         |
| 4      | Perbaikan session timeout            | Login & Dashboard    | OK         |


4. 🧩 Pattern Testing – Identifikasi Pola Kesalahan Umum

Tujuan: Mengidentifikasi pola-pola kesalahan yang sering terjadi selama pengujian.

| **No** | **Pola Error**           | **Contoh**          | **Penanganan**            |
| ------ | ------------------------ | ------------------- | ------------------------- |
| 1      | Email tidak valid        | `"userexample.com"` | Validasi muncul           |
| 2      | Password salah           | `"wrongpass"`       | Error login               |
| 3      | Tanggal lampau           | `"01-01-2023"`      | Error tanggal tidak valid |
| 4      | File upload bukan gambar | `".exe"`            | File ditolak              |
| 5      | SQL Injection            | `"' OR 1=1 --"`     | Input diblok, log direkam |



