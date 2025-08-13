<!DOCTYPE html>
<html>

<head>
 <title>Tambah Kategori</title>
 <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
</head>

<body>
 <h2>Tambah Kategori</h2>
 <form method="post">
  <label>Nama Kategori</label>
  <input type="text" name="nama_kategori" required>
    <label>Nomor Urut</label>
    <input type="number" name="nomor_urut" required>
  <br><br>
   <label>Status</label>
   <select name="status" class="form-control">
    <option value="Aktif">Aktif</option>
    <option value="Tidak Aktif">Tidak Aktif</option>
   </select>
  <button type="submit">Simpan</button>
  <a href="<?= site_url('kategori'); ?>" class="btn btn-secondary">Kembali</a>
  </select>
  <br><br>
  <?php if ($this->session->flashdata('error')): ?>
  <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
  <?php endif; ?>
 </form>
</body>

</html>