# Black Box Test - Reservasi Villa

Metode: Equivalence Partitioning dan Boundary Value Analysis

# LOGIN TEST CASE

| No | Test Case                    | Input Email                                 | Input Password | Expected Output             | Model           |
| -- | ---------------------------- | ------------------------------------------- | -------------- | --------------------------- | --------------- |
| 1  | Valid login                  | [Devan@gmail.com](mailto:Devan@gmail.com) | password123    | Login berhasil              | Equivalence     |
| 2  | Email Kosong              |                            | password123    | Harap isi Email Anda    | Boundary/Robust |
| 3  | Password Kosong            | [Devan@gmail.com](mailto:Devan@gmail.com) |   | Harap isi pasword Anda  | Boundary/Robust |
| 4  | Email tidak valid (tanpa @)  | dede.com                             | password123    | Format Email tidak valid   | Equivalence     |
| 5  | Password salah               | [Devan@gmail.com](mailto:Devan@gmail.com) | 545    | Password salah         | Equivalence     |

# REGISTER TEST CASE

| No | Test Case                    | Email                                 | Password | Expected Output             | Model           |
| -- | ---------------------------- | ------------------------------------------- | -------------- | --------------------------- | --------------- |
| 1  | Register Valid                  | [Devan@gmail.com](mailto:Devan@gmail.com) | password123    | Register berhasil              | Equivalence     |
| 2  | Duplikat Data ( data sudah terdaftar ) |   [Devan@gmail.com](mailto:Devan@gmail.com)  | password123    | Email Telah Terdaftar    | Boundary/Robust |

# CART PAGE ( PEMBAYARAN) TEST CASE
| No | Test Case                                 | User    | Payment Method | Expected Output                                         | Model          |
| -- | ----------------------------------------- | ----------- | -------------- | ------------------------------------------------------- | -------------- |
| 1  | tanggal booking                  | DEDE   | Transfer Bank           | berhasil menambahkan pesanan | Equivalence    |
| 2  | Lama sewa                            | DEDE    | Transfer Bank           | berhasil menambahkan pesanan             | Robustness     |
| 3  | Upload bukti pembayaran | DEDE    |      Transfer Bank     | Pembayaran Berhasil                         | BVA            |
| 4  | Tidak mengupload bukti pmebayaran               | DEDE | Transfer Bank          | Pembayaran gagal                       | BVA            |

 
