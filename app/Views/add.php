<form method="post" action="<?= base_url('/store') ?>">
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
    <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Save Data</button>
    </div>
</form>