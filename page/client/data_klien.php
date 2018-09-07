<?php 
$sql = "select id, nama, jenis_kelamin, alamat from biodata where deleted_at is NULL ".$is_admin_kecamatan."  order by id desc";

$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));
// var_dump($query);exit();
 ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Penghuni Panti 
                            <a href="?act=tambah" class="btn btn-success btn-fill pull-right"><i class="fa fa-plus"></i>Baru</a>
                            <a href="page/client/report.php" class="btn btn-success btn-fill pull-right"><i class="fa fa-plus"></i>Report</a>
                        </h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="tamu_internasionalTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <!-- <th>Usia</th> -->
                                    <th>Alamat</th>
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
                                        <td><?php echo $member->jenis_kelamin ?></td>
                                        <td><?php echo $member->alamat ?></td>

                                        <td>
                                            <a href="?act=lihat-klien&id=<?php echo $member->id ?>" class="btn btn-info btn-simple btn-xs"><i class="fa fa-eye"></i></a>
                                            <a href="?act=asessmen&id=<?php echo $member->id ?>" class="btn btn-info btn-simple btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-simple btn-xs" data-toggle="modal" data-target="#confirmDelete" data-name="<?php echo $member->nama ?>" data-id="<?php echo $member->id ?>"><i class="fa fa-times"></i></a>

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



