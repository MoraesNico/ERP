<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M2NPS Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }
        /* ASIDE */
        aside {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background: #203ccf;
            color: #fff;
            padding-top: 20px;
        }
        .logo {
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .menu > li {
            padding: 15px;
            cursor: pointer;
            transition: 0.2s;
        }
        .menu > li:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        /* Submenus */
        .submenu {
            list-style: none;
            padding: 0;
            margin: 0;
            display: none;
            background: rgba(0, 0, 0, 0.15);
        }
        .submenu li {
            padding: 12px 20px;
            cursor: pointer;
            transition: 0.2s;
        }
        .submenu li:hover {
            background: rgba(255, 255, 255, 0.25);
        }
        /* NAVBAR */
        nav {
            margin-left: 250px;
            height: 60px;
            background: #e6e6e6;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .search {
            width: 300px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        /* CONTEÚDO */
        main {
            margin-left: 250px;
            margin-top: 60px;
            padding: 30px;
            text-align: center;
        }
    </style>
</head>
<body>

<aside>
    <div class="logo">M2NPS</div>
    <ul class="menu">
        <li onclick="toggleMenu('cadastro')">Cadastros</li>
        <ul id="cadastro" class="submenu">
            <li>Registrar Morador</li>
            <li>Registrar Empresa</li>
            <li>Cadastrar Módulo</li>
        </ul>

        <li onclick="toggleMenu('gestao')">Gestão</li>
        <ul id="gestao" class="submenu">
            <li>Permissões</li>
            <li>Financeiro</li>
            <li>Logs</li>
        </ul>

        <li onclick="toggleMenu('suporte')">Suporte</li>
        <ul id="suporte" class="submenu">
            <li>Chamados</li>
            <li>Central de Ajuda</li>
        </ul>
    </ul>
</aside>

<nav>
    <input type="text" class="search" placeholder="Pesquisar...">
    <div class="profile">
        <img src="profile.png" alt="Perfil">
        <span>Nicolas Moraes</span>
    </div>
</nav>

<main>
    <h1>Bem-vindo ao painel do sistema!</h1>
    <p>Selecione um módulo no menu lateral para começar.</p>
</main>

<script>
function toggleMenu(id) {
    const submenu = document.getElementById(id);
    submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
}
</script>

</body>
</html>