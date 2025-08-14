<!DOCTYPE html>
<html>
<head>
    <title><?= $kategori->nama_kategori; ?></title>
    <!-- Panggil CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/promo.css'); ?>">
</head>
<body>
    <h2><?= $kategori->nama_kategori; ?></h2>
    <div class="grid">
        <?php foreach ($flyer as $f): ?>
            <div class="card">
                <img src="<?= base_url('uploads/flyer/'.$f->gambar); ?>" alt="<?= $f->nama_flyer; ?>">
                <p><?= $f->nama_flyer; ?></p>
                <p><?= $f->nama_kategori; ?></p>
                <a href="<?= site_url('kategori/detail/'.$f->id_flyer); ?>" class="detail-btn">Detail</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
