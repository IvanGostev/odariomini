<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма авторизации</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
        }
        .login-card {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        .login-header {
            background: linear-gradient(45deg, #4e54c8, #8f94fb);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .login-body {
            padding: 30px;
            background-color: white;
        }
        .form-control:focus {
            border-color: #4e54c8;
            box-shadow: 0 0 0 0.25rem rgba(78, 84, 200, 0.25);
        }
        .btn-login {
            background: linear-gradient(45deg, #4e54c8, #8f94fb);
            border: none;
            padding: 12px;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .footer-links {
            text-align: center;
            margin-top: 20px;
        }
        .footer-links a {
            color: #6c757d;
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer-links a:hover {
            color: #4e54c8;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="login-container">
                <div class="card login-card border-0">
                    <div class="login-header">
                        <h2 class="mb-0">Вход в систему</h2>
                        <p class="mb-0 mt-2">Введите ваши учетные данные</p>
                    </div>
                    <div class="login-body">
                        <form action="{{route('auth')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Имя пользователя</label>
                                <input type="text"
                                       class="form-control"
                                       id="username"
                                       name="username"
                                       placeholder="Введите имя пользователя"
                                       required
                                       value="Admin"
                                disabled>
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label">Пароль</label>
                                <input type="password"
                                       class="form-control"
                                       id="password"
                                       name="password"
                                       placeholder="Введите пароль"
                                       required>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-login">
                                    Войти
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
