<?php

// 🔗 Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "dbfutsal");

// 🚨 Cek koneksi
if (!$conn) {
    die("❌ Koneksi ke database GAGAL: " . mysqli_connect_error());
}

// 📦 Fungsi untuk mengeksekusi query SELECT
function query($sql) {
    global $conn;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("❌ Query gagal: " . mysqli_error($conn));
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// 🗑️ Fungsi hapus
function hapusMember($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM user_212279 WHERE 212279_id_user = $id");
    return mysqli_affected_rows($conn);
}

function hapusLpg($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM lapangan_212279 WHERE 212279_id_lapangan = $id");
    return mysqli_affected_rows($conn);
}

function hapusAdmin($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM admin_212279 WHERE 212279_id_user = $id");
    return mysqli_affected_rows($conn);
}

function hapusPesan($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM sewa_212279 WHERE 212279_id_sewa = $id");
    return mysqli_affected_rows($conn);
}

// 👤 Fungsi daftar user
function daftar($data) {
    global $conn;

    $username = strtolower(stripslashes($data["email"]));
    $password = $data["password"];
    $nama = $data["nama"];
    $no_handphone = $data["hp"];
    $alamat = $data["alamat"];
    $gender = $data["gender"];

    $upload = upload();
    if (!$upload) return false;

$email = htmlspecialchars($data["email"]);

$result = mysqli_query($conn, "SELECT 212279_email FROM user_212279 WHERE 212279_email = '$email'");
if (mysqli_fetch_assoc($result)) {
    header("Location: ./daftar.php?status=email_terdaftar");
    exit;
}



    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user_212279 (212279_email, 212279_password, 212279_no_handphone, 212279_jenis_kelamin, 212279_nama_lengkap, 212279_alamat, 212279_foto) 
                         VALUES ('$username','$password_hash','$no_handphone','$gender','$nama','$alamat','$upload')");
    return mysqli_affected_rows($conn);
}

// 🛠️ Edit user
function edit($data) {
    global $conn;

    $userid = $_SESSION["id_user"];
    $username = strtolower(stripslashes($data["email"]));
    $nama = $data["nama_lengkap"];
    $no_handphone = $data["hp"];
    $gender = $data["jenis_kelamin"];
    $gambarLama = $data["fotoLama"];

    if ($_FILES["foto"]["error"] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE user_212279 SET 212279_email = '$username', 
              212279_nama_lengkap = '$nama',
              212279_no_handphone = '$no_handphone',
              212279_jenis_kelamin = '$gender',
              212279_foto = '$gambar'
              WHERE 212279_id_user = '$userid'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// 📝 Fungsi pesan lapangan
function pesan($data) {
    global $conn;

    $userid = $_SESSION["id_user"];
    $idlpg = $data["id_lpg"];
    $lama = $data["jam_mulai"];
    $mulai = $data["tgl_main"];

    $mulai_waktu = strtotime($mulai);
    $habis_waktu = $mulai_waktu + (intval($lama) * 3600);
    $habis = date('Y-m-d\TH:i:s', $habis_waktu);

    $harga = $data["harga"];
    $total = intval($lama) * $harga;

    mysqli_query($conn, "INSERT INTO sewa_212279 (212279_id_user, 212279_id_lapangan, 212279_lama_sewa, 212279_jam_mulai, 212279_jam_habis, 212279_harga, 212279_total) 
                         VALUES ('$userid','$idlpg','$lama','$mulai','$habis','$harga','$total')");

    return mysqli_affected_rows($conn);
}

// 💰 Fungsi bayar
function bayar($data) {
    global $conn;
    $id_sewa = $data["212279_id_sewa"];

    $upload = upload();
    if (!$upload) return false;

    mysqli_query($conn, "INSERT INTO bayar_212279 (212279_id_sewa, 212279_bukti, 212279_konfirmasi) 
                         VALUES ('$id_sewa','$upload','Sudah Bayar')");

    return mysqli_affected_rows($conn);
}

// ➕ Tambah lapangan
function tambahLpg($data) {
    global $conn;

    $lapangan = $data["lapangan"];
    $harga = $data["harga"];

    $upload = upload();
    if (!$upload) return false;

    $query = "INSERT INTO lapangan_212279 (212279_nama, 212279_harga, 212279_foto) 
              VALUES ('$lapangan','$harga','$upload')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ⬆️ Upload gambar
function upload() {
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    if ($error === 4) return "no_file";

    $extensiValid = ['jpg', 'png', 'jpeg'];
    $extensiGambar = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));

    if (!in_array($extensiGambar, $extensiValid)) return "not_image";
    if ($ukuranFile > 1000000) return "too_large";

    $namaFileBaru = uniqid() . '.' . $extensiGambar;
    move_uploaded_file($tmpName, '../img/' . $namaFileBaru);

    return $namaFileBaru;
}

// ✏️ Edit lapangan
function editLpg($data) {
    global $conn;

    $id = $data["idlap"];
    $lapangan = $data["lapangan"];
    $ket = $data["ket"];
    $harga = $data["harga"];
    $gambarLama = $data["fotoLama"];

    $gambar = ($_FILES["foto"]["error"] === 4) ? $gambarLama : upload();

    $query = "UPDATE lapangan_212279 SET 
              212279_nama = '$lapangan',
              212279_keterangan = '$ket',
              212279_harga = '$harga',
              212279_foto = '$gambar' 
              WHERE 212279_id_lapangan = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ➕ Tambah admin
function tambahAdmin($data) {
    global $conn;

    $username = $data["username"];
    $password = $data["password"];
    $nama = $data["nama"];
    $no_handphone = $data["hp"];
    $email = $data["email"];

    $query = "INSERT INTO admin_212279 (212279_username,212279_password,212279_nama,212279_no_handphone,212279_email) 
              VALUES ('$username','$password','$nama','$no_handphone','$email')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ✏️ Edit admin
function editAdmin($data) {
    global $conn;

    $id = $data["id"];
    $username = $data["username"];
    $password = $data["password"];
    $nama = $data["nama"];
    $no_handphone = $data["hp"];
    $email = $data["email"];

    $query = "UPDATE admin_212279 SET 
              212279_username = '$username',
              212279_password = '$password',
              212279_nama = '$nama',
              212279_no_handphone = '$no_handphone',
              212279_email  = '$email' 
              WHERE 212279_id_user = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ✅ Konfirmasi pembayaran
function konfirmasi($id_sewa) {
    global $conn;

    mysqli_query($conn, "UPDATE bayar_212279 SET 212279_konfirmasi = 'Terkonfirmasi' WHERE 212279_id_sewa = '$id_sewa'");
    return mysqli_affected_rows($conn);
}

// 🔁 Simpan atau perbarui token reset
function simpanResetToken($id_user, $token) {
    global $conn;

    $stmt = $conn->prepare("UPDATE user_212279 SET 212279_reset_token = ? WHERE 212279_id_user = ?");
    $stmt->bind_param("si", $token, $id_user);
    $stmt->execute();
    return $stmt->affected_rows;
}

// 🔍 Ambil data user by ID
function getUserById($id_user) {
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM user_212279 WHERE 212279_id_user = ?");
    $stmt->bind_param("i", $id_user);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
