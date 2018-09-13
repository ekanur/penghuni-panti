<?php
$sql = "
SELECT irp.id, biodata.nama, irp.nomor_identifikasi, irp.buat_irp, irp.dibuat_oleh, irp.alasan_tidak_buat, irp.pelatihan_ortu
FROM irp INNER JOIN biodata ON irp.nomor_identifikasi = biodata.nomor_identifikasi
WHERE irp.deleted_at IS NULL ORDER BY irp.id DESC
";

$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));
// var_dump($query);exit();
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">IRP <a href="?act=tambah-irp" class="btn btn-success btn-xs"><i class="fa fa-plus"></i>Tambah</a></h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="tamu_internasionalTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama dan Nomor Identifikasi</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                $i=1;
                                while ($irp = mysqli_fetch_object($query)) {

                                    ?>
                                    <tr class="danger">
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $irp->nomor_identifikasi." - ".$irp->nama ?></td>
                                        <td><?php echo $irp->buat_irp." Oleh: ".$irp->dibuat_oleh ?></td>
                                        <td>
                                          <a href="?act=edit-irp&id=<?php echo $irp->id ?>" class="btn btn-info btn-simple btn-xs"><i class="fa fa-edit"></i></a>
                                          <a href="#" class="btn btn-danger btn-simple btn-xs" data-toggle="modal" data-target="#hapusTerampil" date-cat="irp" data-name="<?php echo $irp->nama ?>" data-id="<?php echo $irp->id ?>"><i class="fa fa-times"></i></a>
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
