<?php include("header.php") ?>

<div class="page-wrapper">
    <div class="content">
        <div class="d-md-flex pagetop_headercmntb d-block align-items-center justify-content-between page-breadcrumb ">
            <div class="pageheaderleft">
                <a href="plans.php" class="btn btn-ghost btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        data-lucide="arrow-left" class="lucide lucide-arrow-left">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>
                </a>
                <div class="my-auto ">
                    <h2 class="mb-1">Create New Plan</h2>
                    <p class="page-subtitle">Design a subscription plan for your salons</p>
                </div>
            </div>

            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

                <div class="">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Addcategory_modal"
                        class="btn btn-primary d-flex align-items-center cmnaddbtn">
                        <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Create New Plan
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

        <div class="createplanwrapper">
            <div class="row">
                <!-- Main Form -->
                <div class="col-lg-8">
                    <!-- Basic Information -->
                    <div class="card glass-card mb-4">
                        <div class="card-header">
                            <h6 class="card-title">
                                <iconify-icon icon="clarity:dollar-line"></iconify-icon>
                                Basic Information
                            </h6>
                        </div>
                        <div class="card-body">
                            <form id="createPlanForm">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Plan Name</label>
                                        <input type="text" class="form-control" id="planName"
                                            placeholder="e.g., Professional Plan">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Price</label>
                                        <input type="number" class="form-control" id="planPrice" placeholder="99.99"
                                            step="0.01">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" id="planDescription" rows="3"
                                        placeholder="Describe what this plan offers..."></textarea>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Configuration -->
                    <div class="card glass-card mb-4">
                        <div class="card-header">
                            <h6 class="card-title">
                                <iconify-icon icon="quill:clock"></iconify-icon>
                                Configuration
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Billing Duration</label>

                                    <div class="custom-default-select">
                                        <div class="select-trigger form-control">
                                            <span class="selected-text">Monthly</span>
                                            <span class="select-arrow">
                                                <iconify-icon icon="iconamoon:arrow-down-2-light"></iconify-icon>
                                            </span>
                                        </div>
                                        <div class="options">
                                            <span data-value="monthly">Monthly</span>
                                            <span data-value="quarterly">Quarterly</span>
                                            <span data-value="yearly">Yearly</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Max Salons</label>
                                    <input type="number" class="form-control" id="maxSalons" placeholder="5">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Max Artists per Salon</label>
                                    <input type="number" class="form-control" id="maxArtists" placeholder="10">
                                </div>
                            </div>

                            <div class="setting-item">
                                <div class="setting-info">
                                    <label class="setting-label">Mark as Popular</label>
                                    <p class="setting-description">Highlight this plan with a popular badge</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="isPopular">
                                </div>
                            </div>

                            <div class="setting-item">
                                <div class="setting-info">
                                    <label class="setting-label">Active Plan</label>
                                    <p class="setting-description">Available for new subscriptions</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="isActive" checked="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Features -->
                    <div class="card glass-card">
                        <div class="card-header">
                            <h6 class="card-title">
                               <iconify-icon icon="iconoir:star"></iconify-icon>
                                Plan Features
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="row" id="featuresGrid">
                                <div class="col-md-6 mb-3">
                                    <div class="feature-checkbox">
                                        <input type="checkbox" id="feature1" class="feature-input">
                                        <label for="feature1" class="feature-label">Online Booking System</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="feature-checkbox">
                                        <input type="checkbox" id="feature2" class="feature-input">
                                        <label for="feature2" class="feature-label">Gallery Management</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="feature-checkbox">
                                        <input type="checkbox" id="feature3" class="feature-input">
                                        <label for="feature3" class="feature-label">Artist Management</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="feature-checkbox">
                                        <input type="checkbox" id="feature4" class="feature-input">
                                        <label for="feature4" class="feature-label">Customer Reviews</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="feature-checkbox">
                                        <input type="checkbox" id="feature5" class="feature-input">
                                        <label for="feature5" class="feature-label">Analytics Dashboard</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="feature-checkbox">
                                        <input type="checkbox" id="feature6" class="feature-input">
                                        <label for="feature6" class="feature-label">Payment Integration</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="feature-checkbox">
                                        <input type="checkbox" id="feature7" class="feature-input">
                                        <label for="feature7" class="feature-label">Social Media Integration</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="feature-checkbox">
                                        <input type="checkbox" id="feature8" class="feature-input">
                                        <label for="feature8" class="feature-label">Custom Branding</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="feature-checkbox">
                                        <input type="checkbox" id="feature9" class="feature-input">
                                        <label for="feature9" class="feature-label">24/7 Support</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="feature-checkbox">
                                        <input type="checkbox" id="feature10" class="feature-input">
                                        <label for="feature10" class="feature-label">Mobile App Access</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Preview -->
                <div class="col-lg-4">
                    <div class="card glass-card mb-4">
                        <div class="card-header">
                            <h6 class="card-title">Preview</h6>
                        </div>
                        <div class="card-body">
                            <div class="plan-preview" id="planPreview">
                                <div class="preview-header">
                                    <span class="preview-badge" id="previewBadge" style="display: none;">Popular</span>
                                    <h6 class="preview-name" id="previewName">Plan Name</h6>
                                    <div class="preview-price">
                                        <span class="preview-price-value" id="previewPrice">$0</span>
                                        <span class="preview-period" id="previewPeriod">/monthly</span>
                                    </div>
                                    <p class="preview-description" id="previewDescription">Plan description will appear
                                        here...</p>
                                </div>
                                <div class="preview-features" id="previewFeatures">
                                    <!-- Features will be populated by JavaScript -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card glass-card">
                        <div class="card-body">
                            <div class="preview-details">
                                <div class="detail-item">
                                    <span class="detail-label">Max Salons:</span>
                                    <span class="detail-value" id="previewMaxSalons">—</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Max Artists:</span>
                                    <span class="detail-value" id="previewMaxArtists">—</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Status:</span>
                                    <span class="badge" id="previewStatus">Active</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include("footer.php") ?>