<?php // index.php
$link = new PDO("mysql:host=localhost;dbname=db_oopmvc", 'root', '');
$result = $link->query('SELECT id, nama FROM anggota');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Anggota</title>
    </head>
    <body>
        <h1>Daftar Anggota</h1>
        <ul>
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <li>
                <a href="detail.php?id=<?= $row['id'] ?>">
                    <?= $row['nama'] ?>
                </a>
            </li>
            <?php endwhile ?>
        </ul>
    </body>
</html>

<?php $link = null; ?>