<!DOCTYPE html>
<html>

<head>
 <title>Data Kategori</title>
 <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>
 <h1>Data Kategori</h1>
<a href="<?php echo site_url('admin/dashboard'); ?>" style="text-decoration:none;"> Kembali</a>
 <a href="<?= site_url('kategori/tambah') ?>">+ Tambah Kategori</a>
 <br><br>

 <table border="1" cellpadding="5" cellspacing="0">
  <tr>
   <th>No</th>
   <th>Nama Kategori</th>
   <th>Aksi</th>
  </tr>
  <?php if (!empty($kategori)) : ?>
  <?php $no = 1; foreach ($kategori as $row) : ?>
  <tr>
   <td><?= $no++ ?></td>
   <td><?= $row->nama_kategori ?></td>
   <td>
    <a href="<?= site_url('kategori/edit/'.$row->id_kategori) ?>">Edit</a> |
    <a href="<?= site_url('kategori/hapus/'.$row->id_kategori) ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
   </td>
  </tr>
  <?php endforeach; ?>
  <?php else : ?>
  <tr>
   <td colspan="3" align="center">Data tidak ada</td>
  </tr>
  <?php endif; ?>
 </table>
</body>

</html>