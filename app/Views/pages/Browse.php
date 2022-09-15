<section>
    <div class="row pt-5">
        <div class="col d-flex justify-content-center">
                <div class="list-group w-50 ">
                    <?php foreach ($data as $item) : ?>
                        <a href="/browse/<?= $item->letter; ?>/<?= $item->alias; ?>" class="list-group-item list-group-item-action">
                            <?= $item->word; ?>
                        </a>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>