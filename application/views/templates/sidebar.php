        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
            <br>
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-text mx-3 mt-4"> <img src="<?= base_url('vendor/'); ?>sbadmin2/assets/image/illustrations/iconic.png" width="200" height="125" class=" align-right "></div> 
            </a>
            <br>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- QUERY MENU -->
            <?php 
            $role_id = $this->session->userdata('role_id');
            $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu` 
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
            $menu = $this->db->query($queryMenu)->result_array();  
            ?>


            <!-- LOOPING MENU -->
            <?php foreach($menu as $m) : ?>
            <div class="sidebar-heading">
                <?= $m['menu']; ?>
            </div>

            <!-- SIAPKAN SUB-MENU SESUAI MENU -->
            <?php 
            $menuId = $m['id'];
            $querySubMenu = "SELECT *
                               FROM `user_sub_menu` JOIN `user_menu`
                                 ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                              WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1
                            ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

            <!--LOOPING SUBMENU-->
            <?php foreach($subMenu as $sm) : ?>

            <!-- Bantuan Visual Menu -->
            <?php if ($title == $sm['title']) : ?>
            <li class="nav-item active">
                <?php else : ?>
            <li class="nav-item">
                <?php endif; ?>

                <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?>"></i>
                    <span><?= $sm['title']; ?></span></a>
            </li>    
            <?php endforeach; ?>

            <hr class="sidebar-divider">

            <?php endforeach; ?>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <i class="fab fa-4x fa-phoenix-squadron text-primary mb-4"></i>
            </div>
        </ul>
        <!-- End of Sidebar -->
     