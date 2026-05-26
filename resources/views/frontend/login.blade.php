<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Air Jake Delivery Service  — Sign In</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --navy:        #0B2545;
      --navy-mid:    #134074;
      --navy-light:  #1a5296;
      --red:         #EE1B24;
      --red-dark:    #C4151D;
      --white:       #ffffff;
      --off-white:   #F7F9FC;
      --slate-50:    #F8FAFC;
      --slate-100:   #F1F5F9;
      --slate-200:   #E2E8F0;
      --slate-400:   #94A3B8;
      --slate-500:   #64748B;
      --slate-600:   #475569;
      --slate-700:   #334155;
      --slate-800:   #1E293B;
      --font-d:      'Bebas Neue', sans-serif;
      --font-b:      'Outfit', sans-serif;
      --ease:        cubic-bezier(0.4,0,0.2,1);
    }

    html { height: 100%; }

    body {
      font-family: var(--font-b);
      background: var(--off-white);
      min-height: 100svh;
      display: flex;
      flex-direction: column;
      -webkit-font-smoothing: antialiased;
    }

    /* ══ PAGE LAYOUT ══ */
    .aj-page {
      flex: 1;
      display: flex;
      flex-direction: column;
      min-height: 100svh;
    }

    /* ══ HERO ══ */
    .aj-hero {
      background: var(--navy);
      position: relative;
      overflow: hidden;
      padding: 3rem 1.25rem 5.5rem;
      text-align: center;
      flex-shrink: 0;
    }

    /* Dot grid */
    .aj-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: radial-gradient(rgba(255,255,255,0.05) 1px, transparent 1px);
      background-size: 22px 22px;
      pointer-events: none;
    }

    /* Diagonal slash accent */
    .aj-hero::after {
      content: '';
      position: absolute;
      bottom: -1px;
      left: 0;
      right: 0;
      height: 60px;
      background: var(--off-white);
      clip-path: polygon(0 100%, 100% 0, 100% 100%);
    }

    .aj-hero-glow {
      position: absolute;
      bottom: -80px; left: 50%;
      transform: translateX(-50%);
      width: 500px; height: 260px;
      border-radius: 50%;
      background: radial-gradient(ellipse, rgba(238,27,36,0.14) 0%, transparent 70%);
      pointer-events: none;
    }

    .aj-hero-bar {
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 4px;
      background: var(--red);
    }

    .aj-hero-inner {
      position: relative;
      z-index: 1;
    }

    /* Brand mark */
    .aj-brand {
      display: inline-flex;
      align-items: center;
      gap: 0.6rem;
      margin-bottom: 2rem;
      animation: fadeDown 0.45s ease both;
    }

    .aj-brand-icon {
      width: 42px; height: 42px;
      background: var(--red);
      border-radius: 11px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
      color: #fff;
      box-shadow: 0 4px 20px rgba(238,27,36,0.45);
      flex-shrink: 0;
    }

    .aj-brand-name {
      font-family: var(--font-d);
      font-size: 1.7rem;
      letter-spacing: 0.06em;
      color: var(--white);
      line-height: 1;
    }

    .aj-brand-name span {
      display: block;
      font-family: var(--font-b);
      font-size: 0.55rem;
      font-weight: 600;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.38);
      margin-top: 2px;
    }

    .aj-hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      background: rgba(238,27,36,0.12);
      border: 1px solid rgba(238,27,36,0.28);
      color: #ff9598;
      font-size: 0.62rem;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      padding: 0.3rem 0.8rem;
      border-radius: 100px;
      margin-bottom: 1rem;
      animation: fadeDown 0.5s 0.05s ease both;
    }

    .badge-dot {
      width: 5px; height: 5px;
      border-radius: 50%;
      background: var(--red);
      animation: pulseDot 2s infinite;
    }

    @keyframes pulseDot {
      0%,100% { opacity:1; transform:scale(1); }
      50%      { opacity:.3; transform:scale(.6); }
    }

    .aj-hero-title {
      font-family: var(--font-d);
      font-size: clamp(2rem, 8vw, 3.4rem);
      letter-spacing: 0.04em;
      color: var(--white);
      line-height: 1.05;
      margin: 0 0 0.75rem;
      animation: fadeDown 0.55s 0.08s ease both;
    }
    .aj-hero-title span { color: var(--red); }

    .aj-hero-sub {
      font-size: clamp(0.8rem, 2.5vw, 0.92rem);
      line-height: 1.75;
      color: rgba(255,255,255,0.46);
      max-width: 380px;
      margin: 0 auto;
      animation: fadeDown 0.6s 0.12s ease both;
    }

    /* ══ MAIN / CARD AREA ══ */
    .aj-main {
      flex: 1;
      display: flex;
      align-items: flex-start;
      justify-content: center;
      padding: 0 1.25rem 3.5rem;
      margin-top: -3.5rem;
      position: relative;
      z-index: 2;
    }

    .aj-card-wrap {
      width: 100%;
      max-width: 440px;
    }

    /* ══ LOGIN CARD ══ */
    .aj-card {
      background: var(--white);
      border: 1px solid var(--slate-200);
      border-radius: 22px;
      box-shadow: 0 8px 40px rgba(11,37,69,0.12);
      overflow: hidden;
      animation: riseUp 0.5s 0.15s var(--ease) both;
    }

    @keyframes riseUp {
      from { opacity:0; transform:translateY(20px); }
      to   { opacity:1; transform:translateY(0); }
    }

    .aj-card-bar {
      height: 4px;
      background: linear-gradient(90deg, var(--navy), var(--navy-mid));
    }

    .aj-card-body { padding: 2rem 1.75rem; }

    /* Card header */
    .aj-card-header {
      display: flex;
      align-items: center;
      gap: 0.65rem;
      margin-bottom: 0.35rem;
    }

    .aj-card-header-icon {
      width: 38px; height: 38px;
      border-radius: 10px;
      background: rgba(238,27,36,0.08);
      border: 1px solid rgba(238,27,36,0.15);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--red);
      font-size: 0.9rem;
      flex-shrink: 0;
    }

    .aj-card-header h2 {
      font-family: var(--font-d);
      font-size: clamp(1.4rem, 4vw, 1.75rem);
      letter-spacing: 0.04em;
      color: var(--navy);
      margin: 0;
      line-height: 1.1;
    }

    .aj-card-desc {
      font-size: 0.77rem;
      line-height: 1.7;
      color: var(--slate-500);
      margin: 0.3rem 0 1.75rem;
    }

    /* ══ FORM ══ */
    .aj-form { display: flex; flex-direction: column; gap: 1.1rem; }

    .aj-field { display: flex; flex-direction: column; gap: 0.35rem; }

    .aj-label {
      font-size: 0.68rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--slate-500);
    }
    .aj-label span { color: var(--red); margin-left: 2px; }

    .aj-input-wrap { position: relative; }

    .aj-input {
      width: 100%;
      background: var(--slate-50);
      border: 1.5px solid var(--slate-200);
      border-radius: 11px;
      padding: 0.82rem 1rem 0.82rem 2.65rem;
      font-family: var(--font-b);
      font-size: 0.9rem;
      color: var(--slate-700);
      outline: none;
      transition: border-color 0.2s var(--ease), box-shadow 0.2s var(--ease), background 0.2s;
      -webkit-appearance: none;
    }
    .aj-input::placeholder { color: var(--slate-400); font-weight: 400; }
    .aj-input:focus {
      border-color: var(--navy-mid);
      background: var(--white);
      box-shadow: 0 0 0 3px rgba(19,64,116,0.1);
    }

    .aj-input-ico {
      position: absolute;
      left: 0.9rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--slate-400);
      font-size: 0.85rem;
      pointer-events: none;
      transition: color 0.2s;
    }
    .aj-input-wrap:focus-within .aj-input-ico { color: var(--navy-mid); }

    /* Password toggle */
    .aj-pw-toggle {
      position: absolute;
      right: 0.9rem;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      color: var(--slate-400);
      font-size: 0.85rem;
      cursor: pointer;
      padding: 4px;
      transition: color 0.2s;
      line-height: 1;
    }
    .aj-pw-toggle:hover { color: var(--navy); }

    .aj-input.has-toggle { padding-right: 2.6rem; }

    /* Remember + Forgot row */
    .aj-meta-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 0.5rem;
      flex-wrap: wrap;
    }

    .aj-remember {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      cursor: pointer;
      font-size: 0.78rem;
      font-weight: 500;
      color: var(--slate-600);
      user-select: none;
      -webkit-user-select: none;
    }

    .aj-remember input[type="checkbox"] {
      width: 16px; height: 16px;
      border: 1.5px solid var(--slate-300);
      border-radius: 4px;
      accent-color: var(--navy);
      cursor: pointer;
      flex-shrink: 0;
    }

    .aj-forgot {
      font-size: 0.77rem;
      font-weight: 600;
      color: var(--navy-mid);
      text-decoration: none;
      transition: color 0.15s;
    }
    .aj-forgot:hover { color: var(--red); }

    /* Submit */
    .aj-submit {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.55rem;
      width: 100%;
      background: var(--red);
      color: var(--white);
      border: none;
      border-radius: 11px;
      padding: 0.92rem 1.5rem;
      font-family: var(--font-b);
      font-size: 0.92rem;
      font-weight: 700;
      letter-spacing: 0.04em;
      cursor: pointer;
      box-shadow: 0 5px 20px rgba(238,27,36,0.35);
      transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
      margin-top: 0.3rem;
      -webkit-tap-highlight-color: transparent;
    }
    .aj-submit:hover {
      background: var(--red-dark);
      transform: translateY(-1px);
      box-shadow: 0 8px 28px rgba(238,27,36,0.48);
    }
    .aj-submit:active { transform: translateY(0); }
    .aj-submit i { font-size: 0.82rem; transition: transform 0.2s; }
    .aj-submit:hover i { transform: translateX(3px); }

    /* Divider */
    .aj-divider {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      margin: 0.25rem 0;
      font-size: 0.68rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--slate-400);
    }
    .aj-divider::before,
    .aj-divider::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--slate-200);
    }

    /* Security note */
    .aj-note {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.4rem;
      font-size: 0.67rem;
      color: var(--slate-400);
      margin-top: 0.25rem;
    }
    .aj-note i { color: #22c55e; }

    /* ══ BELOW CARD ══ */
    .aj-card-footer {
      text-align: center;
      margin-top: 1.25rem;
      font-size: 0.78rem;
      color: var(--slate-500);
      animation: riseUp 0.5s 0.25s var(--ease) both;
    }

    .aj-card-footer a {
      color: var(--navy-mid);
      font-weight: 700;
      text-decoration: none;
      transition: color 0.15s;
    }
    .aj-card-footer a:hover { color: var(--red); }

    /* ══ INFO STRIP ══ */
    .aj-strip {
      background: var(--white);
      border-top: 1px solid var(--slate-200);
      padding: 1rem 1.25rem;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1.5rem;
      flex-wrap: wrap;
      animation: riseUp 0.5s 0.3s var(--ease) both;
    }

    .aj-strip-item {
      display: flex;
      align-items: center;
      gap: 0.4rem;
      font-size: 0.68rem;
      font-weight: 600;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--slate-500);
    }
    .aj-strip-item i { color: var(--navy-mid); font-size: 0.7rem; }

    /* ══ TOAST ══ */
    .aj-toast {
      position: fixed;
      bottom: 1.5rem;
      left: 50%;
      transform: translateX(-50%) translateY(100px);
      background: var(--navy);
      color: white;
      padding: 0.85rem 1.5rem;
      border-radius: 12px;
      font-size: 0.82rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 0.55rem;
      box-shadow: 0 8px 32px rgba(11,37,69,0.28);
      z-index: 9999;
      transition: transform 0.4s var(--ease);
      white-space: nowrap;
    }
    .aj-toast.show { transform: translateX(-50%) translateY(0); }
    .aj-toast i { color: #4ade80; }

    /* ══ Keyframes ══ */
    @keyframes fadeDown {
      from { opacity:0; transform:translateY(-12px); }
      to   { opacity:1; transform:translateY(0); }
    }

    /* ══ ERROR STATE ══ */
    .aj-field-error {
      font-size: 0.68rem;
      font-weight: 600;
      color: var(--red);
      display: flex;
      align-items: center;
      gap: 0.3rem;
    }
    .aj-field-error i { font-size: 0.62rem; }

    .aj-input.error {
      border-color: var(--red);
      background: rgba(238,27,36,0.03);
    }
    .aj-input.error:focus {
      box-shadow: 0 0 0 3px rgba(238,27,36,0.1);
    }
  </style>
</head>
<body>

<div class="aj-page">

  <!-- ── HERO ── -->
  <div class="aj-hero">
    <div class="aj-hero-bar" aria-hidden="true"></div>
    <div class="aj-hero-glow" aria-hidden="true"></div>

    <div class="aj-hero-inner">
      <!-- Brand -->
      <div class="aj-brand">
        <div class="aj-brand-icon">
          <i class="fa-solid fa-terminal"></i>
        </div>
        <div class="aj-brand-name">
          AIR JAKE
          <span>Delivery Services</span>
        </div>
      </div>

      <!-- Badge -->
      <div class="aj-hero-badge">
        <div class="badge-dot"></div>
        Secure Operations Portal
        <div class="badge-dot"></div>
      </div>

      <!-- Title -->
      <h1 class="aj-hero-title">
        Welcome <span>Back</span>
      </h1>

      <p class="aj-hero-sub">
        Sign in to access the logistics management console and manage your cargo operations.
      </p>
    </div>
  </div>

  <!-- ── MAIN ── -->
  <div class="aj-main">
    <div class="aj-card-wrap">

      <!-- Login Card -->
      <div class="aj-card">
        <div class="aj-card-bar"></div>
        <div class="aj-card-body">

          <div class="aj-card-header">
            <div class="aj-card-header-icon">
              <i class="fa-solid fa-lock"></i>
            </div>
            <h2>Sign In</h2>
          </div>
          <p class="aj-card-desc">
            Enter your credentials to access the terminal. All sessions are encrypted and monitored.
          </p>

          <form class="a-form" id="loginForm" action="{{ url('admin/login')}}" method="POST" novalidate>
            <!-- CSRF token placeholder for Laravel -->
               @csrf 

            <!-- Email -->
            <div class="aj-field" id="field-email">
              <label class="aj-label" for="lf_email">
                Email Address <span>*</span>
              </label>
              <div class="aj-input-wrap">
                <i class="fa-solid fa-envelope aj-input-ico"></i>
                <input
                  type="email"
                  id="lf_email"
                  name="email"
                  class="aj-input"
                  placeholder="you@example.com"
                  autocomplete="email"
                  required
                  inputmode="email"
                >
              </div>
              <!-- Error slot -->
              <span class="aj-field-error" id="err-email" style="display:none;">
                <i class="fa-solid fa-circle-exclamation"></i>
                <span id="err-email-msg">Please enter a valid email address.</span>
              </span>
            </div>

            <!-- Password -->
            <div class="aj-field" id="field-password">
              <label class="aj-label" for="lf_password">
                Password <span>*</span>
              </label>
              <div class="aj-input-wrap">
                <i class="fa-solid fa-lock aj-input-ico"></i>
                <input
                  type="password"
                  id="lf_password"
                  name="password"
                  class="aj-input has-toggle"
                  placeholder="Enter your password"
                  autocomplete="current-password"
                  required
                >
                <button type="button" class="aj-pw-toggle" id="pwToggle" aria-label="Toggle password visibility">
                  <i class="fa-regular fa-eye" id="pwToggleIcon"></i>
                </button>
              </div>
              <span class="aj-field-error" id="err-password" style="display:none;">
                <i class="fa-solid fa-circle-exclamation"></i>
                <span id="err-password-msg">Password is required.</span>
              </span>
            </div>

            <!-- Remember + Forgot -->
            <div class="aj-meta-row">
              <label class="aj-remember">
                <input type="checkbox" name="remember" id="lf_remember">
                Remember me
              </label>
              <a href="#" class="aj-forgot">Forgot password?</a>
            </div>

            <!-- Submit -->
            <button type="submit" class="aj-submit" id="loginSubmit">
              <i class="fa-solid fa-arrow-right-to-bracket"></i>
              <span>Sign In to Terminal</span>
            </button>

            <p class="aj-note">
              <i class="fa-solid fa-shield-halved"></i>
              256-bit encrypted · Session protected
            </p>
          </form>

        </div>
      </div>

      <!-- Below card -->
      <div class="aj-card-footer">
        Need access? <a href="#">Contact your administrator</a>
      </div>

    </div>
  </div>

  <!-- ── FOOTER STRIP ── -->
  <div class="aj-strip">
    <div class="aj-strip-item">
      <i class="fa-solid fa-lock"></i> Secure Login
    </div>
    <div class="aj-strip-item">
      <i class="fa-solid fa-globe"></i> 150+ Countries
    </div>
    <div class="aj-strip-item">
      <i class="fa-solid fa-headset"></i> 24/7 Support
    </div>
  </div>

</div><!-- /.aj-page -->

<!-- Toast -->
<div class="aj-toast" id="ajToast" role="status" aria-live="polite">
  <i class="fa-solid fa-circle-check"></i>
  <span id="ajToastMsg">Success!</span>
</div>

<script>
(function () {

  /* ── Password toggle ── */
  var pwInput  = document.getElementById('lf_password');
  var pwToggle = document.getElementById('pwToggle');
  var pwIcon   = document.getElementById('pwToggleIcon');

  if (pwToggle) {
    pwToggle.addEventListener('click', function () {
      var isPassword = pwInput.type === 'password';
      pwInput.type = isPassword ? 'text' : 'password';
      pwIcon.className = isPassword ? 'fa-regular fa-eye-slash' : 'fa-regular fa-eye';
      pwToggle.setAttribute('aria-label', isPassword ? 'Hide password' : 'Show password');
    });
  }

  /* ── Toast helper ── */
  function showToast(msg, isError) {
    var toast = document.getElementById('ajToast');
    var icon  = toast.querySelector('i');
    document.getElementById('ajToastMsg').textContent = msg;
    icon.className = isError ? 'fa-solid fa-circle-xmark' : 'fa-solid fa-circle-check';
    icon.style.color = isError ? '#f87171' : '#4ade80';
    toast.classList.add('show');
    setTimeout(function () { toast.classList.remove('show'); }, 3000);
  }

  /* ── Field error helpers ── */
  function showError(fieldId, msg) {
    var input = document.getElementById('lf_' + fieldId);
    var err   = document.getElementById('err-' + fieldId);
    var msgEl = document.getElementById('err-' + fieldId + '-msg');
    if (input)  input.classList.add('error');
    if (msgEl)  msgEl.textContent = msg;
    if (err)    err.style.display = 'flex';
  }

  function clearError(fieldId) {
    var input = document.getElementById('lf_' + fieldId);
    var err   = document.getElementById('err-' + fieldId);
    if (input) input.classList.remove('error');
    if (err)   err.style.display = 'none';
  }

  /* Clear errors on input */
  ['email', 'password'].forEach(function (id) {
    var el = document.getElementById('lf_' + id);
    if (el) el.addEventListener('input', function () { clearError(id); });
  });

  /* ── Form validation + submit ── */
  var form   = document.getElementById('loginForm');
  var submit = document.getElementById('loginSubmit');

  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var valid = true;

      var email = document.getElementById('lf_email');
      var pass  = document.getElementById('lf_password');

      clearError('email');
      clearError('password');

      /* Email */
      if (!email.value.trim()) {
        showError('email', 'Email address is required.');
        valid = false;
      } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())) {
        showError('email', 'Please enter a valid email address.');
        valid = false;
      }

      /* Password */
      if (!pass.value) {
        showError('password', 'Password is required.');
        valid = false;
      } else if (pass.value.length < 6) {
        showError('password', 'Password must be at least 6 characters.');
        valid = false;
      }

      if (!valid) return;

      /* Simulate loading */
      submit.disabled = true;
      submit.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i><span>Authenticating…</span>';

      /* Replace this timeout with actual form submission / fetch in production */
      setTimeout(function () {
        submit.disabled = false;
        submit.innerHTML = '<i class="fa-solid fa-arrow-right-to-bracket"></i><span>Sign In to Terminal</span>';
        showToast('Authentication successful! Redirecting…', false);
        /* form.submit(); */
      }, 1800);
    });
  }

}());
</script>

</body>
</html>