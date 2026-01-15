<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portafolio | DemoLab Colectivo</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=fraunces:400,600,700|space-grotesk:400,500,600" rel="stylesheet" />
        <script>
            (() => {
                const storageKey = "theme";
                const savedTheme = localStorage.getItem(storageKey);
                const theme = savedTheme === "light" || savedTheme === "dark" ? savedTheme : "dark";
                document.documentElement.dataset.theme = theme;
            })();
        </script>
        <style>
            :root {
                color-scheme: dark;
                --ink: #f4efe6;
                --muted: #b1aa9f;
                --paper: #111210;
                --card: #171a17;
                --card-elevated: #1e211f;
                --card-soft: rgba(255, 255, 255, 0.06);
                --accent: #ef6b35;
                --accent-2: #1f8a8c;
                --accent-3: #f2c14e;
                --line: rgba(255, 255, 255, 0.12);
                --shadow: 0 24px 50px rgba(0, 0, 0, 0.45);
                --radius: 22px;
                --panel-a: rgba(23, 25, 24, 0.96);
                --panel-b: rgba(23, 25, 24, 0.84);
                --cta-bg: #f4efe6;
                --cta-text: #1a1a1a;
                --mesh-line: rgba(255, 255, 255, 0.06);
            }

            [data-theme="light"] {
                color-scheme: light;
                --ink: #151515;
                --muted: #5e605f;
                --paper: #f6f1e7;
                --card: #ffffff;
                --card-elevated: #ffffff;
                --card-soft: rgba(255, 255, 255, 0.7);
                --line: #e2d9cb;
                --shadow: 0 24px 50px rgba(17, 24, 39, 0.12);
                --panel-a: rgba(255, 255, 255, 0.92);
                --panel-b: rgba(255, 255, 255, 0.7);
                --cta-bg: #151515;
                --cta-text: #ffffff;
                --mesh-line: rgba(0, 0, 0, 0.04);
            }

            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: "Space Grotesk", "Segoe UI", sans-serif;
                color: var(--ink);
                background: var(--paper);
            }

            body::before {
                content: "";
                position: fixed;
                inset: 0;
                background: linear-gradient(120deg, var(--paper), rgba(0, 0, 0, 0));
                opacity: 0;
                pointer-events: none;
                z-index: 999;
            }

            body.theme-transition,
            body.theme-transition * {
                transition: background-color 0.6s ease, color 0.6s ease, border-color 0.6s ease, box-shadow 0.6s ease;
            }

            body.theme-wipe::before {
                animation: themeWipe 0.7s cubic-bezier(0.22, 1, 0.36, 1);
            }

            a {
                color: inherit;
                text-decoration: none;
            }

            img {
                max-width: 100%;
                display: block;
            }

            .backdrop {
                position: fixed;
                inset: 0;
                z-index: 0;
                pointer-events: none;
            }

            .orb {
                position: absolute;
                border-radius: 50%;
                filter: blur(0px);
                opacity: 0.65;
                will-change: transform;
            }

            .orb-a {
                width: 420px;
                height: 420px;
                background: radial-gradient(circle at 30% 30%, #fbd2a3 0%, rgba(251, 210, 163, 0) 70%);
                top: -120px;
                right: -80px;
            }

            .orb-b {
                width: 520px;
                height: 520px;
                background: radial-gradient(circle at 30% 30%, rgba(31, 138, 140, 0.35) 0%, rgba(31, 138, 140, 0) 70%);
                bottom: -200px;
                left: -160px;
            }

            .mesh {
                position: absolute;
                inset: 0;
                background: repeating-linear-gradient(
                    120deg,
                    var(--mesh-line) 0,
                    var(--mesh-line) 1px,
                    transparent 1px,
                    transparent 60px
                );
                opacity: 0.4;
                will-change: transform;
            }

            .page {
                position: relative;
                z-index: 2;
                min-height: 100vh;
                padding: 0 24px 80px;
            }

            .parallax-layer {
                transform: translate3d(0, 0, 0);
            }

            .container {
                width: min(1120px, 92vw);
                margin: 0 auto;
            }

            .site-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 16px;
                padding: 28px 0 12px;
            }

            .brand {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                font-weight: 600;
                letter-spacing: 0.02em;
            }

            .brand-dot {
                width: 14px;
                height: 14px;
                border-radius: 50%;
                background: var(--accent);
                box-shadow: 0 0 0 6px rgba(239, 107, 53, 0.15);
            }

            .nav {
                display: flex;
                flex-wrap: wrap;
                gap: 18px;
                font-size: 0.95rem;
                color: var(--muted);
            }

            .nav a:hover {
                color: var(--ink);
            }

            .cta {
                padding: 10px 18px;
                border-radius: 999px;
                background: var(--cta-bg);
                color: var(--cta-text);
                font-size: 0.9rem;
                letter-spacing: 0.02em;
            }

            .header-actions {
                display: flex;
                align-items: center;
                gap: 12px;
            }

            .theme-toggle {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                padding: 10px 16px;
                border-radius: 999px;
                border: 1px solid var(--line);
                background: var(--card);
                color: var(--ink);
                font-size: 0.9rem;
                cursor: pointer;
            }

            .theme-toggle:focus-visible {
                outline: 2px solid var(--accent-2);
                outline-offset: 2px;
            }

            .theme-indicator {
                width: 10px;
                height: 10px;
                border-radius: 50%;
                background: var(--accent-3);
                box-shadow: 0 0 0 4px rgba(242, 193, 78, 0.22);
            }

            [data-theme="light"] .theme-indicator {
                background: var(--accent-2);
                box-shadow: 0 0 0 4px rgba(31, 138, 140, 0.18);
            }

            .hero {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 32px;
                padding: 36px 0 20px;
                align-items: stretch;
            }

            .eyebrow {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                font-size: 0.85rem;
                color: var(--muted);
                text-transform: uppercase;
                letter-spacing: 0.12em;
            }

            .eyebrow::before {
                content: "";
                width: 36px;
                height: 2px;
                background: var(--accent);
                border-radius: 999px;
            }

            h1,
            h2,
            h3 {
                font-family: "Fraunces", "Georgia", serif;
                margin: 12px 0;
            }

            h1 {
                font-size: clamp(2.6rem, 4vw, 4.4rem);
                line-height: 1.05;
            }

            p {
                color: var(--muted);
                line-height: 1.6;
            }

            .hero-actions {
                display: flex;
                flex-wrap: wrap;
                gap: 12px;
                margin-top: 24px;
            }

            .btn {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                padding: 12px 20px;
                border-radius: 14px;
                border: 1px solid transparent;
                font-weight: 600;
                font-size: 0.95rem;
            }

            .btn-primary {
                background: var(--accent);
                color: #fff;
                box-shadow: 0 12px 20px rgba(239, 107, 53, 0.22);
            }

            .btn-secondary {
                border-color: var(--line);
                background: var(--card-soft);
            }

            .hero-panel {
                background: linear-gradient(135deg, var(--panel-a), var(--panel-b));
                border-radius: var(--radius);
                padding: 26px;
                box-shadow: var(--shadow);
                border: 1px solid var(--line);
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                gap: 20px;
            }

            .profile {
                display: flex;
                align-items: center;
                gap: 16px;
            }

            .avatar {
                width: 64px;
                height: 64px;
                border-radius: 18px;
                background: linear-gradient(145deg, #1f8a8c, #76c7c5);
                color: #fff;
                display: grid;
                place-items: center;
                font-weight: 700;
            }

            .profile span {
                display: block;
            }

            .profile small {
                color: var(--muted);
            }

            .availability {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                padding: 6px 12px;
                border-radius: 999px;
                background: rgba(31, 138, 140, 0.12);
                color: #1f8a8c;
                font-weight: 600;
                font-size: 0.85rem;
            }

            .availability::before {
                content: "";
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background: #1f8a8c;
            }

            .quick-list {
                display: grid;
                gap: 10px;
                padding: 0;
                margin: 0;
                list-style: none;
            }

            .quick-list li {
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: 0.95rem;
            }

            .quick-list span {
                color: var(--muted);
            }

            .stats {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 16px;
                margin: 32px 0 10px;
            }

            .stat-card {
                padding: 18px;
                border-radius: 18px;
                background: var(--card-elevated);
                border: 1px solid var(--line);
            }

            .stat-card strong {
                font-size: 1.4rem;
            }

            .program-grid {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 18px;
            }

            .program-card {
                padding: 18px;
                border-radius: 18px;
                background: var(--card);
                border: 1px solid var(--line);
                display: flex;
                flex-direction: column;
                gap: 8px;
            }

            .program-card span {
                font-size: 0.85rem;
                color: var(--muted);
            }

            .section {
                padding: 54px 0 10px;
            }

            .section-title {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 16px;
                margin-bottom: 20px;
            }

            .section-title h2 {
                margin: 0;
                font-size: clamp(2rem, 3.2vw, 2.8rem);
            }

            .section-title span {
                color: var(--muted);
                font-size: 0.95rem;
            }

            .pill-grid {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }

            .pill {
                padding: 8px 14px;
                border-radius: 999px;
                border: 1px solid var(--line);
                background: #fff;
                font-size: 0.9rem;
            }

            .skills-grid {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 26px;
            }

            .skills-card {
                padding: 22px;
                border-radius: 18px;
                background: var(--card);
                border: 1px solid var(--line);
            }

            .project-grid {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 20px;
            }

            .project-card {
                padding: 1px;
                border-radius: 22px;
                background: linear-gradient(135deg, rgba(31, 138, 140, 0.5), rgba(239, 107, 53, 0.45));
            }

            .project-inner {
                height: 100%;
                background: var(--card);
                border-radius: 21px;
                padding: 20px;
                display: flex;
                flex-direction: column;
                gap: 12px;
            }

            .tag {
                font-size: 0.75rem;
                font-weight: 700;
                letter-spacing: 0.08em;
                text-transform: uppercase;
                color: var(--accent);
            }

            .project-meta {
                display: flex;
                gap: 10px;
                flex-wrap: wrap;
                color: var(--muted);
                font-size: 0.85rem;
            }

            .project-actions {
                display: flex;
                gap: 10px;
                flex-wrap: wrap;
                margin-top: 8px;
            }

            .project-actions a {
                padding: 8px 14px;
                border-radius: 999px;
                border: 1px solid var(--line);
                font-size: 0.85rem;
                font-weight: 600;
                background: var(--card);
            }

            .project-actions a.primary {
                background: var(--accent);
                border-color: transparent;
                color: #fff;
            }

            .project-list {
                display: grid;
                gap: 14px;
            }

            .project-row {
                display: grid;
                grid-template-columns: 2fr 1.2fr auto;
                gap: 16px;
                padding: 18px;
                border-radius: 18px;
                background: var(--card);
                border: 1px solid var(--line);
                align-items: center;
            }

            .project-row strong {
                font-size: 1.05rem;
            }

            .project-row p {
                margin: 6px 0 0;
            }

            .project-tags {
                display: flex;
                flex-wrap: wrap;
                gap: 8px;
            }

            .project-row .project-actions {
                margin-top: 0;
                justify-content: flex-end;
            }

            .contact {
                background: linear-gradient(120deg, rgba(239, 107, 53, 0.1), rgba(31, 138, 140, 0.08));
                border-radius: 24px;
                padding: 32px;
                border: 1px solid var(--line);
            }

            .contact-grid {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 24px;
                align-items: center;
            }

            .contact-card {
                padding: 20px;
                border-radius: 18px;
                background: var(--card);
                border: 1px solid var(--line);
            }

            .contact-card a {
                display: block;
                margin-top: 8px;
                font-weight: 600;
                color: var(--accent);
            }

            .helper {
                margin-top: 14px;
                color: var(--muted);
                font-size: 0.9rem;
            }

            .site-footer {
                margin-top: 60px;
                padding-top: 24px;
                border-top: 1px solid var(--line);
                color: var(--muted);
                font-size: 0.9rem;
            }

            .reveal {
                opacity: 0;
                transform: translateY(16px);
                animation-delay: var(--delay, 0s);
            }

            .reveal.is-visible {
                animation: fadeUp 0.8s ease forwards;
            }

            @keyframes fadeUp {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes themeWipe {
                0% {
                    opacity: 0;
                    transform: translateY(12px);
                }
                45% {
                    opacity: 0.85;
                }
                100% {
                    opacity: 0;
                    transform: translateY(0);
                }
            }

            @media (prefers-reduced-motion: reduce) {
                .reveal {
                    animation: none;
                    opacity: 1;
                    transform: none;
                }

                .reveal.is-visible {
                    animation: none;
                }

                .parallax-layer {
                    transform: none;
                }
            }

            @media (max-width: 980px) {
                .hero {
                    grid-template-columns: 1fr;
                }

                .stats {
                    grid-template-columns: 1fr;
                }

                .skills-grid {
                    grid-template-columns: 1fr;
                }

                .project-grid {
                    grid-template-columns: 1fr;
                }

                .program-grid {
                    grid-template-columns: 1fr;
                }

                .project-row {
                    grid-template-columns: 1fr;
                    align-items: flex-start;
                }

                .project-row .project-actions {
                    justify-content: flex-start;
                }

                .contact-grid {
                    grid-template-columns: 1fr;
                }
            }

            @media (max-width: 720px) {
                .site-header {
                    flex-direction: column;
                    align-items: flex-start;
                }

                .nav {
                    gap: 12px;
                }

                .header-actions {
                    width: 100%;
                    justify-content: flex-start;
                    flex-wrap: wrap;
                }
            }
        </style>
    </head>
    <body>
        <div class="backdrop">
            <div class="orb orb-a parallax-layer" data-parallax data-speed="0.35"></div>
            <div class="orb orb-b parallax-layer" data-parallax data-speed="-0.22"></div>
            <div class="mesh parallax-layer" data-parallax data-speed="0.18"></div>
        </div>

        <div class="page">
            <div class="container">
                <header class="site-header">
                    <a class="brand" href="#inicio">
                        <span class="brand-dot"></span>
                        DemoLab Colectivo
                    </a>
                    <nav class="nav">
                        <a href="#muestras">Muestras</a>
                        <a href="#tipos">Tipos</a>
                        <a href="#coleccion">Coleccion</a>
                        <a href="#toolbox">Toolbox</a>
                        <a href="#contacto">Contacto</a>
                    </nav>
                    <div class="header-actions">
                        <button class="theme-toggle" type="button" data-theme-toggle>
                            <span class="theme-indicator"></span>
                            <span class="theme-label" data-theme-label>Tema oscuro</span>
                        </button>
                        <a class="cta" href="mailto:tuemail@email.com">Hablemos</a>
                    </div>
                </header>

                <main>
                    <section id="inicio" class="hero">
                        <div class="hero-text reveal" style="--delay: 0.05s;">
                            <span class="eyebrow">Programas completos</span>
                            <h1>Desarrollos completos con accesos de muestra para clientes.</h1>
                            <p>
                                Este sitio muestra desarrollos. Los accesos de muestra son controlados
                                para revisar flujos, stack y resultados antes de implementacion.
                            </p>
                            <div class="hero-actions">
                                <a class="btn btn-primary" href="#muestras">Ver muestras</a>
                                <a class="btn btn-secondary" href="mailto:tuemail@email.com">Contactar</a>
                            </div>
                        </div>
                        <div class="hero-panel reveal" style="--delay: 0.15s;">
                            <div class="profile">
                                <div class="avatar">DL</div>
                                <div>
                                    <strong>DemoLab Colectivo</strong>
                                    <small>Equipo de desarrollos</small>
                                </div>
                            </div>
                            <span class="availability">Muestras habilitadas</span>
                            <ul class="quick-list">
                                <li><span>Stack base</span>Laravel + Vite</li>
                                <li><span>Hosting</span>Vercel / Render</li>
                                <li><span>Formato</span>Muestras interactivas</li>
                                <li><span>Actualizacion</span>Semanal</li>
                            </ul>
                        </div>
                    </section>

                    <section class="stats reveal" style="--delay: 0.25s;">
                        <div class="stat-card">
                            <strong>12</strong>
                            <p>Programas completos activos.</p>
                        </div>
                        <div class="stat-card">
                            <strong>8</strong>
                            <p>Categorias de producto.</p>
                        </div>
                        <div class="stat-card">
                            <strong>15</strong>
                            <p>Componentes reutilizables.</p>
                        </div>
                    </section>

                    <section id="tipos" class="section reveal" style="--delay: 0.28s;">
                        <div class="section-title">
                            <h2>Tipos de desarrollos</h2>
                            <span>Estas son las categorias de desarrollos que mostramos en el dominio.</span>
                        </div>
                        <div class="program-grid">
                            <div class="program-card">
                                <strong>Mensajes internos</strong>
                                <span>Chats, bandejas y flujo de mensajes.</span>
                            </div>
                            <div class="program-card">
                                <strong>Manejo de pedidos</strong>
                                <span>Estados, tracking y paneles operativos.</span>
                            </div>
                            <div class="program-card">
                                <strong>Agendas</strong>
                                <span>Reservas, calendarios y recordatorios.</span>
                            </div>
                            <div class="program-card">
                                <strong>Landing page</strong>
                                <span>Captura de leads y conversion.</span>
                            </div>
                            <div class="program-card">
                                <strong>Ecommerce</strong>
                                <span>Catalogos, carrito y checkout funcional.</span>
                            </div>
                            <div class="program-card">
                                <strong>Sistemas personalizados</strong>
                                <span>Flujos a medida para cada cliente.</span>
                            </div>
                            <div class="program-card">
                                <strong>Optimizacion de procesos</strong>
                                <span>Automatizacion y reduccion de tiempos.</span>
                            </div>
                            <div class="program-card">
                                <strong>ERPs personalizados</strong>
                                <span>Modulos, permisos y reportes.</span>
                            </div>
                            <div class="program-card">
                                <strong>Reportes y analisis de datos</strong>
                                <span>Dashboards, KPIs y exportacion.</span>
                            </div>
                        </div>
                    </section>

                    <section id="toolbox" class="section reveal" style="--delay: 0.3s;">
                        <div class="section-title">
                            <h2>Toolbox para desarrollos</h2>
                            <span>Stack y herramientas esenciales para desarrollar rapido.</span>
                        </div>
                        <div class="skills-grid">
                            <div class="skills-card">
                                <h3>Stack base</h3>
                                <p>Front, back y automatizacion listos para desarrollos rapidos.</p>
                                <div class="pill-grid">
                                    <span class="pill">Laravel</span>
                                    <span class="pill">Livewire</span>
                                    <span class="pill">Vue</span>
                                    <span class="pill">Tailwind</span>
                                    <span class="pill">Alpine</span>
                                    <span class="pill">APIs</span>
                                    <span class="pill">SQL</span>
                                </div>
                            </div>
                            <div class="skills-card">
                                <h3>Programas esenciales</h3>
                                <p>Herramientas para diseno, versionado y pruebas.</p>
                                <div class="pill-grid">
                                    <span class="pill">Figma</span>
                                    <span class="pill">VS Code</span>
                                    <span class="pill">Git / GitHub</span>
                                    <span class="pill">Postman</span>
                                    <span class="pill">Docker</span>
                                    <span class="pill">Notion</span>
                                    <span class="pill">Slack</span>
                                    <span class="pill">Jira</span>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="muestras" class="section reveal" style="--delay: 0.35s;">
                        <div class="section-title">
                            <h2>Muestras habilitadas</h2>
                            <span>Son vistas de muestra de nuestros desarrollos.</span>
                        </div>
                        <div class="project-grid">
                            <article class="project-card">
                                <div class="project-inner">
                                    <span class="tag">E-commerce</span>
                                    <h3>MarketFlow</h3>
                                    <p>Redisenio de tienda con checkout rapido y catalogo optimizado.</p>
                                    <div class="project-meta">
                                        <span>Live</span>
                                        <span>Laravel + Vue</span>
                                    </div>
                                    <div class="project-actions">
                                        <a class="primary" href="https://demo.example.com" target="_blank" rel="noreferrer">Abrir muestra</a>
                                        <a href="https://github.com/usuario/marketflow" target="_blank" rel="noreferrer">Ver repo</a>
                                    </div>
                                </div>
                            </article>
                            <article class="project-card">
                                <div class="project-inner">
                                    <span class="tag">Dashboard</span>
                                    <h3>NorthPeak Analytics</h3>
                                    <p>Panel de metricas con filtros rapidos y widgets en tiempo real.</p>
                                    <div class="project-meta">
                                        <span>Live</span>
                                        <span>API + Charts</span>
                                    </div>
                                    <div class="project-actions">
                                        <a class="primary" href="https://demo.example.com" target="_blank" rel="noreferrer">Abrir muestra</a>
                                        <a href="https://github.com/usuario/northpeak" target="_blank" rel="noreferrer">Ver repo</a>
                                    </div>
                                </div>
                            </article>
                            <article class="project-card">
                                <div class="project-inner">
                                    <span class="tag">Landing</span>
                                    <h3>Studio Luma</h3>
                                    <p>Sitio modular para agencia creativa con enfoque en leads.</p>
                                    <div class="project-meta">
                                        <span>Live</span>
                                        <span>SEO tecnico</span>
                                    </div>
                                    <div class="project-actions">
                                        <a class="primary" href="https://demo.example.com" target="_blank" rel="noreferrer">Abrir muestra</a>
                                        <a href="https://github.com/usuario/studio-luma" target="_blank" rel="noreferrer">Ver repo</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </section>

                    <section id="coleccion" class="section reveal" style="--delay: 0.4s;">
                        <div class="section-title">
                            <h2>Coleccion completa</h2>
                            <span>Incluye todos tus proyectos con muestra o video.</span>
                        </div>
                        <div class="project-list">
                            <div class="project-row">
                                <div>
                                    <strong>Pulse CRM</strong>
                                    <p>CRM liviano con pipeline, recordatorios y panel de ventas.</p>
                                </div>
                                <div class="project-tags">
                                    <span class="pill">CRM</span>
                                    <span class="pill">Laravel</span>
                                    <span class="pill">Livewire</span>
                                </div>
                                <div class="project-actions">
                                    <a class="primary" href="https://demo.example.com" target="_blank" rel="noreferrer">Muestra</a>
                                    <a href="https://github.com/usuario/pulse-crm" target="_blank" rel="noreferrer">Repo</a>
                                </div>
                            </div>
                            <div class="project-row">
                                <div>
                                    <strong>NOVA Board</strong>
                                    <p>Kanban con drag and drop, etiquetas y atajos de teclado.</p>
                                </div>
                                <div class="project-tags">
                                    <span class="pill">Kanban</span>
                                    <span class="pill">Alpine</span>
                                    <span class="pill">Tailwind</span>
                                </div>
                                <div class="project-actions">
                                    <a class="primary" href="https://demo.example.com" target="_blank" rel="noreferrer">Muestra</a>
                                    <a href="https://github.com/usuario/nova-board" target="_blank" rel="noreferrer">Repo</a>
                                </div>
                            </div>
                            <div class="project-row">
                                <div>
                                    <strong>Atlas Metrics</strong>
                                    <p>Dashboard con KPIs, filtros rapidos y exportacion.</p>
                                </div>
                                <div class="project-tags">
                                    <span class="pill">Dashboard</span>
                                    <span class="pill">Charts</span>
                                    <span class="pill">API</span>
                                </div>
                                <div class="project-actions">
                                    <a class="primary" href="https://demo.example.com" target="_blank" rel="noreferrer">Muestra</a>
                                    <a href="https://github.com/usuario/atlas-metrics" target="_blank" rel="noreferrer">Repo</a>
                                </div>
                            </div>
                            <div class="project-row">
                                <div>
                                    <strong>Beacon Store</strong>
                                    <p>Tienda funcional con catalogo, carrito y pago simulado.</p>
                                </div>
                                <div class="project-tags">
                                    <span class="pill">Ecommerce</span>
                                    <span class="pill">Stripe</span>
                                    <span class="pill">Vue</span>
                                </div>
                                <div class="project-actions">
                                    <a class="primary" href="https://demo.example.com" target="_blank" rel="noreferrer">Muestra</a>
                                    <a href="https://github.com/usuario/beacon-store" target="_blank" rel="noreferrer">Repo</a>
                                </div>
                            </div>
                            <div class="project-row">
                                <div>
                                    <strong>FormPulse</strong>
                                    <p>Landing con formularios, validacion en vivo y analitica.</p>
                                </div>
                                <div class="project-tags">
                                    <span class="pill">Landing</span>
                                    <span class="pill">A/B</span>
                                    <span class="pill">Analytics</span>
                                </div>
                                <div class="project-actions">
                                    <a class="primary" href="https://demo.example.com" target="_blank" rel="noreferrer">Muestra</a>
                                    <a href="https://github.com/usuario/formpulse" target="_blank" rel="noreferrer">Repo</a>
                                </div>
                            </div>
                            <div class="project-row">
                                <div>
                                    <strong>Quarry Docs</strong>
                                    <p>Docs site con busqueda rapida y contenido modular.</p>
                                </div>
                                <div class="project-tags">
                                    <span class="pill">Docs</span>
                                    <span class="pill">Search</span>
                                    <span class="pill">Markdown</span>
                                </div>
                                <div class="project-actions">
                                    <a class="primary" href="https://demo.example.com" target="_blank" rel="noreferrer">Muestra</a>
                                    <a href="https://github.com/usuario/quarry-docs" target="_blank" rel="noreferrer">Repo</a>
                                </div>
                            </div>
                        </div>
                        <p class="helper">Duplica filas para agregar todos tus proyectos y muestras.</p>
                    </section>

                    <section id="contacto" class="section contact reveal" style="--delay: 0.45s;">
                        <div class="contact-grid">
                            <div>
                                <h2>Coordina una presentacion en vivo</h2>
                                <p>
                                    Si quieres probar un proyecto, pedir acceso o colaborar, escribeme y comparto el link.
                                </p>
                            </div>
                            <div class="contact-card">
                                <strong>Contactame</strong>
                                <a href="mailto:tuemail@email.com">tuemail@email.com</a>
                                <a href="https://www.linkedin.com/">LinkedIn</a>
                                <a href="https://github.com/">GitHub</a>
                                <a href="https://wa.me/">WhatsApp</a>
                            </div>
                        </div>
                    </section>
                </main>

                <footer class="site-footer">
                    Portafolio de desarrollos en Laravel - Actualiza los links con tus proyectos reales.
                </footer>
            </div>
        </div>
        <script>
            (() => {
                const storageKey = "theme";
                const root = document.documentElement;
                const toggle = document.querySelector("[data-theme-toggle]");
                const label = document.querySelector("[data-theme-label]");

                if (!toggle) {
                    return;
                }

                const applyLabel = () => {
                    const isDark = (root.dataset.theme || "dark") === "dark";
                    toggle.setAttribute("aria-pressed", String(isDark));
                    if (label) {
                        label.textContent = isDark ? "Tema oscuro" : "Tema claro";
                    }
                };

                applyLabel();

                toggle.addEventListener("click", () => {
                    const isDark = (root.dataset.theme || "dark") === "dark";
                    const nextTheme = isDark ? "light" : "dark";
                    document.body.classList.add("theme-transition", "theme-wipe");
                    root.dataset.theme = nextTheme;
                    localStorage.setItem(storageKey, nextTheme);
                    applyLabel();
                    window.setTimeout(() => {
                        document.body.classList.remove("theme-transition", "theme-wipe");
                    }, 750);
                });
            })();
        </script>
        <script>
            (() => {
                const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
                if (reduceMotion) {
                    return;
                }

                const layers = Array.from(document.querySelectorAll("[data-parallax]"));
                if (!layers.length) {
                    return;
                }

                let ticking = false;

                const update = () => {
                    const y = window.pageYOffset || 0;
                    layers.forEach((layer) => {
                        const speed = parseFloat(layer.dataset.speed || "0");
                        const offsetY = y * speed;
                        const offsetX = y * speed * 0.18;
                        layer.style.transform = `translate3d(${offsetX}px, ${offsetY}px, 0)`;
                    });
                    ticking = false;
                };

                const onScroll = () => {
                    if (!ticking) {
                        window.requestAnimationFrame(update);
                        ticking = true;
                    }
                };

                update();
                window.addEventListener("scroll", onScroll, { passive: true });
                window.addEventListener("resize", update);
            })();
        </script>
        <script>
            (() => {
                const items = Array.from(document.querySelectorAll(".reveal"));
                if (!items.length) {
                    return;
                }

                if (!("IntersectionObserver" in window)) {
                    items.forEach((item) => item.classList.add("is-visible"));
                    return;
                }

                const observer = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add("is-visible");
                                observer.unobserve(entry.target);
                            }
                        });
                    },
                    { rootMargin: "0px 0px -10% 0px", threshold: 0.12 }
                );

                items.forEach((item) => observer.observe(item));
            })();
        </script>
    </body>
</html>
