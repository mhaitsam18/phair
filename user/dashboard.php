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
                <h1 class="mt-4">pH Air</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div>
                    <h2>DEFINISI PH AIR</h2>
                    <p class="text-justify">
                        Agar lebih paham tentang pH air minum, lebih baik tahu pasti tentang definisinya terlebih dulu.
                        Kadar pH sebenarnya adalah takaran untuk mengukur kadar relatif ion hidrogen bebas dan ion
                        hidroksil di dalam air. Jika level ion hidrogen bebas tinggi, maka air tersebut dikatakan
                        bersifat asam. Sedangkan jika jumlah ion hidroksil bebas lebih banyak, air itu disebut basa atau
                        alkali (1).
                        Jadi, pH air minum berguna untuk menentukan tingkat keasaman maupun tingkat alkali air. Untuk
                        menghitungnya, digunakan takaran dengan menggunakan angka dari 1 sampai 14 dengan nilai 7
                        sebagai titik tengah atau netral (1). Namun, berdasarkan Badan Pengawas Obat Makan (BPOM) dan
                        Standar Nasional Indonesia (SNI), acuan pH Air Minum Dalam Kemasan (AMKD) bisa disebut alkali
                        jika memiliki pH antara 8,5 hingga 9,97 (5).
                    </p>
                </div>


                <!-- Button trigger modal -->

                <div class="card mb-4 p-1">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Data Terakhir</div>
                    <div class="card-body">
                        <div class="table-responsive" id="show">

                            <div class="d-flex justify-content-center">
                                <div class="spinner-border" role="status">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="card mb-4 p-1">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>10 Data Terakhir</div>
                    <div class="card-body">
                        <div class="table-responsive" id="show2">
                            <div class="d-flex justify-content-center">
                                <div class="spinner-border" role="status">
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

<script>
$(document).ready(function() {

    setInterval(function() {

        $('#show').load('fetch_last_data.php')
    }, 3000);
});
</script>

<script>
$(document).ready(function() {

    setInterval(function() {

        $('#show2').load('fetch_data_10.php')
    }, 3000);
});
</script>