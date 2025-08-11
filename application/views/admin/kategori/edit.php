<!DOCTYPE html>
<html>

<head>
 <title>Edit Kategori</title>
 <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
</head>

<?php $this->load->view('layout/header'); ?>

<h1>Halaman Kategori</h1>
<!-- isi konten halaman -->

<?php $this->load->view('layout/footer'); ?>

<body>
 <h2>Edit Kategori</h2>
 <form method="post">
  <label>Nama Kategori</label>
  <input type="text" name="nama_kategori" value="<?= $kategori->nama_kategori ?>" required>
  <button type="submit">Update</button>
 </form>
</body>

</html>