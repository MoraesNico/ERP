<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro M2NPS</title>
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

        .signup-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa; 
            padding: 20px 0; 
        }
  
        .card-signup {
            border-top: 5px solid #3A107C; 
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <div class="card card-signup shadow-lg p-3" style="width: 100%; max-width: 450px;">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h2 class="text-purple-dark fw-bold">Cadastre-se no M2NPS</h2>
                    <p class="text-muted">Comece sua gestão inteligente hoje mesmo!</p>
                </div>
                
                <form id="signupForm" action="ControllerSignin.php" method="POST">
                    
                    <div class="mb-3">
                        <label for="fullName" class="form-label text-purple-dark fw-semibold">Nome Completo</label>
                        <input type="text" class="form-control" id="fullName" name="name" placeholder="Seu nome completo" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label text-purple-dark fw-semibold">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="nome@empresa.com.br" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label text-purple-dark fw-semibold">Crie uma Senha</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mínimo 8 caracteres" required minlength="8">
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword" aria-label="Mostrar/Esconder Senha">
                                <i class="bi bi-eye-slash-fill"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="termsCheck" required>
                        <label class="form-check-label text-muted" for="termsCheck">
                            Eu concordo com os <a href="#" class="text-purple-dark fw-semibold" style="text-decoration: none;">Termos de Serviço</a>.
                        </label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-custom btn-lg">
                            Criar Conta
                        </button>
                    </div>

                    <div class="text-center mt-3">
                        <p class="mb-0">
                            <small class="text-muted">Já tem uma conta? <a href="#" class="text-purple-dark fw-semibold" style="text-decoration: none;">Fazer Login</a></small>
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
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
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