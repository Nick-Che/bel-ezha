<section>
    <?php foreach ($data as $item) : ?>
        <div class="row mt-5">
            <div class="col w-50 d-flex justify-content-center">
                <div class="card w-50" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item->word; ?></h5>
                        <p class="card-text"><?= $item->translation; ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>