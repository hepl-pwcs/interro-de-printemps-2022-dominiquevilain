<div class="mt-8">
    <div class="flex">
        <?php for ($i = 1; $i <= MAX_PAGE; $i++): ?>
            <?php if ($i === $view['data']['p']): ?>
                <span class="px-3 py-2 mx-1 font-medium text-white rounded-md bg-blue-500"><?= $i ?></span>
            <?php else: ?>
                <a href="?p=<?= $i ?><?= isset($_GET['author'])?'&author='.$_GET['author']:'' ?><?= isset($_GET['category'])?'&category='.$_GET['category']:'' ?>"
                   class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white"><?= $i ?></a>
            <?php endif ?>

        <?php endfor ?>
    </div>
</div>