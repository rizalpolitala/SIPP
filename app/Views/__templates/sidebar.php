<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('index.php'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <!-- Forms Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('form_pelanggaran'); ?>">
                        <i class="bi bi-circle"></i><span>Form Pelanggaran</span>
                    </a>
                </li>
                <!-- Tambahkan item-form lainnya sesuai kebutuhan -->
            </ul>
        </li><!-- End Forms Nav -->

        <!-- Tables Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('tabel_pelanggaran'); ?>">
                        <i class="bi bi-circle"></i><span>Tabel Pelanggaran</span>
                    </a>
                </li>
                <!-- Tambahkan item-tabel lainnya sesuai kebutuhan -->
            </ul>
        </li><!-- End Tables Nav -->
        <br>

        <li class="nav-heading">Pages</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('profile'); ?>">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('faq'); ?>">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <!-- Other page links -->

    </ul>
</aside><!-- End Sidebar -->