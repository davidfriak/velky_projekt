<?= $this->extend("layout/sablona") ?>
<?= $this->section("content") ?>
<div class="container mt-3">
    <h1 class="text-center">Komponent: </h1>
    <div class="row">
        <?php foreach ($komponent as $row): ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= anchor ("informace/".$row->id, esc($row->nazev) ) ?>
                        </h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>