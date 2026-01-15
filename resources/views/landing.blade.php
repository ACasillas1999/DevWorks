<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Soluciones | DemoLab Colectivo</title>
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
                --bg: #0d0f0e;
                --text: #f1ede6;
                --muted: #a7a093;
                --surface: #151816;
                --surface-strong: #1b1f1c;
                --accent: #f7a03c;
                --accent-2: #53c0b2;
                --accent-3: #f2586d;
                --line: rgba(255, 255, 255, 0.12);
                --shadow: 0 30px 60px rgba(0, 0, 0, 0.45);
                --radius: 24px;
                --mesh-line: rgba(255, 255, 255, 0.07);
                --cta-bg: #f1ede6;
                --cta-text: #151515;
                --panel-a: rgba(22, 24, 22, 0.95);
                --panel-b: rgba(22, 24, 22, 0.8);
            }

            [data-theme="light"] {
                color-scheme: light;
                --bg: #f8f4ec;
                --text: #181818;
                --muted: #5f605e;
                --surface: #ffffff;
                --surface-strong: #ffffff;
                --line: #e3dccf;
                --shadow: 0 24px 50px rgba(17, 24, 39, 0.12);
                --mesh-line: rgba(0, 0, 0, 0.04);
                --cta-bg: #151515;
                --cta-text: #ffffff;
                --panel-a: rgba(255, 255, 255, 0.92);
                --panel-b: rgba(255, 255, 255, 0.7);
            }

            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: "Space Grotesk", "Segoe UI", sans-serif;
                color: var(--text);
                background: var(--bg);
            }

            body::before {
                content: "";
                position: fixed;
                inset: 0;
                background: linear-gradient(120deg, var(--bg), rgba(0, 0, 0, 0));
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

            .backdrop {
                position: fixed;
                inset: 0;
                z-index: 0;
                pointer-events: none;
            }

            .backdrop::after {
                content: "";
                position: absolute;
                inset: 0;
                background: radial-gradient(circle at 70% 10%, rgba(247, 160, 60, 0.22), transparent 45%),
                    radial-gradient(circle at 0% 100%, rgba(83, 192, 178, 0.18), transparent 55%),
                    linear-gradient(120deg, rgba(6, 7, 9, 0.92), rgba(6, 7, 9, 0.7));
                opacity: 0.9;
            }

            .carousel-slide {
                position: absolute;
                inset: -12%;
                opacity: 0;
                transform: scale(1.08);
                filter: saturate(1.15);
                animation: carouselFade 18s infinite;
            }

            .carousel-slide.one {
                background:
                    radial-gradient(circle at 70% 30%, rgba(69, 118, 255, 0.65), transparent 50%),
                    radial-gradient(circle at 20% 80%, rgba(12, 28, 88, 0.9), transparent 55%),
                    linear-gradient(120deg, #0b0f2c 10%, #0b0a1c 70%);
                animation-delay: 0s;
            }

            .carousel-slide.two {
                background:
                    radial-gradient(circle at 30% 40%, rgba(215, 72, 255, 0.55), transparent 55%),
                    radial-gradient(circle at 70% 70%, rgba(18, 140, 255, 0.6), transparent 50%),
                    linear-gradient(120deg, #080b22 15%, #0a0c16 65%);
                animation-delay: 6s;
            }

            .carousel-slide.three {
                background:
                    radial-gradient(circle at 60% 20%, rgba(255, 91, 142, 0.55), transparent 45%),
                    radial-gradient(circle at 30% 80%, rgba(14, 66, 140, 0.7), transparent 55%),
                    linear-gradient(120deg, #080914 10%, #0c0c1a 70%);
                animation-delay: 12s;
            }

            .mesh {
                position: absolute;
                inset: 0;
                background: repeating-linear-gradient(
                    120deg,
                    var(--mesh-line) 0,
                    var(--mesh-line) 1px,
                    transparent 1px,
                    transparent 72px
                );
                opacity: 0.5;
            }

            .page {
                position: relative;
                z-index: 2;
                min-height: 100vh;
                padding: 0 24px 100px;
            }

            .container {
                width: min(1120px, 92vw);
                margin: 0 auto;
            }

            .site-header {
                display: grid;
                grid-template-columns: auto 1fr auto;
                align-items: center;
                gap: 16px;
                padding: 26px 0 12px;
            }

            .brand {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                font-weight: 600;
                letter-spacing: 0.04em;
                text-transform: uppercase;
            }

            .brand-dot {
                width: 14px;
                height: 14px;
                border-radius: 50%;
                background: var(--accent);
                box-shadow: 0 0 0 6px rgba(245, 159, 63, 0.18);
            }

            .nav {
                display: flex;
                flex-wrap: wrap;
                gap: 16px;
                color: var(--muted);
                font-size: 0.95rem;
                justify-content: center;
            }

            .nav a:hover {
                color: var(--text);
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
                background: var(--surface);
                color: var(--text);
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
                box-shadow: 0 0 0 4px rgba(242, 74, 107, 0.2);
            }

            [data-theme="light"] .theme-indicator {
                background: var(--accent-2);
                box-shadow: 0 0 0 4px rgba(74, 196, 182, 0.18);
            }

            .cta {
                padding: 10px 18px;
                border-radius: 999px;
                background: var(--cta-bg);
                color: var(--cta-text);
                font-size: 0.9rem;
                letter-spacing: 0.02em;
            }

            h1,
            h2,
            h3 {
                font-family: "Fraunces", "Georgia", serif;
                margin: 12px 0;
            }

            .hero {
                display: grid;
                grid-template-columns: minmax(0, 0.85fr) minmax(0, 1.15fr);
                grid-template-areas: "rail copy";
                gap: 40px;
                padding: 54px 0 20px;
                align-items: center;
            }

            .hero-copy {
                grid-area: copy;
                max-width: 560px;
            }

            .hero-rail {
                grid-area: rail;
                display: grid;
                gap: 16px;
            }

            .eyebrow {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                font-size: 0.8rem;
                text-transform: uppercase;
                letter-spacing: 0.12em;
                color: var(--muted);
            }

            .eyebrow::before {
                content: "";
                width: 34px;
                height: 2px;
                background: var(--accent);
                border-radius: 999px;
            }

            h1 {
                font-size: clamp(2.6rem, 4.4vw, 4.9rem);
                line-height: 1.02;
                letter-spacing: -0.01em;
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
                box-shadow: 0 12px 20px rgba(247, 160, 60, 0.3);
            }

            .btn-secondary {
                border-color: var(--line);
                background: var(--surface);
            }

            .rail-card {
                position: relative;
                border-radius: 18px;
                padding: 18px;
                background: rgba(10, 12, 20, 0.6);
                border: 1px solid rgba(255, 255, 255, 0.08);
                box-shadow: 0 24px 50px rgba(0, 0, 0, 0.4);
                backdrop-filter: blur(8px);
            }

            .rail-card.active {
                background: linear-gradient(135deg, rgba(247, 160, 60, 0.16), rgba(10, 12, 20, 0.6));
                border-color: rgba(247, 160, 60, 0.3);
            }

            .rail-card.active::before {
                content: "";
                position: absolute;
                left: 0;
                top: 0;
                width: 4px;
                height: 100%;
                border-radius: 12px 0 0 12px;
                background: var(--accent);
            }

            .rail-label {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                font-size: 0.75rem;
                text-transform: uppercase;
                letter-spacing: 0.18em;
                color: var(--muted);
            }

            .rail-label::before {
                content: "";
                width: 22px;
                height: 2px;
                background: var(--accent);
                border-radius: 999px;
            }

            .rail-card h3 {
                margin: 10px 0 8px;
                font-size: 1.05rem;
            }

            .rail-card p {
                margin: 0;
                color: var(--muted);
                font-size: 0.9rem;
            }

            .chip-row {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }

            .chip {
                padding: 8px 14px;
                border-radius: 999px;
                border: 1px solid rgba(255, 255, 255, 0.16);
                background: rgba(255, 255, 255, 0.04);
                font-size: 0.85rem;
            }

            .metrics {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 16px;
                margin: 32px 0 10px;
            }

            .metric-card {
                padding: 18px;
                border-radius: 18px;
                background: var(--surface-strong);
                border: 1px solid var(--line);
            }

            .metric-card strong {
                font-size: 1.4rem;
            }

            .section {
                padding: 56px 0 10px;
            }

            .section-title {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 16px;
                margin-bottom: 22px;
            }

            .section-title h2 {
                margin: 0;
                font-size: clamp(2rem, 3.2vw, 2.9rem);
            }

            .section-title span {
                color: var(--muted);
                font-size: 0.95rem;
            }

            .solution-grid {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 18px;
            }

            .solution-card {
                padding: 20px;
                border-radius: 18px;
                background: var(--surface);
                border: 1px solid var(--line);
                display: grid;
                gap: 10px;
            }

            .solution-card span {
                font-size: 0.85rem;
                color: var(--muted);
            }

            .process-grid {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 18px;
            }

            .process-card {
                padding: 18px;
                border-radius: 18px;
                background: var(--surface);
                border: 1px solid var(--line);
                display: grid;
                gap: 8px;
            }

            .process-card strong {
                font-size: 1.05rem;
            }

            .demo-grid {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 18px;
            }

            .demo-card {
                padding: 1px;
                border-radius: 20px;
                background: linear-gradient(135deg, rgba(74, 196, 182, 0.5), rgba(245, 159, 63, 0.45));
            }

            .demo-inner {
                background: var(--surface);
                border-radius: 19px;
                padding: 18px;
                display: grid;
                gap: 10px;
            }

            .demo-inner a {
                color: var(--accent);
                font-weight: 600;
                font-size: 0.9rem;
            }

            .contact {
                margin-top: 40px;
                padding: 32px;
                border-radius: 24px;
                background: linear-gradient(120deg, rgba(245, 159, 63, 0.12), rgba(74, 196, 182, 0.12));
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
                background: var(--surface);
                border: 1px solid var(--line);
            }

            .contact-card a {
                display: block;
                margin-top: 8px;
                font-weight: 600;
                color: var(--accent);
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

            @keyframes carouselFade {
                0% {
                    opacity: 0;
                    transform: scale(1.08) translate3d(0, 0, 0);
                }
                6% {
                    opacity: 1;
                }
                32% {
                    opacity: 1;
                    transform: scale(1.02) translate3d(24px, -12px, 0);
                }
                38% {
                    opacity: 0;
                }
                100% {
                    opacity: 0;
                    transform: scale(1.08) translate3d(-10px, 16px, 0);
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
            }

            @media (max-width: 980px) {
                .hero {
                    grid-template-columns: 1fr;
                    grid-template-areas:
                        "copy"
                        "rail";
                }

                .metrics,
                .solution-grid,
                .process-grid,
                .demo-grid,
                .contact-grid {
                    grid-template-columns: 1fr;
                }
            }

            @media (max-width: 720px) {
                .site-header {
                    grid-template-columns: 1fr;
                    justify-items: start;
                }

                .header-actions {
                    width: 100%;
                    flex-wrap: wrap;
                    justify-content: flex-start;
                }
            }
        </style>
    </head>
    <body>
        <div class="backdrop">
            <div class="carousel-slide one"></div>
            <div class="carousel-slide two"></div>
            <div class="carousel-slide three"></div>
            <div class="mesh"></div>
        </div>

        <div class="page">
            <div class="container">
                <header class="site-header">
                    <a class="brand" href="#inicio">
                        <span class="brand-dot"></span>
                        DemoLab Colectivo
                    </a>
                    <nav class="nav">
                        <a href="#soluciones">Soluciones</a>
                        <a href="#proceso">Proceso</a>
                        <a href="#muestras">Muestras</a>
                        <a href="#contacto">Contacto</a>
                    </nav>
                    <div class="header-actions">
                        <button class="theme-toggle" type="button" data-theme-toggle>
                            <span class="theme-indicator"></span>
                            <span class="theme-label" data-theme-label>Tema oscuro</span>
                        </button>
                        <a class="cta" href="/demos">Ver catalogo</a>
                    </div>
                </header>

                <main>
                    <section id="inicio" class="hero">
                        <div class="hero-rail reveal" style="--delay: 0.05s;">
                            <div class="rail-card active">
                                <span class="rail-label">Soluciones digitales</span>
                                <h3>Desarrollos listos para operar</h3>
                                <p>Desarrollos a medida, documentacion clara y accesos de muestra para clientes.</p>
                                <div class="chip-row">
                                    <span class="chip">Escalable</span>
                                    <span class="chip">Tiempo corto</span>
                                    <span class="chip">Integraciones</span>
                                    <span class="chip">UX claro</span>
                                </div>
                            </div>
                            <div class="rail-card">
                                <h3>Acceso de muestra</h3>
                                <p>Acceso seguro para validar flujos reales antes de implementar.</p>
                            </div>
                            <div class="rail-card">
                                <h3>Stack validado</h3>
                                <p>Arquitectura estable y soporte continuo para escalar.</p>
                            </div>
                        </div>
                        <div class="hero-copy reveal" style="--delay: 0.15s;">
                            <span class="eyebrow">Desarrollos a medida</span>
                            <h1>Desarrollamos soluciones digitales a medida para tu operacion.</h1>
                            <p>
                                Esta landing es el punto de entrada para entender que resolvemos y como
                                entregamos desarrollos listos para operar, con accesos de muestra para validar.
                            </p>
                            <div class="hero-actions">
                                <a class="btn btn-primary" href="#soluciones">Ver soluciones</a>
                                <a class="btn btn-secondary" href="#contacto">Hablar con nosotros</a>
                            </div>
                        </div>
                    </section>

                    <section class="metrics reveal" style="--delay: 0.2s;">
                        <div class="metric-card">
                            <strong>10-14 dias</strong>
                            <p>Tiempo promedio para desarrollo base funcional.</p>
                        </div>
                        <div class="metric-card">
                            <strong>+9</strong>
                            <p>Categorias de soluciones listas.</p>
                        </div>
                        <div class="metric-card">
                            <strong>24/7</strong>
                            <p>Acceso online a muestras activas.</p>
                        </div>
                    </section>

                    <section id="soluciones" class="section reveal" style="--delay: 0.25s;">
                        <div class="section-title">
                            <h2>Soluciones que ofrecemos</h2>
                            <span>Disenadas para operar y escalar.</span>
                        </div>
                        <div class="solution-grid">
                            <div class="solution-card">
                                <strong>Mensajes internos</strong>
                                <span>Chats, bandejas y flujo de mensajes.</span>
                            </div>
                            <div class="solution-card">
                                <strong>Manejo de pedidos</strong>
                                <span>Estados, tracking y paneles operativos.</span>
                            </div>
                            <div class="solution-card">
                                <strong>Agendas</strong>
                                <span>Reservas, calendarios y recordatorios.</span>
                            </div>
                            <div class="solution-card">
                                <strong>Landing page</strong>
                                <span>Captura de leads y conversion.</span>
                            </div>
                            <div class="solution-card">
                                <strong>Ecommerce</strong>
                                <span>Catalogos, carrito y checkout funcional.</span>
                            </div>
                            <div class="solution-card">
                                <strong>Sistemas personalizados</strong>
                                <span>Flujos a medida para cada cliente.</span>
                            </div>
                            <div class="solution-card">
                                <strong>Optimizacion de procesos</strong>
                                <span>Automatizacion y reduccion de tiempos.</span>
                            </div>
                            <div class="solution-card">
                                <strong>ERP personalizados</strong>
                                <span>Modulos, permisos y reportes.</span>
                            </div>
                            <div class="solution-card">
                                <strong>Reportes y analisis de datos</strong>
                                <span>Dashboards, KPIs y exportacion.</span>
                            </div>
                        </div>
                    </section>

                    <section id="proceso" class="section reveal" style="--delay: 0.3s;">
                        <div class="section-title">
                            <h2>Proceso rapido</h2>
                            <span>De idea a desarrollo sin ruido.</span>
                        </div>
                        <div class="process-grid">
                            <div class="process-card">
                                <strong>1. Descubrimiento</strong>
                                <span>Definimos objetivo, usuarios y alcance.</span>
                            </div>
                            <div class="process-card">
                                <strong>2. Demo funcional</strong>
                                <span>Diseno + desarrollo con data real o simulada.</span>
                            </div>
                            <div class="process-card">
                                <strong>3. Entrega</strong>
                                <span>Documentacion y plan para escalar.</span>
                            </div>
                        </div>
                    </section>

                    <section id="muestras" class="section reveal" style="--delay: 0.35s;">
                        <div class="section-title">
                            <h2>Muestras activas</h2>
                            <span>Son vistas de muestra de nuestros desarrollos.</span>
                        </div>
                        <div class="demo-grid">
                            <div class="demo-card">
                                <div class="demo-inner">
                                    <strong>Pulse CRM</strong>
                                    <p>Pipeline, recordatorios y panel comercial.</p>
                                    <a href="/demos">Ver ejemplo</a>
                                </div>
                            </div>
                            <div class="demo-card">
                                <div class="demo-inner">
                                    <strong>Beacon Store</strong>
                                    <p>Tienda funcional con carrito y checkout.</p>
                                    <a href="/demos">Ver ejemplo</a>
                                </div>
                            </div>
                            <div class="demo-card">
                                <div class="demo-inner">
                                    <strong>Atlas Metrics</strong>
                                    <p>KPIs y reportes con filtros rapidos.</p>
                                    <a href="/demos">Ver ejemplo</a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="contacto" class="section contact reveal" style="--delay: 0.4s;">
                        <div class="contact-grid">
                            <div>
                                <h2>Cuentanos tu necesidad</h2>
                                <p>
                                    Coordinamos una presentacion y te mostramos una solucion adaptada a tu proceso.
                                </p>
                            </div>
                            <div class="contact-card">
                                <strong>Contactanos</strong>
                                <a href="mailto:tuemail@email.com">tuemail@email.com</a>
                                <a href="https://www.linkedin.com/">LinkedIn</a>
                                <a href="https://wa.me/">WhatsApp</a>
                            </div>
                        </div>
                    </section>
                </main>

                <footer class="site-footer">
                    Landing principal para clientes - desarrollos a medida con accesos de muestra.
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
