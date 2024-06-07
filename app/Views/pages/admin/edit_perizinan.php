<?= $this->include('__Templates/header'); ?>
<?= $this->include('__Templates/navbar'); ?>
<?= $this->include('__Templates/sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Perizinan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Form Perizinan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-13">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Perizinan</h5>

                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputText">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Pemilik</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputJob" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputJob">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputBusinessType" class="col-sm-2 col-form-label">Jenis Usaha</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputBusinessType">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputAddress" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputAddress">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDistrict" class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputDistrict">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputInspection" class="col-sm-2 col-form-label">Hasil Pemeriksaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputInspection">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputOwnedPermits" class="col-sm-2 col-form-label">Izin Yang Dimiliki</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputOwnedPermits">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputMissingPermits" class="col-sm-2 col-form-label">Izin Yang Belum Dimiliki</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputMissingPermits">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputValidityPeriod" class="col-sm-2 col-form-label">Masa Berlaku</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputValidityPeriod">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNotes" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputNotes">
                                </div>
                            </div>
                        </form>

                        <button type="submit" class="btn btn-primary">Simpan</button>
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