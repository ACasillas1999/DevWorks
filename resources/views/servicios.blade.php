<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevWorks - Soluciones de Software Personalizadas</title>
    <meta name="description" content="Desarrollamos software personalizado para tu negocio: WhatsApp Business, E-commerce, ERPs, Logística y más. Demos funcionales en 10-14 días.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #0f172a;
            --primary-dark: #020617;
            --primary-light: #1e293b;
            --secondary: #0891b2;
            --accent: #06b6d4;
            --accent-light: #22d3ee;
            --dark: #0f172a;
            --dark-light: #1e293b;
            --gray: #64748b;
            --gray-light: #cbd5e1;
            --white: #ffffff;
            --bg-gradient: linear-gradient(135deg, #0f172a 0%, #0891b2 100%);
            --bg-gradient-alt: linear-gradient(120deg, #0891b2 0%, #06b6d4 50%, #0f172a 100%);
            --spacing-xs: 0.5rem;
            --spacing-sm: 1rem;
            --spacing-md: 2rem;
            --spacing-lg: 4rem;
            --spacing-xl: 6rem;
            --font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            --shadow-glow: 0 0 30px rgba(8, 145, 178, 0.4);
            --shadow-glow-strong: 0 0 40px rgba(6, 182, 212, 0.5);
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
            background: linear-gradient(-45deg, #bae6fd, #7dd3fc, #38bdf8, #0ea5e9);
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
                radial-gradient(circle at 20% 50%, rgba(56, 189, 248, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(14, 165, 233, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(125, 211, 252, 0.2) 0%, transparent 50%);
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
                repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.03) 4px),
                repeating-linear-gradient(90deg, transparent, transparent 2px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.03) 4px);
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
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
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
            background: linear-gradient(135deg, #f8fafc 0%, #e0f2fe 100%);
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            background-image: url('/20260114_1459_Image Generation_simple_compose_01kez4vvm3eb5vdbmbt34r6d85.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 0;
        }

        .hero-bg::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(8, 145, 178, 0.7) 0%, rgba(6, 182, 212, 0.6) 50%, rgba(15, 23, 42, 0.7) 100%);
            z-index: 1;
        }

        .hero-bg::after {
            content: '';
            position: absolute;
            inset: 0;
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(6, 182, 212, 0.4) 0%, transparent 2%),
                radial-gradient(circle at 60% 70%, rgba(56, 189, 248, 0.4) 0%, transparent 2%),
                radial-gradient(circle at 80% 20%, rgba(14, 165, 233, 0.4) 0%, transparent 2%),
                radial-gradient(circle at 30% 80%, rgba(125, 211, 252, 0.4) 0%, transparent 2%),
                radial-gradient(circle at 90% 60%, rgba(6, 182, 212, 0.4) 0%, transparent 2%),
                radial-gradient(circle at 10% 50%, rgba(56, 189, 248, 0.4) 0%, transparent 2%),
                radial-gradient(circle at 50% 40%, rgba(14, 165, 233, 0.4) 0%, transparent 2%),
                radial-gradient(circle at 70% 90%, rgba(125, 211, 252, 0.4) 0%, transparent 2%);
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
            background: radial-gradient(circle, rgba(8, 145, 178, 0.15) 0%, transparent 70%);
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
            background: radial-gradient(circle, rgba(6, 182, 212, 0.12) 0%, transparent 70%);
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
            background: var(--bg-gradient);
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
            background: var(--white);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .services::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(6, 182, 212, 0.08) 0%, transparent 70%);
            border-radius: 50%;
            animation: floatSlow 25s ease-in-out infinite;
        }

        .section-header {
            text-align: center;
            margin-bottom: var(--spacing-lg);
            position: relative;
            z-index: 1;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: var(--spacing-sm);
            background: var(--bg-gradient);
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
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
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
            background: var(--white);
            color: var(--secondary);
            padding: 1rem 2rem;
            border-radius: var(--radius-md);
            font-weight: 700;
            font-size: 1.125rem;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
            margin-top: var(--spacing-md);
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

        .service-card {
            background: var(--white);
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
            background: var(--white);
            position: relative;
            z-index: 1;
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
            border: 4px solid var(--white);
        }

        .timeline-content {
            background: var(--white);
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
            background: var(--white);
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
            border: 4px solid var(--white);
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
            background: linear-gradient(135deg, rgba(8, 145, 178, 0.05) 0%, rgba(6, 182, 212, 0.05) 100%);
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

        .benefits {
            padding: var(--spacing-xl) 0;
            background: var(--white);
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
            padding: var(--spacing-xl) 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: var(--white);
            text-align: center;
        }

        .cta-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: var(--spacing-sm);
        }

        .cta-subtitle {
            font-size: 1.25rem;
            margin-bottom: var(--spacing-md);
            opacity: 0.9;
        }

        .cta-buttons {
            display: flex;
            gap: var(--spacing-sm);
            justify-content: center;
        }

        .cta-section .primary-button {
            background: var(--white);
            color: var(--primary);
        }

        .cta-section .secondary-button {
            background: transparent;
            color: var(--white);
            border-color: var(--white);
        }

        .cta-section .secondary-button:hover {
            background: var(--white);
            color: var(--primary);
        }

        .footer {
            background: var(--dark);
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
                    <span class="logo-icon">⚡</span>
                    <span class="logo-text">DevWorks</span>
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
                    <a href="https://wa.me/523331679990?text=Hola,%20quiero%20una%20app%20web%20personalizada" target="_blank" class="primary-button">Comenzar Ahora</a>
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
                <h2 class="section-title">Desarrollo de Software y Aplicaciones Web</h2>
                <p class="section-subtitle">Desarrollamos aplicaciones web a la medida, fusionando estrategia, diseño, tecnología y experiencia de usuario.</p>
            </div>
            
            <!-- Featured Hero Card -->
            <div class="featured-hero">
                <div class="featured-content">
                    <div class="featured-text">
                        <h3>De la Idea al Lanzamiento</h3>
                        <p>Desde la planificación hasta el despliegue en producción, te acompañamos en cada etapa para construir productos escalables, seguros y listos para monetizar.</p>
                        <p>No solo programamos aplicaciones: creamos soluciones digitales con valor de negocio, arquitectura profesional y una experiencia que tus usuarios aman.</p>
                        <button class="featured-cta">Solicitar Consultoría Gratuita</button>
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
                <h3 style="font-size: 2rem; font-weight: 700; margin-bottom: var(--spacing-sm); color: var(--dark);">Propuesta de Valor</h3>
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
                <h2 class="section-title">Nuestro Proceso</h2>
                <p class="section-subtitle">De la idea a la implementación en tiempo récord</p>
            </div>

            <div class="process-grid">
                <div class="process-card">
                    <div class="process-icon">💡</div>
                    <div class="process-step">Paso 1</div>
                    <h3 class="process-title">Análisis de Necesidades</h3>
                    <p class="process-description">Entendemos tu negocio, objetivos y desafíos específicos para crear la solución perfecta.</p>
                    <ul class="process-features">
                        <li>Reunión inicial gratuita</li>
                        <li>Análisis de requerimientos</li>
                        <li>Definición de alcance</li>
                    </ul>
                </div>

                <div class="process-card">
                    <div class="process-icon">🎨</div>
                    <div class="process-step">Paso 2</div>
                    <h3 class="process-title">Diseño de Solución</h3>
                    <p class="process-description">Creamos un plan personalizado, escalable y alineado con tu visión de negocio.</p>
                    <ul class="process-features">
                        <li>Arquitectura técnica</li>
                        <li>Diseño UI/UX</li>
                        <li>Propuesta detallada</li>
                    </ul>
                </div>

                <div class="process-card process-highlight">
                    <div class="process-badge">⚡ Rápido</div>
                    <div class="process-icon">🚀</div>
                    <div class="process-step">Paso 3</div>
                    <h3 class="process-title">Demo Funcional</h3>
                    <p class="process-description">En 10-14 días tendrás una versión funcional para probar y validar la solución.</p>
                    <ul class="process-features">
                        <li>Prototipo funcional</li>
                        <li>Feedback temprano</li>
                        <li>Ajustes rápidos</li>
                    </ul>
                </div>

                <div class="process-card">
                    <div class="process-icon">⚙️</div>
                    <div class="process-step">Paso 4</div>
                    <h3 class="process-title">Implementación</h3>
                    <p class="process-description">Desarrollo completo con feedback continuo y entregas incrementales.</p>
                    <ul class="process-features">
                        <li>Desarrollo ágil</li>
                        <li>Pruebas continuas</li>
                        <li>Comunicación constante</li>
                    </ul>
                </div>

                <div class="process-card">
                    <div class="process-icon">📈</div>
                    <div class="process-step">Paso 5</div>
                    <h3 class="process-title">Soporte & Escalabilidad</h3>
                    <p class="process-description">Crecemos contigo, adaptándonos a tus necesidades y escalando tu solución.</p>
                    <ul class="process-features">
                        <li>Soporte 24/7</li>
                        <li>Actualizaciones</li>
                        <li>Mejora continua</li>
                    </ul>
                </div>
            </div>
            
            <div class="process-note">
                <strong>💡 Desarrollo Colaborativo</strong>
                <p>Trabajamos en conjunto con los usuarios finales durante todo el proceso de desarrollo para garantizar un ajuste 100% a tus necesidades específicas. Tu feedback es parte fundamental de cada etapa.</p>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits">
        <div class="container">
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">⚡</div>
                    <h3>Rápida Implementación</h3>
                    <p>Demo funcional en 10-14 días para que veas resultados inmediatos</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">📈</div>
                    <h3>100% Escalable</h3>
                    <p>Crece sin límites, nuestras soluciones se adaptan a tu crecimiento</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🎯</div>
                    <h3>Totalmente Personalizado</h3>
                    <p>Cada línea de código diseñada para tus necesidades específicas</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🔒</div>
                    <h3>Seguro y Confiable</h3>
                    <p>Protección de datos y alta disponibilidad garantizada</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contacto" class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Innova y Evoluciona tu Negocio</h2>
                <p class="cta-subtitle">Lleva tu operación al siguiente nivel con tecnología personalizada que crece contigo</p>
                <div class="cta-buttons">
                    <button class="primary-button large">Quiero una Solución Personalizada</button>
                    <button class="secondary-button large">Hablar con un Experto</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="logo">
                        <span class="logo-icon">⚡</span>
                        <span class="logo-text">DevWorks</span>
                    </div>
                    <p>Soluciones de software personalizadas para impulsar tu negocio</p>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h4>Servicios</h4>
                        <a href="#servicios">WhatsApp & Ventas</a>
                        <a href="#servicios">E-commerce</a>
                        <a href="#servicios">ERPs</a>
                        <a href="#servicios">Logística</a>
                    </div>
                    <div class="footer-column">
                        <h4>Empresa</h4>
                        <a href="#proceso">Proceso</a>
                        <a href="#contacto">Contacto</a>
                    </div>
                    <div class="footer-column">
                        <h4>Contacto</h4>
                        <a href="mailto:info@devworks.com">info@devworks.com</a>
                        <a href="tel:+52">+52 (xxx) xxx-xxxx</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} DevWorks. Todos los derechos reservados.</p>
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
