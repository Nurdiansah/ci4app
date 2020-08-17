<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class='container'>
    <div class='row'>
        <div class='col'>
            <h2 class="mt-2 mb-2">Daftar Klub</h2>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Nama Klub</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($klub as $k) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><img src="/img/klub/logo/<?= $k['logo']; ?>" alt="logo chelsea" srcset="" class="sampul"></td>
                            <td><?= $k['nm_klub']; ?></td>
                            <td><a href="/klub/<?= base64_encode($k['id_klub']); ?>"><button type="button" class="btn btn-primary">Detail</button></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>