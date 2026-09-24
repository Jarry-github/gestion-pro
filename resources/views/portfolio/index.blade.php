<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Rivo Herilala — Chef de Projet & Développeur Web</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        line-height: 1.6;
        color: #1f2937;
        background: #f8fafc;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    .container {
        width: 90%;
        max-width: 1150px;
        margin: auto;
    }

    /* Navigation */
    nav {
        background: #111827;
        color: white;
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    nav .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        min-height: 70px;
    }

    .logo {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .menu {
        display: flex;
        gap: 25px;
        list-style: none;
    }

    .menu a {
        color: #d1d5db;
        transition: 0.3s;
    }

    .menu a:hover {
        color: white;
    }

    /* Hero */
    .hero {
        background: #1e3a5f;
        color: white;
        padding: 100px 0;
    }

    .hero-content {
        max-width: 800px;
    }

    .hero h1 {
        font-size: 3rem;
        margin-bottom: 15px;
    }

    .hero h2 {
        font-size: 1.5rem;
        font-weight: normal;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 1.1rem;
        color: #e5e7eb;
        margin-bottom: 30px;
    }

    .buttons {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .btn {
        display: inline-block;
        padding: 12px 22px;
        border-radius: 6px;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-primary {
        background: white;
        color: #1e3a5f;
    }

    .btn-secondary {
        border: 1px solid white;
        color: white;
    }

    .btn:hover {
        transform: translateY(-2px);
        opacity: 0.9;
    }

    /* Sections */
    section {
        padding: 75px 0;
    }

    .section-title {
        text-align: center;
        margin-bottom: 45px;
    }

    .section-title h2 {
        font-size: 2rem;
        color: #111827;
        margin-bottom: 10px;
    }

    .section-title p {
        color: #6b7280;
    }

    /* About */
    .about {
        background: white;
    }

    .about-content {
        max-width: 850px;
        margin: auto;
        text-align: center;
    }

    .about-content p {
        margin-bottom: 15px;
        color: #4b5563;
    }

    /* Skills */
    .skills {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 12px;
    }

    .skill {
        background: #e5e7eb;
        padding: 10px 18px;
        border-radius: 20px;
        font-weight: 600;
        color: #374151;
    }

    /* Projects */
    .projects {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }

    .project-card {
        background: white;
        border-radius: 10px;
        padding: 28px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.07);
        transition: 0.3s;
    }

    .project-card:hover {
        transform: translateY(-5px);
    }

    .project-card h3 {
        color: #1e3a5f;
        margin-bottom: 12px;
    }

    .project-card p {
        color: #6b7280;
        margin-bottom: 18px;
    }

    .role {
        font-size: 0.9rem;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .technologies {
        display: flex;
        flex-wrap: wrap;
        gap: 7px;
    }

    .technology {
        background: #eef2ff;
        color: #3730a3;
        padding: 5px 9px;
        border-radius: 5px;
        font-size: 0.8rem;
    }

    /* Contact */
    .contact {
        background: #111827;
        color: white;
        text-align: center;
    }

    .contact h2 {
        margin-bottom: 15px;
    }

    .contact p {
        color: #d1d5db;
        margin-bottom: 25px;
    }

    /* Footer */
    footer {
        background: #030712;
        color: #9ca3af;
        text-align: center;
        padding: 25px 0;
        font-size: 0.9rem;
    }

    /* Mobile */
    @media (max-width: 700px) {
        nav .container {
            flex-direction: column;
            padding: 15px 0;
        }

        .menu {
            margin-top: 10px;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .hero {
            padding: 70px 0;
        }

        .hero h1 {
            font-size: 2.2rem;
        }

        .hero h2 {
            font-size: 1.2rem;
        }
    }
</style>
```

</head>

<body>

```
<!-- Navigation -->
<nav>
    <div class="container">
        <div class="logo">
            Rivo Herilala
        </div>

        <ul class="menu">
            <li><a href="#accueil">Accueil</a></li>
            <li><a href="#apropos">À propos</a></li>
            <li><a href="#competences">Compétences</a></li>
            <li><a href="#projets">Projets</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
</nav>

<!-- Accueil -->
<section class="hero" id="accueil">
    <div class="container">
        <div class="hero-content">

            <h1>Rivo Herilala RATOLOJANAHARY</h1>

            <h2>Chef de Projet & Développeur Web & Lead Developer</h2>

            <p>
                19 ans d'expérience dans l'analyse, la conception,
                le développement et le suivi de projets web.
                Spécialisé principalement dans l'écosystème PHP
                et les applications web métier.
            </p>

            <div class="buttons">
                <a href="#projets" class="btn btn-primary">
                    Voir mes projets
                </a>

                <a href="#contact" class="btn btn-secondary">
                    Me contacter
                </a>
            </div>

        </div>
    </div>
</section>

<!-- À propos -->
<section class="about" id="apropos">
    <div class="container">

        <div class="section-title">
            <h2>À propos de moi</h2>
            <p>Chef de Projet & Développeur Web & Lead Developer</p>
        </div>

        <div class="about-content">

            <p>
                Avec 19 ans d'expérience dans le développement web,
                j'interviens à la fois sur les aspects techniques
                et sur le suivi des projets.
            </p>

            <p>
                Mon expérience couvre l'analyse des besoins,
                la conception, le développement d'applications web,
                l'intégration de services et le suivi des livrables.
            </p>

            <p>
                Je travaille principalement avec PHP, CodeIgniter, Laravel
                les bases de données relationnelles MySQL/PostgreSQL, JavaScript
                et les API web.
            </p>

        </div>
    </div>
</section>

<!-- Compétences -->
<section id="competences">
    <div class="container">

        <div class="section-title">
            <h2>Compétences</h2>
            <p>Technologies et domaines d'intervention</p>
        </div>

        <div class="skills">

            @foreach ($competences as $competence)
                <span class="skill">
                    {{ $competence }}
                </span>
            @endforeach

        </div>
    </div>
</section>

<!-- Projets -->
<section class="about" id="projets">
    <div class="container">

        <div class="section-title">
            <h2>Mes projets</h2>
            <p>Quelques exemples de réalisations et domaines d'intervention</p>
        </div>

        <div class="projects">

            @foreach ($projets as $projet)

                <article class="project-card">

                    <h3>
                        {{ $projet['nom'] }}
                    </h3>

                    <p>
                        {{ $projet['description'] }}
                    </p>

                    <div class="role">
                        Rôle :
                        {{ $projet['role'] }}
                    </div>

                    <div class="technologies">

                        @foreach ($projet['technologies'] as $technologie)

                            <span class="technology">
                                {{ $technologie }}
                            </span>

                        @endforeach

                    </div>

                </article>

            @endforeach

        </div>
    </div>
</section>

<!-- Contact -->
<section class="contact" id="contact">
    <div class="container">

        <h2>Me contacter</h2>

        <p>
            Vous recherchez un Chef de Projet ou un Développeur Web ou u Lead Developer
            pour votre prochain projet ?
        </p>

        <div class="buttons">
            <a href="mailto:jarryinfo@gmail.com"
               class="btn btn-primary">
                Envoyer un email
            </a>

            <a href="https://github.com/Jarry-github"
               target="_blank"
               class="btn btn-secondary">
                Voir mon GitHub
            </a>
        </div>

    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        © {{ date('Y') }} Rivo Herilala —
        Chef de Projet & Développeur Web
    </div>
</footer>
```

</body>
</html>
