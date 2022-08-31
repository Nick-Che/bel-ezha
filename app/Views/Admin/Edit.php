<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="my-3 text-center">
                <h4>EDIT DATA
                    <hr class="text-denger">
                </h4>

                <div class="card rounded">
                    <div class="card-header">
                        <?php
                        if (session()->getFlashdata('status')) {
                            echo "<div class=\"alert alert-danger\" role=\"alert\">" . session()->getFlashdata('status') . "</div>";
                        }
                        ?>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('admin/update/'.$word['id']); ?>">
                            <?= csrf_field(); ?>
                            <div class="body">
                                <div class="mb-3 text-start">
                                    <label class="ms-2 form-label">Word</label>
                                    <input type="text" class="form-control" name="word" id="word" value="<?= $word['word']; ?>">
                                </div>
                                <div class="mb-3 text-start">
                                    <label class="ms-2 form-label">Translation</label>
                                    <input type="text" class="form-control" name="translation" id="translation" value="<?= $word['translation']; ?>">
                                </div>
                                <div class="mb-3 text-start">
                                    <label class="ms-2 form-label">Letter</label>
                                    <input type="text" class="form-control" name="letter" id="letter" value="<?= $word['letter']; ?>">
                                </div>
                                <div class="mb-3 text-start">
                                    <label class="ms-2 form-label">Meaning</label>
                                    <input type="text" class="form-control" name="meaning" id="meaning" value="<?= $word['meaning']; ?>">
                                </div>
                                <div class="mb-3 text-start">
                                    <label class="ms-2 form-label">Alias</label>
                                    <input type="text" class="form-control" name="alias" id="alias" value="<?= $word['alias']; ?>">
                                </div>
                            </div>
                            <div class="footer">
                                <a class="btn btn-danger" href="<?= base_url('admin'); ?>">Cancel</a>
                                <button type="submit" class="btn btn-primary" name="btnSaveData">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>