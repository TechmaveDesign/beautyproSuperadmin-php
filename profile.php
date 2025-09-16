<?php include("header.php") ?>

<div class="page-wrapper">
    <form action="profile.php">
    <div class="content settings-content">
        <div class="d-md-flex pagetop_headercmntb d-block align-items-center justify-content-between page-breadcrumb ">

            <div class="my-auto ">
                <h2 class="mb-1 flexpagetitle">
                    <div class="backbtnwrap">
                        <a href="index.php">
                            <iconify-icon icon="octicon:arrow-left-24"></iconify-icon>
                        </a>
                    </div>
                    Your Profile
                </h2>
            </div>

            <div class="d-flex  right-content align-items-center flex-wrap ">
                <ul class="tophead_action">
                  
                    <li>
                        <div class="enquiryDate">
                            <iconify-icon icon="ion:calendar-outline"></iconify-icon> Last Updated On : <div class="Onboarddate">
                                14 Dec 2024 12:24pm</div>

                        </div>
                    </li>
                    <li>
                        <div class="pageheader_rightbtns">
                            <button type="submit" class="cmnPromary_btn">Save Changes</button>
                        </div>
                    </li>
                   

                </ul>
                <div class="head-icons ms-2 mb-0">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="card tablemaincard_nopaddingleftright noboxshadow">
            <div class="card-body p-0">
                <div class="custom-datatable-filter">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="settings-wrapper d-flex">
                                <div class="sidebars settings-sidebar " id="sidebar2">
                                    <div class="sidebar-inner slimscroll">
                                        <div class="profile-content">
                                            <div class="profile-contentimg">
                                                <img src="assets/img/newimages/userdummy.png" alt="img" id="blah">
                                            </div>
                                            <div class="profile-contentname">
                                                <h2>American Services</h2>
                                                <p><a href="mailto:americanservicesinfo@gmail.com">americanservices@gmail.com</a>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="copy-container">
                                            <span>Your ID:</span>
                                            <div class="user-id" id="userID">#USD565</div>
                                        </div>

                                        <div id="sidebar-menu5" class="sidebar-menu">
                                            <div class="nav vendorDetail_lefttabs flex-column nav-pills  tab-style-7"
                                                id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <button class="nav-link text-start active" id="main-profile-tab"
                                                    data-bs-toggle="pill" data-bs-target="#main-profile" type="button"
                                                    role="tab" aria-controls="main-profile" aria-selected="true">
                                                    <iconify-icon icon="solar:user-line-duotone"></iconify-icon> Basic
                                                    Details
                                                </button>
                                                <button class="nav-link text-start" id="man-password-tab"
                                                    data-bs-toggle="pill" data-bs-target="#man-password" type="button"
                                                    role="tab" aria-controls="man-password" aria-selected="false">
                                                    <iconify-icon icon="hugeicons:square-lock-password"></iconify-icon>
                                                    Security
                                                </button>
                                                <!-- <button class="nav-link text-start" id="main-bankaccounts-tab"
                                                    data-bs-toggle="pill" data-bs-target="#main-bankaccounts" type="button"
                                                    role="tab" aria-controls="main-bankaccounts" aria-selected="false">
                                                    <iconify-icon icon="pepicons-pencil:bank"></iconify-icon>
                                                    Bank Accounts
                                                </button> -->

                                                <!-- <button class="nav-link text-start" id="main-team-tab"
                                                    data-bs-toggle="pill" data-bs-target="#main-team" type="button"
                                                    role="tab" aria-controls="main-team" aria-selected="false">
                                                    <iconify-icon icon="iconoir:bell-notification"></iconify-icon>
                                                    Notifications
                                                </button> -->

                                                <button class="nav-link text-start" id="warehouse-details-tab"
                                                    data-bs-toggle="pill" data-bs-target="#warehouse-details"
                                                    type="button" role="tab" aria-controls="warehouse-details"
                                                    aria-selected="false">
                                                    <iconify-icon icon="ph:building-office-light"></iconify-icon>
                                                    Company Settings
                                                </button>

                                            </div>

                                        </div>

                                        <div class="profileLogout_wrap">
                                            <button class="btn" id="logoutbtn" type="button">
                                                <iconify-icon icon="solar:logout-broken"></iconify-icon> Logout
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="settings-page-wrap">
                                  

                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane show active" id="main-profile" role="tabpanel"
                                                tabindex="0">
                                                <div class="setting-title">
                                                    <h4>Basic Information</h4>
                                                </div>
                                                <div class="vendortab_inrdetails">

                                                    <div class="row">
                                                        <div class="image-upload-container mb-2">
                                                            <div class="profile-pic-wrapper">
                                                                <div class="pic-holder">
                                                                    <!-- uploaded pic shown here -->
                                                                    <img id="profilePic" class="pic" src="">

                                                                    <Input class="uploadProfileInput" type="file"
                                                                        name="profile_pic" id="newProfilePhoto"
                                                                        accept="image/*" style="opacity: 0;" />
                                                                    <label for="newProfilePhoto"
                                                                        class="upload-file-block">
                                                                        <div class="text-center">
                                                                            <div class="uploadicon_template">
                                                                                <iconify-icon icon="bytesize:upload">
                                                                                </iconify-icon>
                                                                            </div>
                                                                            <div class="text-uppercase">
                                                                                Update <br /> Photo
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="card-title-head afterfirsthead_title">
                                                        <h6><span>
                                                                <iconify-icon icon="solar:user-line-duotone">
                                                                </iconify-icon>
                                                            </span>Primary Contact</h6>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Salutation</label>
                                                                <input type="text" class="form-control" value="Mr.">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label"> First Name</label>
                                                                <input type="text" class="form-control" value="John">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label"> Last Name</label>
                                                                <input type="text" class="form-control" value="Doe">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label"> Phone Number</label>
                                                                <input class="form-control phonewithcode_inp" id="phone"
                                                                    name="phone" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label"> Email Address</label>
                                                                <input type="email" class="form-control"
                                                                    value="johndoe@example.com">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="card-title-head afterfirsthead_title">
                                                        <h6><span>
                                                                <iconify-icon icon="fluent:location-ripple-24-regular">
                                                                </iconify-icon>
                                                            </span>Address

                                                        </h6>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Street Address 1</label>
                                                                <input type="text" class="form-control"
                                                                    value="123 Main Street, Apt 101">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Street Address Line 2</label>
                                                                <input type="text" class="form-control"
                                                                    value="123 Main Street, Apt 101">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="mb-3">
                                                                <label class="form-label">Country / Region</label>
                                                                <input type="text" class="form-control" value="Morocco">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-3">
                                                            <div class="mb-3">
                                                                <label class="form-label">State / Province</label>
                                                                <input type="text" class="form-control"
                                                                    value="California">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-3">
                                                            <div class="mb-3">
                                                                <label class="form-label">City</label>
                                                                <input type="text" class="form-control"
                                                                    value="Los Angeles">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-3">
                                                            <div class="mb-3">
                                                                <label class="form-label">Postal / Zip Code</label>
                                                                <input type="text" class="form-control" value="90001">
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane" id="man-password" role="tabpanel" tabindex="0">
                                                <div class="settings-page-wrap">
                                                  
                                                        <div class="setting-title">
                                                            <h4>Security Settings</h4>
                                                        </div>
                                                        <div class="vendortab_inrdetails password_setting">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div
                                                                        class="form-group inputwithICON position-relative">
                                                                        <label class="form-label">Old Password</label>
                                                                        <iconify-icon icon="iconamoon:eye-light"
                                                                            width="17" height="17"></iconify-icon>
                                                                        <input type="password" class="form-control"
                                                                            placeholder="Enter old Password">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div
                                                                        class="form-group inputwithICON position-relative">
                                                                        <label class="form-label">New Password</label>
                                                                        <iconify-icon icon="iconamoon:eye-light"
                                                                            width="17" height="17"></iconify-icon>
                                                                        <input type="password" class="form-control"
                                                                            placeholder="Enter New Password">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div
                                                                        class="form-group inputwithICON position-relative">
                                                                        <label class="form-label">Confirm
                                                                            Password</label>
                                                                        <iconify-icon icon="iconamoon:eye-light"
                                                                            width="17" height="17"></iconify-icon>
                                                                        <input type="password" class="form-control"
                                                                            placeholder="Confirm Password">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=" securityNote">
                                                                <iconify-icon icon="ph:info-fill"></iconify-icon>
                                                                <p>Password should be minmum 8 letter and include lower
                                                                    and uppercase letter.</p>
                                                            </div>
                                                        </div>

                                                </div>
                                            </div>

                                            <!-- <div class="tab-pane" id="main-bankaccounts" role="tabpanel" tabindex="0">
                                                <div class="settings-page-wrap">
                                                  
                                                        <div class="setting-title">
                                                            <h4>Bank Accounts</h4>
                                                            <a href="#" class="btn btn-primary d-flex align-items-center cmnaddbtn" data-bs-toggle="modal" data-bs-target="#add-account"><iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Add New Account</a>
                                                        </div>
                                                        <div class="vendortab_inrdetails password_setting">
                                                       
                                                        <div class="row">
										<div class="col-xxl-4 col-xl-6 col-lg-12 col-sm-6">
											<div class="bank-box active">
												<div class="bank-header">
													<div class="bank-name">
														<h6>Karur vysya bank</h6>
														<p>**** **** 1982</p>
													</div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<div class="bank-info">
														<span>Holder Name</span>
														<h6>John Smith</h6>
													</div>
													<div class="edit-delete-action bank-action-btn">
														<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-account">
															<i data-feather="edit" class="feather-edit"></i>
														</a>
														<a class="confirm-text p-2" href="javascript:void(0);">
															<i data-feather="trash-2" class="feather-trash-2"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xxl-4 col-xl-6 col-lg-12 col-sm-6">
											<div class="bank-box">
												<div class="bank-header">
													<div class="bank-name">
														<h6>Swiss Bank</h6>
														<p>**** **** 1796</p>
													</div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<div class="bank-info">
														<span>Holder Name</span>
														<h6>Andrew</h6>
													</div>
													<div class="edit-delete-action bank-action-btn">
														<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-account">
															<i data-feather="edit" class="feather-edit"></i>
														</a>
														<a class="confirm-text p-2" href="javascript:void(0);">
															<i data-feather="trash-2" class="feather-trash-2"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xxl-4 col-xl-6 col-lg-12 col-sm-6">
											<div class="bank-box">
												<div class="bank-header">
													<div class="bank-name">
														<h6>HDFC</h6>
														<p>**** **** 1832</p>
													</div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<div class="bank-info">
														<span>Holder Name</span>
														<h6>Mathew</h6>
													</div>
													<div class="edit-delete-action bank-action-btn">
														<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-account">
															<i data-feather="edit" class="feather-edit"></i>
														</a>
														<a class="confirm-text p-2" href="javascript:void(0);">
															<i data-feather="trash-2" class="feather-trash-2"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
                                                        </div>

                                                </div>
                                            </div> -->


                                            <!-- <div class="tab-pane" id="main-team" role="tabpanel"
                                                aria-labelledby="main-team-tab" tabindex="0">
                                                <div class="settings-page-wrap">
                                                   
                                                        <div class="setting-title">
                                                            <h4>Notifications</h4>
                                                        </div>
                                                        <div class="vendortab_inrdetails">


                                                            <div class="notifications_settings">

                                                                <div class="form-check form-check-lg form-switch">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        role="switch" id="switch-lg" checked>
                                                                    <label class="form-check-label" for="switch-lg">Save
                                                                        my Activities Log</label>
                                                                </div>

                                                                <div class="form-check form-check-lg form-switch">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        role="switch" id="switch-lg2">
                                                                    <label class="form-check-label"
                                                                        for="switch-lg2">Confirm me through email before
                                                                        password change</label>
                                                                </div>

                                                                <div class="form-check form-check-lg form-switch">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        role="switch" id="switch-lg3">
                                                                    <label class="form-check-label"
                                                                        for="switch-lg3">Notify me by email about sales
                                                                        and latest news</label>
                                                                </div>

                                                                <div class="form-check form-check-lg form-switch">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        role="switch" id="switch-lg4">
                                                                    <label class="form-check-label"
                                                                        for="switch-lg4">Alert me by email for unusual
                                                                        activity.</label>
                                                                </div>

                                                            </div>
                                                        </div>

                                                </div>
                                            </div> -->

                                            <div class="tab-pane" id="warehouse-details" role="tabpanel"
                                                aria-labelledby="warehouse-details-tab" tabindex="0">
                                                <div class="setting-title">
                                                    <h4>Company Details</h4>
                                                </div>

                                                <div class="vendortab_inrdetails">

                                                    <div class="card-title-head">
                                                        <h6><span>
                                                                <iconify-icon icon="solar:shop-line-duotone">
                                                                </iconify-icon>
                                                            </span>Company
                                                            Information</h6>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Company Name</label>
                                                                <input type="text" class="form-control"
                                                                    value="American Services">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label"> Phone Number</label>
                                                                <input class="form-control phonewithcode_inp"
                                                                    id="phone2" name="phone" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label"> Email Address</label>
                                                                <input type="email" class="form-control"
                                                                    value="johndoe@example.com">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-title-head afterfirsthead_title">
                                                        <h6><span>
                                                                <iconify-icon icon="solar:user-line-duotone">
                                                                </iconify-icon>
                                                            </span>Company Manager Details</h6>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Salutation</label>
                                                                <input type="text" class="form-control" value="Mr.">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Manager First Name</label>
                                                                <input type="text" class="form-control" value="John">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Manager Last Name</label>
                                                                <input type="text" class="form-control" value="Doe">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Manager Phone Number</label>
                                                                <input type="text" class="form-control"
                                                                    value="+1 234 567 8901">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Manager Email Address</label>
                                                                <input type="email" class="form-control"
                                                                    value="johndoe@example.com">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="card-title-head afterfirsthead_title">
                                                        <h6><span>
                                                                <iconify-icon icon="fluent:location-ripple-24-regular">
                                                                </iconify-icon>
                                                            </span>Company Address

                                                        </h6>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Street Address 1</label>
                                                                <input type="text" class="form-control"
                                                                    value="123 Main Street, Apt 101" readonly=""
                                                                    disabled="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Street Address Line 2</label>
                                                                <input type="text" class="form-control"
                                                                    value="123 Main Street, Apt 101" readonly=""
                                                                    disabled="">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="mb-3">
                                                                <label class="form-label">Country / Region</label>
                                                                <input type="text" class="form-control" value="Morocco">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-3">
                                                            <div class="mb-3">
                                                                <label class="form-label">State / Province</label>
                                                                <input type="text" class="form-control"
                                                                    value="California">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-3">
                                                            <div class="mb-3">
                                                                <label class="form-label">City</label>
                                                                <input type="text" class="form-control"
                                                                    value="Los Angeles">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-3">
                                                            <div class="mb-3">
                                                                <label class="form-label">Postal / Zip Code</label>
                                                                <input type="text" class="form-control" value="90001">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="card-title-head afterfirsthead_title">
                                                        <h6><span>
                                                                <iconify-icon icon="fluent:location-ripple-24-regular">
                                                                </iconify-icon>
                                                            </span>Company Geo Location

                                                        </h6>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Latitude</label>
                                                                <input type="text" class="form-control"
                                                                    value="65656478">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Longitude</label>
                                                                <input type="text" class="form-control"
                                                                    value="65656478">
                                                            </div>
                                                        </div>

                                                        <div class="card-title-head afterfirsthead_title">
                                                            <h6><span>
                                                                    <iconify-icon
                                                                        icon="fluent:location-ripple-24-regular">
                                                                    </iconify-icon>
                                                                </span>Map Location

                                                            </h6>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Map</label>
                                                                <div class="mapContainer">
                                                                    <iframe
                                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.6821295533673!2d138.62615907569946!3d-34.91442577397358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0c95ccb6a26d1%3A0xcd187420b921831!2s1-7%20Union%20St%2C%20Stepney%20SA%205069%2C%20Australia!5e0!3m2!1sen!2sin!4v1715164173684!5m2!1sen!2sin"
                                                                        style="border:0;" allowfullscreen=""
                                                                        loading="lazy"
                                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </form>
</div>

<!-- Add Bank Account -->
<div class="modal fade" id="add-account">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Add Bank Account</h4>
								</div>
								
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="profile.php">
									<div class="row">
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Bank Name <span> *</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Account Number <span> *</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Account Name <span> *</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Branch <span> *</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">IFSC <span> *</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="status-toggle modal-status d-flex justify-content-between align-items-center mb-3">
												<span class="status-label">Status</span>
												<input type="checkbox" id="user2" class="check" checked="">
												<label for="user2" class="checktoggle"></label>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
												<span class="status-label">Make as default</span>
												<input type="checkbox" id="user3" class="check" checked="">
												<label for="user3" class="checktoggle"></label>
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Bank Account -->

		<!-- Edit Bank Account -->
		<div class="modal fade" id="edit-account">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Edit Bank Account</h4>
								</div>
								
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="profile.php">
									<div class="row">
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Bank Name <span> *</span></label>
												<input type="text" class="form-control" value="HDFC">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Account Number <span> *</span></label>
												<input type="text" class="form-control" value="**** **** 1832">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Account Name <span> *</span></label>
												<input type="text" class="form-control" value="Mathew">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Branch <span> *</span></label>
												<input type="text" class="form-control" value="Bringham">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">IFSC <span> *</span></label>
												<input type="text" class="form-control" value="124547">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="status-toggle modal-status d-flex justify-content-between align-items-center mb-3">
												<span class="status-label">Status</span>
												<input type="checkbox" id="user5" class="check" checked="">
												<label for="user5" class="checktoggle"></label>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
												<span class="status-label">Make as default</span>
												<input type="checkbox" id="user6" class="check" checked="">
												<label for="user6" class="checktoggle"></label>
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Save Changes</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Bank Account -->

<?php include("footer.php") ?>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- copy id functionality start -->
<script>
    function copyText() {
        // Get the User ID content
        const userID = document.getElementById('userID').textContent;
        // Copy text to clipboard
        const textarea = document.createElement('textarea');
        textarea.value = userID;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
        // SweetAlert2 Toast Notification
        Swal.fire({
            toast: true,
            icon: 'success',
            title: 'Copied to clipboard!',
            position: 'bottom-end',
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            background: '#fff',
            color: '#333',
        });
    }
</script>
<!-- end -->

<!-- profile image upload js -->
<script>
    document.addEventListener("change", function(event) {
        if (event.target.classList.contains("uploadProfileInput")) {
            var triggerInput = event.target;
            var currentImg = triggerInput.closest(".pic-holder").querySelector(".pic").src;
            var holder = triggerInput.closest(".pic-holder");
            var wrapper = triggerInput.closest(".profile-pic-wrapper");
            var alerts = wrapper.querySelectorAll('[role="alert"]');
            alerts.forEach(function(alert) {
                alert.remove();
            });
            triggerInput.blur();
            var files = triggerInput.files || [];
            if (!files.length || !window.FileReader) {
                return;
            }
            if (/^image/.test(files[0].type)) {
                var reader = new FileReader();
                reader.readAsDataURL(files[0]);
                reader.onloadend = function() {
                    holder.classList.add("uploadInProgress");
                    holder.querySelector(".pic").src = this.result;
                    var loader = document.createElement("div");
                    loader.classList.add("upload-loader");
                    loader.innerHTML =
                        '<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>';
                    holder.appendChild(loader);
                    setTimeout(function() {
                        holder.classList.remove("uploadInProgress");
                        loader.remove();
                        var random = Math.random();
                        if (random < 0.9) {
                            wrapper.innerHTML +=
                                '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> Store image updated successfully</div>';
                            triggerInput.value = "";
                            // Hide the label by setting opacity to 0
                            wrapper.querySelector(".upload-file-block").style.opacity = "0";
                            setTimeout(function() {
                                wrapper.querySelector('[role="alert"]').remove();
                            }, 3000);
                        } else {
                            holder.querySelector(".pic").src = currentImg;
                            wrapper.innerHTML +=
                                '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again later.</div>';
                            triggerInput.value = "";
                            setTimeout(function() {
                                wrapper.querySelector('[role="alert"]').remove();
                            }, 3000);
                        }
                    }, 1500);
                };
            } else {
                wrapper.innerHTML +=
                    '<div class="alert alert-danger d-inline-block p-2 small" role="alert">Please choose a valid image.</div>';
                setTimeout(function() {
                    var invalidAlert = wrapper.querySelector('[role="alert"]');
                    if (invalidAlert) {
                        invalidAlert.remove();
                    }
                }, 3000);
            }
        }
    });
</script>
<!-- profile image upload js -->

<!-- password validation functionality start -->
<script>
    $(document).ready(function() {
        // Toggle password visibility
        $(".inputwithICON iconify-icon").click(function() {
            let input = $(this).siblings("input");
            let type = input.attr("type") === "password" ? "text" : "password";
            input.attr("type", type);
        });
        // Password validation and match check
        function validatePassword(password) {
            const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            return regex.test(password);
        }
        $("input[placeholder='Enter New Password']").on("keyup", function() {
            let newPassword = $(this).val();
            let validationMessage =
                "Password should be at least 8 characters long and include uppercase, lowercase, numbers, and special characters.";
            if (validatePassword(newPassword)) {
                $(".securityNote p").text("Password meets requirements.").css("color", "green");
                $("input[placeholder='Confirm Password']").prop("disabled", false);
            } else {
                $(".securityNote p").text(validationMessage).css("color", "red");
                $("input[placeholder='Confirm Password']").prop("disabled", true);
            }
        });
        $("input[placeholder='Confirm Password']").on("keyup", function() {
            let newPassword = $("input[placeholder='Enter New Password']").val();
            let confirmPassword = $(this).val();
            $(".match-message, .error-message").remove();
            if (newPassword !== "" && confirmPassword !== "") {
                if (newPassword === confirmPassword) {
                    $(".securityNote").after(
                        "<p class='match-message' style='color: green;'>Passwords match!</p>");
                } else {
                    $(".securityNote").after(
                        "<p class='error-message' style='color: red;'>Passwords do not match!</p>");
                }
            }
        });
    });
</script>
<!-- end -->