# Black Box Test - Reservasi Villa

### 🔬 Black Box Testing

**Oleh:** Devan Zulfangga

#### 🔧 Pengujian Registrasi :

| No | Test Case          | Input Email                                 | Input Data Lainnya           | Expected Output           | Model                    |
| -- | ------------------ | ------------------------------------------- | ---------------------------- | ------------------------- | ------------------------ |
| 1  | Registrasi valid   | [user@example.com](mailto:user@example.com) | Password valid, data lengkap | Registrasi berhasil       | Equivalence Partitioning |
| 2  | Email kosong       | (kosong)                                    | Password valid, data lengkap | Error: Email wajib diisi  | Boundary Value Analysis  |
| 3  | Format email salah | userexample.com                             | Password valid               | Error: Format email salah | Equivalence Partitioning |


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

 
