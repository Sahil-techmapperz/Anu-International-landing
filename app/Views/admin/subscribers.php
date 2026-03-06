<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<div class="row mb-4 align-items-center">
    <div class="col-sm-6">
        <h5 class="mb-0 text-dark fw-bold">Manage Subscribers</h5>
        <p class="text-muted small mb-0">View and manage newsletter sign-ups.</p>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="px-4 py-3 text-muted text-uppercase" style="font-size: 0.8rem; font-weight: 600;">ID</th>
                        <th scope="col" class="py-3 text-muted text-uppercase" style="font-size: 0.8rem; font-weight: 600;">Email Address</th>
                        <th scope="col" class="py-3 text-muted text-uppercase" style="font-size: 0.8rem; font-weight: 600;">Subscribed On</th>
                        <th scope="col" class="px-4 py-3 text-muted text-uppercase text-end" style="font-size: 0.8rem; font-weight: 600;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($subscribers) && is_array($subscribers)): ?>
                        <?php foreach ($subscribers as $sub): ?>
                            <tr>
                                <td class="px-4 py-3 text-muted">#<?= esc($sub['id']) ?></td>
                                <td class="py-3 fw-medium">
                                    <a href="mailto:<?= esc($sub['email']) ?>" class="text-decoration-none text-dark">
                                        <i class="bi bi-envelope me-2 text-muted"></i><?= esc($sub['email']) ?>
                                    </a>
                                </td>
                                <td class="py-3 text-muted small">
                                    <?= date('M j, Y \a\t g:i A', strtotime($sub['created_at'])) ?>
                                </td>
                                <td class="px-4 py-3 text-end">
                                    <form action="<?= base_url('admin/subscribers/delete/' . esc($sub['id'])) ?>" method="post" onsubmit="return confirm('Are you sure you want to delete this subscriber? This action cannot be undone.');" class="d-inline">
                                        <!-- CSRF handled automatically if enabled, but good to add explicitly if configured -->
                                        <?= csrf_field() ?>
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                            <i class="bi bi-trash3"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center text-muted py-5">
                                <div class="mb-3 text-secondary" style="font-size: 2rem;">
                                    <i class="bi bi-inbox"></i>
                                </div>
                                <h6>No subscribers found</h6>
                                <p class="small">When users sign up for the newsletter, they will appear here.</p>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>