<section>
    <ul>
        <?php foreach ($data as $item) : ?>
            <li>
                <a href="/browse/<?= $item->letter; ?>/<?= $item->alias; ?>">
                    <div class="row m-1">
                        <div class="col-2 mx-5">
                            <?= $item->word; ?>
                        </div>
                    </div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>