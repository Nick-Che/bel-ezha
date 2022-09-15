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
                        <div class="col-sm-8 d-flex">
                            <!--Добавление-->
                            <a type="button" class="btn btn-primary btn-sm rounded" href="<?= base_url('admin/add'); ?>">
                                Добавить
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-sm-end">                                
                                <form class="d-flex" role="search" method="get">
                                    <input class="form-control me-2" type="search" name="search" id="search" placeholder="Найти" aria-label="Search">
                                    <button class="btn btn-primary" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search mb-1" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <?php
                        if (session()->getFlashdata('status')) {
                            echo "<div class=\"alert alert-success\" role=\"alert\">" . session()->getFlashdata('status') . "</div>";
                        }
                        ?>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-centered mb-0">
                            <thead>
                                <tr>
                                    <th style="min-width: 10px">#</th>
                                    <th class="col-2">Word</th>
                                    <th class="col-3">Translation</th>
                                    <th class="col-2">Letter</th>                                    
                                    <th class="col-3">Alias</th>
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
                                            <td><?= $word['letter']; ?></td>
                                            <td><?= $word['alias']; ?></td>
                                            <td class="text-center">

                                                <a type="button" type="button" class="btn btn-primary rounded mx-1" href="<?= base_url('admin/edit/' . $word['id']); ?>">
                                                    <i class="bi bi-pencil"></i>
                                                </a>

                                                <button type="button" class="btn btn-danger rounded mx-1" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                    <i class="bi bi-trash3"></i>
                                                </button>

                                                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Внимание</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5 class="text-start">Вы уверены, что хотите продолжить?</h5>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                                                                <a type="button" class="btn btn-success" href="<?= base_url('admin/delete/' . $word['id']); ?>">Удалить</a>
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