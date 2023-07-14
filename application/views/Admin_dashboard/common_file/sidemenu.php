<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo justify-content-center">
        <a href="<?php echo base_url('dashboard') ?>" class="app-brand-link">
           <img src="<?php echo base_url() ?>assets/images/logo.png" alt="" width="150">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item <?php if($x=="dashboard"){ echo "active";}?>">
            <a href="<?php echo base_url('dashboard') ?>" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                Dashboards
            </a>
        </li>
        <!--  Staff Management -->
        <li class="menu-item <?php if($y=="staff_management"){ echo "active open";}?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                Staff Management
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?php if($x=="add_staff"){ echo "active";}?>">
                    <a href="<?php echo base_url('add_staff') ?>" class="menu-link">
                        Add Staff
                    </a>
                </li>
                <!-- <li class="menu-item <?php if($x=="staff_list"){ echo "active";}?>">
                    <a href="<?php echo base_url('staff_list') ?>" class="menu-link">
                        Staff List
                    </a>
                </li> -->
                <li class="menu-item <?php if($x=="staff_list"){ echo "active open";}?>">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        Staff List
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item <?php if($z=="other_staff_list"){ echo "active";}?>">
                            <a href="<?php echo base_url('staff_list') ?>" class="menu-link" >
                                Other Staff
                            </a>
                        </li>
                        <li class="menu-item <?php if($z=="sales_staff_list"){ echo "active";}?>">
                            <a href="<?php echo base_url('sales_staff_list') ?>" class="menu-link" >
                                Sales Satff
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- Sales Staff Management -->
        <!-- <li class="menu-item <?php if($y=="sales_staff_management"){ echo "active open";}?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                Sales Management
            </a>
            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        Add Sales Staff
                    </a>
                </li>
                <li class="menu-item <?php if($x=="sales_staff_list"){ echo "active";}?>">
                    <a href="<?php echo base_url('sales_staff_list') ?>" class="menu-link">
                    Sales Staff List
                    </a>
                </li>
            </ul>
        </li> -->
        <!-- Vendors account management  -->
        <li class="menu-item <?php if($y=="vendor_managment"){ echo "active open";}?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-check"></i>
                Vendor Management
            </a>
            <ul class="menu-sub ">
                <li class="menu-item <?php if($x=="pending_approval"){ echo "active";}?>">
                    <a href="<?php echo base_url('pending_approval') ?>" class="menu-link">
                        Pending Approval
                    </a>
                </li>
                <li class="menu-item <?php if($x=="vendor_list"){ echo "active";}?>">
                    <a href="<?php echo base_url('vendor_list') ?>" class="menu-link ">
                        Vendor List
                    </a>
                </li>
            </ul>
        </li>
        <!-- Order Management -->
        <li class="menu-item <?php if($y=="order_managment"){ echo "active open";}?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle ">
                <i class="menu-icon tf-icons bx bx-cart"></i>
                Order Management
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?php if($x=="new_order"){ echo "active";}?>">
                    <a href="<?php echo base_url('new_order') ?>" class="menu-link ">
                        New Order
                    </a>
                </li>
                <li class="menu-item  <?php if($x=="inProcess_order"){ echo "active";}?>">
                    <a href="<?php echo base_url('inProcess_order') ?>" class="menu-link">
                        In-Process Orders
                    </a>
                </li>
                <li class="menu-item <?php if($x=="completed_order"){ echo "active";}?>">
                    <a href="<?php echo base_url('completed_order') ?>" class="menu-link">
                        Completed Order
                    </a>
                </li>
                <li class="menu-item <?php if($x=="cancelled_order"){ echo "active";}?>">
                    <a href="<?php echo base_url('cancelled_order') ?>" class="menu-link">
                        Cancelled Order
                    </a>
                </li>
            </ul>
        </li>
        <!-- Product Management-->
        <li class="menu-item <?php if($y=="product_managment"){ echo "active open";}?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-package"></i>
                Product Management
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?php if($x=="add_product"){ echo "active";}?>">
                    <a href="<?php echo base_url('add_product') ?>" class="menu-link">
                        Add Product
                    </a>
                </li>
                <li class="menu-item <?php if($x=="product_list"){ echo "active";}?>">
                    <a href="<?php echo base_url('product_list') ?>" class="menu-link">
                        Product List
                    </a>
                </li>
            </ul>
        </li>
        <!-- Setting-->
        <li class="menu-item <?php if($y=="setting"){ echo "active open";}?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                Setting
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?php if($x=="create_category"){ echo "active";}?>">
                    <a href="<?php echo base_url('create_category') ?>" class="menu-link">
                        Create Category
                    </a>
                </li>
                <li class="menu-item <?php if($x=="create_size"){ echo "active";}?>">
                    <a href="<?php echo base_url('create_size') ?>" class="menu-link">
                        Create Size
                    </a>
                </li>
                <li class="menu-item <?php if($x=="create_color"){ echo "active";}?>">
                    <a href="<?php echo base_url('create_color') ?>" class="menu-link">
                        Create Color
                    </a>
                </li>
            </ul>
        </li>
        <!-- Bill Management -->
        <li class="menu-item <?php if($x=="bill_management"){ echo "active";}?>">
            <a href="<?php echo base_url('bill_management') ?>" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-receipt"></i>
                Bill Management
            </a>
        </li>
        <!-- Inventory Management -->
        <!-- <li class="menu-item <?php if($x=="inventory_management"){ echo "active";}?>">
            <a href="<?php echo base_url('inventory_management') ?>" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-line-chart"></i>
                Inventory Management
            </a>
        </li> -->
        <!-- Inventory Management-->
        <li class="menu-item <?php if($y=="inventory_management"){ echo "open active";}?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-package"></i>
                Inventory Management
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?php if($x=="stock_details"){ echo "active";}?>">
                    <a href="<?php echo base_url('stock_details') ?>" class="menu-link">
                        Stock Details
                    </a>
                </li>
                <li class="menu-item <?php if($x=="stock_history"){ echo "active";}?>">
                    <a href="<?php echo base_url('stock_history') ?>" class="menu-link">
                        Stock History
                    </a>
                </li>
            </ul>
        </li>
        <!-- Revenue Management -->
        <li class="menu-item <?php if($x=="revenue_management"){ echo "active";}?>">
            <a href="<?php echo base_url('revenue_management') ?>" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-line-chart"></i>
                Revenue Management
            </a>
        </li>
        <!-- Push Notification -->
        <li class="menu-item <?php if($x=="push_notification"){ echo "active";}?>">
            <a href="<?php echo base_url('push_notification') ?>" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-envelope"></i>
                Push Notification
            </a>
        </li>

        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Apps &amp; Pages</span>
        </li>
        <!-- About Us -->
        <li class="menu-item <?php if($x=="about_us"){ echo "active";}?>">
            <a href="<?php echo base_url('about_us') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-check"></i>
                About Us
            </a>
        </li>
        <!-- Banner Managment -->
        <li class="menu-item <?php if($x=="banner_management"){ echo "active";}?>">
            <a href="<?php echo base_url('banner_management') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-image-add"></i>
                Banner Management
            </a>
        </li>
        <!-- Privacy Policy -->
        <li class="menu-item <?php if($x=="privacy_policy"){ echo "active";}?>">
            <a href="<?php echo base_url('privacy_policy') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-check-shield"></i>
                Privacy Policy
            </a>
        </li>
        <!-- Terms And Condition -->
        <li class="menu-item <?php if($x=="term_condition"){ echo "active";}?>">
            <a href="<?php echo base_url('term_condition') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-align-middle"></i>
                Terms & Conditions
            </a>
        </li>

    </ul>
</aside>