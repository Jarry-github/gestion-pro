<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mes projets | Portfolio</title>

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

        .logo {
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

        .header {
            padding: 70px 8% 40px;
        }

        .header span {
            color: #38bdf8;
            font-weight: bold;
        }

        .header h1 {
            font-size: 46px;
            margin: 10px 0;
        }

        .header p {
            color: #94a3b8;
            max-width: 700px;
        }

        .projects {
            padding: 30px 8% 80px;

            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));

            gap: 25px;
        }

        .project-card {
            background: #1e293b;
            border: 1px solid #334155;
            border-radius: 16px;
            padding: 28px;

            transition: transform 0.2s ease,
                        border-color 0.2s ease;
        }

        .project-card:hover {
            transform: translateY(-6px);
            border-color: #38bdf8;
        }

        .project-icon {
            width: 55px;
            height: 55px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #0f172a;
            border-radius: 12px;

            font-size: 25px;
            margin-bottom: 20px;
        }

        .project-card h2 {
            margin-bottom: 10px;
        }

        .project-card p {
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .technologies {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }

        .technology {
            background: #0f172a;
            color: #38bdf8;

            padding: 5px 10px;

            border-radius: 20px;

            font-size: 13px;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            display: inline-block;

            padding: 9px 15px;

            border-radius: 7px;

            text-decoration: none;

            font-size: 14px;
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

        .empty {
            padding: 30px 8%;
        }

        footer {
            text-align: center;
            padding: 30px;

            background: #111827;

            color: #94a3b8;
        }

        @media (max-width: 700px) {

            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 0 8px;
            }

            .header h1 {
                font-size: 36px;
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

            <a href="/">
                Accueil
            </a>

            <a href="/projets">
                Projets
            </a>

            
        </div>

    </nav>


    <section class="header">

        <span>MES RÉALISATIONS</span>

        <h1>Projets & applications web</h1>

        <p>
            Découvrez quelques projets développés dans le cadre
            de mon expérience en développement d'applications web.
        </p>

    </section>




        <section class="projects">

            @foreach ($projets as $projet)

                <article class="project-card">

                    <div class="project-icon">
                        💻
                    </div>

                    <h2>
                        {{ $projet->nom }}
                    </h2>

                    <p>
                        {{ $projet->description }}
                    </p>


                    <div class="technologies">

                        <span class="technology">
                            {{ $projet->techo1 }}
                        </span>

                        <span class="technology">
                            {{ $projet->techo2 }}
                        </span>

                        <span class="technology">
                            {{ $projet->techo3 }}
                        </span>

                    </div>


                    <p>
                        <strong>Statut :</strong>
                        {{ $projet->statut }}
                    </p>


                    <div class="actions">

                        <a
                            href="/"
                            class="btn btn-secondary"
                        >
                            Portfolio
                        </a>

                    </div>

                </article>

            @endforeach

        </section>

    


    <footer>

        © {{ date('Y') }} — Chef de Projet & Développeur Web

    </footer>

</body>

</html>