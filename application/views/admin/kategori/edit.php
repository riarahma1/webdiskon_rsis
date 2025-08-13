<!DOCTYPE html>
<html>

<head>
 <title>Edit Kategori</title>
 <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
</head>

<?php $this->load->view('layout/header'); ?>

<h1>Halaman Kategori</h1>

<?php $this->load->view('layout/footer'); ?>

<body>
 <h2>Edit Kategori</h2>
 <form method="post">
  <label>Nama Kategori</label>
  <input type="text" name="nama_kategori" value="<?= $kategori->nama_kategori ?>" required>
  <label>Nomor Urut</label>
  <input type="number" name="nomor_urut" value="<?= $kategori->nomor_urut ?>" required>
    <label>Status</label>
   <select name="status" class="form-control">
    <option value="Aktif" <?= ($kategori->status == 'Aktif') ? 'selected' : ''; ?>>Aktif</option>
    <option value="Tidak Aktif" <?= ($kategori->status == 'Tidak Aktif') ? 'selected' : ''; ?>>Tidak Aktif</option>
   </select>
  <br><br>
    <?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
    <?php endif; ?>
    <a href="<?= site_url('kategori'); ?>" class="btn btn-secondary">Batal</a>
    <br><br>
  <button type="submit">Update</button>
 </form>
</body>

</html>