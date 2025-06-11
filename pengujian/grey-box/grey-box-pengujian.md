# Gray Box Testing


1. Pengujian booking villa

| No | Tase Case              | Aksi                                      | Validasi UI                                                    | Ekspektasi                                           |
| -- | ---------------------- | ----------------------------------------- | -------------------------------------------------------------- | --------------------------------------------------------- |
| 1  | Input tanggal kosong   | Klik tombol "Pesan" tanpa isi tanggal  | Muncul alert SweetAlert "GAgal!" | Muncul peringatan Gagal |
| 2  | Input Lama Sewa kosong         | Klik tombol "Pesan" tanpa isi Lama Sewa | Muncul alert SweetAlert "GAgal!"                              | Muncul peringatan Gagal                         |
| 3  | Input Tanggal & Lama sewa diisi       | Klik tombol "Pesan" | Alert: "Berhasil "                            | Muncul peringatan "Berhasil" pindah ke pembayaran                          |





