<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>M2NPS - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f5f5;
        }

        /* ASIDE */
        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #203ccf;
            color: white;
            padding: 25px 20px;
            overflow-y: auto;
        }

        .sidebar h2 {
            font-weight: 700;
            font-size: 30px;
            margin-bottom: 30px;
        }

        .module-title {
            font-weight: bold;
            font-size: 15px;
            margin-top: 20px;
            cursor: pointer;
        }

        .sidebar .nav-link {
            color: #e3e9ff;
            font-size: 15px;
            border-radius: 8px;
            padding: 8px 12px;
        }
        .sidebar .nav-link:hover {
            background: #1b33ad;
            color: white;
        }

        /* NAVBAR SUPERIOR */
        .topbar {
            margin-left: 260px;
            height: 70px;
            background: #e9ecef;
            border-bottom: 1px solid #d0d0d0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 25px;
            position: fixed;
            top: 0;
            right: 0;
            left: 260px;
            z-index: 10;
        }

        .search-box {
            width: 350px;
            border-radius: 30px;
        }

        .profile-pic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #203ccf;
        }

        /* CONTEÚDO CENTRAL */
        .main-content {
            margin-left: 260px;
            margin-top: 90px;
            padding: 40px;
            text-align: center;
        }

        .welcome-text {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .sub-text {
            font-size: 22px;
        }

    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <h2>M2NPS</h2>

        <div class="accordion" id="menuModules">

            <!-- MÓDULO CADASTRO -->
            <div class="accordion-item bg-transparent border-0 text-white">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-transparent text-white shadow-none" 
                            type="button" data-bs-toggle="collapse" 
                            data-bs-target="#modCadastro">
                        Módulo Cadastro
                    </button>
                </h2>
                <div id="modCadastro" class="accordion-collapse collapse">
                    <div class="accordion-body p-0">
                        <a class="nav-link" href="#">Registrar Pessoa</a>
                        <a class="nav-link" href="#">Cadastrar Empresa</a>
                        <a class="nav-link" href="#">Gerenciar Perfis</a>
                    </div>
                </div>
            </div>

            <!-- MÓDULO FINANCEIRO -->
            <div class="accordion-item bg-transparent border-0 text-white">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-transparent text-white shadow-none" 
                            type="button" data-bs-toggle="collapse" 
                            data-bs-target="#modFinanceiro">
                        Módulo Financeiro
                    </button>
                </h2>
                <div id="modFinanceiro" class="accordion-collapse collapse">
                    <div class="accordion-body p-0">
                        <a class="nav-link" href="#">Cadastrar Conta</a>
                        <a class="nav-link" href="#">Relatórios</a>
                    </div>
                </div>
            </div>

            <!-- MÓDULO CONDOMÍNIO -->
            <div class="accordion-item bg-transparent border-0 text-white">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-transparent text-white shadow-none"
                            type="button" data-bs-toggle="collapse" 
                            data-bs-target="#modCondo">
                        Módulo Condomínio
                    </button>
                </h2>
                <div id="modCondo" class="accordion-collapse collapse">
                    <div class="accordion-body p-0">
                        <a class="nav-link" href="#">Registrar Encomenda</a>
                        <a class="nav-link" href="#">Gerenciar Moradores</a>
                    </div>
                </div>
            </div>

        </div>

    </aside>


    <!-- NAVBAR SUPERIOR -->
    <div class="topbar">

        <input type="text" class="form-control search-box" placeholder="Pesquisar...">

        <div class="d-flex align-items-center gap-3">
            <span class="fw-bold">Nicolas - Admin</span>
            <div class="profile-pic"></div>
        </div>

    </div>


    <!-- CONTEÚDO CENTRAL -->
    <div class="main-content">

        <h1 class="welcome-text">Bem-Vindo!</h1>

        <p class="sub-text">
            Seu ambiente de trabalho está carregado e pronto para uso.
        </p>

        <p class="sub-text">
            Utilize o menu lateral ou a barra de pesquisa para navegar.
        </p>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
