<?= $this->include('__Templates/header'); ?>
<?= $this->include('__Templates/navbar'); ?>
<?= $this->include('__Templates/sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Perizinan</h1>
        <nav>
            <ol class="breadcrumb">

            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-13">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Perizinan</h5>

                        <!-- General Form Elements -->
                        <form action="/perizinan/tambah_perizinan" method="post">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputText" name="nama_usaha">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Pemilik</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputText" name="nama_pemilik">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputJob" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputJob" name="jabatan">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputBusinessType" class="col-sm-2 col-form-label">Jenis Usaha</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputBusinessType" name="jenis_usaha">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" name="alamat"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jenisKelamin" class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="jenisKelamin" name="kecamatan">
                                        <option value="Kecamatan Pelaihari">Kecamatan Pelaihari</option>
                                        <option value="Kecamatan Bajuin">Kecamatan Bajuin</option>
                                        <option value="Kecamatan Bati-Bati">Kecamatan Bati-Bati</option>
                                        <option value="Kecamatan Tambang Ulang">Kecamatan Tambang Ulang</option>
                                        <option value="Kecamatan Batu Ampar">Kecamatan Batu Ampar</option>
                                        <option value="Kecamatan Kurau">Kecamatan Kurau</option>
                                        <option value="Kecamatan Bumi Makmur">Kecamatan Bumi Makmur</option>
                                        <option value="Kecamatan Kintap">Kecamatan Kintap</option>
                                        <option value="Kecamatan Takisung">Kecamatan Takisung</option>
                                        <option value="Kecamatan Panyipatan">Kecamatan Panyipatan</option>
                                        <option value="Kecamatan Jorong">Kecamatan Jorong</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Hasil Pemeriksaan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" name="hasil_pemeriksaan"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputOwnedPermits" class="col-sm-2 col-form-label">Izin Yang Dimiliki</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputOwnedPermits" name="izin_dimiliki">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputMissingPermits" class="col-sm-2 col-form-label">Izin Yang Belum Dimiliki</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputMissingPermits" name="izin_belumdimiliki">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputValidityPeriod" class="col-sm-2 col-form-label">Masa Berlaku</label>
                                <div class="col-sm-10">
                                    <input type="Date" class="form-control" id="inputValidityPeriod" name="masa_berlaku">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" name="keterangan"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    <a href="/tabel_perizinan" class="btn btn-secondary">Kembali</a>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>

                </form><!-- End General Form Elements -->

            </div>
        </div>
        </div>
        </div>
    </section>

</main><!-- End #main -->

<?= $this->include('__templates/footer'); ?>