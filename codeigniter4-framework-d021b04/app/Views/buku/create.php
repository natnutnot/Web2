<?= view('layouts/header') ?>

<div class="container mt-4">
    <h2>Tambah Buku</h2>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif ?>

    <form action="/buku/store" method="post">
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control">
        </div>
        <div class="mb-3">
            <label>Penulis</label>
            <input type="text" name="penulis" class="form-control">
        </div>
        <div class="mb-3">
            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form-control">
        </div>
        <div class="mb-3">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/buku" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= view('layouts/footer') ?>
