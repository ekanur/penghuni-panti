<?php
$sql = "select * from biodata where deleted_at is null ".$is_admin_kecamatan." order by id desc";

$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));
// var_dump($query);exit();
 ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">
                          Data Klien <a href="?act=tambah-client" class="btn btn-success btn-xs"><i class="fa fa-plus"></i>Tambah</a>
                        </h4>

                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="tamu_internasionalTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID Klien LV</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                $i=1;
                                while ($member = mysqli_fetch_object($query)) {

                                    ?>
                                    <tr class="odd" role="row">
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $member->id_klien_lv ?></td>
                                        <td><?php echo $member->nama ?></td>
                                        <td><?php echo $member->jenis_kelamin ?></td>
                                        <td><?php echo $member->alamat ?> <?php echo $member->rt ?> <?php echo $member->rw ?> <?php echo $member->kelurahan ?> <?php echo $member->kec ?> <?php echo $member->kota ?></td>
                                        <td>
                                          <a href="?act=view-client&id=<?php echo $member->id ?>" class="btn btn-warning btn-simple btn-xs"><i class="fa fa-eye"></i>Detil</a>
                                          <?php if(null == $is_admin_kecamatan){ ?>
                                            <a href="?act=asessmen&id=<?php echo $member->id ?>" class="btn btn-info btn-simple btn-xs"><i class="fa fa-edit"></i>Edit</a>
                                            <a href="#" class="btn btn-danger btn-simple btn-xs" data-toggle="modal" data-target="#confirmDelete" data-name="<?php echo $member->nama ?>" data-id="<?php echo $member->id ?>"><i class="fa fa-times"></i>Hapus</a>
                                          <?php } ?>
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


</div>
