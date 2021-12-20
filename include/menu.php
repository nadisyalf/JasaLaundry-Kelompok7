<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        <img src="images/<?php echo $data_user['foto'] ?>" class="user-image" alt="User Image">
        </div>
        <div class="pull-left info">
        <span class="hidden-xs">Hai, <?php echo $nama?></span>
            
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
           
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <?php if ($_SESSION['admin']){ ?>
            <li><a href="?page=pengguna"><i class="fa fa-dashboard"></i> Pengguna</a></li>
            <li><a href="?page=pelanggan"><i class="fa fa-dashboard"></i> Pelanggan</a></li>
            <?php } ?>
            <li><a href="?page=laundry"><i class="fa fa-dashboard"></i> Transaksi Laundry</a></li>
            <?php if ($_SESSION['admin']){ ?>
            <li><a href="?page=transaksi"><i class="fa fa-money"></i> Transaksi</a></li>
            <?php } ?>
            
         
        
        
          
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  