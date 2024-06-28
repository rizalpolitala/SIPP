<!DOCTYPE html>
<html>

<head>
    <title>Perizinan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        .ttd {
            margin-top: 50px;
            text-align: right;
        }

        .ttd p {
            margin: 0;
        }
    </style>
</head>

<body>
    <h1>Daftar Perizinan</h1>
    <table>
        <thead>
            <tr>
                <th>ID Perizinan</th>
                <th>Nama Usaha</th>
                <th>Nama Pemilik</th>
                <th>Jabatan</th>
                <th>Jenis Usaha</th>
                <th>Alamat</th>
                <th>Kecamatan</th>
                <th>Hasil Pemeriksaan</th>
                <th>Izin Dimiliki</th>
                <th>Masa Berlaku</th>
                <th>Izin Belum Dimiliki</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perizinan as $item) : ?>
                <tr>
                    <td><?= $item['id_perizinan'] ?></td>
                    <td><?= $item['nama_usaha'] ?></td>
                    <td><?= $item['nama_pemilik'] ?></td>
                    <td><?= $item['jabatan'] ?></td>
                    <td><?= $item['jenis_usaha'] ?></td>
                    <td><?= $item['alamat'] ?></td>
                    <td><?= $item['kecamatan'] ?></td>
                    <td><?= $item['hasil_pemeriksaan'] ?></td>
                    <td><?= $item['izin_dimiliki'] ?></td>
                    <td><?= $item['masa_berlaku'] ?></td>
                    <td><?= $item['izin_belumdimiliki'] ?></td>
                    <td><?= $item['keterangan'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="ttd">
        <p>Mengetahui</p>
        <p> </p>
        <p></p>
        <p></p>
        <p></p>
        <br><br><br><br><br>
        <p>____________________</p>
        <p>(Bapak Masaninor,S.Sos)</p </div>
</body>
</html>