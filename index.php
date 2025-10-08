<?php
require_once 'Kalkulator.php';

$result = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $angka1 = $_POST['angka1'] ?? 0;
    $angka2 = $_POST['angka2'] ?? 0;
    $operasi = $_POST['operasi'] ?? '';

    $calc = new Kalkulator($angka1, $angka2);

    switch ($operasi) {
        case 'tambah':
            $result = $calc->tambah();
            break;
        case 'kurang':
            $result = $calc->kurang();
            break;
        case 'kali':
            $result = $calc->kali();
            break;
        case 'bagi':
            $result = $calc->bagi();
            break;
        default:
            $result = "Pilih operasi terlebih dahulu!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="calculator">
        <h2 class="judul">Kalkulator Sederhana</h2>
        <form method="post">
            <input type="number" name="angka1" step="any" placeholder="Angka pertama" required>
            <input type="number" name="angka2" step="any" placeholder="Angka kedua" required>
            <select name="operasi" required>
                <option value="">-- Pilih Operasi --</option>
                <option value="tambah">Tambah (+)</option>
                <option value="kurang">Kurang (-)</option>
                <option value="kali">Kali (×)</option>
                <option value="bagi">Bagi (÷)</option>
            </select>
            <button type="submit">Hitung</button>
        </form>

        <?php if ($result !== ""): ?>
            <div class="result">Hasil: <?= htmlspecialchars($result) ?></div>
        <?php endif; ?>
    </div>

</body>

</html>