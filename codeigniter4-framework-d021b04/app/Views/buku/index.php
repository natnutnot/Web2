<?= view('layouts/header') ?>

<div class="container mt-4">
    <h2>Daftar Buku</h2>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif ?>
    <a href="/buku/create" class="btn btn-primary mb-3">+ Tambah Buku</a>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($buku as $b): ?>
            <tr>
                <td><?= esc($b['judul']) ?></td>
                <td><?= esc($b['penulis']) ?></td>
                <td><?= esc($b['penerbit']) ?></td>
                <td><?= esc($b['tahun_terbit']) ?></td>
                <td>
                    <a href="/buku/edit/<?= $b['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/buku/delete/<?= $b['id'] ?>" onclick="return confirm('Hapus?')" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= view('layouts/footer') ?>
