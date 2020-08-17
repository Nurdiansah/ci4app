<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class='container'>
    <div class='row'>
        <div class='col'>
            <h2 class="mt-2">Detail Klub</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/klub/logo/<?= $klub['logo'] ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><b><?= $klub['nm_klub'] ?></b></h5>
                            <p class="card-text"><b>Pelatih : <?= $klub['pelatih']; ?></b></p>
                            <p class="card-text"><b>Kapten : <?= $klub['kapten']; ?></b></p>
                            <p class="card-text"><b>Stadion : <?= $klub['stadion']; ?></b></p>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                            <br>
                            <br>
                            <a href="">Kembali ke daftar klub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>