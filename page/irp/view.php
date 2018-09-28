<?php
$id = $_GET['id'];
$sql = "select nomor_identifikasi, nama from biodata where biodata.id = ".$id." ".$is_admin_kecamatan." and deleted_at is NULL order by nama asc";
$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));
$biodata = mysqli_fetch_object($query);
$sql_edit = "select * from irp where id = ".$id." and deleted_at is NULL";
$query_irp = mysqli_query($conx, $sql_edit) or die(mysqli_error($conx));
$irp = mysqli_fetch_object($query_irp);
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <ul class="nav nav-pills nav-justified thumbnail" id="myTab">
          <li>
            <a href="#biodata" role="tab" data-toggle="tab">
              <h4 class="list-group-item-heading">IRP</h4>
              <small class="list-group-item-text">Berisi data Pelatiahn atau Workshop yang pernah diikuti</small>
            </a>
          </li>

        </ul>


        <div class="tab-content">
          <div class="tab-pane active" id="biodata">
            <div class="card">

              <div class="content">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Nomor Identifikasi <span class="text-danger">* </span></label>
                          <?php echo $biodata->nomor_identifikasi ?> - <?php echo ucwords($biodata->nama) ?>
                        </div>

                        <div class="form-group">
                          <label>Buat IRP? <span class="text-danger"><?php echo $irp->buat_irp ?></span></label>
                        </div>
                        <table class="table">
                          <tr>
                            <td>Alasan tidak dibuatkan IRP </td>
                            <td>: <?php echo $irp->alasan_tidak_buat ?></td>
                          </tr>
                          <tr>
                            <td>Pelatihan Ortu untuk Melaksanakan IRP </td>
                            <td>: <?php echo $irp->pelatihan_ortu ?></td>
                          </tr>
                          <tr>
                            <td>IRP Dibuat Oleh </td>
                            <td>: <?php echo $irp->dibuat_oleh ?></td>
                          </tr>
                        </table>

                      </div>

                    </div>


                  </div>


                  <div class="content">
                    <div class="row">
                      <div class="col-md-12">
                        <a href="?act=irp"><button type="submit" class="btn btn-info btn-fill pull-right" >Kembali</button></a>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>

        </div>


      </div>
    </div>
  </div>
