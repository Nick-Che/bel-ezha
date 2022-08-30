<div class="card rounded">
    <div class="card-header">
        <?php
        if (session()->getFlashdata('status')) {
            echo "<div class=\"alert alert-danger\" role=\"alert\">" . session()->getFlashdata('status') . "</div>";
        }
        ?>
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url('admin/store'); ?>">
            <?= csrf_field(); ?>
            <div class="body">
                <div class="mb-3 text-start">
                    <label class="ms-2 form-label">Word</label>
                    <input type="text" class="form-control" name="word" id="word" placeholder="word">
                </div>
                <div class="mb-3 text-start">
                    <label class="ms-2 form-label">Translation</label>
                    <input type="text" class="form-control" name="translation" id="translation" placeholder="translation">
                </div>
                <div class="mb-3 text-start">
                    <label class="ms-2 form-label">Letter</label>
                    <input type="text" class="form-control" name="letter" id="letter" placeholder="letter">
                </div>
                <div class="mb-3 text-start">
                    <label class="ms-2 form-label">Meaning</label>
                    <input type="text" class="form-control" name="meaning" id="meaning" placeholder="meaning">
                </div>
                <div class="mb-3 text-start">
                    <label class="ms-2 form-label">Alias</label>
                    <input type="text" class="form-control" name="alias" id="alias" placeholder="alias">
                </div>
            </div>
            <div class="footer">
                <a class="btn btn-secondary" href="<?= base_url('admin'); ?>">Cancel</a>
                <button type="submit" class="btn btn-success" name="btnAddData">Add data</button>
            </div>
        </form>
    </div>
</div>