<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="description" content="Air Jake Delivery Services - Premium global logistics and courier solutions">
    <title>Air Jake Delivery Services</title>

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
            position: absolute; top: -100px; left: 1rem;
            background: var(--red); color: #fff;
            padding: 0.5rem 1rem; border-radius: 0 0 8px 8px;
            z-index: 9999; font-weight: 600; transition: top 0.2s;
        }
        .skip-link:focus { top: 0; }

        /* ─── CUSTOM LANGUAGE TRANSLATOR ─── */
        .country-bar {
            background: var(--navy);
            border-bottom: 1px solid rgba(255,255,255,0.06);
            padding: 6px 0;
            position: relative;
            z-index: 200;
        }
        .country-bar-inner {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }
        .country-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--gray-400);
            font-size: 0.72rem;
            letter-spacing: 0.04em;
        }
        .country-info i { color: var(--gold); font-size: 0.75rem; }

        /* ── Language Dropdown ── */
        .lang-selector {
            position: relative;
        }
        .lang-trigger {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255,255,255,0.07);
            border: 1px solid rgba(255,255,255,0.12);
            color: white;
            padding: 5px 12px;
            border-radius: 6px;
            font-size: 0.78rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.18s;
            font-family: var(--font-body);
            min-width: 170px;
            justify-content: space-between;
            user-select: none;
        }
        .lang-trigger:hover {
            background: rgba(238,27,36,0.15);
            border-color: var(--red);
        }
        .lang-trigger .lang-flag { font-size: 1rem; line-height: 1; }
        .lang-trigger .lang-name { flex: 1; text-align: left; padding: 0 6px; }
        .lang-trigger .lang-chevron {
            font-size: 0.6rem;
            transition: transform 0.2s;
            opacity: 0.7;
        }
        .lang-selector.open .lang-chevron { transform: rotate(180deg); }

        .lang-dropdown {
            position: absolute;
            top: calc(100% + 6px);
            right: 0;
            background: #0d2a4a;
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 10px;
            padding: 6px;
            min-width: 220px;
            max-height: 420px;
            overflow-y: auto;
            box-shadow: 0 8px 32px rgba(0,0,0,0.4);
            display: none;
            z-index: 300;
            scrollbar-width: thin;
            scrollbar-color: rgba(255,255,255,0.15) transparent;
        }
        .lang-dropdown::-webkit-scrollbar { width: 4px; }
        .lang-dropdown::-webkit-scrollbar-track { background: transparent; }
        .lang-dropdown::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.15); border-radius: 2px; }
        .lang-selector.open .lang-dropdown { display: block; animation: dropIn 0.18s ease; }

        @keyframes dropIn {
            from { opacity: 0; transform: translateY(-6px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .lang-search {
            width: 100%;
            background: rgba(255,255,255,0.07);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 6px;
            padding: 6px 10px 6px 30px;
            color: white;
            font-size: 0.75rem;
            font-family: var(--font-body);
            outline: none;
            margin-bottom: 6px;
            position: relative;
        }
        .lang-search::placeholder { color: rgba(255,255,255,0.3); }
        .lang-search-wrap {
            position: relative;
            margin-bottom: 2px;
        }
        .lang-search-wrap i {
            position: absolute;
            left: 9px; top: 50%;
            transform: translateY(-50%);
            color: rgba(255,255,255,0.3);
            font-size: 0.65rem;
            pointer-events: none;
        }

        .lang-group-label {
            font-size: 0.63rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: rgba(255,255,255,0.3);
            padding: 6px 8px 3px;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }
        .lang-group-label::after {
            content: '';
            flex: 1;
            height: 1px;
            background: rgba(255,255,255,0.07);
        }

        .lang-option {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 7px 10px;
            border-radius: 7px;
            cursor: pointer;
            transition: background 0.12s;
            font-size: 0.8rem;
            color: rgba(255,255,255,0.75);
        }
        .lang-option:hover { background: rgba(255,255,255,0.08); color: white; }
        .lang-option.selected { background: rgba(238,27,36,0.15); color: white; }
        .lang-option.selected .lang-opt-name::after {
            content: '✓';
            margin-left: 6px;
            font-size: 0.7rem;
            color: var(--red-light);
        }
        .lang-option .lang-opt-flag { font-size: 1rem; line-height: 1; width: 22px; text-align: center; }
        .lang-option .lang-opt-name { flex: 1; }
        .lang-option .lang-opt-native { font-size: 0.68rem; color: rgba(255,255,255,0.35); }
        .lang-option[style*="display: none"] { display: none !important; }

        /* Mobile drawer translator */
        .drawer-lang-wrap {
            padding: 0 1rem 1rem;
        }
        .drawer-lang-wrap p {
            color: var(--gray-400); font-size: 0.72rem;
            letter-spacing: 0.1em; text-transform: uppercase;
            margin-bottom: 0.6rem; font-weight: 600;
            display: flex; align-items: center; gap: 0.4rem;
        }
        .drawer-lang-wrap p i { color: var(--gold); }
        .drawer-lang-wrap .lang-trigger {
            width: 100%;
            background: rgba(255,255,255,0.04);
            border-color: rgba(255,255,255,0.08);
            padding: 8px 12px;
        }
        .drawer-lang-wrap .lang-dropdown {
            right: auto;
            left: 0;
            min-width: 200px;
        }

        /* Translation banner */
        .translate-banner {
            display: none;
            background: var(--navy-mid);
            border-bottom: 1px solid rgba(255,255,255,0.06);
            padding: 5px 1.25rem;
            font-size: 0.72rem;
            color: rgba(255,255,255,0.6);
            align-items: center;
            gap: 0.75rem;
        }
        .translate-banner.visible { display: flex; }
        .translate-banner strong { color: white; }
        .translate-banner a {
            color: var(--red-light);
            text-decoration: none;
            margin-left: auto;
            white-space: nowrap;
        }
        .translate-banner a:hover { text-decoration: underline; }

        /* ─── NAVBAR ─── */
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

        .nav-logo {
            display: flex; align-items: center; gap: 0.6rem;
            text-decoration: none; flex-shrink: 0;
        }
        .logo-icon {
            width: 40px; height: 40px;
            background: var(--red); border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.1rem; color: white;
            box-shadow: 0 0 18px rgba(238,27,36,0.45);
            flex-shrink: 0;
        }
        .logo-text { display: flex; flex-direction: column; line-height: 1; }
        .logo-title { font-family: var(--font-display); font-size: 1.35rem; color: white; letter-spacing: 0.06em; }
        .logo-subtitle { font-size: 0.58rem; color: var(--gray-400); letter-spacing: 0.12em; text-transform: uppercase; font-weight: 500; }

        .nav-links { display: none; align-items: center; gap: 0.25rem; list-style: none; }
        @media (min-width: 900px) { .nav-links { display: flex; } }
        .nav-links a {
            color: rgba(255,255,255,0.75); text-decoration: none;
            font-size: 0.82rem; font-weight: 500;
            padding: 0.5rem 0.85rem; border-radius: 8px;
            letter-spacing: 0.03em; transition: all 0.18s;
            display: flex; align-items: center; gap: 0.4rem;
        }
        .nav-links a:hover { color: white; background: rgba(255,255,255,0.1); }
        .nav-links a i { font-size: 0.78rem; color: var(--red-light); }
        .nav-links a.active { color: white; background: rgba(255,255,255,0.12); }

        .nav-cta { display: none; align-items: center; gap: 0.75rem; }
        @media (min-width: 900px) { .nav-cta { display: flex; } }

        .btn-primary {
            background: var(--red); color: white;
            padding: 0.55rem 1.15rem; border-radius: 8px;
            font-weight: 700; font-size: 0.82rem;
            text-decoration: none; letter-spacing: 0.04em;
            transition: all 0.2s;
            box-shadow: 0 4px 14px rgba(238,27,36,0.4);
            display: flex; align-items: center; gap: 0.4rem;
            border: none; cursor: pointer; font-family: var(--font-body);
        }
        .btn-primary:hover { background: var(--red-dark); transform: translateY(-1px); box-shadow: 0 6px 20px rgba(238,27,36,0.5); }
        .btn-secondary {
            background: transparent; color: white;
            padding: 0.5rem 1rem; border-radius: 8px;
            font-weight: 600; font-size: 0.82rem;
            text-decoration: none; border: 1.5px solid rgba(255,255,255,0.25);
            transition: all 0.2s; display: flex; align-items: center; gap: 0.4rem;
        }
        .btn-secondary:hover { border-color: white; background: rgba(255,255,255,0.08); }

        .hamburger {
            display: flex; flex-direction: column; justify-content: center;
            gap: 5px; width: 40px; height: 40px;
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 8px; cursor: pointer; padding: 8px; transition: all 0.2s;
        }
        @media (min-width: 900px) { .hamburger { display: none; } }
        .hamburger:hover { background: rgba(255,255,255,0.15); }
        .hamburger span { display: block; height: 2px; background: white; border-radius: 2px; transition: all 0.3s; transform-origin: center; }
        .hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
        .hamburger.open span:nth-child(2) { opacity: 0; transform: scaleX(0); }
        .hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

        .mobile-drawer {
            position: fixed; top: 0; right: -100%;
            width: min(320px, 90vw); height: 100vh;
            background: var(--navy); z-index: 200;
            transition: right 0.35s cubic-bezier(0.4,0,0.2,1);
            overflow-y: auto; display: flex; flex-direction: column;
            box-shadow: -8px 0 40px rgba(0,0,0,0.4);
        }
        .mobile-drawer.open { right: 0; }
        .drawer-overlay {
            position: fixed; inset: 0;
            background: rgba(0,0,0,0.55); z-index: 199;
            opacity: 0; pointer-events: none; transition: opacity 0.3s;
            backdrop-filter: blur(4px);
        }
        .drawer-overlay.open { opacity: 1; pointer-events: all; }
        .drawer-header {
            display: flex; align-items: center; justify-content: space-between;
            padding: 1.25rem; border-bottom: 1px solid rgba(255,255,255,0.08);
        }
        .drawer-close {
            width: 36px; height: 36px; background: rgba(255,255,255,0.08);
            border: none; border-radius: 8px; color: white; font-size: 1rem;
            cursor: pointer; display: flex; align-items: center; justify-content: center;
            transition: background 0.2s;
        }
        .drawer-close:hover { background: var(--red); }
        .drawer-nav {
            padding: 1rem; display: flex; flex-direction: column;
            gap: 0.25rem; flex: 1;
        }
        .drawer-nav a {
            color: rgba(255,255,255,0.8); text-decoration: none;
            font-size: 0.9rem; font-weight: 500; padding: 0.8rem 1rem;
            border-radius: 10px; display: flex; align-items: center;
            gap: 0.75rem; transition: all 0.18s;
        }
        .drawer-nav a i { width: 20px; text-align: center; color: var(--red-light); font-size: 0.85rem; }
        .drawer-nav a:hover { background: rgba(255,255,255,0.08); color: white; }
        .drawer-divider { height: 1px; background: rgba(255,255,255,0.08); margin: 0.5rem 0; }
        .drawer-actions { padding: 1rem; display: flex; flex-direction: column; gap: 0.5rem; border-top: 1px solid rgba(255,255,255,0.08); }

        /* ─── MAIN ─── */
        main { flex: 1; }

        /* ─── FOOTER ─── */
        footer { background: var(--navy); color: rgba(255,255,255,0.55); }
        .footer-top {
            max-width: 1280px; margin: 0 auto;
            padding: 3rem 1.25rem 2rem;
            display: grid; grid-template-columns: 1fr; gap: 2.5rem;
        }
        @media (min-width: 640px) { .footer-top { grid-template-columns: repeat(2, 1fr); } }
        @media (min-width: 1024px) { .footer-top { grid-template-columns: 2fr 1fr 1fr 1fr; } }

        .footer-brand p { font-size: 0.83rem; line-height: 1.7; margin-top: 0.85rem; max-width: 280px; }
        .footer-social { display: flex; gap: 0.5rem; margin-top: 1.25rem; }
        .social-btn {
            width: 36px; height: 36px; border-radius: 8px;
            background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.1);
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,0.6); font-size: 0.8rem;
            text-decoration: none; transition: all 0.2s;
        }
        .social-btn:hover { background: var(--red); border-color: var(--red); color: white; }
        .footer-col h4 {
            color: white; font-size: 0.82rem; font-weight: 700;
            letter-spacing: 0.1em; text-transform: uppercase;
            margin-bottom: 1rem; display: flex; align-items: center; gap: 0.4rem;
        }
        .footer-col h4::after { content: ''; flex: 1; height: 1px; background: rgba(255,255,255,0.08); }
        .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 0.55rem; }
        .footer-col ul li a {
            color: rgba(255,255,255,0.55); text-decoration: none;
            font-size: 0.82rem; display: flex; align-items: center;
            gap: 0.4rem; transition: color 0.18s;
        }
        .footer-col ul li a:hover { color: var(--red-light); }
        .footer-col ul li a i { font-size: 0.65rem; color: var(--red); opacity: 0.7; }
        .footer-contact-item { display: flex; align-items: flex-start; gap: 0.6rem; font-size: 0.8rem; margin-bottom: 0.65rem; }
        .footer-contact-item i { color: var(--red); margin-top: 2px; font-size: 0.75rem; flex-shrink: 0; }
        .footer-contact-item a { color: rgba(255,255,255,0.55); text-decoration: none; }
        .footer-contact-item a:hover { color: var(--red-light); }
        .footer-bottom { border-top: 1px solid rgba(255,255,255,0.07); padding: 1.25rem; }
        .footer-bottom-inner {
            max-width: 1280px; margin: 0 auto;
            display: flex; flex-direction: column;
            align-items: center; gap: 0.75rem; text-align: center;
        }
        @media (min-width: 768px) { .footer-bottom-inner { flex-direction: row; justify-content: space-between; text-align: left; } }
        .footer-bottom-inner p { font-size: 0.75rem; }
        .footer-badges { display: flex; align-items: center; gap: 0.5rem; flex-wrap: wrap; justify-content: center; }
        .badge {
            background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);
            border-radius: 5px; padding: 3px 8px; font-size: 0.65rem;
            color: rgba(255,255,255,0.5); letter-spacing: 0.06em; font-weight: 600;
        }

        /* Notification bar */
        .notif-bar {
            background: var(--red); color: white; padding: 0.6rem 1.25rem;
            text-align: center; font-size: 0.78rem; font-weight: 500;
            letter-spacing: 0.02em; display: flex; align-items: center;
            justify-content: center; gap: 0.5rem;
        }
        .notif-bar .notif-close {
            margin-left: auto; background: none; border: none;
            color: white; cursor: pointer; opacity: 0.7;
            transition: opacity 0.2s; padding: 0 0.25rem;
        }
        .notif-bar .notif-close:hover { opacity: 1; }

        /* Scroll progress */
        .scroll-progress {
            position: fixed; top: 0; left: 0; height: 3px;
            background: var(--red); z-index: 9999; width: 0%; transition: width 0.1s;
        }
    </style>
</head>
<body>
    <a href="#main-content" class="skip-link">Skip to main content</a>
    <div class="scroll-progress" id="scrollProgress"></div>

    <div class="notif-bar" id="notifBar">
        <i class="fa-solid fa-circle-check fa-xs"></i>
        <span>🚀 Express delivery now available across 50+ countries — Track your parcel in real time</span>
        <button class="notif-close" onclick="document.getElementById('notifBar').remove()" aria-label="Close">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <!-- ─── LANGUAGE BAR ─── -->
    <div class="country-bar" role="navigation" aria-label="Language selection">
        <div class="country-bar-inner">
            <div class="country-info">
                <i class="fa-solid fa-globe"></i>
                <span>Select language / Choisir la langue / 选择语言:</span>
            </div>
            <!-- Desktop language selector -->
            <div class="lang-selector" id="langSelectorDesktop">
                <div class="lang-trigger" id="langTriggerDesktop" onclick="toggleLang('Desktop')" role="button" aria-haspopup="listbox" aria-expanded="false" tabindex="0">
                    <span class="lang-flag" id="langFlagDesktop">🇬🇧</span>
                    <span class="lang-name" id="langNameDesktop">English</span>
                    <i class="fa-solid fa-chevron-down lang-chevron"></i>
                </div>
                <div class="lang-dropdown" id="langDropdownDesktop" role="listbox" aria-label="Select language">
                    <div class="lang-search-wrap">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input class="lang-search" type="text" placeholder="Search language..." oninput="filterLangs(this,'Desktop')" aria-label="Search languages">
                    </div>
                    <!-- populated by JS -->
                </div>
            </div>
        </div>
    </div>

    <!-- Translation active banner -->
    <div class="translate-banner" id="translateBanner">
        <i class="fa-solid fa-language"></i>
        <span>Page translated to: <strong id="translateBannerLang">English</strong></span>
        <a href="#" onclick="resetLang(); return false;"><i class="fa-solid fa-rotate-left"></i> Show original (English)</a>
    </div>

    <!-- ─── NAVBAR ─── -->
    <nav class="navbar" role="navigation" aria-label="Main navigation">
        <div class="nav-inner">
            <a href="{{url('/')}}" class="nav-logo" aria-label="Air Jake Delivery Services - Home">
                <div class="logo-icon" aria-hidden="true"><i class="fa-solid fa-plane-departure"></i></div>
                <div class="logo-text">
                    <span class="logo-title">AIR JAKE</span>
                    <span class="logo-subtitle">Delivery Services</span>
                </div>
            </a>

            <ul class="nav-links" role="list">
                <li><a href="{{url('/')}}" class="active" aria-current="page">
                    <i class="fa-solid fa-house" aria-hidden="true"></i> Home
                </a></li>
                <li><a href="#trackID">
                    <i class="fa-solid fa-location-dot" aria-hidden="true"></i> Track Parcel
                </a></li>
                <li><a href="#serviceID">
                    <i class="fa-solid fa-boxes-stacked" aria-hidden="true"></i> Services
                </a></li>
                <li><a href="{{url('/contact')}}">
                    <i class="fa-solid fa-envelope" aria-hidden="true"></i> Contact
                </a></li>
                    @if(!Auth::check())
                    <li>
                    <a href="{{url('/login')}}">
                    <i class="fa-solid fa-envelope" aria-hidden="true"></i> Login
                  </a>
                </li>
                       @else
                    <li>
                <a href="{{url('/admin/dashboard')}}">
                    <i class="fa-solid fa-envelope" aria-hidden="true"></i> Dashboard
                  </a>
                </li>
                  @endif

            </ul>

            {{--<div class="nav-cta">
                
                <a href="{{url('')}}" class="btn-secondary">
                    <i class="fa-solid fa-right-to-bracket" aria-hidden="true"></i> Log In
                </a>
               
                <a href="{{url('/admin/dashboard')}}" class="btn-primary">
                    <i class="fa-solid fa-gauge-high" aria-hidden="true"></i> Admin Portal
                </a>
              
            </div>--}}

            <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobileDrawer">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>

    <div class="drawer-overlay" id="drawerOverlay" onclick="closeDrawer()" role="presentation"></div>
    <aside class="mobile-drawer" id="mobileDrawer" aria-label="Mobile navigation" role="dialog" aria-modal="true">
        <div class="drawer-header">
            <a href="#" class="nav-logo" aria-label="Air Jake Home">
                <div class="logo-icon" style="width:32px;height:32px;font-size:0.9rem;" aria-hidden="true">
                    <i class="fa-solid fa-plane-departure"></i>
                </div>
                <div class="logo-text">
                    <span class="logo-title" style="font-size:1.1rem;">AIR JAKE</span>
                    <span class="logo-subtitle">Delivery Services</span>
                </div>
            </a>
            <button class="drawer-close" onclick="closeDrawer()" aria-label="Close menu">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <nav class="drawer-nav" aria-label="Mobile links">
            <a href="{{url('/')}}" aria-current="page"><i class="fa-solid fa-house"></i> Home</a>
            <a href="#trackID"><i class="fa-solid fa-location-dot"></i> Track Parcel</a>
            <a href="#serviceID"><i class="fa-solid fa-boxes-stacked"></i> Services</a>
            <a href="{{url('/contact')}}"><i class="fa-solid fa-envelope"></i> Contact</a>
            <div class="drawer-divider"></div>
            @if(!Auth::check())
            <a href="{{url('/login')}}"><i class="fa-solid fa-right-to-bracket"></i> Log In</a>
            @else
             <a href="{{url('/admin/dashboard')}}"><i class="fa-solid fa-right-to-bracket"></i> Dashboard</a>
            @endif
        </nav>

        <!-- Mobile language selector -->
        <div class="drawer-lang-wrap">
            <p><i class="fa-solid fa-globe"></i> Language</p>
            <div class="lang-selector" id="langSelectorMobile">
                <div class="lang-trigger" id="langTriggerMobile" onclick="toggleLang('Mobile')" role="button" aria-haspopup="listbox" aria-expanded="false" tabindex="0">
                    <span class="lang-flag" id="langFlagMobile">🇬🇧</span>
                    <span class="lang-name" id="langNameMobile">English</span>
                    <i class="fa-solid fa-chevron-down lang-chevron"></i>
                </div>
                <div class="lang-dropdown" id="langDropdownMobile" role="listbox" aria-label="Select language">
                    <div class="lang-search-wrap">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input class="lang-search" type="text" placeholder="Search language..." oninput="filterLangs(this,'Mobile')" aria-label="Search languages">
                    </div>
                    <!-- populated by JS -->
                </div>
            </div>
        </div>

        {{--<div class="drawer-actions">
            @if(Auth::check())
            <a href="{{url('/admin/dashboard')}}" class="btn-primary" style="justify-content:center;">
                <i class="fa-solid fa-gauge-high"></i> Admin Portal
            </a>
            @endif
        </div>--}}
    </aside>

    <main id="main-content">
        @yield('content')
    </main>

    <footer role="contentinfo">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="#" class="nav-logo" style="margin-bottom:0.5rem;display:inline-flex;">
                    <div class="logo-icon" style="width:36px;height:36px;font-size:0.95rem;">
                        <i class="fa-solid fa-plane-departure"></i>
                    </div>
                    <div class="logo-text">
                        <span class="logo-title" style="font-size:1.15rem;">AIR JAKE</span>
                        <span class="logo-subtitle">Delivery Services</span>
                    </div>
                </a>
                <p>Premium logistics solutions trusted by thousands of businesses and individuals worldwide. Safe, verified, and transparent distribution — every time.</p>
                <div class="footer-social" aria-label="Social media links">
                    <a href="#" class="social-btn" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social-btn" aria-label="Twitter/X"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="social-btn" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-btn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="social-btn" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Home</a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Track Parcel</a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Services</a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Rates &amp; Pricing</a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i>FAQ</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Express Courier</a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Air Freight</a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i>International Shipping</a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Fragile Handling</a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Bulk Logistics</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Contact</h4>
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
                    <span>Mon–Sat: 7AM – 9PM</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fa-solid fa-headset"></i>
                    <a href="#">24/7 Live Support</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-inner">
                <p>&copy; 2026 Air Jake Delivery Services Ltd. All rights reserved.</p>
                <div class="footer-badges">
                    <span class="badge">SSL SECURE</span>
                    <span class="badge">ISO 9001</span>
                    <span class="badge">GDPR COMPLIANT</span>
                </div>
                <p>
                    <a href="#" style="color:rgba(255,255,255,0.4);text-decoration:none;margin-right:1rem;font-size:0.72rem;">Privacy Policy</a>
                    <a href="#" style="color:rgba(255,255,255,0.4);text-decoration:none;font-size:0.72rem;">Terms of Service</a>
                </p>
            </div>
        </div>
    </footer>

    <script>
    /* ════════════════════════════════════════════════
       CUSTOM LANGUAGE TRANSLATOR — NO GOOGLE DEPENDENCY
       Uses MyMemory / LibreTranslate fallback pattern.
       Translates via fetch to MyMemory free API.
    ════════════════════════════════════════════════ */

    const LANGUAGES = [
        // ── Africa ──────────────────────────────────
        { code:'en',  flag:'🇬🇧', name:'English',             native:'English',           group:'Common' },
        { code:'fr',  flag:'🇫🇷', name:'French',              native:'Français',           group:'Common' },
        { code:'es',  flag:'🇪🇸', name:'Spanish',             native:'Español',            group:'Common' },
        { code:'ar',  flag:'🇸🇦', name:'Arabic',              native:'العربية',            group:'Common' },
        { code:'zh',  flag:'🇨🇳', name:'Chinese (Simplified)',native:'中文(简体)',           group:'Common' },
        { code:'pt',  flag:'🇧🇷', name:'Portuguese',          native:'Português',          group:'Common' },
        // ── Europe ──────────────────────────────────
        { code:'de',  flag:'🇩🇪', name:'German',              native:'Deutsch',            group:'Europe' },
        { code:'it',  flag:'🇮🇹', name:'Italian',             native:'Italiano',           group:'Europe' },
        { code:'nl',  flag:'🇳🇱', name:'Dutch',               native:'Nederlands',         group:'Europe' },
        { code:'pl',  flag:'🇵🇱', name:'Polish',              native:'Polski',             group:'Europe' },
        { code:'ru',  flag:'🇷🇺', name:'Russian',             native:'Русский',            group:'Europe' },
        { code:'uk',  flag:'🇺🇦', name:'Ukrainian',           native:'Українська',         group:'Europe' },
        { code:'ro',  flag:'🇷🇴', name:'Romanian',            native:'Română',             group:'Europe' },
        { code:'cs',  flag:'🇨🇿', name:'Czech',               native:'Čeština',            group:'Europe' },
        { code:'hu',  flag:'🇭🇺', name:'Hungarian',           native:'Magyar',             group:'Europe' },
        { code:'sv',  flag:'🇸🇪', name:'Swedish',             native:'Svenska',            group:'Europe' },
        { code:'da',  flag:'🇩🇰', name:'Danish',              native:'Dansk',              group:'Europe' },
        { code:'fi',  flag:'🇫🇮', name:'Finnish',             native:'Suomi',              group:'Europe' },
        { code:'nb',  flag:'🇳🇴', name:'Norwegian',           native:'Norsk',              group:'Europe' },
        { code:'el',  flag:'🇬🇷', name:'Greek',               native:'Ελληνικά',           group:'Europe' },
        { code:'tr',  flag:'🇹🇷', name:'Turkish',             native:'Türkçe',             group:'Europe' },
        { code:'sk',  flag:'🇸🇰', name:'Slovak',              native:'Slovenčina',         group:'Europe' },
        { code:'bg',  flag:'🇧🇬', name:'Bulgarian',           native:'Български',          group:'Europe' },
        { code:'hr',  flag:'🇭🇷', name:'Croatian',            native:'Hrvatski',           group:'Europe' },
        { code:'sr',  flag:'🇷🇸', name:'Serbian',             native:'Српски',             group:'Europe' },
        { code:'ca',  flag:'🏴', name:'Catalan',              native:'Català',             group:'Europe' },
        { code:'lt',  flag:'🇱🇹', name:'Lithuanian',          native:'Lietuvių',           group:'Europe' },
        { code:'lv',  flag:'🇱🇻', name:'Latvian',             native:'Latviešu',           group:'Europe' },
        { code:'et',  flag:'🇪🇪', name:'Estonian',            native:'Eesti',              group:'Europe' },
        { code:'sl',  flag:'🇸🇮', name:'Slovenian',           native:'Slovenščina',        group:'Europe' },
        { code:'is',  flag:'🇮🇸', name:'Icelandic',           native:'Íslenska',           group:'Europe' },
        { code:'ga',  flag:'🇮🇪', name:'Irish',               native:'Gaeilge',            group:'Europe' },
        { code:'cy',  flag:'🏴󠁧󠁢󠁷󠁬󠁳󠁿', name:'Welsh',              native:'Cymraeg',            group:'Europe' },
        { code:'sq',  flag:'🇦🇱', name:'Albanian',            native:'Shqip',              group:'Europe' },
        { code:'mk',  flag:'🇲🇰', name:'Macedonian',          native:'Македонски',         group:'Europe' },
        { code:'be',  flag:'🇧🇾', name:'Belarusian',          native:'Беларуская',         group:'Europe' },
        // ── Asia ────────────────────────────────────
        { code:'ja',  flag:'🇯🇵', name:'Japanese',            native:'日本語',              group:'Asia' },
        { code:'ko',  flag:'🇰🇷', name:'Korean',              native:'한국어',              group:'Asia' },
        { code:'hi',  flag:'🇮🇳', name:'Hindi',               native:'हिन्दी',              group:'Asia' },
        { code:'bn',  flag:'🇧🇩', name:'Bengali',             native:'বাংলা',              group:'Asia' },
        { code:'ur',  flag:'🇵🇰', name:'Urdu',                native:'اردو',               group:'Asia' },
        { code:'fa',  flag:'🇮🇷', name:'Persian (Farsi)',      native:'فارسی',              group:'Asia' },
        { code:'th',  flag:'🇹🇭', name:'Thai',                native:'ภาษาไทย',            group:'Asia' },
        { code:'vi',  flag:'🇻🇳', name:'Vietnamese',          native:'Tiếng Việt',         group:'Asia' },
        { code:'id',  flag:'🇮🇩', name:'Indonesian',          native:'Bahasa Indonesia',   group:'Asia' },
        { code:'ms',  flag:'🇲🇾', name:'Malay',               native:'Bahasa Melayu',      group:'Asia' },
        { code:'tl',  flag:'🇵🇭', name:'Filipino (Tagalog)',  native:'Filipino',           group:'Asia' },
        { code:'my',  flag:'🇲🇲', name:'Burmese',             native:'မြန်မာဘာသာ',         group:'Asia' },
        { code:'km',  flag:'🇰🇭', name:'Khmer',               native:'ភាសាខ្មែរ',           group:'Asia' },
        { code:'lo',  flag:'🇱🇦', name:'Lao',                 native:'ພາສາລາວ',            group:'Asia' },
        { code:'ne',  flag:'🇳🇵', name:'Nepali',              native:'नेपाली',              group:'Asia' },
        { code:'si',  flag:'🇱🇰', name:'Sinhala',             native:'සිංහල',              group:'Asia' },
        { code:'ta',  flag:'🇮🇳', name:'Tamil',               native:'தமிழ்',              group:'Asia' },
        { code:'te',  flag:'🇮🇳', name:'Telugu',              native:'తెలుగు',             group:'Asia' },
        { code:'ml',  flag:'🇮🇳', name:'Malayalam',           native:'മലയാളം',             group:'Asia' },
        { code:'gu',  flag:'🇮🇳', name:'Gujarati',            native:'ગુજરાતી',            group:'Asia' },
        { code:'pa',  flag:'🇮🇳', name:'Punjabi',             native:'ਪੰਜਾਬੀ',             group:'Asia' },
        { code:'mr',  flag:'🇮🇳', name:'Marathi',             native:'मराठी',              group:'Asia' },
        { code:'kn',  flag:'🇮🇳', name:'Kannada',             native:'ಕನ್ನಡ',              group:'Asia' },
        { code:'uz',  flag:'🇺🇿', name:'Uzbek',               native:'O\'zbek',            group:'Asia' },
        { code:'kk',  flag:'🇰🇿', name:'Kazakh',              native:'Қазақ',              group:'Asia' },
        { code:'az',  flag:'🇦🇿', name:'Azerbaijani',         native:'Azərbaycan',         group:'Asia' },
        { code:'hy',  flag:'🇦🇲', name:'Armenian',            native:'Հայերեն',            group:'Asia' },
        { code:'ka',  flag:'🇬🇪', name:'Georgian',            native:'ქართული',            group:'Asia' },
        { code:'mn',  flag:'🇲🇳', name:'Mongolian',           native:'Монгол',             group:'Asia' },
        { code:'zh-TW',flag:'🇹🇼',name:'Chinese (Traditional)',native:'中文(繁體)',          group:'Asia' },
        { code:'he',  flag:'🇮🇱', name:'Hebrew',              native:'עברית',              group:'Asia' },
        // ── Africa ──────────────────────────────────
        { code:'sw',  flag:'🇹🇿', name:'Swahili',             native:'Kiswahili',          group:'Africa' },
        { code:'yo',  flag:'🇳🇬', name:'Yoruba',              native:'Yorùbá',             group:'Africa' },
        { code:'ig',  flag:'🇳🇬', name:'Igbo',                native:'Igbo',               group:'Africa' },
        { code:'ha',  flag:'🇳🇬', name:'Hausa',               native:'Hausa',              group:'Africa' },
        { code:'am',  flag:'🇪🇹', name:'Amharic',             native:'አማርኛ',              group:'Africa' },
        { code:'so',  flag:'🇸🇴', name:'Somali',              native:'Soomaali',           group:'Africa' },
        { code:'zu',  flag:'🇿🇦', name:'Zulu',                native:'isiZulu',            group:'Africa' },
        { code:'xh',  flag:'🇿🇦', name:'Xhosa',               native:'isiXhosa',           group:'Africa' },
        // ── Americas ────────────────────────────────
        { code:'ht',  flag:'🇭🇹', name:'Haitian Creole',      native:'Kreyòl ayisyen',     group:'Americas' },
        { code:'qu',  flag:'🇵🇪', name:'Quechua',             native:'Runasimi',           group:'Americas' },
         { code: 'ar-YE', flag: 'YE', name: 'Yemen',       native: 'اليمن',      group: 'Asia' },
   { code: 'ar-SY', flag: 'SY', name: 'Syria',       native: 'سوريا',      group: 'Asia' },
   { code: 'ps',    flag: 'AF', name: 'Afghanistan', native: 'افغانستان',  group: 'Asia'        },
    ];

    var currentLang = { code:'en', flag:'🇬🇧', name:'English' };
    var translateCache = {};

    // ── Build dropdown HTML ──────────────────────────────────────────────────
    function buildLangDropdown(suffix) {
        var dropdown = document.getElementById('langDropdown' + suffix);
        var groups = {};
        LANGUAGES.forEach(function(l) {
            if (!groups[l.group]) groups[l.group] = [];
            groups[l.group].push(l);
        });

        // Search box already in HTML; append group items
        var html = '';
        var groupOrder = ['Common','Europe','Asia','Africa','Americas'];
        groupOrder.forEach(function(g) {
            if (!groups[g]) return;
            html += '<div class="lang-group-label" data-group="' + g + '">' + g + '</div>';
            groups[g].forEach(function(l) {
                html += '<div class="lang-option' + (l.code === 'en' ? ' selected' : '') + '" '
                    + 'data-code="' + l.code + '" '
                    + 'data-name="' + l.name + '" '
                    + 'data-flag="' + l.flag + '" '
                    + 'onclick="selectLang(this,\'' + suffix + '\')" '
                    + 'role="option" aria-selected="' + (l.code === 'en' ? 'true' : 'false') + '">'
                    + '<span class="lang-opt-flag">' + l.flag + '</span>'
                    + '<span class="lang-opt-name">' + l.name + '</span>'
                    + '<span class="lang-opt-native">' + l.native + '</span>'
                    + '</div>';
            });
        });

        // Append after search wrap (which is already in HTML)
        dropdown.insertAdjacentHTML('beforeend', html);
    }

    function toggleLang(suffix) {
        var sel = document.getElementById('langSelector' + suffix);
        var trigger = document.getElementById('langTrigger' + suffix);
        var isOpen = sel.classList.contains('open');

        // Close all open selectors first
        document.querySelectorAll('.lang-selector.open').forEach(function(s) {
            s.classList.remove('open');
            var t = s.querySelector('.lang-trigger');
            if (t) t.setAttribute('aria-expanded','false');
        });

        if (!isOpen) {
            sel.classList.add('open');
            trigger.setAttribute('aria-expanded','true');
            // Focus search
            var input = sel.querySelector('.lang-search');
            if (input) setTimeout(function() { input.focus(); }, 80);
        }
    }

    function filterLangs(input, suffix) {
        var q = input.value.toLowerCase();
        var dropdown = document.getElementById('langDropdown' + suffix);
        dropdown.querySelectorAll('.lang-option').forEach(function(opt) {
            var name = (opt.dataset.name || '').toLowerCase();
            var native = (opt.querySelector('.lang-opt-native')||{}).textContent || '';
            opt.style.display = (!q || name.includes(q) || native.toLowerCase().includes(q)) ? '' : 'none';
        });
        // Hide group labels with all children hidden
        dropdown.querySelectorAll('.lang-group-label').forEach(function(label) {
            var group = label.dataset.group;
            var anyVisible = false;
            dropdown.querySelectorAll('.lang-option').forEach(function(opt) {
                // rough group match by order
                anyVisible = anyVisible || (opt.style.display !== 'none');
            });
            label.style.display = anyVisible ? '' : 'none';
        });
    }

    function selectLang(el, suffix) {
        var code  = el.dataset.code;
        var name  = el.dataset.name;
        var flag  = el.dataset.flag;

        // Update trigger for both desktop and mobile
        ['Desktop','Mobile'].forEach(function(s) {
            var f = document.getElementById('langFlag' + s);
            var n = document.getElementById('langName' + s);
            if (f) f.textContent = flag;
            if (n) n.textContent = name;
            // Update selected state in dropdown
            var dd = document.getElementById('langDropdown' + s);
            if (dd) {
                dd.querySelectorAll('.lang-option').forEach(function(opt) {
                    opt.classList.toggle('selected', opt.dataset.code === code);
                    opt.setAttribute('aria-selected', opt.dataset.code === code ? 'true' : 'false');
                });
            }
        });

        // Close all selectors
        document.querySelectorAll('.lang-selector.open').forEach(function(s) {
            s.classList.remove('open');
        });

        currentLang = { code: code, flag: flag, name: name };

        if (code === 'en') {
            resetLang();
            return;
        }

        translatePage(code, name);
    }

    // ── Translation engine (MyMemory API — free, no key needed for low volume) ──
    var originalTexts = null;

    function getTextNodes(root) {
        var nodes = [];
        var walker = document.createTreeWalker(
            root,
            NodeFilter.SHOW_TEXT,
            {
                acceptNode: function(node) {
                    var parent = node.parentNode;
                    var tag = parent ? parent.tagName : '';
                    // Skip scripts, styles, inputs, heads, translate UI itself
                    if (['SCRIPT','STYLE','NOSCRIPT','INPUT','TEXTAREA','SELECT'].indexOf(tag) !== -1) return NodeFilter.FILTER_REJECT;
                    if (parent && parent.closest && parent.closest('.lang-selector')) return NodeFilter.FILTER_REJECT;
                    if (parent && parent.closest && parent.closest('.translate-banner')) return NodeFilter.FILTER_REJECT;
                    if (parent && parent.closest && parent.closest('.country-bar')) return NodeFilter.FILTER_REJECT;
                    var text = node.nodeValue.trim();
                    if (!text) return NodeFilter.FILTER_REJECT;
                    return NodeFilter.FILTER_ACCEPT;
                }
            }
        );
        var n;
        while (n = walker.nextNode()) nodes.push(n);
        return nodes;
    }

    function saveOriginals() {
        if (originalTexts) return;
        originalTexts = {};
        var nodes = getTextNodes(document.body);
        nodes.forEach(function(node, i) {
            node._tid = i;
            originalTexts[i] = node.nodeValue;
        });
    }

    function resetLang() {
        if (!originalTexts) return;
        var nodes = getTextNodes(document.body);
        nodes.forEach(function(node) {
            if (node._tid !== undefined && originalTexts[node._tid] !== undefined) {
                node.nodeValue = originalTexts[node._tid];
            }
        });
        document.getElementById('translateBanner').classList.remove('visible');
        ['Desktop','Mobile'].forEach(function(s) {
            var f = document.getElementById('langFlag' + s);
            var n = document.getElementById('langName' + s);
            if (f) f.textContent = '🇬🇧';
            if (n) n.textContent = 'English';
            var dd = document.getElementById('langDropdown' + s);
            if (dd) dd.querySelectorAll('.lang-option').forEach(function(opt) {
                opt.classList.toggle('selected', opt.dataset.code === 'en');
            });
        });
        currentLang = { code:'en', flag:'🇬🇧', name:'English' };
    }

    function translatePage(langCode, langName) {
        saveOriginals();

        // Show banner
        var banner = document.getElementById('translateBanner');
        document.getElementById('translateBannerLang').textContent = langName;
        banner.classList.add('visible');

        // Collect unique text strings
        var nodes = getTextNodes(document.body);
        var uniqueTexts = [];
        var seen = {};
        nodes.forEach(function(node) {
            var t = node.nodeValue.trim();
            if (t && !seen[t]) { seen[t] = true; uniqueTexts.push(t); }
        });

        // Check cache
        var cacheKey = langCode;
        if (translateCache[cacheKey]) {
            applyTranslations(nodes, translateCache[cacheKey], langCode);
            return;
        }

        // Batch translate — MyMemory supports up to ~500 chars per request
        // We batch into chunks of 10 strings to avoid rate limits
        var translations = {};
        var pending = uniqueTexts.slice();
        var batchSize = 8;

        function nextBatch() {
            if (pending.length === 0) {
                translateCache[cacheKey] = translations;
                applyTranslations(nodes, translations, langCode);
                return;
            }
            var batch = pending.splice(0, batchSize);
            var promises = batch.map(function(text) {
                // Skip single chars and numbers
                if (text.length < 3 || /^\d+$/.test(text)) {
                    return Promise.resolve({ text: text, translated: text });
                }
                var url = 'https://api.mymemory.translated.net/get?q='
                    + encodeURIComponent(text)
                    + '&langpair=en|' + langCode
                    + '&de=airjakedeliveryservices@gmail.com';
                return fetch(url)
                    .then(function(r) { return r.json(); })
                    .then(function(data) {
                        var t = (data.responseData && data.responseData.translatedText) ? data.responseData.translatedText : text;
                        return { text: text, translated: t };
                    })
                    .catch(function() { return { text: text, translated: text }; });
            });

            Promise.all(promises).then(function(results) {
                results.forEach(function(r) { translations[r.text] = r.translated; });
                setTimeout(nextBatch, 120); // small delay to respect rate limits
            });
        }

        nextBatch();
    }

    function applyTranslations(nodes, translations, langCode) {
        var rtlLangs = ['ar','he','fa','ur'];
        var isRTL = rtlLangs.indexOf(langCode) !== -1;
        document.documentElement.dir = isRTL ? 'rtl' : 'ltr';

        nodes.forEach(function(node) {
            var t = node.nodeValue.trim();
            if (translations[t]) {
                node.nodeValue = translations[t];
            }
        });
    }

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.lang-selector')) {
            document.querySelectorAll('.lang-selector.open').forEach(function(s) {
                s.classList.remove('open');
                var trigger = s.querySelector('.lang-trigger');
                if (trigger) trigger.setAttribute('aria-expanded','false');
            });
        }
    });

    // Keyboard navigation for lang selector
    document.addEventListener('keydown', function(e) {
        var openSel = document.querySelector('.lang-selector.open');
        if (!openSel) return;
        if (e.key === 'Escape') {
            openSel.classList.remove('open');
            openSel.querySelector('.lang-trigger').focus();
        }
    });

    // ── Init dropdowns ───────────────────────────────────────────────────────
    buildLangDropdown('Desktop');
    buildLangDropdown('Mobile');

    /* ─── HAMBURGER & DRAWER CONTROLS ─── */
    var hamburger = document.getElementById('hamburger');
    var drawer    = document.getElementById('mobileDrawer');
    var overlay   = document.getElementById('drawerOverlay');

    function openDrawer() {
        hamburger.classList.add('open');
        drawer.classList.add('open');
        overlay.classList.add('open');
        document.body.style.overflow = 'hidden';
        hamburger.setAttribute('aria-expanded', 'true');
        var first = drawer.querySelector('a');
        if (first) first.focus();
    }
    function closeDrawer() {
        hamburger.classList.remove('open');
        drawer.classList.remove('open');
        overlay.classList.remove('open');
        document.body.style.overflow = '';
        hamburger.setAttribute('aria-expanded', 'false');
    }
    hamburger.addEventListener('click', function() {
        drawer.classList.contains('open') ? closeDrawer() : openDrawer();
    });
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            if (drawer.classList.contains('open')) closeDrawer();
        }
    });

    /* ─── SCROLL PROGRESS ─── */
    var progressBar = document.getElementById('scrollProgress');
    window.addEventListener('scroll', function() {
        var scrollTop  = window.scrollY;
        var docHeight  = document.documentElement.scrollHeight - window.innerHeight;
        var progress   = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
        progressBar.style.width = progress + '%';
    }, { passive: true });
    </script>
</body>
</html>