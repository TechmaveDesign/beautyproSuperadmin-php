<?php include("header.php") ?>

<div class="page-wrapper">
    <div class="content">
        <div class="d-md-flex pagetop_headercmntb d-block align-items-center justify-content-between page-breadcrumb ">
            <div class="my-auto ">
                <h2 class="mb-1">Email Management</h2>
                <p class="page-subtitle">Manage campaigns, templates, and communication</p>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

                <div class="">
                  <a href="create-plan.php"
                        class="btn btn-primary d-flex align-items-center cmnaddbtn">
                       <iconify-icon icon="icon-park-outline:add-one"></iconify-icon> Add Template
                    </a>
                </div>
                <div class="head-icons ms-2 headicon_innerpage">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="transactons_matrix">
            <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="metric-card">
                <div class="metric-content">
                    <div class="metric-info">
                        <p class="metric-label">Total Sent</p>
                        <p class="metric-value primary">521</p>
                    </div>
                    <div class="metric-icon primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="send" class="lucide lucide-send"><path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"></path><path d="m21.854 2.147-10.94 10.939"></path></svg>
                    </div>
                </div>
                <div class="metric-footer">
                    <div class="metric-change positive">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="trending-up" class="lucide lucide-trending-up"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>
                        <span>+8.2%</span>
                        <span class="text-muted">vs last month</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="metric-card">
                <div class="metric-content">
                    <div class="metric-info">
                        <p class="metric-label">Open Rate</p>
                        <p class="metric-value success">57.1%</p>
                    </div>
                    <div class="metric-icon success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="mail" class="lucide lucide-mail"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect></svg>
                    </div>
                </div>
                <div class="metric-footer">
                    <p class="text-muted">Industry avg: 42.1%</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="metric-card">
                <div class="metric-content">
                    <div class="metric-info">
                        <p class="metric-label">Click Rate</p>
                        <p class="metric-value warning">20.4%</p>
                    </div>
                    <div class="metric-icon warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="bar-chart-3" class="lucide lucide-bar-chart-3"><path d="M3 3v16a2 2 0 0 0 2 2h16"></path><path d="M18 17V9"></path><path d="M13 17V5"></path><path d="M8 17v-3"></path></svg>
                    </div>
                </div>
                <div class="metric-footer">
                    <p class="text-muted">Industry avg: 18.5%</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="metric-card">
                <div class="metric-content">
                    <div class="metric-info">
                        <p class="metric-label">Active Campaigns</p>
                        <p class="metric-value primary">1</p>
                    </div>
                    <div class="metric-icon primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="calendar" class="lucide lucide-calendar"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                    </div>
                </div>
                <div class="metric-footer">
                    <p class="text-muted">1 scheduled</p>
                </div>
            </div>
        </div>
    </div>
        </div>

        <div class="card tablemaincard_nopaddingleftright">
            <div class="card-header">
                <h5 class="card-title">
                    <iconify-icon icon="fontisto:email"></iconify-icon> Email Campaigns
                </h5>
            </div>

            <div id="tablefiltesa_container">
                <div class="row">
                    <!-- Left Filters -->
                    <div class="col-lg-8">
                        <div class="leftprFilters">
                            <div class="row">

                                <!-- Plan Filter -->
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <i data-feather="layers" class="info-img"></i>
                                        <select class="select2">
                                            <option value="Active">Active</option>
                                            <option value="Draft">Draft</option>
                                            <option value="Sent">Sent</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Status Filter -->
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <i data-feather="toggle-right" class="info-img"></i>
                                       <select class="form-select select2">
                                <option>All Types</option>
                                <option>Welcome</option>
                                <option>Promotion</option>
                                <option>Newsletter</option>
                                <option>Notification</option>
                            </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Right Filters -->
                    <div class="col-lg-4">
                        <div class="rightPrFilters">
                            <div class="input-icon mb-2 position-relative">
                                <span class="input-icon-addon">
                                    <i class="ti ti-calendar text-gray-9"></i>
                                </span>
                                <input type="text" class="form-control date-range bookingrange"
                                    placeholder="dd/mm/yyyy - dd/mm/yyyy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Filter -->

            <table class="table common-datatable nowrap w-100">
                <thead>
                    <tr>
                        <th>Campaign Name</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Recipients</th>
                        <th>Open Rate</th>
                        <th>Click Rate</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                                <tr>
                                    <td>
                                        <div>
                                            <div class="fw-medium">Welcome New Salons</div>
                                            <div class="text-muted small">EML001</div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-primary">Welcome</span></td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>156</td>
                                    <td class="fw-medium">57.1%</td>
                                    <td class="fw-medium">21.8%</td>
                                   <td>
                            <div class="d-flex align-items-center ActionDropdown">
                                <div class="d-flex">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Salon Details" href="salon-details.php">
                                        <span class="icon"><span class="feather-icon">
                                                <iconify-icon icon="hugeicons:view"></iconify-icon>
                                            </span></span>
                                    </a>

                                </div>
                            </div>
                        </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <div class="fw-medium">Premium Plan Promotion</div>
                                            <div class="text-muted small">EML002</div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Promotion</span></td>
                                    <td><span class="badge badge-secondary">Draft</span></td>
                                    <td>0</td>
                                    <td class="fw-medium">—</td>
                                    <td class="fw-medium">—</td>
                                    <td>
                            <div class="d-flex align-items-center ActionDropdown">
                                <div class="d-flex">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Salon Details" href="salon-details.php">
                                        <span class="icon"><span class="feather-icon">
                                                <iconify-icon icon="hugeicons:view"></iconify-icon>
                                            </span></span>
                                    </a>

                                </div>
                            </div>
                        </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <div class="fw-medium">Monthly Newsletter</div>
                                            <div class="text-muted small">EML003</div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-warning">Newsletter</span></td>
                                    <td><span class="badge badge-success">Sent</span></td>
                                    <td>342</td>
                                    <td class="fw-medium">57.9%</td>
                                    <td class="fw-medium">19.6%</td>
                                    <td>
                            <div class="d-flex align-items-center ActionDropdown">
                                <div class="d-flex">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Salon Details" href="salon-details.php">
                                        <span class="icon"><span class="feather-icon">
                                                <iconify-icon icon="hugeicons:view"></iconify-icon>
                                            </span></span>
                                    </a>

                                </div>
                            </div>
                        </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <div class="fw-medium">Payment Failed Reminder</div>
                                            <div class="text-muted small">EML004</div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-danger">Notification</span></td>
                                     <td><span class="badge badge-success">Active</span></td>
                                    <td>23</td>
                                    <td class="fw-medium">—</td>
                                    <td class="fw-medium">—</td>
                                   <td>
                            <div class="d-flex align-items-center ActionDropdown">
                                <div class="d-flex">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Salon Details" href="salon-details.php">
                                        <span class="icon"><span class="feather-icon">
                                                <iconify-icon icon="hugeicons:view"></iconify-icon>
                                            </span></span>
                                    </a>

                                </div>
                            </div>
                        </td>
                                </tr>
                            </tbody>
            </table>

        </div>

        <!-- /Filter -->

    </div>
</div>

<!-- Add Category modal start -->
<div class="modal fade custombottm_modalStyle" id="Addcategory_modal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Category</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <form action="categories.php">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Category Name <div class="requiredLabel">*</div> </label>
                                <input type="text" placeholder="" class="form-control largeinp_height">
                                <p class="frmlabelwith_peragraph">The name is how it appears on your site.</p>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <div
                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                    <span class="status-label">Status</span>
                                    <input type="checkbox" id="user2" class="check" checked="">
                                    <label for="user2" class="checktoggle"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary canvasSubmit_button">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add category end -->

<!-- edit Category modal start -->
<div class="modal fade custombottm_modalStyle" id="Editcategory_modal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Category</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <form action="categories.php">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Category Name <div class="requiredLabel">*</div> </label>
                                <input type="text" placeholder="" class="form-control largeinp_height">
                                <p class="frmlabelwith_peragraph">The name is how it appears on your site.</p>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <div
                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                    <span class="status-label">Status</span>
                                    <input type="checkbox" id="user2" class="check" checked="">
                                    <label for="user2" class="checktoggle"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary canvasSubmit_button">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit category end -->

<?php include("footer.php") ?>