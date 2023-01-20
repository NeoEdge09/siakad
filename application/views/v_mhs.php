<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <table border="2px black solid">
        <tr>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Alamat</th>
        </tr>
        <?php foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td><?php echo $mhs['nama']; ?></td>
            <td><?php echo $mhs['nim']; ?></td>
            <td><?php echo $mhs['alamat']; ?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>