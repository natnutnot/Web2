<?= view('layouts/header') ?>

<div class="container mt-4">
    <h2>✏️ Edit Buku</h2>

    <form action="/buku/update/<?= $buku['id'] ?>" method="post">
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" value="<?= esc($buku['judul']) ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Penulis</label>
            <input type="text" name="penulis" value="<?= esc($buku['penulis']) ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Penerbit</label>
            <input type="text" name="penerbit" value="<?= esc($buku['penerbit']) ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" value="<?= esc($buku['tahun_terbit']) ?>" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/buku" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= view('layouts/footer') ?>
