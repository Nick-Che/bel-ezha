<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="my-3 text-center">
                <h4>Редактирование данных
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
                                    <input type="text" class="form-control" name="word" id="word" required value="<?= $word['word']; ?>">
                                </div>
                                <div class="mb-3 text-start">
                                    <label class="ms-2 form-label">Translation</label>
                                    <input type="text" class="form-control" name="translation" id="translation" required value="<?= $word['translation']; ?>">
                                </div>
                                <div class="mb-3 text-start">
                                    <label class="ms-2 form-label">Letter</label>
                                    <input type="text" class="form-control" name="letter" id="letter" required value="<?= rus2translit($word['letter'],'ru'); ?>">
                                </div>                                
                                <div class="mb-3 text-start">
                                    <label class="ms-2 form-label">Alias</label>
                                    <input type="text" class="form-control" name="alias" id="alias" required value="<?= $word['alias']; ?>">
                                </div>
                            </div>
                            <div class="footer">
                                <a class="btn btn-secondary" href="<?= base_url('admin'); ?>">Отмена</a>
                                <button type="submit" class="btn btn-primary" name="btnSaveData">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>