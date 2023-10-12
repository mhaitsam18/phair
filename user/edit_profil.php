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
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <style type="text/css">
            .foto:hover {
                box-shadow: inset 3px 3px 4px rgba(0,0,0,0.4);
                padding: 10px;
                border: 1px solid grey;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <?php include_once 'sidebar.php'; ?>
        <?php $row = $koneksi->select_username($_SESSION['user'])->fetch_assoc() ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $row['username'] ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Edit Profil</li>
                        </ol>
                        <form action="../Koneksi.php?update_user" method="post">
                                <input type="hidden" name="id" id="id">
                                <div class="modal-body">
                                    <label for="foto">Edit Profil</label> <br>
                                    <a href="" target="_blank" title="Edit Foto" id="foto"  data-toggle="modal" data-target="#modalForm">
                                        <img src="../<?= $row['foto'] ?>" class="foto" alt="Edit Foto" title="Edit Foto" width="120" height="160">
                                    </a>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="username" value="<?= $_SESSION['user'] ?>">
                                    <div class="form-group">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $row['nama_lengkap'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                        <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Email" name="email" value="<?= $row['email'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputNoPonsel">Nomor Ponsel</label>
                                        <input class="form-control py-4" id="inputNoPonsel" type="number" placeholder="08xxxxxxx" name="no_ponsel" value="<?= $row['no_ponsel'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputNoIndentitas">KTP/SIM/PASPOR</label>
                                        <input class="form-control py-4" id="inputNoIndentitas" type="text" placeholder="No. Identitas" name="no_identitas" value="<?= $row['no_identitas'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAlamat">Alamat</label>
                                        <textarea class="form-control" id="inputAlamat" rows="3" name="alamat"><?= $row['nama_lengkap'] ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                                </div>
                            </form>
                    </div>
                </main>
                <!-- Modal -->
                <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="judulModal">Tambah Data pH</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="../koneksi.php?update_foto" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="username" value="<?= $_SESSION['user'] ?>">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <input type="file" class="form-control" id="foto" name="foto">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/datatables-demo.js"></script>
    </body>
</html>
<?php else: ?>
    <?php header('location: login.php'); ?>
<?php endif ?>
