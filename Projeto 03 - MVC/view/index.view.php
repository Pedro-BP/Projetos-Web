<?php
$total = count($produtosDestaque);
if ($total < 5) {
    $primeiraMetade = $produtosDestaque;
    $segundaMetade = [];
} else {
    $metade = ceil($total / 2);
    $primeiraMetadeQtd = floor($metade / 5) * 5;
    if ($primeiraMetadeQtd == 0) {
        $primeiraMetadeQtd = 5;
    }
    $primeiraMetade = array_slice($produtosDestaque, 0, $primeiraMetadeQtd);
    $segundaMetade = array_slice($produtosDestaque, $primeiraMetadeQtd);
}
?>

<div class="mb-14">
    <img src="../img/blitz-banner.png" class="pt-16 w-full object-cover">
</div>
<h2 class="text-2xl md:text-4xl lg:text-5xl font-bold mb-6 mx-4 md:mx-10 lg:mx-60 text-gray-200">
    🎁 Produtos em Destaque
</h2>
<article class="bg-zinc-800 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5 mx-4 md:mx-10 lg:mx-60 p-5 rounded-xl mb-14">

    <?php foreach ($primeiraMetade as $destaque): ?>
        <a href="" class="bg-zinc-50 rounded-lg p-3 hover:scale-105 transition">
            <img src="../img/produtos/<?= $destaque['img'] ?>" class="rounded-lg p-3">
            <p class="px-4 pb-4 text-justify font-bold text-sm"><?= $destaque['descricao'] ?></p>
            <p class="text-red-600 px-4 font-bold text-base">de <s>R$ <?= $destaque['valor_antigo'] ?></s> por</p>
            <p class="text-green-600 px-4 font-bold text-lg">R$ <?= $destaque['valor_atual'] ?></p>
        </a>
    <?php endforeach; ?>

</article>
<article class="mx-4 md:mx-10 lg:mx-60 mb-14 gap-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">

    <?php foreach ($propagandasBanner as $banner): ?>
        <img src="../img/<?= $banner['img'] ?>" class="hover:scale-105 transition-all duration-300">
    <?php endforeach; ?>

</article>
<article class="bg-zinc-800 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5 mx-4 md:mx-10 lg:mx-60 p-5 rounded-xl mb-14">

    <?php foreach ($segundaMetade as $destaque): ?>
        <a href="" class="bg-zinc-50 rounded-lg p-3 hover:scale-105 transition">
            <img src="../img/produtos/<?= $destaque['img'] ?>" class="rounded-lg p-3">
            <p class="px-4 pb-4 text-justify font-bold text-sm"><?= $destaque['descricao'] ?></p>
            <p class="text-red-600 px-4 font-bold text-base">
                de <s>R$ <?= $destaque['valor_antigo'] ?></s> por
            </p>
            <p class="text-green-600 px-4 font-bold text-lg">
                R$ <?= $destaque['valor_atual'] ?>
            </p>
        </a>
    <?php endforeach; ?>

</article>
<h2 class="text-2xl md:text-4xl lg:text-5xl font-bold mb-6 mx-4 md:mx-10 lg:mx-60 text-gray-200">
    👍 Produtos Recomendados
</h2>
<article class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mx-4 md:mx-10 lg:mx-60 mb-14 gap-5">

    <?php foreach ($propagandaGrid as $grid): ?>
        <div class="grid grid-cols-1 items-center p-5 bg-zinc-800 rounded h-auto">
            <img src="../img/<?= $grid['img'] ?>">
            <P class="font-bold text-2xl text-zinc-50 text-start"><?= $grid['marca'] ?></P>
            <p class="text-yellow-600 text-end font-bold text-lg hover:text-yellow-500">Confira Agora -></p>
        </div>
    <?php endforeach; ?>

</article>