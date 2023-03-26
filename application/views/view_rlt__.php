<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>INSPINIA | Data Tables</title>

  <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>font-awesome/css/font-awesome.css" rel="stylesheet">

  <link href="<?= base_url('assets/') ?>css/plugins/dataTables/datatables.min.css" rel="stylesheet">

  <link href="<?= base_url('assets/') ?>css/animate.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">

  <style>
    img {
      position: relative;
    }

    .img1 {
      z-index: 1;
    }

    .img2 {
      z-index: 3;
    }
  </style>

</head>

<body>

  <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
          <li class="nav-header">
            <div class="dropdown profile-element">
              <img alt="image" class="rounded-circle" src="img/profile_small.jpg" />
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="block m-t-xs font-bold">David Williams</span>
                <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
              </a>
              <ul class="dropdown-menu animated fadeInRight m-t-xs">
                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                <li class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="login.html">Logout</a></li>
              </ul>
            </div>
            <div class="logo-element">
              IN+
            </div>
          </li>
          <li>
            <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
              <li><a href="index.html">Dashboard v.1</a></li>
              <li><a href="dashboard_2.html">Dashboard v.2</a></li>
              <li><a href="dashboard_3.html">Dashboard v.3</a></li>
              <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
              <li><a href="dashboard_5.html">Dashboard v.5 </a></li>
            </ul>
          </li>
          <li>
            <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
      <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
          </div>
          <ul class="nav navbar-top-links navbar-right">
            <li>
              <a href="login.html">
                <i class="fa fa-sign-out"></i> Log out
              </a>
            </li>
          </ul>

        </nav>
      </div>
      <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
          <h2>Data Tables</h2>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a>Tables</a>
            </li>
            <li class="breadcrumb-item active">
              <strong>Data Tables</strong>
            </li>
          </ol>
        </div>
        <div class="col-lg-2">

        </div>
      </div>
      <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox ">
              <div class="ibox-title">
                <h5>Basic Data Tables example with responsive plugin</h5>
              </div>
              <div class="ibox-content">

                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Gambar Miner</th>
                        <th>Nama Miner</th>
                        <th>Power Miner</th>
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
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="float-right">
          10GB of <strong>250GB</strong> Free.
        </div>
        <div>
          <strong>Copyright</strong> Example Company &copy; 2014-2018
        </div>
      </div>

    </div>
  </div>



  <!-- Mainly scripts -->
  <script src="<?= base_url('assets/') ?>js/jquery-3.1.1.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/popper.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/bootstrap.js"></script>
  <script src="<?= base_url('assets/') ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="<?= base_url('assets/') ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

  <script src="<?= base_url('assets/') ?>js/plugins/dataTables/datatables.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

  <!-- Custom and plugin javascript -->
  <script src="<?= base_url('assets/') ?>js/inspinia.js"></script>
  <script src="<?= base_url('assets/') ?>js/plugins/pace/pace.min.js"></script>

  <!-- Page-Level Scripts -->
  <script>
    $(document).ready(function() {
      $('.dataTables-example').DataTable({
        pageLength: 25,
        responsive: true,
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [{
            extend: 'copy'
          },
          {
            extend: 'csv'
          },
          {
            extend: 'excel',
            title: 'ExampleFile'
          },
          {
            extend: 'pdf',
            title: 'ExampleFile'
          },

          {
            extend: 'print',
            customize: function(win) {
              $(win.document.body).addClass('white-bg');
              $(win.document.body).css('font-size', '10px');

              $(win.document.body).find('table')
                .addClass('compact')
                .css('font-size', 'inherit');
            }
          }
        ]

      });

    });
  </script>

</body>

</html>