# 🧪 White Box Testing – Login Function (PHP)

## 🔍 Kode Login yang Diuji
Kode terdapat pada: `login.php`

## 🧠 Metodologi
Testing dilakukan dengan pendekatan **desk checking** dan **white box**, dengan menelusuri logika program dan semua percabangan `if`.

## 🔁 Jalur Logika yang Diuji

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


