<!-- view/anggota/list.php -->
<?php $judul = 'Daftar Anggota' ?>

<?php ob_start() ?>
    <h1>Daftar Anggota</h1>
    <ul>
        <?php foreach ($anggota as $row): ?>
        <li>
            <a href="detail.php?id=<?= $row['id'] ?>">
                <?= $row['nama'] ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>