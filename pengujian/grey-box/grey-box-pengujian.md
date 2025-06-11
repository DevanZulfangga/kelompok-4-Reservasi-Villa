# Gray Box Testing


1. Pengujian booking villa

| No | Tase Case              | Aksi                                      | Validasi UI                                                    | Ekspektasi                                           |
| -- | ---------------------- | ----------------------------------------- | -------------------------------------------------------------- | --------------------------------------------------------- |
| 1  | Input tanggal kosong   | Klik tombol "Pesan" tanpa isi tanggal  | Muncul alert SweetAlert "Gagal!" | Muncul peringatan Gagal |
| 2  | Input Lama Sewa kosong         | Klik tombol "Pesan" tanpa isi Lama Sewa | Muncul alert SweetAlert "Gagal!"                              | Muncul peringatan Gagal                         |
| 3  | Input Tanggal & Lama sewa diisi       | Klik tombol "Pesan" | Alert: "Berhasil "                            | Muncul peringatan "Berhasil" pindah ke pembayaran                          |

2. Pengujian Pembayaran villa

| No | Tase Case              | Aksi                                      | Validasi UI                                                    | Ekspektasi                                           |
| -- | ---------------------- | ----------------------------------------- | -------------------------------------------------------------- | --------------------------------------------------------- |
| 1  | Tidak Input Pembayaran     | Klik tombol "Bayar"  | Muncul alert SweetAlert "Pembayaran Gagal!" | Muncul peringatan Pembayaran Gagal |
| 2  | Input Pembayaran         | Klik tombol "Bayar"  | Muncul alert SweetAlert "Berhasil "                              | Pembayaran tersimpan ke database                         |
  



