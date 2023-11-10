<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid row ps-5" style="height: 30px;">
      <div class="col-6 d-flex align-items-center ">
        <p class="mb-0">082130309362</p>
      </div>
      <div class="col-6 d-flex justify-content-end gap-2">
        <p class="mb-0">lokasi</p>
        <p class="mb-0">satrioarul@gmail.com</p>
        <p class="mb-0">082130309362</p>
      </div>
    </div>
  </nav>
  <form method="POST" action="<?= $this->base_url('auth/login'); ?>" class="container d-flex justify-content-center flex-column" style="height: 500px;">
    <div class="d-flex justify-content-center flex-column mx-auto" style="width: 300px;height: 100px">
      <h3 class="mb-5">Login</h3>
      <input type="text" class="form-control mb-2" name="id_member" placeholder="Id member" aria-label="Nama Lengkap" aria-describedby="basic-addon1">
      <input style="height: 100px;" class="form-control mb-2" type="text" name="join_time" id="" placeholder="join_time">
      <span class="text-warning">*Password automatic generate from date you register <br> * 31-12-2023</span>

      <button type="submit" class="btn btn-warning w-25 mx-auto mt-5">Login</button>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>