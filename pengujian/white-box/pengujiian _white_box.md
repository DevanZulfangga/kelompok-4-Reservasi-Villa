# 🧪 White Box Testing – Login Function (PHP)

## 🔍 Kode Login yang Diuji
Kode terdapat pada: `login.php`

## 🧠 Metodologi
Testing dilakukan dengan pendekatan **desk checking** dan **white box**, dengan menelusuri logika program dan semua percabangan `if`.

## 🔁 Jalur Logika yang Diuji Desk checking

| No | Input Username       | Input Password | Jalur Eksekusi                                                                 | Output                      |
|----|----------------------|----------------|--------------------------------------------------------------------------------|-----------------------------|
| 1  | (kosong)             | password123    | Cek empty → `Email belum diisi`                                                | ❌ Email belum diisi        |
| 2  | salahformat.com      | password123    | Format invalid → `Format email tidak valid`                                    | ❌ Format email tidak valid |
| 3  | user@test.com        | (kosong)       | Password kosong → `Password belum diisi`                                       | ❌ Password belum diisi     |
| 4  | tidakada@test.com    | password123    | Email tidak ditemukan di DB → `Email tidak ditemukan`                          | ❌ Email tidak ditemukan    |
| 5  | admin@example.com    | salahpass      | Email ditemukan → password salah → `Password salah`                            | ❌ Password salah           |
| 6  | admin@example.com    | passwordBenar  | Login Admin berhasil → redirect ke `admin/admin.php`                           | ✅ Login berhasil (Admin)   |
| 7  | user@example.com     | passwordBenar  | Login User berhasil → redirect ke `/index.php`                                 | ✅ Login berhasil (User)    |


---

## 📘  Code Walkthrough - Reset Password

### Tujuan:
Menelusuri alur logika fitur reset password, mengidentifikasi jalur normal dan error, serta mengecek konsistensi input–proses–output.

### Jalur yang Ditelusuri:
1. Input email kosong
2. Email tidak ditemukan
3. Kirim OTP sukses
4. Input OTP salah
5. Input password baru kosong
6. Password hash berhasil & redirect

### Temuan:
- Validasi sudah baik
- Tidak ada celah SQL injection (karena `mysqli_prepare`)
- Tidak ada error handling saat query gagal (bisa ditambahkan)

--

## 📋 Formal Inspections - Reset Password

Tujuan:
Melakukan pemeriksaan sistematis terhadap kode reset_password.php, lupa_sandi.php, dan functions.php untuk mengecek kesesuaian dengan standar keamanan, struktur logika, dan kelengkapan validasi input/output.

| No | Komponen yang Diperiksa              | Status | Catatan                                                               |
| -- | ------------------------------------ | ------ | --------------------------------------------------------------------- |
| 1  | Validasi input email                 | ✅      | Sudah menggunakan `FILTER_VALIDATE_EMAIL`                             |
| 2  | Validasi OTP                         | ✅      | Dicek di database berdasarkan email + OTP                             |
| 3  | Validasi password baru               | ✅      | Password tidak boleh kosong                                           |
| 4  | Hashing password                     | ✅      | Menggunakan `password_hash()`                                         |
| 5  | SQL injection prevention             | ⚠️     | Sebagian query masih pakai raw SQL, sebaiknya semua pakai `prepare()` |
| 6  | Cek ketersediaan user sebelum update | ✅      | Email diverifikasi sebelum proses OTP                                 |
| 7  | Feedback error user-friendly         | ✅      | Sudah pakai SweetAlert (user-friendly)                                |
| 8  | Redirect setelah sukses              | ✅      | Redirect ke `login.php` setelah reset sukses                          |

--

##📘 Laporan White Box Testing: Fitur Pemesanan & Pembayaran

##🎯 Tujuan:
Melakukan pengujian white box pada fitur pemesanan dan pembayaran menggunakan metode:
Control Flow Testing
Basic Path Testing

##🔍 Metodologi:
Testing dilakukan dengan pendekatan desk checking dan white box, dengan:
Menelusuri struktur kontrol program (if, while, input → proses → output)
Mengidentifikasi jalur logika utama dan alternatif
Menyusun jalur eksekusi berdasarkan skenario uji

##🔄 Jalur Logika yang Diuji (Contra flow)
💳 Control Flow – Fitur Pemesanan (ASCII Diagram)

Start
↓
Cek input kosong?
├─ Ya → Tampilkan error + redirect kembali
└─ Tidak → Simpan data ke database
↓
Redirect ke halaman pembayaran
↓
End

🧾 Control Flow – Fitur Pembayaran (ASCII Diagram)

Start
  ↓
Cek apakah file upload kosong?
  ├─ Ya   → Tampilkan error + redirect kembali
  └─ Tidak → Simpan file
                ↓
        Update status pembayaran di database
                ↓
        Redirect ke halaman konfirmasi
                ↓
              End


##🔄 Jalur Logika yang Diuji (basc pasth)
💳 Jalur Logika Pemesanan
| No | Skenario Input          | Jalur Eksekusi                        | Output                 |
| -- | ----------------------- | ------------------------------------- | ---------------------- |
| 1  | Semua input kosong      | Validasi gagal → redirect kembali     | ❌ Form belum lengkap   |
| 2  | Input lengkap dan valid | Simpan ke DB → redirect ke pembayaran | ✅ Lanjut ke pembayaran |


🧾 Jalur Logika Pembayaran
| No | Skenario Input    | Jalur Eksekusi                                                         | Output                            |
| -- | ----------------- | ---------------------------------------------------------------------- | --------------------------------- |
| 1  | Upload kosong     | Validasi gagal → redirect kembali                                      | ❌ Bukti pembayaran belum diunggah |
| 2  | Upload file valid | Simpan file → update status reservasi → redirect ke halaman konfirmasi | ✅ Pembayaran berhasil dikirim     |



