<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a  href="<?php echo base_url();?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                </li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Asset</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('daftar');?>">List Asset</a></li>
                        <li><a href="<?php echo base_url('data');?>">Ready to Deploy</a></li>
                        <li><a href="<?php echo base_url('deployed');?>">Deployed</a></li>
                        <li><a href="<?php echo base_url('broken');?>">Broken</a></li>
                        <!-- <li><a href="<?php echo base_url('create');?>">Create Asset</a></li> -->
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Vendor</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('datavendor');?>">List Vendor</a></li>
                        <!-- <li><a href="<?php echo base_url('vendor');?>">Add Vendor</a></li> -->
                    </ul>
                </li>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">