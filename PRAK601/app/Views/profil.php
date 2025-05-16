<div class="card mx-auto" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= esc($gambar) ?>" class="img-fluid rounded-start" alt="Foto Profil">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= esc($nama) ?></h5>
        <p class="card-text"><strong>NIM:</strong> <?= esc($nim) ?></p>
        <p class="card-text"><strong>Asal Prodi:</strong> <?= esc($asalProdi) ?></p>
        <p class="card-text"><strong>Hobi:</strong> <?= implode(', ', $hobi) ?></p>
        <p class="card-text"><strong>Skill:</strong> Yapping</p>
      </div>
    </div>
  </div>
</div>