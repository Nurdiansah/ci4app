<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class='container'>
    <div class='row'>
        <div class='col'>
            <h2>Contact Us</h2>
            <?php foreach ($alamat as $a) : ?>
                <ul class="list-group mb-3">
                    <li class="list-group-item active"><?= $a['type']; ?></li>
                    <li class="list-group-item"><?= $a['alamat']; ?></li>
                    <li class="list-group-item"><?= $a['kota']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>