  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.1
    </div>
    <strong>Copyright &copy; 2022/2023</strong> - WEB MAPPING PRODUKSI PERIKANAN
  </footer>
  </div>
  </body>

  <script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>

  <script src="../assets/bower_components/jquery-ui/jquery-ui.min.js"></script>

  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>

  <script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="../assets/bower_components/raphael/raphael.min.js"></script>
  <script src="../assets/bower_components/morris.js/morris.min.js"></script>

  <script src="../assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>


  <script src="../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <script src="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

  <script src="../assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

  <script src="../assets/bower_components/moment/min/moment.min.js"></script>
  <script src="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

  <script src="../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

  <script src="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

  <script src="../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

  <script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>

  <script src="../assets/dist/js/adminlte.min.js"></script>

  <script src="../assets/dist/js/pages/dashboard.js"></script>

  <script src="../assets/dist/js/demo.js"></script>
  <script src="../assets/bower_components/ckeditor/ckeditor.js"></script>
  <script src="../assets/bower_components/chart.js/Chart.min.js"></script>

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

  </html>