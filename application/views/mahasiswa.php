<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data mahasiswa
            <small> Control Panel</small>
        </h1>
    </section>

    <section class="content">
        <?= $this->session->flashdata('message'); ?>

        <nav class="navbar navbar-default mt-1">
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Mahasiswa
            </button>
            <a class ="btn btn-danger" href="<?= base_url('mahasiswa/print') ?>"><i class="fa fa-print">Print</i></a>
            <div class="dropdown">
                <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Eksport
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('mahasiswa/pdf1') ?>">PDF</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('mahasiswa/exportExcel') ?>">EXCEL</a></li>
                </ul>
            </div>

            <a class="btn btn-info" href="<?= base_url('mahasiswa/tampil_grafik') ?>"><i class="fa fa-chart-area">Grafik</i></a>

            <div class="navbar-form mt-1">
                <?= form_open('mahasiswa/search')?>
                    <input type="text" name="keyword" class="form" placeholder="Search">
                    <button type="submit" class="btn btn-success">Cari</button>
                <?= form_close()?>
            </div>
        </nav>
        <table class="table">
            <tr>
                <th>No</th>
                <th>NAMA MAHASISWA</th>
                <th>NIM</th>
                <th>TANGGAL LAHIR</th>
                <th>JURUSAN</th>
                <th colspan="2">AKSI</th>
            </tr>
            <?php
            $no = 1;
            foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhs->nama ?></td>
                    <td><?= $mhs->nim ?></td>
                    <td><?= $mhs->tgl_lahir ?></td>
                    <td><?= $mhs->jurusan ?></td>
                    <td><?= anchor('mahasiswa/detail/'.$mhs->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')?>
                    </td>
                    <td onclick="javascript: return confirm('Anda Yakin Hapus ?')"><?php echo anchor('mahasiswa/hapus/'.  $mhs->id, '<div 
                    class = "btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>' ) ?>
                    </td>
                    <td><?= anchor('mahasiswa/edit/' . $mhs->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                    </td>
                    

                </tr>
            <?php endforeach ?>
        </table>
    </section>
    <nav aria-label="Page navigation example" class="pagination justify-content-center">
<ul class="pagination">
    <li class="page-item">
    <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
    </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
    </a>
    </li>
</ul>
</nav>
</div>

<!--Modal --> 
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Data</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                <?= form_open_multipart ('mahasiswa/tambah_aksi') ?>
                    <div class="form-group">
                        <label> Nama Mahasiswa</label>
                        <input type="text" name="nama" class="form-control">
                        <label> NIM</label>
                        <input type="text" name="nim" class="form-control">
                        <label> Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control">
                        <label> Jurusan</label>
                        <input type="text" name="jurusan" class="form-control">
                        <label> Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                        <label> Email</label>
                        <input type="text" name="email" class="form-control">
                        <label> No. Telepon</label>
                        <input type="text" name="no_telp" class="form-control">
                        <label> Upload Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    </div>

                    <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                <?= form_close(); ?>
            </div>
        </div>
</div>

