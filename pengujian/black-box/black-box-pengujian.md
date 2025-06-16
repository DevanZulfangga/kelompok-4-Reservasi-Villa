# Black Box Test - Reservasi Villa

### 🔬 Black Box Testing

**Oleh:** Devan Zulfangga

#### 🔧 Pengujian Registrasi :

| No | Test Case          | Input Email                                 | Input Data Lainnya           | Expected Output           | Model                    |
| -- | ------------------ | ------------------------------------------- | ---------------------------- | ------------------------- | ------------------------ |
| 1  | Registrasi valid   | [user@example.com](mailto:user@example.com) | Password valid, data lengkap | Registrasi berhasil       | Equivalence Partitioning |
| 2  | Email kosong       | (kosong)                                    | Password valid, data lengkap | Error: Email wajib diisi  | Boundary Value Analysis  |
| 3  | Format email salah | userexample.com                             | Password valid               | Error: Format email salah | Equivalence Partitioning |
| 4  | Duplikat data      | userexample.com                             | Password valid               | Email Sudah Terdaftar     | Equivalence Partitioning |


#### 🔧 Pengujian Login:

| No | Test Case           | Input Email                                 | Input Password | Expected Output          | Model                    |
| -- | ------------------- | ------------------------------------------- | -------------- | ------------------------ | ------------------------ |
| 4  | Login valid         | [user@example.com](mailto:user@example.com) | password123    | Login berhasil           | Equivalence Partitioning |
| 5  | Password salah      | [user@example.com](mailto:user@example.com) | wrongpass      | Error: Login gagal       | Equivalence Partitioning |
| 6  | Email kosong        | (kosong)                                    | password123    | Error: Email wajib diisi | Boundary Value Analysis  |
| 7  | SQL Injection login | ' OR 1=1 --                                 | password123    | Error / Ditolak          | Robustness Testing       |


#### 🔧 Pengujian Pemesanan / Booking:

| No | Test Case             |  Input Data Lainnya       | Expected Output              | Model                    |
| -- | --------------------- |  ------------------------ | ---------------------------- | ------------------------ |
| 8  | Booking valid         |  Tanggal valid, jam valid | Booking berhasil             | Equivalence Partitioning |
| 9  | Tanggal lampau        |  Tanggal lampau           | Error: Tanggal tidak valid   | Boundary Value Analysis  |
| 10 | Tanggal kosong        |  (kosong)                 | Error: Data tidak lengkap    | Boundary Value Analysis  |
| 11 | Lama sewa 0 jam       |  0 jam                    | Error: Data tidak lengkap    | Boundary Value Analysis  |
| 12 | Booking SQL Injection |  SQL script di input      | Error / Ditolak              | Robustness Testing       |


#### 🔧 Pengujian pembayaran:

| No | Test Case        | Input Data Lainnya       | Expected Output     | Model                    |
| -- | ---------------- | ------------------------ | ------------------- | ------------------------ |
| 13 | Pembayaran valid | Upload bukti bayar valid | Konfirmasi berhasil | Equivalence Partitioning |

#### 🔧 Pengujian Upload File (Bukti Pembayaran & Lampiran):

| No | Test Case         |  Input Data Lainnya     | Expected Output     | Model                    |
| -- | ----------------- |  ---------------------- | ------------------- | ------------------------ |
| 14 | Upload file valid |  file.jpg (image valid) | Upload berhasil     | Equivalence Partitioning |
| 15 | Upload file salah |  file.exe (bukan image) | Error: File ditolak | Robustness Testing       |

---

 
