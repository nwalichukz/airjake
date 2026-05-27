    <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="description" content="Air Jake Delivery Services - Premium global logistics and courier solutions">
    <title>Air Jake Delivery Services</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        :root {
            --navy: #0B2545;
            --navy-mid: #134074;
            --navy-light: #1a4f8a;
            --red: #EE1B24;
            --red-dark: #C4151D;
            --red-light: #ff3b43;
            --white: #ffffff;
            --off-white: #f7f9fc;
            --gray-100: #eef1f6;
            --gray-400: #94a3b8;
            --gray-600: #64748b;
            --gold: #e8a020;
            --font-display: 'Bebas Neue', sans-serif;
            --font-body: 'Outfit', sans-serif;
            --nav-height: 70px;
            --radius: 12px;
            --shadow-card: 0 4px 24px rgba(11,37,69,0.10);
            --shadow-nav: 0 2px 24px rgba(11,37,69,0.22);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        html { scroll-behavior: smooth; font-size: 16px; }

        body {
            font-family: var(--font-body);
            background: var(--off-white);
            color: var(--navy);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            -webkit-font-smoothing: antialiased;
        }

        /* ─── SKIP LINK ─── */
        .skip-link {
            position: absolute;
            top: -100px;
            left: 1rem;
            background: var(--red);
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 0 0 8px 8px;
            z-index: 9999;
            font-weight: 600;
            transition: top 0.2s;
        }
        .skip-link:focus { top: 0; }

        /* ─── LANGUAGE BAR ─── */
        .lang-bar {
            background: var(--navy);
            border-bottom: 1px solid rgba(255,255,255,0.06);
            padding: 6px 0;
        }
        .lang-bar-inner {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }
        .lang-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--gray-400);
            font-size: 0.72rem;
            letter-spacing: 0.04em;
        }
        .lang-info i { color: var(--gold); font-size: 0.75rem; }
        .lang-selector {
            display: flex;
            align-items: center;
            gap: 0.35rem;
            flex-wrap: wrap;
        }
        .lang-btn {
            background: none;
            border: 1px solid rgba(255,255,255,0.12);
            color: var(--gray-400);
            padding: 3px 9px;
            border-radius: 4px;
            font-size: 0.68rem;
            font-family: var(--font-body);
            font-weight: 500;
            letter-spacing: 0.05em;
            cursor: pointer;
            transition: all 0.18s;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }
        .lang-btn:hover, .lang-btn.active {
            background: var(--red);
            border-color: var(--red);
            color: white;
        }
        .lang-btn .flag { font-size: 0.85rem; }

        /* ─── NAV ─── */
        .navbar {
            background: var(--navy-mid);
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow-nav);
            height: var(--nav-height);
        }
        .nav-inner {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.25rem;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        /* Logo */
        .nav-logo {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            text-decoration: none;
            flex-shrink: 0;
        }
        .logo-icon {
            width: 40px;
            height: 40px;
            background: var(--red);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            color: white;
            box-shadow: 0 0 18px rgba(238,27,36,0.45);
            flex-shrink: 0;
        }
        .logo-text { display: flex; flex-direction: column; line-height: 1; }
        .logo-title {
            font-family: var(--font-display);
            font-size: 1.35rem;
            color: white;
            letter-spacing: 0.06em;
        }
        .logo-subtitle {
            font-size: 0.58rem;
            color: var(--gray-400);
            letter-spacing: 0.12em;
            text-transform: uppercase;
            font-weight: 500;
        }

        /* Desktop nav links */
        .nav-links {
            display: none;
            align-items: center;
            gap: 0.25rem;
            list-style: none;
        }
        @media (min-width: 900px) {
            .nav-links { display: flex; }
        }
        .nav-links a {
            color: rgba(255,255,255,0.75);
            text-decoration: none;
            font-size: 0.82rem;
            font-weight: 500;
            padding: 0.5rem 0.85rem;
            border-radius: 8px;
            letter-spacing: 0.03em;
            transition: all 0.18s;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }
        .nav-links a:hover {
            color: white;
            background: rgba(255,255,255,0.1);
        }
        .nav-links a i { font-size: 0.78rem; color: var(--red-light); }
        .nav-links a.active { color: white; background: rgba(255,255,255,0.12); }

        /* CTA Button */
        .nav-cta {
            display: none;
            align-items: center;
            gap: 0.75rem;
        }
        @media (min-width: 900px) { .nav-cta { display: flex; } }
        .btn-primary {
            background: var(--red);
            color: white;
            padding: 0.55rem 1.15rem;
            border-radius: 8px;
            font-weight: 700;
            font-size: 0.82rem;
            text-decoration: none;
            letter-spacing: 0.04em;
            transition: all 0.2s;
            box-shadow: 0 4px 14px rgba(238,27,36,0.4);
            display: flex;
            align-items: center;
            gap: 0.4rem;
            border: none;
            cursor: pointer;
            font-family: var(--font-body);
        }
        .btn-primary:hover {
            background: var(--red-dark);
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(238,27,36,0.5);
        }
        .btn-secondary {
            background: transparent;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.82rem;
            text-decoration: none;
            border: 1.5px solid rgba(255,255,255,0.25);
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }
        .btn-secondary:hover {
            border-color: white;
            background: rgba(255,255,255,0.08);
        }

        /* Hamburger */
        .hamburger {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 5px;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 8px;
            cursor: pointer;
            padding: 8px;
            transition: all 0.2s;
        }
        @media (min-width: 900px) { .hamburger { display: none; } }
        .hamburger:hover { background: rgba(255,255,255,0.15); }
        .hamburger span {
            display: block;
            height: 2px;
            background: white;
            border-radius: 2px;
            transition: all 0.3s;
            transform-origin: center;
        }
        .hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
        .hamburger.open span:nth-child(2) { opacity: 0; transform: scaleX(0); }
        .hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

        /* Mobile drawer */
        .mobile-drawer {
            position: fixed;
            top: 0;
            right: -100%;
            width: min(320px, 90vw);
            height: 100vh;
            background: var(--navy);
            z-index: 200;
            transition: right 0.35s cubic-bezier(0.4,0,0.2,1);
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            box-shadow: -8px 0 40px rgba(0,0,0,0.4);
        }
        .mobile-drawer.open { right: 0; }
        .drawer-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.55);
            z-index: 199;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s;
            backdrop-filter: blur(4px);
        }
        .drawer-overlay.open { opacity: 1; pointer-events: all; }
        .drawer-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.25rem;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }
        .drawer-close {
            width: 36px;
            height: 36px;
            background: rgba(255,255,255,0.08);
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
        }
        .drawer-close:hover { background: var(--red); }
        .drawer-nav {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
            flex: 1;
        }
        .drawer-nav a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            padding: 0.8rem 1rem;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.18s;
        }
        .drawer-nav a i {
            width: 20px;
            text-align: center;
            color: var(--red-light);
            font-size: 0.85rem;
        }
        .drawer-nav a:hover { background: rgba(255,255,255,0.08); color: white; }
        .drawer-divider {
            height: 1px;
            background: rgba(255,255,255,0.08);
            margin: 0.5rem 0;
        }
        .drawer-actions {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            border-top: 1px solid rgba(255,255,255,0.08);
        }
        .drawer-lang {
            padding: 0 1rem 1rem;
        }
        .drawer-lang p {
            color: var(--gray-400);
            font-size: 0.72rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 0.6rem;
            font-weight: 600;
        }
        .drawer-lang-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 0.35rem;
        }

        /* ─── CONTENT AREA ─── */
        main { flex: 1; }

        /* ─── FOOTER ─── */
        footer {
            background: var(--navy);
            color: rgba(255,255,255,0.55);
        }
        .footer-top {
            max-width: 1280px;
            margin: 0 auto;
            padding: 3rem 1.25rem 2rem;
            display: grid;
            grid-template-columns: 1fr;
            gap: 2.5rem;
        }
        @media (min-width: 640px) {
            .footer-top { grid-template-columns: repeat(2, 1fr); }
        }
        @media (min-width: 1024px) {
            .footer-top { grid-template-columns: 2fr 1fr 1fr 1fr; }
        }
        .footer-brand p {
            font-size: 0.83rem;
            line-height: 1.7;
            margin-top: 0.85rem;
            max-width: 280px;
        }
        .footer-social {
            display: flex;
            gap: 0.5rem;
            margin-top: 1.25rem;
        }
        .social-btn {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            background: rgba(255,255,255,0.07);
            border: 1px solid rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255,255,255,0.6);
            font-size: 0.8rem;
            text-decoration: none;
            transition: all 0.2s;
        }
        .social-btn:hover { background: var(--red); border-color: var(--red); color: white; }
        .footer-col h4 {
            color: white;
            font-size: 0.82rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }
        .footer-col h4::after {
            content: '';
            flex: 1;
            height: 1px;
            background: rgba(255,255,255,0.08);
        }
        .footer-col ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.55rem;
        }
        .footer-col ul li a {
            color: rgba(255,255,255,0.55);
            text-decoration: none;
            font-size: 0.82rem;
            display: flex;
            align-items: center;
            gap: 0.4rem;
            transition: color 0.18s;
        }
        .footer-col ul li a:hover { color: var(--red-light); }
        .footer-col ul li a i { font-size: 0.65rem; color: var(--red); opacity: 0.7; }
        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 0.6rem;
            font-size: 0.8rem;
            margin-bottom: 0.65rem;
        }
        .footer-contact-item i { color: var(--red); margin-top: 2px; font-size: 0.75rem; flex-shrink: 0; }
        .footer-contact-item a { color: rgba(255,255,255,0.55); text-decoration: none; }
        .footer-contact-item a:hover { color: var(--red-light); }
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.07);
            padding: 1.25rem;
        }
        .footer-bottom-inner {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.75rem;
            text-align: center;
        }
        @media (min-width: 768px) {
            .footer-bottom-inner {
                flex-direction: row;
                justify-content: space-between;
                text-align: left;
            }
        }
        .footer-bottom-inner p { font-size: 0.75rem; }
        .footer-badges {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            flex-wrap: wrap;
            justify-content: center;
        }
        .badge {
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 5px;
            padding: 3px 8px;
            font-size: 0.65rem;
            color: rgba(255,255,255,0.5);
            letter-spacing: 0.06em;
            font-weight: 600;
        }

        /* ─── PAGE CONTENT DEMO (yields content here in Laravel) ─── */
        .demo-hero {
            background: linear-gradient(135deg, var(--navy) 0%, var(--navy-mid) 60%, #1a3d6e 100%);
            color: white;
            padding: 5rem 1.25rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .demo-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(circle at 20% 50%, rgba(238,27,36,0.12) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(19,64,116,0.4) 0%, transparent 50%);
        }
        .demo-hero-content { position: relative; z-index: 1; max-width: 700px; margin: 0 auto; }
        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(238,27,36,0.15);
            border: 1px solid rgba(238,27,36,0.3);
            color: #ff6b70;
            padding: 0.35rem 0.9rem;
            border-radius: 100px;
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
        }
        .hero-eyebrow i { font-size: 0.7rem; }
        .demo-hero h1 {
            font-family: var(--font-display);
            font-size: clamp(2.5rem, 8vw, 4.5rem);
            letter-spacing: 0.04em;
            line-height: 1.05;
            margin-bottom: 1.25rem;
        }
        .demo-hero h1 span { color: var(--red-light); }
        .demo-hero p {
            font-size: clamp(0.9rem, 2.5vw, 1.05rem);
            color: rgba(255,255,255,0.7);
            line-height: 1.7;
            max-width: 540px;
            margin: 0 auto 2rem;
        }
        .hero-actions {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            flex-wrap: wrap;
        }
        .btn-lg { padding: 0.75rem 1.75rem; font-size: 0.9rem; }
        .btn-outline-white {
            background: transparent;
            color: white;
            border: 1.5px solid rgba(255,255,255,0.3);
            padding: 0.7rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            font-family: var(--font-body);
        }
        .btn-outline-white:hover { border-color: white; background: rgba(255,255,255,0.1); }

        /* Notification bar */
        .notif-bar {
            background: var(--red);
            color: white;
            padding: 0.6rem 1.25rem;
            text-align: center;
            font-size: 0.78rem;
            font-weight: 500;
            letter-spacing: 0.02em;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        .notif-bar .notif-close {
            margin-left: auto;
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            opacity: 0.7;
            transition: opacity 0.2s;
            padding: 0 0.25rem;
        }
        .notif-bar .notif-close:hover { opacity: 1; }

        /* Scroll indicator */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            background: var(--red);
            z-index: 9999;
            width: 0%;
            transition: width 0.1s;
        }
    </style>
</head>
<body>
    <a href="#main-content" class="skip-link" data-i18n="skip_link">Skip to main content</a>
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- ─── NOTIFICATION BAR ─── -->
    <div class="notif-bar" id="notifBar">
        <i class="fa-solid fa-circle-check fa-xs"></i>
        <span data-i18n="notif_text">🚀 Express delivery now available across 50+ countries — Track your parcel in real time</span>
        <button class="notif-close" onclick="document.getElementById('notifBar').remove()" aria-label="Close">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <!-- ─── LANGUAGE BAR ─── -->
    <div class="lang-bar" role="navigation" aria-label="Language selection">
        <div class="lang-bar-inner">
            <div class="lang-info">
                <i class="fa-solid fa-globe"></i>
                <span data-i18n="select_lang">Select your language:</span>
            </div>
            <div class="lang-selector" role="list">
                <button class="lang-btn active" onclick="setLang('en')" data-lang="en" aria-label="English" role="listitem">
                    <span class="flag">🇬🇧</span> EN
                </button>
                <button class="lang-btn" onclick="setLang('fr')" data-lang="fr" aria-label="Français" role="listitem">
                    <span class="flag">🇫🇷</span> FR
                </button>
                <button class="lang-btn" onclick="setLang('es')" data-lang="es" aria-label="Español" role="listitem">
                    <span class="flag">🇪🇸</span> ES
                </button>
                <button class="lang-btn" onclick="setLang('de')" data-lang="de" aria-label="Deutsch" role="listitem">
                    <span class="flag">🇩🇪</span> DE
                </button>
                <button class="lang-btn" onclick="setLang('ar')" data-lang="ar" aria-label="العربية" role="listitem">
                    <span class="flag">🇸🇦</span> AR
                </button>
                <button class="lang-btn" onclick="setLang('zh')" data-lang="zh" aria-label="中文" role="listitem">
                    <span class="flag">🇨🇳</span> ZH
                </button>
                <button class="lang-btn" onclick="setLang('pt')" data-lang="pt" aria-label="Português" role="listitem">
                    <span class="flag">🇧🇷</span> PT
                </button>
                <button class="lang-btn" onclick="setLang('yo')" data-lang="yo" aria-label="Yorùbá" role="listitem">
                    <span class="flag">🇳🇬</span> YO
                </button>
                <button class="lang-btn" onclick="setLang('ig')" data-lang="ig" aria-label="Igbo" role="listitem">
                    <span class="flag">🇳🇬</span> IG
                </button>
            </div>
        </div>
    </div>

    <!-- ─── NAVBAR ─── -->
    <nav class="navbar" role="navigation" aria-label="Main navigation">
        <div class="nav-inner">
            <!-- Logo -->
            <a href="{{url('/')}}" class="nav-logo" aria-label="Air Jake Delivery Services - Home">
                <div class="logo-icon" aria-hidden="true">
                    <i class="fa-solid fa-plane-departure"></i>
                </div>
                <div class="logo-text">
                    <span class="logo-title">AIR JAKE</span>
                    <span class="logo-subtitle" data-i18n="logo_sub">Delivery Services</span>
                </div>
            </a>

            <!-- Desktop Links -->
            <ul class="nav-links" role="list">
                <li><a href="{{url('/')}}" class="active" aria-current="page">
                    <i class="fa-solid fa-house" aria-hidden="true"></i>
                    <span data-i18n="nav_home">Home</span>
                </a></li>
                <li><a href="#trackID">
                    <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                    <span data-i18n="nav_tracking">Track Parcel</span>
                </a></li>
                <li><a href="#serviceID">
                    <i class="fa-solid fa-boxes-stacked" aria-hidden="true"></i>
                    <span data-i18n="nav_services">Services</span>
                </a></li>
               
                <li><a href="{{url('/contact')}}">
                    <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                    <span data-i18n="nav_contact">Contact</span>
                </a></li>
            </ul>

            <!-- Desktop CTA -->
            <div class="nav-cta">
                @if(!Auth::check())
                <a href="{{url('/login')}}" class="btn-secondary">
                    <i class="fa-solid fa-right-to-bracket" aria-hidden="true"></i>
                    <span data-i18n="nav_login">Log In</span>
                </a>
                @else
                <a href="#" class="btn-primary">
                    <i class="fa-solid fa-gauge-high" aria-hidden="true"></i>
                    <span data-i18n="nav_dashboard">Admin Portal</span>
                </a>
                @endif
            </div>

            <!-- Hamburger -->
            <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobileDrawer">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- ─── MOBILE DRAWER ─── -->
    <div class="drawer-overlay" id="drawerOverlay" onclick="closeDrawer()" role="presentation"></div>
    <aside class="mobile-drawer" id="mobileDrawer" aria-label="Mobile navigation" role="dialog" aria-modal="true">
        <div class="drawer-header">
            <a href="#" class="nav-logo" aria-label="Air Jake Home">
                <div class="logo-icon" style="width:32px;height:32px;font-size:0.9rem;" aria-hidden="true">
                    <i class="fa-solid fa-plane-departure"></i>
                </div>
                <div class="logo-text">
                    <span class="logo-title" style="font-size:1.1rem;">AIR JAKE</span>
                    <span class="logo-subtitle" data-i18n="logo_sub">Delivery Services</span>
                </div>
            </a>
            <button class="drawer-close" onclick="closeDrawer()" aria-label="Close menu">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <nav class="drawer-nav" aria-label="Mobile links">
            <a href="{{url('/')}}" aria-current="page">
                <i class="fa-solid fa-house"></i>
                <span data-i18n="nav_home">Home</span>
            </a>
            <a href="#trackID">
                <i class="fa-solid fa-location-dot"></i>
                <span data-i18n="nav_tracking">Track Parcel</span>
            </a>
            <a href="#serviceID">
                <i class="fa-solid fa-boxes-stacked"></i>
                <span data-i18n="nav_services">Services</span>
            </a>
         
            <a href="{{url('/contact')}}">
                <i class="fa-solid fa-envelope"></i>
                <span data-i18n="nav_contact">Contact</span>
            </a>
            <div class="drawer-divider"></div>
            @if(!Auth::check())
            <a href="{{url('/login')}}">
                <i class="fa-solid fa-right-to-bracket"></i>
                <span data-i18n="nav_login">Log In</span>
            </a>
            @endif
        </nav>
        <div class="drawer-lang">
            <p data-i18n="select_lang">Language</p>
            <div class="drawer-lang-grid">
                <button class="lang-btn active" onclick="setLang('en');closeDrawer()">🇬🇧 EN</button>
                <button class="lang-btn" onclick="setLang('fr');closeDrawer()">🇫🇷 FR</button>
                <button class="lang-btn" onclick="setLang('es');closeDrawer()">🇪🇸 ES</button>
                <button class="lang-btn" onclick="setLang('de');closeDrawer()">🇩🇪 DE</button>
                <button class="lang-btn" onclick="setLang('ar');closeDrawer()">🇸🇦 AR</button>
                <button class="lang-btn" onclick="setLang('zh');closeDrawer()">🇨🇳 ZH</button>
                <button class="lang-btn" onclick="setLang('pt');closeDrawer()">🇧🇷 PT</button>
                <button class="lang-btn" onclick="setLang('yo');closeDrawer()">🇳🇬 YO</button>
                <button class="lang-btn" onclick="setLang('ig');closeDrawer()">🇳🇬 IG</button>
            </div>
        </div>
        <div class="drawer-actions">
            @if(Auth::check())
            <a href="#" class="btn-primary" style="justify-content:center;">
                <i class="fa-solid fa-gauge-high"></i>
                <span data-i18n="nav_dashboard">
                Admin Portal</span>
            </a>
            @endif
        </div>
    </aside>

    <!-- ─── MAIN CONTENT ─── -->
    <main id="main-content">
       @yield('content')
        <!-- ══ END DEMO CONTENT ══ -->
    </main>

    <!-- ─── FOOTER ─── -->
    <footer role="contentinfo">
        <div class="footer-top">
            <!-- Brand -->
            <div class="footer-brand">
                <a href="#" class="nav-logo" style="margin-bottom:0.5rem;display:inline-flex;">
                    <div class="logo-icon" style="width:36px;height:36px;font-size:0.95rem;">
                        <i class="fa-solid fa-plane-departure"></i>
                    </div>
                    <div class="logo-text">
                        <span class="logo-title" style="font-size:1.15rem;">AIR JAKE</span>
                        <span class="logo-subtitle" data-i18n="logo_sub">Delivery Services</span>
                    </div>
                </a>
                <p data-i18n="footer_brand_desc">Premium logistics solutions trusted by thousands of businesses and individuals worldwide. Safe, verified, and transparent distribution — every time.</p>
                <div class="footer-social" aria-label="Social media links">
                    <a href="#" class="social-btn" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social-btn" aria-label="Twitter/X"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="social-btn" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-btn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="social-btn" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h4 data-i18n="footer_quick_links">Quick Links</h4>
                <ul>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i><span data-i18n="nav_home">Home</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i><span data-i18n="nav_tracking">Track Parcel</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i><span data-i18n="nav_services">Services</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i><span data-i18n="nav_rates">Rates & Pricing</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i><span data-i18n="footer_faq">FAQ</span></a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="footer-col">
                <h4 data-i18n="footer_our_services">Our Services</h4>
                <ul>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i><span data-i18n="service_express">Express Courier</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i><span data-i18n="service_freight">Air Freight</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i><span data-i18n="service_intl">International Shipping</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i><span data-i18n="service_fragile">Fragile Handling</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i><span data-i18n="service_bulk">Bulk Logistics</span></a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-col">
                <h4 data-i18n="nav_contact">Contact</h4>
                <div class="footer-contact-item">
                    <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:airjakedeliveryservices@gmail.com">airjakedeliveryservices@gmail.com</a>
                </div>
                <div class="footer-contact-item">
                    <i class="fa-solid fa-phone"></i>
                    <span>+1 (800) AIR-JAKE</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fa-solid fa-clock"></i>
                    <span data-i18n="footer_hours">Mon–Sat: 7AM – 9PM</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fa-solid fa-headset"></i>
                    <a href="#" data-i18n="footer_support">24/7 Live Support</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-inner">
                <p data-i18n="footer_copy">&copy; 2026 Air Jake Delivery Services Ltd. All rights reserved.</p>
                <div class="footer-badges">
                    <span class="badge">SSL SECURE</span>
                    <span class="badge">ISO 9001</span>
                    <span class="badge">GDPR COMPLIANT</span>
                </div>
                <p>
                    <a href="#" style="color:rgba(255,255,255,0.4);text-decoration:none;margin-right:1rem;font-size:0.72rem;" data-i18n="footer_privacy">Privacy Policy</a>
                    <a href="#" style="color:rgba(255,255,255,0.4);text-decoration:none;font-size:0.72rem;" data-i18n="footer_terms">Terms of Service</a>
                </p>
            </div>
        </div>
    </footer>

    <script>
    /* ─── TRANSLATIONS ─────────────────────────────────────────── */
    const translations = {
        en: {
            skip_link: "Skip to main content",
            notif_text: "🚀 Express delivery now available across 50+ countries — Track your parcel in real time",
            select_lang: "Select language:",
            logo_sub: "Delivery Services",
            nav_home: "Home", nav_tracking: "Track Parcel", nav_services: "Services",
            nav_rates: "Rates", nav_contact: "Contact", nav_login: "Log In",
            nav_dashboard: "Admin Portal",
            hero_eyebrow: "Trusted Worldwide Logistics",
            hero_title: "Delivering <span>Speed</span><br>Across the Globe",
            hero_sub: "Air Jake Delivery Services offers premium courier solutions with real-time tracking, transparent pricing, and guaranteed on-time delivery to over 150 countries.",
            hero_track_btn: "Track Your Parcel", hero_learn_btn: "How It Works",
            footer_brand_desc: "Premium logistics solutions trusted by thousands of businesses and individuals worldwide. Safe, verified, and transparent distribution — every time.",
            footer_quick_links: "Quick Links", footer_our_services: "Our Services",
            footer_faq: "FAQ", service_express: "Express Courier", service_freight: "Air Freight",
            service_intl: "International Shipping", service_fragile: "Fragile Handling", service_bulk: "Bulk Logistics",
            footer_hours: "Mon–Sat: 7AM – 9PM", footer_support: "24/7 Live Support",
            footer_copy: "© 2026 Air Jake Delivery Services Ltd. All rights reserved.",
            footer_privacy: "Privacy Policy", footer_terms: "Terms of Service"
        },
        fr: {
            skip_link: "Aller au contenu principal",
            notif_text: "🚀 Livraison express disponible dans 50+ pays — Suivez votre colis en temps réel",
            select_lang: "Choisir la langue :",
            logo_sub: "Services de livraison",
            nav_home: "Accueil", nav_tracking: "Suivre un colis", nav_services: "Services",
            nav_rates: "Tarifs", nav_contact: "Contact", nav_login: "Connexion",
            nav_dashboard: "Portail Admin",
            hero_eyebrow: "Logistique mondiale de confiance",
            hero_title: "Livrer la <span>Rapidité</span><br>Partout dans le Monde",
            hero_sub: "Air Jake propose des solutions de messagerie premium avec suivi en temps réel, tarification transparente et livraison garantie dans plus de 150 pays.",
            hero_track_btn: "Suivre votre colis", hero_learn_btn: "Comment ça marche",
            footer_brand_desc: "Solutions logistiques premium approuvées par des milliers d'entreprises et de particuliers dans le monde entier.",
            footer_quick_links: "Liens rapides", footer_our_services: "Nos Services",
            footer_faq: "FAQ", service_express: "Courrier Express", service_freight: "Fret aérien",
            service_intl: "Expédition internationale", service_fragile: "Objets fragiles", service_bulk: "Logistique en gros",
            footer_hours: "Lun–Sam : 7h – 21h", footer_support: "Support 24/7",
            footer_copy: "© 2026 Air Jake Delivery Services. Tous droits réservés.",
            footer_privacy: "Politique de confidentialité", footer_terms: "Conditions d'utilisation"
        },
        es: {
            skip_link: "Ir al contenido principal",
            notif_text: "🚀 Entrega exprés disponible en más de 50 países — Rastrea tu paquete en tiempo real",
            select_lang: "Seleccionar idioma:",
            logo_sub: "Servicios de entrega",
            nav_home: "Inicio", nav_tracking: "Rastrear paquete", nav_services: "Servicios",
            nav_rates: "Tarifas", nav_contact: "Contacto", nav_login: "Iniciar sesión",
            nav_dashboard: "Portal de administrador",
            hero_eyebrow: "Logística mundial de confianza",
            hero_title: "Entregando <span>Velocidad</span><br>Por Todo el Mundo",
            hero_sub: "Air Jake ofrece soluciones de mensajería premium con seguimiento en tiempo real y entrega garantizada a más de 150 países.",
            hero_track_btn: "Rastrear su paquete", hero_learn_btn: "Cómo funciona",
            footer_brand_desc: "Soluciones logísticas premium de confianza para miles de empresas y particulares en todo el mundo.",
            footer_quick_links: "Accesos rápidos", footer_our_services: "Nuestros servicios",
            footer_faq: "Preguntas frecuentes", service_express: "Mensajería exprés",
            service_freight: "Flete aéreo", service_intl: "Envío internacional",
            service_fragile: "Objetos frágiles", service_bulk: "Logística masiva",
            footer_hours: "Lun–Sáb: 7AM – 9PM", footer_support: "Soporte 24/7",
            footer_copy: "© 2026 Air Jake Delivery Services. Todos los derechos reservados.",
            footer_privacy: "Política de privacidad", footer_terms: "Términos de servicio"
        },
        de: {
            skip_link: "Zum Hauptinhalt springen",
            notif_text: "🚀 Expresslieferung jetzt in 50+ Ländern — Verfolgen Sie Ihr Paket in Echtzeit",
            select_lang: "Sprache auswählen:",
            logo_sub: "Lieferdienste",
            nav_home: "Startseite", nav_tracking: "Paket verfolgen", nav_services: "Dienste",
            nav_rates: "Preise", nav_contact: "Kontakt", nav_login: "Anmelden",
            nav_dashboard: "Admin-Portal",
            hero_eyebrow: "Weltweit vertrauenswürdige Logistik",
            hero_title: "Liefert <span>Schnelligkeit</span><br>Rund um die Welt",
            hero_sub: "Air Jake bietet Premium-Kurierlösungen mit Echtzeit-Tracking und garantierter pünktlicher Lieferung in über 150 Länder.",
            hero_track_btn: "Ihr Paket verfolgen", hero_learn_btn: "So funktioniert es",
            footer_brand_desc: "Premium-Logistiklösungen, denen Tausende von Unternehmen weltweit vertrauen.",
            footer_quick_links: "Schnelllinks", footer_our_services: "Unsere Dienste",
            footer_faq: "FAQ", service_express: "Expresslieferung", service_freight: "Luftfracht",
            service_intl: "Internationaler Versand", service_fragile: "Zerbrechliche Waren", service_bulk: "Massenlogistik",
            footer_hours: "Mo–Sa: 7–21 Uhr", footer_support: "24/7 Support",
            footer_copy: "© 2026 Air Jake Delivery Services GmbH. Alle Rechte vorbehalten.",
            footer_privacy: "Datenschutzrichtlinie", footer_terms: "Nutzungsbedingungen"
        },
        ar: {
            skip_link: "تخطي إلى المحتوى الرئيسي",
            notif_text: "🚀 التوصيل السريع متاح الآن في أكثر من 50 دولة — تتبع طردك في الوقت الفعلي",
            select_lang: "اختر اللغة:",
            logo_sub: "خدمات التوصيل",
            nav_home: "الرئيسية", nav_tracking: "تتبع الطرد", nav_services: "الخدمات",
            nav_rates: "الأسعار", nav_contact: "اتصل بنا", nav_login: "تسجيل الدخول",
            nav_dashboard: "بوابة الإدارة",
            hero_eyebrow: "خدمات لوجستية موثوقة حول العالم",
            hero_title: "نوصل <span>السرعة</span><br>إلى كل مكان",
            hero_sub: "تقدم Air Jake حلول بريد متميزة مع تتبع فوري وتسليم مضمون إلى أكثر من 150 دولة.",
            hero_track_btn: "تتبع طردك", hero_learn_btn: "كيف يعمل",
            footer_brand_desc: "حلول لوجستية متميزة يثق بها الآلاف من الشركات والأفراد حول العالم.",
            footer_quick_links: "روابط سريعة", footer_our_services: "خدماتنا",
            footer_faq: "الأسئلة الشائعة", service_express: "بريد سريع", service_freight: "شحن جوي",
            service_intl: "الشحن الدولي", service_fragile: "مناولة الهشاشة", service_bulk: "اللوجستيات الضخمة",
            footer_hours: "الاثنين–السبت: 7ص – 9م", footer_support: "دعم على مدار 24/7",
            footer_copy: "© 2026 Air Jake لخدمات التوصيل. جميع الحقوق محفوظة.",
            footer_privacy: "سياسة الخصوصية", footer_terms: "شروط الخدمة"
        },
        zh: {
            skip_link: "跳转到主要内容",
            notif_text: "🚀 快递服务现已覆盖50+国家 — 实时追踪您的包裹",
            select_lang: "选择语言：",
            logo_sub: "配送服务",
            nav_home: "首页", nav_tracking: "追踪包裹", nav_services: "服务",
            nav_rates: "价格", nav_contact: "联系", nav_login: "登录",
            nav_dashboard: "管理后台",
            hero_eyebrow: "全球信赖的物流服务",
            hero_title: "将<span>速度</span>送<br>到世界每个角落",
            hero_sub: "Air Jake提供优质快递解决方案，支持实时追踪，透明定价，承诺准时送达150多个国家。",
            hero_track_btn: "追踪您的包裹", hero_learn_btn: "了解如何运作",
            footer_brand_desc: "受到全球数千家企业和个人信赖的优质物流解决方案。",
            footer_quick_links: "快速链接", footer_our_services: "我们的服务",
            footer_faq: "常见问题", service_express: "快递服务", service_freight: "空运",
            service_intl: "国际运输", service_fragile: "易碎品处理", service_bulk: "批量物流",
            footer_hours: "周一至周六：7AM – 9PM", footer_support: "24/7 实时支持",
            footer_copy: "© 2026 Air Jake配送服务有限公司。保留所有权利。",
            footer_privacy: "隐私政策", footer_terms: "服务条款"
        },
        pt: {
            skip_link: "Ir para o conteúdo principal",
            notif_text: "🚀 Entrega expressa disponível em mais de 50 países — Rastreie seu pacote em tempo real",
            select_lang: "Selecionar idioma:",
            logo_sub: "Serviços de entrega",
            nav_home: "Início", nav_tracking: "Rastrear encomenda", nav_services: "Serviços",
            nav_rates: "Tarifas", nav_contact: "Contato", nav_login: "Entrar",
            nav_dashboard: "Portal do Admin",
            hero_eyebrow: "Logística mundial de confiança",
            hero_title: "Entregando <span>Velocidade</span><br>Para o Mundo Todo",
            hero_sub: "Air Jake oferece soluções de entrega premium com rastreamento em tempo real e entrega garantida para mais de 150 países.",
            hero_track_btn: "Rastrear seu pacote", hero_learn_btn: "Como funciona",
            footer_brand_desc: "Soluções logísticas premium confiadas por milhares de empresas e pessoas no mundo todo.",
            footer_quick_links: "Links rápidos", footer_our_services: "Nossos Serviços",
            footer_faq: "Perguntas frequentes", service_express: "Correio expresso",
            service_freight: "Carga aérea", service_intl: "Envio internacional",
            service_fragile: "Manuseio frágil", service_bulk: "Logística em massa",
            footer_hours: "Seg–Sáb: 7h – 21h", footer_support: "Suporte 24/7",
            footer_copy: "© 2026 Air Jake Serviços de Entrega. Todos os direitos reservados.",
            footer_privacy: "Política de privacidade", footer_terms: "Termos de serviço"
        },
        yo: {
            skip_link: "Fo si akoonu akọkọ",
            notif_text: "🚀 Ifiranṣẹ iyara wa ni orilẹ-ede 50+ — Tọpa ẹru rẹ ni akoko gidi",
            select_lang: "Yan ede:",
            logo_sub: "Iṣẹ ifiranṣẹ",
            nav_home: "Ile", nav_tracking: "Tọpa ẹru", nav_services: "Iṣẹ",
            nav_rates: "Idiyele", nav_contact: "Olubasọrọ", nav_login: "Wọle",
            nav_dashboard: "Ẹnu-ọna Alakoso",
            hero_eyebrow: "Iṣẹ Ifiranṣẹ Agbaye Ti A Gbẹkẹle",
            hero_title: "Gbigba <span>Iyara</span><br>Kakiri Agbaye",
            hero_sub: "Air Jake pese awọn ojutu ifiranṣẹ to gaju pẹlu titọpa akoko gidi si awọn orilẹ-ede 150+.",
            hero_track_btn: "Tọpa ẹru rẹ", hero_learn_btn: "Bi o ṣe n ṣiṣẹ",
            footer_brand_desc: "Awọn ojutu ifiranṣẹ to ga ti ẹgbẹẹgbẹrun ile-iṣẹ ati ẹni-kọọkan gbẹkẹle kakiri agbaye.",
            footer_quick_links: "Awọn ọna asopọ yara", footer_our_services: "Awọn iṣẹ wa",
            footer_faq: "Awọn ibeere ti a beere nigbagbogbo", service_express: "Ifiranṣẹ iyara",
            service_freight: "Gbigbe ofurufu", service_intl: "Ifiranṣẹ kariaye",
            service_fragile: "Mimu nkan elege", service_bulk: "Gbigbe nla",
            footer_hours: "Ẹti–Sat: 7AM – 9PM", footer_support: "Atilẹyin 24/7",
            footer_copy: "© 2026 Air Jake Iṣẹ Ifiranṣẹ. Gbogbo ẹtọ wa.",
            footer_privacy: "Afihan asiri", footer_terms: "Awọn ofin iṣẹ"
        },
        ig: {
            skip_link: "Gaa na ọdịnaya bụ isi",
            notif_text: "🚀 Nnyefe ngwa ngwa dị ugbu a na mba 50+ — Soro ngwa gị n'oge ezie",
            select_lang: "Họrọ asụsụ:",
            logo_sub: "Ọrụ nnyefe",
            nav_home: "Ụlọ", nav_tracking: "Soro ngwa", nav_services: "Ọrụ",
            nav_rates: "Ọnụahịa", nav_contact: "Kpọtụrụ anyị", nav_login: "Banye",
            nav_dashboard: "Ụzọ ọchịchị",
            hero_eyebrow: "Ọrụ Mmezigharị Ụwa Ntụkwasị Obi",
            hero_title: "Na-ebufe <span>Ọsọ</span><br>Gburugburu Ụwa",
            hero_sub: "Air Jake na-enye ihe ndị dị mma na ntụkwasị obi maka nnyefe n'oge ezie na mba 150+.",
            hero_track_btn: "Soro ngwa gị", hero_learn_btn: "Otu ọ si arụ ọrụ",
            footer_brand_desc: "Ihe ndị dị mma nke ọtụtụ ụlọ ọrụ na ndị mmadụ n'ụwa ntụkwasị obi.",
            footer_quick_links: "Njikọ ngwa ngwa", footer_our_services: "Ọrụ anyị",
            footer_faq: "Ajụjụ ọfụnala", service_express: "Ozi ngwa ngwa",
            service_freight: "Ibugharị ikuku", service_intl: "Nnyefe mba ụwa",
            service_fragile: "Ijikwa ihe dị mịmị", service_bulk: "Ibugharị nnukwu ihe",
            footer_hours: "Mọn–Sat: 7AM – 9PM", footer_support: "Nkwado 24/7",
            footer_copy: "© 2026 Air Jake Ọrụ Nnyefe. Ikike niile echekwara.",
            footer_privacy: "Iwu nzuzo", footer_terms: "Usoro ọrụ"
        }
    };

    let currentLang = localStorage.getItem('ajd_lang') || 'en';
    const rtlLangs = ['ar'];

    function setLang(lang) {
        currentLang = lang;
        localStorage.setItem('ajd_lang', lang);

        // RTL support
        const isRtl = rtlLangs.includes(lang);
        document.documentElement.setAttribute('dir', isRtl ? 'rtl' : 'ltr');
        document.documentElement.setAttribute('lang', lang);

        // Update all translated elements
        document.querySelectorAll('[data-i18n]').forEach(el => {
            const key = el.getAttribute('data-i18n');
            if (translations[lang] && translations[lang][key]) {
                el.innerHTML = translations[lang][key];
            }
        });

        // Update active button
        document.querySelectorAll('.lang-btn').forEach(btn => {
            btn.classList.toggle('active', btn.getAttribute('data-lang') === lang ||
                btn.textContent.trim().toLowerCase().endsWith(lang.toUpperCase()) ||
                btn.textContent.trim().toLowerCase().includes(lang));
        });

        // Sync drawer lang buttons
        document.querySelectorAll('.drawer-lang-grid .lang-btn').forEach(btn => {
            const flagCode = btn.textContent.trim().split(' ').pop();
            btn.classList.toggle('active', flagCode === lang.toUpperCase());
        });
    }

    /* ─── HAMBURGER MENU ─── */
    const hamburger = document.getElementById('hamburger');
    const drawer = document.getElementById('mobileDrawer');
    const overlay = document.getElementById('drawerOverlay');

    function openDrawer() {
        hamburger.classList.add('open');
        drawer.classList.add('open');
        overlay.classList.add('open');
        document.body.style.overflow = 'hidden';
        hamburger.setAttribute('aria-expanded', 'true');
        drawer.querySelector('a').focus();
    }

    function closeDrawer() {
        hamburger.classList.remove('open');
        drawer.classList.remove('open');
        overlay.classList.remove('open');
        document.body.style.overflow = '';
        hamburger.setAttribute('aria-expanded', 'false');
    }

    hamburger.addEventListener('click', () => {
        if (drawer.classList.contains('open')) closeDrawer();
        else openDrawer();
    });

    // Close on Escape
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape' && drawer.classList.contains('open')) closeDrawer();
    });

    /* ─── SCROLL PROGRESS ─── */
    const progressBar = document.getElementById('scrollProgress');
    window.addEventListener('scroll', () => {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
        progressBar.style.width = progress + '%';
    }, { passive: true });

    /* ─── INIT ─── */
    setLang(currentLang);
    </script>
</body>
</html>
