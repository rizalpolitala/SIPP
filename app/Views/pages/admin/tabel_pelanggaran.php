<?= $this->include('__Templates/header'); ?>
<?= $this->include('__Templates/navbar'); ?>
<?= $this->include('__Templates/sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tabel Data Pelanggaran</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Tabel Pelanggaran</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Pelanggaran</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No. Surat</th>
                                    <th>Tanggal Input</th>
                                    <th>NIK</th>
                                    <th>Nama Pelanggar</th>
                                    <th>Waktu Kejadian</th>
                                    <th>Tempat Kejadian</th>
                                    <th>Sanksi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12345</td>
                                    <td>2024/06/01</td>
                                    <td>321654987</td>
                                    <td>John Doe</td>
                                    <td>2024/06/01 10:00</td>
                                    <td>Jl. Merdeka</td>
                                    <td>Teguran</td>
                                    <td>
                                        <a href="edit_pelanggaran" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="detail_pelanggaran" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Detail">
                                            <i class="bi bi-info-circle"></i>
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