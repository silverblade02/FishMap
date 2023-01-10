<?php
error_reporting(1);
include 'header.php';
?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      PETA
      <small>Data Peta</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-12">
        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title">Filter Peta</h3>
          </div>
          <div class="box-body">
            <form method="get" action="">
              <div class="row">
                <div class="col-md-2">

                  <div class="form-group">
                    <label>Ikan</label>
                    <select name="ikan" class="form-control" required="required">
                      <option value="semua">- Pilih Salah Satu Ikan -</option>
                      <?php
                      $ikan = mysqli_query($koneksi, "SELECT * FROM ikan");
                      while ($i = mysqli_fetch_array($ikan)) {
                      ?>
                        <option <?php if (isset($_GET['ikan'])) {
                                  if ($_GET['ikan'] == $i['nama_ikan']) {
                                    echo "selected='selected'";
                                  }
                                } ?> value="<?php echo $i['nama_ikan']; ?>"><?php echo $i['nama_ikan']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>

                </div>


                <div class="col-md-2">

                  <div class="form-group">
                    <label>Tahun</label>
                    <select name="tahun" class="form-control" required="required">
                      <option value="semua">- Pilih Salah Satu Tahun -</option>
                      <?php
                      $tahun = mysqli_query($koneksi, "SELECT * FROM tahun");
                      while ($t = mysqli_fetch_array($tahun)) {
                      ?>
                        <option <?php if (isset($_GET['tahun'])) {
                                  if ($_GET['tahun'] == $t['tahun']) {
                                    echo "selected='selected'";
                                  }
                                } ?> value="<?php echo $t['tahun']; ?>"><?php echo $t['tahun']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>

                </div>

                <div class="col-md-2">

                  <div class="form-group">
                    <label>Lokasi Pendaratan</label>
                    <select name="lopen" class="form-control" required="required">
                      <option value="semua">- Pilih Salah Satu Lokasi Pendaratan -</option>
                      <?php
                      $lopen = mysqli_query($koneksi, "SELECT * FROM lokasi_pendaratan");
                      while ($l = mysqli_fetch_array($lopen)) {
                      ?>
                        <option <?php if (isset($_GET['lopen'])) {
                                  if ($_GET['lopen'] == $l['lopen']) {
                                    echo "selected='selected'";
                                  }
                                } ?> value="<?php echo $l['lopen']; ?>"><?php echo $l['lopen']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>

                </div>

                <div class="col-md-2">

                  <div class="form-group">
                    <label>Pelabuhan</label>
                    <select name="lopen2" class="form-control" required="required">
                      <option value="semua">- Pilih Salah Satu Pelabuhan -</option>
                      <?php
                      $pelab = mysqli_query($koneksi, "SELECT * FROM pelabuhan");
                      while ($pl = mysqli_fetch_array($pelab)) {
                      ?>
                        <option <?php if (isset($_GET['nama_pelabuhan'])) {
                                  if ($_GET['nama_pelabuhan'] == $pl['nama_pelabuhan']) {
                                    echo "selected='selected'";
                                  }
                                } ?> value="<?php echo $pl['nama_pelabuhan']; ?>"><?php echo $pl['nama_pelabuhan']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>

                </div>

                <div class="col-md-2">

                  <div class="form-group">
                    <label>Provinsi</label>
                    <select name="provinsi" class="form-control" required="required">
                      <option value="semua">- Pilih Salah Satu Provinsi-</option>
                      <?php
                      $prov = mysqli_query($koneksi, "SELECT * FROM provinsi");
                      while ($p = mysqli_fetch_array($prov)) {
                      ?>
                        <option <?php if (isset($_GET['nama_provinsi'])) {
                                  if ($_GET['nama_provinsi'] == $p['nama_provinsi']) {
                                    echo "selected='selected'";
                                  }
                                } ?> value="<?php echo $p['nama_provinsi']; ?>"><?php echo $p['nama_provinsi']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>

                </div>

                <div class="col-md-2">

                  <div class="form-group">
                    <label>Kota/Kabupaten</label>
                    <select name="kotkab" class="form-control" required="required">
                      <option value="semua">- Pilih Salah Satu Kota/Kabupaten -</option>
                      <?php
                      $kabkot = mysqli_query($koneksi, "SELECT * FROM kabupaten_kota");
                      while ($kk = mysqli_fetch_array($kabkot)) {
                      ?>
                        <option <?php if (isset($_GET['nama_kabkot'])) {
                                  if ($_GET['nama_kabkot'] == $kk['nama_kabkot']) {
                                    echo "selected='selected'";
                                  }
                                } ?> value="<?php echo $kk['nama_kabkot']; ?>"><?php echo $kk['nama_kabkot']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>

                </div>

                <div class="col-md-2">

                  <div class="form-group">
                    <label>Alat Tangkap</label>
                    <select name="altang" class="form-control" required="required">
                      <option value="semua">- Pilih Salah Satu Alat Tangkap -</option>
                      <?php
                      $altang = mysqli_query($koneksi, "SELECT * FROM alat_tangkap");
                      while ($a = mysqli_fetch_array($altang)) {
                      ?>
                        <option <?php if (isset($_GET['jenis_altang'])) {
                                  if ($_GET['jenis_altang'] == $a['jenis_altang']) {
                                    echo "selected='selected'";
                                  }
                                } ?> value="<?php echo $a['jenis_altang']; ?>"><?php echo $a['jenis_altang']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>

                </div>

                <div class="col-md-2">

                  <div class="form-group">
                    <label>Kapal</label>
                    <select name="kapal" class="form-control" required="required">
                      <option value="semua">- Pilih Salah Satu Kapal-</option>
                      <?php
                      $kapal = mysqli_query($koneksi, "SELECT * FROM kapal");
                      while ($k = mysqli_fetch_array($kapal)) {
                      ?>
                        <option <?php if (isset($_GET['jenis_kapal'])) {
                                  if ($_GET['jenis_kapal'] == $k['jenis_kapal']) {
                                    echo "selected='selected'";
                                  }
                                } ?> value="<?php echo $k['jenis_kapal']; ?>"><?php echo $k['jenis_kapal']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>

                </div>

                <div class="col-md-2">

                  <div class="form-group">
                    <label>WPP</label>
                    <select name="wpp" class="form-control" required="required">
                      <option value="semua">- Pilih Salah Satu WPP -</option>
                      <?php
                      $wpp = mysqli_query($koneksi, "SELECT * FROM wpp");
                      while ($w = mysqli_fetch_array($wpp)) {
                      ?>
                        <option <?php if (isset($_GET['WPP'])) {
                                  if ($_GET['WPP'] == $w['WPP']) {
                                    echo "selected='selected'";
                                  }
                                } ?> value="<?php echo $w['WPP']; ?>"><?php echo $w['WPP']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>

                </div>

                <div class="col-md-3">

                  <div class="form-group">
                    <br />
                    <input type="submit" value="TAMPILKAN" class="btn btn-sm btn-primary btn-block">
                    <a class="btn btn-sm btn-danger btn-block" href="peta.php" role="button">RESET FILTER</a>
                  </div>

                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="box box-info" style="padding:20px;">
          <div class="box-header">
            <h3 class="box-title">Hasil Filtering Peta</h3>
          </div>
          <div style="width:100%;height:600px;margin-left:auto;margin-right:auto;display:block;margin-bottom:20px;">
            <div id="map"></div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="table-datatable">
              <thead>
                <tr>
                  <th width="1%" rowspan="2">NO</th>
                  <th width="10%" rowspan="2" class="text-center">IKAN</th>
                  <th rowspan="2" class="text-center">TAHUN</th>
                  <th rowspan="2" class="text-center">LOKASI PENDARATAN</th>
                  <th rowspan="2" class="text-center">PROVINSI</th>
                  <th rowspan="2" class="text-center">KABUPATEN/KOTA</th>
                  <th rowspan="2" class="text-center">PELABUHAN</th>
                  <th rowspan="2" class="text-center">KAPAL</th>
                  <th rowspan="2" class="text-center">ALAT TANGKAP</th>
                  <th rowspan="2" class="text-center">WPP</th>
                  <th colspan="2" class="text-center">JUMLAH PRODUKSI</th>
                </tr>
                <tr>
                  <th class="text-center">VOLUME PRODUKSI</th>
                  <th class="text-center">NILAI PRODUKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;

                $ikan = isset($_GET['ikan']) && $_GET['ikan'] != 'semua' ? $_GET['ikan'] : true;
                $tahun = isset($_GET['tahun']) && $_GET['tahun'] != 'semua' ? $_GET['tahun'] : true;
                $lopen = isset($_GET['lopen']) && $_GET['lopen'] != 'semua' ? $_GET['lopen'] : true;
                $lopen2 = isset($_GET['lopen2']) && $_GET['lopen2'] != 'semua' ? $_GET['lopen2'] : true;
                $provinsi = isset($_GET['provinsi']) && $_GET['provinsi'] != 'semua' ? $_GET['provinsi'] : true;
                $kotkab = isset($_GET['kotkab']) && $_GET['kotkab'] != 'semua' ? $_GET['kotkab'] : true;
                $altang = isset($_GET['altang']) && $_GET['altang'] != 'semua' ? $_GET['altang'] : true;
                $kapal = isset($_GET['kapal']) && $_GET['kapal'] != 'semua' ? $_GET['kapal'] : true;
                $wpp = isset($_GET['wpp']) && $_GET['wpp'] != 'semua' ? $_GET['wpp'] : true;

                if (($ikan === true) && ($tahun === true) && ($lopen === true) && ($lopen2 === true) && ($provinsi === true) && ($kotkab === true) && ($altang === true) && ($kapal === true) && ($wpp === true)) {
                  $query = "select * from jumlah_produksi";
                } else {
                  $base_query = "select * from jumlah_produksi ";
                  $filters = array();

                  if ($_GET['ikan'] != 'semua') {
                    $qry_filter = "ikan='" . $_GET['ikan'] . "'";
                    array_push($filters, $qry_filter);
                  }
                  if ($_GET['tahun'] != 'semua') {
                    $qry_filter = "thn='" . $_GET['tahun'] . "'";
                    array_push($filters, $qry_filter);
                  }
                  if ($_GET['lopen'] != 'semua') {
                    $qry_filter = "lp='" . $_GET['lopen'] . "'";
                    array_push($filters, $qry_filter);
                  }
                  if ($_GET['lopen2'] != 'semua') {
                    $qry_filter = "pelabuhan='" . $_GET['lopen2'] . "'";
                    array_push($filters, $qry_filter);
                  }
                  if ($_GET['altang'] != 'semua') {
                    $qry_filter = "altang='" . $_GET['altang'] . "'";
                    array_push($filters, $qry_filter);
                  }
                  if ($_GET['kapal'] != 'semua') {
                    $qry_filter = "kapal='" . $_GET['kapal'] . "'";
                    array_push($filters, $qry_filter);
                  }
                  if ($_GET['wpp'] != 'semua') {
                    $qry_filter = "wp='" . $_GET['wpp'] . "'";
                    array_push($filters, $qry_filter);
                  }
                  if ($_GET['provinsi'] != 'semua') {
                    $qry_filter = "provinsi='" . $_GET['provinsi'] . "'";
                    array_push($filters, $qry_filter);
                  }
                  if ($_GET['kotkab'] != 'semua') {
                    $qry_filter = "kabkot='" . $_GET['kotkab'] . "'";
                    array_push($filters, $qry_filter);
                  }

                  $query = $base_query . " where " . join(" and ", $filters);
                }
                // echo $query;
                $data = mysqli_query($koneksi, $query);
                while ($d = mysqli_fetch_array($data)) {
                ?>
                  <tr>
                    <td class="text-center"><?php echo $no++; ?></td>
                    <td class="text-center"><?php echo $d['ikan']; ?></td>
                    <td class="text-center"><?php echo $d['thn']; ?></td>
                    <td class="text-center"><?php echo $d['lp']; ?></td>
                    <td class="text-center"><?php echo $d['provinsi']; ?></td>
                    <td class="text-center"><?php echo $d['kabkot']; ?></td>
                    <td class="text-center"><?php echo $d['pelabuhan']; ?></td>
                    <td class="text-center"><?php echo $d['kapal']; ?></td>
                    <td class="text-center"><?php echo $d['altang']; ?></td>
                    <td class="text-center"><?php echo $d['wp']; ?></td>
                    <td class="text-center"><?php echo number_format($d['vol_produksi']) . " Kg"; ?></td>
                    <td class="text-center"><?php echo "Rp. " . number_format($d['nil_produksi']) . " ,-"; ?></td>
                  </tr>

                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>

  </section>

</div>
<?php include 'footer.php'; ?>