<?= $this->include('template/header'); ?>
<?php
if ($artikel) :
  foreach ($artikel as $row) : ?>
    <article class="entry">
      <h2><a href="<?= base_url('/artikel/' . $row['slug']); ?>" style="text-decoration:none; color:black;"><?= $row['judul']; ?></a></h2>
      <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>">
      <p><?= substr($row['isi'], 0, 1000); ?></p>
    </article>

    <hr class="divider" />
  <?php endforeach;
else : ?>
  <article class="entry">
    <h2>Belum Ada Data.</h2>
  </article>
<?php endif; ?>
<?= $this->include('template/footer'); ?>