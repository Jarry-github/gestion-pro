<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio | Chef de Projet & Développeur Web</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #0f172a;
            color: #f8fafc;
            line-height: 1.6;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 8%;
            background: #111827;
            border-bottom: 1px solid #1e293b;
        }

        nav .logo {
            font-size: 22px;
            font-weight: bold;
        }

        nav a {
            color: #cbd5e1;
            text-decoration: none;
            margin-left: 25px;
        }

        nav a:hover {
            color: #38bdf8;
        }

        .hero {
            min-height: 85vh;
            display: flex;
            align-items: center;
            padding: 60px 8%;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero span {
            color: #38bdf8;
            font-weight: bold;
        }

        .hero h1 {
            font-size: 56px;
            line-height: 1.1;
            margin: 15px 0;
        }

        .hero p {
            font-size: 20px;
            color: #cbd5e1;
            max-width: 700px;
            margin-bottom: 30px;
        }

        .buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 13px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-primary {
            background: #38bdf8;
            color: #0f172a;
        }

        .btn-secondary {
            border: 1px solid #475569;
            color: #f8fafc;
        }

        .section {
            padding: 80px 8%;
        }

        .section h2 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .card {
            background: #1e293b;
            padding: 25px;
            border-radius: 12px;
            border: 1px solid #334155;
        }

        .card h3 {
            margin-bottom: 10px;
            color: #38bdf8;
        }

        footer {
            text-align: center;
            padding: 30px;
            background: #111827;
            color: #94a3b8;
        }

        @media (max-width: 700px) {

            .hero h1 {
                font-size: 40px;
            }

            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin-left: 10px;
                margin-right: 10px;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">
            Portfolio
        </div>

        <div>
            <a href="#accueil">Accueil</a>
            <a href="#apropos">À propos</a>
            <a href="#competences">Compétences</a>
            <a href="/projets">Projets</a>
        </div>
    </nav>


    <section class="hero" id="accueil">

        <div class="hero-content">

            <span>CHEF DE PROJET & DÉVELOPPEUR WEB</span>

            <h1>
                Je conçois et développe
                des applications web.
            </h1>

            <p>
                19 ans d'expérience dans l'analyse, la conception,
                le développement et le suivi de projets informatiques.
                Spécialisé en PHP, bases de données et applications web.
            </p>

            <div class="buttons">

                <a href="#competences" class="btn btn-primary">
                    Mes compétences
                </a>

                <a href="/projets" class="btn btn-secondary">
                    Voir mes projets
                </a>

            </div>

        </div>

    </section>


    <section class="section" id="apropos">

        <h2>À propos de moi</h2>

        <p>
            Chef de projet et développeur web avec 19 ans d'expérience,
            j'interviens sur l'analyse des besoins, la conception,
            le développement, les bases de données et le suivi
            des applications web.
        </p>

    </section>


    <section class="section" id="competences">

        <h2>Mes compétences</h2>

        <div class="cards">

            <div class="card">
                <h3>PHP</h3>
                <p>
                    Développement d'applications web et programmation backend.
                </p>
            </div>

            <div class="card">
                <h3>Laravel</h3>
                <p>
                    Développement MVC, Eloquent, Blade, CRUD et API.
                </p>
            </div>

            <div class="card">
                <h3>CodeIgniter</h3>
                <p>
                    Expérience avancée avec CodeIgniter 2 et 4.
                </p>
            </div>

            <div class="card">
                <h3>Base de données</h3>
                <p>
                    MySQL et PostgreSQL, conception et gestion des données.
                </p>
            </div>

            <div class="card">
                <h3>JavaScript</h3>
                <p>
                    Développement d'interfaces web dynamiques.
                </p>
            </div>

            <div class="card">
                <h3>API REST</h3>
                <p>
                    Conception et intégration de services web JSON.
                </p>
            </div>

        </div>

    </section>


    <footer>

        © {{ date('Y') }} — Chef de Projet & Développeur Web

    </footer>

</body>
</html>