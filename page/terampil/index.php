<?php
$sql = "select terampil.id, biodata.nama, terampil.nomor_identifikasi, terampil.pelatihan_keterampilan, terampil.bantuan_finance, terampil.hasil_monitoring_pendapatan
from terampil inner join biodata on terampil.nomor_identifikasi = biodata.nomor_identifikasi
where terampil.deleted_at is NULL ".$is_admin_kecamatan." order by terampil.id desc";
$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));
// var_dump($query);exit();
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Keterampilan dan Finance <a href="?act=tambah-terampil" class="btn btn-success btn-xs"><i class="fa fa-plus"></i>Tambah</a></h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="tamu_internasionalTable">
                            <thead>
                                <tr class="odd" role="row">
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Pelatihan</th>
                                    <th>Bantuan Finance</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=1;
                                while ($terampil = mysqli_fetch_object($query)) {

                                    ?>
                                    <tr class="odd" role="row">
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $terampil->nomor_identifikasi." - ".$terampil->nama ?></td>
                                        <td><?php echo $terampil->pelatihan_keterampilan ?></td>
                                        <td><?php echo $terampil->bantuan_finance ?></td>
                                        <td>
                                          <a href="?act=view-terampil&id=<?php echo $terampil->id ?>" class="btn btn-warning btn-simple btn-xs"><i class="fa fa-eye"></i>Detil</a>
                                          <?php if(null == $is_admin_kecamatan){ ?>
                                          <a href="?act=edit-terampil&id=<?php echo $terampil->id ?>" class="btn btn-info btn-simple btn-xs"><i class="fa fa-edit"></i>Edit</a>
                                          <a href="#" class="btn btn-danger btn-simple btn-xs" data-toggle="modal" data-target="#hapusTerampil" data-name="<?php echo $terampil->nama ?>" data-id="<?php echo $terampil->id ?>"><i class="fa fa-times"></i>Hapus</a>
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
