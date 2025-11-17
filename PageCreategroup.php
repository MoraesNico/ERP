<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Organização - Apê ERP</title>
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
            transition: background-color 0.3s;
        }
        .btn-custom:hover:not(:disabled) {
            background-color: #9A6ED8; 
            border-color: #9A6ED8;
            color: #FFFFFF;
        }
        
        .creation-container {
            min-height: 100vh;
            background-color: #f8f9fa; 
            padding: 40px 0; 
        }

        .module-card {
            border: 2px solid #dee2e6;
            transition: border-color 0.2s, box-shadow 0.2s;
            cursor: pointer;
        }
        .module-card:hover {
            border-color: #B388FF; 
            box-shadow: 0 0 10px rgba(179, 136, 255, 0.5);
        }
        .module-selected {
            border-color: #3A107C !important;
            background-color: #f0f3ff;
        }
        .module-selected .bi-check-circle-fill {
            color: #3A107C;
        }

        .section-divider {
            border-top: 2px dashed #e9ecef;
            margin: 40px 0;
        }
        
    </style>
</head>
<body>

    <div class="creation-container">
        <div class="container" style="max-width: 900px;">
            
            <div class="text-center mb-5">
                <h1 class="display-6 fw-bold text-purple-dark">
                    <i class="bi bi-building me-2"></i> Configure sua Organização
                </h1>
                <p class="lead text-muted">
                    Sua jornada no apê ERP começa aqui. Preencha os dados e escolha seus módulos.
                </p>
            </div>

            <div class="card shadow-lg p-md-5 p-3">
                <form id="organizationForm">
                    
                    <h2 class="fs-4 fw-bold text-purple-dark mb-4 border-bottom pb-2">1. Dados da Empresa</h2>
                    
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
                    
                    <h2 class="fs-4 fw-bold text-purple-dark mb-4 border-bottom pb-2">2. Seleção de Módulos (Trial de 30 Dias)</h2>

                    <div class="row g-4">
                        
                        <div class="col-md-4">
                            <div class="module-card card h-100 module-selected">
                                <div class="card-body p-3">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <h5 class="card-title fw-bold text-purple-dark mb-1">
                                            BÁSICO <span class="badge bg-purple-dark">Obrigatório</span>
                                        </h5>
                                        <i class="bi bi-check-circle-fill fs-4"></i>
                                    </div>
                                    <p class="card-text text-muted small">
                                        Usuários, Segurança, Cadastro de Clientes/Fornecedores e Estrutura Básica do Sistema.
                                    </p>
                                    <h4 class="text-success fw-bold mt-2">R$ 0,00</h4>
                                </div>
                                <input type="checkbox" id="moduleBasic" class="form-check-input visually-hidden" checked disabled>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="moduleFinanceiro" class="w-100">
                                <div class="module-card card h-100" data-module="Financeiro">
                                    <div class="card-body p-3">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <h5 class="card-title fw-bold text-purple-dark mb-1">
                                                Financeiro
                                            </h5>
                                            <input type="checkbox" id="moduleFinanceiro" class="form-check-input mt-0" value="89.90">
                                        </div>
                                        <p class="card-text text-muted small">
                                            Contas a pagar/receber, fluxo de caixa, conciliação bancária e DRE.
                                        </p>
                                        <h4 class="text-purple-dark fw-bold mt-2">R$ 89,90<small class="text-muted fs-6"> / mês</small></h4>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="col-md-4">
                            <label for="moduleRecebimento" class="w-100">
                                <div class="module-card card h-100" data-module="Recebimento">
                                    <div class="card-body p-3">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <h5 class="card-title fw-bold text-purple-dark mb-1">
                                                Recebimento de Produtos
                                            </h5>
                                            <input type="checkbox" id="moduleRecebimento" class="form-check-input mt-0" value="49.90">
                                        </div>
                                        <p class="card-text text-muted small">
                                            Controle de estoque, entrada de notas fiscais e logística de recebimento.
                                        </p>
                                        <h4 class="text-purple-dark fw-bold mt-2">R$ 49,90<small class="text-muted fs-6"> / mês</small></h4>
                                    </div>
                                </div>
                            </label>
                        </div>

                    </div> <div class="alert mt-4 bg-light border-start border-5 border-purple-dark text-center">
                        <p class="m-0 fw-semibold text-purple-dark">
                            Total Estimado após 30 Dias: <span id="totalPrice" class="fs-5">R$ 139,80</span> / mês
                        </p>
                        <small class="text-muted">O preço final dependerá dos módulos selecionados.</small>
                    </div>

                    <div class="section-divider"></div>

                    <h2 class="fs-4 fw-bold text-purple-dark mb-4 border-bottom pb-2">3. Confirmação e Termos</h2>

                    <div class="form-check mb-4 p-4 border rounded-3">
                        <input class="form-check-input" type="checkbox" value="" id="adminAgreement" required>
                        <label class="form-check-label text-muted small" for="adminAgreement">
                            **Declaro que entendo e aceito:**
                            <ul class="list-unstyled mt-2 mb-0 ms-3">
                                <li class="text-purple-dark fw-semibold"><i class="bi bi-person-badge-fill me-2"></i> Minha conta será definida como a conta de Administrador Mestre desta Organização.</li>
                                <li class="text-purple-dark fw-semibold mt-1"><i class="bi bi-clock-history me-2"></i> Após 30 dias de uso gratuito, os módulos selecionados serão cobrados mensalmente, de acordo com a forma de pagamento que informarei posteriormente.</li>
                            </ul>
                        </label>
                    </div>

                    <div class="d-grid pt-3">
                        <button type="submit" class="btn btn-custom btn-lg">
                            <i class="bi bi-save me-2"></i> Finalizar Cadastro e Iniciar Trial
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const moduleCards = document.querySelectorAll('.module-card[data-module]');
            const checkboxes = document.querySelectorAll('.module-card input[type="checkbox"]');
            const updatePrice = () => {
                let total = 0.00;
                checkboxes.forEach(cb => {
                    if (cb.checked) {
                        total += parseFloat(cb.value);
                    }
                });
                const formattedTotal = total.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
                document.getElementById('totalPrice').textContent = formattedTotal;
            };
            moduleCards.forEach(card => {
                const checkbox = card.querySelector('input[type="checkbox"]');
                const updateCardStyle = () => {
                    if (checkbox.checked) {
                        card.classList.add('module-selected');
                    } else {
                        card.classList.remove('module-selected');
                    }
                };
                updateCardStyle();
                card.addEventListener('click', (e) => {
                    if (e.target.tagName !== 'INPUT') {
                        checkbox.checked = !checkbox.checked;
                        updateCardStyle();
                        updatePrice();
                    }
                });
                checkbox.addEventListener('change', () => {
                    updateCardStyle();
                    updatePrice();
                });
            });
            updatePrice();
        });
    </script>
</body>
</html>