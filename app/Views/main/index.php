<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<?= $title ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content">
  <a href="<?= base_url('new') ?>" class="btn btn-success mt-5 mx-5">Add New Singer</a>

  <div class="container-fluid py-5 mt-3 mb-5">
    <div class="d-flex">
      <?php foreach ($singers as $singer): ?>
        <div class="card" style="width:18rem;">
          <img src="<?= $singer['img_url'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
              <?= $singer['name'] ?>
            </h5>
            <p class="card-text">
              <?= $singer['description'] ?>
            </p>
            <a href="<?= base_url("edit/$singer[id]") ?>" class="btn btn-primary">Edit</a>
            <a href="<?= base_url("delete/$singer[id]") ?>" class="btn btn-danger">Delete</a>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>

<div class="container-fluid py-3 mb-2">
  <div class="row bg-dark py-4">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="public/images/bonjovi.jpg" class="card-img-top" style="width:288px; height:300px;" alt="">
        <div class="card-body">
          <h5 class="card-title title">Bon Jovi</h5>
          <p class="card-text">THIS IS MY LIFE THIS IS MEE</p>
          <a href="<?=base_url('about/bonjovi')?>" class="btn btn-primary">About</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;" id="bg-custom">
        <img src="public/images/FREDDY MERCURY.jpg" class="card-img-top" style="width:288px; height:300px;" alt="">
        <div class="card-body">
          <h5 class="card-title">Freddie Mercury</h5>
          <p class="card-text">AYO</p>
          <a href="<?=base_url('about/freddiem')?>" class="btn btn-primary">About</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;" id="bg-custom">
        <img src="public/images/MICHAEL JACKSON.jpg" class="card-img-top" style="width:288px; height:300px;" alt="">
        <div class="card-body">
          <h5 class="card-title">Michael Jackson</h5>
          <p class="card-text">HEHE</p>
          <a href="<?=base_url('about/michaelj')?>" class="btn btn-primary">About</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 mt-3">
      <div class="card" style="width: 18rem;" id="bg-custom">
        <img src="public/images/WHITNEY HUSTON.jpg" class="card-img-top" style="width:288px; height:300px;" alt="">
        <div class="card-body">
          <h5 class="card-title">Whitney Huston</h5>
          <p class="card-text">THIS IS MY LIFE THIS IS ME</p>
          <a href="<?=base_url('about/whitneyh')?>" class="btn btn-primary">About</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 mt-3">
      <div class="card" style="width: 18rem;" id="bg-custom">
        <img src="public/images/OPRAH.jpg" class="card-img-top" style="width:288px; height:300px;" alt="">
        <div class="card-body">
          <h5 class="card-title">Oprah</h5>
          <p class="card-text">THIS IS MY LIFE THIS IS ME</p>
          <a href="<?=base_url('about/oprah')?>" class="btn btn-primary">About</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?> 
