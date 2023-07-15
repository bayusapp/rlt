<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INSPINIA | Forgot password</title>
  <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>css/animate.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">
</head>

<body class="gray-bg">
  <div class="passwordBox">
    <div class="row">
      <div class="col-md-12">
        <div class="ibox-content">
          <h2 class="font-bold" style="text-align: center;">Tambah Katalog</h2>
          <div class="row">
            <div class="col-lg-12">
              <form class="m-t" role="form" action="<?= base_url('Katalog/simpan') ?>" method="post">
                <div class="form-group">
                  <input type="text" name="nama_miner" class="form-control" placeholder="Nama Miner" required>
                </div>
                <div class="form-group">
                  <input type="text" name="url_img_miner" class="form-control" placeholder="URL Gambar Miner" required>
                </div>
                <div class="form-group">
                  <input type="number" name="cell_miner" class="form-control" placeholder="Cell Miner" required>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>