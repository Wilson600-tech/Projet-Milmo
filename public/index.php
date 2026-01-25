<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILMO - Grâce Inarrêtable</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(to bottom, #f5e6d3 0%, #f4d9a6 30%, #e8b563 60%, #d4a055 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('https://images.unsplash.com/photo-1553284965-83fd3e82fa5a?q=80&w=2071');
            background-size: cover;
            background-position: center;
            opacity: 0.4;
            z-index: -1;
        }

        .container {
            max-width: 650px;
            width: 100%;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }

        .logo-box {
            background: white;
            border-radius: 50px;
            padding: 15px 35px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-icon {
            background: #ffa726;
            border-radius: 12px;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: bold;
            color: #212121;
        }

        .logo-text {
            font-size: 32px;
            font-weight: bold;
            color: #212121;
        }

        .title {
            font-size: 48px;
            font-weight: bold;
            color: #ffa726;
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .verse {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }

        .verse-box {
            background: white;
            border-radius: 30px;
            padding: 12px 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            color: #424242;
            font-weight: 500;
            font-size: 16px;
        }

        .welcome-card {
            background: white;
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            margin-bottom: 25px;
            border-top: 5px solid #ffa726;
        }

        .welcome-card h2 {
            font-size: 32px;
            font-weight: bold;
            color: #212121;
            margin-bottom: 20px;
        }

        .welcome-card p {
            color: #616161;
            line-height: 1.8;
            margin-bottom: 25px;
            font-size: 16px;
        }

        .calendar-info {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #616161;
        }

        .calendar-icon {
            width: 20px;
            height: 20px;
        }

        .action-button {
            background: #ffa726;
            border: none;
            border-radius: 25px;
            padding: 30px 40px;
            width: 100%;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(255, 167, 38, 0.3);
            margin-bottom: 20px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .action-button:hover {
            background: #fb8c00;
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(255, 167, 38, 0.4);
        }

        .action-button:active {
            transform: translateY(0);
        }

        .button-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .button-text {
            text-align: left;
        }

        .button-title {
            font-size: 22px;
            font-weight: bold;
            color: #212121;
            margin-bottom: 5px;
        }

        .button-subtitle {
            color: #424242;
            font-size: 15px;
        }

        .button-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .secondary-button {
            background: white;
            border: none;
            border-radius: 25px;
            padding: 30px 40px;
            width: 100%;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }

        .secondary-button:hover {
            background: #f5f5f5;
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .admin-link {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            color: #616161;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            margin-bottom: 30px;
            transition: color 0.3s ease;
        }

        .admin-link:hover {
            color: #212121;
        }

        .footer {
            text-align: center;
            color: #78909c;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .title {
                font-size: 36px;
            }

            .logo-text {
                font-size: 24px;
            }

            .welcome-card {
                padding: 30px;
            }

            .welcome-card h2 {
                font-size: 26px;
            }

            .button-title {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Logo -->
        <div class="logo-container">
            <div class="logo-box">
                <div class="logo-icon">M</div>
                <div class="logo-text">MILMO</div>
            </div>
        </div>

        <!-- Titre principal -->
        <h1 class="title">Grâce Inarrêtable</h1>

        <!-- Référence biblique -->
        <div class="verse">
            <div class="verse-box">Joel 02:04</div>
        </div>

        <!-- Carte de bienvenue -->
        <div class="welcome-card">
            <h2>Bienvenue</h2>
            <p>À la Mission Internationale Lumière du Monde. Connectez-vous pour gérer les membres et accéder aux ressources.</p>
            <div class="calendar-info">
                <svg class="calendar-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <span>Culte du Dimanche</span>
            </div>
        </div>

        <!-- Bouton Enregistrer membre -->
        <button class="action-button" onclick="enregistrerMembre()">
            <div class="button-content">
                <div class="button-text">
                    <div class="button-title">Enregistrer un nouveau membre</div>
                    <div class="button-subtitle">Formulaire d'adhésion</div>
                </div>
                <div class="button-icon">
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                        <circle cx="9" cy="10" r="3"></circle>
                    </svg>
                </div>
            </div>
        </button>

        <!-- Bouton Enseignements -->
        <button class="secondary-button" onclick="accederEnseignements()">
            <div class="button-content">
                <div class="button-text">
                    <div class="button-title">Accéder aux enseignements</div>
                    <div class="button-subtitle">Audio, Vidéo et Textes</div>
                </div>
                <div class="button-icon" style="background: #ffa726;">
                    <svg width="24" height="24" fill="white" viewBox="0 0 24 24">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"></path>
                    </svg>
                </div>
            </div>
        </button>

        <!-- Lien admin -->
        <a href="#" class="admin-link" onclick="accederAdmin(event)">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                <path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"></path>
            </svg>
            Tableau de bord administrateur
        </a>

        <!-- Footer -->
        <div class="footer">© 2024 MILMO CRM v1.0</div>
    </div>

    <script>
        function enregistrerMembre() {
            alert('Ouverture du formulaire d\'adhésion...');
            // window.location.href = '/enregistrement';
        }

        function accederEnseignements() {
            alert('Accès aux enseignements...');
            // Ici vous pouvez rediriger vers la page des enseignements
            // window.location.href = '/enseignements';
        }

        function accederAdmin(event) {
            event.preventDefault();
            alert('Accès au tableau de bord administrateur...');
            // Ici vous pouvez rediriger vers le tableau de bord
            // window.location.href = '/admin';
        }

        // Animation au chargement
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.welcome-card, .action-button, .secondary-button');
            elements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    el.style.transition = 'all 0.5s ease';
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</body>
</html>
