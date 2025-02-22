<!-- club_histoire.blade.php -->
@extends('layouts.app')

@section('title', 'Histoire du Club')

@section('content')
<div class="u-main-background">
    <div class="wrapper">
        <div class="col-12">
            <section class="static-content">
                <div class="static-content__content">
                    <div class="static-content__header"></div>
                    <div class="section-nav-container" data-widget="section-nav" data-script="fcb_navigation">
                        <nav class="section-navigation js-section-nav js-nav-container u-hide-tablet">
                            <a href="#" class="section-navigation__text-container js-main-nav-item section-navigation__text-container--active" data-item="0">
                                <span>Le Club Depuis 1899</span>
                            </a>
                            <a href="#" class="section-navigation__text-container js-main-nav-item" data-item="1">
                                <span>Présidents</span>
                            </a>
                            <a href="#" class="section-navigation__text-container js-main-nav-item" data-item="2">
                                <span>Légendes</span>
                            </a>
                            <a href="#" class="section-navigation__text-container js-main-nav-item" data-item="3">
                                <span>Entraîneurs</span>
                            </a>
                        </nav>
                    </div>
                    <article class="static-page">
                        <header class="static-page__header">
                            <h1 class="static-page__title">Histoire: Le Club Depuis 1899</h1>
                            <div class="static-page__summary">Retrouvez décennie par décennie l'histoire et l'évolution de notre club.</div>
                        </header>
                        <section class="static-page__content-container">
                            <div class="static-page__content">
                                <h1>1899-1909 Naissance et Survie</h1>
                                <p>La fondation du Club ASA en 1899 a marqué le début de la pratique sportive...</p>
                                <h1>1910-1920 Premiers succès</h1>
                                <p>Les années 1910 ont été marquées par les premières compétitions et la professionnalisation...</p>
                                <h1>2008-2020 L’Ère des Champions</h1>
                                <p>Durant cette décennie, le Club ASA a remporté de nombreux trophées...</p>
                            </div>
                        </section>
                    </article>
                    <!-- Section des trophées -->
                    <section class="trophies-section">
                        <h2>Nos Trophées</h2>
                        <div class="trophies-gallery">
                            <div class="trophy">
                                <img src="{{ asset('images/trophy1.jpg') }}" alt="Trophée 1">
                                <p>Championnat National 2020</p>
                            </div>
                            <div class="trophy">
                                <img src="{{ asset('images/trophy2.jpg') }}" alt="Trophée 2">
                                <p>Coupe Nationale 2018</p>
                            </div>
                        </div>
                    </section>
                    <!-- Section des légendes du club -->
                    <section class="legends-section">
                        <h2>Les Légendes du Club</h2>
                        <p>Découvrez les joueurs et entraîneurs qui ont marqué l'histoire du club.</p>
                        <ul>
                            <li>Joueur Légendaire 1</li>
                            <li>Joueur Légendaire 2</li>
                            <li>Entraîneur Historique</li>
                        </ul>
                    </section>
                    <!-- Section des présidents du club -->
                    <section class="presidents-section">
                        <h2>Présidents du Club</h2>
                        <p>Depuis sa création, le club a été dirigé par plusieurs présidents influents.</p>
                        <ul>
                            <li>Président 1 (1990-2000)</li>
                            <li>Président 2 (2001-2010)</li>
                            <li>Président 3 (2011-2025)</li>
                        </ul>
                    </section>
                </div>
            </section>
        </div>
    </div>
</div>


@endsection
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".history-sections section");
    const trophies = document.querySelectorAll(".trophy");

    function revealOnScroll() {
        const triggerBottom = window.innerHeight * 0.85;

        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            if (sectionTop < triggerBottom) {
                section.classList.add("visible");
            }
        });

        trophies.forEach(trophy => {
            const trophyTop = trophy.getBoundingClientRect().top;
            if (trophyTop < triggerBottom) {
                trophy.classList.add("visible");
            }
        });
    }

    window.addEventListener("scroll", revealOnScroll);
    revealOnScroll(); // Exécute une fois au chargement
});
</script>