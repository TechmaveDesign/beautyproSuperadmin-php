<?php include("header.php") ?>

<div class="page-wrapper">
    <div class="content">
        <div class="d-md-flex pagetop_headercmntb d-block align-items-center justify-content-between page-breadcrumb ">
            <div class="pageheaderleft">
                <a href="salons.php" class="btn btn-ghost btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        data-lucide="arrow-left" class="lucide lucide-arrow-left">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>
                </a>
                <div class="my-auto ">
                    <h2 class="mb-1">Salon Details</h2>
                    <p class="page-subtitle">Complete overview of salon information and performance</p>
                </div>
            </div>

            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="">
                    <button type="button" class="btn btn-outline-danger d-flex align-items-center me-2" id="suspendAccountBtn">
                        <iconify-icon icon="material-symbols:block"></iconify-icon>Suspend Account
                    </button>
                </div>
                <div class="">
                    <button type="button" class="btn btn-primary d-flex align-items-center cmnaddbtn" id="sendReminderBtn">
                        <iconify-icon icon="material-symbols:mail-outline"></iconify-icon>Send Reminder
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

        <!-- Salon Basic Info -->
        <div class="row mb-4">
            <div class="col-lg-8">
                <div class="card glass-card">
                    <div class="card-body">
                        <div class="salon-profile">
                            <div class="salon-avatar">
                                <img src="assets/img/users/userdummy.png" alt="Glamour Studio" class="salon-image">
                                <div class="salon-status active">
                                    <iconify-icon icon="material-symbols:check-circle"></iconify-icon>
                                </div>
                            </div>
                            <div class="salon-info">
                                <h3 class="salon-name">Glamour Studio</h3>
                                <p class="salon-owner">Owner: Sarah Johnson</p>
                                <div class="salon-meta">
                                    <div class="meta-item">
                                        <iconify-icon icon="material-symbols:mail-outline"></iconify-icon>
                                        <span>glamour@example.com</span>
                                    </div>
                                    <div class="meta-item">
                                        <iconify-icon icon="material-symbols:call-outline"></iconify-icon>
                                        <span>+1 212 555 7890</span>
                                    </div>
                                    <div class="meta-item">
                                        <iconify-icon icon="material-symbols:location-on-outline"></iconify-icon>
                                        <span>New York, NY (USA)</span>
                                    </div>
                                    <div class="meta-item">
                                        <iconify-icon icon="material-symbols:calendar-today-outline"></iconify-icon>
                                        <span>Joined: Dec 15, 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card glass-card">
                    <div class="card-header">
                        <h6 class="card-title">
                            <iconify-icon icon="material-symbols:credit-card-outline"></iconify-icon>
                            Current Plan
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="current-plan">
                            <div class="plan-badge">Premium Plan</div>
                            <div class="plan-price">$199.99<span>/monthly</span></div>
                            <div class="plan-expiry">
                                <iconify-icon icon="material-symbols:schedule-outline"></iconify-icon>
                                <span>Expires: Jan 15, 2025</span>
                            </div>
                            <div class="plan-status active">
                                <iconify-icon icon="material-symbols:check-circle"></iconify-icon>
                                <span>Active</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="row mb-4">
            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <iconify-icon icon="material-symbols:group-outline"></iconify-icon>
                    </div>
                    <div class="stat-info">
                        <div class="stat-value">15</div>
                        <div class="stat-label">Total Artists</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon success">
                        <iconify-icon icon="material-symbols:photo-library-outline"></iconify-icon>
                    </div>
                    <div class="stat-info">
                        <div class="stat-value">48</div>
                        <div class="stat-label">Gallery Images</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon warning">
                        <iconify-icon icon="material-symbols:design-services-outline"></iconify-icon>
                    </div>
                    <div class="stat-info">
                        <div class="stat-value">23</div>
                        <div class="stat-label">Services</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon primary">
                        <iconify-icon icon="material-symbols:trending-up"></iconify-icon>
                    </div>
                    <div class="stat-info">
                        <div class="stat-value">$12,500</div>
                        <div class="stat-label">Monthly Revenue</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Tabs -->
        <div class="row">
            <div class="col-12">
                <div class="card glass-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs salon-tabs" id="salonTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="billing-tab" data-bs-toggle="tab" data-bs-target="#billing" type="button" role="tab">
                                    <iconify-icon icon="material-symbols:receipt-long-outline"></iconify-icon>
                                    Billing History
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="artists-tab" data-bs-toggle="tab" data-bs-target="#artists" type="button" role="tab">
                                    <iconify-icon icon="material-symbols:group-outline"></iconify-icon>
                                    Artists
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery" type="button" role="tab">
                                    <iconify-icon icon="material-symbols:photo-library-outline"></iconify-icon>
                                    Gallery
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="services-tab" data-bs-toggle="tab" data-bs-target="#services" type="button" role="tab">
                                    <iconify-icon icon="material-symbols:design-services-outline"></iconify-icon>
                                    Services
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="salonTabsContent">
                            <!-- Billing History Tab -->
                            <div class="tab-pane fade show active" id="billing" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Invoice ID</th>
                                                <th>Plan</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#INV-001</td>
                                                <td>Premium Plan</td>
                                                <td>$199.99</td>
                                                <td>Dec 15, 2024</td>
                                                <td><span class="badge badge-soft-success">Paid</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <iconify-icon icon="material-symbols:download"></iconify-icon>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#INV-002</td>
                                                <td>Premium Plan</td>
                                                <td>$199.99</td>
                                                <td>Nov 15, 2024</td>
                                                <td><span class="badge badge-soft-success">Paid</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <iconify-icon icon="material-symbols:download"></iconify-icon>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#INV-003</td>
                                                <td>Professional Plan</td>
                                                <td>$99.99</td>
                                                <td>Oct 15, 2024</td>
                                                <td><span class="badge badge-soft-success">Paid</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <iconify-icon icon="material-symbols:download"></iconify-icon>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Artists Tab -->
                            <div class="tab-pane fade" id="artists" role="tabpanel">
                                <div class="artists-grid">
                                    <div class="artist-card">
                                        <div class="artist-avatar">
                                            <img src="assets/img/users/userdummy.png" alt="Emma Wilson">
                                        </div>
                                        <div class="artist-info">
                                            <h6 class="artist-name">Emma Wilson</h6>
                                            <p class="artist-specialty">Hair Stylist</p>
                                            <div class="artist-meta">
                                                <span class="artist-rating">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                    4.8
                                                </span>
                                                <span class="artist-bookings">142 bookings</span>
                                            </div>
                                        </div>
                                        <div class="artist-status active">Active</div>
                                    </div>

                                    <div class="artist-card">
                                        <div class="artist-avatar">
                                            <img src="assets/img/users/userdummy.png" alt="Michael Chen">
                                        </div>
                                        <div class="artist-info">
                                            <h6 class="artist-name">Michael Chen</h6>
                                            <p class="artist-specialty">Makeup Artist</p>
                                            <div class="artist-meta">
                                                <span class="artist-rating">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                    4.9
                                                </span>
                                                <span class="artist-bookings">98 bookings</span>
                                            </div>
                                        </div>
                                        <div class="artist-status active">Active</div>
                                    </div>

                                    <div class="artist-card">
                                        <div class="artist-avatar">
                                            <img src="assets/img/users/userdummy.png" alt="Sofia Rodriguez">
                                        </div>
                                        <div class="artist-info">
                                            <h6 class="artist-name">Sofia Rodriguez</h6>
                                            <p class="artist-specialty">Nail Technician</p>
                                            <div class="artist-meta">
                                                <span class="artist-rating">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                    4.7
                                                </span>
                                                <span class="artist-bookings">76 bookings</span>
                                            </div>
                                        </div>
                                        <div class="artist-status inactive">Inactive</div>
                                    </div>

                                    <div class="artist-card">
                                        <div class="artist-avatar">
                                            <img src="assets/img/users/userdummy.png" alt="James Thompson">
                                        </div>
                                        <div class="artist-info">
                                            <h6 class="artist-name">James Thompson</h6>
                                            <p class="artist-specialty">Barber</p>
                                            <div class="artist-meta">
                                                <span class="artist-rating">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                    4.6
                                                </span>
                                                <span class="artist-bookings">89 bookings</span>
                                            </div>
                                        </div>
                                        <div class="artist-status active">Active</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Tab -->
                            <div class="tab-pane fade" id="gallery" role="tabpanel">
                                <div class="gallery-grid">
                                    <div class="gallery-item">
                                        <img src="https://images.pexels.com/photos/3993449/pexels-photo-3993449.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Gallery Image" data-lightbox="salon-gallery">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="https://images.pexels.com/photos/3764011/pexels-photo-3764011.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Gallery Image" data-lightbox="salon-gallery">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="https://images.pexels.com/photos/3993456/pexels-photo-3993456.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Gallery Image" data-lightbox="salon-gallery">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="https://images.pexels.com/photos/3764013/pexels-photo-3764013.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Gallery Image" data-lightbox="salon-gallery">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="https://images.pexels.com/photos/3993454/pexels-photo-3993454.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Gallery Image" data-lightbox="salon-gallery">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="https://images.pexels.com/photos/3764010/pexels-photo-3764010.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Gallery Image" data-lightbox="salon-gallery">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="https://images.pexels.com/photos/3993458/pexels-photo-3993458.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Gallery Image" data-lightbox="salon-gallery">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="https://images.pexels.com/photos/3764012/pexels-photo-3764012.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Gallery Image" data-lightbox="salon-gallery">
                                    </div>
                                </div>
                            </div>

                            <!-- Services Tab -->
                            <div class="tab-pane fade" id="services" role="tabpanel">
                                <div class="services-grid">
                                    <div class="service-card">
                                        <div class="service-info">
                                            <h6 class="service-name">Hair Cut & Styling</h6>
                                            <p class="service-description">Professional hair cutting and styling services</p>
                                            <div class="service-price">$45.00</div>
                                        </div>
                                        <div class="service-status active">Active</div>
                                    </div>

                                    <div class="service-card">
                                        <div class="service-info">
                                            <h6 class="service-name">Hair Coloring</h6>
                                            <p class="service-description">Full hair coloring and highlighting services</p>
                                            <div class="service-price">$85.00</div>
                                        </div>
                                        <div class="service-status active">Active</div>
                                    </div>

                                    <div class="service-card">
                                        <div class="service-info">
                                            <h6 class="service-name">Bridal Makeup</h6>
                                            <p class="service-description">Complete bridal makeup package</p>
                                            <div class="service-price">$150.00</div>
                                        </div>
                                        <div class="service-status active">Active</div>
                                    </div>

                                    <div class="service-card">
                                        <div class="service-info">
                                            <h6 class="service-name">Nail Art</h6>
                                            <p class="service-description">Creative nail art and manicure services</p>
                                            <div class="service-price">$35.00</div>
                                        </div>
                                        <div class="service-status inactive">Inactive</div>
                                    </div>

                                    <div class="service-card">
                                        <div class="service-info">
                                            <h6 class="service-name">Facial Treatment</h6>
                                            <p class="service-description">Deep cleansing and rejuvenating facial</p>
                                            <div class="service-price">$65.00</div>
                                        </div>
                                        <div class="service-status active">Active</div>
                                    </div>

                                    <div class="service-card">
                                        <div class="service-info">
                                            <h6 class="service-name">Hair Spa</h6>
                                            <p class="service-description">Relaxing hair spa and treatment</p>
                                            <div class="service-price">$75.00</div>
                                        </div>
                                        <div class="service-status active">Active</div>
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

<!-- Suspend Account Confirmation Modal -->
<div class="modal fade" id="suspendConfirmModal" tabindex="-1" aria-labelledby="suspendConfirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <div class="modal-icon-wrapper">
                    <div class="modal-icon warning">
                        <iconify-icon icon="material-symbols:warning-outline"></iconify-icon>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <h5 class="modal-title mb-2">Suspend Account</h5>
                <p class="modal-description">Are you sure you want to suspend <strong>Glamour Studio</strong>? This action will:</p>
                <ul class="suspension-effects">
                    <li>Disable salon's access to the platform</li>
                    <li>Hide salon from customer searches</li>
                    <li>Pause all active bookings</li>
                    <li>Stop billing for current subscription</li>
                </ul>
                <p class="modal-note">This action can be reversed at any time.</p>
            </div>
            <div class="modal-footer border-0 justify-content-center">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmSuspendBtn">
                    <iconify-icon icon="material-symbols:block"></iconify-icon>
                    Suspend Account
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Send Reminder Modal -->
<div class="modal fade" id="sendReminderModal" tabindex="-1" aria-labelledby="sendReminderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send Reminder</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="reminder-options">
                    <div class="reminder-option">
                        <input type="radio" id="paymentReminder" name="reminderType" value="payment" checked>
                        <label for="paymentReminder" class="reminder-label">
                            <div class="reminder-icon">
                                <iconify-icon icon="material-symbols:payment"></iconify-icon>
                            </div>
                            <div class="reminder-content">
                                <h6>Payment Reminder</h6>
                                <p>Remind about upcoming payment due date</p>
                            </div>
                        </label>
                    </div>
                    <div class="reminder-option">
                        <input type="radio" id="renewalReminder" name="reminderType" value="renewal">
                        <label for="renewalReminder" class="reminder-label">
                            <div class="reminder-icon">
                                <iconify-icon icon="material-symbols:refresh"></iconify-icon>
                            </div>
                            <div class="reminder-content">
                                <h6>Renewal Reminder</h6>
                                <p>Remind about subscription renewal</p>
                            </div>
                        </label>
                    </div>
                    <div class="reminder-option">
                        <input type="radio" id="updateReminder" name="reminderType" value="update">
                        <label for="updateReminder" class="reminder-label">
                            <div class="reminder-icon">
                                <iconify-icon icon="material-symbols:update"></iconify-icon>
                            </div>
                            <div class="reminder-content">
                                <h6>Profile Update</h6>
                                <p>Remind to update salon information</p>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="mt-3">
                    <label class="form-label">Custom Message (Optional)</label>
                    <textarea class="form-control" rows="3" placeholder="Add a personal message..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="confirmSendReminderBtn">
                    <iconify-icon icon="material-symbols:send"></iconify-icon>
                    Send Reminder
                </button>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Suspend Account Functionality
    const suspendAccountBtn = document.getElementById('suspendAccountBtn');
    const confirmSuspendBtn = document.getElementById('confirmSuspendBtn');
    
    suspendAccountBtn.addEventListener('click', function() {
        const modal = new bootstrap.Modal(document.getElementById('suspendConfirmModal'));
        modal.show();
    });
    
    confirmSuspendBtn.addEventListener('click', function() {
        // Show loading state
        confirmSuspendBtn.innerHTML = '<iconify-icon icon="eos-icons:loading"></iconify-icon>Suspending...';
        confirmSuspendBtn.disabled = true;
        
        // Simulate suspension process
        setTimeout(() => {
            // Close modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('suspendConfirmModal'));
            modal.hide();
            
            // Show success message
            Swal.fire({
                icon: 'success',
                title: 'Account Suspended',
                text: 'Glamour Studio account has been suspended successfully.',
                confirmButtonText: 'OK',
                customClass: {
                    confirmButton: 'btn btn-primary'
                }
            });
            
            // Reset button
            confirmSuspendBtn.innerHTML = '<iconify-icon icon="material-symbols:block"></iconify-icon>Suspend Account';
            confirmSuspendBtn.disabled = false;
            
            // Update UI to reflect suspended state
            updateSalonStatus('suspended');
        }, 2000);
    });
    
    // Send Reminder Functionality
    const sendReminderBtn = document.getElementById('sendReminderBtn');
    const confirmSendReminderBtn = document.getElementById('confirmSendReminderBtn');
    
    sendReminderBtn.addEventListener('click', function() {
        const modal = new bootstrap.Modal(document.getElementById('sendReminderModal'));
        modal.show();
    });
    
    confirmSendReminderBtn.addEventListener('click', function() {
        const selectedReminder = document.querySelector('input[name="reminderType"]:checked');
        const customMessage = document.querySelector('#sendReminderModal textarea').value;
        
        if (!selectedReminder) {
            Swal.fire({
                icon: 'warning',
                title: 'Please select a reminder type',
                confirmButtonText: 'OK'
            });
            return;
        }
        
        // Show loading state
        confirmSendReminderBtn.innerHTML = '<iconify-icon icon="eos-icons:loading"></iconify-icon>Sending...';
        confirmSendReminderBtn.disabled = true;
        
        // Simulate sending process
        setTimeout(() => {
            // Close modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('sendReminderModal'));
            modal.hide();
            
            // Show success message
            Swal.fire({
                icon: 'success',
                title: 'Reminder Sent',
                text: `${selectedReminder.value.charAt(0).toUpperCase() + selectedReminder.value.slice(1)} reminder has been sent to Glamour Studio.`,
                confirmButtonText: 'OK',
                customClass: {
                    confirmButton: 'btn btn-primary'
                }
            });
            
            // Reset button and form
            confirmSendReminderBtn.innerHTML = '<iconify-icon icon="material-symbols:send"></iconify-icon>Send Reminder';
            confirmSendReminderBtn.disabled = false;
            document.querySelector('#sendReminderModal textarea').value = '';
            document.querySelector('input[name="reminderType"]:checked').checked = true;
        }, 1500);
    });
    
    // Function to update salon status in UI
    function updateSalonStatus(status) {
        const statusElements = document.querySelectorAll('.salon-status, .plan-status');
        statusElements.forEach(element => {
            if (status === 'suspended') {
                element.className = 'salon-status suspended';
                element.innerHTML = '<iconify-icon icon="material-symbols:block"></iconify-icon>';
                if (element.nextElementSibling) {
                    element.nextElementSibling.textContent = 'Suspended';
                }
            }
        });
        
        // Update suspend button
        if (status === 'suspended') {
            suspendAccountBtn.innerHTML = '<iconify-icon icon="material-symbols:play-arrow"></iconify-icon>Reactivate Account';
            suspendAccountBtn.classList.remove('btn-outline-danger');
            suspendAccountBtn.classList.add('btn-outline-success');
        }
    }
    
    // Gallery lightbox initialization
    if (typeof lightbox !== 'undefined') {
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'albumLabel': "Image %1 of %2"
        });
    }
});
</script>

<style>
/* Salon Profile Styles */
.salon-profile {
    display: flex;
    align-items: flex-start;
    gap: 20px;
}

.salon-avatar {
    position: relative;
    flex-shrink: 0;
}

.salon-image {
    width: 80px;
    height: 80px;
    border-radius: 12px;
    object-fit: cover;
    border: 2px solid #f0f0f0;
}

.salon-status {
    position: absolute;
    bottom: -5px;
    right: -5px;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid #fff;
    font-size: 12px;
}

.salon-status.active {
    background-color: #28a745;
    color: white;
}

.salon-status.suspended {
    background-color: #dc3545;
    color: white;
}

.salon-info {
    flex: 1;
}

.salon-name {
    font-size: 24px;
    font-weight: 600;
    color: #333;
    margin-bottom: 4px;
}

.salon-owner {
    font-size: 14px;
    color: #666;
    margin-bottom: 16px;
}

.salon-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    color: #666;
}

.meta-item iconify-icon {
    font-size: 16px;
    color: #999;
}

/* Current Plan Styles */
.current-plan {
    text-align: center;
}

.plan-badge {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    display: inline-block;
    margin-bottom: 12px;
}

.plan-price {
    font-size: 28px;
    font-weight: 700;
    color: #333;
    margin-bottom: 12px;
}

.plan-price span {
    font-size: 14px;
    color: #666;
    font-weight: 400;
}

.plan-expiry {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    font-size: 13px;
    color: #666;
    margin-bottom: 12px;
}

.plan-status {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    font-size: 13px;
    font-weight: 500;
}

.plan-status.active {
    color: #28a745;
}

/* Stat Cards */
.stat-card {
    background: #fff;
    border: 1px solid #f0f0f0;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 16px;
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.stat-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f8f9fa;
    color: #666;
    font-size: 20px;
}

.stat-icon.success {
    background-color: #d4edda;
    color: #28a745;
}

.stat-icon.warning {
    background-color: #fff3cd;
    color: #ffc107;
}

.stat-icon.primary {
    background-color: #d1ecf1;
    color: #17a2b8;
}

.stat-value {
    font-size: 24px;
    font-weight: 700;
    color: #333;
    margin-bottom: 2px;
}

.stat-label {
    font-size: 12px;
    color: #666;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Tab Styles */
.salon-tabs {
    border-bottom: 1px solid #f0f0f0;
}

.salon-tabs .nav-link {
    border: none;
    color: #666;
    font-weight: 500;
    padding: 12px 20px;
    display: flex;
    align-items: center;
    gap: 8px;
    border-radius: 8px 8px 0 0;
    transition: all 0.3s ease;
}

.salon-tabs .nav-link:hover {
    background-color: #f8f9fa;
    color: #333;
}

.salon-tabs .nav-link.active {
    background-color: #fff;
    color: #333;
    border-bottom: 2px solid #667eea;
}

/* Artists Grid */
.artists-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
}

.artist-card {
    background: #fff;
    border: 1px solid #f0f0f0;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 16px;
    transition: all 0.3s ease;
}

.artist-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.artist-avatar img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}

.artist-name {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    margin-bottom: 2px;
}

.artist-specialty {
    font-size: 12px;
    color: #666;
    margin-bottom: 8px;
}

.artist-meta {
    display: flex;
    gap: 12px;
    font-size: 11px;
}

.artist-rating {
    display: flex;
    align-items: center;
    gap: 2px;
    color: #ffc107;
}

.artist-bookings {
    color: #666;
}

.artist-status {
    margin-left: auto;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 500;
}

.artist-status.active {
    background-color: #d4edda;
    color: #28a745;
}

.artist-status.inactive {
    background-color: #f8d7da;
    color: #dc3545;
}

/* Gallery Grid */
.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 16px;
}

.gallery-item {
    aspect-ratio: 1;
    border-radius: 12px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.gallery-item:hover {
    transform: scale(1.05);
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Services Grid */
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
}

.service-card {
    background: #fff;
    border: 1px solid #f0f0f0;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    transition: all 0.3s ease;
}

.service-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.service-name {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    margin-bottom: 4px;
}

.service-description {
    font-size: 13px;
    color: #666;
    margin-bottom: 8px;
    line-height: 1.4;
}

.service-price {
    font-size: 18px;
    font-weight: 700;
    color: #667eea;
}

.service-status {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 500;
    flex-shrink: 0;
}

.service-status.active {
    background-color: #d4edda;
    color: #28a745;
}

.service-status.inactive {
    background-color: #f8d7da;
    color: #dc3545;
}

/* Modal Styles */
.modal-icon-wrapper {
    display: flex;
    justify-content: center;
    width: 100%;
}

.modal-icon {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    margin-bottom: 16px;
}

.modal-icon.warning {
    background-color: #fff3cd;
    color: #ffc107;
}

.modal-description {
    color: #666;
    margin-bottom: 16px;
}

.suspension-effects {
    text-align: left;
    margin: 16px 0;
    padding-left: 20px;
}

.suspension-effects li {
    font-size: 13px;
    color: #666;
    margin-bottom: 4px;
}

.modal-note {
    font-size: 12px;
    color: #999;
    font-style: italic;
}

/* Reminder Options */
.reminder-options {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.reminder-option {
    position: relative;
}

.reminder-option input[type="radio"] {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}

.reminder-label {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px;
    border: 1px solid #f0f0f0;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.reminder-option input[type="radio"]:checked + .reminder-label {
    border-color: #667eea;
    background-color: #f8f9ff;
}

.reminder-icon {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    background-color: #f8f9fa;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    color: #666;
}

.reminder-content h6 {
    font-size: 14px;
    font-weight: 600;
    color: #333;
    margin-bottom: 2px;
}

.reminder-content p {
    font-size: 12px;
    color: #666;
    margin: 0;
}

/* Table Styles */
.table {
    font-size: 13px;
}

.table th {
    font-weight: 600;
    color: #333;
    border-bottom: 1px solid #f0f0f0;
    padding: 12px 16px;
}

.table td {
    padding: 12px 16px;
    border-bottom: 1px solid #f8f9fa;
    color: #666;
}

.badge-soft-success {
    background-color: #d4edda;
    color: #28a745;
    border: none;
}

/* Responsive Design */
@media (max-width: 768px) {
    .salon-profile {
        flex-direction: column;
        text-align: center;
    }
    
    .salon-meta {
        flex-direction: column;
        gap: 8px;
    }
    
    .artists-grid,
    .services-grid {
        grid-template-columns: 1fr;
    }
    
    .gallery-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .gallery-grid {
        grid-template-columns: 1fr;
    }
}
</style>