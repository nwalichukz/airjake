<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Air Jake Delivery Services — Shipment Tracking</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --navy:       #0B2545;
      --navy-mid:   #134074;
      --navy-light: #1a5296;
      --red:        #EE1B24;
      --red-dark:   #C4151D;
      --white:      #ffffff;
      --off-white:  #F7F9FC;
      --slate-50:   #F8FAFC;
      --slate-100:  #F1F5F9;
      --slate-200:  #E2E8F0;
      --slate-400:  #94A3B8;
      --slate-500:  #64748B;
      --slate-600:  #475569;
      --slate-700:  #334155;
      --slate-800:  #1E293B;
      --amber:      #D97706;
      --amber-bg:   #FFFBEB;
      --amber-border:#FDE68A;
      --font-d:     'Bebas Neue', sans-serif;
      --font-b:     'Outfit', sans-serif;
      --ease:       cubic-bezier(0.4,0,0.2,1);
      --radius:     18px;
      --shadow-sm:  0 2px 12px rgba(11,37,69,0.07);
      --shadow-md:  0 6px 28px rgba(11,37,69,0.11);
      --shadow-lg:  0 12px 48px rgba(11,37,69,0.15);
    }

    html { -webkit-text-size-adjust: 100%; }

    body {
      font-family: var(--font-b);
      background: var(--off-white);
      color: var(--slate-700);
      min-height: 100svh;
      -webkit-font-smoothing: antialiased;
    }

    /* ══════════════════════════════
       TOPBAR
    ══════════════════════════════ */
    .tk-topbar {
      background: var(--navy);
      position: sticky;
      top: 0;
      z-index: 200;
      border-bottom: 3px solid var(--red);
    }
    .tk-topbar-inner {
      max-width: 1180px;
      margin: 0 auto;
      padding: 0 16px;
      height: 58px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
    }
    .tk-brand-group {
      display: flex;
      align-items: center;
      gap: 14px;
    }
    .tk-brand {
      display: flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
      flex-shrink: 0;
    }
    .tk-brand-icon {
      width: 34px; height: 34px;
      background: var(--red);
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      color: #fff;
      box-shadow: 0 0 16px rgba(238,27,36,0.4);
      flex-shrink: 0;
    }
    .tk-brand-name {
      font-family: var(--font-d);
      font-size: 1.35rem;
      letter-spacing: 0.06em;
      color: var(--white);
      line-height: 1;
    }
    .tk-brand-sub {
      font-family: var(--font-b);
      font-size: 0.5rem;
      font-weight: 600;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.35);
      display: block;
      margin-top: 2px;
    }
    .tk-live-badge {
      display: flex;
      align-items: center;
      gap: 6px;
      background: rgba(238,27,36,0.15);
      border: 1px solid rgba(238,27,36,0.3);
      padding: 5px 12px;
      border-radius: 100px;
      font-size: 0.6rem;
      font-weight: 800;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: #ff9598;
      white-space: nowrap;
    }
    .live-dot {
      width: 6px; height: 6px;
      border-radius: 50%;
      background: var(--red);
      animation: pulseDot 1.8s infinite;
      flex-shrink: 0;
    }
    @keyframes pulseDot {
      0%,100%{ opacity:1; transform:scale(1); }
      50%{ opacity:.35; transform:scale(.55); }
    }

    /* Google Translate Styling Customizations */
    .tk-translate-wrapper {
      display: flex;
      align-items: center;
    }
    .goog-te-gadget {
      font-family: var(--font-b) !important;
      color: transparent !important;
    }
    .goog-te-gadget .goog-te-combo {
      padding: 4px 10px;
      border-radius: 6px;
      background: var(--navy-mid);
      color: var(--white);
      border: 1px solid rgba(255, 255, 255, 0.15);
      font-family: var(--font-b);
      font-size: 0.75rem;
      font-weight: 500;
      outline: none;
      cursor: pointer;
    }
    .goog-te-gadget span {
      display: none !important;
    }
    .goog-te-banner-frame.skiptranslate, .goog-te-img {
      display: none !important;
    }
    body {
      top: 0px !important;
    }

    /* ══════════════════════════════
       PAGE WRAP
    ══════════════════════════════ */
    .tk-page {
      max-width: 1180px;
      margin: 0 auto;
      padding: 20px 16px 56px;
    }
    @media(min-width:768px){ .tk-page{ padding: 28px 24px 64px; } }
    @media(min-width:1024px){ .tk-page{ padding: 36px 32px 72px; } }

    /* ══════════════════════════════
       WAYBILL HERO CARD
    ══════════════════════════════ */
    .tk-waybill {
      background: var(--navy);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow-lg);
      margin-bottom: 20px;
      position: relative;
      animation: riseUp .45s var(--ease) both;
    }
    .tk-waybill::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: radial-gradient(rgba(255,255,255,0.04) 1px, transparent 1px);
      background-size: 20px 20px;
      pointer-events: none;
    }
    .tk-waybill-glow {
      position: absolute;
      top: -80px; right: -80px;
      width: 300px; height: 300px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(238,27,36,0.15) 0%, transparent 65%);
      pointer-events: none;
    }
    .tk-waybill-inner {
      position: relative;
      z-index: 1;
      padding: 24px 20px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    @media(min-width:640px){
      .tk-waybill-inner {
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        padding: 28px 32px;
      }
    }

    .tk-waybill-id-wrap {
      display: flex;
      align-items: center;
      gap: 14px;
    }
    .tk-waybill-icon {
      width: 50px; height: 50px;
      border-radius: 13px;
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      color: rgba(255,255,255,0.7);
      flex-shrink: 0;
    }
    .tk-waybill-label {
      font-size: 0.6rem;
      font-weight: 800;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.35);
      margin-bottom: 4px;
    }
    .tk-waybill-code {
      font-family: var(--font-d);
      font-size: clamp(1.3rem, 4vw, 1.8rem);
      letter-spacing: 0.06em;
      color: var(--white);
      line-height: 1;
    }

    .tk-waybill-meta {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px 24px;
    }
    @media(min-width:480px){ .tk-waybill-meta{ grid-template-columns: repeat(3, auto); } }

    .tk-meta-item {}
    .tk-meta-label {
      font-size: 0.58rem;
      font-weight: 800;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.3);
      margin-bottom: 5px;
    }
    .tk-meta-value {
      font-size: 0.8rem;
      font-weight: 700;
      color: var(--white);
    }
    .tk-meta-value.mono { font-family: var(--font-b); font-weight: 600; }

    .tk-status-chip {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 5px 12px;
      border-radius: 8px;
      font-size: 0.68rem;
      font-weight: 800;
      letter-spacing: 0.06em;
      text-transform: uppercase;
    }
    .tk-status-chip.amber {
      background: rgba(217,119,6,0.2);
      border: 1px solid rgba(217,119,6,0.35);
      color: #FBBF24;
    }
    .tk-status-chip.amber .live-dot { background: #FBBF24; }

    /* ══════════════════════════════
       PIPELINE / PROGRESS TRACKER
    ══════════════════════════════ */
    .tk-pipeline {
      background: var(--white);
      border: 1px solid var(--slate-200);
      border-radius: var(--radius);
      box-shadow: var(--shadow-sm);
      margin-bottom: 20px;
      overflow: hidden;
      animation: riseUp .48s .05s var(--ease) both;
    }
    .tk-pipeline-head {
      padding: 18px 20px 16px;
      border-bottom: 1px solid var(--slate-100);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
    }
    .tk-section-title {
      font-size: 0.65rem;
      font-weight: 800;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--slate-500);
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .tk-section-title i { color: var(--red); font-size: 0.75rem; }
    .tk-progress-pct {
      font-family: var(--font-d);
      font-size: 1.1rem;
      letter-spacing: 0.04em;
      color: var(--navy);
    }

    /* Progress bar */
    .tk-progress-bar-wrap {
      padding: 0 20px;
      padding-top: 16px;
    }
    .tk-progress-bar-track {
      height: 4px;
      background: var(--slate-100);
      border-radius: 100px;
      overflow: hidden;
      margin-bottom: 24px;
    }
    .tk-progress-bar-fill {
      height: 100%;
      width: 75%;
      background: linear-gradient(90deg, var(--navy), var(--navy-light));
      border-radius: 100px;
      position: relative;
      transition: width .8s var(--ease);
    }
    .tk-progress-bar-fill::after {
      content: '';
      position: absolute;
      right: 0; top: 50%;
      transform: translateY(-50%);
      width: 10px; height: 10px;
      background: var(--amber);
      border-radius: 50%;
      border: 2px solid white;
      box-shadow: 0 0 0 3px rgba(217,119,6,0.25);
    }

    /* Steps */
    .tk-steps {
      display: flex;
      justify-content: space-between;
      padding: 0 20px 24px;
      gap: 4px;
      overflow-x: auto;
      scrollbar-width: none;
    }
    .tk-steps::-webkit-scrollbar { display: none; }

    .tk-step {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
      flex: 1;
      min-width: 64px;
      text-align: center;
    }

    .tk-step-node {
      width: 44px; height: 44px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
      flex-shrink: 0;
      position: relative;
      transition: transform .2s;
    }
    .tk-step-node.done {
      background: var(--navy);
      color: var(--white);
      box-shadow: 0 4px 14px rgba(11,37,69,0.25);
    }
    .tk-step-node.active {
      background: var(--amber);
      color: var(--white);
      box-shadow: 0 4px 16px rgba(217,119,6,0.35);
      animation: nodePulse 2s infinite;
    }
    @keyframes nodePulse {
      0%,100%{ box-shadow: 0 4px 16px rgba(217,119,6,0.35), 0 0 0 0 rgba(217,119,6,0.3); }
      50%{ box-shadow: 0 4px 20px rgba(217,119,6,0.4), 0 0 0 10px rgba(217,119,6,0); }
    }
    .tk-step-node.pending {
      background: var(--slate-100);
      color: var(--slate-400);
    }

    .tk-step-name {
      font-size: 0.58rem;
      font-weight: 800;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--slate-500);
      line-height: 1.3;
    }
    .tk-step.done .tk-step-name { color: var(--navy); }
    .tk-step.active .tk-step-name { color: var(--amber); }

    .tk-step-date {
      font-family: var(--font-b);
      font-size: 0.55rem;
      font-weight: 600;
      color: var(--slate-400);
      background: var(--slate-50);
      border: 1px solid var(--slate-100);
      padding: 2px 7px;
      border-radius: 5px;
      white-space: nowrap;
    }
    .tk-step.active .tk-step-date {
      background: rgba(217,119,6,0.08);
      border-color: rgba(217,119,6,0.2);
      color: var(--amber);
    }

    /* ══════════════════════════════
       BOTTOM GRID — HISTORY + MAP
    ══════════════════════════════ */
    .tk-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 20px;
    }
    @media(min-width:900px){
      .tk-grid { grid-template-columns: 340px 1fr; align-items: start; }
    }

    /* ── History Card ── */
    .tk-card {
      background: var(--white);
      border: 1px solid var(--slate-200);
      border-radius: var(--radius);
      box-shadow: var(--shadow-sm);
      overflow: hidden;
    }
    .tk-card-head {
      padding: 18px 20px 16px;
      border-bottom: 1px solid var(--slate-100);
    }
    .tk-card-body { padding: 20px; }

    /* Timeline */
    .tk-timeline {
      position: relative;
      display: flex;
      flex-direction: column;
      gap: 0;
    }
    .tk-timeline::before {
      content: '';
      position: absolute;
      left: 15px;
      top: 0; bottom: 0;
      width: 1.5px;
      background: var(--slate-100);
    }

    .tk-tl-item {
      position: relative;
      padding: 0 0 24px 44px;
    }
    .tk-tl-item:last-child { padding-bottom: 0; }

    .tk-tl-dot {
      position: absolute;
      left: 8px;
      top: 2px;
      width: 16px; height: 16px;
      border-radius: 50%;
      z-index: 1;
      flex-shrink: 0;
    }
    .tk-tl-dot.amber {
      background: var(--amber);
      box-shadow: 0 0 0 4px rgba(217,119,6,0.12);
    }
    .tk-tl-dot.navy {
      background: var(--navy);
      box-shadow: 0 0 0 4px rgba(11,37,69,0.08);
    }

    .tk-tl-time {
      font-family: var(--font-b);
      font-size: 0.62rem;
      font-weight: 600;
      color: var(--slate-400);
      margin-bottom: 5px;
    }

    .tk-tl-badge {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      font-size: 0.58rem;
      font-weight: 800;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      padding: 3px 9px;
      border-radius: 5px;
      margin-bottom: 7px;
    }
    .tk-tl-badge.amber {
      background: rgba(217,119,6,0.08);
      border: 1px solid rgba(217,119,6,0.2);
      color: var(--amber);
    }
    .tk-tl-badge.navy {
      background: rgba(11,37,69,0.06);
      border: 1px solid rgba(11,37,69,0.1);
      color: var(--navy);
    }

    .tk-tl-location {
      font-size: 0.72rem;
      font-weight: 800;
      color: var(--slate-800);
      text-transform: uppercase;
      letter-spacing: 0.04em;
      margin-bottom: 4px;
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .tk-tl-location i { color: var(--slate-400); font-size: 0.65rem; }

    .tk-tl-desc {
      font-size: 0.73rem;
      line-height: 1.65;
      color: var(--slate-500);
    }

    /* ── Map Card ── */
    .tk-map-card {
      background: var(--white);
      border: 1px solid var(--slate-200);
      border-radius: var(--radius);
      box-shadow: var(--shadow-sm);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      min-height: 420px;
      animation: riseUp .5s .12s var(--ease) both;
    }
    .tk-map-head {
      padding: 18px 20px 16px;
      border-bottom: 1px solid var(--slate-100);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
    }
    .tk-map-pulse {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 0.6rem;
      font-weight: 800;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--red);
      background: rgba(238,27,36,0.05);
      border: 1px solid rgba(238,27,36,0.15);
      padding: 4px 10px;
      border-radius: 6px;
      animation: fadeInOut 2.2s ease infinite;
    }
    @keyframes fadeInOut {
      0%,100%{ opacity:1; }
      50%{ opacity:.45; }
    }

    #manifest-map {
      flex: 1;
      min-height: 320px;
    }

    /* Leaflet popup overrides */
    .leaflet-popup-content-wrapper {
      border-radius: 12px !important;
      box-shadow: 0 8px 28px rgba(11,37,69,0.18) !important;
      border: 1px solid var(--slate-200) !important;
      padding: 0 !important;
    }
    .leaflet-popup-content {
      margin: 0 !important;
      font-family: var(--font-b) !important;
    }
    .leaflet-popup-tip { background: white !important; }

    .map-popup {
      padding: 14px 16px;
      min-width: 190px;
    }
    .map-popup-label {
      font-size: 0.58rem;
      font-weight: 800;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--slate-400);
      margin-bottom: 4px;
    }
    .map-popup-title {
      font-size: 0.82rem;
      font-weight: 800;
      color: var(--navy);
      margin-bottom: 8px;
    }
    .map-popup-status {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      font-size: 0.62rem;
      font-weight: 700;
      color: var(--amber);
      background: rgba(217,119,6,0.08);
      border: 1px solid rgba(217,119,6,0.2);
      padding: 3px 9px;
      border-radius: 6px;
    }

    /* ══════════════════════════════
       ANIMATIONS
    ══════════════════════════════ */
    @keyframes riseUp {
      from { opacity:0; transform:translateY(16px); }
      to   { opacity:1; transform:translateY(0); }
    }

    .tk-card { animation: riseUp .5s .08s var(--ease) both; }
    .tk-pipeline { animation: riseUp .48s .04s var(--ease) both; }
  </style>
</head>
<body>

  <!-- ══ TOPBAR ══ -->
  <header class="tk-topbar">
    <div class="tk-topbar-inner">
      <div class="tk-brand-group">
        <a href="#" class="tk-brand">
          <div class="tk-brand-icon"><i class="fa-solid fa-terminal"></i></div>
        </a>
        <a href="{{url('/')}}" style="text-decoration: none;">
          <div>
            <div class="tk-brand-name">AIR JAKE</div>
            <span class="tk-brand-sub">Delivery Services</span>
          </div>
        </a>
        <div class="tk-live-badge">
          <div class="live-dot"></div>
          Tracking Active
        </div>
      </div>
      
      <!-- Google Website Translator Widget Element -->
      <div class="tk-translate-wrapper">
        <div id="google_element"></div>
      </div>
    </div>
  </header>

  <!-- ══ PAGE ══ -->
  <div class="tk-page">

    <!-- ── WAYBILL HERO ── -->
    <div class="tk-waybill">
      <div class="tk-waybill-glow" aria-hidden="true"></div>
      <div class="tk-waybill-inner">

        <div class="tk-waybill-id-wrap">
          <div class="tk-waybill-icon">
            <i class="fa-solid fa-box-open"></i>
          </div>
          <div>
            <div class="tk-waybill-label">Waybill Token</div>
            <div class="tk-waybill-code">{{$parcel->tracking_id}}</div>
          </div>
        </div>

        <div class="tk-waybill-meta">
          <div class="tk-meta-item">
            <div class="tk-meta-label">Current Phase</div>
            <div class="tk-status-chip amber">
              <div class="live-dot"></div>
              {{$parcel->status}}
            </div>
          </div>
          <div class="tk-meta-item">
            <div class="tk-meta-label">Weight</div>
            <div class="tk-meta-value mono">{{$parcel->weight}} KG</div>
          </div>
          <div class="tk-meta-item">
            <div class="tk-meta-label">Destination</div>
            <div class="tk-meta-value">
              <i class="fa-solid fa-location-dot" style="color:var(--red); margin-right:4px; font-size:0.75rem;"></i>
             {{$parcel->receiver_address}}
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- ── PIPELINE ── -->
    <div class="tk-pipeline">
      <div class="tk-pipeline-head">
        <div class="tk-section-title">
          <i class="fa-solid fa-bars-staggered"></i>
          Consignment Flow Map
        </div>
        <div class="tk-progress-pct">
                   @php
    $count = $parcel->logs->where('status', '!=', null)->count();
    $percentage = ($count/5)*100
@endphp
      
      {{$percentage}}%
        </div>
      </div>

      <div class="tk-progress-bar-wrap">
        <div class="tk-progress-bar-track">
          <div class="tk-progress-bar-fill"></div>
        </div>
      </div>

      <div class="tk-steps">

        <div class="tk-step done">
          <div class="tk-step-node done">
            <i class="fa-solid fa-circle-check" style="font-size:17px;"></i>
          </div>
          <div class="tk-step-name">Order<br>Confirmed</div>
          <div class="tk-step-date">{{$parcel->created_at->format('M d, Y')}}</div>
        </div>

        <div class="tk-step done">
          <div class="tk-step-node done">
            <i class="fa-solid fa-truck-ramp-box" style="font-size:16px;"></i>
          </div>

          <div class="tk-step-name">Picked by<br>Courier</div>
          <div class="tk-step-date">
           @php
    $transitLog = $parcel->logs->firstWhere('status', 'Order Picked Up');
@endphp

{{ $transitLog ? $transitLog->created_at->format('M d, Y') : 'Pending' }}
      </div>
        </div>

        <div class="tk-step done">
          <div class="tk-step-node done">
            <i class="fa-solid fa-plane-departure" style="font-size:15px;"></i>
          </div> 
          <div class="tk-step-name">On the<br>Way</div>
          <div class="tk-step-date">
              
                     @php
    $transitLog = $parcel->logs->firstWhere('status', 'Order Picked Up');
@endphp

{{ $transitLog ? $transitLog->created_at->format('M d, Y') : 'Pending' }}
          </div>
        </div>

        <div class="tk-step active">
          <div class="tk-step-node active">
            <i class="fa-solid fa-building-shield" style="font-size:16px;"></i>
          </div>
          
          <div class="tk-step-name">Custom<br>Hold</div>
          <div class="tk-step-date">
                      @php
    $transitLog = $parcel->logs->firstWhere('status', 'Custom Hold');
@endphp

{{ $transitLog ? $transitLog->created_at->format('M d, Y') : 'Pending' }}
           
          </div>
        </div>

        <div class="tk-step pending">
          <div class="tk-step-node pending">
            <i class="fa-solid fa-warehouse" style="font-size:16px;"></i>
          </div>
          <div class="tk-step-name">Delivered</div>
          <div class="tk-step-date">
                                  @php
    $transitLog = $parcel->logs->firstWhere('status', 'Delivered');
@endphp

{{ $transitLog ? $transitLog->created_at->format('M d, Y') : 'Pending' }}
            
          </div>
        </div>

      </div>
    </div>

    <!-- ── BOTTOM GRID ── -->
    <div class="tk-grid">

      <!-- Dispatch History -->
      {{--<div class="tk-card">
        <div class="tk-card-head">
          <div class="tk-section-title">
            <i class="fa-solid fa-clock-rotate-left"></i>
            Dispatch History
          </div>
        </div>
        <div class="tk-card-body">
          <div class="tk-timeline">

            <div class="tk-tl-item">
              <div class="tk-tl-dot amber"></div>
              <div class="tk-tl-time">Mar 13, 2026· 06:26 AM</div>
              <div class="tk-tl-badge amber">
                <i class="fa-solid fa-building-shield" style="font-size:0.55rem;"></i>
                Custom Hold Trigger
              </div>
              <div class="tk-tl-location">
                <i class="fa-solid fa-location-dot"></i>
                Manila Terminal Gateway
              </div>
              <div class="tk-tl-desc">
                Consignment flagged at port terminal compliance gateway for dock documentation auditing.
              </div>
            </div>

            <div class="tk-tl-item">
              <div class="tk-tl-dot navy"></div>
              <div class="tk-tl-time">Mar 12, 2026 · 04:30 PM</div>
              <div class="tk-tl-badge navy">
                <i class="fa-solid fa-plane-departure" style="font-size:0.55rem;"></i>
                Transit Progression
              </div>
              <div class="tk-tl-location">
                <i class="fa-solid fa-plane-departure"></i>
                Origin Cargo Hub Departure
              </div>
              <div class="tk-tl-desc">
                Freight loaded to compartment route matrix for intermediate overseas direct transit.
              </div>
            </div>

            <div class="tk-tl-item">
              <div class="tk-tl-dot navy"></div>
              <div class="tk-tl-time">Mar 12, 2026 · 09:15 AM</div>
              <div class="tk-tl-badge navy">
                <i class="fa-solid fa-truck-ramp-box" style="font-size:0.55rem;"></i>
                Courier Pickup
              </div>
              <div class="tk-tl-location">
                <i class="fa-solid fa-warehouse"></i>
                Sender Collection Point
              </div>
              <div class="tk-tl-desc">
                Package collected from sender and scanned into the consignment network.
              </div>
            </div>

            <div class="tk-tl-item">
              <div class="tk-tl-dot navy"></div>
              <div class="tk-tl-time">Mar 10, 2026 · 02:00 PM</div>
              <div class="tk-tl-badge navy">
                <i class="fa-solid fa-circle-check" style="font-size:0.55rem;"></i>
                Order Confirmed
              </div>
              <div class="tk-tl-location">
                <i class="fa-solid fa-file-invoice"></i>
                Booking System
              </div>
              <div class="tk-tl-desc">
                Waybill generated and consignment registered in the Air Jake logistics network.
              </div>
            </div>

          </div>
        </div>
      </div>--}}




      <!-- Live Map -->
     {{--<div class="tk-map-card">
        <div class="tk-map-head">
          <div class="tk-section-title">
            <i class="fa-solid fa-satellite"></i>
            Live Vector Tracking Map
          </div>
          <div class="tk-map-pulse">
            <i class="fa-solid fa-signal" style="font-size:0.65rem;"></i>
            Signal Active
          </div>
        </div>
        <div id="manifest-map"></div>
      </div>

    </div>--}}
  </div><!-- /.tk-page -->

  <!-- Google Website Translator Scripts -->
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
      }, 'google_element');
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {

      /* ── Leaflet Map ── */
      var map = L.map('manifest-map', {
        center: [14.599512, 120.984222],
        zoom: 6,
        zoomControl: true,
        scrollWheelZoom: false
      });

      L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="https://carto.com/">CARTO</a>',
        maxZoom: 19
      }).addTo(map);

      /* Custom marker HTML */
      var markerHtml = `
        <div style="position:relative; width:40px; height:40px; display:flex; align-items:center; justify-content:center;">
          <div style="
            position:absolute;
            width:40px; height:40px;
            border-radius:50%;
            background:rgba(217,119,6,0.2);
            animation: mapPing 1.8s ease-out infinite;
          "></div>
          <div style="
            position:relative;
            width:20px; height:20px;
            border-radius:50%;
            background:#D97706;
            border: 3px solid #fff;
            box-shadow: 0 2px 10px rgba(217,119,6,0.5);
          "></div>
        </div>
        <style>
          @keyframes mapPing {
            0%{ transform:scale(.6); opacity:.9; }
            100%{ transform:scale(2.2); opacity:0; }
          }
        </style>
      `;

      var customIcon = L.divIcon({
        className: '',
        html: markerHtml,
        iconSize: [40, 40],
        iconAnchor: [20, 20],
        popupAnchor: [0, -24]
      });

      var popupContent = `
        <div class="map-popup">
          <div class="map-popup-label">Vector Lock Point</div>
          <div class="map-popup-title">Manila Customs Terminal</div>
          <div class="map-popup-status">
            <span style="width:5px;height:5px;border-radius:50%;background:#D97706;display:inline-block;"></span>
            Custom Hold Active
          </div>
        </div>
      `;

      L.marker([14.599512, 120.984222], { icon: customIcon })
        .addTo(map)
        .bindPopup(popupContent, { maxWidth: 220, minWidth: 180 })
        .openPopup();

      /* Fix map rendering after layout settles */
      setTimeout(function () { map.invalidateSize(); }, 300);
    });
  </script>

</body>
</html>