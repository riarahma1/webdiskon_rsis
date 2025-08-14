<!DOCTYPE html>
<html>
<head>
    <title>Kelola Kategori</title>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="<?= site_url('kategori'); ?>" class="active">Kategori</a></li>
            <li><a href="<?= site_url('admin'); ?>">Promo</a></li>
        </ul>
    </div>

    <!-- Konten -->
    <div class="content">
        <h1>Kelola Kategori</h1>
        <a href="<?= site_url('kategori/tambah') ?>">+ Tambah</a>
        <br><br>
        <table>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Nomor Urut</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            <?php if (!empty($kategori)) : ?>
                <?php $no = 1; foreach ($kategori as $row) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->nama_kategori ?></td>
                    <td><?= $row->nomor_urut ?></td>
                    <td><?= $row->status; ?></td>
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
    </div>
</body>
</html>