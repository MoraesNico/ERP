<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingressar na Organização - Apê ERP</title>
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
        .btn-custom:hover {
            background-color: #9A6ED8; 
            border-color: #9A6ED8;
            color: #FFFFFF;
        }
        .code-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa; 
        }
        #invitationCode {
            text-align: center;
            font-size: 2rem; 
            letter-spacing: 15px; 
            padding: 15px 10px;
            max-width: 250px; 
            margin: 0 auto;
            display: block;
            border: 2px solid #dee2e6;
            transition: border-color 0.3s;
        }
        #invitationCode:focus {
            border-color: #B388FF; 
            box-shadow: none;
        }
    </style>
</head>
<body>
    <div class="code-container">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 450px;">
            <div class="card-body text-center">
                
                <i class="bi bi-key-fill text-purple-dark mb-3" style="font-size: 3rem;"></i>
                <h2 class="text-purple-dark fw-bold mb-2">Ingressar na Organização</h2>
                <p class="text-muted mb-4">
                    Insira o código de 6 dígitos fornecido pelo seu RH ou gestor.
                </p>

                <form id="joinForm">
                    <div class="mb-4">
                        <label for="invitationCode" class="form-label visually-hidden">Código de Convite</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="invitationCode" 
                            placeholder="______"
                            maxlength="6"
                            pattern="[0-9A-Za-z]{6}"
                            required
                        >
                        <div class="form-text mt-2 text-start" style="max-width: 250px; margin: 0 auto;">
                            <small class="text-muted">Apenas letras e números.</small>
                        </div>
                    </div>
                    
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-custom btn-lg">
                            Ingressar
                        </button>
                    </div>

                    <div class="text-center mt-3">
                        <small class="text-muted">
                            <a href="#" class="text-purple-dark fw-semibold" style="text-decoration: none;">&larr; Voltar às opções</a>
                        </small>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>