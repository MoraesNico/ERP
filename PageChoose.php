<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo ao Apê ERP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        .bg-purple-dark {
            background-color: #3A107C; 
        }
        .text-purple-dark {
            color: #3A107C;
        }
        .btn-custom {
            background-color: #B388FF; 
            border-color: #B388FF;
            color: #3A107C; 
            font-weight: bold;
        }
        
        .onboarding-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa; 
        }

        .option-card {
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
            border: 1px solid #dee2e6; 
        }

        .option-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border-color: #B388FF; 
        }
        .option-card .card-body {
            display: flex;
            align-items: center;
        }
        .option-icon {
            font-size: 2.5rem;
            margin-right: 20px;
            color: #3A107C; 
        }
    </style>
</head>
<body>

    <div class="onboarding-container">
        <div class="container" style="max-width: 800px;">
            
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold text-purple-dark">
                    Olá, <span id="user-name">Usuário Cadastrado</span>!
                </h1>
                <p class="lead text-muted mt-3">
                    Parece que você ainda não faz parte de uma organização. Para começar a usar o apê ERP, escolha uma das opções abaixo:
                </p>
            </div>

            <div class="row g-4">
    
            <div class="col-md-6">
                <div class="card option-card p-3 h-100 shadow-sm" onclick="window.location.href='PageCreategroup.php'">
                    <div class="card-body">
                        <i class="bi bi-building option-icon"></i>
                    <div>
                        <h3 class="fs-5 fw-bold text-purple-dark">Criar uma Nova Organização</h3>
                        <p class="text-muted m-0">
                            Comece do zero! Crie e configure o ambiente da sua empresa para ter total controle.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    <div class="col-md-6">
        <div class="card option-card p-3 h-100 shadow-sm" onclick="window.location.href='PageJoin.php'">
            <div class="card-body">
                <i class="bi bi-person-fill-add option-icon"></i>
                <div>
                    <h3 class="fs-5 fw-bold text-purple-dark">Fazer Parte de uma Existente</h3>
                    <p class="text-muted m-0">
                        Junte-se à equipe! Use um código de convite ou link para acessar sua organização.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>   
            <div class="text-center mt-5">
                <p class="text-muted">
                    <small>Se você recebeu um convite por e-mail, clique no link diretamente para simplificar o processo.</small>
                </p>
                <a href="#" class="btn btn-sm btn-outline-secondary">Ajuda e Suporte</a>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('user-name').textContent = ""; 
    </script>
</body>
</html>