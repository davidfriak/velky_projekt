<?= $this->extend("layout/sablona") ?>
<?= $this->section("content") ?>
<div class="container mt-3">
    <h1 class="text-center">Seznam komponentu typu: <?= esc($typ->typKomponent) ?></h1>
    <div class="row">
        <?php foreach ($komponent as $komponent): ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= anchor('informace/'.$komponent->id, esc($komponent->nazev)) ?>
                        </h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        
    </div>
</div>
<?= $this->endSection() ?>