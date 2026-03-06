<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-6 col-xl-4 mb-4">
        <div class="card h-100" style="border-left: 5px solid #DB6234;">
            <div class="card-body d-flex flex-column align-items-start justify-content-center p-4">
                <div class="d-flex align-items-center justify-content-between w-100 mb-3">
                    <h5 class="text-muted fw-bold text-uppercase mb-0" style="font-size: 0.85rem; letter-spacing: 0.5px;">Total Subscribers</h5>
                    <div class="icon-box" style="background: rgba(219, 98, 52, 0.1); color: #DB6234; width: 40px; height: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                        <i class="bi bi-people-fill"></i>
                    </div>
                </div>
                <h2 class="display-5 fw-bold text-dark mb-0">
                    <?= esc($subscriberCount ?? 0) ?>
                </h2>
            </div>
            <div class="card-footer bg-transparent border-top" style="padding: 12px 20px;">
                <a href="<?= base_url('admin/subscribers') ?>" class="text-decoration-none fw-semibold" style="color: #DB6234; font-size: 0.9rem;">
                    Manage Subscribers <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card mt-2">
            <div class="card-header bg-white d-flex align-items-center">
                <i class="bi bi-info-circle text-primary me-2"></i> System Information
            </div>
            <div class="card-body">
                <p class="mb-0 text-muted">Welcome to the Anu International Dashboard. Use the sidebar to navigate to different sections of the backend.</p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>