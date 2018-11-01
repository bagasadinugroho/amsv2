<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
      <h3 class="text-themecolor mb-0 mt-0">Data Vendor</h3>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Vendor</a></li>
        <li class="breadcrumb-item active">Data Vendor</li>
      </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
      <button type="button" class="btn float-right hidden-sm-down btn-success" data-toggle="modal" data-target="#addVendor" data-whatever="@mdo"><i class="mdi mdi-plus-circle"></i> Add Vendor</button>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Data Vendor</h4>
          <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
          <div class="table-responsive m-t-40">
            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Vendor Name</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Vendor Name</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <?php $no=1; foreach ($data as $row) { ?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $row->name_vendor;?></td>
                  <td><?php echo $row->address;?></td>
                  <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editVendor<?php echo $row->id_vendor;?>" data-whatever="@mdo"><i class="fas fa-pencil-alt"></i></button>
                  <a href="<?php echo base_url('datavendor/delete/'.$row->id_vendor);?>"><button type="button" class="btn btn-danger btn-sm"><em class="fas fa-trash" data-toggle="tooltip" data-placement="bottom" title="Delete"></em></button></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End PAge Content -->
  <!-- ============================================================== -->
    <!-- ============================================================== -->
  <!-- Start Modals Create-->
  <!-- ============================================================== -->
  <div class="modal fade" id="addVendor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel1">Add Vendor</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url('vendor/registrasi');?>">
            <div class="form-group">
                <label>Vendor Name</label>
                <input type="text" class="form-control" name="name_vendor" placeholder="Input vendor name">
              </div>
              <div class="form-group">
                <label>Address</label>
                <textarea name="address" class="form-control" rows="3" placeholder="Jl. Ir. H. Juanda Jakarta Pusat"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
          </form>
            </div>
      </div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Modals Create -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Start Modals Edit -->
  <!-- ============================================================== -->
  <?php foreach ($data as $row) { ?>
  <div class="modal fade" id="editVendor<?php echo $row->id_vendor;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel1">Edit Vendor</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url('datavendor/proses_edit');?>">
            <div class="form-group">
              <label>ID Vendor</label>
              <input type="text" class="form-control" name="id_vendor" value="<?php echo $row->id_vendor; ?>" readonly>
            </div>
            <div class="form-group">
                <label>Vendor Name</label>
                <input type="text" class="form-control" name="name_vendor" value="<?php echo $row->name_vendor; ?>" required>
              </div>
              <div class="form-group">
                <label>Address</label>
                <textarea name="address" class="form-control" rows="3" placeholder="Jl. Ir. H. Juanda Jakarta Pusat"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
          </form>
            </div>
      </div>
    </div>
  </div>
  <?php }?>
  <!-- ============================================================== -->
  <!-- End Modals Edit -->
  <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->