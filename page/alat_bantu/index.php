<?php 
$sql = "select alat_bantu.id, biodata.nama, alat_bantu.alat_bantu, alat_bantu.tanggal_monitoring, alat_bantu.pembayaran_alat_bantu from alat_bantu inner join biodata on alat_bantu.nomor_identifikasi = biodata.nomor_identifikasi where alat_bantu.deleted_at is NULL order by alat_bantu.id desc";

$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));
// var_dump($query);exit();
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                    <h4 class="title">Alat Bantu
                         <a href="?act=tambah-alat-bantu" class="btn btn-success btn-fill pull-right"><i class="fa fa-plus"></i>Baru</a>
                         <a href="page/alat_bantu/report.php" class="btn btn-success btn-fill pull-right"><i class="fa fa-plus"></i>Report</a>
                     </h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="tamu_internasionalTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Alat Bantu</th>
                                    <th>Pembayaran</th>
                                    <th>Tanggal Monitoring</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php 
                                $i=1;
                                while ($member = mysqli_fetch_object($query)) {

                                    ?>
                                    <tr class="danger">
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $member->nama ?></td>
                                        <td><?php echo $member->alat_bantu ?></td>
                                        <td><?php echo $member->pembayaran_alat_bantu ?></td>
                                        <td><?php echo $member->tanggal_monitoring ?></td>

                                        <td><a href="?act=edit-alat-bantu&id=<?php echo $member->id ?>" class="btn btn-info btn-simple btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-simple btn-xs" data-toggle="modal" data-target="#hapusAlatBantu" data-name="<?php echo $member->nama ?>" data-id="<?php echo $member->id ?>"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                        <?php
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