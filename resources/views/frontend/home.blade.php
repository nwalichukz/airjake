@extends('layouts.app')

@section('content')

{{-- ═══════════════════════════════════════════════════
     HERO SECTION — Air Jake Delivery Services
     Mobile-first. Blue/red brand. Professional.
══════════════════════════════════════════════════════ --}}

<style>
    /* ── CSS Variables ── */
    :root {
        --aj-navy:       #0B2545;
        --aj-navy-mid:   #134074;
        --aj-navy-light: #1a4f8a;
        --aj-red:        #EE1B24;
        --aj-red-dark:   #C4151D;
        --aj-red-glow:   rgba(238,27,36,0.18);
        --aj-white:      #ffffff;
        --aj-font:       'Outfit', sans-serif;
        --aj-font-d:     'Bebas Neue', sans-serif;
    }

    /* ── Hero wrapper ── */
    .aj-hero {
        position: relative;
        background: var(--aj-navy);
        overflow: hidden;
        padding: 4rem 1.25rem 3.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100svh;
    }

    /* Grid dot texture */
    .aj-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(255,255,255,0.06) 1px, transparent 1px);
        background-size: 22px 22px;
        pointer-events: none;
    }

    /* Red radial glow — bottom-left */
    .aj-hero::after {
        content: '';
        position: absolute;
        bottom: -120px;
        left: -80px;
        width: 420px;
        height: 420px;
        background: radial-gradient(circle, rgba(238,27,36,0.14) 0%, transparent 70%);
        pointer-events: none;
    }

    /* Blue radial glow — top-right */
    .aj-hero-glow2 {
        position: absolute;
        top: -100px;
        right: -80px;
        width: 380px;
        height: 380px;
        background: radial-gradient(circle, rgba(19,64,116,0.55) 0%, transparent 70%);
        pointer-events: none;
        border-radius: 50%;
    }

    /* Diagonal accent stripe */
    .aj-hero-stripe {
        position: absolute;
        top: 0;
        right: 0;
        width: 260px;
        height: 6px;
        background: var(--aj-red);
        transform-origin: top right;
        transform: rotate(0deg);
        opacity: 0.7;
    }

    /* ── Inner content ── */
    .aj-hero-inner {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 720px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0;
        text-align: center;
    }

    /* ── Eyebrow badge ── */
    .aj-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        background: rgba(238,27,36,0.12);
        border: 1px solid rgba(238,27,36,0.28);
        color: #ff7b80;
        font-family: var(--aj-font);
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        padding: 0.38rem 1rem;
        border-radius: 100px;
        margin-bottom: 1.5rem;
        animation: fadeSlideDown 0.6s ease both;
    }
    .aj-eyebrow-dot {
        width: 6px;
        height: 6px;
        background: var(--aj-red);
        border-radius: 50%;
        animation: pulse-dot 2s infinite;
    }
    @keyframes pulse-dot {
        0%, 100% { opacity: 1; transform: scale(1); }
        50%       { opacity: 0.5; transform: scale(0.7); }
    }

    /* ── Headline ── */
    .aj-headline {
        font-family: var(--aj-font-d);
        font-size: clamp(2.4rem, 9vw, 4.4rem);
        line-height: 1.04;
        letter-spacing: 0.03em;
        color: var(--aj-white);
        margin: 0 0 1.1rem;
        animation: fadeSlideDown 0.65s 0.1s ease both;
    }
    .aj-headline .aj-red-word {
        color: var(--aj-red);
        position: relative;
        display: inline-block;
    }
    /* Underline accent on red word */
    .aj-headline .aj-red-word::after {
        content: '';
        position: absolute;
        bottom: 2px;
        left: 0;
        width: 100%;
        height: 3px;
        background: var(--aj-red);
        border-radius: 2px;
        opacity: 0.4;
    }

    /* ── Sub text ── */
    .aj-sub {
        font-family: var(--aj-font);
        font-size: clamp(0.88rem, 2.8vw, 1rem);
        line-height: 1.75;
        color: rgba(255,255,255,0.58);
        max-width: 520px;
        margin: 0 auto 2.5rem;
        animation: fadeSlideDown 0.7s 0.18s ease both;
    }

    /* ── Trust pills ── */
    .aj-trust-pills {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.5rem;
        margin-bottom: 2rem;
        animation: fadeSlideDown 0.72s 0.22s ease both;
    }
    .aj-pill {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        color: rgba(255,255,255,0.65);
        font-family: var(--aj-font);
        font-size: 0.7rem;
        font-weight: 500;
        padding: 0.3rem 0.75rem;
        border-radius: 100px;
        letter-spacing: 0.03em;
    }
    .aj-pill i { color: #4ade80; font-size: 0.65rem; }

    /* ── Search card ── */
    .aj-card {
        width: 100%;
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 20px;
        padding: 1.5rem 1.25rem;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        box-shadow:
            0 1px 0 rgba(255,255,255,0.06) inset,
            0 20px 60px rgba(0,0,0,0.35);
        animation: fadeSlideUp 0.7s 0.28s ease both;
    }

    /* Card label */
    .aj-card-label {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }
    .aj-card-label-line {
        flex: 1;
        height: 1px;
        background: rgba(255,255,255,0.08);
    }
    .aj-card-label span {
        font-family: var(--aj-font);
        font-size: 0.65rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.3);
    }
    .aj-card-label i {
        color: var(--aj-red);
        font-size: 0.7rem;
    }

    /* ── Form ── */
    .aj-form {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    /* Input wrapper */
    .aj-input-wrap {
        position: relative;
        flex: 1;
    }
    .aj-input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: rgba(255,255,255,0.35);
        font-size: 1rem;
        pointer-events: none;
        z-index: 1;
        transition: color 0.2s;
    }
    .aj-input {
        width: 100%;
        background: rgba(255,255,255,0.06);
        border: 1.5px solid rgba(255,255,255,0.1);
        border-radius: 12px;
        padding: 1rem 3rem 1rem 3rem;
        color: white;
        font-family: var(--aj-font);
        font-size: 0.95rem;
        font-weight: 500;
        letter-spacing: 0.05em;
        transition: border-color 0.2s, background 0.2s, box-shadow 0.2s;
        -webkit-appearance: none;
        outline: none;
        /* Full-width on mobile */
        box-sizing: border-box;
    }
    .aj-input::placeholder {
        color: rgba(255,255,255,0.25);
        font-weight: 400;
        letter-spacing: 0.02em;
        font-size: 0.85rem;
    }
    .aj-input:focus {
        border-color: var(--aj-red);
        background: rgba(255,255,255,0.09);
        box-shadow: 0 0 0 3px rgba(238,27,36,0.15);
    }
    .aj-input:focus + .aj-input-icon,
    .aj-input-wrap:focus-within .aj-input-icon {
        color: var(--aj-red);
    }
    /* Clear button inside input */
    .aj-input-clear {
        position: absolute;
        right: 0.85rem;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255,255,255,0.1);
        border: none;
        color: rgba(255,255,255,0.5);
        width: 22px;
        height: 22px;
        border-radius: 50%;
        cursor: pointer;
        display: none;
        align-items: center;
        justify-content: center;
        font-size: 0.65rem;
        transition: background 0.2s;
    }
    .aj-input-clear:hover { background: rgba(255,255,255,0.2); }
    .aj-input-wrap.has-value .aj-input-clear { display: flex; }

    /* Submit button */
    .aj-submit {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.55rem;
        background: var(--aj-red);
        color: white;
        border: none;
        border-radius: 12px;
        padding: 1rem 1.5rem;
        font-family: var(--aj-font);
        font-size: 0.92rem;
        font-weight: 700;
        letter-spacing: 0.04em;
        cursor: pointer;
        transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
        box-shadow: 0 6px 22px rgba(238,27,36,0.38);
        white-space: nowrap;
        -webkit-tap-highlight-color: transparent;
        width: 100%;
    }
    .aj-submit:hover {
        background: var(--aj-red-dark);
        transform: translateY(-1px);
        box-shadow: 0 8px 28px rgba(238,27,36,0.5);
    }
    .aj-submit:active { transform: translateY(0); box-shadow: 0 4px 14px rgba(238,27,36,0.35); }
    .aj-submit i { font-size: 0.85rem; transition: transform 0.2s; }
    .aj-submit:hover i { transform: translateX(3px); }

    /* ── Quick-track links ── */
    .aj-quick-links {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        flex-wrap: wrap;
        margin-top: 1rem;
        font-family: var(--aj-font);
        font-size: 0.72rem;
        color: rgba(255,255,255,0.35);
    }
    .aj-quick-links a {
        color: rgba(255,255,255,0.5);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        font-weight: 500;
        transition: color 0.18s;
    }
    .aj-quick-links a:hover { color: var(--aj-red); }
    .aj-quick-links a i { font-size: 0.65rem; }
    .aj-quick-sep { opacity: 0.2; }

    /* ── Stats row ── */
    .aj-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0.75rem;
        width: 100%;
        margin-top: 2rem;
        animation: fadeSlideUp 0.72s 0.36s ease both;
    }
    .aj-stat {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.07);
        border-radius: 14px;
        padding: 1rem 0.75rem;
        text-align: center;
    }
    .aj-stat-num {
        font-family: var(--aj-font-d);
        font-size: clamp(1.5rem, 5vw, 2rem);
        color: white;
        letter-spacing: 0.04em;
        line-height: 1;
        margin-bottom: 0.35rem;
    }
    .aj-stat-num span { color: var(--aj-red); }
    .aj-stat-label {
        font-family: var(--aj-font);
        font-size: 0.65rem;
        font-weight: 500;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.38);
    }

    /* ── Scroll hint ── */
    .aj-scroll-hint {
        position: absolute;
        bottom: 1.5rem;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.4rem;
        color: rgba(255,255,255,0.2);
        font-family: var(--aj-font);
        font-size: 0.62rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        z-index: 2;
    }
    .aj-scroll-mouse {
        width: 20px;
        height: 32px;
        border: 1.5px solid rgba(255,255,255,0.15);
        border-radius: 10px;
        position: relative;
        display: flex;
        justify-content: center;
        padding-top: 5px;
    }
    .aj-scroll-mouse::before {
        content: '';
        width: 3px;
        height: 7px;
        background: rgba(255,255,255,0.3);
        border-radius: 2px;
        animation: scroll-bob 1.8s ease-in-out infinite;
    }
    @keyframes scroll-bob {
        0%, 100% { transform: translateY(0); opacity: 0.8; }
        50%       { transform: translateY(5px); opacity: 0.2; }
    }

    /* ── Keyframes ── */
    @keyframes fadeSlideDown {
        from { opacity: 0; transform: translateY(-16px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeSlideUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* ── Responsive: tablet and up ── */
    @media (min-width: 600px) {
        .aj-hero { padding: 5rem 2rem 4rem; }
        .aj-card { padding: 2rem; }
        .aj-form {
            flex-direction: row;
            align-items: stretch;
        }
        .aj-submit {
            width: auto;
            min-width: 160px;
            flex-shrink: 0;
        }
    }

    @media (min-width: 900px) {
        .aj-hero { min-height: 92svh; padding: 6rem 2.5rem 5rem; }
        .aj-headline { font-size: clamp(3.5rem, 6vw, 5rem); }
    }
</style>

<section class="aj-hero" aria-label="Parcel tracking hero">

    {{-- Decorative elements --}}
    <div class="aj-hero-glow2" aria-hidden="true"></div>
    <div class="aj-hero-stripe" aria-hidden="true"></div>

    <div class="aj-hero-inner">

        {{-- Eyebrow --}}
        <div class="aj-eyebrow" aria-hidden="true">
            <div class="aj-eyebrow-dot"></div>
            <span data-i18n="hero_eyebrow">Live Tracking Terminal</span>
            <div class="aj-eyebrow-dot"></div>
        </div>

        {{-- Headline --}}
        <h1 class="aj-headline">
            <span data-i18n="hero_line1">Global Air Cargo &amp;</span><br>
            <span class="aj-red-word" data-i18n="hero_red_word">Freight Tracking</span>
        </h1>

        {{-- Sub-copy --}}
        <p class="aj-sub" data-i18n="hero_sub">
            Inspect transit manifests, border clearance nodes, and route vectors instantly. Real-time updates, every step of the journey.
        </p>

        {{-- Trust pills --}}
        <div class="aj-trust-pills" aria-label="Trust indicators">
            <span class="aj-pill">
                <i class="fa-solid fa-circle-check fa-xs" aria-hidden="true"></i>
                <span data-i18n="pill_countries">150+ Countries</span>
            </span>
            <span class="aj-pill">
                <i class="fa-solid fa-circle-check fa-xs" aria-hidden="true"></i>
                <span data-i18n="pill_realtime">Real-Time Updates</span>
            </span>
            <span class="aj-pill">
                <i class="fa-solid fa-circle-check fa-xs" aria-hidden="true"></i>
                <span data-i18n="pill_secure">End-to-End Secure</span>
            </span>
        </div>

        {{-- Search Card --}}
        <div class="aj-card" role="search" aria-label="Track your parcel">

            <div class="aj-card-label" aria-hidden="true">
                <div class="aj-card-label-line"></div>
                <i class="fa-solid fa-satellite-dish fa-xs"></i>
                <span data-i18n="card_label">Enter tracking ID to locate your shipment</span>
                <div class="aj-card-label-line"></div>
            </div>

            <form action="" method="GET" class="aj-form" id="trackingForm" novalidate>
                @csrf

                <div class="aj-input-wrap" id="inputWrap">
                    <i class="fa-solid fa-magnifying-glass-location aj-input-icon" aria-hidden="true"></i>
                    <input
                        type="text"
                        name="tracking_id"
                        id="trackingInput"
                        class="aj-input"
                        placeholder="{{ __('e.g. AJD-TX-892100') }}"
                        autocomplete="off"
                        autocorrect="off"
                        autocapitalize="characters"
                        spellcheck="false"
                        inputmode="text"
                        aria-label="{{ __('Tracking ID') }}"
                        aria-describedby="trackingHint"
                        maxlength="30"
                        required
                        value="{{ request('tracking_id') }}"
                    >
                    <button type="button" class="aj-input-clear" id="clearBtn" aria-label="Clear input" tabindex="-1">
                        <i class="fa-solid fa-xmark" aria-hidden="true"></i>
                    </button>
                </div>

                <button type="submit" class="aj-submit" id="submitBtn">
                    <span data-i18n="btn_track">Track Shipment</span>
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </button>

            </form>

            {{-- Quick links --}}
            <div class="aj-quick-links" aria-label="Quick actions">
                <a href="{{ url('#') }}">
                    <i class="fa-solid fa-eye fa-xs"></i>
                    <span data-i18n="link_demo">Try a demo ID</span>
                </a>
                <span class="aj-quick-sep">·</span>
                <a href="{{ route('contact') }}">
                    <i class="fa-solid fa-headset fa-xs"></i>
                    <span data-i18n="link_support">Contact support</span>
                </a>
                <span class="aj-quick-sep">·</span>
                <a href="{{ url('register') }}">
                    <i class="fa-solid fa-box fa-xs"></i>
                    <span data-i18n="link_book">Book a parcel</span>
                </a>
            </div>

            {{-- Validation error --}}
            @if ($errors->has('tracking_id'))
                <p style="color:#ff8a8a;font-size:0.78rem;margin-top:0.75rem;text-align:center;" role="alert">
                    <i class="fa-solid fa-triangle-exclamation fa-xs"></i>
                    {{ $errors->first('tracking_id') }}
                </p>
            @endif

        </div>{{-- /.aj-card --}}

        {{-- Stats row --}}
        <div class="aj-stats" role="list" aria-label="Service statistics">
            <div class="aj-stat" role="listitem">
                <div class="aj-stat-num">150<span>+</span></div>
                <div class="aj-stat-label" data-i18n="stat_countries">Countries</div>
            </div>
            <div class="aj-stat" role="listitem">
                <div class="aj-stat-num">2M<span>+</span></div>
                <div class="aj-stat-label" data-i18n="stat_parcels">Parcels Delivered</div>
            </div>
            <div class="aj-stat" role="listitem">
                <div class="aj-stat-num">99<span>%</span></div>
                <div class="aj-stat-label" data-i18n="stat_ontime">On-Time Rate</div>
            </div>
        </div>

    </div>{{-- /.aj-hero-inner --}}

    {{-- Scroll indicator (hidden on short screens) --}}
    <div class="aj-scroll-hint" aria-hidden="true">
        <div class="aj-scroll-mouse"></div>
        <span data-i18n="scroll_hint">Scroll</span>
    </div>

</section>

{{-- ─── Input UX & i18n Script ─────────────────────────────── --}}
<script>
(function () {
    'use strict';

    /* ── Input: show/hide clear button ── */
    const input    = document.getElementById('trackingInput');
    const clearBtn = document.getElementById('clearBtn');
    const wrap     = document.getElementById('inputWrap');

    if (input && clearBtn && wrap) {
        function updateClear() {
            wrap.classList.toggle('has-value', input.value.trim().length > 0);
        }

        input.addEventListener('input', function () {
            this.value = this.value.toUpperCase();
            updateClear();
        });

        clearBtn.addEventListener('click', function () {
            input.value = '';
            updateClear();
            input.focus();
        });

        updateClear(); /* init for pre-filled values */
    }

    /* ── Submit: loading state ── */
    const form      = document.getElementById('trackingForm');
    const submitBtn = document.getElementById('submitBtn');

    if (form && submitBtn) {
        form.addEventListener('submit', function () {
            submitBtn.disabled = true;
            submitBtn.innerHTML =
                '<i class="fa-solid fa-circle-notch fa-spin" aria-hidden="true"></i>' +
                '<span>Locating…</span>';
        });
    }

    /* ── Multilingual labels (extends parent layout translations) ── */
    const heroStrings = {
        en: {
            hero_eyebrow: 'Live Tracking Terminal',
            hero_line1: 'Global Air Cargo &amp;',
            hero_red_word: 'Freight Tracking',
            hero_sub: 'Inspect transit manifests, border clearance nodes, and route vectors instantly. Real-time updates, every step of the journey.',
            pill_countries: '150+ Countries',
            pill_realtime: 'Real-Time Updates',
            pill_secure: 'End-to-End Secure',
            card_label: 'Enter tracking ID to locate your shipment',
            btn_track: 'Track Shipment',
            link_demo: 'Try a demo ID',
            link_support: 'Contact support',
            link_book: 'Book a parcel',
            stat_countries: 'Countries',
            stat_parcels: 'Parcels Delivered',
            stat_ontime: 'On-Time Rate',
            scroll_hint: 'Scroll'
        },
        fr: {
            hero_eyebrow: 'Terminal de suivi en direct',
            hero_line1: 'Fret aérien mondial &amp;',
            hero_red_word: 'Suivi de Cargaison',
            hero_sub: 'Inspectez les manifestes de transit, les nœuds de dédouanement et les vecteurs de route instantanément.',
            pill_countries: '150+ Pays',
            pill_realtime: 'Mises à jour en temps réel',
            pill_secure: 'Sécurisé de bout en bout',
            card_label: 'Entrez l\'identifiant de suivi pour localiser votre envoi',
            btn_track: 'Suivre le colis',
            link_demo: 'Essayer un ID de démonstration',
            link_support: 'Contacter le support',
            link_book: 'Réserver un colis',
            stat_countries: 'Pays',
            stat_parcels: 'Colis livrés',
            stat_ontime: 'Taux de ponctualité',
            scroll_hint: 'Défiler'
        },
        es: {
            hero_eyebrow: 'Terminal de rastreo en vivo',
            hero_line1: 'Carga aérea global &amp;',
            hero_red_word: 'Rastreo de Mercancías',
            hero_sub: 'Inspeccione manifiestos de tránsito, nodos de despacho aduanero y vectores de ruta al instante.',
            pill_countries: '150+ Países',
            pill_realtime: 'Actualizaciones en tiempo real',
            pill_secure: 'Seguro de extremo a extremo',
            card_label: 'Ingrese el ID de seguimiento para localizar su envío',
            btn_track: 'Rastrear envío',
            link_demo: 'Probar un ID de demostración',
            link_support: 'Contactar soporte',
            link_book: 'Reservar un paquete',
            stat_countries: 'Países',
            stat_parcels: 'Paquetes entregados',
            stat_ontime: 'Tasa de puntualidad',
            scroll_hint: 'Desplazar'
        },
        de: {
            hero_eyebrow: 'Live-Verfolgungsterminal',
            hero_line1: 'Globale Luftfracht &amp;',
            hero_red_word: 'Sendungsverfolgung',
            hero_sub: 'Inspizieren Sie Transitmanifeste, Zollabfertigungsknoten und Routenvektoren sofort.',
            pill_countries: '150+ Länder',
            pill_realtime: 'Echtzeit-Updates',
            pill_secure: 'Ende-zu-Ende-Sicherheit',
            card_label: 'Tracking-ID eingeben, um Ihre Sendung zu lokalisieren',
            btn_track: 'Sendung verfolgen',
            link_demo: 'Demo-ID ausprobieren',
            link_support: 'Support kontaktieren',
            link_book: 'Paket buchen',
            stat_countries: 'Länder',
            stat_parcels: 'Zugestellte Pakete',
            stat_ontime: 'Pünktlichkeitsrate',
            scroll_hint: 'Scrollen'
        },
        ar: {
            hero_eyebrow: 'محطة التتبع المباشر',
            hero_line1: 'الشحن الجوي العالمي &amp;',
            hero_red_word: 'تتبع البضائع',
            hero_sub: 'افحص بيانات العبور ونقاط التخليص الجمركي ومتجهات المسار فوراً.',
            pill_countries: '150+ دولة',
            pill_realtime: 'تحديثات فورية',
            pill_secure: 'آمن من طرف لطرف',
            card_label: 'أدخل رقم التتبع لتحديد موقع شحنتك',
            btn_track: 'تتبع الشحنة',
            link_demo: 'جرب معرف تجريبي',
            link_support: 'التواصل مع الدعم',
            link_book: 'احجز طرداً',
            stat_countries: 'دولة',
            stat_parcels: 'الطرود المسلمة',
            stat_ontime: 'معدل الالتزام بالوقت',
            scroll_hint: 'تمرير'
        },
        zh: {
            hero_eyebrow: '实时追踪终端',
            hero_line1: '全球空运货物 &amp;',
            hero_red_word: '货运追踪',
            hero_sub: '即时查看转运清单、边境清关节点和路线矢量。全程实时更新。',
            pill_countries: '150+个国家',
            pill_realtime: '实时更新',
            pill_secure: '端到端安全',
            card_label: '输入追踪单号以定位您的包裹',
            btn_track: '追踪包裹',
            link_demo: '试用演示单号',
            link_support: '联系客服',
            link_book: '预订包裹',
            stat_countries: '国家',
            stat_parcels: '已配送包裹',
            stat_ontime: '准时率',
            scroll_hint: '向下滚动'
        },
        pt: {
            hero_eyebrow: 'Terminal de rastreamento ao vivo',
            hero_line1: 'Carga aérea global &amp;',
            hero_red_word: 'Rastreamento de Frete',
            hero_sub: 'Inspecione manifestos de trânsito, nós de desembaraço aduaneiro e vetores de rota instantaneamente.',
            pill_countries: '150+ Países',
            pill_realtime: 'Atualizações em tempo real',
            pill_secure: 'Segurança ponta a ponta',
            card_label: 'Insira o ID de rastreamento para localizar sua remessa',
            btn_track: 'Rastrear remessa',
            link_demo: 'Experimentar um ID de demonstração',
            link_support: 'Contatar suporte',
            link_book: 'Reservar um pacote',
            stat_countries: 'Países',
            stat_parcels: 'Pacotes entregues',
            stat_ontime: 'Taxa de pontualidade',
            scroll_hint: 'Rolar'
        },
        yo: {
            hero_eyebrow: 'Ibudo Titọpa Laaye',
            hero_line1: 'Gbigbe Ofurufu Agbaye &amp;',
            hero_red_word: 'Titọpa Ẹru',
            hero_sub: 'Ṣayẹwo awọn iwe ẹru, awọn aaye kọja aala, ati awọn ọna ni lẹsẹkẹsẹ.',
            pill_countries: '150+ Orilẹ-ede',
            pill_realtime: 'Imudojuiwọn Akoko Gidi',
            pill_secure: 'Ailewu Lati Ibẹrẹ si Opin',
            card_label: 'Tẹ ID titọpa lati wa ẹru rẹ',
            btn_track: 'Tọpa Ẹru',
            link_demo: 'Gbiyanju ID apẹẹrẹ',
            link_support: 'Kan si atilẹyin',
            link_book: 'Pẹlẹ ẹru kan',
            stat_countries: 'Orilẹ-ede',
            stat_parcels: 'Awọn ẹru ti a fi ranṣẹ',
            stat_ontime: 'Oṣuwọn Akoko',
            scroll_hint: 'Sọ si isalẹ'
        },
        ig: {
            hero_eyebrow: 'Ọdụ Nsoro Ndụ',
            hero_line1: 'Igwe Ụgbọ elu Ụwa &amp;',
            hero_red_word: 'Nsoro Ibu',
            hero_sub: 'Lelee akwụkwọ nnyefe, ọnọdụ ọwa oke, na ụzọ njem ozugbo.',
            pill_countries: 'Mba 150+',
            pill_realtime: 'Nmelite Oge Ezie',
            pill_secure: 'Nchekwa Site na Njedebe ruo Njedebe',
            card_label: 'Tinye ID nsoro iji chọta nnyefe gị',
            btn_track: 'Soro Nnyefe',
            link_demo: 'Nwaa ID ihe atụ',
            link_support: 'Kpọtụrụ nkwado',
            link_book: 'Deba ngwa',
            stat_countries: 'Mba',
            stat_parcels: 'Ngwa Ewepụtara',
            stat_ontime: 'Ọnụọgụ Oge',
            scroll_hint: 'Mee oge'
        }
    };

    /* Hook into the parent layout's setLang function */
    const _parentSetLang = window.setLang;
    window.setLang = function (lang) {
        if (typeof _parentSetLang === 'function') _parentSetLang(lang);

        const strings = heroStrings[lang] || heroStrings['en'];
        document.querySelectorAll('[data-i18n]').forEach(function (el) {
            const key = el.getAttribute('data-i18n');
            if (strings[key] !== undefined) el.innerHTML = strings[key];
        });
    };

    /* Run on load using stored preference */
    const stored = localStorage.getItem('ajd_lang') || 'en';
    window.setLang(stored);

}());
</script>

@endsection