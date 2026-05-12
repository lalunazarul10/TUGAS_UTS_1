<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .login-header {
            background: #4e54c8;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .btn-login {
            background: #4e54c8;
            border: none;
        }

        .btn-login:hover {
            background: #3b41a5;
        }
    </style>
</head>
<body>

<div class="card login-card">

    <div class="login-header">
        <h3>Selamat Datang Di Toko Buku</h3>
        <small>Silakan login untuk melanjutkan</small>
    </div>

    <div class="card-body p-4">

        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <form action="/login" method="POST">

            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan email">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password">
            </div>

            <button type="submit" class="btn btn-login text-white w-100">
                Login
            </button>

        </form>

    </div>

</div>

</body>
</html><?php /**PATH C:\Users\imamb\Herd\toko_buku\resources\views/login.blade.php ENDPATH**/ ?>