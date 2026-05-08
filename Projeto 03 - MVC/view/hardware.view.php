<section class="mt-32">
    <article class="bg-zinc-800 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5 mx-4 md:mx-10 lg:mx-60 p-5 rounded-xl mb-14">
        <?php foreach ($produtosDestaque as $destaque): ?>
            <?php if ($destaque['tipo'] === 'hardware'): ?>
                <a href="" class="bg-zinc-50 rounded-lg p-3 hover:scale-105 transition">
                    <img src="../img/produtos/<?= $destaque['img'] ?>" class="rounded-lg p-3">
                    <p class="px-4 pb-4 text-justify font-bold text-sm"><?= $destaque['descricao'] ?></p>
                    <p class="text-red-600 px-4 text-justify font-bold text-base">de <s>R$ <?= $destaque['valor_antigo'] ?></s> por</p>
                    <p class="text-green-600 px-4 text-justify font-bold text-lg">R$ <?= $destaque['valor_atual'] ?></p>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>

    </article>
</section>