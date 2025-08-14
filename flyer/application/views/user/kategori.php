<!DOCTYPE html>
<html>
<head>
    <title>Kategori</title>
    <!-- Panggil CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/kategori.css'); ?>">
</head>
<body>
    <h2>Kategori</h2>
    <?php foreach ($kategori as $k): ?>
        <a href="<?= site_url('user/promo/'.$k->id_kategori); ?>" 
           class="btn <?= ($k->nama_kategori == 'Promo Pemeriksaan Umum') ? 'btn-green' : 'btn-grey'; ?>">
           <?= $k->nama_kategori; ?>
        </a>
    <?php endforeach; ?>
</body>
</html>
