<?php
include "koneksi.php";

// Query untuk mengambil data dari tabel
$sql = "SELECT * FROM nama_tabel";
$result = $koneksi->query($sql);

// Periksa apakah query berhasil
if ($result->num_rows > 0) {
    // Tampilkan data dalam tabel HTML
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["nama"]."</td>
                <td>".$row["tgllhr"]."</td>
                <td>".$row["jk"]."</td>
                <td>".$row["tgl_masuk"]."</td>
                <td>".$row["id_jabatan"]."</td>
                <td>".$row["id_departemen"]."</td>
                <td>".$row["timestamps"]."</td>
                <td>
                    <a href='edit_data.php?id=".$row["id"]."'>Edit</a>
                    <a href='hapus_data.php?id=".$row["id"]."'>Hapus</a>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data.";
}
$koneksi->close();
?>
