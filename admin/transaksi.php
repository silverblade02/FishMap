<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Jumlah Produksi
      <small>Data Jumlah Produksi</small>
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
            <h3 class="box-title">Jumlah Produksi</h3>
            <div class="btn-group pull-right">            

              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> &nbsp Tambah Jumlah Produksi
              </button>
            </div>
          </div>
          <div class="box-body">

            <!-- Modal -->
            <form action="jumpro_act.php" method="post">
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="exampleModalLabel">Tambah Jumlah Produksi</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                      <div class="form-group">
                        <label>Ikan</label>
                        <select name="ikan" class="form-control" required="required">
                          <option value="">- Pilih -</option>
                          <?php 
                          $ikan = mysqli_query($koneksi,"SELECT * FROM ikan ORDER BY nama_ikan ASC");
                          while($i = mysqli_fetch_array($ikan)){
                            ?>
                            <option value="<?php echo $i['nama_ikan']; ?>"><?php echo $i['nama_ikan']; ?></option>
                            <?php 
                          }
                          ?>
                        </select>
                      </div>

                      <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>Tahun</label>
                                  <select name="thn" class="form-control" required="required">
                                    <option value="">- Pilih -</option>
                                    <?php 
                                    $ikan = mysqli_query($koneksi,"SELECT * FROM tahun ORDER BY tahun ASC");
                                    while($t = mysqli_fetch_array($ikan)){
                                      ?>
                                      <option value="<?php echo $t['tahun']; ?>"><?php echo $t['tahun']; ?></option>
                                      <?php 
                                    }
                                    ?>
                         </select>
                      </div>

                      <div class="form-group">
                        <label>Lokasi Pendaratan</label>
                        <select name="lopen" class="form-control" required="required">
                          <option value="">- Pilih -</option>
                          <?php 
                          $lpn = mysqli_query($koneksi,"SELECT * FROM lokasi_pendaratan ORDER BY lopen ASC");
                          while($l = mysqli_fetch_array($lpn)){
                            ?>
                            <option value="<?php echo $l['lopen']; ?>"><?php echo $l['lopen']; ?></option>
                            <?php 
                          }
                          ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Provinsi</label>
                        <select name="prov" class="form-control" required="required">
                          <option value="">- Pilih -</option>
                          <?php 
                          $prov = mysqli_query($koneksi,"SELECT * FROM provinsi ORDER BY nama_provinsi ASC");
                          while($p = mysqli_fetch_array($prov)){
                            ?>
                            <option value="<?php echo $p['nama_provinsi']; ?>"><?php echo $p['nama_provinsi']; ?></option>
                            <?php 
                          }
                          ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Kabupaten/Kota</label>
                        <select name="kabkot" class="form-control" required="required">
                          <option value="">- Pilih -</option>
                          <?php 
                          $kkt = mysqli_query($koneksi,"SELECT * FROM kabupaten_kota ORDER BY nama_kabkot ASC");
                          while($kk = mysqli_fetch_array($kkt)){
                            ?>
                            <option value="<?php echo $kk['nama_kabkot']; ?>"><?php echo $kk['nama_kabkot']; ?></option>
                            <?php 
                          }
                          ?>
                        </select>
                      </div>

                      <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>Pelabuhan</label>
                                  <select name="pelab" class="form-control" required="required">
                                    <option value="">- Pilih -</option>
                                    <?php 
                                    $plb = mysqli_query($koneksi,"SELECT * FROM pelabuhan ORDER BY nama_pelabuhan ASC");
                                    while($pl = mysqli_fetch_array($plb)){
                                      ?>
                                      <option value="<?php echo $pl['nama_pelabuhan']; ?>"><?php echo $pl['nama_pelabuhan']; ?></option>
                                      <?php 
                                    }
                                    ?>
                         </select>
                      </div>

                      <div class="form-group">
                        <label>Kapal</label>
                        <select name="kapal" class="form-control" required="required">
                          <option value="">- Pilih -</option>
                          <?php 
                          $kpl = mysqli_query($koneksi,"SELECT * FROM kapal ORDER BY jenis_kapal ASC");
                          while($k = mysqli_fetch_array($kpl)){
                            ?>
                            <option value="<?php echo $k['jenis_kapal']; ?>"><?php echo $k['jenis_kapal']; ?></option>
                            <?php 
                          }
                          ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Alat Tangkap</label>
                        <select name="altang" class="form-control" required="required">
                          <option value="">- Pilih -</option>
                          <?php 
                          $altang = mysqli_query($koneksi,"SELECT * FROM alat_tangkap ORDER BY jenis_altang ASC");
                          while($a = mysqli_fetch_array($altang)){
                            ?>
                            <option value="<?php echo $a['jenis_altang']; ?>"><?php echo $a['jenis_altang']; ?></option>
                            <?php 
                          }
                          ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>WPP</label>
                        <select name="wpp" class="form-control" required="required">
                          <option value="">- Pilih -</option>
                          <?php 
                          $wpp = mysqli_query($koneksi,"SELECT * FROM wpp ORDER BY WPP ASC");
                          while($w = mysqli_fetch_array($wpp)){
                            ?>
                            <option value="<?php echo $w['WPP']; ?>"><?php echo $w['WPP']; ?></option>
                            <?php 
                          }
                          ?>
                        </select>
                      </div>
                         
                      <div class="form-group">
                        <label>Volume Produksi</label>
                        <input type="text" name="vopro" required="required" class="form-control" placeholder="Masukkan Volume Produksi ..">
                      </div>

                      <div class="form-group">
                        <label>Nilai Produksi</label>
                        <input type="text" name="nipro" required="required" class="form-control" placeholder="Masukkan Nilai Produksi ..">
                      </div>
                         
                        </select>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </form>


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
                    <th rowspan="2" width="10%" class="text-center">OPSI</th>
                  </tr>
                  <tr>
                    <th class="text-center">VOLUME PRODUKSI</th>
                    <th class="text-center">NILAI PRODUKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include '../koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM jumlah_produksi");
                  while($d = mysqli_fetch_array($data)){
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
                      <td class="text-center"><?php echo number_format($d['vol_produksi'])." Kg"; ?></td>
                      <td class="text-center"><?php echo "Rp. ".number_format($d['nil_produksi'])." ,-"; ?></td>
                      <td> 
                       <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_jumpro_<?php echo $d['id_jumpro'] ?>">
                          <i class="fa fa-cog"></i>
                        </button>

                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_jumpro_<?php echo $d['id_jumpro'] ?>">
                          <i class="fa fa-trash"></i>
                        </button>   


                        <form action="jumpro_update.php" method="post">
                          <div class="modal fade" id="edit_jumpro_<?php echo $d['id_jumpro'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="exampleModalLabel">Edit Jumlah Produksi</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>Ikan</label>
                                  <input type=hidden name="id" style="width:100%" class="form-control" required="required" value="<?php echo $d['id_jumpro']; ?>">
                                  <select name="ikan" style="width:100%" class="form-control" required="required">
                                    <option value="">- Pilih -</option>
                                    <?php 
                                    $ikan = mysqli_query($koneksi,"SELECT * FROM ikan ORDER BY nama_ikan ASC");
                                    while($i = mysqli_fetch_array($ikan)){
                                      ?>
                                      <option <?php if($d['ikan'] == $i['nama_ikan']){echo "selected='selected'";} ?> value="<?php echo $i['nama_ikan']; ?>"><?php echo $i['nama_ikan']; ?></option>
                                      <?php 
                                    }
                                    ?>
                                  </select>
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>Tahun</label>
                                  <select name="thn" style="width:100%" class="form-control" required="required">
                                    <option value="">- Pilih -</option>
                                    <?php 
                                    $ikan = mysqli_query($koneksi,"SELECT * FROM tahun ORDER BY tahun ASC");
                                    while($t = mysqli_fetch_array($ikan)){
                                      ?>
                                      <option <?php if($d['thn'] == $t['tahun']){echo "selected='selected'";} ?> value="<?php echo $t['tahun']; ?>"><?php echo $t['tahun']; ?></option>
                                      <?php 
                                    }
                                    ?>
                                  </select>
                                </div>


                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>Lokasi Pendaratan</label>
                                  <select name="lopen" style="width:100%" class="form-control" required="required">
                                    <option value="">- Pilih -</option>
                                    <?php 
                                    $lopen = mysqli_query($koneksi,"SELECT * FROM lokasi_pendaratan ORDER BY lopen ASC");
                                    while($l = mysqli_fetch_array($lopen)){
                                      ?>
                                      <option <?php if($d['lp'] == $l['lopen']){echo "selected='selected'";} ?> value="<?php echo $l['lopen']; ?>"><?php echo $l['lopen']; ?></option>
                                      <?php 
                                    }
                                    ?>
                                  </select>
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                <label>Provinsi</label>
                                <select name="prov" style="width:100%" class="form-control" required="required">
                                  <option value="">- Pilih -</option>
                                  <?php 
                                  $prov = mysqli_query($koneksi,"SELECT * FROM provinsi ORDER BY nama_provinsi ASC");
                                  while($p = mysqli_fetch_array($prov)){
                                    ?>
                                    <option <?php if($d['provinsi'] == $p['nama_provinsi']){echo "selected='selected'";} ?> value="<?php echo $p['nama_provinsi']; ?>"><?php echo $p['nama_provinsi']; ?></option>
                                    <?php 
                                  }
                                  ?>
                                </select>
                              </div>

                              <div class="form-group" style="width:100%;margin-bottom:20px">
                                <label>Kabupaten/Kota</label>
                                <select name="kabkot" style="width:100%" class="form-control" required="required">
                                  <option value="">- Pilih -</option>
                                  <?php 
                                  $kkt = mysqli_query($koneksi,"SELECT * FROM kabupaten_kota ORDER BY nama_kabkot ASC");
                                  while($kk = mysqli_fetch_array($kkt)){
                                    ?>
                                    <option <?php if($d['kabkot'] == $kk['nama_kabkot']){echo "selected='selected'";} ?> value="<?php echo $kk['nama_kabkot']; ?>"><?php echo $kk['nama_kabkot']; ?></option>
                                    <?php 
                                  }
                                  ?>
                                </select>
                              </div>

                              <div class="form-group" style="width:100%;margin-bottom:20px">
                                          <label>Pelabuhan</label>
                                          <select name="pelab" style="width:100%" class="form-control" required="required">
                                            <option value="">- Pilih -</option>
                                            <?php 
                                            $plb = mysqli_query($koneksi,"SELECT * FROM pelabuhan ORDER BY nama_pelabuhan ASC");
                                            while($pl = mysqli_fetch_array($plb)){
                                              ?>
                                              <option <?php if($d['pelabuhan'] == $pl['nama_pelabuhan']){echo "selected='selected'";} ?> value="<?php echo $pl['nama_pelabuhan']; ?>"><?php echo $pl['nama_pelabuhan']; ?></option>
                                              <?php 
                                            }
                                            ?>
                                 </select>
                              </div>

                              <div class="form-group" style="width:100%;margin-bottom:20px">
                                <label>Kapal</label>
                                <select name="kapal" style="width:100%" class="form-control" required="required">
                                  <option value="">- Pilih -</option>
                                  <?php 
                                  $kpl = mysqli_query($koneksi,"SELECT * FROM kapal ORDER BY jenis_kapal ASC");
                                  while($k = mysqli_fetch_array($kpl)){
                                    ?>
                                    <option <?php if($d['kapal'] == $k['jenis_kapal']){echo "selected='selected'";} ?> value="<?php echo $k['jenis_kapal']; ?>"><?php echo $k['jenis_kapal']; ?></option>
                                    <?php 
                                  }
                                  ?>
                                </select>
                              </div>

                              <div class="form-group" style="width:100%;margin-bottom:20px">
                                <label>Alat Tangkap</label>
                                <select name="altang" style="width:100%" class="form-control" required="required">
                                  <option value="">- Pilih -</option>
                                  <?php 
                                  $altang = mysqli_query($koneksi,"SELECT * FROM alat_tangkap ORDER BY jenis_altang ASC");
                                  while($a = mysqli_fetch_array($altang)){
                                    ?>
                                    <option <?php if($d['altang'] == $a['jenis_altang']){echo "selected='selected'";} ?> value="<?php echo $a['jenis_altang']; ?>"><?php echo $a['jenis_altang']; ?></option>
                                    <?php 
                                  }
                                  ?>
                                </select>
                              </div>

                              <div class="form-group" style="width:100%;margin-bottom:20px">
                                <label>WPP</label>
                                <select name="wpp" style="width:100%" class="form-control" required="required">
                                  <option value="">- Pilih -</option>
                                  <?php 
                                  $wpp = mysqli_query($koneksi,"SELECT * FROM wpp ORDER BY WPP ASC");
                                  while($w = mysqli_fetch_array($wpp)){
                                    ?>
                                    <option <?php if($d['wp'] == $w['WPP']){echo "selected='selected'";} ?> value="<?php echo $w['WPP']; ?>"><?php echo $w['WPP']; ?></option>
                                    <?php 
                                  }
                                  ?>
                                </select>
                              </div>
                         
                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>Volume Produksi</label>
                                  <input type="text" style="width:100%" name="vopro" required="required" class="form-control" placeholder="Masukkan Volume Produksi .." value="<?php echo $d['vol_produksi'] ?>">
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>Nilai Produksi</label>
                                  <input type="text" style="width:100%" name="nipro" required="required" class="form-control" placeholder="Masukkan Nilai Produksi .." value="<?php echo $d['nil_produksi'] ?>">
                                </div>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>

                        <!-- modal hapus -->
                        <div class="modal fade" id="hapus_jumpro_<?php echo $d['id_jumpro'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Peringatan!</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <p>Yakin ingin menghapus data ini ?</p>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="jumpro_hapus.php?id=<?php echo $d['id_jumpro'] ?>" class="btn btn-primary">Hapus</a>
                              </div>
                            </div>
                          </div>
                        </div>

                      </td>
                    </tr>
                    <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>