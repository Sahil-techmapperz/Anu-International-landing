<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Panel' ?> - Anu International</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        .sidebar {
            background-color: #10243E;
            min-height: 100vh;
            color: #fff;
            position: fixed;
            width: 250px;
            left: 0;
            top: 0;
            z-index: 100;
            transition: all 0.3s;
        }

        .sidebar a {
            color: rgba(255, 255, 255, .75);
            text-decoration: none;
            padding: 15px 25px;
            display: block;
            font-weight: 500;
            transition: all 0.2s;
            font-size: 0.95rem;
        }

        .sidebar a i {
            margin-right: 10px;
            font-size: 1.1rem;
        }

        .sidebar a:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, .05);
        }

        .sidebar a.active {
            color: #fff;
            background-color: rgba(219, 98, 52, 0.1);
            border-left: 4px solid #DB6234;
        }

        .sidebar .brand {
            padding: 30px 25px;
            font-size: 1.25rem;
            font-weight: 800;
            border-bottom: 1px solid rgba(255, 255, 255, .05);
            letter-spacing: 1px;
            color: #fff;
        }

        .sidebar .brand span {
            color: #DB6234;
        }

        .main-wrapper {
            margin-left: 250px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: #f4f6f9;
        }

        .topbar {
            background: #fff;
            padding: 15px 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .02);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eef2f5;
        }

        .topbar .page-title {
            margin: 0;
            font-size: 1.25rem;
            font-weight: 700;
            color: #212529;
        }

        .topbar .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            color: #495057;
        }

        .topbar .user-avatar {
            width: 35px;
            height: 35px;
            background: #DB6234;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .main-content {
            padding: 30px;
            flex: 1;
        }

        /* Card specifics */
        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, .03);
            margin-bottom: 25px;
        }

        .card-header {
            background: #fff;
            border-bottom: 1px solid #f0f2f5;
            padding: 15px 20px;
            font-weight: 600;
            font-size: 1.05rem;
            border-top-left-radius: 8px !important;
            border-top-right-radius: 8px !important;
        }

        /* Buttons */
        .btn-brand {
            background-color: #DB6234;
            color: #fff;
            border: none;
        }

        .btn-brand:hover {
            background-color: #b84e22;
            color: #fff;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-250px);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-wrapper {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <?php if (session()->get('isLoggedIn')): ?>
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="brand">
                ANU <span>ADMIN</span>
            </div>
            <div class="mt-3">
                <p class="px-4 text-uppercase small" style="color: #6c757d; font-weight: 700; letter-spacing: 0.5px; font-size: 0.75rem; margin-bottom: 5px;">Menu</p>
                <div class="nav flex-column">
                    <a class="<?= (url_is('admin') || url_is('admin/dashboard')) ? 'active' : '' ?>" href="<?= base_url('admin/dashboard') ?>">
                        <i class="bi bi-grid-1x2-fill"></i> Dashboard
                    </a>
                    <a class="<?= url_is('admin/subscribers') ? 'active' : '' ?>" href="<?= base_url('admin/subscribers') ?>">
                        <i class="bi bi-envelope-paper-fill"></i> Subscribers
                    </a>
                    <a class="<?= url_is('admin/contacts') ? 'active' : '' ?>" href="<?= base_url('admin/contacts') ?>">
                        <i class="bi bi-chat-square-text-fill"></i> Messages
                    </a>

                    <p class="px-4 mt-4 text-uppercase small" style="color: #6c757d; font-weight: 700; letter-spacing: 0.5px; font-size: 0.75rem; margin-bottom: 5px;">Account</p>
                    <a class="text-danger" href="<?= base_url('admin/logout') ?>">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </div>
            </div>
        </nav>

        <!-- Main Wrapper -->
        <div class="main-wrapper">
            <!-- Top Header -->
            <header class="topbar">
                <h4 class="page-title"><?= $title ?? 'Dashboard' ?></h4>
                <div class="user-profile">
                    <span><?= ucfirst(session()->get('username')) ?></span>
                    <div class="user-avatar">
                        <?= strtoupper(substr(session()->get('username'), 0, 1)) ?>
                    </div>
                </div>
            </header>

            <!-- Dynamic Content -->
            <main class="main-content">
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i> <?= session()->getFlashdata('success') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i> <?= session()->getFlashdata('error') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <?= $this->renderSection('content') ?>
            </main>
        </div>

    <?php else: ?>
        <?= $this->renderSection('content') ?>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>