<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>New Singer<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card container mt-5 mb-5" style="width: 18rem;">
    <div class="card-body">
        <?= form_open('create') ?>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="img_url" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="img_url" name="img_url" placeholder="">
        </div>
        <button class="btn btn-info">Submit</button>
        <?= form_close() ?>
    </div>
</div>
<?= $this->endSection() ?>