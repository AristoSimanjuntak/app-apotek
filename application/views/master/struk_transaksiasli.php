<!DOCTYPE html>
<html>

<head>
    <title>Struk Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .logo {
            text-align: center;
            margin-bottom: 10px;
        }

        .logo img {
            width: 75px;
            margin-right: 10px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 50%;
            font-size: 18px;
            border: 1px solid #ddd;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #161876E1;
            color: white;
            font-weight: bold;
        }

        table td {
            background-color: #f9f9f9;
        }

        .footer {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }

        .footer p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <!-- Logo Apotek -->
    <div class="logo">
        <img src="<?php echo ('http://localhost/ApotekSambu/assets/images/logo-baru.png') ?>" alt="Logo PS">
        <img src="<?php echo ('http://localhost/ApotekSambu/assets/images/apoteksambu.png') ?>" alt="Logo Apotek Sambu">
    </div>

    <!-- Judul Struk -->
    <h1>Struk Pembelian</h1>

    <!-- Tabel Data Pembelian -->
    <table>
        <tr>
            <th>Nama</th>
            <td>KIKI</td>
        </tr>
        <tr>
            <th>Keluhan</th>
            <td>PUSING</td>
        </tr>
        <tr>
            <th>Obat</th>
            <td>Paracetamol</td>
        </tr>
        <tr>
            <th>Pcs</th>
            <td>10</td>
        </tr>
        <tr>
            <th>Total Harga</th>
            <td>RP 100.000</td>
        </tr>

        <?php
        $no = 1;
        foreach ($content as $row) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row->nama; ?></td>
                <td><?= $row->keluhan; ?></td>
                <td><?= $row->nama_obat; ?></td>
                <td><?= $row->pcs; ?></td>
                <td><?= $row->total_harga; ?></td>
            </tr>
        <?php } ?>
    </table>

    <!-- Footer -->
    <div class="footer">
        <p>Terima kasih atas pembelian Anda!</p>
        <p>Lunas!</p>
    </div>
</body>

</html>
