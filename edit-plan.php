<?php include("header.php") ?>

<div class="page-wrapper">
    <div class="content">
        <div class="d-md-flex pagetop_headercmntb d-block align-items-center justify-content-between page-breadcrumb ">
            <div class="pageheaderleft">
                <a href="subscriptions.php" class="btn btn-ghost btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        data-lucide="arrow-left" class="lucide lucide-arrow-left">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>
                </a>
                <div class="my-auto ">
                    <h2 class="mb-1">Edit Plan</h2>
                    <p class="page-subtitle">Modify subscription plan details</p>
                </div>
            </div>

            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="">
                    <button type="button" id="savePlanBtn" class="btn btn-primary d-flex align-items-center cmnaddbtn">
                        <iconify-icon icon="fluent:save-20-regular"></iconify-icon>Save Changes
                    </button>
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
                            <form id="editPlanForm">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Plan Name</label>
                                        <input type="text" class="form-control" id="planName"
                                            placeholder="e.g., Professional Plan" value="Professional Plan">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Price</label>
                                        <input type="number" class="form-control" id="planPrice" placeholder="99.99"
                                            step="0.01" value="99.99">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" id="planDescription" rows="3"
                                        placeholder="Describe what this plan offers...">Ideal for growing salons with advanced features and premium support for enhanced business growth.</textarea>
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
                                        <div class="select-trigger form-control" data-value="monthly">
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
                                    <input type="number" class="form-control" id="maxSalons" placeholder="5" value="3">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Max Artists per Salon</label>
                                    <input type="number" class="form-control" id="maxArtists" placeholder="10" value="15">
                                </div>
                            </div>

                            <div class="setting-item">
                                <div class="setting-info">
                                    <label class="setting-label">Mark as Popular</label>
                                    <p class="setting-description">Highlight this plan with a popular badge</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="isPopular" checked>
                                </div>
                            </div>

                            <div class="setting-item">
                                <div class="setting-info">
                                    <label class="setting-label">Active Plan</label>
                                    <p class="setting-description">Available for new subscriptions</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="isActive" checked>
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
                                        <input type="checkbox" id="feature1" class="feature-input" checked>
                                        <label for="feature1" class="feature-label">Online Booking System</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="feature-checkbox">
                                        <input type="checkbox" id="feature2" class="feature-input" checked>
                                        <label for="feature2" class="feature-label">Gallery Management</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="feature-checkbox">
                                        <input type="checkbox" id="feature3" class="feature-input" checked>
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
                                        <input type="checkbox" id="feature5" class="feature-input" checked>
                                        <label for="feature5" class="feature-label">Analytics Dashboard</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="feature-checkbox">
                                        <input type="checkbox" id="feature6" class="feature-input" checked>
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

                    <!-- Plan Statistics (Additional section for edit page) -->
                    <div class="card glass-card">
                        <div class="card-header">
                            <h6 class="card-title">
                                <iconify-icon icon="solar:graph-new-up-linear"></iconify-icon>
                                Plan Statistics
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="stat-item">
                                        <div class="stat-value">67</div>
                                        <div class="stat-label">Current Subscribers</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="stat-item">
                                        <div class="stat-value">$6,699</div>
                                        <div class="stat-label">Monthly Revenue</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="stat-item">
                                        <div class="stat-value">92.3%</div>
                                        <div class="stat-label">Retention Rate</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="stat-item">
                                        <div class="stat-value">24.5%</div>
                                        <div class="stat-label">Conversion Rate</div>
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
                                    <span class="preview-badge" id="previewBadge" style="display: inline-block;">Popular</span>
                                    <h6 class="preview-name" id="previewName">Professional Plan</h6>
                                    <div class="preview-price">
                                        <span class="preview-price-value" id="previewPrice">$99.99</span>
                                        <span class="preview-period" id="previewPeriod">/monthly</span>
                                    </div>
                                    <p class="preview-description" id="previewDescription">Ideal for growing salons with advanced features and premium support for enhanced business growth.</p>
                                </div>
                                <div class="preview-features" id="previewFeatures">
                                    <!-- Features will be populated by JavaScript -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card glass-card mb-4">
                        <div class="card-body">
                            <div class="preview-details">
                                <div class="detail-item">
                                    <span class="detail-label">Max Salons:</span>
                                    <span class="detail-value" id="previewMaxSalons">3</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Max Artists:</span>
                                    <span class="detail-value" id="previewMaxArtists">15</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Status:</span>
                                    <span class="badge badge-success" id="previewStatus">Active</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Plan History (Additional section for edit page) -->
                    <div class="card glass-card">
                        <div class="card-header">
                            <h6 class="card-title">
                                <iconify-icon icon="quill:clock"></iconify-icon>
                                Recent Changes
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="activity-list">
                                <div class="activity-item">
                                    <div class="activity-dot success"></div>
                                    <div class="activity-content">
                                        <div class="activity-title">Price updated</div>
                                        <div class="activity-subtitle">Changed from $89.99 to $99.99 • 2 days ago</div>
                                    </div>
                                </div>
                                <div class="activity-item">
                                    <div class="activity-dot primary"></div>
                                    <div class="activity-content">
                                        <div class="activity-title">Features modified</div>
                                        <div class="activity-subtitle">Added Payment Integration • 1 week ago</div>
                                    </div>
                                </div>
                                <div class="activity-item">
                                    <div class="activity-dot warning"></div>
                                    <div class="activity-content">
                                        <div class="activity-title">Plan created</div>
                                        <div class="activity-subtitle">Initial setup completed • 2 weeks ago</div>
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

<?php include("footer.php") ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all form elements
    const planNameInput = document.getElementById('planName');
    const planPriceInput = document.getElementById('planPrice');
    const planDescriptionInput = document.getElementById('planDescription');
    const maxSalonsInput = document.getElementById('maxSalons');
    const maxArtistsInput = document.getElementById('maxArtists');
    const isPopularCheckbox = document.getElementById('isPopular');
    const isActiveCheckbox = document.getElementById('isActive');
    const billingDurationSelect = document.querySelector('.custom-default-select');
    const featureCheckboxes = document.querySelectorAll('.feature-input');
    const savePlanBtn = document.getElementById('savePlanBtn');
    
    // Get all preview elements
    const previewName = document.getElementById('previewName');
    const previewPrice = document.getElementById('previewPrice');
    const previewPeriod = document.getElementById('previewPeriod');
    const previewDescription = document.getElementById('previewDescription');
    const previewBadge = document.getElementById('previewBadge');
    const previewFeatures = document.getElementById('previewFeatures');
    const previewMaxSalons = document.getElementById('previewMaxSalons');
    const previewMaxArtists = document.getElementById('previewMaxArtists');
    const previewStatus = document.getElementById('previewStatus');
    
    // Update plan name
    function updatePlanName() {
        const name = planNameInput.value.trim();
        previewName.textContent = name || 'Plan Name';
    }
    
    // Update plan price
    function updatePlanPrice() {
        const price = planPriceInput.value.trim();
        if (price && !isNaN(price)) {
            previewPrice.textContent = '$' + parseFloat(price).toFixed(2);
        } else {
            previewPrice.textContent = '$0';
        }
    }
    
    // Update plan description
    function updatePlanDescription() {
        const description = planDescriptionInput.value.trim();
        previewDescription.textContent = description || 'Plan description will appear here...';
    }
    
    // Update billing period
    function updateBillingPeriod() {
        const selectTrigger = billingDurationSelect.querySelector('.select-trigger');
        const selectedValue = selectTrigger.getAttribute('data-value') || 'monthly';
        let periodText = '/monthly';
        
        switch(selectedValue) {
            case 'quarterly':
                periodText = '/quarterly';
                break;
            case 'yearly':
                periodText = '/yearly';
                break;
            default:
                periodText = '/monthly';
        }
        
        previewPeriod.textContent = periodText;
    }
    
    // Update max salons
    function updateMaxSalons() {
        const maxSalons = maxSalonsInput.value.trim();
        previewMaxSalons.textContent = maxSalons || '—';
    }
    
    // Update max artists
    function updateMaxArtists() {
        const maxArtists = maxArtistsInput.value.trim();
        previewMaxArtists.textContent = maxArtists || '—';
    }
    
    // Update popular badge
    function updatePopularBadge() {
        if (isPopularCheckbox.checked) {
            previewBadge.style.display = 'inline-block';
        } else {
            previewBadge.style.display = 'none';
        }
    }
    
    // Update status
    function updateStatus() {
        if (isActiveCheckbox.checked) {
            previewStatus.textContent = 'Active';
            previewStatus.className = 'badge badge-success';
        } else {
            previewStatus.textContent = 'Inactive';
            previewStatus.className = 'badge badge-secondary';
        }
    }
    
    // Update features
    function updateFeatures() {
        previewFeatures.innerHTML = '';
        
        featureCheckboxes.forEach(checkbox => {
            if (checkbox.checked) {
                const featureLabel = checkbox.nextElementSibling.textContent;
                const featureElement = document.createElement('div');
                featureElement.className = 'preview-feature';
                featureElement.innerHTML = `
                    <iconify-icon icon="prime:check-circle" class="feature-check"></iconify-icon>
                    <span>${featureLabel}</span>
                `;
                previewFeatures.appendChild(featureElement);
            }
        });
        
        // If no features selected, show placeholder
        if (previewFeatures.children.length === 0) {
            previewFeatures.innerHTML = '<div class="preview-feature-placeholder">Select features to display here</div>';
        }
    }
    
    // Save plan function
    function savePlan() {
        // Show loading state
        savePlanBtn.innerHTML = '<iconify-icon icon="eos-icons:loading"></iconify-icon>Saving...';
        savePlanBtn.disabled = true;
        
        // Simulate save operation
        setTimeout(() => {
            // Show success message
            savePlanBtn.innerHTML = '<iconify-icon icon="prime:check-circle"></iconify-icon>Saved!';
            savePlanBtn.classList.add('btn-success');
            savePlanBtn.classList.remove('btn-primary');
            
            // Reset button after 2 seconds
            setTimeout(() => {
                savePlanBtn.innerHTML = '<iconify-icon icon="fluent:save-20-regular"></iconify-icon>Save Changes';
                savePlanBtn.classList.remove('btn-success');
                savePlanBtn.classList.add('btn-primary');
                savePlanBtn.disabled = false;
            }, 2000);
        }, 1500);
    }
    
    // Add event listeners
    planNameInput.addEventListener('input', updatePlanName);
    planPriceInput.addEventListener('input', updatePlanPrice);
    planDescriptionInput.addEventListener('input', updatePlanDescription);
    maxSalonsInput.addEventListener('input', updateMaxSalons);
    maxArtistsInput.addEventListener('input', updateMaxArtists);
    isPopularCheckbox.addEventListener('change', updatePopularBadge);
    isActiveCheckbox.addEventListener('change', updateStatus);
    savePlanBtn.addEventListener('click', savePlan);
    
    // Add event listener for custom select dropdown - listen for clicks on options
    if (billingDurationSelect) {
        const options = billingDurationSelect.querySelectorAll('.options span');
        options.forEach(option => {
            option.addEventListener('click', function() {
                // Small delay to ensure data-value is updated by the existing select functionality
                setTimeout(updateBillingPeriod, 50);
            });
        });
    }
    
    // Add event listeners for feature checkboxes
    featureCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateFeatures);
    });
    
    // Initialize preview with current values
    updatePlanName();
    updatePlanPrice();
    updatePlanDescription();
    updateBillingPeriod();
    updateMaxSalons();
    updateMaxArtists();
    updatePopularBadge();
    updateStatus();
    updateFeatures();
    
    // Additional event listener to catch any changes in the custom select
    // This is a backup to ensure billing period updates work
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'data-value') {
                updateBillingPeriod();
            }
        });
    });
    
    // Observe changes to the select trigger's data-value attribute
    const selectTrigger = billingDurationSelect?.querySelector('.select-trigger');
    if (selectTrigger) {
        observer.observe(selectTrigger, {
            attributes: true,
            attributeFilter: ['data-value']
        });
    }
});
</script>

<style>
/* Additional styles for preview features */
.preview-feature {
    display: flex;
    align-items: center;
    margin-bottom: 8px;
    font-size: 14px;
    color: #666;
}

.preview-feature .feature-check {
    color: #28a745;
    margin-right: 8px;
    flex-shrink: 0;
    font-size: 16px;
}

.preview-feature-placeholder {
    color: #999;
    font-style: italic;
    font-size: 14px;
    text-align: center;
    padding: 20px 0;
}

.badge-success {
    background-color: #28a745;
    color: white;
}

.badge-secondary {
    background-color: #6c757d;
    color: white;
}

.badge {
    display: inline-block;
    padding: 0.25em 0.4em;
    font-size: 0.75em;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
}

/* Enhanced preview styles */
.plan-preview {
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    padding: 20px;
    background: #fff;
    position: relative;
    overflow: hidden;
}

.preview-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.preview-header {
    text-align: center;
    margin-bottom: 20px;
}

.preview-name {
    font-size: 24px;
    font-weight: 700;
    color: #333;
    margin-bottom: 10px;
}

.preview-price {
    margin-bottom: 15px;
}

.preview-price-value {
    font-size: 36px;
    font-weight: 800;
    color: #667eea;
}

.preview-period {
    font-size: 16px;
    color: #666;
    font-weight: 500;
}

.preview-description {
    color: #666;
    font-size: 14px;
    line-height: 1.5;
    margin-bottom: 0;
}

.preview-features {
    border-top: 1px solid #f0f0f0;
    padding-top: 20px;
    margin-top: 20px;
}

.preview-details {
    padding: 15px 0;
}

.detail-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 0;
    border-bottom: 1px solid #f5f5f5;
}

.detail-item:last-child {
    border-bottom: none;
}

.detail-label {
    font-weight: 500;
    color: #666;
    font-size: 14px;
}

.detail-value {
    font-weight: 600;
    color: #333;
    font-size: 14px;
}

/* Statistics section styles */
.stat-item {
    text-align: center;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 8px;
    margin-bottom: 15px;
}

.stat-value {
    font-size: 24px;
    font-weight: 700;
    color: #333;
    margin-bottom: 5px;
}

.stat-label {
    font-size: 12px;
    color: #666;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Activity list styles */
.activity-list {
    max-height: 300px;
    overflow-y: auto;
}

.activity-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid #f0f0f0;
}

.activity-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.activity-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    margin-right: 12px;
    margin-top: 6px;
    flex-shrink: 0;
}

.activity-dot.success {
    background-color: #28a745;
}

.activity-dot.primary {
    background-color: #007bff;
}

.activity-dot.warning {
    background-color: #ffc107;
}

.activity-content {
    flex: 1;
}

.activity-title {
    font-weight: 600;
    color: #333;
    font-size: 14px;
    margin-bottom: 2px;
}

.activity-subtitle {
    font-size: 12px;
    color: #666;
}

/* Button loading state */
.btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}

.btn-success {
    background-color: #28a745;
    border-color: #28a745;
}
</style>