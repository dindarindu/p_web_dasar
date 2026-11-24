<?php
$status = isset($_GET["status"]) ? $_GET["status"] : "";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Anggota Perpustakaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        h1 {
            color: #1f3864;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 320px;
            padding: 7px;
        }

        button {
            margin-top: 16px;
            padding: 8px 20px;
        }

        .sukses {
            background: #e6f4ea;
            border-left: 5px solid #2e7d32;
            padding: 10px;
            width: 320px;
        }
    </style>
</head>
<body>

    <h1>Form Pendaftaran Anggota Perpustakaan</h1>

    <?php if ($status === "sukses") { ?>
        <p class="sukses">Data anggota berhasil disimpan.</p>
    <?php } ?>

    <form action="proses_anggota.php" method="post">

        <label>Nomor Anggota</label>
        <input type="text" name="no_anggota">

        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap">

        <label>Email</label>
        <input type="text" name="email">

        <label>Nomor HP</label>
        <input type="text" name="no_hp">

        <label>Jenis Anggota</label>
        <select name="jenis_anggota">
            <option value="">-- Pilih Jenis Anggota --</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Dosen">Dosen</option>
            <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
        </select>

        <label>Alamat</label>
        <textarea name="alamat" rows="4"></textarea>

        <br>
        <button type="submit">Simpan</button>

    </form>

</body>
</html>