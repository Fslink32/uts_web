<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= $this->base_url('insert'); ?>">Tambah Data</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <form method="GET" action="<?= $this->base_url('insert/store'); ?>" class="container pt-5">
    <div class="card">
      <div class="card-body">
        <div class="form-group mb-3">
          <label for="kode"> Kode Barang</label>
          <input type="text" class="form-control" id="kode" placeholder="Kode Barang" name="kode" value="<?= rand(1000, 5000); ?>" readonly>
        </div>
        <div class="form-group mb-3">
          <label for="jenis"> Jenis Barang</label>
          <input type="text" class="form-control" id="jenis" placeholder="jenis Barang" name="jenis">
        </div>
        <div class="form-group mb-3">
          <label for="nama"> Nama Barang</label>
          <input type="text" class="form-control" id="nama" placeholder="Nama Barang" name="nama">
        </div>
        <div class="form-group mb-3">
          <label for="harga"> Harga Barang</label>
          <input type="number" class="form-control" id="harga" placeholder="harga Barang" name="harga">
        </div>
        <div class="form-group mb-3">
          <label for="satuan"> Satuan Barang</label>
          <input type="text" class="form-control" id="satuan" placeholder="satuan Barang" name="satuan">
        </div>
        <div class="form-group mb-3">
          <label for="bahan"> Bahan Barang</label>
          <input type="text" class="form-control" id="bahan" placeholder="bahan Barang" name="bahan">
        </div>
      </div>
      <div class="card-footer">

        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>