# Gestion Pro — Application Web de gestion de projets

## Présentation

**Gestion Pro** est une application web de démonstration développée avec **Laravel**, permettant de gérer des projets à travers une interface simple et structurée.

Ce projet a été réalisé dans le cadre de ma démarche de mise à niveau sur les technologies modernes de l'écosystème PHP et de Laravel.

Il illustre notamment ma capacité à concevoir une application web, structurer son code, gérer une base de données et mettre en œuvre les opérations CRUD.

## Fonctionnalités

* 📋 Affichage de la liste des projets
* ➕ Création d'un projet
* ✏️ Modification d'un projet
* 🗑️ Suppression d'un projet
* 🔎 Gestion des informations d'un projet
* 📊 Gestion du statut des projets
* 🗄️ Persistance des données dans MySQL
* 🧩 Organisation du projet selon l'architecture Laravel MVC

## Technologies utilisées

* **PHP 8.3**
* **Laravel 13**
* **MySQL**
* **Blade**
* **JavaScript**
* **Vite**
* **HTML / CSS**
* **Git / GitHub**

## Architecture

Le projet utilise l'architecture **MVC (Model-View-Controller)** de Laravel.

Principaux éléments :

```text
app/
├── Http/
│   └── Controllers/
│       └── ProjetController.php
│
├── Models/
│   └── Projet.php
│
database/
└── migrations/
    └── create_projets_table.php

resources/
└── views/
    └── projets/
        ├── create.blade.php
        └── edit.blade.php

routes/
└── web.php
```

## Modèle Projet

Le modèle `Projet` permet notamment de gérer :

* le nom du projet ;
* sa description ;
* son statut.

Les données sont enregistrées dans une base de données MySQL à travers l'ORM **Eloquent** de Laravel.

## Installation

### Prérequis

* PHP 8.3 ou supérieur
* Composer
* MySQL
* Node.js et npm
* Git

### Installation du projet

Cloner le dépôt :

```bash
git clone https://github.com/Jarry-github/gestion-pro.git
cd gestion-pro
```

Installer les dépendances PHP :

```bash
composer install
```

Installer les dépendances JavaScript :

```bash
npm install
```

Créer le fichier d'environnement :

```bash
cp .env.example .env
```

Générer la clé Laravel :

```bash
php artisan key:generate
```

Configurer ensuite les paramètres de connexion à la base de données dans le fichier `.env`.

Exécuter les migrations :

```bash
php artisan migrate
```

Lancer l'application :

```bash
php artisan serve
```

Pour les ressources front-end :

```bash
npm run dev
```

## Objectifs techniques

Ce projet me permet de mettre en pratique et de renforcer mes compétences sur :

* le développement PHP moderne ;
* Laravel et son architecture MVC ;
* l'ORM Eloquent ;
* les migrations et la gestion des bases de données ;
* les opérations CRUD ;
* la conception d'applications web ;
* Git et GitHub ;
* l'organisation et la maintenance du code.

## Profil du développeur

**Chef de Projet & Développeur Web — 19 ans d'expérience**

Expérience dans l'analyse, la conception, le développement et le suivi de projets web.

Compétences principales :

* PHP
* JavaScript
* MySQL / PostgreSQL
* API REST / JSON
* CodeIgniter
* Laravel
* Analyse et conception
* Gestion et suivi de projets web

Ce projet constitue également une démonstration de ma capacité à **m'adapter à de nouvelles technologies et à moderniser mon environnement de développement PHP**.

## Dépôt GitHub

Le code source de ce projet est disponible sur GitHub :

**https://github.com/Jarry-github/gestion-pro**

---

*Projet de démonstration à vocation professionnelle et technique.*
