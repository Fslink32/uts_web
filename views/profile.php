<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace - Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $this->base_url('assets/css/'); ?>profile.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="<?= $this->base_url(); ?>">Marketplace Baduy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= $this->base_url('halaman'); ?>">Beranda</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?= $this->base_url('cart'); ?>">Keranjang</a>
            </li>
            <?php if (!empty($_SESSION['users'])) : ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= $this->base_url('insert'); ?>">Tambah Barang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= $this->base_url('profile'); ?>">Profile</a>
              </li>
            <?php else : ?>
              <li class="nav-item">
                <a class="btn btn-primary btn-pill" href="<?= $this->base_url('login'); ?>">Login</a>
              </li>
            <?php endif ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="profile-section">
    <div class="container">
      <div class="profile-container">
        <div class="profile-image">
          <img src="https://i.pinimg.com/736x/71/01/7d/71017d2c0810a0c624a5e25c1bd53124.jpg" alt="Profile Picture">
        </div>
        <div class="profile-info">
          <h2><?= $_SESSION['users']['username']; ?></h2>
          <p>Lokasi: <?= $_SESSION['users']['location']; ?></p>
          <p>Email: <?= $_SESSION['users']['email']; ?></p>
          <p>Nomor Telp/WA: <?= $_SESSION['users']['phone']; ?></p>
          <button class="btn btn-warning">Edit Profile</button>
          <a href="<?= $this->base_url('auth/logout'); ?>" class="btn btn-pill btn-danger">logout</a>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2023 Marketplace BADUY. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>