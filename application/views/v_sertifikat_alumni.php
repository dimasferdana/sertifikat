<html>

<head>
    <link rel="icon" href="https://diklatlpkn.id/wp-content/uploads/2017/12/cropped-logo-lpkn-new-192x192.png" sizes="192x192" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-select.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/dataTables.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/sidebar.css') ?>">
    <title>Sertifikat</title>

</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"><img src="https://direktori.lkpp.go.id/files/9d430ace1e58963e837377d60413f9c5.png" width="200"></div>
            <div class="list-group list-group-flush">
                <a href="index.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-search"></i>
                    Cari Sertifikat</a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="mt-4 ml-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <form action="index.php" method="POST">
                                        <select class="selectpicker" data-live-search="true" name="id_kelas">
                                            <option>Kelas</option>
                                            <?php
                                            foreach ($kelas as $kelass) { ?>
                                                <option value="<?= $kelass->id ?>"><?= $kelass->judul ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nosertif" placeholder="No Sertifikat">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary" btn-lg btn-block">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12">
                                    <table class="display" id="hasil_pencarian">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>No Sertif</th>
                                                <th>Kelas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($pencarian as $pencarians) { ?>
                                                <tr>
                                                    <td scope="row"><?= $no; ?></td>
                                                    <td><?= $pencarians->nama; ?></td>
                                                    <td><?= $pencarians->no_sertif; ?></td>
                                                    <td><?= $pencarians->judul; ?></td>
                                                </tr>
                                            <?php
                                                $no++;
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
        </div>




</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/fba611dcae.js"></script>
<script src="<?= base_url('assets/js/dataTables.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap-select.min.js') ?>"></script>
<script>
    $(document).ready(function() {
        $('#hasil_pencarian').DataTable();
    });
</script>

</html>