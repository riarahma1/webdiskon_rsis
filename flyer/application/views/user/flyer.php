<!DOCTYPE html>
<html>
<head>
    <title><?= $flyer->judul; ?></title>
</head>
<body>
    <h2><?= $flyer->judul; ?></h2>
    <img src="<?= base_url('uploads/'.$flyer->gambar); ?>" width="500">
    <p><?= $flyer->deskripsi; ?></p>
</body>
</html>
