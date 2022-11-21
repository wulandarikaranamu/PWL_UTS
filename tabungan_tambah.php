<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data Tabungan Siswa</title>
</head>
<body>
    <h3>Menambah Data Tabungan</h3>
    <form action="tabungan_tambah_action.php" method="post" >
        <table>
            <tr>
                <td>Id User</td>
                <td>:</td>
                <td><input type="number" name="user_id" id=""></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="date" name="tanggal" id=""></td>
            </tr>
            <tr>
                <td>Jumlah Tabungan</td>
                <td>:</td>
                <td><input type="number" name="jumlah" id=""></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><textarea name="keterangan" rows="6" cols="60" id=""></textarea></td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="submit" name="simpan" value="Simpan">
                    <input type="reset" name="batal" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>