<!DOCTYPE html>
<html>

<head>
 <title>Tambah Flyer</title>
 <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body class="p-4">
 <div class="container">
  <h2>Tambah Flyer</h2>
  <a href="<?= site_url('admin'); ?>" class="btn btn-secondary mb-3">Kembali</a>

  <?php if ($this->session->flashdata('error')): ?>
  <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
  <?php endif; ?>

  <?= form_open_multipart('admin/tambah'); ?>
  <div class="form-group mb-2">
   <label>Nama Flyer</label>
   <input type="text" name="nama_flyer" class="form-control" required>
  </div>

  <div class="form-group mb-2">
   <label>Kategori</label>
   <select name="id_kategori" class="form-control" required>
    <option value="">-- Pilih Kategori --</option>
    <?php foreach ($kategori as $k): ?>
    <option value="<?= $k->id_kategori; ?>"><?= $k->nama_kategori; ?></option>
    <?php endforeach; ?>
   </select>
  </div>

  <div class="form-group mb-2">
   <label>Gambar</label>
   <input type="file" name="gambar" class="form-control" required>
  </div>

  <div class="form-group mb-2">
   <label>tgl_mulai</label>
   <input type="date" name="tgl_mulai" class="form-control" required>
  </div>

  <div class="form-group mb-2">
   <label>tgl_selesai</label>
   <input type="date" name="tgl_selesai" class="form-control" required>
  </div>

  <div class="form-group mb-3">
   <label>Status</label>
   <select name="status" class="form-control">
    <option value="Aktif">Aktif</option>
    <option value="Tidak Aktif">Tidak Aktif</option>
   </select>
  </div>

  <button type="submit" class="btn btn-success">Simpan</button>
  <?= form_close(); ?>
 </div>
</body>

</html>