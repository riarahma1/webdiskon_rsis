<!DOCTYPE html>
<html>

<head>
 <title>Edit Flyer</title>
 <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body class="p-4">
 <div class="container">
  <h2>Edit Flyer</h2>
  <a href="<?= site_url('admin'); ?>" class="btn btn-secondary mb-3">Kembali</a>

  <?php if ($this->session->flashdata('error')): ?>
  <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
  <?php endif; ?>

  <?= form_open_multipart('admin/edit/' . $flyer->id); ?>
  <div class="form-group mb-2">
   <label>Nama Flyer</label>
   <input type="text" name="nama_flyer" class="form-control" value="<?= $flyer->nama_flyer; ?>" required>
  </div>

  <div class="form-group mb-2">
   <label>Kategori</label>
   <select name="kategori_id" class="form-control" required>
    <option value="">-- Pilih Kategori --</option>
    <?php foreach ($kategori as $k): ?>
    <option value="<?= $k->id; ?>" <?= ($flyer->kategori_id == $k->id) ? 'selected' : ''; ?>>
     <?= $k->nama_kategori; ?>
    </option>
    <?php endforeach; ?>
   </select>
  </div>

  <div class="form-group mb-2">
   <label>Gambar</label><br>
   <?php if ($flyer->gambar): ?>
   <img src="<?= base_url('uploads/flyer/' . $flyer->gambar); ?>" width="100" class="mb-2">
   <?php endif; ?>
   <input type="file" name="gambar" class="form-control">
  </div>

  <div class="form-group mb-2">
   <label>Tanggal Mulai</label>
   <input type="date" name="tanggal_mulai" class="form-control" value="<?= $flyer->tanggal_mulai; ?>" required>
  </div>

  <div class="form-group mb-2">
   <label>Tanggal Akhir</label>
   <input type="date" name="tanggal_akhir" class="form-control" value="<?= $flyer->tanggal_akhir; ?>" required>
  </div>

  <div class="form-group mb-3">
   <label>Status</label>
   <select name="status" class="form-control">
    <option value="Aktif" <?= ($flyer->status == 'Aktif') ? 'selected' : ''; ?>>Aktif</option>
    <option value="Tidak Aktif" <?= ($flyer->status == 'Tidak Aktif') ? 'selected' : ''; ?>>Tidak Aktif</option>
   </select>
  </div>

  <button type="submit" class="btn btn-success">Update</button>
  <?= form_close(); ?>
 </div>
</body>

</html>