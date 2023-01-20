<div class="content-wrapper">
    <section class ="content">
        <h4>
            <strong>DETAIL DATA MAHASISWA</strong>
        </h4>
        <table class="table">
            <tr>
                <th>Nama Lengkap</th>
                <td><?= $detail->nama ?> </td>
            </tr>
            <tr>
                <th>NIM</th>
                <td><?= $detail->nim ?> </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?= $detail->tgl_lahir ?> </td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td><?= $detail->jurusan ?> </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?= $detail->alamat ?> </td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td><?= $detail->email ?> </td>
            </tr>
            <tr>
                <th>No. Telpon</th>
                <td><?= $detail->no_telp ?> </td>
            </tr>
            <tr>
                <td>
                    <img src="<?= base_url() ?>assets/foto/<?= $detail->foto; ?>" width="90" height="110">
                </td>
            </tr>
        </table>
        <a href="<?= base_url('mahasiswa/index'); ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>