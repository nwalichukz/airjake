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

        /* ─── GOOGLE TRANSLATE OVERRIDES ─── */
        .goog-te-banner-frame.skiptranslate, .goog-te-gadget-icon { display: none !important; }
        body { top: 0px !important; }
        .goog-te-gadget { font-family: var(--font-body) !important; color: transparent !important; font-size: 0 !important; }
        .goog-te-gadget .goog-te-combo {
            background: rgba(255,255,255,0.07);
            border: 1px solid rgba(255,255,255,0.12);
            color: white !important;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 0.78rem !important;
            font-weight: 500;
            outline: none;
            cursor: pointer;
            font-family: var(--font-body) !important;
            transition: all 0.18s;
            min-width: 160px;
        }
        .goog-te-gadget .goog-te-combo:hover {
            background-color: rgba(238,27,36,0.15);
            border-color: var(--red);
        }
        .goog-te-gadget .goog-te-combo option { background: var(--navy); color: white; }

        /* Mobile specific styling override for translator inside drawer */
        .drawer-translator .goog-te-gadget .goog-te-combo {
            width: 100%;
            background: rgba(255,255,255,0.04);
            border-color: rgba(255,255,255,0.08);
            padding: 8px 12px;
        }

        /* ─── SKIP LINK ─── */
        .skip-link {
            position: absolute; top: -100px; left: 1rem;
            background: var(--red); color: #fff;
            padding: 0.5rem 1rem; border-radius: 0 0 8px 8px;
            z-index: 9999; font-weight: 600; transition: top 0.2s;
        }
        .skip-link:focus { top: 0; }

        /* ─── TRANSLATOR / COUNTRY BAR ─── */
        .country-bar {
            background: var(--navy);
            border-bottom: 1px solid rgba(255,255,255,0.06);
            padding: 6px 0;
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

        .top-selectors-wrap {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

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

        /* Logo */
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

        /* Desktop nav links */
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

        /* CTA */
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

        /* Hamburger */
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

        /* Mobile drawer */
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

        /* Drawer translator styling container */
        .drawer-translator {
            padding: 0 1rem 1rem;
        }
        .drawer-translator p {
            color: var(--gray-400); font-size: 0.72rem;
            letter-spacing: 0.1em; text-transform: uppercase;
            margin-bottom: 0.6rem; font-weight: 600;
            display: flex; align-items: center; gap: 0.4rem;
        }
        .drawer-translator p i { color: var(--gold); }

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

    <div class="country-bar" role="navigation" aria-label="Language selection">
        <div class="country-bar-inner">
            <div class="country-info">
                <i class="fa-solid fa-globe"></i>
                <span>Select Language / Configurer la langue:</span>
            </div>
            
            <div class="top-selectors-wrap">
                <div id="google_translate_element"></div>
            </div>
        </div>
    </div>

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
            </ul>

            <div class="nav-cta">
                @if(!Auth::check())
                <a href="{{url('/login')}}" class="btn-secondary">
                    <i class="fa-solid fa-right-to-bracket" aria-hidden="true"></i> Log In
                </a>
                @else
                <a href="{{url('/admin/dashboard')}}" class="btn-primary">
                    <i class="fa-solid fa-gauge-high" aria-hidden="true"></i> Admin Portal
                </a>
                @endif
            </div>

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
            @endif
        </nav>
        
        <div class="drawer-translator">
            <p><i class="fa-solid fa-globe"></i> Language</p>
            <div id="google_translate_element_mobile"></div>
        </div>

        <div class="drawer-actions">
            @if(Auth::check())
            <a href="{{url('/admin/dashboard')}}" class="btn-primary" style="justify-content:center;">
                <i class="fa-solid fa-gauge-high"></i> Admin Portal
            </a>
            @endif
        </div>
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

    <script type="text/javascript">
    function googleTranslateElementInit() {
        // Initializes desktop translator element
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false
        }, 'google_translate_element');

        // Initializes drawer mobile translator element 
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false
        }, 'google_translate_element_mobile');
    }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script>
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