<!-- .right-sidebar -->
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
        </div>
        <div class="r-panel-body">
            <ul id="themecolors" class="m-t-20">
                <li><b>With Light sidebar</b></li>
                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a>
                </li>
                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a>
                </li>
                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a>
                </li>
                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a>
                </li>
                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a>
                </li>
                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a>
                </li>
                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
            </ul>
            <ul class="m-t-20 chatonline">
                <li><b>Chat option</b></li>
                <li>
                    <a href="javascript:void(0)"><img src="{{ asset('admin/assets') }}/images/users/1.jpg"
                            alt="user-img" class="img-circle"> <span>Varun Dhavan <small
                                class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="{{ asset('admin/assets') }}/images/users/2.jpg"
                            alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small
                                class="text-warning">Away</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="{{ asset('admin/assets') }}/images/users/3.jpg"
                            alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small
                                class="text-danger">Busy</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="{{ asset('admin/assets') }}/images/users/4.jpg"
                            alt="user-img" class="img-circle"> <span>Arijit Sinh <small
                                class="text-muted">Offline</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="{{ asset('admin/assets') }}/images/users/5.jpg"
                            alt="user-img" class="img-circle"> <span>Govinda Star <small
                                class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="{{ asset('admin/assets') }}/images/users/6.jpg"
                            alt="user-img" class="img-circle"> <span>John Abraham<small
                                class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="{{ asset('admin/assets') }}/images/users/7.jpg"
                            alt="user-img" class="img-circle"> <span>Hritik Roshan<small
                                class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="{{ asset('admin/assets') }}/images/users/8.jpg"
                            alt="user-img" class="img-circle"> <span>Pwandeep rajan <small
                                class="text-success">online</small></span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Right sidebar -->

<!-- Left Sidebar - style you can find in sidebar.scss  -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class=" waves-effect waves-dark" href="{{ route('dashboard') }}" aria-expanded="false"><i
                            class="icon-speedometer"></i><span class="hide-menu">Dashboard </a>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-layout-grid2"></i><span class="hide-menu">Category
                            Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('category.add') }}">Add Category</a></li>
                        <li><a href="{{ route('category.manage') }}">Manage Category Module</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-email"></i><span class="hide-menu">Sub
                            Category</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('sub-category.add') }}">Add Sub Category</a></li>
                        <li><a href="{{ route('sub-category.manage') }}">Manage Sub Category</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-palette"></i>
                        <span class="hide-menu">Brand Module
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('brand.add') }}">Add Brand</a></li>
                        <li><a href="{{ route('brand.manage') }}">Brand Manage</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-layout-media-right-alt"></i><span class="hide-menu">Unit Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('unit.add') }}">Add unit</a></li>
                        <li><a href="{{ route('unit.manage') }}">manage unit</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-layout-accordion-merged"></i><span class="hide-menu">Product Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="table-basic.html">Add Product</a></li>
                        <li><a href="table-layout.html">Manage Product</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-settings"></i><span class="hide-menu">Order
                            Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="widget-data.html">Manage Order</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-gallery"></i><span class="hide-menu">Customer
                            Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="layout-single-column.html">Manage Customer</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-files"></i><span class="hide-menu">User
                            Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="starter-kit.html">Add User</a></li>
                        <li><a href="pages-blank.html">Manage User</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-pie-chart"></i><span class="hide-menu">Coupon</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="chart-morris.html">Add Coupon</a></li>
                        <li><a href="chart-chartist.html">Manage Coupon</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-light-bulb"></i><span class="hide-menu">Setting
                            Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="icon-material.html">Company Setting</a></li>
                        <li><a href="icon-fontawesome.html">Shopping Setting</a></li>
                    </ul>
                </li>
                class="far fa-circle text-info"></i><span class="hide-menu">FAQs</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
