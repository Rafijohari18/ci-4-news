
<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>
    
    <div class="starter-template text-center py-5 px-3">
        <h1>Hai ! <?= session()->get('name'); ?></h1>
        <p class="lead">Selamat Datang di Halaman Dashboard, Kita sudah belajar membuat Authentikasi dengan Codeigniter 4</p>
    </div>

<?= $this->endSection() ?>
