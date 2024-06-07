<?= $this->include('__Templates/header'); ?>
<?= $this->include('__Templates/navbar'); ?>
<?= $this->include('__Templates/sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tabel Data Perizinan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Perizinan</h5>
                        <a href="/form_perizinan"><button class="btn btn-primary">Tambah</button></a>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Nama Perusahaan</th>
                                    <th>Pemilik</th>
                                    <th>Pekerjaan</th>
                                    <th>Jenis Usaha</th>
                                    <th>Alamat</th>
                                    <th>Kecamatan</th>
                                    <th>Hasil Pemeriksaan</th>
                                    <th>Izin Yang Dimiliki</th>
                                    <th>Izin Yang Belum Dimiliki</th>
                                    <th>Masa Berlaku</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bintang dilangit</td>
                                    <td>Norrahmah</td>
                                    <td>Pengusaha</td>
                                    <td>Material</td>
                                    <td>Panggung</td>
                                    <td>Playday</td>
                                    <td>Bagus</td>
                                    <td>Ada</td>
                                    <td>Belum</td>
                                    <td>2029</td>
                                    <td>Lolos</td>
                                    <td>
                                        <a href="edit_perizinan" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="detail.php?id=12345" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?= $this->include('__templates/footer'); ?>