# Black Box Test - Reservasi Villa

### 🔬 Black Box Testing

**Oleh:** Devan Zulfangga

#### 🔧 Pengujian Registrasi & Login:

| Skenario                    | Hasil                                             |
| --------------------------- | ------------------------------------------------- |
| Form registrasi kosong      | ❌ Notif browser bawaan (required)                 |
| Email format tidak valid    | ❌ Ditolak oleh sistem                             |
| Email sudah terdaftar       | ❌ Tidak bisa registrasi                           |
| Password salah              | ❌ Login gagal                                     |
| Login dengan akun tidak ada | ❌ Login gagal → SweetAlert "data tidak ditemukan" |

#### 🔧 Pengujian Booking & Pembayaran:

| Skenario                 | Hasil                             |
| ------------------------ | --------------------------------- |
| Form booking kosong      | ❌ SweetAlert "Data belum lengkap" |
| Upload pembayaran kosong | ❌ SweetAlert "Data belum lengkap" |

#### 🔧 Pengujian Ubah Profil:

| Skenario                             | Hasil                          |
| ------------------------------------ | ------------------------------ |
| Form ubah profil kosong/tidak sesuai | ❌ Validasi SweetAlert berhasil |

#### 🔧 Pengujian Lupa Password:

| Skenario                | Hasil                                              |
| ----------------------- | -------------------------------------------------- |
| Kirim OTP Email/WA      | ✅ OTP terkirim atau ❌ gagal kirim                  |
| OTP salah               | ❌ Verifikasi gagal                                 |
| OTP benar               | ✅ Lanjut reset password                            |
| Reset password kosong   | ❌ Validasi gagal                                   |
| Reset password berhasil | ✅ Password berhasil diubah (SweetAlert + redirect) |

#### 🔧 Pengujian Admin Panel:

| Fitur            | Hasil                 |
| ---------------- | --------------------- |
| Tambah Admin     | ✅ SweetAlert berhasil |
| Hapus Admin/User | ✅ SweetAlert berhasil |
| Tambah Villa     | ✅ SweetAlert berhasil |
| Hapus Villa      | ✅ SweetAlert berhasil |

---

 
