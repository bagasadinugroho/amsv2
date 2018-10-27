  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Asset</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Asset</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!--column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form role="form" action="<?php echo base_url("CEdit/proses_edit");?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>ID Tag</label>
                    <input type="text" class="form-control" name="id_master" value="<?php echo $asset['id_master'];?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Asset Name</label>
                    <input type="text" class="form-control" name="name_asset" value="<?php echo $asset['name_asset'];?>">
                  </div>
                  <div class="form-group">
                    <label>Serial Number</label>
                    <input type="text" class="form-control" name="sn" value="<?php echo $asset['sn'];?>">
                  </div>
                  <div class="form-group">
                    <label>Merk</label>
                    <input type="text" class="form-control" name="merk" value="<?php echo $asset['merk'];?>">
                  </div>
                  <div class="form-group">
                    <label>Model</label>
                    <input type="text" class="form-control" name="model" value="<?php echo $asset['model'];?>">
                  </div>
                  <div class="form-group">
                    <label>Purchasing Date</label>
                    <input type="date" class="form-control" name="purchasing_date" value="<?php echo $asset['purchasing_date'];?>">
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
                    <input type="text" class="form-control" name="supplier" value="<?php echo $asset['supplier'];?>">
                  </div>
                  <div class="form-group">
                    <label>Attachment</label>
                    <textarea name="attachment" class="form-control" rows="3" placeholder="Example : SPK, RAB, MI etc"></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->