<?= $this->include('__Templates/header'); ?>
<?= $this->include('__Templates/navbar'); ?>
<?= $this->include('__Templates/sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Perizinan</h1>
        <nav>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-13">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Perizinan</h5>

                        <!-- General Form Elements -->
                        <form action="/perizinan/update_perizinan" method="post">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputText" name="nama_usaha" value="<?= $perizinan['nama_usaha'] ?>">
                                    <input type="hidden" name="id" value="<?= $perizinan['id_perizinan'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Pemilik</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputText" name="nama_pemilik" value="<?= $perizinan['nama_pemilik'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputJob" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputJob" name="jabatan" value="<?= $perizinan['jabatan'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputBusinessType" class="col-sm-2 col-form-label">Jenis Usaha</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputBusinessType" name="jenis_usaha" value="<?= $perizinan['jenis_usaha'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" name="alamat"><?= $perizinan['alamat'] ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jenisKelamin" class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="jenisKelamin" name="kecamatan">
                                        <option <?= $perizinan['kecamatan'] == 'Kecamatan Pelaihari' ? 'selected' : '' ?> value="Kecamatan Pelaihari">Kecamatan Pelaihari</option>
                                        <option <?= $perizinan['kecamatan'] == 'Kecamatan Bajuin' ? 'selected' : '' ?> value="Kecamatan Bajuin">Kecamatan Bajuin</option>
                                        <option <?= $perizinan['kecamatan'] == 'Kecamatan Bati-Bati' ? 'selected' : '' ?> value="Kecamatan Bati-Bati">Kecamatan Bati-Bati</option>
                                        <option <?= $perizinan['kecamatan'] == 'Kecamatan Tambang Ulang' ? 'selected' : '' ?> value="Kecamatan Tambang Ulang">Kecamatan Tambang Ulang</option>
                                        <option <?= $perizinan['kecamatan'] == 'Kecamatan Batu Ampar' ? 'selected' : '' ?> value="Kecamatan Batu Ampar">Kecamatan Batu Ampar</option>
                                        <option <?= $perizinan['kecamatan'] == 'Kecamatan Kurau' ? 'selected' : '' ?> value="Kecamatan Kurau">Kecamatan Kurau</option>
                                        <option <?= $perizinan['kecamatan'] == 'Kecamatan Bumi Makmur' ? 'selected' : '' ?> value="Kecamatan Bumi Makmur">Kecamatan Bumi Makmur</option>
                                        <option <?= $perizinan['kecamatan'] == 'Kecamatan Kintap' ? 'selected' : '' ?> value="Kecamatan Kintap">Kecamatan Kintap</option>
                                        <option <?= $perizinan['kecamatan'] == 'Kecamatan Takisung' ? 'selected' : '' ?> value="Kecamatan Takisung">Kecamatan Takisung</option>
                                        <option <?= $perizinan['kecamatan'] == 'Kecamatan Panyipatan' ? 'selected' : '' ?> value="Kecamatan Panyipatan">Kecamatan Panyipatan</option>
                                        <option <?= $perizinan['kecamatan'] == 'Kecamatan Jorong' ? 'selected' : '' ?> value="Kecamatan Jorong">Kecamatan Jorong</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Hasil Pemeriksaan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" name="hasil_pemeriksaan"><?= $perizinan['hasil_pemeriksaan'] ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputOwnedPermits" class="col-sm-2 col-form-label">Izin Yang Dimiliki</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputOwnedPermits" name="izin_dimiliki" value="<?= $perizinan['izin_dimiliki'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputMissingPermits" class="col-sm-2 col-form-label">Izin Yang Belum Dimiliki</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputMissingPermits" name="izin_belumdimiliki" value="<?= $perizinan['izin_belumdimiliki'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputValidityPeriod" class="col-sm-2 col-form-label">Masa Berlaku</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="masa_berlaku" value="<?= $perizinan['masa_berlaku'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" name="keterangan"><?= $perizinan['keterangan'] ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Update Data</button>
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