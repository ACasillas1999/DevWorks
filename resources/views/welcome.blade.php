<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devlopolis - Soluciones de Software Personalizadas</title>
    <link rel="icon" type="image/png" href="/20260115_1242_Image Generation_remix_01kf1fcm11fz8vym3ey0k299wa (1).png">
    <link rel="shortcut icon" type="image/png" href="/20260115_1242_Image Generation_remix_01kf1fcm11fz8vym3ey0k299wa (1).png">
    <meta name="description" content="Desarrollamos software personalizado para tu negocio: WhatsApp Business, E-commerce, ERPs, Logística y más. Demos funcionales en 10-14 días.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Microsoft Clarity -->
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "v1yt0cgxo8");
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #38bdf8;
            --primary-dark: #0b1120;
            --primary-light: #7dd3fc;
            --secondary: #22d3ee;
            --accent: #06b6d4;
            --accent-light: #67e8f9;
            --dark: #e2e8f0;
            --dark-light: #cbd5e1;
            --gray: #94a3b8;
            --gray-light: #a8b3c5;
            --white: #f8fafc;
            --surface-1: #0b1120;
            --surface-2: #0f172a;
            --surface-3: #111827;
            --surface-4: #0b1a2a;
            --bg-gradient: linear-gradient(135deg, #0b1120 0%, #0f172a 45%, #0891b2 100%);
            --bg-gradient-alt: linear-gradient(120deg, #0f172a 0%, #0b2536 50%, #0b1120 100%);
            --text-gradient: linear-gradient(120deg, #7dd3fc 0%, #22d3ee 50%, #38bdf8 100%);
            --spacing-xs: 0.5rem;
            --spacing-sm: 1rem;
            --spacing-md: 2rem;
            --spacing-lg: 4rem;
            --spacing-xl: 6rem;
            --font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.4);
            --shadow-md: 0 6px 12px -2px rgba(0, 0, 0, 0.5);
            --shadow-lg: 0 16px 30px -8px rgba(0, 0, 0, 0.6);
            --shadow-xl: 0 26px 50px -12px rgba(0, 0, 0, 0.7);
            --shadow-glow: 0 0 30px rgba(56, 189, 248, 0.25);
            --shadow-glow-strong: 0 0 45px rgba(34, 211, 238, 0.35);
            --radius-sm: 0.5rem;
            --radius-md: 1rem;
            --radius-lg: 1.5rem;
            --radius-xl: 2rem;
            --transition-fast: 0.2s ease;
            --transition-base: 0.3s ease;
            --transition-slow: 0.5s ease;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: var(--font-family);
            color: var(--dark);
            background: linear-gradient(-45deg, #0b1120, #0f172a, #0b2536, #0b1a2a);
            background-size: 400% 400%;
            animation: gradientShift 12s ease infinite;
            position: relative;
            overflow-x: hidden;
            line-height: 1.6;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                radial-gradient(circle at 20% 50%, rgba(56, 189, 248, 0.12) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(14, 165, 233, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(125, 211, 252, 0.12) 0%, transparent 50%);
            pointer-events: none;
            z-index: 0;
            animation: floatParticles 18s ease-in-out infinite;
        }

        body::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(148, 163, 184, 0.06) 2px, rgba(148, 163, 184, 0.06) 4px),
                repeating-linear-gradient(90deg, transparent, transparent 2px, rgba(148, 163, 184, 0.06) 2px, rgba(148, 163, 184, 0.06) 4px);
            pointer-events: none;
            z-index: 0;
            opacity: 0.5;
            animation: meshMove 30s linear infinite;
        }

        @keyframes meshMove {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(50px, 50px);
            }
        }

        @keyframes floatParticles {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            33% {
                transform: translate(30px, -30px) scale(1.1);
            }
            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--spacing-md);
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: rgba(11, 17, 32, 0.92);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(148, 163, 184, 0.12);
            transition: var(--transition-base);
        }

        .nav-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: var(--spacing-sm) 0;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: var(--spacing-xs);
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--dark);
        }

        .logo-icon {
            font-size: 2rem;
            background: var(--bg-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: inline-block;
        }

        .logo-icon[src] {
            background: none;
            -webkit-background-clip: unset;
            -webkit-text-fill-color: unset;
            background-clip: unset;
        }

        .nav-links {
            display: flex;
            gap: var(--spacing-md);
        }

        .nav-link {
            color: var(--gray);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition-fast);
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: var(--transition-base);
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .cta-button, .primary-button, .secondary-button {
            padding: 0.75rem 1.5rem;
            border-radius: var(--radius-sm);
            font-weight: 600;
            cursor: pointer;
            transition: all var(--transition-base);
            border: none;
            font-size: 1rem;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button, .primary-button {
            background: var(--bg-gradient);
            color: var(--white);
            box-shadow: var(--shadow-md);
        }

        .cta-button:hover, .primary-button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl), var(--shadow-glow);
        }

        .secondary-button {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .secondary-button:hover {
            background: var(--primary);
            color: var(--white);
            transform: translateY(-2px);
        }

        .large {
            padding: 1rem 2rem;
            font-size: 1.125rem;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, var(--surface-2) 0%, var(--surface-4) 100%);
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            background-image: url('/darck_hero_.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 0;
        }

        .hero-bg::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(8, 145, 178, 0.35) 0%, rgba(6, 182, 212, 0.25) 50%, rgba(11, 17, 32, 0.85) 100%);
            z-index: 1;
        }

        .hero-bg::after {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(circle at 20% 30%, rgba(6, 182, 212, 0.25) 0%, transparent 2%),
                radial-gradient(circle at 60% 70%, rgba(56, 189, 248, 0.25) 0%, transparent 2%),
                radial-gradient(circle at 80% 20%, rgba(14, 165, 233, 0.25) 0%, transparent 2%),
                radial-gradient(circle at 30% 80%, rgba(125, 211, 252, 0.25) 0%, transparent 2%),
                radial-gradient(circle at 90% 60%, rgba(6, 182, 212, 0.25) 0%, transparent 2%),
                radial-gradient(circle at 10% 50%, rgba(56, 189, 248, 0.25) 0%, transparent 2%),
                radial-gradient(circle at 50% 40%, rgba(14, 165, 233, 0.25) 0%, transparent 2%),
                radial-gradient(circle at 70% 90%, rgba(125, 211, 252, 0.25) 0%, transparent 2%);
            background-size: 100% 100%;
            z-index: 2;
            animation: particlesFloat 15s ease-in-out infinite;
        }

        @keyframes particlesFloat {
            0%, 100% {
                transform: translate(0, 0);
                opacity: 0.6;
            }
            25% {
                transform: translate(10px, -10px);
                opacity: 0.8;
            }
            50% {
                transform: translate(-5px, 5px);
                opacity: 0.7;
            }
            75% {
                transform: translate(8px, -8px);
                opacity: 0.9;
            }
        }

        /* Tech Particles */
        .particles-canvas {
            position: absolute;
            inset: 0;
            z-index: 2;
            pointer-events: none;
        }

        .particles-container {
            position: absolute;
            inset: 0;
            z-index: 3;
            pointer-events: none;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(6, 182, 212, 0.8);
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(6, 182, 212, 0.8),
                        0 0 20px rgba(6, 182, 212, 0.5),
                        0 0 30px rgba(6, 182, 212, 0.3);
            animation: particleMove linear infinite;
        }

        @keyframes particleMove {
            0% {
                transform: translate(0, 0);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translate(var(--tx), var(--ty));
                opacity: 0;
            }
        }

        .hero-bg::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(8, 145, 178, 0.2) 0%, transparent 70%);
            border-radius: 50%;
            animation: floatSlow 20s ease-in-out infinite;
        }

        .hero-bg::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(6, 182, 212, 0.18) 0%, transparent 70%);
            border-radius: 50%;
            animation: floatSlow 15s ease-in-out infinite reverse;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes floatSlow {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -30px) rotate(120deg); }
            66% { transform: translate(-20px, 20px) rotate(240deg); }
        }

        @keyframes parallaxFloat3 {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            50% {
                transform: translate(-35px, 30px) scale(1.12);
            }
        }

        @keyframes parallaxFloat4 {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            50% {
                transform: translate(25px, -25px) scale(1.08);
            }
        }

        @keyframes parallaxFloat5 {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            50% {
                transform: translate(40px, -15px) scale(1.1);
            }
        }

        @keyframes parallaxFloat6 {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            50% {
                transform: translate(-30px, 20px) scale(1.13);
            }
        }

        @keyframes colorBendsFlow {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }

        .hero-content {
            text-align: center;
            max-width: 900px;
            animation: fadeInUp 1s ease;
            position: relative;
            z-index: 10;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: var(--spacing-md);
        }

        .hero-title .typing-text {
            display: inline-block;
            overflow: hidden;
            border-right: 3px solid var(--secondary);
            white-space: nowrap;
            animation: typing 2s steps(20) 0.5s forwards, blink 0.75s step-end infinite;
            max-width: 0;
        }

        .hero-title .typing-text.typed {
            border-right: none;
            max-width: 100%;
        }

        @keyframes typing {
            from { max-width: 0; }
            to { max-width: 100%; }
        }

        @keyframes blink {
            50% { border-color: transparent; }
        }

        .gradient-text {
            background: linear-gradient(-45deg, #0891b2, #06b6d4, #0ea5e9, #38bdf8);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientFlow 4s ease infinite;
            display: inline-block;
            opacity: 0;
            transform: translateY(20px);
            animation: gradientFlow 4s ease infinite, fadeInUpGradient 1s ease 2.5s forwards;
        }

        @keyframes gradientFlow {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes fadeInUpGradient {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-subtitle {
            font-size: 1.5rem;
            color: var(--gray);
            margin-bottom: var(--spacing-lg);
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: var(--spacing-lg);
            margin-bottom: var(--spacing-lg);
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            background: var(--text-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-label {
            font-size: 0.875rem;
            color: var(--gray);
            font-weight: 500;
        }

        .hero-cta {
            display: flex;
            gap: var(--spacing-sm);
            justify-content: center;
        }

        .scroll-indicator {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
        }

        .mouse {
            width: 24px;
            height: 40px;
            border: 2px solid var(--primary);
            border-radius: 12px;
            position: relative;
        }

        .mouse::before {
            content: '';
            width: 4px;
            height: 8px;
            background: var(--primary);
            border-radius: 2px;
            position: absolute;
            top: 8px;
            left: 50%;
            transform: translateX(-50%);
            animation: scroll 2s ease-in-out infinite;
        }

        @keyframes scroll {
            0%, 100% { opacity: 0; transform: translateX(-50%) translateY(0); }
            50% { opacity: 1; transform: translateX(-50%) translateY(8px); }
        }

        /* Services Section */
        .cta {
            padding: var(--spacing-xl) 0;
            background: var(--bg-gradient);
            text-align: center;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        .services {
            padding: var(--spacing-xl) 0;
            background: var(--surface-2);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .services::before {
            content: '';
            position: absolute;
            top: 10%;
            right: 5%;
            width: 350px;
            height: 350px;
            background: radial-gradient(circle, rgba(8, 145, 178, 0.06) 0%, transparent 70%);
            border-radius: 50%;
            animation: parallaxFloat3 22s ease-in-out infinite;
        }

        .services::after {
            content: '';
            position: absolute;
            bottom: 15%;
            left: 8%;
            width: 280px;
            height: 280px;
            background: radial-gradient(circle, rgba(6, 182, 212, 0.05) 0%, transparent 70%);
            border-radius: 50%;
            animation: parallaxFloat4 18s ease-in-out infinite;
        }


        .section-header {
            text-align: center;
            margin-bottom: var(--spacing-lg);
            position: relative;
            z-index: 1;
        }

        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease forwards;
        }

        .fade-in-up.delay-1 {
            animation-delay: 0.2s;
        }

        .fade-in-up.delay-2 {
            animation-delay: 0.4s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: var(--spacing-sm);
            background: var(--text-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-subtitle {
            font-size: 1.25rem;
            color: var(--gray);
        }

        /* Hero Featured Card */
        .featured-hero {
            background: var(--bg-gradient);
            border-radius: var(--radius-xl);
            padding: var(--spacing-lg);
            margin-bottom: var(--spacing-lg);
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-xl), var(--shadow-glow-strong);
            transition: all 0.4s ease;
            z-index: 1;
        }

        .featured-hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(56, 189, 248, 0.12) 0%, transparent 70%);
            border-radius: 50%;
        }

        .featured-hero:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl), 0 20px 60px rgba(8, 145, 178, 0.4);
        }

        .featured-content {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--spacing-lg);
            align-items: center;
        }

        .featured-text h3 {
            color: var(--white);
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: var(--spacing-sm);
            line-height: 1.2;
        }

        .featured-text p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.125rem;
            margin-bottom: var(--spacing-md);
            line-height: 1.6;
        }

        .featured-badge-large {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            color: var(--white);
            padding: 0.5rem 1rem;
            border-radius: 999px;
            font-size: 0.875rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: var(--spacing-md);
        }

        .featured-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--spacing-sm);
        }

        .featured-list li {
            color: var(--white);
            padding: 0.5rem 0;
            position: relative;
            padding-left: 1.5rem;
            font-size: 1rem;
        }

        .featured-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 700;
            font-size: 1.2rem;
        }

        .featured-cta {
            background: var(--surface-2);
            color: var(--accent-light);
            padding: 1rem 2rem;
            border-radius: var(--radius-md);
            font-weight: 700;
            font-size: 1.125rem;
            border: 1px solid rgba(34, 211, 238, 0.4);
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
            margin-top: var(--spacing-md);
            text-decoration: none;
            display: inline-block;
        }

        .featured-cta:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: var(--spacing-md);
            position: relative;
            z-index: 1;
        }

        .cta-content {
            max-width: 720px;
            margin: 0 auto;
            background: rgba(15, 23, 42, 0.92);
            padding: var(--spacing-md);
            border-radius: var(--radius-lg);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.45);
            position: relative;
            z-index: 1;
        }

        .service-card {
            background: var(--surface-3);
            padding: var(--spacing-md);
            border-radius: var(--radius-lg);
            border: 1px solid rgba(8, 145, 178, 0.15);
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(30px);
        }

        .featured-hero {
            background: var(--bg-gradient);
            border-radius: var(--radius-xl);
            padding: var(--spacing-lg);
            margin-bottom: var(--spacing-lg);
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-xl), var(--shadow-glow-strong);
            transition: all 0.4s ease;
            z-index: 1;
            opacity: 0;
            transform: translateY(50px);
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--bg-gradient);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: var(--secondary);
        }

        .service-icon {
            font-size: 3rem;
            margin-bottom: var(--spacing-sm);
            display: inline-block;
            transition: transform 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1) rotate(-5deg);
        }

        .service-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: var(--spacing-xs);
            color: var(--dark);
        }

        .service-description {
            color: var(--gray);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: var(--spacing-sm);
        }

        .service-features {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-features li {
            padding: 0.4rem 0;
            color: var(--gray);
            position: relative;
            padding-left: 1.5rem;
            font-size: 0.9rem;
        }

        .service-features li::before {
            content: '→';
            position: absolute;
            left: 0;
            color: var(--secondary);
            font-weight: 700;
        }

        .service-card:hover .service-features li {
            color: var(--dark);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.125rem;
            }

            .hero-stats {
                flex-direction: column;
                gap: var(--spacing-sm);
            }

            .stat-item {
                min-width: 100%;
            }

            .featured-content {
                grid-template-columns: 1fr;
            }

            .featured-list {
                grid-template-columns: 1fr;
            }

            .featured-text h3 {
                font-size: 1.75rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .section-title {
                font-size: 2rem;
            }

            .section-subtitle {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-title .typing-text {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .stat-number {
                font-size: 2rem;
            }

            .stat-label {
                font-size: 0.875rem;
            }

            .featured-text h3 {
                font-size: 1.5rem;
            }

            .featured-text p {
                font-size: 0.95rem;
            }

            .service-title {
                font-size: 1.25rem;
            }

            .service-description {
                font-size: 0.875rem;
            }

            .container {
                padding: 0 1rem;
            }
        }

        .process {
            padding: var(--spacing-xl) 0;
            background: var(--surface-2);
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .process::before {
            content: '';
            position: absolute;
            top: 20%;
            left: -5%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(56, 189, 248, 0.08) 0%, transparent 70%);
            border-radius: 50%;
            animation: parallaxFloat5 24s ease-in-out infinite;
        }

        .process::after {
            content: '';
            position: absolute;
            bottom: 10%;
            right: -3%;
            width: 320px;
            height: 320px;
            background: radial-gradient(circle, rgba(14, 165, 233, 0.07) 0%, transparent 70%);
            border-radius: 50%;
            animation: parallaxFloat6 20s ease-in-out infinite;
        }

        .process-timeline {
            max-width: 100%;
            margin: var(--spacing-lg) auto 0;
            position: relative;
            display: flex;
            gap: var(--spacing-md);
            overflow-x: auto;
            padding: var(--spacing-md) 0 var(--spacing-lg);
            scroll-behavior: smooth;
        }

        .process-timeline::before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--secondary) 0%, var(--accent) 100%);
            z-index: 0;
        }

        .timeline-item {
            min-width: 280px;
            flex: 1;
            position: relative;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .timeline-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .timeline-number {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: var(--bg-gradient);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 800;
            margin: 0 auto var(--spacing-sm);
            box-shadow: var(--shadow-lg), var(--shadow-glow);
            position: relative;
            z-index: 1;
            border: 4px solid var(--surface-2);
        }

        .timeline-content {
            background: var(--surface-3);
            padding: var(--spacing-md);
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-md);
            transition: var(--transition-base);
            text-align: center;
            min-height: 140px;
        }

        .timeline-content:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl), var(--shadow-glow);
        }

        .timeline-content h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: var(--spacing-xs);
            color: var(--dark);
        }

        .timeline-content p {
            color: var(--gray);
            margin: 0;
        }

        /* Process Cards - Vertical Timeline */
        .process-grid {
            display: flex;
            flex-direction: column;
            gap: var(--spacing-xl);
            margin-top: var(--spacing-xl);
            position: relative;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
            padding: var(--spacing-lg) 0;
        }

        .process-grid::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(180deg, var(--secondary) 0%, var(--accent) 50%, var(--secondary) 100%);
            transform: translateX(-50%);
            z-index: 0;
        }

        .process-card {
            background: var(--surface-3);
            padding: var(--spacing-lg);
            border-radius: var(--radius-lg);
            border: 2px solid rgba(8, 145, 178, 0.1);
            transition: all 0.3s ease;
            position: relative;
            width: calc(50% - 40px);
            margin-left: auto;
        }

        .process-card:nth-child(odd) {
            margin-left: 0;
            margin-right: auto;
        }

        .process-card::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 24px;
            height: 24px;
            background: var(--bg-gradient);
            border-radius: 50%;
            border: 4px solid var(--surface-2);
            box-shadow: 0 0 0 3px rgba(8, 145, 178, 0.2);
            z-index: 1;
            transform: translateY(-50%);
        }

        .process-card:nth-child(odd)::after {
            right: -52px;
        }

        .process-card:nth-child(even)::after {
            left: -52px;
        }

        .process-card::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--bg-gradient);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .process-card:hover {
            transform: scale(1.02);
            box-shadow: var(--shadow-xl);
            border-color: rgba(8, 145, 178, 0.3);
        }

        .process-card:hover::before {
            transform: scaleX(1);
        }

        .process-card:hover::after {
            transform: translateY(-50%) scale(1.3);
            box-shadow: 0 0 0 6px rgba(8, 145, 178, 0.3);
        }

        .process-highlight {
            background: linear-gradient(135deg, rgba(8, 145, 178, 0.18) 0%, rgba(6, 182, 212, 0.12) 100%);
            border-color: var(--secondary);
            box-shadow: var(--shadow-lg);
        }

        .process-highlight::after {
            width: 32px;
            height: 32px;
            background: linear-gradient(135deg, #0891b2, #06b6d4);
            box-shadow: 0 0 0 4px rgba(8, 145, 178, 0.3), 0 0 20px rgba(8, 145, 178, 0.4);
        }

        .process-badge {
            position: absolute;
            top: var(--spacing-sm);
            right: var(--spacing-sm);
            background: var(--bg-gradient);
            color: var(--white);
            padding: 0.25rem 0.75rem;
            border-radius: var(--radius-sm);
            font-size: 0.75rem;
            font-weight: 600;
        }

        .process-icon {
            font-size: 3rem;
            margin-bottom: var(--spacing-sm);
            display: inline-block;
        }

        .process-step {
            font-size: 0.875rem;
            color: var(--secondary);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: var(--spacing-xs);
        }

        .process-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: var(--spacing-sm);
        }

        .process-description {
            color: var(--gray);
            margin-bottom: var(--spacing-md);
            line-height: 1.6;
        }

        .process-features {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .process-features li {
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
            color: var(--gray);
            font-size: 0.95rem;
        }

        .process-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--secondary);
            font-weight: 700;
        }

        /* Mobile responsive for timeline */
        @media (max-width: 768px) {
            .process-grid::before {
                left: 20px;
            }

            .process-card {
                width: calc(100% - 60px);
                margin-left: 60px !important;
                margin-right: 0 !important;
            }

            .process-card::after {
                left: -50px !important;
                right: auto !important;
            }
        }

        .process-note {
            max-width: 800px;
            margin: var(--spacing-lg) auto 0;
            text-align: center;
            padding: var(--spacing-md);
            background: linear-gradient(135deg, rgba(8, 145, 178, 0.1), rgba(6, 182, 212, 0.05));
            border-radius: var(--radius-md);
            border-left: 4px solid var(--secondary);
        }

        .process-note strong {
            color: var(--secondary);
            font-size: 1.1rem;
            display: block;
            margin-bottom: 0.5rem;
        }

        .process-note p {
            color: var(--gray);
            margin: 0;
        }

        /* Process Section - Interactive Stepper */
        .process {
            padding: var(--spacing-xl) 0;
            background: linear-gradient(135deg, var(--surface-2) 0%, var(--surface-4) 100%);
            min-height: 100vh;
        }

        .process .container {
            max-width: 1480px;
        }

        .process-interactive {
            margin-top: var(--spacing-xl);
            display: grid;
            gap: var(--spacing-lg);
            position: relative;
            z-index: 1;
            grid-template-columns: minmax(260px, 360px) minmax(0, 1fr);
            grid-template-areas:
                "tabs panels"
                "progress panels"
                "timer panels";
            align-items: start;
            column-gap: var(--spacing-xl);
            row-gap: var(--spacing-md);
        }

        .process-tablist {
            grid-area: tabs;
            display: flex;
            flex-direction: column;
            gap: var(--spacing-md);
            max-width: none;
            margin: 0;
        }

        .process-tab {
            appearance: none;
            border: 1px solid rgba(148, 163, 184, 0.2);
            background: var(--surface-3);
            border-radius: var(--radius-lg);
            padding: 1.4rem 1.7rem;
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            gap: 0.75rem;
            text-align: left;
            cursor: pointer;
            transition: var(--transition-base);
            position: relative;
            overflow: hidden;
            color: var(--dark);
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.45);
        }

        .process-tab::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(8, 145, 178, 0.12);
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
            z-index: 0;
        }

        .process-tab > * {
            position: relative;
            z-index: 1;
        }

        .process-tab:hover::after {
            opacity: 1;
        }

        .process-tab:hover {
            transform: translateY(-1px);
            box-shadow: 0 16px 30px rgba(0, 0, 0, 0.55);
        }

        .process-tab.active {
            background: var(--surface-2);
            color: var(--white);
            border-color: rgba(34, 211, 238, 0.6);
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.55);
            transform: translateY(-2px);
        }

        .process-tab:focus-visible {
            outline: 3px solid rgba(8, 145, 178, 0.3);
            outline-offset: 3px;
        }

        .process-tab .tab-step {
            font-size: 0.75rem;
            letter-spacing: 0.18em;
            font-weight: 700;
            opacity: 0.65;
            text-transform: uppercase;
        }

        .process-tab .tab-title {
            font-size: 1.1rem;
            font-weight: 600;
        }

        .process-tab .tab-icon {
            width: 52px;
            height: 52px;
            border-radius: 16px;
            background: rgba(148, 163, 184, 0.12);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: var(--dark);
        }

        .process-tab.active .tab-icon {
            background: rgba(255, 255, 255, 0.15);
            color: #ffffff;
        }

        .process-tab .tab-icon .icon {
            width: 24px;
            height: 24px;
        }

        .process-tab .tab-badge {
            position: absolute;
            top: 0.65rem;
            right: 0.8rem;
            background: rgba(8, 145, 178, 0.2);
            color: var(--secondary);
            border: 1px solid rgba(8, 145, 178, 0.35);
            padding: 0.2rem 0.55rem;
            border-radius: 999px;
            font-size: 0.65rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .process-tab.active .tab-badge {
            background: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            border-color: rgba(255, 255, 255, 0.3);
        }

        .icon {
            width: 22px;
            height: 22px;
            stroke: currentColor;
            fill: none;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .process-progress {
            grid-area: progress;
            height: 4px;
            background: rgba(148, 163, 184, 0.18);
            border-radius: 999px;
            overflow: hidden;
            position: relative;
            max-width: none;
            margin: 0;
        }

        .process-progress-bar {
            height: 100%;
            width: 0;
            background: var(--secondary);
            border-radius: inherit;
            transition: width 0.3s ease;
        }

        .process-timer {
            grid-area: timer;
            height: 3px;
            background: rgba(148, 163, 184, 0.12);
            border-radius: 999px;
            overflow: hidden;
            margin-top: 0.35rem;
            max-width: none;
            margin-left: 0;
            margin-right: 0;
        }

        .process-timer-bar {
            height: 100%;
            width: 0;
            background: var(--accent);
            border-radius: inherit;
            transition: width 0ms linear;
        }

        .process-panels {
            position: relative;
            grid-area: panels;
            max-width: none;
            margin: 0;
        }

        .process-panel {
            background: linear-gradient(135deg, var(--surface-3) 0%, var(--surface-2) 100%);
            border-radius: var(--radius-lg);
            padding: 3rem 3.6rem;
            border: 1px solid rgba(148, 163, 184, 0.2);
            box-shadow: 0 24px 48px rgba(0, 0, 0, 0.55);
            width: 100%;
        }

        .process-panel[hidden] {
            display: none;
        }

        .process-panel.active {
            animation: panelIn 0.35s ease;
        }

        @keyframes panelIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .process-panel-header {
            display: flex;
            align-items: center;
            gap: var(--spacing-md);
            margin-bottom: var(--spacing-md);
        }

        .panel-icon {
            width: 68px;
            height: 68px;
            border-radius: 18px;
            background: #0f172a;
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 14px 22px rgba(15, 23, 42, 0.25);
        }

        .panel-icon .icon {
            width: 32px;
            height: 32px;
        }

        .panel-meta {
            display: flex;
            flex-direction: column;
            gap: 0.15rem;
        }

        .panel-step {
            font-size: 0.8rem;
            letter-spacing: 0.15em;
            font-weight: 700;
            color: var(--secondary);
            text-transform: uppercase;
        }

        .panel-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--dark);
            margin: 0;
        }

        .panel-badge {
            margin-left: auto;
            background: #0f172a;
            color: #ffffff;
            padding: 0.25rem 0.75rem;
            border-radius: 999px;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .process-panel .process-description {
            color: var(--gray);
            margin: 0 0 var(--spacing-sm);
            line-height: 1.6;
            font-size: 1.05rem;
        }

        .process-interactive .process-features {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 0.5rem 1rem;
        }

        .process-interactive .process-features li {
            position: relative;
            padding-left: 1.2rem;
            color: var(--dark-light);
            font-size: 1.05rem;
        }

        .process-interactive .process-features li::before {
            content: '+';
            position: absolute;
            left: 0;
            color: var(--secondary);
            font-weight: 700;
        }

        .process-note {
            max-width: 1200px;
            margin: var(--spacing-md) auto 0;
            text-align: center;
            padding: 2.4rem;
            background: linear-gradient(135deg, var(--surface-3) 0%, var(--surface-2) 100%);
            border-radius: var(--radius-md);
            border: 1px solid rgba(148, 163, 184, 0.2);
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.5);
        }

        .note-icon {
            width: 28px;
            height: 28px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.5rem;
            color: var(--secondary);
            vertical-align: middle;
        }

        .process-note strong {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        @media (max-width: 1024px) {
            .process-interactive {
                grid-template-columns: 1fr;
                grid-template-areas:
                    "tabs"
                    "progress"
                    "timer"
                    "panels";
            }
        }

        @media (max-width: 768px) {
            .process-tablist {
                display: flex;
                overflow-x: auto;
                gap: var(--spacing-sm);
                padding-bottom: 0.5rem;
                scroll-snap-type: x mandatory;
                flex-direction: row;
            }

            .process-tab {
                min-width: 220px;
                scroll-snap-align: start;
            }

            .process-panel {
                padding: 1.6rem;
            }

            .process-interactive .process-features {
                grid-template-columns: 1fr;
            }
        }

        .benefits {
            padding: var(--spacing-xl) 0;
            background: var(--surface-2);
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--spacing-md);
        }

        .benefit-card {
            text-align: center;
            padding: var(--spacing-md);
            border-radius: var(--radius-lg);
            transition: var(--transition-base);
            opacity: 0;
            transform: translateY(30px);
        }

        .benefit-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .benefit-card:hover {
            transform: translateY(-5px);
        }

        .benefit-icon {
            font-size: 3.5rem;
            margin-bottom: var(--spacing-sm);
            display: inline-block;
            transition: var(--transition-base);
        }

        .benefit-card:hover .benefit-icon {
            transform: scale(1.2) rotate(10deg);
        }

        .benefit-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: var(--spacing-xs);
            color: var(--dark);
        }

        .benefit-card p {
            color: var(--gray);
        }

        .cta-section {
            padding: var(--spacing-lg) 0;
            background: linear-gradient(135deg, #0b1120 0%, #0f172a 55%, #0b2536 100%);
            color: var(--dark);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(56, 189, 248, 0.2) 0%, transparent 70%);
            border-radius: 50%;
            animation: floatSlow 20s ease-in-out infinite;
        }

        .cta-section::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(14, 165, 233, 0.18) 0%, transparent 70%);
            border-radius: 50%;
            animation: floatSlow 15s ease-in-out infinite reverse;
        }

        .cta-title {
            font-size: clamp(1.75rem, 3.5vw, 2.5rem);
            font-weight: 800;
            margin-bottom: var(--spacing-sm);
            line-height: 1.2;
            position: relative;
            z-index: 1;
            color: var(--dark);
        }

        .cta-subtitle {
            font-size: clamp(0.9rem, 1.8vw, 1.05rem);
            margin-bottom: var(--spacing-md);
            opacity: 0.85;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.5;
            position: relative;
            z-index: 1;
            color: var(--gray);
        }

        .cta-buttons {
            display: flex;
            gap: var(--spacing-md);
            justify-content: center;
            flex-wrap: wrap;
            position: relative;
            z-index: 1;
        }

        .cta-form {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: var(--spacing-sm) var(--spacing-md);
            margin-top: var(--spacing-md);
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .cta-form .form-group:last-of-type {
            grid-column: 1 / -1;
        }

        .form-group label {
            font-weight: 600;
            color: var(--dark);
            font-size: 0.9rem;
        }

        .form-group input,
        .form-group textarea {
            padding: 0.65rem 0.9rem;
            border: 2px solid rgba(148, 163, 184, 0.35);
            border-radius: var(--radius-sm);
            font-size: 0.95rem;
            font-family: var(--font-family);
            transition: var(--transition-base);
            background: var(--surface-3);
            color: var(--dark);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.25);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 80px;
        }

        .submit-button {
            background: var(--bg-gradient);
            color: var(--white);
            padding: 0.85rem 1.75rem;
            border: none;
            border-radius: var(--radius-sm);
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: var(--transition-base);
            margin-top: var(--spacing-xs);
            grid-column: 1 / -1;
            width: 100%;
        }

        .submit-button:hover {
            background: #0b2536;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.45);
        }

        .cta-section .primary-button {
            background: var(--bg-gradient);
            color: var(--white);
        }

        .cta-section .secondary-button {
            background: transparent;
            color: var(--white);
            border-color: var(--white);
        }

        .cta-section .secondary-button:hover {
            background: var(--surface-2);
            color: var(--white);
        }

        .footer {
            background: var(--surface-1);
            color: var(--gray-light);
            padding: var(--spacing-lg) 0 var(--spacing-md);
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: var(--spacing-lg);
            margin-bottom: var(--spacing-md);
        }

        .footer-brand .logo {
            margin-bottom: var(--spacing-sm);
        }

        .footer-brand .logo-text {
            color: var(--white);
        }

        .footer-brand p {
            color: var(--gray);
        }

        .footer-column h4 {
            color: var(--white);
            font-weight: 700;
            margin-bottom: var(--spacing-sm);
        }

        .footer-column a {
            display: block;
            color: var(--gray);
            text-decoration: none;
            margin-bottom: 0.5rem;
            transition: var(--transition-fast);
        }

        .footer-column a:hover {
            color: var(--primary-light);
            transform: translateX(5px);
        }

        .footer-bottom {
            border-top: 1px solid var(--dark-light);
            padding-top: var(--spacing-md);
            text-align: center;
            color: var(--gray);
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.125rem;
            }

            .hero-stats {
                flex-direction: column;
                gap: var(--spacing-sm);
            }

            .hero-cta {
                flex-direction: column;
            }

            .nav-links {
                display: none;
            }

            .section-title {
                font-size: 2rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }

            .cta-title {
                font-size: 2rem;
            }

            .cta-buttons {
                flex-direction: column;
            }

            .cta-form {
                grid-template-columns: 1fr;
            }

            /* Convert horizontal timeline to vertical on mobile */
            .process-timeline {
                flex-direction: column;
                overflow-x: visible;
                padding: var(--spacing-md) 0;
            }

            .process-timeline::before {
                left: 60px;
                right: auto;
                top: 0;
                bottom: 0;
                width: 3px;
                height: auto;
                background: linear-gradient(180deg, var(--secondary) 0%, var(--accent) 100%);
            }

            .timeline-item {
                min-width: auto;
                display: flex;
                gap: var(--spacing-md);
                align-items: flex-start;
            }

            .timeline-number {
                width: 100px;
                height: 100px;
                font-size: 1.5rem;
                margin: 0;
                flex-shrink: 0;
            }

            .timeline-content {
                text-align: left;
                flex: 1;
            }
        }

        @keyframes ripple {
            from {
                opacity: 1;
                transform: scale(0);
            }
            to {
                opacity: 0;
                transform: scale(2);
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <img src="/20260115_1242_Image Generation_remix_01kf1fcm11fz8vym3ey0k299wa (1).png" alt="Devlopolis" class="logo-icon" style="width: 65px; height: 65px; object-fit: contain;">
                    <span class="logo-text">Devlopolis</span>
                </div>
                <div class="nav-links">
                    <a href="#servicios" class="nav-link">Servicios</a>
                    <a href="#proceso" class="nav-link">Proceso</a>
                    <a href="#contacto" class="nav-link">Contacto</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg"></div>
        <canvas id="particlesCanvas" class="particles-canvas"></canvas>
        <div class="particles-container"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <span class="typing-text">Software Personalizado</span><br>
                    <span class="gradient-text">Para Tu Negocio</span>
                </h1>
                <p class="hero-subtitle">
                    Transformamos tus procesos con soluciones tecnológicas escalables y eficientes
                </p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number" data-target="14">0</div>
                        <div class="stat-label">Días para demo funcional</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="100" data-suffix="%">0</div>
                        <div class="stat-label">Escalable</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="24" data-suffix="/7">0</div>
                        <div class="stat-label">Soporte</div>
                    </div>
                </div>
                <div class="hero-cta">
                    <a href="https://wa.me/523331679990?text=Hola,%20quiero%20una%20app%20web%20personalizada" target="_blank" class="primary-button">Comunicate Ahora</a>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="mouse"></div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicios" class="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title fade-in-up">Desarrollo de Software y Aplicaciones Web</h2>
                <p class="section-subtitle fade-in-up delay-1">Desarrollamos aplicaciones web a la medida, fusionando estrategia, diseño, tecnología y experiencia de usuario.</p>
            </div>

            <!-- Featured Hero Card -->
            <div class="featured-hero">
                <div class="featured-content">
                    <div class="featured-text">
                        <h3 class="fade-in-up">De la Idea al Lanzamiento</h3>
                        <p>Desde la planificación hasta el despliegue en producción, te acompañamos en cada etapa para construir productos escalables, seguros y listos para monetizar.</p>
                        <p>No solo programamos aplicaciones: creamos soluciones digitales con valor de negocio, arquitectura profesional y una experiencia que tus usuarios aman.</p>
                        <a href="https://wa.me/523331679990?text=Hola,%20me%20interesa%20solicitar%20una%20consultoría%20gratuita" target="_blank" class="featured-cta">Solicitar Consultoría Gratuita</a>
                    </div>
                    <div class="featured-list-container">
                        <ul class="featured-list">
                            <li>Escalabilidad</li>
                            <li>Rendimiento</li>
                            <li>Seguridad</li>
                            <li>Diseño UI/UX</li>
                            <li>Manejo Integral de Errores</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Value Proposition -->
            <div class="value-proposition" style="text-align: center; margin: var(--spacing-lg) 0;">
                <h3 style="font-size: 2rem; font-weight: 700; margin-bottom: var(--spacing-sm); color: var(--dark);" class="fade-in-up">Propuesta de Valor</h3>
                <p style="font-size: 1.25rem; color: var(--gray);">Transformamos ideas en aplicaciones web que generan resultados</p>
            </div>

            <!-- Services Grid -->
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">🎨</div>
                    <h3 class="service-title">Diseño centrado en el usuario</h3>
                    <p class="service-description">Interfaces intuitivas que retienen usuarios y mejoran la experiencia.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">⚙️</div>
                    <h3 class="service-title">Desarrollo robusto y escalable</h3>
                    <p class="service-description">Arquitecturas preparadas para crecer con tu negocio.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">🔗</div>
                    <h3 class="service-title">Integraciones y APIs</h3>
                    <p class="service-description">Conectamos tu app con pagos, sistemas y notificaciones.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">🛠️</div>
                    <h3 class="service-title">Soporte & mejora continua</h3>
                    <p class="service-description">Mantenimiento, actualizaciones y optimización constante.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="proceso" class="process">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title fade-in-up">Nuestro Proceso</h2>
                <p class="section-subtitle">De la idea a la implementaci&oacute;n en tiempo r&eacute;cord</p>
            </div>

            <div class="process-interactive">
                <div class="process-tablist" role="tablist" aria-label="Pasos del proceso">
                    <button type="button" class="process-tab active" role="tab" id="process-tab-1" aria-controls="process-panel-1" aria-selected="true" data-step="1">
                        <span class="tab-step">Paso 1</span>
                        <span class="tab-title">An&aacute;lisis</span>
                        <span class="tab-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" class="icon">
                                <circle cx="11" cy="11" r="7"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </span>
                    </button>
                    <button type="button" class="process-tab" role="tab" id="process-tab-2" aria-controls="process-panel-2" aria-selected="false" data-step="2">
                        <span class="tab-step">Paso 2</span>
                        <span class="tab-title">Dise&ntilde;o</span>
                        <span class="tab-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" class="icon">
                                <path d="M12 20h9"></path>
                                <path d="M16.5 3.5a2.1 2.1 0 013 3L7 19l-4 1 1-4 12.5-12.5z"></path>
                            </svg>
                        </span>
                    </button>
                    <button type="button" class="process-tab" role="tab" id="process-tab-3" aria-controls="process-panel-3" aria-selected="false" data-step="3">
                        <span class="tab-step">Paso 3</span>
                        <span class="tab-title">Demo</span>
                        <span class="tab-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" class="icon">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polygon points="10 8 16 12 10 16 10 8"></polygon>
                            </svg>
                        </span>
                        <span class="tab-badge">R&aacute;pido</span>
                    </button>
                    <button type="button" class="process-tab" role="tab" id="process-tab-4" aria-controls="process-panel-4" aria-selected="false" data-step="4">
                        <span class="tab-step">Paso 4</span>
                        <span class="tab-title">Implementaci&oacute;n</span>
                        <span class="tab-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" class="icon">
                                <line x1="4" y1="21" x2="4" y2="14"></line>
                                <line x1="4" y1="10" x2="4" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="12"></line>
                                <line x1="12" y1="8" x2="12" y2="3"></line>
                                <line x1="20" y1="21" x2="20" y2="16"></line>
                                <line x1="20" y1="12" x2="20" y2="3"></line>
                                <line x1="1" y1="14" x2="7" y2="14"></line>
                                <line x1="9" y1="8" x2="15" y2="8"></line>
                                <line x1="17" y1="16" x2="23" y2="16"></line>
                            </svg>
                        </span>
                    </button>
                    <button type="button" class="process-tab" role="tab" id="process-tab-5" aria-controls="process-panel-5" aria-selected="false" data-step="5">
                        <span class="tab-step">Paso 5</span>
                        <span class="tab-title">Escala</span>
                        <span class="tab-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" class="icon">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                <polyline points="17 6 23 6 23 12"></polyline>
                            </svg>
                        </span>
                    </button>
                </div>

                <div class="process-progress" aria-hidden="true">
                    <span class="process-progress-bar"></span>
                </div>

                <div class="process-timer" aria-hidden="true">
                    <span class="process-timer-bar"></span>
                </div>

                <div class="process-panels">
                    <div class="process-panel active" role="tabpanel" id="process-panel-1" aria-labelledby="process-tab-1" data-step="1">
                        <div class="process-panel-header">
                            <span class="panel-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" class="icon">
                                    <circle cx="11" cy="11" r="7"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </span>
                            <div class="panel-meta">
                                <span class="panel-step">Paso 1</span>
                                <h3 class="panel-title">An&aacute;lisis de Necesidades</h3>
                            </div>
                        </div>
                        <p class="process-description">Entendemos tu negocio, objetivos y desaf&iacute;os espec&iacute;ficos para crear la soluci&oacute;n perfecta.</p>
                        <ul class="process-features">
                            <li>Reuni&oacute;n inicial gratuita</li>
                            <li>An&aacute;lisis de requerimientos</li>
                            <li>Definici&oacute;n de alcance</li>
                        </ul>
                    </div>

                    <div class="process-panel" role="tabpanel" id="process-panel-2" aria-labelledby="process-tab-2" data-step="2" hidden>
                        <div class="process-panel-header">
                            <span class="panel-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" class="icon">
                                    <path d="M12 20h9"></path>
                                    <path d="M16.5 3.5a2.1 2.1 0 013 3L7 19l-4 1 1-4 12.5-12.5z"></path>
                                </svg>
                            </span>
                            <div class="panel-meta">
                                <span class="panel-step">Paso 2</span>
                                <h3 class="panel-title">Dise&ntilde;o de Soluci&oacute;n</h3>
                            </div>
                        </div>
                        <p class="process-description">Creamos un plan personalizado, escalable y alineado con tu visi&oacute;n de negocio.</p>
                        <ul class="process-features">
                            <li>Arquitectura t&eacute;cnica</li>
                            <li>Dise&ntilde;o UI/UX</li>
                            <li>Propuesta detallada</li>
                        </ul>
                    </div>

                    <div class="process-panel" role="tabpanel" id="process-panel-3" aria-labelledby="process-tab-3" data-step="3" hidden>
                        <div class="process-panel-header">
                            <span class="panel-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" class="icon">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                </svg>
                            </span>
                            <div class="panel-meta">
                                <span class="panel-step">Paso 3</span>
                                <h3 class="panel-title">Demo Funcional</h3>
                            </div>
                            <span class="panel-badge">R&aacute;pido</span>
                        </div>
                        <p class="process-description">En 10-14 d&iacute;as tendr&aacute;s una versi&oacute;n funcional para probar y validar la soluci&oacute;n.</p>
                        <ul class="process-features">
                            <li>Prototipo funcional</li>
                            <li>Feedback temprano</li>
                            <li>Ajustes r&aacute;pidos</li>
                        </ul>
                    </div>

                    <div class="process-panel" role="tabpanel" id="process-panel-4" aria-labelledby="process-tab-4" data-step="4" hidden>
                        <div class="process-panel-header">
                            <span class="panel-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" class="icon">
                                    <line x1="4" y1="21" x2="4" y2="14"></line>
                                    <line x1="4" y1="10" x2="4" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12" y2="3"></line>
                                    <line x1="20" y1="21" x2="20" y2="16"></line>
                                    <line x1="20" y1="12" x2="20" y2="3"></line>
                                    <line x1="1" y1="14" x2="7" y2="14"></line>
                                    <line x1="9" y1="8" x2="15" y2="8"></line>
                                    <line x1="17" y1="16" x2="23" y2="16"></line>
                                </svg>
                            </span>
                            <div class="panel-meta">
                                <span class="panel-step">Paso 4</span>
                                <h3 class="panel-title">Implementaci&oacute;n</h3>
                            </div>
                        </div>
                        <p class="process-description">Desarrollo completo con feedback continuo y entregas incrementales.</p>
                        <ul class="process-features">
                            <li>Desarrollo &aacute;gil</li>
                            <li>Pruebas continuas</li>
                            <li>Comunicaci&oacute;n constante</li>
                        </ul>
                    </div>

                    <div class="process-panel" role="tabpanel" id="process-panel-5" aria-labelledby="process-tab-5" data-step="5" hidden>
                        <div class="process-panel-header">
                            <span class="panel-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" class="icon">
                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                    <polyline points="17 6 23 6 23 12"></polyline>
                                </svg>
                            </span>
                            <div class="panel-meta">
                                <span class="panel-step">Paso 5</span>
                                <h3 class="panel-title">Soporte & Escalabilidad</h3>
                            </div>
                        </div>
                        <p class="process-description">Crecemos contigo, adapt&aacute;ndonos a tus necesidades y escalando tu soluci&oacute;n.</p>
                        <ul class="process-features">
                            <li>Soporte 24/7</li>
                            <li>Actualizaciones</li>
                            <li>Mejora continua</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="process-note">
                <strong>
                    <span class="note-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" class="icon">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </span>
                    Desarrollo Colaborativo
                </strong>
                <p>Trabajamos en conjunto con los usuarios finales durante todo el proceso de desarrollo para garantizar un ajuste 100% a tus necesidades espec&iacute;ficas. Tu feedback es parte fundamental de cada etapa.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contacto" class="cta-section">
        <div class="container">
            <div class="cta-content fade-in-up">
                <h2 class="cta-title">¿Listo para Transformar tu Negocio?</h2>
                <p class="cta-subtitle">Completa el formulario y nos pondremos en contacto contigo en menos de 24 horas.</p>
                <form class="cta-form" action="https://formsubmit.co/info@devlopolis.com" method="POST">
                    <!-- FormSubmit Configuration -->
                    <input type="hidden" name="_subject" value="Nueva solicitud desde Devlopolis">
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_template" value="table">
                    <input type="text" name="_honey" style="display:none">

                    <div class="form-group">
                        <label for="name">Nombre completo *</label>
                        <input type="text" id="name" name="name" required placeholder="Tu nombre">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico *</label>
                        <input type="email" id="email" name="email" required placeholder="tu@email.com">
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="tel" id="phone" name="phone" placeholder="333 123 4567">
                    </div>
                    <div class="form-group">
                        <label for="message">Cuéntanos sobre tu proyecto *</label>
                        <textarea id="message" name="message" required placeholder="Describe brevemente qué necesitas..."></textarea>
                    </div>
                    <button type="submit" class="submit-button">Enviar Solicitud</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="logo">
                        <img src="/20260115_1242_Image Generation_remix_01kf1fcm11fz8vym3ey0k299wa (1).png" alt="Devlopolis" class="logo-icon" style="width: 65px; height: 65px; object-fit: contain;">
                        <span class="logo-text">Devlopolis</span>
                    </div>
                    <p>Soluciones de software personalizadas para impulsar tu negocio</p>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h4>Servicios</h4>
                        <span>WhatsApp & Ventas</span>
                        <span>E-commerce</span>
                        <span>ERPs</span>
                        <span>Logística</span>
                    </div>
                    <div class="footer-column">
                        <h4>Empresa</h4>
                        <span>Proceso</span>
                        <span>Contacto</span>
                    </div>
                    <div class="footer-column">
                        <h4>Contacto</h4>
                        <a href="mailto:info@devlopolis.com">info@devlopolis.com</a>
                        <a href="tel:+523331679990">+52 333 167 9990</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>2026 Devlopolis. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Animate stat numbers on page load
        function animateCounter(element, target, duration = 2000) {
            const suffix = element.getAttribute('data-suffix') || '';
            const start = 0;
            const increment = target / (duration / 16); // 60fps
            let current = start;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current) + suffix;
            }, 16);
        }

        // Start animations when page loads
        window.addEventListener('load', () => {
            const statNumbers = document.querySelectorAll('.stat-number[data-target]');
            statNumbers.forEach((stat, index) => {
                const target = parseInt(stat.getAttribute('data-target'));
                // Stagger the animations
                setTimeout(() => {
                    animateCounter(stat, target, 2000);
                }, index * 200);
            });

            // Remove typing cursor after animation
            const typingText = document.querySelector('.typing-text');
            if (typingText) {
                setTimeout(() => {
                    typingText.classList.add('typed');
                }, 2500); // After typing animation completes
            }

            // Create tech particles with connections
            const particlesContainer = document.querySelector('.particles-container');
            const canvas = document.getElementById('particlesCanvas');

            if (particlesContainer && canvas) {
                const ctx = canvas.getContext('2d');
                const particles = [];
                const maxDistance = 150; // Maximum distance for connections

                // Set canvas size
                function resizeCanvas() {
                    canvas.width = particlesContainer.offsetWidth;
                    canvas.height = particlesContainer.offsetHeight;
                }
                resizeCanvas();
                window.addEventListener('resize', resizeCanvas);

                function createParticle() {
                    const particle = document.createElement('div');
                    particle.className = 'particle';

                    // Random starting position (anywhere on screen)
                    const startX = Math.random() * 100;
                    const startY = Math.random() * 100;
                    particle.style.left = startX + '%';
                    particle.style.top = startY + '%';
                    particle.style.bottom = 'auto';

                    // Random movement direction
                    const angle = Math.random() * Math.PI * 2;
                    const distance = 200 + Math.random() * 300;
                    const moveX = Math.cos(angle) * distance;
                    const moveY = Math.sin(angle) * distance;

                    particle.style.setProperty('--tx', moveX + 'px');
                    particle.style.setProperty('--ty', moveY + 'px');

                    // Slower duration between 15-25 seconds
                    const duration = 15 + Math.random() * 10;
                    particle.style.animationDuration = duration + 's';

                    // Random delay
                    const delay = Math.random() * 3;
                    particle.style.animationDelay = delay + 's';

                    particlesContainer.appendChild(particle);

                    // Track particle data
                    const particleData = {
                        element: particle,
                        startX: (startX / 100) * canvas.width,
                        startY: (startY / 100) * canvas.height,
                        moveX: moveX,
                        moveY: moveY,
                        duration: duration * 1000,
                        delay: delay * 1000,
                        startTime: Date.now()
                    };
                    particles.push(particleData);

                    // Remove particle after animation
                    setTimeout(() => {
                        particle.remove();
                        const index = particles.indexOf(particleData);
                        if (index > -1) particles.splice(index, 1);
                    }, (duration + delay) * 1000);
                }

                // Draw connections between particles
                function drawConnections() {
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    const now = Date.now();

                    // Calculate current positions
                    const positions = particles.map(p => {
                        const elapsed = now - p.startTime - p.delay;
                        if (elapsed < 0) return null;

                        const progress = Math.min(elapsed / p.duration, 1);
                        const x = p.startX + (p.moveX * progress);
                        const y = p.startY + (p.moveY * progress);

                        return { x, y, opacity: progress > 0.1 && progress < 0.9 ? 1 : 0 };
                    }).filter(p => p !== null);

                    // Draw lines between nearby particles
                    ctx.strokeStyle = 'rgba(6, 182, 212, 0.3)';
                    ctx.lineWidth = 1;

                    for (let i = 0; i < positions.length; i++) {
                        for (let j = i + 1; j < positions.length; j++) {
                            const dx = positions[i].x - positions[j].x;
                            const dy = positions[i].y - positions[j].y;
                            const distance = Math.sqrt(dx * dx + dy * dy);

                            if (distance < maxDistance) {
                                const opacity = (1 - distance / maxDistance) * 0.5;
                                ctx.strokeStyle = `rgba(6, 182, 212, ${opacity})`;
                                ctx.beginPath();
                                ctx.moveTo(positions[i].x, positions[i].y);
                                ctx.lineTo(positions[j].x, positions[j].y);
                                ctx.stroke();
                            }
                        }
                    }

                    requestAnimationFrame(drawConnections);
                }

                // Create fewer initial particles (15 instead of 30)
                for (let i = 0; i < 15; i++) {
                    createParticle();
                }

                // Create new particles less frequently (every 1.5 seconds)
                setInterval(() => {
                    createParticle();
                }, 1500);

                // Start drawing connections
                drawConnections();
            }
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar scroll effect
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 0) {
                navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.style.boxShadow = 'none';
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe elements
        document.querySelectorAll('.timeline-item, .benefit-card').forEach(el => {
            observer.observe(el);
        });

        // Interactive process stepper
        const processTabs = Array.from(document.querySelectorAll('.process-tab'));
        const processPanels = Array.from(document.querySelectorAll('.process-panel'));
        const processProgressBar = document.querySelector('.process-progress-bar');
        const processTimerBar = document.querySelector('.process-timer-bar');
        const processInteractive = document.querySelector('.process-interactive');
        const processAutoplayMs = 4500;
        let activeProcessIndex = 0;
        let processAutoplayTimer = null;
        let processAutoplayStart = null;
        let processAutoplayRemaining = processAutoplayMs;

        function setActiveProcess(step, { userInitiated = false } = {}) {
            const index = processTabs.findIndex(tab => tab.dataset.step === step);
            if (index !== -1) {
                activeProcessIndex = index;
            }

            processTabs.forEach(tab => {
                const isActive = tab.dataset.step === step;
                tab.classList.toggle('active', isActive);
                tab.setAttribute('aria-selected', isActive ? 'true' : 'false');
                tab.tabIndex = isActive ? 0 : -1;
            });

            processPanels.forEach(panel => {
                const isActive = panel.dataset.step === step;
                panel.classList.toggle('active', isActive);
                panel.hidden = !isActive;
            });

            if (processProgressBar) {
                const total = processTabs.length;
                const percent = total > 1 ? (activeProcessIndex / (total - 1)) * 100 : 100;
                processProgressBar.style.width = `${percent}%`;
            }

            if (userInitiated) {
                restartProcessAutoplay();
            }
        }

        function animateProcessTimer(fromPercent, duration) {
            if (!processTimerBar) {
                return;
            }
            processTimerBar.style.transition = 'none';
            processTimerBar.style.width = `${fromPercent}%`;
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    processTimerBar.style.transition = `width ${duration}ms linear`;
                    processTimerBar.style.width = '100%';
                });
            });
        }

        function pauseProcessTimer() {
            if (!processTimerBar || !processTimerBar.parentElement) {
                return;
            }
            const parentWidth = processTimerBar.parentElement.offsetWidth;
            const currentWidth = processTimerBar.getBoundingClientRect().width;
            const percent = parentWidth ? (currentWidth / parentWidth) * 100 : 0;
            processTimerBar.style.transition = 'none';
            processTimerBar.style.width = `${percent}%`;
        }

        function scheduleNextProcessChange(delay, fromPercent = 0) {
            if (processTabs.length < 2) {
                return;
            }
            if (processAutoplayTimer) {
                clearTimeout(processAutoplayTimer);
            }
            processAutoplayRemaining = delay;
            processAutoplayStart = Date.now();
            animateProcessTimer(fromPercent, delay);
            processAutoplayTimer = setTimeout(() => {
                activeProcessIndex = (activeProcessIndex + 1) % processTabs.length;
                const nextTab = processTabs[activeProcessIndex];
                if (nextTab) {
                    setActiveProcess(nextTab.dataset.step);
                }
                scheduleNextProcessChange(processAutoplayMs);
            }, delay);
        }

        function restartProcessAutoplay() {
            scheduleNextProcessChange(processAutoplayMs, 0);
        }

        function stopProcessAutoplay() {
            if (!processAutoplayTimer) {
                return;
            }
            clearTimeout(processAutoplayTimer);
            processAutoplayTimer = null;
            if (processAutoplayStart) {
                const elapsed = Date.now() - processAutoplayStart;
                processAutoplayRemaining = Math.max(processAutoplayRemaining - elapsed, 0);
            }
            pauseProcessTimer();
        }

        function resumeProcessAutoplay() {
            if (processTabs.length < 2 || processAutoplayTimer) {
                return;
            }
            const delay = processAutoplayRemaining > 0 ? processAutoplayRemaining : processAutoplayMs;
            const progress = processAutoplayMs > 0
                ? ((processAutoplayMs - processAutoplayRemaining) / processAutoplayMs) * 100
                : 0;
            scheduleNextProcessChange(delay, progress);
        }

        if (processTabs.length) {
            const initialTab = processTabs.find(tab => tab.classList.contains('active')) || processTabs[0];
            if (initialTab) {
                setActiveProcess(initialTab.dataset.step);
            }

            processTabs.forEach((tab, index) => {
                tab.addEventListener('click', () => setActiveProcess(tab.dataset.step, { userInitiated: true }));
                tab.addEventListener('keydown', event => {
                    if (event.key !== 'ArrowRight' && event.key !== 'ArrowLeft') {
                        return;
                    }
                    event.preventDefault();
                    const direction = event.key === 'ArrowRight' ? 1 : -1;
                    const nextIndex = (index + direction + processTabs.length) % processTabs.length;
                    const nextTab = processTabs[nextIndex];
                    if (nextTab) {
                        nextTab.focus();
                        setActiveProcess(nextTab.dataset.step, { userInitiated: true });
                    }
                });
            });

            if (processInteractive) {
                processInteractive.addEventListener('mouseenter', stopProcessAutoplay);
                processInteractive.addEventListener('mouseleave', resumeProcessAutoplay);
                processInteractive.addEventListener('focusin', stopProcessAutoplay);
                processInteractive.addEventListener('focusout', resumeProcessAutoplay);
            }

            restartProcessAutoplay();
        }

        // Button interactions - removed alert for WhatsApp links

        // Enhanced Parallax effect for hero section
        let ticking = false;

        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    const scrolled = window.pageYOffset;
                    const heroBg = document.querySelector('.hero-bg');
                    const heroContent = document.querySelector('.hero-content');
                    const heroStats = document.querySelector('.hero-stats');

                    if (heroBg) {
                        // Background moves slower (parallax effect)
                        heroBg.style.transform = `translateY(${scrolled * 0.5}px)`;
                    }

                    if (heroContent) {
                        // Content moves at normal speed but with slight scale
                        const scale = Math.max(1 - scrolled * 0.0003, 0.9);
                        heroContent.style.transform = `translateY(${scrolled * 0.2}px) scale(${scale})`;
                        heroContent.style.opacity = Math.max(1 - scrolled * 0.002, 0);
                    }

                    if (heroStats) {
                        // Stats move slightly faster for depth
                        heroStats.style.transform = `translateY(${scrolled * -0.15}px)`;
                    }

                    // Parallax effect for services section
                    const servicesSection = document.querySelector('.services');
                    const serviceCards = document.querySelectorAll('.service-card');
                    const featuredHero = document.querySelector('.featured-hero');

                    if (servicesSection) {
                        const servicesSectionTop = servicesSection.offsetTop;
                        const servicesSectionHeight = servicesSection.offsetHeight;
                        const windowHeight = window.innerHeight;

                        // Check if services section is in viewport
                        if (scrolled + windowHeight > servicesSectionTop && scrolled < servicesSectionTop + servicesSectionHeight) {
                            const relativeScroll = scrolled - servicesSectionTop + windowHeight;
                            const parallaxAmount = relativeScroll * 0.3;

                            // Move background slower
                            const servicesBg = servicesSection.querySelector('.services::before');
                            if (servicesSection) {
                                servicesSection.style.backgroundPosition = `center ${parallaxAmount}px`;
                            }

                            // Animate featured hero card
                            if (featuredHero) {
                                const heroProgress = Math.min((relativeScroll / windowHeight) * 1.5, 1);
                                featuredHero.style.transform = `translateY(${(1 - heroProgress) * 50}px)`;
                                featuredHero.style.opacity = heroProgress;
                            }

                            // Stagger animation for service cards
                            serviceCards.forEach((card, index) => {
                                const cardProgress = Math.min(((relativeScroll - (index * 50)) / windowHeight) * 1.5, 1);
                                if (cardProgress > 0) {
                                    card.style.transform = `translateY(${(1 - cardProgress) * 30}px)`;
                                    card.style.opacity = cardProgress;
                                }
                            });
                        }
                    }

                    ticking = false;
                });
                ticking = true;
            }
        });
    </script>
</body>
</html>
