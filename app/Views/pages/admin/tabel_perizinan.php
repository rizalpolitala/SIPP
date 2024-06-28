<?= $this->include('__Templates/header'); ?>
<?= $this->include('__Templates/navbar'); ?>
<?= $this->include('__Templates/sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tabel Data Perizinan</h1>
        <nav>
            <ol class="breadcrumb">


            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Perizinan</h5>
                        <?php if (session()->getFlashdata('message')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('message'); ?>
                            </div>
                        <?php endif; ?>
                        <?php
                        if (session()->get('level') != 'kepala') {
                        ?>
                            <a href="/form_perizinan"><button class="btn btn-primary">Tambah</button></a>
                            <a href="/cetak_perizinan_pdf"><button class="btn btn-secondary">Cetak</button></a>
                        <?php
                        }
                        ?>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
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
                                    <?php
                                    if (session()->get('level') != 'kepala') {
                                    ?>
                                        <th>Aksi</th>
                                    <?php
                                    }
                                    ?>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($perizinan as $item) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>

                                        <td><?= $item['nama_usaha']; ?></td>
                                        <td><?= $item['nama_pemilik']; ?></td>
                                        <td><?= $item['jabatan']; ?></td>
                                        <td><?= $item['jenis_usaha']; ?></td>
                                        <td><?= $item['alamat']; ?></td>
                                        <td><?= $item['kecamatan']; ?></td>
                                        <td><?= $item['hasil_pemeriksaan']; ?></td>
                                        <td><?= $item['izin_dimiliki']; ?></td>
                                        <td><?= $item['izin_belumdimiliki']; ?></td>
                                        <td><?= $item['masa_berlaku']; ?></td>
                                        <td><?= $item['keterangan']; ?></td>
                                        <?php
                                        if (session()->get('level') != 'kepala') {
                                        ?>
                                            <td>
                                                <a href="/edit_perizinan/<?= $item['id_perizinan']; ?>" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Ubah">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="/delete_perizinan/<?= $item['id_perizinan']; ?>" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                <?php endforeach; ?>
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