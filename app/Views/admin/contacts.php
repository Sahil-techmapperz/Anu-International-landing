<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<div class="row mb-4 align-items-center">
    <div class="col-sm-6">
        <h5 class="mb-0 text-dark fw-bold">Manage Contacts</h5>
        <p class="text-muted small mb-0">View messages submitted via the Contact Us form.</p>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="px-4 py-3 text-muted text-uppercase" style="font-size: 0.8rem; font-weight: 600;">Date</th>
                        <th scope="col" class="py-3 text-muted text-uppercase" style="font-size: 0.8rem; font-weight: 600;">Details</th>
                        <th scope="col" class="py-3 text-muted text-uppercase" style="font-size: 0.8rem; font-weight: 600;">Message</th>
                        <th scope="col" class="px-4 py-3 text-muted text-uppercase text-end" style="font-size: 0.8rem; font-weight: 600;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($contacts) && is_array($contacts)): ?>
                        <?php foreach ($contacts as $contact): ?>
                            <tr>
                                <td class="px-4 py-3 text-muted small" style="white-space: nowrap;">
                                    <?= date('M j, Y', strtotime($contact['created_at'])) ?><br>
                                    <span class="text-secondary"><?= date('g:i A', strtotime($contact['created_at'])) ?></span>
                                </td>
                                <td class="py-3">
                                    <div class="fw-bold text-dark"><?= esc($contact['name']) ?></div>
                                    <small><a href="mailto:<?= esc($contact['email']) ?>" class="text-decoration-none text-muted"><i class="bi bi-envelope me-1"></i><?= esc($contact['email']) ?></a></small>
                                </td>
                                <td class="py-3">
                                    <div class="fw-bold mb-1" style="font-size: 0.95rem; color: #10243E;"><?= esc($contact['subject']) ?></div>
                                    <div class="text-muted small" style="max-width: 400px; max-height: 4.5em; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                        <?= nl2br((string) esc($contact['message'])) ?>
                                    </div>
                                    <!-- Optional: Modal trigger to read full message if it's long -->
                                    <a href="#" class="text-decoration-none small mt-1 d-inline-block" data-bs-toggle="modal" data-bs-target="#messageModal<?= $contact['id'] ?>" style="color: #DB6234;">Read Full Message</a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="messageModal<?= $contact['id'] ?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content border-0 shadow">
                                                <div class="modal-header border-bottom-0 pb-0">
                                                    <h5 class="modal-title fw-bold" style="color: #10243E;"><?= esc($contact['subject']) ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3 pb-3 border-bottom">
                                                        <div class="d-flex justify-content-between">
                                                            <div><strong>From:</strong> <?= esc($contact['name']) ?> &lt;<?= esc($contact['email']) ?>&gt;</div>
                                                            <div class="text-muted small"><?= date('M j, Y g:i A', strtotime($contact['created_at'])) ?></div>
                                                        </div>
                                                    </div>
                                                    <p style="white-space: pre-wrap; font-size: 0.95rem; color: #495057;"><?= esc($contact['message']) ?></p>
                                                </div>
                                                <div class="modal-footer border-top-0 pt-0">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                    <a href="mailto:<?= esc($contact['email']) ?>?subject=RE: <?= urlencode($contact['subject']) ?>" class="btn btn-sm text-white" style="background-color: #DB6234;">Reply via Email</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td class="px-4 py-3 text-end align-top">
                                    <form action="<?= base_url('admin/contacts/delete/' . esc($contact['id'])) ?>" method="post" onsubmit="return confirm('Are you sure you want to delete this message?');" class="d-inline">
                                        <!-- CSRF handled automatically if enabled -->
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
                                    <i class="bi bi-chat-square-text"></i>
                                </div>
                                <h6>No messages found</h6>
                                <p class="small">When users contact you through the form, their messages will appear here.</p>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>