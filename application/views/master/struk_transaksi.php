<!-- Bagian View 'struk_transaksi' -->

<!DOCTYPE html>
<html>

<head>
    <title>Struk Pembelian</title>
    <style>
        /* CSS style untuk halaman struk */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
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
    <div class="logo">
        <img src="<?php echo ('http://localhost/ApotekSambu_Tugas/assets/images/logo-baru.png') ?>" alt="Logo PS">
        <img src="<?php echo ('http://localhost/ApotekSambu_Tugas/assets/images/apoteksambu.png') ?>" alt="Logo Apotek Sambu">
    </div>

    <h1>Struk Pembelian</h1>
    <table>
        <tr>
            <th>Nama</th>
            <td><?= $data_transaksi->nama ?></td>
        </tr>
        <tr>
            <th>Keluhan</th>
            <td><?= $data_transaksi->keluhan; ?></td>
        </tr>
        <tr>
            <th>Obat</th>
            <td><?= $data_transaksi->nama_obat; ?></td>
        </tr>
        <tr>
            <th>Pcs</th>
            <td><?= $data_transaksi->pcs; ?></td>
        </tr>
        <tr>
            <th>Total Harga</th>
            <td><?= 'RP ' . number_format($data_transaksi->total_harga, 2, ',', '.'); ?></td>
        </tr>
    </table>

    <div class="footer">
        <p>Terima kasih atas pembelian Anda!</p>
        <p>Lunas!</p>
    </div>
</body>

</html>