<?php include 'headerpelab.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Pelabuhan
      <small>Data Pelabuhan</small>
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
            <h3 class="box-title">Data Pelabuhan</h3>
            <div class="btn-group pull-right">            

              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> &nbsp Tambah Pelabuhan
              </button>
            </div>
          </div>
          <div class="box-body">

            <!-- Modal -->
            <form action="pelab_act.php" method="post">
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Pelabuhan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group" id="search">
                        <label>Nama Pelabuhan</label>
                        <input type="text" name="addr" required="required" class="form-control" id="addr">
                        <button type="button" onclick="addr_search();">Search</button>
                        <div id="results"></div>
                      </div>

                      <div class="form-group">
                        <label>Lat</label>
                        <input type="text" name="lat" required="required" class="form-control" id="lat">
                      </div>

                      <div class="form-group">
                        <label>Lon</label>
                        <input type="text" name="lon" required="required" class="form-control" id="lon">
                      </div>

                      <div class="form-group">
                      <div id="map"></div>
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


            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th>NAMA PELABUHAN</th>
                    <th>LAT</th>
                    <th>LON</th>
                    <th width="10%">OPSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include '../koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM pelabuhan ORDER BY nama_pelabuhan ASC");
                  while($p = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $p['nama_pelabuhan']; ?></td>
                      <td><?php echo $p['lat']; ?></td>
                      <td><?php echo $p['lon']; ?></td>
                      <td>    
                          <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_pelab_<?php echo $p['id_pelabuhan'] ?>">
                            <i class="fa fa-cog"></i>
                          </button>

                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_pelab_<?php echo $p['id_pelabuhan'] ?>">
                            <i class="fa fa-trash"></i>
                          </button>

                        <form action="pelab_update.php" method="post">
                          <div class="modal fade" id="edit_pelab_<?php echo $p['id_pelabuhan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit Provinsi</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">

                                  <div class="form-group" id="search" style="width:100%">
                                    <label>Nama Pelabuhan</label>
                                    <input type="hidden" name="id" required="required" class="form-control" placeholder="Nama Pelabuhan .." value="<?php echo $p['id_pelabuhan']; ?>">
                                    <input type="text" name="addr" required="required" class="form-control" id="addr2" placeholder="Nama Pelabuhan.." value="<?php echo $p['nama_pelabuhan']; ?>" style="width:100%">
                                    <button type="button" onclick="addr_search2();">Search</button>  
                                    <div id="results2s"></div>
                                  </div>

                                  <div class="form-group" style="width:100%">
                                    <label>Lat</label>
                                    <br/>
                                    <input type="text" name="lat" placeholder="Lat .." value="<?php echo $p['lat']; ?>" required="required" class="form-control" id="lat2">
                                  </div>

                                  <div class="form-group" style="width:100%">
                                    <label>Lon</label>
                                    <br/>
                                    <input type="text" name="lon" placeholder="Lon .." value="<?php echo $p['lon']; ?>" required="required" class="form-control" id="lon2">
                                  </div>

                                  <div class="form-group">
                                    <div id="map2"></div>
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
                        <div class="modal fade" id="hapus_pelab_<?php echo $p['id_pelabuhan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <p>Yakin ingin menghapus data ini ?</p>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="pelab_hapus.php?id=<?php echo $p['id_pelabuhan'] ?>" class="btn btn-primary">Hapus</a>
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
<?php include 'footerpelab.php'; ?>