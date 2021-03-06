  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?= $artikel['artikel_judul'] ?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#"><?= $artikel['artikel_penulis'] ?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p><?= $artikel['artikel_waktu'] ?></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo base_url() ?>asset/<?= $artikel['path_gambar'] ?>" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead" id="cont"><?= $artikel['artikel_isi'] ?></p>

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <?php if ($username == '') {
            echo '
            <div class="card-body text-center" id="login_signup">
            Maaf anda harus login terlebih dahulu sebelum berkomentar </br></br>

            <button type="button" class="btn btn-primary" id="btnLogin">
            Login
            </button>

            <button type="button" class="btn btn-secondary" id="btnSignup">
            Signup
            </button>
            ';
          } else { ?>
            <div class="card-body">
              <form method="post" action="<?php echo base_url() . 'homepage/tambahKomentar' ?>">
                <div class="form-group">
                  <input type="hidden" name="idArtikel" value="<?= $artikel['id'] ?>">
                  <input type="hidden" name="username" value="<?= $username ?>">
                  <textarea class="form-control" rows="3" name="komen" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Post as <?= $username ?></button>
                <a href="<?php echo base_url() . 'homepage/logout' ?>">Logout</a>
              </form>
            <?php } ?>
            </div>

            <div class="card-body" id="Login">
              <form method="post" action="<?php echo base_url() . 'homepage/login' ?>">
                <div class="form-group">
                  <h3 class="text-center text-info">Login</h3>
                  <input type="hidden" name="idArtikel" value="<?= $artikel['id'] ?>">
                  <input type="text" name="email" class="form-control" placeholder="Email">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
              </form>
            </div>

            <div class="card-body" id="Signup">
              <form method="post" action="<?php echo base_url() . 'homepage/signup' ?>">
                <div class="form-group">
                  <h3 class="text-center text-info">Signup</h3>
                  <input type="hidden" name="idArtikel" value="<?= $artikel['id'] ?>">
                  <input type="text" name="username" class="form-control" placeholder="Username">
                  <input type="text" name="email" class="form-control" placeholder="Email">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
              </form>
            </div>

        </div>

        <!-- Single Comment -->

        <?php foreach ($komen as $data) : ?>
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0"><?= $data['nama'] ?></h5>
              <?= $data['isi'] ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Modal -->
      <!-- Modal Login-->