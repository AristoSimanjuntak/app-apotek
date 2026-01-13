<!DOCTYPE html>
<html>

<head>
    <title>Master Obat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
        }

        table th,
        table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }

        table th {
            background-color: #161876E1;
            font-weight: bold;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: white;
        }

        table tr:nth-child(odd) {
            background-color: #fff;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 100px;
        }
    </style>
</head>

<body>
    <div class="logo">
        <img style="width: 75px;" src="<?php echo ('http://localhost/ApotekSambu/assets/images/logo-baru.png') ?>" />
        <img style="width: 100px;" src="<?php echo ('http://localhost/ApotekSambu/assets/images/apoteksambu.png') ?>" />
    </div>

    <h1>Data Obat</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Obat</th>
            <th>Supplier</th>
            <th>Stock</th>
            <th>harga</th>
            <th>Ditambahkan Oleh</th>
        </tr>
        <?php
        $no = 1;
        foreach ($content as $row) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row->nama_obat; ?></td>
                <td><?= $row->namasupplier; ?></td>
                <td><?= $row->stock; ?></td>
                <td>Rp.<?= number_format($row->harga, 0, ',', '.'); ?></td>
                <td><?= $row->updated_by; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>