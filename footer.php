  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.1
    </div>
    <strong>Copyright &copy; 2022/2023</strong> - WEB MAPPING PRODUKSI PERIKANAN
  </footer>


  </div>


  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>

  <script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>

  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>

  <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="assets/bower_components/raphael/raphael.min.js"></script>
  <script src="assets/bower_components/morris.js/morris.min.js"></script>

  <script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>


  <script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

  <script src="assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

  <script src="assets/bower_components/moment/min/moment.min.js"></script>
  <script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

  <script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

  <script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

  <script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

  <script src="assets/bower_components/fastclick/lib/fastclick.js"></script>

  <script src="assets/dist/js/adminlte.min.js"></script>

  <script src="assets/dist/js/pages/dashboard.js"></script>

  <script src="assets/dist/js/demo.js"></script>
  <script src="assets/bower_components/ckeditor/ckeditor.js"></script>
  <script src="assets/bower_components/chart.js/Chart.min.js"></script>


  <script>
    $(document).ready(function() {

      // $(".edit").hide();

      $('#table-datatable').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': true,
        'ordering': false,
        'info': true,
        'autoWidth': true,
        "pageLength": 50
      });



    });

    $('#datepicker').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy',
    }).datepicker("setDate", new Date());

    $('.datepicker2').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
    });
  </script>

  <script>
    var randomScalingFactor = function() {
      return Math.round(Math.random() * 100)
    };

    var barChartData = {
      labels: [<?php
                $ikan = mysqli_query($koneksi, "select nama_ikan as namaikan from ikan order by nama_ikan asc");
                while ($i = mysqli_fetch_array($ikan)) {
                ?> "<?php echo $i['namaikan']; ?>",
        <?php
                }
        ?>
      ],
      datasets: [{
          label: 'Nilai Produksi 2019',
          fillColor: "rgba(51, 0, 113, 0.65)",
          strokeColor: "rgba(11, 0, 88, 0.55)",
          highlightFill: "rgba(220,220,220,0.75)",
          highlightStroke: "rgba(220,220,220,1)",
          data: [
            <?php
            // $ikan = mysqli_query($koneksi, "select ikan as ik from jumlah_produksi order by ik asc");
            $ikan = mysqli_query($koneksi, "select nama_ikan as ik from ikan order by nama_ikan asc");
            while ($i = mysqli_fetch_array($ikan)) {
              $ik = $i['ik'];
              $np = mysqli_query($koneksi, "select SUM(nil_produksi) as total_nipro from jumlah_produksi where thn='2019' and ikan ='" . $ik . "'");
              $n = mysqli_fetch_assoc($np);

              // $total = str_replace(",", "44", number_format($pem['total_pemasukan']));
              $total = $n['total_nipro'];
              if ($n['total_nipro'] == "") {
                echo "0,";
              } else {
                echo $total . ",";
              }
            }

            ?>
          ]
        },
        {
          label: 'Nilai Produksi 2020',
          fillColor: "rgba(255, 51, 51, 0.8)",
          strokeColor: "rgba(248, 5, 5, 0.8)",
          highlightFill: "rgba(151,187,205,0.75)",
          highlightStroke: "rgba(151,187,205,1)",
          data: [
            <?php
            // $ikan = mysqli_query($koneksi, "select ikan as ik from jumlah_produksi order by ik asc");
            $ikan = mysqli_query($koneksi, "select nama_ikan as ik from ikan order by nama_ikan asc");
            while ($i = mysqli_fetch_array($ikan)) {
              $ik = $i['ik'];
              $np = mysqli_query($koneksi, "select SUM(nil_produksi) as total_nipro from jumlah_produksi where thn='2020' and ikan ='" . $ik . "'");
              $n = mysqli_fetch_assoc($np);

              // $total = str_replace(",", "44", number_format($pem['total_pemasukan']));
              $total = $n['total_nipro'];
              if ($n['total_nipro'] == "") {
                echo "0,";
              } else {
                echo $total . ",";
              }
            }

            ?>
          ]
        }
      ]

    }

    var barChartData2 = {
      labels: [<?php
                $ikan = mysqli_query($koneksi, "select nama_ikan as namaikan from ikan order by nama_ikan asc");
                while ($i = mysqli_fetch_array($ikan)) {
                ?> "<?php echo $i['namaikan']; ?>",
        <?php
                }
        ?>
      ],
      datasets: [{
          label: 'Volume Produksi 2019',
          fillColor: "rgba(51, 0, 113, 0.65)",
          strokeColor: "rgba(11, 0, 88, 0.55)",
          highlightFill: "rgba(220,220,220,0.75)",
          highlightStroke: "rgba(220,220,220,1)",
          data: [
            <?php
            // $ikan = mysqli_query($koneksi, "select ikan as ik from jumlah_produksi order by ik asc");
            $ikan = mysqli_query($koneksi, "select nama_ikan as ik from ikan order by nama_ikan asc");
            while ($i = mysqli_fetch_array($ikan)) {
              $ik = $i['ik'];
              $np = mysqli_query($koneksi, "select SUM(vol_produksi) as total_vopro from jumlah_produksi where thn='2019' and ikan ='" . $ik . "'");
              $n = mysqli_fetch_assoc($np);

              // $total = str_replace(",", "44", number_format($pem['total_pemasukan']));
              $total = $n['total_vopro'];
              if ($n['total_vopro'] == "") {
                echo "0,";
              } else {
                echo $total . ",";
              }
            }

            ?>
          ]
        },
        {
          label: 'Volume Produksi 2020',
          fillColor: "rgba(255, 51, 51, 0.8)",
          strokeColor: "rgba(248, 5, 5, 0.8)",
          highlightFill: "rgba(151,187,205,0.75)",
          highlightStroke: "rgba(151,187,205,1)",
          data: [
            <?php
            // $ikan = mysqli_query($koneksi, "select ikan as ik from jumlah_produksi order by ik asc");
            $ikan = mysqli_query($koneksi, "select nama_ikan as ik from ikan order by nama_ikan asc");
            while ($i = mysqli_fetch_array($ikan)) {
              $ik = $i['ik'];
              $np = mysqli_query($koneksi, "select SUM(vol_produksi) as total_vopro from jumlah_produksi where thn='2020' and ikan ='" . $ik . "'");
              $n = mysqli_fetch_assoc($np);

              // $total = str_replace(",", "44", number_format($pem['total_pemasukan']));
              $total = $n['total_vopro'];
              if ($n['total_vopro'] == "") {
                echo "0,";
              } else {
                echo $total . ",";
              }
            }

            ?>
          ]
        }
      ]

    }

    window.onload = function() {
      var ctx = document.getElementById("grafik1").getContext("2d");
      window.myBar = new Chart(ctx).Bar(barChartData, {
        responsive: true,
        animation: true,
        barValueSpacing: 5,
        barDatasetSpacing: 1,
        tooltipFillColor: "rgba(0,0,0,0.8)",
        multiTooltipTemplate: "<%= datasetLabel %> - Rp.<%= value.toLocaleString() %>,-"
      });

      var ctx = document.getElementById("grafik2").getContext("2d");
      window.myBar = new Chart(ctx).Bar(barChartData2, {
        responsive: true,
        animation: true,
        barValueSpacing: 5,
        barDatasetSpacing: 1,
        tooltipFillColor: "rgba(0,0,0,0.8)",
        multiTooltipTemplate: "<%= datasetLabel %> - <%= value.toLocaleString() %> Kg"
      });
    }
  </script>

  <script type="text/javascript">
    <?php $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/', $link);
    $page = end($link_array); ?>
    <?php if ($page === 'peta.php') : ?>
      var map = L.map('map').setView([0.7893, 120.9213], 5);

      var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 100,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
      }).addTo(map);


      <?php
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
      while ($d = mysqli_fetch_array($data)) :
        // $q = "SELECT * FROM provinsi where nama_provinsi = '" . $d['provinsi'] . "'";
        $q = "SELECT * FROM pelabuhan where nama_pelabuhan = '" . $d['pelabuhan'] . "'";
        $data1 = mysqli_query($koneksi, $q);
        while ($d1 = mysqli_fetch_array($data1)) :
      ?>
          L.marker([<?php echo $d1['lat']; ?>, <?php echo $d1['lon']; ?>], {
              alt: '<?php echo $d1['nama_provinsi']; ?>'
            }).addTo(map)
            .bindPopup(`
            <ul>
              <h3><b>Pelabuhan : </b><h4><?php echo $d['pelabuhan']; ?></h4></h3>
              <h3><b>Provinsi : </b><h4><?php echo $d['provinsi']; ?></h4></h3>
              <h3><b>Kabupaten/Kota : </b><h4><?php echo $d['kabkot']; ?></h4></h3>
              <h3><b>Kapal : </b><h4><?php echo $d['kapal']; ?></h4></h3>
              <h3><b>Alat Tangkap : </b><h4><?php echo $d['altang']; ?></h4></h3>
              <h3><b>WPP : </b><h4><?php echo $d['wp']; ?></h4></h3>
              <h3><b>Nilai Produksi : </b><h4><li><?php echo $d['ikan']; ?> : <?php echo "Rp. " . number_format($d['nil_produksi']) . " ,-" ?> (<?php echo $d['thn']; ?>)</h4></h3>
              <h3><b>Volume Produksi : </b><h4><li><?php echo $d['ikan']; ?> : <?php echo number_format($d['vol_produksi']) . " Kg"  ?> (<?php echo $d['thn']; ?>)</h4></h3>
            </ul>
            `);
        <?php endwhile; ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </script>
  </body>

  </html>