<?=$this->extend("layout/sablona");?>
<?=$this->section("content");?>
    <div class="container mt-3">
        <h1 class="text-center">Seznam typů komponent</h1>
        <div class="row">
            <?php foreach ($komponenty as $komponenty): ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= anchor('komponent/'.$komponenty->url, esc($komponenty->typKomponent), ['class' => 'text-white text-decoration-none ']) ?>
                                    <button type="button" class="btn btn-secondary">Předělat</button>
                                    <button type="button" class="btn btn-warning">Oddělat</button>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <button type="button" class="btn btn-light">Přidat</button>
        </div>
    </div>
<?=$this->endSection();?>

