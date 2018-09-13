<?php 
$sql = "select intervensi.id, biodata.nama, intervensi.subjek_intervensi, intervensi.jenis_intervensi, intervensi.tanggal from intervensi inner join biodata on intervensi.nomor_identifikasi = biodata.nomor_identifikasi where intervensi.deleted_at is NULL ".$is_admin_kecamatan." order by intervensi.id desc";

$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));
// var_dump($query);exit();
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Intervensi 
                            <?php 
                                if(null == $is_admin_kecamatan){
                             ?>
                            <a href="?act=tambah-intervensi" class="btn btn-success btn-fill pull-right"><i class="fa fa-plus"></i>Baru</a>
                        <?php 
                            }
                           ?>
                            <a href="page/intervensi/report.php" class="btn btn-success btn-fill pull-right"><i class="fa fa-plus"></i>Report</a>
                        </h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="tamu_internasionalTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Subjek</th>
                                    <th>Jenis Intervensi</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php 
                                $i=1;
                                while ($intervensi = mysqli_fetch_object($query)) {

                                    ?>
                                    <tr class="">
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $intervensi->nama ?></td>
                                        <td><?php echo $intervensi->subjek_intervensi ?></td>
                                        <td><?php echo $intervensi->jenis_intervensi ?></td>
                                        <td><?php echo $intervensi->tanggal ?></td>

                                        <td>
                                            <a href="?act=lihat-intervensi&id=<?php echo $intervensi->id ?>" class="btn btn-info btn-simple btn-xs"><i class="fa fa-eye"></i></a>
                                            <?php 
                                                if(null == $is_admin_kecamatan){
                                             ?>
                                            <a href="?act=edit-intervensi&id=<?php echo $intervensi->id ?>" class="btn btn-info btn-simple btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-simple btn-xs" data-toggle="modal" data-target="#hapusIntervensi" data-name="<?php echo $intervensi->nama ?>" data-id="<?php echo $intervensi->id ?>"><i class="fa fa-times"></i></a>
                                            <?php 
                                                }
                                               ?>
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
            </div>
        </div>
    </div>