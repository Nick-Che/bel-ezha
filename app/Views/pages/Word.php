
<section>
    <ul>
        <?php foreach ($data as $item) : ?>
            <li>
                <div class="row m-1">
                    <div class="col-2 mx-5">
                        <?= $item->word; ?>
                    </div>
                    <div class="col-2 mx-5">
                        <?= $item->translation; ?>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</section>