<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INSPINIA | Forgot password</title>
  <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>css/plugins/select2/select2.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>css/animate.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">
</head>

<body class="gray-bg">
  <div class="passwordBox">
    <div class="row">
      <div class="col-md-12">
        <div class="ibox-content">
          <h2 class="font-bold" style="text-align: center;">Tambah Miner</h2>
          <div class="row">
            <div class="col-lg-12">
              <form class="m-t" role="form" action="<?= base_url('Miner/simpan') ?>" method="post">
                <div class="form-group">
                  <select name="id_miner" class="miner form-control">
                    <option></option>
                    <?php
                    foreach ($data as $d) {
                    ?>
                      <option value="<?= $d->id_miner ?>"><?= $d->nama_miner ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <input type="number" name="lvl_miner" class="form-control" placeholder="Level Miner">
                </div>
                <div class="form-group">
                  <input type="number" name="power_miner" class="form-control" placeholder="Power Miner" required>
                </div>
                <div class="form-group">
                  <input type="text" name="bonus_power" class="form-control" placeholder="Bonus Power" required>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url('assets/') ?>js/jquery-3.1.1.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/plugins/select2/select2.full.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".miner").select2({
        placeholder: "Pilih Miner",
        allowClear: true
      });
    })
  </script>
</body>

</html>