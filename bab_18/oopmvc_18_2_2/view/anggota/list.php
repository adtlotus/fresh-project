<!-- view/anggota/list.php -->
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Anggota</title>
    </head>
    <body>
        <h1>Daftar Anggota</h1>
        <ul>
            <?php foreach($anggota as $row): ?>
            <li>
                <a href="detail.php?id=<?= $row['id'] ?>">
                    <?= $row['nama'] ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </body>
</html>