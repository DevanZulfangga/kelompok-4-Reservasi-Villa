
---

# * Web Reservasi Villa (Kelompok 4)*

---

# 🏡 Web Reservasi Villa (Kelompok 4)

Website aplikasi *Reservasi & Booking Villa* sebagai proyek kelompok, dengan pengujian aplikasi menggunakan metode **Black Box**, **White Box**, dan **Grey Box Testing**.

---

## 👨‍💻 Anggota Kelompok

* **Frontend Developer & GitHub**: Dede Ardiansah
* **Tester & Backend**:

  * Devan Zulfangga
  * Muhamad Nabil Arrafi
  * Sammun Hakeki Muchlis

---

## ✨ Fitur Utama Aplikasi

* ✅ **Registrasi Akun**

  * Validasi format email
  * Validasi email sudah terdaftar
  * Validasi duplicate data
* ✅ **Login User & Admin**

  * Verifikasi password hash (password\_verify())
* ✅ **Lupa Password (OTP via Email & WhatsApp)**
* ✅ **Verifikasi Kode OTP**
* ✅ **Reset Password Aman (password\_hash())**
* ✅ **Pemesanan Villa (Booking)**

  * Validasi data booking kosong → SweetAlert notif
* ✅ **Upload Bukti Pembayaran**

  * Validasi file pembayaran wajib → SweetAlert notif
* ✅ **Manajemen Profil User (Ubah Profil)**

  * Edit nama, email, nomor HP, password, dan gambar profil
  * Validasi perubahan profil kosong → SweetAlert
* ✅ **Halaman Admin (Panel Kelola)**

  * Konfirmasi Pembayaran
  * Data Villa (Booking)
  * Tambah & Hapus Villa
  * Tambah & Hapus User/Admin
* ✅ **Pengiriman OTP via PHPMailer & Twilio WhatsApp API**
* ✅ **Validasi Client-Side: SweetAlert2 & HTML5**

---

## 🔒 Sistem Keamanan

* Password aman disimpan dengan `password_hash()`
* Login memverifikasi dengan `password_verify()`
* OTP 6 digit unik & random
* Token reset otomatis terhapus setelah berhasil reset password
* Validasi form input (server-side & client-side) mencegah SQL Injection
* Validasi booking, pembayaran, dan profil secara ketat
* SweetAlert2 sebagai notifikasi validasi interaktif

---

### 🔬 White Box Testing

**Oleh:** Sammun Hakeki Muchlis

* Desk Checking (manual code review)
* Code Walkthrough
* Formal Inspection
* Control Flow Testing
* Data Flow Testing
* Basic Path Testing
* Loop Testing

---

### 🔬 Grey Box Testing

**Oleh:** Muhamad Nabil Arrafi

* Manipulasi data user & booking internal
* Edit metode pembayaran melalui UI
* Validasi DOM booking
* Simulasi gagal kirim OTP email/WA
* Manipulasi data storage lokal (jika ada)

---

## ⚙️ Teknologi Digunakan

* PHP + MySQL (Backend)
* HTML5 + CSS3 + Bootstrap (Frontend)
* JavaScript + SweetAlert2 (Interaktif Validasi)
* PHPMailer (SMTP Gmail)
* Twilio WhatsApp API
* Metode Pengujian: Black Box, White Box, Grey Box

---

## 🚀 Cara Menjalankan Aplikasi

1. **Clone project** ke folder `htdocs` (jika menggunakan XAMPP).
2. **Import database** ke MySQL sesuai dengan struktur yang disediakan.
3. **Cek koneksi database** di file `functions.php` dan sesuaikan konfigurasi (host, user, password, nama database).
4. **Pastikan library eksternal sudah terpasang:**
   - `PHPMailer`
   - `Twilio`
5. **Jalankan aplikasi** melalui browser:  http://localhost/nama-folder/index.php

---

## Tampilan Halaman

### 1. Halaman Login
![Halaman Login](assets/Login.jpeg)

### 2. Halaman Register
![Halaman Register](assets/Register.jpeg)

### 3. Halaman Dashboard
![Halaman Dashboard](assets/Dashboard.jpeg)

### 4. Halaman Pemesanan (Booking)
![Halaman Pemesanan](assets/Boking.jpeg)

### 5. Halaman Pembayaran
![Halaman Pembayaran](assets/pemabayarn.jpeg)



