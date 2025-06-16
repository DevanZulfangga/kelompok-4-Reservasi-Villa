# Gray Box Testing


1. Orthogolanal Array Testing 

| No | Email              | Password                                      | Tanggal Booking                                    | File upload                                           | Hasil             |
| -- | ---------------------- | ----------------------------------------- | -------------------------------------------------------------- | --------------------------------------------------------- |--------------------------------------------------------- |
| 1  | Valid   | valid  |     valid              | Valid (.jpg) | Booking Sukses
| 2  | Kosong  | Valid  |     Valid               | Valid (.jpg) | Eror:Email Wajid diisi
| 3  | Valid   | Kosong | Valid | Valid (.jpg) | Eror:password wajib diisi
| 4  | Valid   | Kosong | Valid | Valid (.jpg) | Eror:password wajib diisi
| 5  | Valid   | Kosong | Valid | Valid (.exe) | Eror:File ditolak
| 6  | InValid | Kosong | Valid | Valid (.jpg) | Eror:Format email salah




2. Pengujian Pembayaran villa

| No | Tase Case              | Aksi                                      | Validasi UI                                                    | Ekspektasi                                           |
| -- | ---------------------- | ----------------------------------------- | -------------------------------------------------------------- | --------------------------------------------------------- |
| 1  | Tidak Input Pembayaran     | Klik tombol "Bayar"  | Muncul alert SweetAlert "Pembayaran Gagal!" | Muncul peringatan Pembayaran Gagal |
| 2  | Input Pembayaran         | Klik tombol "Bayar"  | Muncul alert SweetAlert "Berhasil "                              | Pembayaran tersimpan ke database                         |
  



