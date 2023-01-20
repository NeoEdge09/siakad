<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <center>
        <h1>Data Mahasiswa Universitas Harvard</h1>
    </center>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Tanggal Lahir</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Foto</th>
        </tr>
        <?php
        $no=1;
        foreach ($mahasiswa as $mhs):?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $mhs->nama ?></td>
            <td><?= $mhs->nim ?></td>
            <td><?= $mhs->tgl_lahir ?></td>
            <td><?= $mhs->jurusan ?></td>
            <td><?= $mhs->alamat ?></td>
            <td><?= $mhs->email ?></td>
            <td><?= $mhs->no_telp ?></td>
            <td><img src="<?= base_url()?>assets/foto/<?=$mhs->foto;?>" width="100" height="100"></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
        windows.print();
    </script>
    </div>
</body>
</html>