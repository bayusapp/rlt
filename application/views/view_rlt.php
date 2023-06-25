<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>css/animate.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>css/bootstrap_rlt.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>css/rlt.css" rel="stylesheet">

  <style>
    a:hover {
      text-decoration: none;
    }
  </style>
</head>

<body style="padding-top: 20px;">
  <div class="root">
    <div class="wrapper">
      <div class="content">
        <div class="storage-container container">
          <div class="row">
            <div class="col-12 col-9">
              <div class="collection-page no-gutters row">
                <div class="col-12">
                  <p class="collection-description">
                    <a href="<?= base_url('Katalog') ?>" style="color: #fff">Add Catalog Miner</a> &emsp;&emsp; <a href="<?= base_url('Miner') ?>" style="color: #fff">Add Miner List</a>
                  </p>
                  <div class="collection-title-wrapper">
                    <h2 class="collection-title">
                      <?php
                      $total = 0;
                      foreach ($data as $d) {
                        $total = $total + $d->power_miner;
                      }
                      if ($total >= 1 && $total <= 999) {
                        $total = ($total / 1) . " Gh/s";
                      } elseif ($total >= 1000 && $total <= 999999) {
                        $total = ($total / 1000) . " Th/s";
                      } elseif ($total >= 1000000 && $total <= 999999999) {
                        $total = ($total / 1000000) . " Ph/s";
                      }
                      ?>
                      Total hash power <span class="collection-value"><?= $total ?></span>
                    </h2>
                  </div>
                  <div class="collection-body-wrapper">
                    <div class="collection-container row">
                      <?php
                      foreach ($data as $d) {
                        if ($d->lvl_miner == 1) {
                          $lvl = '<img class="collection-product-level-img-size-' . $d->cell_miner . '" src="https://rollercoin.com/static/img/storage/rarity_icons/level_1.png" width="22" height="16" alt="1">';
                        } elseif ($d->lvl_miner == 2) {
                          $lvl = '<img class="collection-product-level-img-size-' . $d->cell_miner . '" src="https://rollercoin.com/static/img/storage/rarity_icons/level_2.png" width="22" height="16" alt="1">';
                        } elseif ($d->lvl_miner == 3) {
                          $lvl = '<img class="collection-product-level-img-size-' . $d->cell_miner . '" src="https://rollercoin.com/static/img/storage/rarity_icons/level_3.png" width="22" height="16" alt="1">';
                        } elseif ($d->lvl_miner == 4) {
                          $lvl = '<img class="collection-product-level-img-size-' . $d->cell_miner . '" src="https://rollercoin.com/static/img/storage/rarity_icons/level_4.png" width="22" height="16" alt="1">';
                        } elseif ($d->lvl_miner == 0) {
                          $lvl = '';
                        } elseif ($d->lvl_miner == 9) {
                          $lvl = '<img class="star" src="https://rollercoin.com/static/images/level_star.4ff18517e5e8eed42060..png" alt="Rating star">';
                        }
                        $power = $d->power_miner;
                        if ($d->power_miner >= 1000000) {
                          $power = ($d->power_miner / 1000000) . ' Ph/s';
                        } elseif ($power >= 1000 && $power <= 999999) {
                          $power = ($power / 1000) . ' Th/s';
                        } elseif ($power >= 1 && $power <= 999) {
                          $power = ($power / 1) . ' Gh/s';
                        }
                      ?>
                        <div class="collection-card-container col-lg-3">
                          <div class="collection-main-wrapper">
                            <div class="collection-product-image-wrapper">
                              <p class="collection-percent-bonus">&nbsp;
                                Bonus power
                                <span class="collection-bonus-amount">+<?= $d->bonus_power ?>%</span>
                              </p>
                              <div class="collection-product-item-image-wrapper">
                                <?php
                                if ($d->lvl_miner != 9) {
                                  echo $lvl;
                                }
                                ?>
                                <img src="<?= $d->url_img_miner ?>" class="collection-product-image">
                                <?php
                                if ($d->lvl_miner == 9) {
                                ?>
                                  <div class="rating-star-wrapper collection-product-level-img-size-<?= $d->cell_miner ?>">
                                    <div class="star-wrapper">
                                      <?= $lvl ?>
                                    </div>
                                  </div>
                                <?php
                                }
                                ?>
                              </div>
                            </div>
                            <div class="collection-product-info">
                              <p class="collection-product-name" style="color: rgb(255, 220, 0);"><?= $d->nama_miner ?></p>
                              <div class="collection-product-power">
                                <p class="power-title">Power:</p>
                                <p class="power-value"><?= $power ?></p>
                              </div>
                            </div>
                          </div>
                          <div class="collection-description-wrapper ">
                            <div class="collection-description-switcher">
                              <div class="confirmation-buttons">
                                <button type="button" class="tree-dimensional-button btn-cyan" data-toggle="modal" data-target="#myModal<?= $d->id_daftar_miner ?>">
                                  <span class="btn-text">Edit</span>
                                </button>
                                <div class="modal inmodal fade" id="myModal<?= $d->id_daftar_miner ?>" tabindex="-1" role="dialog" aria-hidden="true" style='color: #000; font-family: "open sans", "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 13px'>
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header" style="padding: 30px 15px;">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Modal title</h4>
                                        <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                      </div>
                                      <div class="modal-body">
                                        <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                          printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                          remaining essentially unchanged.</p>
                                        <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                          printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                          remaining essentially unchanged.</p>
                                      </div>

                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <form method="post" action="<?= base_url('Katalog/hapus') ?>">
                                  <input type="text" name="id" value="<?= $d->id_daftar_miner ?>" hidden>
                                  <button type="submit" class="tree-dimensional-button btn-red">
                                    <span class="btn-text">Delete</span>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <table border="1">
    <thead>
      <tr>
        <td>No</td>
        <td>Gambar Miner</td>
        <td>Nama Miner</td>
        <td>Power Miner</td>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($data as $d) {
        if ($d->lvl_miner == 1) {
          $lvl = '<img class="img2" src="https://rollercoin.com/static/img/storage/rarity_icons/level_1.png" width="22" height="16" alt="1">';
        } elseif ($d->lvl_miner == 2) {
          $lvl = '<img class="img2" src="https://rollercoin.com/static/img/storage/rarity_icons/level_2.png" width="22" height="16" alt="1">';
        } elseif ($d->lvl_miner == 3) {
          $lvl = '<img class="img2" src="https://rollercoin.com/static/img/storage/rarity_icons/level_3.png" width="22" height="16" alt="1">';
        } elseif ($d->lvl_miner == 4) {
          $lvl = '<img class="img2" src="https://rollercoin.com/static/img/storage/rarity_icons/level_4.png" width="22" height="16" alt="1">';
        } elseif ($d->lvl_miner == null) {
          $lvl = '';
        }
      ?>
        <tr>
          <td><?= $no++ ?></td>
          <td>
            <img class="img1" src="<?= $d->url_img_miner ?>" height="126" width="100">
            <?= $lvl ?>
          </td>
          <td><?= $d->nama_miner ?></td>
          <td><?= $d->power_miner ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table> -->
  <script src="<?= base_url('assets/') ?>js/jquery-3.1.1.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/popper.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/bootstrap.js"></script>
  <!-- <script src="<?= base_url('assets/') ?>js/plugins/metisMenu/jquery.metisMenu.js"></script> -->
  <!-- <script src="<?= base_url('assets/') ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script> -->
  <!-- <script src="<?= base_url('assets/') ?>js/inspinia.js"></script> -->
  <!-- <script src="<?= base_url('assets/') ?>js/plugins/pace/pace.min.js"></script> -->
</body>

</html>