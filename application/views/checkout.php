  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Checkout Asset</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Checkout Asset</li>
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
              <form role="form" action="<?php echo base_url("CCheckout/proses_checkout");?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>ID Tag</label>
                    <input type="text" class="form-control" name="id_master" value="<?php echo $asset['id_master'];?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Asset Name</label>
                    <input type="text" class="form-control" name="name_asset" value="<?php echo $asset['name_asset'];?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>No. Trouble Ticket</label>
                    <input type="text" class="form-control" name="ticket" placeholder="Input trouble ticket number">
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
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Checkout</button>
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