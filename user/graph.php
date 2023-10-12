<?php include_once '../Koneksi.php'; ?>

<?php if (!empty($_SESSION['user'])): ?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="description" content="" />

    <meta name="author" content="" />

    <title>pH Air</title>

    <link href="../css/styles.css" rel="stylesheet" />

    <link href="../css/bootstrap.css" rel="stylesheet" />

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"

        crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">

    </script>





</head>



<body class="sb-nav-fixed">

    <?php include_once 'sidebar.php'; ?>



    <div id="layoutSidenav_content">

        <main>

            <div class="container-fluid">

                <h1 class="mt-4">Live Graph pH Air</h1>

                <ol class="breadcrumb mb-4">

                    <li class="breadcrumb-item active">Graph</li>

                </ol>







                <!-- Button trigger modal -->



                <div class="card mb-4 p-1">



                    <div class="card-header"><i class="fas fa-table mr-1"></i>Live Graph</div>

                    <div class="card-body">

                        <div class="table-responsive" id="show">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Rata-rata Nilai PH per Hari</div>
                                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40" class="show"></canvas></div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Rata-rata Tegangan per Hari</div>
                                        <div class="card-body"><canvas id="teganganChart" width="100%" height="40" class="show"></canvas></div>
                                    </div>
                                </div>
                            </div>







                        </div>



                    </div>

                </div>



            </div>

        </main>





        <!-- Modal -->

        <footer class="py-4 bg-light mt-auto">

            <div class="container-fluid">

                <div class="d-flex align-items-center justify-content-between small">

                    <div class="text-muted">Copyright &copy; pH Air 2020</div>

                    <div>

                        <a href="#">Privacy Policy</a>

                        &middot;

                        <a href="#">Terms &amp; Conditions</a>

                    </div>

                </div>

                <div class=""><i>Sumber: <a href="https://www.sehataqua.co.id/memahami-ph-air-minum-yang-baik/">

                            https://www.sehataqua.co.id/memahami-ph-air-minum-yang-baik/</a></i></div>

            </div>

        </footer>

    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">

    </script>

    <script src="../js/scripts.js"></script>

    <script src="../js/bootstrap.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

    <script src="../assets/demo/datatables-demo.js"></script>
            

    <script type="text/javascript">

    $(function() {

        $('.tombolTambahData').on('click', function() {

            $('#judulModal').html('Tambah Data pH');

            $('.modal-footer button[type=submit]').html('Tambah Data');

            $('.modal-content form')[0].reset();

        });



        $('.tampilModalUbah').on('click', function() {

            $('#judulModal').html('Ubah Data pH');

            $('.modal-footer button[type=submit]').html('Ubah Data');

            $('.modal-content form').attr('action', '../Koneksi.php?update_ph');

            const id = $(this).data('id');

            jQuery.ajax({

                url: '../Koneksi.php?getUpdate_ph',

                data: {

                    id: id

                },

                method: 'post',

                dataType: 'json',

                success: function(data) {

                    console.log(data);

                    $('#id').val(data.id);

                    $('#sampel').val(data.sampel);

                    $('#trayek_ph_terendah').val(data.trayek_ph_terendah);

                    $('#trayek_ph_tertinggi').val(data.trayek_ph_tertinggi);

                }

            });

        });

    });

    </script>

</body>



</html>

<?php else: ?>

<?php header('location: login.php'); ?>

<?php endif ?>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<!-- <script src="../assets/demo/chart-area-demo.js"></script> -->
<script src="../js/bootstrap.js"></script>
<script src="../assets/demo/chart-bar-demo.js"></script>
<script src="../assets/demo/datatables-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="js/Chart.js"></script>

<script>

$(document).ready(function() {



    setInterval(function() {

        $('.show').load('graph_live.php')

    }, 3000);

});

</script>