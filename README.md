

---

# ✅ * Dokumentasi Akhir Web Reservasi Villa (Kelompok 4)*

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

## 🚀 Cara Menjalankan

1️⃣ Clone project ke folder `htdocs` (XAMPP)
2️⃣ Import database sesuai struktur
3️⃣ Cek koneksi database di `functions.php`
4️⃣ Pastikan library `PHPMailer` & `Twilio` sudah terinstall
5️⃣ Jalankan via browser: `http://localhost/nama-folder/index.php`

---

✅ **SELESAI — Inilah dokumentasi final kamu yang paling lengkap & akurat.**

---
*layouts tampilan web reservas vilaa*


![Halaman Pemesanan](img/halaman-pemesanan.png)
![Halaman Pemesanan](img/halaman-pemesanan.png)
![Halaman Pemesanan](img/halaman-pemesanan.png)
![Halaman Pemesanan](img/halaman-pemesanan.png)
![Halaman Pemesanan](img/halaman-pemesanan.png)
![Halaman Pemesanan](img/halaman-pemesanan.png)

