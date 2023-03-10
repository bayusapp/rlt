<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="1">
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
          $lvl = '<img src="https://rollercoin.com/static/img/storage/rarity_icons/level_1.png" width="22" height="16" alt="1">';
        } elseif ($d->lvl_miner == 2) {
          $lvl = '<img src="https://rollercoin.com/static/img/storage/rarity_icons/level_2.png" width="22" height="16" alt="1">';
        } elseif ($d->lvl_miner == 3) {
          $lvl = '<img src="https://rollercoin.com/static/img/storage/rarity_icons/level_3.png" width="22" height="16" alt="1">';
        } elseif ($d->lvl_miner == 4) {
          $lvl = '<img src="https://rollercoin.com/static/img/storage/rarity_icons/level_4.png" width="22" height="16" alt="1">';
        }
      ?>
      <tr>
        <td><?=$no++?></td>
        <td>
          <?=$lvl?>
          <img src="<?=$d->url_img_miner?>" height="126" width="100">
        </td>
        <td><?=$d->nama_miner?></td>
        <td><?=$d->power_miner?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</body>
</html>