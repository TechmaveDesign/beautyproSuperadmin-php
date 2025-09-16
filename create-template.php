<?php include("header.php") ?>

<div class="page-wrapper">
    <div class="content">
        <div class="d-md-flex pagetop_headercmntb d-block align-items-center justify-content-between page-breadcrumb ">
            <div class="pageheaderleft">
                <a href="email-management.php" class="btn btn-ghost btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        data-lucide="arrow-left" class="lucide lucide-arrow-left">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>
                </a>
                <div class="my-auto ">
                    <h2 class="mb-1">Create Email Template</h2>
                    <p class="page-subtitle">Design email templates for customer communication</p>
                </div>
            </div>

            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="">
                    <button type="button" id="saveTemplateBtn" class="btn btn-primary d-flex align-items-center cmnaddbtn">
                        <iconify-icon icon="fluent:save-20-regular"></iconify-icon>Save Template
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

        <div class="email-template-wrapper">
            <div class="row">
                <!-- Main Form -->
                <div class="col-lg-8">
                    <!-- Basic Information -->
                    <div class="card email-template-glass-card mb-4">
                        <div class="card-header">
                            <h6 class="email-template-card-title">
                                <iconify-icon icon="material-symbols:info-outline"></iconify-icon>
                                Template Information
                            </h6>
                        </div>
                        <div class="card-body">
                            <form id="createTemplateForm">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="email-template-form-label">Template Name</label>
                                        <input type="text" class="email-template-form-control" id="templateName"
                                            placeholder="e.g., Welcome Email">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="email-template-form-label">Template Type</label>
                                        <div class="email-template-custom-select">
                                            <div class="email-template-select-trigger email-template-form-control">
                                                <span class="email-template-selected-text">Welcome</span>
                                                <span class="email-template-select-arrow">
                                                    <iconify-icon icon="iconamoon:arrow-down-2-light"></iconify-icon>
                                                </span>
                                            </div>
                                            <div class="email-template-options">
                                                <span data-value="welcome">Welcome</span>
                                                <span data-value="notification">Notification</span>
                                                <span data-value="promotion">Promotion</span>
                                                <span data-value="renewal">Renewal</span>
                                                <span data-value="newsletter">Newsletter</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="email-template-form-label">Subject Line</label>
                                        <input type="text" class="email-template-form-control" id="templateSubject"
                                            placeholder="e.g., Welcome to BeautyPro!">
                                    </div>
                                </div>

                                <div class="email-template-setting-item">
                                    <div class="email-template-setting-info">
                                        <label class="email-template-setting-label">Active Template</label>
                                        <p class="email-template-setting-description">Available for sending to customers</p>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="isTemplateActive" checked>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Email Content -->
                    <div class="card email-template-glass-card">
                        <div class="card-header">
                            <h6 class="email-template-card-title">
                                <iconify-icon icon="material-symbols:edit-outline"></iconify-icon>
                                Email Content
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="email-template-form-label">Email Body</label>
                                <div class="email-template-editor-toolbar">
                                    <button type="button" class="email-template-toolbar-btn" data-action="bold">
                                        <iconify-icon icon="material-symbols:format-bold"></iconify-icon>
                                    </button>
                                    <button type="button" class="email-template-toolbar-btn" data-action="italic">
                                        <iconify-icon icon="material-symbols:format-italic"></iconify-icon>
                                    </button>
                                    <button type="button" class="email-template-toolbar-btn" data-action="underline">
                                        <iconify-icon icon="material-symbols:format-underlined"></iconify-icon>
                                    </button>
                                    <div class="email-template-toolbar-divider"></div>
                                    <button type="button" class="email-template-toolbar-btn" data-action="insertOrderedList">
                                        <iconify-icon icon="material-symbols:format-list-numbered"></iconify-icon>
                                    </button>
                                    <button type="button" class="email-template-toolbar-btn" data-action="insertUnorderedList">
                                        <iconify-icon icon="material-symbols:format-list-bulleted"></iconify-icon>
                                    </button>
                                    <div class="email-template-toolbar-divider"></div>
                                    <button type="button" class="email-template-toolbar-btn" data-action="createLink">
                                        <iconify-icon icon="material-symbols:link"></iconify-icon>
                                    </button>
                                </div>
                                <div class="email-template-editor" id="emailEditor" contenteditable="true">
                                    <p>Dear {{salon_name}},</p>
                                    <p>Welcome to BeautyPro! We're excited to have you join our platform.</p>
                                    <p>Your account has been successfully created and you can now start managing your salon.</p>
                                    <p>Best regards,<br>The BeautyPro Team</p>
                                </div>
                            </div>

                            <div class="email-template-variables">
                                <label class="email-template-form-label">Available Variables</label>
                                <div class="email-template-variable-tags">
                                    <span class="email-template-variable-tag" data-variable="{{salon_name}}">{{salon_name}}</span>
                                    <span class="email-template-variable-tag" data-variable="{{owner_name}}">{{owner_name}}</span>
                                    <span class="email-template-variable-tag" data-variable="{{plan_name}}">{{plan_name}}</span>
                                    <span class="email-template-variable-tag" data-variable="{{expiry_date}}">{{expiry_date}}</span>
                                    <span class="email-template-variable-tag" data-variable="{{amount}}">{{amount}}</span>
                                    <span class="email-template-variable-tag" data-variable="{{due_date}}">{{due_date}}</span>
                                </div>
                                <p class="email-template-variable-help">Click on variables to insert them into your email content</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Preview -->
                <div class="col-lg-4">
                    <div class="card email-template-glass-card email-template-sticky">
                        <div class="card-header">
                            <h6 class="email-template-card-title">Email Preview</h6>
                        </div>
                        <div class="card-body">
                            <div class="email-template-preview" id="emailPreview">
                                <div class="email-template-preview-header">
                                    <div class="email-template-preview-from">
                                        <strong>From:</strong> BeautyPro &lt;noreply@beautypro.com&gt;
                                    </div>
                                    <div class="email-template-preview-to">
                                        <strong>To:</strong> salon@example.com
                                    </div>
                                    <div class="email-template-preview-subject">
                                        <strong>Subject:</strong> <span id="previewSubject">Email Subject</span>
                                    </div>
                                </div>
                                <div class="email-template-preview-divider"></div>
                                <div class="email-template-preview-body" id="previewBody">
                                    <p>Dear Glamour Studio,</p>
                                    <p>Welcome to BeautyPro! We're excited to have you join our platform.</p>
                                    <p>Your account has been successfully created and you can now start managing your salon.</p>
                                    <p>Best regards,<br>The BeautyPro Team</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="email-template-preview-info">
                                <div class="email-template-info-item">
                                    <span class="email-template-info-label">Type:</span>
                                    <span class="email-template-info-value" id="previewType">Welcome</span>
                                </div>
                                <div class="email-template-info-item">
                                    <span class="email-template-info-label">Status:</span>
                                    <span class="email-template-badge email-template-badge-success" id="previewStatus">Active</span>
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
    const templateNameInput = document.getElementById('templateName');
    const templateSubjectInput = document.getElementById('templateSubject');
    const templateTypeSelect = document.querySelector('.email-template-custom-select');
    const isTemplateActiveCheckbox = document.getElementById('isTemplateActive');
    const emailEditor = document.getElementById('emailEditor');
    const saveTemplateBtn = document.getElementById('saveTemplateBtn');
    
    // Get all preview elements
    const previewSubject = document.getElementById('previewSubject');
    const previewBody = document.getElementById('previewBody');
    const previewType = document.getElementById('previewType');
    const previewStatus = document.getElementById('previewStatus');
    
    // Update subject preview
    function updateSubjectPreview() {
        const subject = templateSubjectInput.value.trim();
        previewSubject.textContent = subject || 'Email Subject';
    }
    
    // Update body preview
    function updateBodyPreview() {
        const content = emailEditor.innerHTML;
        // Replace variables with sample data for preview
        let previewContent = content
            .replace(/\{\{salon_name\}\}/g, 'Glamour Studio')
            .replace(/\{\{owner_name\}\}/g, 'Sarah Johnson')
            .replace(/\{\{plan_name\}\}/g, 'Professional Plan')
            .replace(/\{\{expiry_date\}\}/g, 'January 15, 2025')
            .replace(/\{\{amount\}\}/g, '$99.99')
            .replace(/\{\{due_date\}\}/g, 'December 25, 2024');
        
        previewBody.innerHTML = previewContent;
    }
    
    // Update template type preview
    function updateTypePreview() {
        const selectTrigger = templateTypeSelect.querySelector('.email-template-select-trigger');
        const selectedValue = selectTrigger.getAttribute('data-value') || 'welcome';
        const selectedText = selectTrigger.querySelector('.email-template-selected-text').textContent;
        previewType.textContent = selectedText;
    }
    
    // Update status preview
    function updateStatusPreview() {
        if (isTemplateActiveCheckbox.checked) {
            previewStatus.textContent = 'Active';
            previewStatus.className = 'email-template-badge email-template-badge-success';
        } else {
            previewStatus.textContent = 'Draft';
            previewStatus.className = 'email-template-badge email-template-badge-secondary';
        }
    }
    
    // Save template function
    function saveTemplate() {
        // Show loading state
        saveTemplateBtn.innerHTML = '<iconify-icon icon="eos-icons:loading"></iconify-icon>Saving...';
        saveTemplateBtn.disabled = true;
        
        // Simulate save operation
        setTimeout(() => {
            // Show success message
            saveTemplateBtn.innerHTML = '<iconify-icon icon="prime:check-circle"></iconify-icon>Saved!';
            saveTemplateBtn.classList.add('btn-success');
            saveTemplateBtn.classList.remove('btn-primary');
            
            // Reset button after 2 seconds
            setTimeout(() => {
                saveTemplateBtn.innerHTML = '<iconify-icon icon="fluent:save-20-regular"></iconify-icon>Save Template';
                saveTemplateBtn.classList.remove('btn-success');
                saveTemplateBtn.classList.add('btn-primary');
                saveTemplateBtn.disabled = false;
            }, 2000);
        }, 1500);
    }
    
    // Add event listeners
    templateSubjectInput.addEventListener('input', updateSubjectPreview);
    emailEditor.addEventListener('input', updateBodyPreview);
    isTemplateActiveCheckbox.addEventListener('change', updateStatusPreview);
    saveTemplateBtn.addEventListener('click', saveTemplate);
    
    // Custom select functionality
    if (templateTypeSelect) {
        const selectTrigger = templateTypeSelect.querySelector('.email-template-select-trigger');
        const options = templateTypeSelect.querySelector('.email-template-options');
        const selectedText = selectTrigger.querySelector('.email-template-selected-text');
        
        // Toggle dropdown
        selectTrigger.addEventListener('click', function(e) {
            e.stopPropagation();
            
            // Close other dropdowns
            document.querySelectorAll('.email-template-options').forEach(opt => {
                if (opt !== options) opt.style.display = 'none';
            });
            
            // Toggle current
            const isOpen = options.style.display === 'flex';
            options.style.display = isOpen ? 'none' : 'flex';
        });
        
        // Select option
        options.querySelectorAll('span').forEach(option => {
            option.addEventListener('click', function(e) {
                e.stopPropagation();
                selectedText.textContent = option.textContent;
                selectTrigger.setAttribute('data-value', option.getAttribute('data-value'));
                options.style.display = 'none';
                updateTypePreview();
            });
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function() {
            options.style.display = 'none';
        });
    }
    
    // Editor toolbar functionality
    const toolbarButtons = document.querySelectorAll('.email-template-toolbar-btn');
    toolbarButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const action = this.getAttribute('data-action');
            
            if (action === 'createLink') {
                const url = prompt('Enter URL:');
                if (url) {
                    document.execCommand('createLink', false, url);
                }
            } else {
                document.execCommand(action, false, null);
            }
            
            emailEditor.focus();
            updateBodyPreview();
        });
    });
    
    // Variable insertion functionality
    const variableTags = document.querySelectorAll('.email-template-variable-tag');
    variableTags.forEach(tag => {
        tag.addEventListener('click', function() {
            const variable = this.getAttribute('data-variable');
            
            // Insert variable at cursor position
            const selection = window.getSelection();
            if (selection.rangeCount > 0) {
                const range = selection.getRangeAt(0);
                if (emailEditor.contains(range.commonAncestorContainer)) {
                    const textNode = document.createTextNode(variable);
                    range.insertNode(textNode);
                    range.setStartAfter(textNode);
                    range.setEndAfter(textNode);
                    selection.removeAllRanges();
                    selection.addRange(range);
                }
            } else {
                // If no selection, append to end
                emailEditor.innerHTML += variable;
            }
            
            emailEditor.focus();
            updateBodyPreview();
        });
    });
    
    // Initialize preview
    updateSubjectPreview();
    updateBodyPreview();
    updateTypePreview();
    updateStatusPreview();
});
</script>

<style>
/* Email Template Styles */
.email-template-wrapper {
    padding: 0;
}

.email-template-glass-card {
    background: rgba(255, 255, 255, 0.95);
    border: 1px solid #f0f2f5;
    border-radius: 12px;
    backdrop-filter: blur(10px);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
    transition: all 0.3s ease;
}

.email-template-glass-card:hover {
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
}

.email-template-sticky {
    position: sticky;
    top: 20px;
}

.email-template-card-title {
    font-size: 16px;
    font-weight: 700;
    color: #1f2937;
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 0;
}

.email-template-card-title iconify-icon {
    font-size: 18px;
    color: #6b7280;
}

.email-template-form-label {
    font-size: 14px;
    font-weight: 600;
    color: #374151;
    margin-bottom: 8px;
    display: block;
}

.email-template-form-control {
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    padding: 12px 16px;
    font-size: 14px;
    transition: all 0.3s ease;
    width: 100%;
}

.email-template-form-control:focus {
    border-color: #6366f1;
    box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
    outline: none;
}

/* Custom Select Styles */
.email-template-custom-select {
    position: relative;
}

.email-template-select-trigger {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
}

.email-template-select-arrow {
    transition: transform 0.3s ease;
    font-size: 16px;
    color: #6b7280;
}

.email-template-options {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    display: none;
    flex-direction: column;
    margin-top: 4px;
}

.email-template-options span {
    padding: 12px 16px;
    cursor: pointer;
    font-size: 14px;
    color: #374151;
    transition: background-color 0.2s ease;
}

.email-template-options span:hover {
    background-color: #f9fafb;
}

.email-template-options span:first-child {
    border-radius: 8px 8px 0 0;
}

.email-template-options span:last-child {
    border-radius: 0 0 8px 8px;
}

/* Setting Item */
.email-template-setting-item {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 20px 0;
    border-top: 1px solid #f3f4f6;
}

.email-template-setting-info {
    flex: 1;
}

.email-template-setting-label {
    font-size: 14px;
    font-weight: 600;
    color: #1f2937;
    margin-bottom: 4px;
    display: block;
}

.email-template-setting-description {
    font-size: 13px;
    color: #6b7280;
    margin: 0;
    line-height: 1.4;
}

/* Editor Styles */
.email-template-editor-toolbar {
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 8px 12px;
    background: #f9fafb;
    border: 1px solid #e5e7eb;
    border-bottom: none;
    border-radius: 8px 8px 0 0;
}

.email-template-toolbar-btn {
    background: none;
    border: none;
    padding: 6px 8px;
    border-radius: 4px;
    cursor: pointer;
    color: #6b7280;
    transition: all 0.2s ease;
    font-size: 16px;
}

.email-template-toolbar-btn:hover {
    background-color: #e5e7eb;
    color: #374151;
}

.email-template-toolbar-divider {
    width: 1px;
    height: 20px;
    background-color: #e5e7eb;
    margin: 0 4px;
}

.email-template-editor {
    min-height: 300px;
    border: 1px solid #e5e7eb;
    border-radius: 0 0 8px 8px;
    padding: 16px;
    font-size: 14px;
    line-height: 1.6;
    color: #374151;
    background: white;
}

.email-template-editor:focus {
    outline: none;
    border-color: #6366f1;
    box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
}

.email-template-editor p {
    margin-bottom: 12px;
}

.email-template-editor p:last-child {
    margin-bottom: 0;
}

/* Variables Section */
.email-template-variables {
    margin-top: 24px;
    padding-top: 24px;
    border-top: 1px solid #f3f4f6;
}

.email-template-variable-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 12px;
}

.email-template-variable-tag {
    background: #f3f4f6;
    color: #6366f1;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
    font-family: 'Courier New', monospace;
}

.email-template-variable-tag:hover {
    background: #6366f1;
    color: white;
    transform: translateY(-1px);
}

.email-template-variable-help {
    font-size: 12px;
    color: #9ca3af;
    margin: 0;
    font-style: italic;
}

/* Preview Styles */
.email-template-preview {
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    overflow: hidden;
}

.email-template-preview-header {
    background: #f9fafb;
    padding: 16px;
    border-bottom: 1px solid #e5e7eb;
}

.email-template-preview-from,
.email-template-preview-to,
.email-template-preview-subject {
    font-size: 12px;
    margin-bottom: 6px;
    color: #6b7280;
}

.email-template-preview-from:last-child,
.email-template-preview-to:last-child,
.email-template-preview-subject:last-child {
    margin-bottom: 0;
}

.email-template-preview-divider {
    height: 1px;
    background: #e5e7eb;
}

.email-template-preview-body {
    padding: 16px;
    font-size: 14px;
    line-height: 1.6;
    color: #374151;
    min-height: 200px;
}

.email-template-preview-body p {
    margin-bottom: 12px;
}

.email-template-preview-body p:last-child {
    margin-bottom: 0;
}

/* Preview Info */
.email-template-preview-info {
    padding: 12px 16px;
    background: #f9fafb;
    border-top: 1px solid #e5e7eb;
}

.email-template-info-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
}

.email-template-info-item:last-child {
    margin-bottom: 0;
}

.email-template-info-label {
    font-size: 12px;
    color: #6b7280;
    font-weight: 500;
}

.email-template-info-value {
    font-size: 12px;
    color: #374151;
    font-weight: 600;
}

/* Badge Styles */
.email-template-badge {
    display: inline-block;
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.email-template-badge-success {
    background-color: #ecfdf5;
    color: #10b981;
}

.email-template-badge-secondary {
    background-color: #f3f4f6;
    color: #6b7280;
}

/* Responsive Design */
@media (max-width: 768px) {
    .email-template-sticky {
        position: static;
    }
    
    .email-template-variable-tags {
        justify-content: center;
    }
    
    .email-template-editor-toolbar {
        flex-wrap: wrap;
        gap: 2px;
    }
    
    .email-template-toolbar-btn {
        padding: 4px 6px;
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    .email-template-editor {
        min-height: 250px;
        padding: 12px;
    }
    
    .email-template-preview-header,
    .email-template-preview-body {
        padding: 12px;
    }
}

/* Button States */
.btn-success {
    background-color: #10b981;
    border-color: #10b981;
    color: white;
}

.btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}
</style>