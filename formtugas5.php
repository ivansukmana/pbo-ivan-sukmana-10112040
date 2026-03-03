<!DOCTYPE html>
<html>
<head>
    <title>Form Pembelian</title>
</head>
<body>

    <h2>Form Pembelian</h2>

    <form action="proses.php" method="POST">
        Nama Pembeli: <br>
        <input type="text" name="nama" required>
        <br><br>

        Kartu Member: <br>
        <select name="kartu">
            <option value="1">YA</option>
            <option value="0">Tidak</option>
        </select>
        <br><br>

        Total Belanja: <br>
        <input type="number" name="total" required>
        <br><br>

        <button type="submit">Proses</button>
    </form>

</body>
</html>