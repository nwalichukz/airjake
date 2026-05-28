<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Air Jake — Operations Console</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Syne:wght@700;800&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --bg: #080c12;
      --surface: #0e1420;
      --surface-2: #141c2b;
      --border: rgba(255,255,255,0.06);
      --border-hover: rgba(255,255,255,0.12);
      --accent: #e5311d;
      --accent-dim: rgba(229,49,29,0.12);
      --accent-glow: rgba(229,49,29,0.25);
      --text-1: #f0f4ff;
      --text-2: #8494af;
      --text-3: #4a5568;
      --amber: #f59e0b;
      --amber-dim: rgba(245,158,11,0.1);
      --green: #10b981;
      --green-dim: rgba(16,185,129,0.1);
      --mono: 'DM Mono', monospace;
      --display: 'Syne', sans-serif;
      --body: 'Manrope', sans-serif;
    }

    html { scroll-behavior: smooth; }

    body {
      font-family: var(--body);
      background: var(--bg);
      color: var(--text-1);
      min-height: 100dvh;
      -webkit-font-smoothing: antialiased;
    }

    /* ── MOBILE NAV ── */
    .topbar {
      position: sticky;
      top: 0;
      z-index: 100;
      background: rgba(8,12,18,0.92);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 16px;
      height: 60px;
    }

    .topbar-brand {
      display: flex;
      align-items: center;
      gap: 10px;
      font-family: var(--display);
      font-size: 15px;
      font-weight: 800;
      letter-spacing: 0.02em;
      color: var(--text-1);
    }

    .brand-icon {
      width: 34px;
      height: 34px;
      background: var(--accent);
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      color: #fff;
      flex-shrink: 0;
      box-shadow: 0 0 20px var(--accent-glow);
    }

    .topbar-actions {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .menu-btn {
      width: 38px;
      height: 38px;
      background: var(--surface-2);
      border: 1px solid var(--border);
      border-radius: 8px;
      color: var(--text-2);
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 15px;
      transition: all .2s;
    }
    .menu-btn:hover { border-color: var(--border-hover); color: var(--text-1); }

    /* ── DRAWER OVERLAY ── */
    .drawer-overlay {
      display: none;
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.6);
      z-index: 200;
      backdrop-filter: blur(4px);
    }
    .drawer-overlay.open { display: block; }

    .drawer {
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      width: 280px;
      background: var(--surface);
      border-right: 1px solid var(--border);
      z-index: 300;
      display: flex;
      flex-direction: column;
      transform: translateX(-100%);
      transition: transform .3s cubic-bezier(.4,0,.2,1);
      padding: 24px 16px;
    }
    .drawer.open { transform: translateX(0); }

    .drawer-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 32px;
      padding-bottom: 20px;
      border-bottom: 1px solid var(--border);
    }

    .close-btn {
      width: 32px;
      height: 32px;
      background: var(--surface-2);
      border: 1px solid var(--border);
      border-radius: 7px;
      color: var(--text-2);
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 13px;
    }

    .drawer-nav { display: flex; flex-direction: column; gap: 4px; }

    .nav-item {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 12px 14px;
      border-radius: 10px;
      font-size: 13px;
      font-weight: 600;
      color: var(--text-2);
      text-decoration: none;
      cursor: pointer;
      transition: all .15s;
      border: 1px solid transparent;
    }
    .nav-item:hover { background: var(--surface-2); color: var(--text-1); border-color: var(--border); }
    .nav-item.active { background: var(--accent-dim); color: var(--accent); border-color: rgba(229,49,29,0.2); }
    .nav-item i { width: 16px; text-align: center; font-size: 14px; }

    .drawer-footer {
      margin-top: auto;
      padding: 14px;
      background: var(--bg);
      border-radius: 10px;
      border: 1px solid var(--border);
    }
    .drawer-footer .label { font-size: 10px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; color: var(--text-3); }
    .drawer-footer .value { font-family: var(--mono); font-size: 11px; color: var(--text-1); margin-top: 4px; }

    /* ── TAB SWITCHER (mobile) ── */
    .tab-bar {
      display: flex;
      background: var(--surface);
      border-bottom: 1px solid var(--border);
      overflow-x: auto;
      scrollbar-width: none;
      position: sticky;
      top: 60px;
      z-index: 50;
    }
    .tab-bar::-webkit-scrollbar { display: none; }

    .tab-btn {
      flex: 1;
      min-width: 140px;
      padding: 14px 16px;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: .06em;
      text-transform: uppercase;
      color: var(--text-2);
      cursor: pointer;
      border: none;
      background: transparent;
      border-bottom: 2px solid transparent;
      transition: all .2s;
      white-space: nowrap;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 7px;
    }
    .tab-btn.active { color: var(--accent); border-bottom-color: var(--accent); }
    .tab-btn i { font-size: 13px; }

    /* ── MAIN ── */
    main {
      padding: 20px 16px 80px;
      max-width: 1280px;
      margin: 0 auto;
    }

    .section-header {
      margin-bottom: 20px;
    }
    .section-title {
      font-family: var(--display);
      font-size: 22px;
      font-weight: 800;
      color: var(--text-1);
      letter-spacing: -0.01em;
    }
    .section-sub {
      font-size: 12px;
      color: var(--text-2);
      margin-top: 4px;
      line-height: 1.6;
    }

    .tab-panel { display: none; }
    .tab-panel.active { display: block; }

    /* ── STATS ROW ── */
    .stats-row {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
      margin-bottom: 20px;
    }
    @media (min-width: 640px) { .stats-row { grid-template-columns: repeat(4, 1fr); } }

    .stat-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 16px;
      transition: border-color .2s;
    }
    .stat-card:hover { border-color: var(--border-hover); }
    .stat-label {
      font-size: 10px;
      font-weight: 700;
      letter-spacing: .08em;
      text-transform: uppercase;
      color: var(--text-3);
      margin-bottom: 8px;
    }
    .stat-value {
      font-family: var(--display);
      font-size: 26px;
      font-weight: 800;
      color: var(--text-1);
      line-height: 1;
    }
    .stat-value.accent { color: var(--accent); }
    .stat-badge {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      font-size: 10px;
      font-weight: 600;
      margin-top: 6px;
      color: var(--green);
    }

    /* ── CARD ── */
    .card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 16px;
      overflow: hidden;
    }
    .card-header {
      padding: 16px 20px;
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .card-title {
      font-size: 11px;
      font-weight: 700;
      letter-spacing: .08em;
      text-transform: uppercase;
      color: var(--text-1);
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .card-title i { color: var(--accent); font-size: 13px; }
    .card-body { padding: 20px; }

    /* ── FORM ── */
    .form-grid { display: grid; gap: 14px; }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }

    .field label {
      display: block;
      font-size: 10px;
      font-weight: 700;
      letter-spacing: .08em;
      text-transform: uppercase;
      color: var(--text-2);
      margin-bottom: 6px;
    }

    .field input, .field select, .field textarea {
      width: 100%;
      background: var(--bg);
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 11px 13px;
      color: var(--text-1);
      font-family: var(--body);
      font-size: 13px;
      font-weight: 500;
      outline: none;
      transition: all .15s;
      -webkit-appearance: none;
    }
    .field input::placeholder { color: var(--text-3); }
    .field input:focus, .field select:focus {
      border-color: var(--accent);
      box-shadow: 0 0 0 3px var(--accent-dim);
    }

    .field input.mono { font-family: var(--mono); font-size: 12px; }

    .coords-label {
      font-size: 10px;
      font-weight: 700;
      letter-spacing: .08em;
      text-transform: uppercase;
      color: var(--accent);
      display: flex;
      align-items: center;
      gap: 6px;
      margin-bottom: 10px;
    }

    .coords-grid { display: grid; grid-template-columns: 1.2fr 1fr 1fr; gap: 8px; }

    .divider {
      border: none;
      border-top: 1px solid var(--border);
      margin: 4px 0 8px;
    }

    /* ── BUTTONS ── */
    .btn-primary {
      width: 100%;
      background: var(--accent);
      color: #fff;
      border: none;
      border-radius: 10px;
      padding: 13px 20px;
      font-family: var(--body);
      font-size: 12px;
      font-weight: 700;
      letter-spacing: .06em;
      text-transform: uppercase;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      transition: all .2s;
      box-shadow: 0 4px 20px var(--accent-glow);
      margin-top: 8px;
    }
    .btn-primary:hover { background: #c92318; box-shadow: 0 6px 24px var(--accent-glow); }
    .btn-primary:active { transform: scale(.98); }

    .btn-sm {
      padding: 7px 12px;
      border-radius: 8px;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: .04em;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: all .15s;
      white-space: nowrap;
      border: 1px solid transparent;
    }
    .btn-ghost { background: var(--bg); border-color: var(--border); color: var(--text-2); }
    .btn-ghost:hover { border-color: var(--border-hover); color: var(--text-1); }
    .btn-danger { background: var(--accent-dim); border-color: rgba(229,49,29,0.25); color: var(--accent); }
    .btn-danger:hover { background: var(--accent); color: #fff; }

    /* ── TABLE ── */
    .table-wrap { overflow-x: auto; -webkit-overflow-scrolling: touch; }

    table { width: 100%; border-collapse: collapse; min-width: 580px; }
    thead tr { background: var(--bg); }
    th {
      padding: 12px 16px;
      text-align: left;
      font-size: 10px;
      font-weight: 700;
      letter-spacing: .08em;
      text-transform: uppercase;
      color: var(--text-3);
      border-bottom: 1px solid var(--border);
    }
    td {
      padding: 14px 16px;
      font-size: 12px;
      font-weight: 500;
      color: var(--text-1);
      border-bottom: 1px solid var(--border);
      vertical-align: middle;
    }
    tr:last-child td { border-bottom: none; }
    tbody tr { transition: background .15s; }
    tbody tr:hover { background: rgba(255,255,255,0.02); }

    .tracking-code {
      font-family: var(--mono);
      font-size: 11px;
      font-weight: 500;
      color: var(--text-1);
      letter-spacing: .04em;
    }

    .consignee-name { font-weight: 600; font-size: 13px; }
    .consignee-meta { font-size: 11px; color: var(--text-2); margin-top: 2px; }

    /* ── BADGES ── */
    .badge {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      padding: 4px 10px;
      border-radius: 6px;
      font-size: 10px;
      font-weight: 700;
      letter-spacing: .06em;
      text-transform: uppercase;
    }
    .badge-amber {
      background: var(--amber-dim);
      color: var(--amber);
      border: 1px solid rgba(245,158,11,0.2);
    }
    .badge-green {
      background: var(--green-dim);
      color: var(--green);
      border: 1px solid rgba(16,185,129,0.2);
    }
    .badge-red {
      background: var(--accent-dim);
      color: var(--accent);
      border: 1px solid rgba(229,49,29,0.2);
    }
    .badge .dot {
      width: 5px;
      height: 5px;
      border-radius: 50%;
      background: currentColor;
    }

    .actions-col { text-align: right; white-space: nowrap; display: flex; gap: 6px; justify-content: flex-end; align-items: center; }

    /* ── EMPTY STATE ── */
    .empty-state {
      text-align: center;
      padding: 48px 24px;
      color: var(--text-3);
    }
    .empty-state i { font-size: 32px; margin-bottom: 12px; display: block; }
    .empty-state p { font-size: 13px; }

    /* ── FLOATING ACTION ── */
    .fab {
      position: fixed;
      bottom: 24px;
      right: 20px;
      width: 52px;
      height: 52px;
      background: var(--accent);
      border: none;
      border-radius: 50%;
      color: #fff;
      font-size: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      box-shadow: 0 6px 24px var(--accent-glow);
      transition: all .2s;
      z-index: 60;
    }
    .fab:hover { transform: scale(1.06); }
    .fab:active { transform: scale(.96); }

    /* ── DESKTOP LAYOUT ── */
    @media (min-width: 768px) {
      main { padding: 28px 28px 40px; }
      .section-title { font-size: 26px; }
      .card-body { padding: 24px; }
    }

    @media (min-width: 1100px) {
      body { display: flex; }
      .topbar { display: none; }
      .tab-bar { display: none; }
      .fab { display: none; }

      /* Desktop sidebar */
      .sidebar {
        display: flex;
        flex-direction: column;
        width: 260px;
        min-height: 100dvh;
        background: var(--surface);
        border-right: 1px solid var(--border);
        padding: 24px 16px;
        position: sticky;
        top: 0;
        flex-shrink: 0;
      }

      .sidebar-brand {
        display: flex;
        align-items: center;
        gap: 10px;
        font-family: var(--display);
        font-size: 14px;
        font-weight: 800;
        color: var(--text-1);
        padding-bottom: 24px;
        margin-bottom: 24px;
        border-bottom: 1px solid var(--border);
      }

      .sidebar-nav { display: flex; flex-direction: column; gap: 4px; }

      .sidebar-footer {
        margin-top: auto;
        padding: 14px;
        background: var(--bg);
        border-radius: 10px;
        border: 1px solid var(--border);
      }
      .sidebar-footer .label { font-size: 10px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; color: var(--text-3); }
      .sidebar-footer .value { font-family: var(--mono); font-size: 11px; color: var(--text-1); margin-top: 4px; }

      .desktop-main {
        flex: 1;
        overflow-y: auto;
        max-height: 100dvh;
      }

      main { padding: 36px 36px 60px; max-width: none; }

      /* Desktop two-column layout for booking panel */
      .booking-layout {
        display: grid;
        grid-template-columns: 380px 1fr;
        gap: 24px;
        align-items: start;
      }
    }

    /* Show sidebar only on desktop */
    .sidebar { display: none; }
    .desktop-main { flex: 1; }

    @media (min-width: 1100px) {
      .sidebar { display: flex; }
    }

    /* ── ANIMATIONS ── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(12px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .card { animation: fadeUp .3s ease both; }
    .card:nth-child(2) { animation-delay: .05s; }
    .card:nth-child(3) { animation-delay: .1s; }

    @keyframes pulse-dot {
      0%, 100% { opacity: 1; }
      50% { opacity: .3; }
    }
    .live-dot {
      width: 6px;
      height: 6px;
      background: var(--green);
      border-radius: 50%;
      display: inline-block;
      animation: pulse-dot 1.6s ease infinite;
    }

    /* ── SCROLLBAR ── */
    ::-webkit-scrollbar { width: 6px; height: 6px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: var(--surface-2); border-radius: 3px; }
  </style>
</head>
<body>

  <!-- ── MOBILE TOP BAR ── -->
  <header class="topbar">
    <div class="topbar-brand">
      <div class="brand-icon"><i class="fa-solid fa-terminal"></i></div>
      <span>Air Jake</span>
    </div>
    <div class="topbar-actions">
      <button class="menu-btn" onclick="openDrawer()">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>
  </header>

  <!-- ── MOBILE DRAWER ── -->
  <div class="drawer-overlay" id="drawerOverlay" o nclick="closeDrawer()"></div>
  <div class="drawer" id="drawer">
    <div class="drawer-header">
      <div class="topbar-brand">
        <div class="brand-icon"><i class="fa-solid fa-terminal"></i></div>
        <span>Air Jake</span>
      </div>
      <button class="close-btn" onclick="closeDrawer()"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <nav class="drawer-nav">
      <a class="nav-item active" onclick="showTab('booking'); closeDrawer()">
        <i class="fa-solid fa-circle-plus"></i> Cargo Booking Desk
      </a>
      <a class="nav-item" onclick="showTab('ledger'); closeDrawer()">
        <i class="fa-solid fa-list-check"></i> Cargo Fleet Ledger
      </a>
      <a class="nav-item" href="#">
        <i class="fa-solid fa-globe"></i> Public Portal View
      </a>
    </nav>
    <div class="drawer-footer">
      <span class="label">Security Protocol</span>
      <p class="value">Terminal Master Operator</p>
    </div>
  </div>

  <!-- ── DESKTOP SIDEBAR ── -->
  <aside class="sidebar">
    <div class="sidebar-brand">
      <div class="brand-icon"><i class="fa-solid fa-terminal"></i></div>
      <span>AJ OPERATIONS</span>
    </div>
    <nav class="sidebar-nav">
      <a class="nav-item active" href="#booking">
        <i class="fa-solid fa-circle-plus"></i> Cargo Booking Desk
      </a>
      <a class="nav-item" href="#ledger">
        <i class="fa-solid fa-list-check"></i> Cargo Fleet Ledger
      </a>
      <a class="nav-item" href="#">
        <i class="fa-solid fa-globe"></i> Public Portal View
      </a>
    </nav>
    <div class="sidebar-footer">
      <span class="label">Security Protocol</span>
      <p class="value">Terminal Master Operator</p>
    </div>
  </aside>

  <!-- ── CONTENT WRAPPER ── -->
  <div class="desktop-main">

    <!-- ── TAB BAR (mobile) ── -->
    <div class="tab-bar">
      <button class="tab-btn active" id="tab-booking" onclick="showTab('booking')">
        <i class="fa-solid fa-circle-plus"></i> Book Cargo
      </button>
      <button class="tab-btn" id="tab-ledger" onclick="showTab('ledger')">
        <i class="fa-solid fa-list-check"></i> Fleet Ledger
      </button>
    </div>

    <main>

      <!-- ── BOOKING TAB ── -->
      <div class="tab-panel active" id="panel-booking">
        <div class="section-header">
          <h1 class="section-title">Logistics Management</h1>
          <p class="section-sub">Onboard cargo, update checkpoints, and configure terminal holds.</p>
        </div>

        <!-- Stats (desktop only as part of booking panel, but shown always) -->
        <div class="stats-row">
          <div class="stat-card">
            <div class="stat-label">Active Shipments</div>
            <div class="stat-value accent">24</div>
            <div class="stat-badge"><i class="fa-solid fa-arrow-up"></i> 12% this week</div>
          </div>
          <div class="stat-card">
            <div class="stat-label">In Transit</div>
            <div class="stat-value">17</div>
            <div class="stat-badge"><span class="live-dot"></span> Live</div>
          </div>
          <div class="stat-card">
            <div class="stat-label">Custom Holds</div>
            <div class="stat-value" style="color: var(--amber)">3</div>
          </div>
          <div class="stat-card">
            <div class="stat-label">Delivered</div>
            <div class="stat-value" style="color: var(--green)">142</div>
          </div>
        </div>

        <div class="booking-layout">
          <!-- Booking Form -->
          <div class="card" id="booking">
            <div class="card-header">
              <span class="card-title"><i class="fa-solid fa-square-plus"></i> New Consignment</span>
            </div>
            <div class="card-body">
              <div class="form-grid">
                <form method="POST" action="{{url('/parcel/store')}}">
                   @csrf 
                <div class="field">
                  <label>Sender Identity</label>
                  <input type="text" name="sender_name" placeholder="e.g. Global Electronics Inc." required>
                </div>


                <div class="form-row">
                  <div class="field">
                    <label>Receiver Name</label>
                    <input type="text" name="receiver_name" placeholder="Full name" required>
                  </div>


                  <div class="field">
                    <label>Receiver Email</label>
                    <input type="email" name="receiver_email" placeholder="email@domain.com" required>
                  </div>
                </div>


                <div class="field">
                  <label>Delivery Destination</label>
                  <input type="text" name="delivery_address" placeholder="City, Country, ZIP" required>
                </div>


                <div class="form-row">
                  <div class="field">
                    <label>Weight (KG)</label>
                    <input type="text" name="weight" placeholder="14.50" required>
                  </div>
                  <div class="field">
                    <label>Cost ($)</label>
                    <input type="number" name="cost" step="0.01" placeholder="0.00" required>
                  </div>
                </div>   

                <hr class="divider">

                <div>
                  <div class="coords-label">
                    <i class="fa-solid fa-location-dot"></i> Live Map Coordinates
                  </div>
                  <div class="coords-grid">
                    <div class="field">
                      <label>Current Location</label>
                      <input type="text" name="current_location" class="mono" placeholder="MANILA, PH" required>
                    </div>
                    <div class="field">
                      <label>Latitude</label>
                      <input type="number" name="latitude" class="mono" step="0.000001" required>
                    </div>
                    <div class="field">
                      <label>Longitude</label>
                      <input type="number" name="longitude" class="mono" step="0.000001" required>
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn-primary">
                  <i class="fa-solid fa-print"></i>
                   Commit & Print Waybill
                </button>
                   </form>
              </div>

            </div>
          </div>

       

          <!-- Ledger (shown alongside on desktop) -->
          <div class="card" id="ledger" style="display:none;" class="desktop-ledger">
          </div>
        </div>
      </div>

      <!-- ── LEDGER TAB ── -->
      <div class="tab-panel" id="panel-ledger">
        <div class="section-header">
          <h1 class="section-title">Fleet Ledger</h1>
          <p class="section-sub">Manage active cargo and update pipeline checkpoint phases.</p>
        </div>

        <div class="card">
          <div class="card-header">
            <span class="card-title"><i class="fa-solid fa-list-check"></i> Active Cargo</span>
            <span class="badge badge-green"><span class="dot"></span> 24 Active</span>
          </div>
          <div class="table-wrap">
            <table>
              <thead>
                <tr>
                  <th>Tracking Code</th>
                  <th>Consignee</th>
                  <th>Status</th>
                  <th style="text-align:right">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><span class="tracking-code">AJD-LN-49210-PH</span></td>
                  <td>
                    <div class="consignee-name">Jane Winters</div>
                    <div class="consignee-meta">Lagos, NG</div>
                  </td>
                  <td>
                    <span class="badge badge-amber">
                      <span class="dot"></span> Custom Hold
                    </span>
                  </td>
                  <td>
                    <div class="actions-col">
                        <a href="{{url('/admin/parcel-receipt/1')}}">
                      <button class="btn-sm btn-ghost">
                        <i class="fa-solid fa-receipt" style="color:var(--accent)"></i> Invoice</button>
                          </a>
                     
                     <button class="btn-sm btn-danger">
                        <i class="fa-solid fa-route"></i> Shift Checkpoint</button>
                    </div>
                  </td>
                </tr>
                {{--<tr>
                  <td><span class="tracking-code">AJD-AB-30021-US</span></td>
                  <td>
                    <div class="consignee-name">Marco Rivera</div>
                    <div class="consignee-meta">New York, US</div>
                  </td>
                  <td>
                    <span class="badge badge-green">
                      <span class="dot"></span> In Transit
                    </span>
                  </td>
                  <td>
                    <div class="actions-col">
                      <button class="btn-sm btn-ghost"><i class="fa-solid fa-receipt" style="color:var(--accent)"></i> Invoice</button>
                      <button class="btn-sm btn-danger"><i class="fa-solid fa-route"></i> Shift Checkpoint</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span class="tracking-code">AJD-XC-77843-GB</span></td>
                  <td>
                    <div class="consignee-name">Amelia Chen</div>
                    <div class="consignee-meta">London, GB</div>
                  </td>
                  <td>
                    <span class="badge badge-red">
                      <span class="dot"></span> Delayed
                    </span>
                  </td>
                  <td>
                    <div class="actions-col">
                      <button class="btn-sm btn-ghost"><i class="fa-solid fa-receipt" style="color:var(--accent)"></i> Invoice</button>
                      <button class="btn-sm btn-danger"><i class="fa-solid fa-route"></i> Shift Checkpoint</button>
                    </div>
                  </td>
                </tr>--}}
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </main>
  </div>

  <!-- Floating Action Button (mobile) -->
  <button class="fab" onclick="showTab('booking')" title="New Cargo">
    <i class="fa-solid fa-plus"></i>
  </button>

  <script>
    function showTab(name) {
      document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
      document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
      const panel = document.getElementById('panel-' + name);
      const btn = document.getElementById('tab-' + name);
      if (panel) panel.classList.add('active');
      if (btn) btn.classList.add('active');
    }

    function openDrawer() {
      document.getElementById('drawer').classList.add('open');
      document.getElementById('drawerOverlay').classList.add('open');
      document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
      document.getElementById('drawer').classList.remove('open');
      document.getElementById('drawerOverlay').classList.remove('open');
      document.body.style.overflow = '';
    }

    // On desktop, always show both panels side-by-side (handled by CSS)
    // Make sidebar nav links switch sections by anchor
    document.querySelectorAll('.sidebar-nav .nav-item').forEach(item => {
      item.addEventListener('click', function() {
        document.querySelectorAll('.sidebar-nav .nav-item').forEach(n => n.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>
</body>
</html>