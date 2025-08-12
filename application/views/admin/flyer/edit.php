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
  <a href="<?= site_url('admin/edit/'.$flyer->id_flyer) ?>">Edit</a>

  <?php if ($this->session->flashdata('error')): ?>
  <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
  <?php endif; ?>

  <?= form_open_multipart('admin/edit/' . $flyer->id_flyer); ?>
  <div class="form-group mb-2">
   <label>Nama Flyer</label>
   <input type="text" name="nama_flyer" class="form-control" value="<?= $flyer->nama_flyer; ?>" required>
  </div>

  <div class="form-group mb-2">
   <label>Kategori</label>
   <select name="id_kategori" class="form-control" required>
    <option value="">-- Pilih Kategori --</option>
    <?php foreach ($kategori as $k): ?>
    <option value="<?= $k->id_kategori; ?>" <?= ($flyer->id_kategori == $k->id_kategori) ? 'selected' : ''; ?>>
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
   <label>tgl_mulai</label>
   <input type="date" name="tgl_mulai" class="form-control" value="<?= $flyer->tgl_mulai; ?>" required>
  </div>

  <div class="form-group mb-2">
   <label>tgl_selesai</label>
   <input type="date" name="tgl_selesai" class="form-control" value="<?= $flyer->tgl_selesai; ?>" required>
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