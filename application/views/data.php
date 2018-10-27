<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
      <h3 class="text-themecolor mb-0 mt-0">Ready to Deploy</h3>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Asset</a></li>
        <li class="breadcrumb-item active">Ready to Deploy</li>
      </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
      <button type="button" class="btn float-right hidden-sm-down btn-success" data-toggle="modal" data-target="#createAsset" data-whatever="@mdo"><i class="mdi mdi-plus-circle"></i> Create Asset</button>
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
          <h4 class="card-title">Ready to Deploy</h4>
          <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
          <div class="table-responsive m-t-40">
            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Livret</th>
                  <th>Asset Name</th>
                  <th>Serial Number</th>
                  <th>Merk</th>
                  <th>Model</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Livret</th>
                  <th>Asset Name</th>
                  <th>Serial Number</th>
                  <th>Merk</th>
                  <th>Model</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <?php $no=1; foreach ($data as $row) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $s_number = str_pad( "$row->id_master", 3, "0", STR_PAD_LEFT ).$row->livret;?></td>
                  <td><?php echo $row->name_asset;?></td>
                  <td><?php echo $row->sn;?></td>
                  <td><?php echo $row->merk;?></td>
                  <td><?php echo $row->model; ?></td>
                  <td><?php echo $row->keterangan; ?></td>
                  <td><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#checkoutAsset<?php echo $row->id_master;?>" data-whatever="@mdo"><i class="fas fa-shopping-cart"></i></button>
                  <a href="<?php echo base_url('data/broken/'.$row->id_master);?>"><button type="button" class="btn btn-warning btn-sm"><em class="fas fa-cogs" data-toggle="tooltip" data-placement="bottom" title="Broken"></em></button></a>
                  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editAsset<?php echo $row->id_master;?>" data-whatever="@mdo"><i class="fas fa-pencil-alt"></i></button>
                  <a href="<?php echo base_url('data/delete/'.$row->id_master);?>"><button type="button" class="btn btn-danger btn-sm"><em class="fas fa-trash" data-toggle="tooltip" data-placement="bottom" title="Delete"></em></button></a></td>
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
  <div class="modal fade" id="createAsset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel1">Create Asset</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url('create/registrasi');?>">
            <div class="form-group">
              <label>Asset Name</label>
              <input type="text" class="form-control" name="name_asset" placeholder="Input asset name" required>
            </div>
            <div class="form-group">
              <label>Serial Number</label>
              <input type="text" class="form-control" name="sn" placeholder="Serial number asset" required>
            </div>
            <div class="form-group">
              <label>Merk</label>
              <input type="text" class="form-control" name="merk" placeholder="Example : Dell" required>
            </div>
            <div class="form-group">
              <label>Model</label>
              <input type="text" class="form-control" name="model" placeholder="Example : Inspiron 3450" required>
            </div>
            <div class="form-group">
              <label>Purchasing Date</label>
              <input type="date" class="form-control" name="purchasing_date" required>
            </div>
            <div class="form-group">
              <label>Status</label>
              <select name="status" class="form-control">
                <option selected>Choose...</option>
                <option value="1">Ready to Deploy</option>
                <option value="5">Broken</option>
              </select>
            </div>
            <div class="form-group">
              <label>Supplier</label>
              <select name="supplier" class="form-control" required>
                <option selected>Choose...</option>
                <?php foreach ($vendor as $row) { ?>
                <option><?php echo $row->name_vendor;?></option>
                <?php }?>
              </select>
            </div>
            <div class="form-group">
              <label>Attachment</label>
              <textarea name="attachment" class="form-control" rows="3" placeholder="Example : SPK, RAB, MI etc"></textarea>
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
  <!-- End Modals Create-->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Start Modals Edit-->
  <!-- ============================================================== -->
  <?php foreach ($data as $row) { ?>
  <div class="modal fade" id="editAsset<?php echo $row->id_master;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel1">Edit Asset</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url('data/proses_edit');?>">
            <div class="form-group">
              <label>ID Tag</label>
              <input type="text" class="form-control" name="id_master" value="<?php echo $row->id_master; ?>" hidden>
              <input type="text" class="form-control" value="<?php echo $s_number = str_pad( "$row->id_master", 3, "0", STR_PAD_LEFT ).$row->livret; ?>" readonly>
            </div>
            <div class="form-group">
              <label>Asset Name</label>
              <input type="text" class="form-control" name="name_asset" value="<?php echo $row->name_asset; ?>" required>
            </div>
            <div class="form-group">
              <label>Serial Number</label>
              <input type="text" class="form-control" name="sn" value="<?php echo $row->sn; ?>" required>
            </div>
            <div class="form-group">
              <label>Merk</label>
              <input type="text" class="form-control" name="merk" value="<?php echo $row->merk; ?>" required>
            </div>
            <div class="form-group">
              <label>Model</label>
              <input type="text" class="form-control" name="model" value="<?php echo $row->model; ?>" required>
            </div>
            <div class="form-group">
              <label>Purchasing Date</label>
              <input type="date" class="form-control" name="purchasing_date" value="<?php echo $row->purchasing_date; ?>" required>
            </div>
            <div class="form-group">
              <label>Status</label>
              <select name="status" class="form-control">
                <option selected>Choose...</option>
                <option value="1">Ready to Deploy</option>
                <option value="5">Broken</option>
              </select>
            </div>
            <div class="form-group">
              <label>Supplier</label>
              <select name="supplier" class="form-control" required>
                <option selected>Choose...</option>
                <?php foreach ($vendor as $row) { ?>
                <option><?php echo $row->name_vendor;?></option>
                <?php }?>
              </select>
            </div>
            <div class="form-group">
              <label>Attachment</label>
              <textarea name="attachment" class="form-control" rows="3" placeholder="Example : SPK, RAB, MI etc"></textarea>
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
  <!-- End Modals Edit-->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Start Modals Checkout-->
  <!-- ============================================================== -->
  <?php foreach ($data as $row) { ?>
  <div class="modal fade" id="checkoutAsset<?php echo $row->id_master;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel1">Checkout Asset</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url('data/proses_checkout');?>">
            <div class="form-group">
              <label>ID Tag</label>
              <input type="text" class="form-control" name="id_master" value="<?php echo $row->id_master; ?>" readonly>
            </div>
            <div class="form-group">
              <label>Asset Name</label>
              <input type="text" class="form-control" name="name_asset" value="<?php echo $row->name_asset; ?>" readonly>
            </div>
            <div class="form-group">
              <label>No. Trouble Ticket</label>
              <input type="text" class="form-control" name="ticket" placeholder="Input trouble ticket number" required>
            </div>
            <div class="form-group">
              <label>Model</label>
              <input type="text" class="form-control" name="model" value="<?php echo $row->model; ?>" readonly>
            </div>
            <div class="form-group">
              <label>Stasiun</label>
              <select name="location" class="form-control">
                <option selected>Choose...</option>
                <?php foreach ($stasiun as $row) { ?>
                <option value ="<?php echo $row->location_id;?>"><?php echo $row->location_name;?></option>
                <?php }?>
              </select>
            </div>
            <div class="form-group">
              <label>Checkout Date</label>
              <input type="date" class="form-control" name="checkout_date">
            </div>
            <div class="form-group">
              <label>Note</label>
              <textarea name="note" class="form-control" rows="3" placeholder="Note"></textarea>
            </div>
          </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Checkout</button>
          </form>
            </div>
      </div>
    </div>
  </div>
  <?php }?>
  <!-- ============================================================== -->
  <!-- End Modals Checkout-->
  <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->