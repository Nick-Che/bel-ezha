<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="my-3 text-center">
                <h4>DICTIONARY
                    <hr class="text-denger">
                </h4>

            </div>
            <div class="card rounded">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <!--Добавление-->
                            <a type="button" class="btn btn-primary btn-sm rounded mb-2" href="<?= base_url('admin/add'); ?>">
                                Add data
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-sm-end">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Records" name='q' value='' aria-describedby="button-addon2">
                                    <button class="btn btn-primary" type="Submit" id="button-addon2">Search</button>
                                </div>
                            </div>
                        </div>
                        <?php
                            if(session()->getFlashdata('status'))
                            {
                                echo "<div class=\"alert alert-success\" role=\"alert\">".session()->getFlashdata('status')."</div>";
                            }
                        ?>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-centered mb-0">
                            <thead>
                                <tr>
                                    <th style="min-width: 10px">#</th>
                                    <th class="col-1">Word</th>
                                    <th class="col-2">Translation</th>
                                    <th class="col-2">Letter</th>
                                    <th class="col-3">Meaning</th>
                                    <th class="col-2">Alias</th>
                                    <th class="col-2 text-center" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($words) : ?>
                                    <?php foreach ($words as $word) : ?>
                                        <tr>
                                            <td><?= $word['id']; ?></td>
                                            <td><?= $word['word']; ?></td>
                                            <td><?= $word['translation']; ?></td>
                                            <td><?= rus2translit($word['letter'], 'ru'); ?></td>
                                            <td><?= $word['meaning']; ?></td>
                                            <td><?= $word['alias']; ?></td>
                                            <td class="text-center">

                                                <button type="button" class="btn btn-primary rounded mx-1" data-bs-toggle="modal" data-bs-target="#editModal">
                                                    <i class="bi bi-pencil"></i>
                                                </button>

                                                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action=<?php echo base_url('store'); ?> method="post">
                                                                <div class="modal-body">
                                                                    <div class="mb-3 text-start">
                                                                        <label class="ms-2 form-label">Word</label>
                                                                        <input type="text" class="form-control" id="word" name="word">
                                                                    </div>
                                                                    <div class="mb-3 text-start">
                                                                        <label class="ms-2 form-label">Translation</label>
                                                                        <input type="text" class="form-control" id="translation" name="translation">
                                                                    </div>
                                                                    <div class="mb-3 text-start">
                                                                        <label class="ms-2 form-label">Letter</label>
                                                                        <input type="text" class="form-control" id="letter" name="letter">
                                                                    </div>
                                                                    <div class="mb-3 text-start">
                                                                        <label class="ms-2 form-label">Meaning</label>
                                                                        <input type="text" class="form-control" id="meaning" name="meaning">
                                                                    </div>
                                                                    <div class="mb-3 text-start">
                                                                        <label class="ms-2 form-label">Alias</label>
                                                                        <input type="text" class="form-control" id="alias" name="alias">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-success">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="button" class="btn btn-danger rounded mx-1" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                    <i class="bi bi-trash3"></i>
                                                </button>

                                                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="button" class="btn btn-success">Confirm</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>