<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Apê ERP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .navbar-custom, .bg-purple-dark {
            background-color: #3A107C;
        }
        .btn-custom {
            background-color: #B388FF; 
            border-color: #B388FF;
            color: #3A107C; 
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-custom:hover {
            background-color: #9A6ED8; 
            border-color: #9A6ED8;
            color: #FFFFFF;
        }
        .text-purple-dark {
            color: #3A107C;
        }
    
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa; 
        }
        
        .card-login {
            border-top: 5px solid #3A107C; 
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="card card-login shadow-lg p-3" style="width: 100%; max-width: 400px;">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h2 class="text-purple-dark fw-bold">Acesso M2NPS</h2>
                    <p class="text-muted">Entre com suas credenciais.</p>
                </div>
                
                <form id="loginForm" action="ControllerLogin.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label text-purple-dark fw-semibold">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="nome@empresa.com.br" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label text-purple-dark fw-semibold">Senha</label>
                            <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Sua senha" required>
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword" aria-label="Mostrar/Esconder Senha">
                                <i class="bi bi-eye-slash-fill"></i>
                            </button>
                        </div>
                    </div>
    
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-custom btn-lg">
                            Entrar
                        </button>
                    </div>

                     <div class="text-center mt-3">
                        <p class="mb-1">
                            <small class="text-muted">Esqueceu sua senha? <a href="#" class="text-purple-dark fw-semibold" style="text-decoration: none;">Clique aqui</a></small>
                        </p>
                        <p class="mb-0">
                            <small class="text-muted">Não tem conta? <a href="PageSignin.php" class="text-purple-dark fw-semibold" style="text-decoration: none;">Criar uma</a></small>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function (e) {
            const passwordInput = document.getElementById('password');
            const icon = e.target.closest('button').querySelector('i');
            
            // Troca o tipo do input de 'password' para 'text' e vice-versa
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Troca o ícone (olho aberto/fechado)
            if (type === 'text') {
                icon.classList.remove('bi-eye-slash-fill');
                icon.classList.add('bi-eye-fill');
            } else {
                icon.classList.remove('bi-eye-fill');
                icon.classList.add('bi-eye-slash-fill');
            }
        });
    </script>
</body>
</html>