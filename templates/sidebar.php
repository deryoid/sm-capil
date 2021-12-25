<aside class="main-sidebar sidebar-dark-green elevation-4">
  <!-- dark-primary  -->
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="<?= base_url() ?>/assets/dist/img/logo.png" style="width: 40px;" alt="#" class="brand-image" style="opacity: .8">
    <span class="brand-text font-weight-light"><b>DISDUKCAPIL HSS</b></span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 d-flex">
      <!-- <div class="image">
        <img src="<?= base_url() ?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div> -->
      <div>
        <a href="#" class="d-block">
          <h6>
            <?php
            if ($_SESSION['role'] == "Super Admin") {
              echo $_SESSION['nama'];
            } elseif ($_SESSION['role'] == "Kepala") {
              echo $_SESSION['nama'];
            } elseif ($_SESSION['role'] == "User") {
              echo $_SESSION['nama'];
            } 
            ?>
          </h6>
        </a>
      </div>
    </div>




    <?php if ($_SESSION['role'] == "Super Admin") { ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('admin/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview"> -->
              <!-- <li class="nav-item">
                <a href="<?= base_url('admin/user/') ?>" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Management User</p>
                </a>
              </li> -->
            <!-- </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/kategori/') ?>" class="nav-link">
                  <i class="fas fa-clipboard-list nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="<?= base_url('admin/pegawai/') ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Pegawai
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/suratmasuk') ?>" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
              Surat Masuk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/suratkeluar') ?>" class="nav-link">
              <i class="nav-icon fas fa-envelope-open-text"></i>
              <p>
              Surat Keluar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/st') ?>" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
              Surat Tugas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/inventaris') ?>" class="nav-link">
              <i class="nav-icon fas fa-sitemap"></i>
              <p>
              Inventaris
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->



    <?php } elseif ($_SESSION['role'] == "Kepala") { ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('kepala/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Agenda Dewan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?= base_url('kepala/suratmasuk/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-envelope-open-text"></i>
                  <p>
                    Surat Masuk Dewan
                  </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?= base_url('kepala/suratkeluar/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-paper-plane"></i>
                  <p>
                    Surat Keluar Dewan
                  </p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?= base_url('kepala/spd/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-plane-departure"></i>
                  <p>
                    SPD Dewan
                  </p>
                </a>
                </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Agenda Sekwan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?= base_url('kepala/suratmasuk_sekwan/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-envelope-open-text"></i>
                  <p>
                    Surat Masuk Sekwan
                  </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?= base_url('kepala/suratkeluar_sekwan/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-paper-plane"></i>
                  <p>
                    Surat Keluar Sekwan
                  </p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?= base_url('kepala/spd_sekwan/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-plane-departure"></i>
                  <p>
                    SPD Sekwan
                  </p>
                </a>
                </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->

    <?php } elseif ($_SESSION['role'] == "User") { ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('user/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Agenda Dewan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?= base_url('user/suratmasuk/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-envelope-open-text"></i>
                  <p>
                    Surat Masuk Dewan
                  </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?= base_url('user/suratkeluar/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-paper-plane"></i>
                  <p>
                    Surat Keluar Dewan
                  </p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?= base_url('user/spd/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-plane-departure"></i>
                  <p>
                    SPD Dewan
                  </p>
                </a>
                </li>
            </ul>
          </li>

          
         
          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->

    <?php } ?>
  </div>
  <!-- /.sidebar -->
</aside>