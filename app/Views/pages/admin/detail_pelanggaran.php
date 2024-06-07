<?= $this->include('__Templates/header'); ?>
<?= $this->include('__Templates/navbar'); ?>
<?= $this->include('__Templates/sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail Pelanggaran</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item">Tabel Pelanggaran</li>
                <li class="breadcrumb-item active">Detail Pelanggaran</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-13">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detail Pelanggaran</h5>

                        <!-- Detail Data Pelanggaran -->
                        <form>
                            <div class="row mb-3">
                                <label for="noSurat" class="col-sm-2 col-form-label">No. Surat</label>
                                <div class="col-sm-10">
                                    <p class="form-control-plaintext" id="noSurat"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggalInput" class="col-sm-2 col-form-label">Tanggal Input</label>
                                <div class="col-sm-10">
                                    <p class="form-control-plaintext" id="tanggalInput"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <p class="form-control-plaintext" id="nik"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="namaPelanggar" class="col-sm-2 col-form-label">Nama Pelanggar</label>
                                <div class="col-sm-10">
                                    <p class="form-control-plaintext" id="namaPelanggar"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="namaOrangTua" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                                <div class="col-sm-10">
                                    <p class="form-control-plaintext" id="namaOrangTua"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <p class="form-control-plaintext" id="tanggalLahir"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <p class="form-control-plaintext" id="alamat"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <p class="form-control-plaintext" id="jenisKelamin"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="suku" class="col-sm-2 col-form-label">Suku</label>
                                <div class="col-sm-10">
                                    <p class="form-control-plaintext" id="suku"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <p class="form-control-plaintext" id="pekerjaan"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="waktuKejadian" class="col-sm-2 col-form-label">Waktu Kejadian</label>
                                <div class="col-sm-10">
                                    <p class="form-control-plaintext" id="waktuKejadian"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tempatKejadian" class="col-sm-2 col-form-label">Tempat Kejadian</label>
                                <div class="col-sm-10">
                                    <p class="form-control-plaintext" id="tempatKejadian"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="uraianKejadian" class="col-sm-2 col-form-label">Uraian Kejadian</label>
                                <div class="col-sm-10">
                                    <p class="form-control-plaintext" id="uraianKejadian"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="saksi" class="col-sm-2 col-form-label">Saksi</label>
                                <div class="col-sm-10">
                                    <p class="form-control-plaintext" id="saksi"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="sanksi" class="col-sm-2 col-form-label">Sanksi</label>
                                <div class="col-sm-10">
                                    <p class="form-control-plaintext" id="sanksi"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <img src="" alt="Foto Pelanggar" class="img-fluid" />
                                </div>
                                <br>
                                <div class="col-sm-10 offset-sm-2">
                                    <a href="tabel_pelanggaran" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<?= $this->include('__Templates/footer'); ?>