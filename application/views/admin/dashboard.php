<!DOCTYPE html>
<html>

<head>
 <title>Dashboard Admin</title>
 <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>
 <h1>Dashboard Admin</h1>
 <p>Total Flyer: <?= $total_flyer ?></p>
 <p>Total Kategori: <?= $total_kategori ?></p>

 <a href="<?= site_url('admin') ?>">Kelola Flyer</a> |
 <a href="<?= site_url('kategori') ?>">Kelola Kategori</a>
</body>

</html>