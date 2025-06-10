# Gray Box Testing


1. Pengujian booking villa

| No | Tase Case              | Aksi                                      | Validasi UI                                                    | Validasi Logika                                           |
| -- | ---------------------- | ----------------------------------------- | -------------------------------------------------------------- | --------------------------------------------------------- |
| 1  | Input tanggal kosong   | Klik tombol "Pesan" tanpa isi `#user_id` | Muncul alert SweetAlert "Silakan isi User ID terlebih dahulu!" | Tidak terjadi perubahan pada `localStorage.cart.playerId` |
| 2  | Input < 9 digit        | Isi `#user_id` = `123456` → klik "Tambah" | Alert: "User ID minimal 9 digit!"                              | Tidak tambah ke array `playerId`                          |
| 3  | Input > 10 digit       | Isi `#user_id` = `123456789012`           | Alert: "User ID maksimal 10 digit!"                            | Tidak tambah ke array `playerId`                          |
| 4  | Input valid, belum ada | Isi `#user_id` = `123456789`              | Alert konfirmasi → OK → Muncul di elemen `#listPlayer`         | `localStorage.cart.playerId` bertambah                    |
| 5  | Input duplikat         | Masukkan lagi ID yang sama                | Alert: "User ID sudah ditambahkan sebelumnya!"                 | Tidak ada duplikasi pada `cart.playerId`                  |




