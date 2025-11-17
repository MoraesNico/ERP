<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apê ERP - Soluções Inteligentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .navbar-custom {
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
        .hero-section {
            padding: 100px 0;
            background-color: #f8f9fa; 
        }
        .text-purple-dark {
            color: #3A107C;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom navbar-dark sticky-top">
        <div class="container-fluid container">
            <a class="navbar-brand fs-4 fw-bold" href="#">
                <span style="color: #B388FF;">Apê</span> <span style="color: #FFFFFF;">Aqui</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Soluções</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
                
                <a class="btn btn-custom" href="PageLogin.php" role="button">
                    Entrar
                </a>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-3 fw-bold text-purple-dark mb-4">
                Sua Gestão Descomplicada. <br> Apê, o ERP que Entende Você.
            </h1>
            <p class="lead mb-5 text-muted">
                Automatize processos, tome decisões inteligentes e veja sua empresa crescer com a plataforma mais completa do mercado.
            </p>
            <a href="#" class="btn btn-custom btn-lg shadow-sm">
                Experimente Grátis por 7 Dias
            </a>
        </div>
    </header>

    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center mb-5 text-purple-dark fw-bold">🚀 Recursos Chave para o seu Negócio</h2>
            <div class="row text-center">
                
                <div class="col-md-4 mb-4">
                    <div class="p-4 border rounded-3 h-100 shadow-sm">
                        <h3 class="fs-4 text-purple-dark">Financeiro Integrado</h3>
                        <p class="text-muted">Controle total de contas a pagar, receber e fluxo de caixa em tempo real, eliminando erros manuais.</p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="p-4 border rounded-3 h-100 shadow-sm">
                        <h3 class="fs-4 text-purple-dark">Gestão de Estoque Inteligente</h3>
                        <p class="text-muted">Otimize a armazenagem, rastreie produtos e faça previsões de demanda com nossa IA.</p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="p-4 border rounded-3 h-100 shadow-sm">
                        <h3 class="fs-4 text-purple-dark">Relatórios Dinâmicos</h3>
                        <p class="text-muted">Dashboards personalizáveis que transformam dados complexos em informações claras para a tomada de decisão.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="py-4 navbar-custom text-white">
        <div class="container text-center">
            <p class="m-0">&copy; 2025 Apê ERP - Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>