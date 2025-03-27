<?=$this->extend("layout/sablona");?>
<?=$this->section("content");?>
 
<div class="container mt-4">
        <h1 class="text-center"> Komponent: <?= esc($komponent->nazev) ?></h1>
        <div class="card mx-auto" style="max-width: 600px;">
            <img src="<?= base_url('obrazky/komponenty/' . esc($komponent->pic)) ?>" class="card-img-top" alt="<?= esc($komponent->nazev) ?>">
            <div class="card-body">
                <p><strong>Výrobce komponentu:</strong> <?= esc($komponent->vyrobce) ?></p>
                <p><strong>Typ komponentu:</strong> <?= esc($komponent->typKomponent) ?></p>
                <p><strong>Odkaz:</strong> <a href="<?= esc($komponent->odkaz) ?>" target="_blank">Alza</a></p>
            </div>
        </div>
    </div>
    <?=$this->endSection();?>