<!DOCTYPE html>
<html>
<head>
    <title>Kategori</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: auto;
            text-align: center;
        }
        .item {
            padding: 15px;
            margin: 8px 0;
            border-radius: 10px;
            font-weight: bold;
        }
        .active {
            background-color: #6ce16c;
        }
        .inactive {
            background-color: #d3d3d3;
        }
        a {
            text-decoration: none;
            color: black;
        }
        a:hover {
            text-decoration: underline;
        }
        .header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        .icon {
            font-size: 20px;
        }
        .back-btn {
            position: absolute;
            right: 30px;
            top: 20px;
            padding: 5px 8px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="header">
            <span class="icon">🏠</span>
            <h2>Kategori</h2>
        </div>

        <button class="back-btn" onclick="window.history.back()">🔙</button>

        <?php foreach($kategori as $row): ?>
            <div class="item <?= ($row->id_kategori == $active_id) ? 'active' : 'inactive'; ?>">
                <?php if($row->id_kategori == $active_id): ?>
                    <?= $row->nama_kategori ?>
                <?php else: ?>
                    <a href="<?= site_url('kategori/index/'.$row->id_kategori) ?>">
                        <?= $row->nama_kategori ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>

    </div>
</body>
</html>
