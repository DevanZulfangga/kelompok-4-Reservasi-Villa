|  No  | Bagian                        | Pemeriksaan                                                  | Status | Catatan                                              |
| ---|-------------------------- | ------------------------------------------------------------ | ------ | ---------------------------------------------------- |
| 1. |Include & Session        | `require "functions.php";` dan `session_start();`            | ✅      | Sudah benar, session aktif                           |
| 2. |Ambil flash error        | `$_SESSION['flash_error']`                                   | ✅      | Sudah baik, ada flash error untuk validasi           |
| 3. |Cek sudah login          | `if (isset($_SESSION["role"]))`                              | ✅      | Sudah dicek, langsung redirect ke role masing-masing |
| 4. |Cek form dikirim         | `if (isset($_POST["login"]))`                                | ✅      | Sudah benar, hanya diproses jika form dikirim        |
| 5. |Validasi Email kosong    | `if (empty($username))`                                      | ✅      | Validasi input sudah dilakukan                       |
| 6. |Validasi Format Email    | `filter_var($username, FILTER_VALIDATE_EMAIL)`               | ✅      | Sudah benar                                          |
| 7. |Validasi Password kosong | `if (empty($password))`                                      | ✅      | Validasi password ada                                |
| 8. |Escape SQL Injection     | `mysqli_real_escape_string($conn, $username)`                | ✅      | Sudah bagus, aman SQL Injection                      |
| 9. |Query Admin/User         | `SELECT * FROM admin_212279` dan `SELECT * FROM user_212279` | ✅      | Query sudah sesuai                                   |
| 10. |Cek password            | `password_verify($password, $userData["212279_password"])`   | ✅      | Password aman pakai hash                             |
| 11. |Set Session             | `$_SESSION['role']`, `$_SESSION['username']` dst             | ✅      | Session sudah benar                                  |
| 12. |Redirect URL            | `$redirectURL`                                               | ✅      | Redirect sesuai role                                 |
| 13. |SweetAlert Notifikasi   | `Swal.fire`                                                  | ✅      | Ada notifikasi login berhasil                        |
| 14. |Error Message           | `$_SESSION['flash_error']`                                   | ✅      | Sudah aman ditangani                                 |
| 15. |Prepared Statement      | Tidak pakai prepared statement                               | ⚠      | Masih lebih aman pakai prepared statement untuk SQL  |
