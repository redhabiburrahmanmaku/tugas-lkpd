<!DOCTYPE html>
<html>
<body>
    <h2>Mesin Pencari RPL</h2>
    <form action="" method="get">
        <input type="text" name="kata_kunci" placeholder="Cari Apa Saja...">
        <button type="submit">Cari</button>
    </form>
    <hr>
    <?php
    if (isset($_GET['kata_kunci']) ) {
        $cari = $_GET['kata_kunci'];
        echo "<p> Menampilkan hasil pencarian untuk: <b>$cari</b></p> "
    }
    ?>
</body>
</html>