<?= $this->include('__Templates/header'); ?>
<?= $this->include('__Templates/navbar'); ?>
<?= $this->include('__Templates/sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Pelanggaran</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item">Tabel Pelanggaran</li>
                <li class="breadcrumb-item active">Edit Pelanggaran</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-13">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pelanggaran</h5>

                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="noSurat" class="col-sm-2 col-form-label">No. Surat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="noSurat">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggalInput" class="col-sm-2 col-form-label">Tanggal Input</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggalInput">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nik">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="namaPelanggar" class="col-sm-2 col-form-label">Nama Pelanggar</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namaPelanggar">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="namaOrangTua" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namaOrangTua">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggalLahir">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="alamat" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="jenisKelamin">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="suku" class="col-sm-2 col-form-label">Suku</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="suku">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="pekerjaan">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="waktuKejadian" class="col-sm-2 col-form-label">Waktu Kejadian</label>
                                <div class="col-sm-10">
                                    <input type="datetime-local" class="form-control" id="waktuKejadian">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tempatKejadian" class="col-sm-2 col-form-label">Tempat Kejadian</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tempatKejadian">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="uraianKejadian" class="col-sm-2 col-form-label">Uraian Kejadian</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="uraianKejadian" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="saksi" class="col-sm-2 col-form-label">Saksi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="saksi">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="sanksi" class="col-sm-2 col-form-label">Sanksi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="sanksi" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="foto">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="tabel_pelanggaran" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<?= $this->include('__templates/footer'); ?>