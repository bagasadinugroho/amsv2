  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Vendor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Vendor</li>
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
              <form role="form" action="<?php echo base_url("CEditvendor/proses_edit");?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>ID Vendor</label>
                    <input type="text" class="form-control" name="id_vendor" value="<?php echo $vendor['id_vendor'];?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Vendor Name</label>
                    <input type="text" class="form-control" name="name_vendor" value="<?php echo $vendor['name_vendor'];?>">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control" rows="3" placeholder="Jl. Ir. H. Juanda Jakarta Pusat"></textarea>
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