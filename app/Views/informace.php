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
        <h3 class="mt-4">Technické parametry</h3>
        <table class="table table-bordered">
            <tbody>
                <?php foreach ($parametry as $param): ?>
                    <tr>
                        <th><?= esc($param->nazev) ?></th>
                        <td><?= esc($param->hodnota) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>
<?=$this->endSection();?>