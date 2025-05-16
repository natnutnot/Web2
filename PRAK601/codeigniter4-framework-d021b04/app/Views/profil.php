<div class="card" style="width: 18rem;">
  <img src="<?= esc($gambar) ?>" class="card-img-top" alt="Foto Profil">
  <div class="card-body">
    <h5 class="card-title"><?= esc($nama) ?></h5>
    <p class="card-text"><strong>NIM:</strong> <?= esc($nim) ?></p>
    <p><strong>Asal Prodi:</strong> <?= esc($asalProdi) ?></p>
    <p><strong>Hobi:</strong> <?= implode(', ', $hobi) ?></p>
    <p><strong>Skill:</strong> <?= implode(', ', $skill) ?></p>
  </div>
</div>