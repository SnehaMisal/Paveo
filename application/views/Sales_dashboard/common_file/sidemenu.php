<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo justify-content-center">
        <a href="<?php echo base_url('sales_dashboard') ?>" class="app-brand-link">
        <img src="<?php echo base_url() ?>assets/images/logo.png" alt="" width="150" class="logo_fixed ">
           <img src="<?php echo base_url() ?>assets/images/favicon.png" alt="" width="150" class="logo_collapse ">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item <?php if($x=="dashboard"){ echo "active";}?>">
            <a href="<?php echo base_url('sales_dashboard') ?>" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                Dashboards
            </a>
        </li>
        <!-- Vendors List -->
        <li class="menu-item <?php if($x=="vendor_list"){ echo "active";}?>">
            <a href="<?php echo base_url('sales_vendor_list') ?>" class="menu-link ">
            <i class="menu-icon tf-icons bx bx-user-check"></i>
                Vendor List
            </a>
        </li>
        <!-- Order Management -->
        <li class="menu-item <?php if($y=="order_managment"){ echo "active open";}?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle ">
                <i class="menu-icon tf-icons bx bx-cart"></i>
                Order Management
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?php if($x=="sales_new_order"){ echo "active";}?>">
                    <a href="<?php echo base_url('sales_new_order') ?>" class="menu-link ">
                        New Order
                    </a>
                </li>
                <li class="menu-item  <?php if($x=="sales_inProcess_order"){ echo "active";}?>">
                    <a href="<?php echo base_url('sales_inProcess_order') ?>" class="menu-link">
                        In-Process Orders
                    </a>
                </li>
                <li class="menu-item <?php if($x=="sales_completed_order"){ echo "active";}?>">
                    <a href="<?php echo base_url('sales_completed_order') ?>" class="menu-link">
                        Completed Order
                    </a>
                </li>
                <li class="menu-item <?php if($x=="sales_cancelled_order"){ echo "active";}?>">
                    <a href="<?php echo base_url('sales_cancelled_order') ?>" class="menu-link">
                        Cancelled Order
                    </a>
                </li>
            </ul>
        </li>
        <!-- Bill Management -->
        <li class="menu-item <?php if($x=="bill_management"){ echo "active";}?>">
            <a href="<?php echo base_url('sales_bill_management') ?>" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-receipt"></i>
                Bill Management
            </a>
        </li>
        <!-- Revenue Management -->
        <li class="menu-item <?php if($x=="sales_revenue_management"){ echo "active";}?>">
            <a href="<?php echo base_url('sales_revenue_management') ?>" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-line-chart"></i>
                Revenue Management
            </a>
        </li>

    </ul>
</aside>