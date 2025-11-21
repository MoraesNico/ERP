<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Organização - Apê ERP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        /* ==================== 1. VARIÁVEIS DE CORES ==================== */
        :root {
            --ape-blue: #203ccf; /* Cor Principal */
            --ape-blue-light: #5a73ff; /* Cor para hover/seleção */
            --ape-blue-bg-light: #f0f3ff; /* Fundo da página (Muito suave) */
            --ape-blue-selection: #e6e9ff; /* Fundo do card selecionado */
        }

        /* ==================== 2. CLASSES DE CORES E UTILITÁRIOS ==================== */
        .bg-ape-blue { background-color: var(--ape-blue) !important; }
        .text-ape-blue { color: var(--ape-blue) !important; }
        .border-ape-blue { border-color: var(--ape-blue) !important; }

        /* ==================== 3. LAYOUT E CONTEÚDO ==================== */
        .creation-container {
            min-height: 100vh;
            background-color: var(--ape-blue-bg-light); 
            padding: 50px 0; /* Aumentado o padding vertical */
        }

        .card {
            border-radius: 1.25rem; /* Mais arredondado */
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1); /* Sombra mais profunda e suave */
            border: none; /* Remove a borda padrão do card para um visual mais flat */
        }
        
        /* Estilo dos Inputs (Flat Look) */
        .form-control:focus {
            border-color: var(--ape-blue);
            box-shadow: 0 0 0 0.25rem rgba(32, 60, 207, 0.25); /* Foco azul suave */
        }

        .section-divider {
            border-top: 1px solid #e9ecef;
            margin: 40px 0;
        }

        /* ==================== 4. BOTÃO PRINCIPAL ==================== */
        .btn-custom {
            background-color: var(--ape-blue);
            border-color: var(--ape-blue);
            color: #FFFFFF; 
            font-weight: 600; /* Levemente menos negrito */
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            border-radius: 0.75rem; /* Botão arredondado */
        }
        .btn-custom:hover:not(:disabled) {
            background-color: var(--ape-blue-light); 
            border-color: var(--ape-blue-light);
            color: #FFFFFF;
            transform: translateY(-2px); /* Efeito sutil de elevação */
        }

        /* ==================== 5. MÓDULOS (CARTÕES) ==================== */
        .module-card {
            border: 1px solid #dee2e6; /* Borda fina */
            transition: all 0.2s ease-in-out;
            cursor: pointer;
            border-radius: 0.75rem;
            position: relative; /* Para posicionar o checkmark */
        }
        .module-card:hover {
            border-color: var(--ape-blue-light); 
            box-shadow: 0 4px 15px rgba(32, 60, 207, 0.1);
        }
        .module-selected {
            border-color: var(--ape-blue) !important;
            background-color: var(--ape-blue-selection); 
        }

        /* Icone de seleção customizado para os cards */
        .module-checkmark {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.5rem;
            opacity: 0;
            color: var(--ape-blue);
            transition: opacity 0.2s ease;
        }
        .module-selected .module-checkmark {
            opacity: 1;
        }

        /* Esconde o input checkbox padrão, pois a label e o Javascript controlam o estado */
        .module-card input[type="checkbox"] {
            display: none !important; 
        }
        
        .module-price {
            font-size: 1.6rem;
            font-weight: 700;
        }

        /* Alerta de Total (Estilo Clean) */
        .total-alert {
            background-color: #ffffff; /* Fundo branco */
            border: 3px solid var(--ape-blue-light); 
            border-radius: 1rem;
            box-shadow: 0 5px 15px rgba(32, 60, 207, 0.1);
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="creation-container">
        <div class="container" style="max-width: 900px;">
            
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder text-ape-blue">
                    <i class="bi bi-person-workspace me-2"></i> Configuração Inicial
                </h1>
                <p class="lead text-muted">
                    Preencha os dados e selecione os módulos para iniciar seu Trial de 7 Dias. Após devera ter preenchido forma de pagamento para receber as devidas cobranças
                </p>
            </div>

            <div class="card shadow-lg p-md-5 p-4">
                <form id="organizationForm">
                    
                    <h2 class="fs-4 fw-bold text-ape-blue mb-4 pb-2 border-bottom border-2 border-ape-blue">1. Dados da Empresa</h2>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="companyName" class="form-label fw-semibold">Nome da Empresa (Razão Social)</label>
                            <input type="text" class="form-control" id="companyName" placeholder="Ex: Apê Soluções S.A." required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="cnpj" class="form-label fw-semibold">CNPJ</label>
                            <input type="text" class="form-control" id="cnpj" placeholder="00.000.000/0000-00" required>
                        </div>
                    </div>
                    
                    <div class="section-divider"></div>
                    
                    <h2 class="fs-4 fw-bold text-ape-blue mb-4 pb-2 border-bottom border-2 border-ape-blue">2. Seleção de Módulos (Trial Gratuito)</h2>

                    <div class="row g-4">
                        
                        <div class="col-md-4">
                            <div class="module-card card h-100 module-selected border-success border-2">
                                <div class="card-body p-3">
                                    <i class="bi bi-check-circle-fill module-checkmark" style="color: #198754;"></i>
                                    <h5 class="card-title fw-bold text-success mb-1">
                                        <i class="bi bi-gear-fill me-1"></i> BÁSICO 
                                    </h5>
                                    <p class="card-text text-muted small">
                                        Usuários, Segurança, Permissões e estrutura fundamental do sistema.
                                    </p>
                                    <h4 class="text-success fw-bold mt-2 module-price">R$ 0,00</h4>
                                </div>
                                <input type="checkbox" id="moduleBasic" class="visually-hidden" checked disabled value="0.00">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="moduleFinanceiro" class="w-100 h-100 d-block">
                                <div class="module-card card h-100" data-module="Financeiro">
                                    <div class="card-body p-3">
                                        <i class="bi bi-check-circle-fill module-checkmark"></i>
                                        <h5 class="card-title fw-bold text-ape-blue mb-1">
                                            <i class="bi bi-cash-stack me-1"></i> Financeiro
                                        </h5>
                                        <p class="card-text text-muted small">
                                            Contas a pagar/receber, fluxo de caixa, conciliação e DRE simplificada.
                                        </p>
                                        <h4 class="text-ape-blue fw-bold mt-2 module-price">R$ 00,00<small class="text-muted fs-6"> / mês</small></h4>
                                    </div>
                                    <input type="checkbox" id="moduleFinanceiro" class="module-checkbox" value="00.00">
                                </div>
                            </label>
                        </div>

                        <div class="col-md-4">
                            <label for="moduleRecebimento" class="w-100 h-100 d-block">
                                <div class="module-card card h-100" data-module="Logistica">
                                    <div class="card-body p-3">
                                        <i class="bi bi-check-circle-fill module-checkmark"></i>
                                        <h5 class="card-title fw-bold text-ape-blue mb-1">
                                            <i class="bi bi-truck me-1"></i> Logística
                                        </h5>
                                        <p class="card-text text-muted small">
                                            Controle de recebimento de encomendas e direcionamento via E-mail para remetentes.
                                        </p>
                                        <h4 class="text-ape-blue fw-bold mt-2 module-price">R$ 00,00<small class="text-muted fs-6"> / mês</small></h4>
                                    </div>
                                    <input type="checkbox" id="moduleRecebimento" class="module-checkbox" value="00.00">
                                </div>
                            </label>
                        </div>

                    </div> 
                    
                    <div class="total-alert mt-5 text-center">
                        <p class="m-0 fw-semibold text-ape-blue">
                            Total Estimado <span class="text-muted">(Após o Trial)</span>: 
                            <span id="totalPrice" class="fs-3 fw-bolder">R$ 0,00</span> / mês
                        </p>
                        <small class="text-muted d-block mt-2">Você terá 7 dias de Trial Gratuito. A cobrança é mensal e pode ser alterada a qualquer momento.</small>
                    </div>

                    <div class="section-divider"></div>

                    <h2 class="fs-4 fw-bold text-ape-blue mb-4 pb-2 border-bottom border-2 border-ape-blue">3. Confirmação e Termos</h2>

                    <div class="form-check p-4 border rounded-4 bg-light">
                        <input class="form-check-input mt-2" type="checkbox" value="" id="adminAgreement" required style="transform: scale(1.3);">
                        <label class="form-check-label ms-2" for="adminAgreement">
                            <span class="fw-bold text-dark">Declaro que entendo e aceito os termos:</span>
                            <ul class="list-unstyled mt-2 mb-0 ms-3 small">
                                <li class="text-ape-blue fw-semibold"><i class="bi bi-person-badge-fill me-2"></i> Minha conta será a de **Administrador Mestre**.</li>
                                <li class="text-ape-blue fw-semibold mt-1"><i class="bi bi-clock-history me-2"></i> Após o Trial de 7 dias, os módulos selecionados serão cobrados mensalmente.</li>
                            </ul>
                        </label>
                    </div>

                    <div class="d-grid pt-4">
                        <button type="submit" class="btn btn-custom btn-lg">
                            <i class="bi bi-box-arrow-in-right me-2"></i> Finalizar Cadastro e Iniciar Trial Gratuito
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const moduleCards = document.querySelectorAll('.module-card[data-module]');
            const checkboxes = document.querySelectorAll('.module-checkbox');

            // 1. FUNÇÃO DE ATUALIZAÇÃO DE PREÇO (com formatação BRL)
            const updatePrice = () => {
                let total = 0.00;
                // Inclui o BÁSICO (R$ 0,00) que é disabled/checked
                total += parseFloat(document.getElementById('moduleBasic').value); 
                
                checkboxes.forEach(cb => {
                    if (cb.checked) {
                        total += parseFloat(cb.value);
                    }
                });
                // Formatação para R$ 000,00
                const formattedTotal = total.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
                document.getElementById('totalPrice').textContent = formattedTotal;
            };

            // 2. LÓGICA DE SELEÇÃO DE MÓDULOS (Clique no Card)
            moduleCards.forEach(card => {
                const checkbox = card.querySelector('.module-checkbox');
                
                const updateCardStyle = () => {
                    if (checkbox.checked) {
                        card.classList.add('module-selected');
                    } else {
                        card.classList.remove('module-selected');
                    }
                };

                updateCardStyle(); // Inicializa o estilo

                card.parentElement.addEventListener('click', (e) => {
                    // Previne o clique de duplicar quando clica na label
                    if (e.target.closest('.module-card') === card) {
                        checkbox.checked = !checkbox.checked;
                        updateCardStyle();
                        updatePrice();
                    }
                });
                
                // Garante que a atualização de estilo ocorra caso o estado mude por outro meio
                checkbox.addEventListener('change', () => {
                    updateCardStyle();
                    updatePrice();
                });
            });

            // 3. APLICAÇÃO DA MÁSCARA CNPJ (usando Inputmask)
            if (window.jQuery && window.Inputmask) {
                 $('#cnpj').inputmask({
                    mask: '99.999.999/9999-99',
                    jitMasking: true
                });
            }

            // Chamada inicial
            updatePrice();
        });
    </script>
</body>
</html>