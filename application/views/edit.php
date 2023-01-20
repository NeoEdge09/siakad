<div class="content-wrapper">
<section class="content">
        <?php foreach ($mahasiswa as $mhs) { ?>
            <?= form_open_multipart('mahasiswa/update')?>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="hidden" name='id' class="form-control" value="<?= $mhs->id ?>">
                    <input type="text" name='nama' class="form-control" value="<?= $mhs->nama ?>">
                </div>
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name='nim' class="form-control" value="<?= $mhs->nim ?>">
                </div>
                <div class="form-group">
                <label>Tanggal Lahir</label>
                    <input type="date" name='tgl_lahir' class="form-control" value="<?= $mhs->tgl_lahir ?>">
                </div>
                <div class="form-grup">
                <label>Jurusan</label>
                    <input type="text" name='jurusan' class="form-control" value="<?= $mhs->jurusan ?>">
                </div>
                <div class="form-grup">
                <label>Alamat</label>
                    <input type="text" name='alamat' class="form-control" value="<?= $mhs->alamat ?>">
                </div>
                <div class="form-grup">
                <label>Email</label>
                    <input type="text" name='email' class="form-control" value="<?= $mhs->email ?>">
                </div>
                <div class="form-grup">
                <label>No. Telepon</label>
                    <input type="text" name='no_telp' class="form-control" value="<?= $mhs->no_telp ?>">
                </div>
                <div class="form-grup">
                <label> Upload Foto</label>
                    <input type="file" name="foto" class="form-control" value="<?= $mhs->foto?>">
                </div>
                
                <button type="reset" class="btn-danger">Reset</button>
                <button type="submit" class="btn-primary">Simpan</button>
            <?= form_close(); ?>
        <?php } ?>
    </section>
</div>

