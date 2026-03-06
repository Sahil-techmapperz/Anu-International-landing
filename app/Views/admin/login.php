<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Anu International</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f4f7;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 420px;
        }

        .login-header {
            background-color: #10243E;
            /* Navy */
            color: #fff;
            padding: 40px 20px;
            text-align: center;
            border-bottom: 5px solid #DB6234;
            /* Orange */
        }

        .login-header h3 {
            font-weight: 800;
            margin: 0;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .login-body {
            padding: 40px;
            background: #fff;
        }

        .form-control {
            border-radius: 6px;
            padding: 12px 15px;
            font-size: 0.95rem;
            border: 1px solid #ced4da;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(219, 98, 52, 0.25);
            border-color: #DB6234;
        }

        .btn-brand {
            background-color: #DB6234;
            color: white;
            font-weight: 600;
            border: none;
            padding: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-radius: 6px;
            transition: background-color 0.2s;
        }

        .btn-brand:hover {
            background-color: #b84e22;
            color: white;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 25px;
            color: #6c757d;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.2s;
        }

        .back-link:hover {
            color: #10243E;
        }

        .form-label {
            font-weight: 600;
            color: #495057;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
    </style>
</head>

<body>

    <div class="login-card">
        <div class="login-header">
            <h3>ANU INTERNATIONAL</h3>
            <p class="mb-0 mt-2 small text-white-50">Admin Authentication</p>
        </div>
        <div class="login-body">
            <?php if (isset($validation)): ?>
                <div class="alert alert-danger small py-2 border-0"><?= $validation->listErrors() ?></div>
            <?php endif; ?>

            <?php if (isset($error)): ?>
                <div class="alert alert-danger small py-2 border-0 d-flex align-items-center">
                    <?= $error ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/login') ?>" method="post">
                <div class="mb-4">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?= set_value('username') ?>" required placeholder="Enter your username">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required placeholder="Enter your password">
                </div>
                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-brand">Secure Login</button>
                </div>
            </form>

            <a href="<?= base_url('/') ?>" class="back-link">&larr; Return to Website</a>
        </div>
    </div>

</body>

</html>