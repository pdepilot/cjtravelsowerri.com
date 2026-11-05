<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="/images/logo-mark.png" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign in — CJ Travels</title>
  <meta name="description" content="Sign in to your CJ Travels account to manage bookings, saved searches and travel financing enquiries." />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />

  <style>
    /* =======================================================
       TOKENS
       ======================================================= */
    :root {
      --cream: #f5f0e6;
      --cream-soft: #faf6ed;
      --ivory: #fdfbf6;
      --navy: #0b1e3d;
      --navy-soft: #1e3657;
      --gold: #a8842c;
      --gold-soft: #c9a55b;
      --ink: #1a1a1a;
      --ink-soft: #4a4741;
      --muted: #8a8378;
      --hairline: #d9d1c0;
      --hairline-soft: #e8e1d1;
      --error: #a3452e;
    }

    /* =======================================================
       RESET / BASE
       ======================================================= */
    * { box-sizing: border-box; margin: 0; padding: 0; }
    html, body { height: 100%; }

    body {
      font-family: 'DM Sans', sans-serif;
      font-weight: 400;
      color: var(--ink);
      background: var(--cream);
      line-height: 1.5;
      -webkit-font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
    }

    a { color: inherit; text-decoration: none; }
    input, button { font: inherit; }

    a:focus-visible,
    button:focus-visible,
    input:focus-visible {
      outline: 1.5px solid var(--navy);
      outline-offset: 4px;
    }

    .skip-link {
      position: absolute;
      left: 1rem;
      top: -60px;
      z-index: 100;
      background: var(--navy);
      color: var(--ivory);
      padding: .7rem 1.2rem;
      font-size: 13px;
      letter-spacing: .1em;
      text-transform: uppercase;
      transition: top .25s ease;
    }
    .skip-link:focus { top: 0; }

    /* =======================================================
       SHELL — GRID AREAS
       ======================================================= */
    .shell {
      display: grid;
      grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
      grid-template-rows: auto 1fr auto;
      grid-template-areas:
        "brand image"
        "form  image"
        "foot  image";
      min-height: 100vh;
    }

    /* =======================================================
       BRAND AREA
       ======================================================= */
    .brand-area {
      grid-area: brand;
      padding: 44px clamp(28px, 5vw, 88px) 0;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      flex-shrink: 0;
    }

    .brand-mark {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      border: 1px solid var(--navy);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: var(--navy);
      font-size: 16px;
      flex-shrink: 0;
    }

    .brand-name {
      font-family: 'Cormorant Garamond', serif;
      font-size: 22px;
      font-weight: 500;
      letter-spacing: .01em;
      color: var(--navy);
      line-height: 1;
    }

    .brand-name em {
      font-style: italic;
      color: var(--gold);
      font-weight: 400;
    }

    /* =======================================================
       FORM AREA
       ======================================================= */
    .form-area {
      grid-area: form;
      padding: 0 clamp(28px, 5vw, 88px);
      display: flex;
      flex-direction: column;
    }

    .form-wrap {
      width: 100%;
      max-width: 380px;
      margin: auto;
      padding: 40px 0;
    }

    .eyebrow {
      display: flex;
      align-items: center;
      gap: 14px;
      font-size: 10.5px;
      font-weight: 500;
      letter-spacing: .32em;
      text-transform: uppercase;
      color: var(--muted);
      margin-bottom: 28px;
    }

    .eyebrow::after {
      content: "";
      display: inline-block;
      width: 28px;
      height: 1px;
      background: var(--gold);
    }

    h1 {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(44px, 5.2vw, 60px);
      font-weight: 400;
      line-height: .98;
      letter-spacing: -.015em;
      color: var(--navy);
      margin-bottom: 20px;
    }

    h1 em {
      font-style: italic;
      color: var(--gold);
      font-weight: 400;
    }

    .subtitle {
      font-size: 15px;
      color: var(--ink-soft);
      line-height: 1.65;
      margin-bottom: 44px;
      max-width: 34ch;
    }

    .field {
      position: relative;
      margin-bottom: 34px;
    }

    .field label {
      display: block;
      font-size: 10.5px;
      font-weight: 500;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: var(--muted);
      margin-bottom: 12px;
    }

    .field input {
      width: 100%;
      border: 0;
      border-bottom: 1px solid var(--hairline);
      background: transparent;
      padding: 6px 0 12px;
      font-family: 'DM Sans', sans-serif;
      font-size: 16px;
      font-weight: 400;
      color: var(--navy);
      outline: none;
      transition: border-color .3s ease;
      letter-spacing: -.005em;
    }

    .field input::placeholder {
      color: var(--hairline);
      font-weight: 300;
      font-size: 15px;
    }

    .field input:focus {
      border-bottom-color: var(--navy);
    }

    .field input.is-invalid {
      border-bottom-color: var(--error);
    }

    .pw-toggle {
      position: absolute;
      right: 0;
      bottom: 12px;
      background: none;
      border: 0;
      cursor: pointer;
      color: var(--muted);
      font-size: 15px;
      padding: 4px;
      transition: color .2s ease;
    }

    .pw-toggle:hover { color: var(--navy); }

    .field-error {
      display: none;
      margin-top: 10px;
      font-size: 12px;
      color: var(--error);
      letter-spacing: .01em;
    }
    .field-error.show { display: block; }

    .options {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
      margin: 2px 0 36px;
    }

    .check {
      display: flex;
      align-items: center;
      gap: 10px;
      cursor: pointer;
      user-select: none;
    }

    .check input {
      appearance: none;
      width: 15px;
      height: 15px;
      border: 1px solid var(--hairline);
      cursor: pointer;
      position: relative;
      transition: all .2s ease;
      flex-shrink: 0;
    }

    .check input:checked {
      background: var(--navy);
      border-color: var(--navy);
    }

    .check input:checked::after {
      content: "";
      position: absolute;
      left: 4px;
      top: 1px;
      width: 4px;
      height: 8px;
      border: solid var(--ivory);
      border-width: 0 1.2px 1.2px 0;
      transform: rotate(45deg);
    }

    .check span {
      font-size: 13px;
      color: var(--ink-soft);
      letter-spacing: .01em;
    }

    .link-muted {
      font-size: 13px;
      color: var(--ink-soft);
      letter-spacing: .01em;
      border-bottom: 1px solid transparent;
      transition: border-color .2s ease, color .2s ease;
      padding-bottom: 1px;
    }

    .link-muted:hover {
      color: var(--navy);
      border-bottom-color: var(--navy);
    }

    .btn-submit {
      width: 100%;
      background: var(--navy);
      color: var(--ivory);
      border: 0;
      padding: 20px 24px;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: .32em;
      text-transform: uppercase;
      cursor: pointer;
      transition: background-color .3s ease;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
    }

    .btn-submit:hover {
      background: var(--navy-soft);
    }

    .btn-submit:disabled {
      opacity: .65;
      cursor: not-allowed;
    }

    .btn-submit .arrow {
      font-size: 14px;
      transition: transform .3s ease;
    }

    .btn-submit:hover .arrow {
      transform: translateX(4px);
    }

    .btn-submit:disabled .arrow {
      animation: spin 1s linear infinite;
    }

    @keyframes spin { to { transform: rotate(360deg); } }

    .divider {
      display: flex;
      align-items: center;
      gap: 16px;
      margin: 36px 0 24px;
      font-size: 10px;
      letter-spacing: .3em;
      text-transform: uppercase;
      color: var(--muted);
    }

    .divider::before,
    .divider::after {
      content: "";
      flex: 1;
      height: 1px;
      background: var(--hairline-soft);
    }

    .btn-google {
      width: 100%;
      background: transparent;
      border: 1px solid var(--hairline);
      padding: 16px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      font-size: 13px;
      font-weight: 500;
      color: var(--ink);
      cursor: pointer;
      letter-spacing: .01em;
      transition: border-color .25s ease, background-color .25s ease;
    }

    .btn-google:hover {
      border-color: var(--navy);
      background: var(--cream-soft);
    }

    .btn-google svg { width: 16px; height: 16px; flex-shrink: 0; }

    .demo-note {
      margin-top: 14px;
      font-size: 11px;
      line-height: 1.6;
      color: var(--muted);
      letter-spacing: .01em;
      padding-left: 16px;
      border-left: 1px solid var(--hairline);
    }

    .status {
      display: none;
      margin-top: 24px;
      padding: 18px 20px;
      font-size: 13px;
      line-height: 1.65;
      letter-spacing: .01em;
    }

    .status.show { display: block; }

    .status.error {
      background: rgba(163, 69, 46, .06);
      border-left: 2px solid var(--error);
      color: var(--error);
    }

    .status.info {
      background: rgba(11, 30, 61, .04);
      border-left: 2px solid var(--navy);
      color: var(--ink-soft);
    }

    .status.info strong {
      display: block;
      color: var(--navy);
      margin-bottom: 6px;
      font-weight: 600;
    }

    .status.info a {
      color: var(--navy);
      border-bottom: 1px solid var(--navy);
    }

    .prompt {
      margin-top: 32px;
      font-size: 13px;
      color: var(--ink-soft);
      text-align: center;
      letter-spacing: .01em;
    }

    .prompt a {
      color: var(--navy);
      font-weight: 500;
      border-bottom: 1px solid var(--hairline);
      transition: border-color .2s ease;
    }

    .prompt a:hover { border-bottom-color: var(--navy); }

    /* =======================================================
       FOOTER AREA
       ======================================================= */
    .foot {
      grid-area: foot;
      padding: 32px clamp(28px, 5vw, 88px) 40px;
      border-top: 1px solid var(--hairline-soft);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      flex-wrap: wrap;
      font-size: 11px;
      color: var(--muted);
      letter-spacing: .04em;
    }

    .foot-links { display: flex; gap: 20px; list-style: none; }
    .foot-links a { transition: color .2s ease; }
    .foot-links a:hover { color: var(--navy); }

    /* =======================================================
       IMAGE AREA
       ======================================================= */
    .right {
      grid-area: image;
      position: relative;
      background-color: var(--navy);
      background-image: url("https://images.unsplash.com/photo-1540541338287-41700207dee6?auto=format&fit=crop&w=1600&q=85");
      background-size: cover;
      background-position: center;
      overflow: hidden;
    }

    .right::before {
      content: "";
      position: absolute;
      inset: 0;
      background:
        linear-gradient(180deg,
          rgba(11, 30, 61, .25) 0%,
          rgba(11, 30, 61, .15) 40%,
          rgba(11, 30, 61, .75) 100%);
    }

    .right::after {
      content: "";
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse at center, transparent 40%, rgba(11, 30, 61, .35) 100%);
      pointer-events: none;
    }

    .right-inner {
      position: relative;
      z-index: 1;
      height: 100%;
      min-height: 100vh;
      padding: clamp(36px, 5vw, 64px);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      color: var(--ivory);
    }

    .right-top {
      display: flex;
      justify-content: flex-end;
    }

    .location {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-size: 10.5px;
      letter-spacing: .3em;
      text-transform: uppercase;
      color: rgba(253, 251, 246, .95);
      border: 1px solid rgba(253, 251, 246, .35);
      padding: 10px 18px;
      border-radius: 100px;
      backdrop-filter: blur(6px);
      -webkit-backdrop-filter: blur(6px);
      white-space: nowrap;
    }

    .location::before {
      content: "";
      display: inline-block;
      width: 5px;
      height: 5px;
      border-radius: 50%;
      background: var(--gold-soft);
      flex-shrink: 0;
    }

    .quote-block { max-width: 520px; }

    .quote-mark {
      font-family: 'Cormorant Garamond', serif;
      font-size: 90px;
      line-height: .3;
      color: var(--gold-soft);
      display: block;
      margin-bottom: 20px;
      height: 30px;
    }

    .quote {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(26px, 2.6vw, 36px);
      font-weight: 300;
      line-height: 1.28;
      letter-spacing: -.01em;
      color: var(--ivory);
      margin-bottom: 32px;
    }

    .quote em { font-style: italic; color: var(--gold-soft); }

    .author {
      display: flex;
      align-items: center;
      gap: 16px;
      padding-top: 24px;
      border-top: 1px solid rgba(253, 251, 246, .15);
    }

    .author-line { width: 32px; height: 1px; background: var(--gold-soft); flex-shrink: 0; }

    .author-meta { display: flex; flex-direction: column; gap: 2px; }

    .author-name {
      font-size: 12px;
      font-weight: 500;
      letter-spacing: .14em;
      text-transform: uppercase;
      color: var(--ivory);
    }

    .author-role { font-size: 11px; color: rgba(253, 251, 246, .55); letter-spacing: .04em; }

    .right-foot {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      flex-wrap: wrap;
      font-size: 10px;
      letter-spacing: .28em;
      text-transform: uppercase;
      color: rgba(253, 251, 246, .55);
    }

    .right-foot .index { display: flex; align-items: center; gap: 12px; }

    .right-foot .dot {
      width: 4px; height: 4px; border-radius: 50%;
      background: var(--gold-soft);
      flex-shrink: 0;
    }

    /* =======================================================
       RESPONSIVE — MOBILE STACK
       ======================================================= */
    @media (max-width: 991.98px) {
      .shell {
        grid-template-columns: 1fr;
        grid-template-rows: auto auto 1fr auto;
        grid-template-areas:
          "brand"
          "image"
          "form"
          "foot";
        min-height: 100vh;
      }

      .brand-area {
        padding: 24px 20px 0;
      }

      .right {
        margin: 24px 20px 0;
        min-height: 380px;
        border-radius: 16px;
        box-shadow: 0 16px 40px rgba(11, 30, 61, .12);
      }

      .right-inner {
        min-height: 380px;
        padding: 28px 24px;
      }

      .quote { font-size: 24px; margin-bottom: 20px; }
      .quote-mark { font-size: 64px; margin-bottom: 12px; height: 22px; }

      .form-area {
        padding: 28px 20px 0;
        display: block;
      }

      .form-wrap {
        margin: 0 auto;
        padding: 0;
      }

      .foot {
        padding: 28px 20px 40px;
      }
    }

    @media (max-width: 480px) {
      .brand-area { padding: 20px 16px 0; }
      .brand-name { font-size: 20px; }
      .brand-mark { width: 36px; height: 36px; font-size: 14px; }

      .right {
        margin: 20px 16px 0;
        min-height: 340px;
      }
      .right-inner {
        min-height: 340px;
        padding: 24px 20px;
      }

      .location { font-size: 9px; letter-spacing: .18em; padding: 8px 12px; gap: 6px; }
      .quote { font-size: 20px; line-height: 1.32; margin-bottom: 16px; }
      .quote-mark { font-size: 56px; margin-bottom: 10px; height: 20px; }
      .author-name { font-size: 10.5px; }
      .author-role { font-size: 9.5px; }
      .right-foot { font-size: 8.5px; letter-spacing: .18em; gap: 10px; }

      .form-area { padding: 24px 16px 0; }
      h1 { font-size: 40px; }
      .subtitle { margin-bottom: 28px; font-size: 14px; }
      .options { gap: 12px; margin-bottom: 24px; }

      .foot { padding: 24px 16px 32px; flex-direction: column; align-items: flex-start; gap: 10px; }
    }

    @media (prefers-reduced-motion: reduce) {
      * { transition-duration: .01ms !important; animation: none !important; }
    }
  
    /* CJ Travels Brand Logo */
    .brand-logo {
      height: 40px;
      width: auto;
      max-height: 46px;
      object-fit: contain;
      display: inline-block;
      vertical-align: middle;
      transition: transform .25s ease;
    }
    .brand-logo:hover {
      transform: scale(1.02);
    }
    .footer-brand .brand-logo,
    .footer-logo {
      height: 42px;
    }

  </style>
</head>

<body>
  <a href="#loginForm" class="skip-link">Skip to sign in</a>

  <div class="shell">

    <!-- =========================================================
         BRAND AREA
         ========================================================= -->
    <header class="brand-area">
      <a class="brand" href="/" aria-label="CJ Travels home">
          <img src="/images/logo-transparent.png" alt="CJ Travels" class="brand-logo" />
        </a>
    </header>

    <!-- =========================================================
         FORM AREA
         ========================================================= -->
    <main class="form-area" id="main">
      <div class="form-wrap">

        <div class="eyebrow">Sign in</div>

        <h1>Welcome <em>back</em>.</h1>
        <p class="subtitle">
          Sign in to manage your bookings, revisit saved searches, and continue a travel financing enquiry.
        </p>

        <form id="loginForm" novalidate autocomplete="on">

          <div class="field">
            <label for="loginEmail">Email address</label>
            <input type="email" id="loginEmail" name="email"
                   placeholder="you@example.com" autocomplete="email"
                   inputmode="email" required aria-describedby="emailError" />
            <div class="field-error" id="emailError">Please enter a valid email address.</div>
          </div>

          <div class="field">
            <label for="loginPassword">Password</label>
            <input type="password" id="loginPassword" name="password"
                   placeholder="Enter your password" autocomplete="current-password"
                   required aria-describedby="passwordError" />
            <button type="button" class="pw-toggle" id="togglePassword"
                    aria-label="Show password" aria-pressed="false"
                    aria-controls="loginPassword">
              <i class="bi bi-eye" id="toggleIcon"></i>
            </button>
            <div class="field-error" id="passwordError">Please enter your password.</div>
          </div>

          <div class="options">
            <label class="check">
              <input type="checkbox" id="rememberMe" name="remember" />
              <span>Remember me</span>
            </label>
            <a href="forgot-password.html" class="link-muted">Forgot password?</a>
          </div>

          <button type="submit" class="btn-submit" id="loginBtn">
            <span id="loginBtnLabel">Sign in</span>
            <i class="bi bi-arrow-right arrow" id="loginBtnIcon"></i>
          </button>

          <div class="status" id="loginStatus" role="status" aria-live="polite"></div>

          <div class="divider">Or</div>

          <button type="button" class="btn-google" id="googleBtn" aria-describedby="googleNote">
            <svg viewBox="0 0 48 48" aria-hidden="true" focusable="false">
              <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
              <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
              <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
              <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
            </svg>
            <span>Continue with Google</span>
          </button>

          <div class="demo-note" id="googleNote">
            Demonstration only — Google sign-in is not connected yet and will not authenticate you.
          </div>

          <p class="prompt">
            No account yet? <a href="/register">Create one</a>
          </p>

        </form>

      </div>
    </main>

    <!-- =========================================================
         IMAGE AREA (editorial card)
         ========================================================= -->
    <aside class="right" aria-label="Travel photography">

      <div class="right-inner">

        <div class="right-top">
          <span class="location">Est. MMXXIV · Lagos &amp; London</span>
        </div>

        <div class="quote-block">
          <span class="quote-mark" aria-hidden="true">&ldquo;</span>
          <p class="quote">
            The best journeys <em>aren't</em> found in a search bar. They're curated — by people who
            have been there, and know how to get you there well.
          </p>
          <div class="author">
            <span class="author-line"></span>
            <div class="author-meta">
              <span class="author-name">Adaeze Okonkwo</span>
              <span class="author-role">Member since 2024 · Lagos, Nigeria</span>
            </div>
          </div>
        </div>

        <div class="right-foot">
          <div class="index">
            <span>01</span>
            <span class="dot"></span>
            <span>Maldives</span>
          </div>
          <span>CJ Travels · Concierge</span>
        </div>

      </div>

    </aside>

    <!-- =========================================================
         FOOTER AREA
         ========================================================= -->
    <footer class="foot">
      <span>&copy; <span data-year>2025</span> CJ Travels</span>
      <ul class="foot-links">
        <li><a href="privacy.html">Privacy</a></li>
        <li><a href="terms.html">Terms</a></li>
        <li><a href="/contact">Support</a></li>
      </ul>
    </footer>

  </div>

  <script>
    (function () {
      'use strict';

      document.querySelectorAll('[data-year]').forEach(function (node) {
        node.textContent = new Date().getFullYear();
      });

      var form = document.getElementById('loginForm');
      var emailInput = document.getElementById('loginEmail');
      var passwordInput = document.getElementById('loginPassword');
      var emailError = document.getElementById('emailError');
      var passwordError = document.getElementById('passwordError');
      var toggleBtn = document.getElementById('togglePassword');
      var toggleIcon = document.getElementById('toggleIcon');
      var statusBox = document.getElementById('loginStatus');
      var submitBtn = document.getElementById('loginBtn');
      var submitLabel = document.getElementById('loginBtnLabel');
      var submitIcon = document.getElementById('loginBtnIcon');
      var googleBtn = document.getElementById('googleBtn');

      toggleBtn.addEventListener('click', function () {
        var isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';
        toggleIcon.className = isPassword ? 'bi bi-eye-slash' : 'bi bi-eye';
        toggleBtn.setAttribute('aria-label', isPassword ? 'Hide password' : 'Show password');
        toggleBtn.setAttribute('aria-pressed', isPassword ? 'true' : 'false');
        passwordInput.focus();
      });

      function isValidEmail(value) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(value);
      }

      function setError(input, node) {
        input.classList.add('is-invalid');
        node.classList.add('show');
      }
      function clearError(input, node) {
        input.classList.remove('is-invalid');
        node.classList.remove('show');
      }
      function showStatus(type, html) {
        statusBox.className = 'status show ' + type;
        statusBox.innerHTML = html;
      }
      function clearStatus() {
        statusBox.className = 'status';
        statusBox.innerHTML = '';
      }

      emailInput.addEventListener('input', function () { clearError(emailInput, emailError); clearStatus(); });
      passwordInput.addEventListener('input', function () { clearError(passwordInput, passwordError); clearStatus(); });

      form.addEventListener('submit', function (event) {
        event.preventDefault();
        clearStatus();

        var email = emailInput.value.trim();
        var password = passwordInput.value;
        var firstInvalid = null;
        var count = 0;

        if (!email || !isValidEmail(email)) {
          setError(emailInput, emailError);
          firstInvalid = firstInvalid || emailInput;
          count++;
        } else {
          clearError(emailInput, emailError);
        }

        if (!password || password.length < 8) {
          setError(passwordInput, passwordError);
          firstInvalid = firstInvalid || passwordInput;
          count++;
        } else {
          clearError(passwordInput, passwordError);
        }

        if (count > 0) {
          showStatus('error',
            'Please check the highlighted field' + (count > 1 ? 's' : '') + ' below.');
          if (firstInvalid) { firstInvalid.focus(); }
          return;
        }

        submitBtn.disabled = true;
        submitLabel.textContent = 'Checking';
        submitIcon.className = 'bi bi-arrow-repeat arrow';

        window.setTimeout(function () {
          submitBtn.disabled = false;
          submitLabel.textContent = 'Sign in';
          submitIcon.className = 'bi bi-arrow-right arrow';

          showStatus('info',
            '<strong>Demonstration only — you are not signed in.</strong>' +
            'Your details passed validation, but no account was checked and no session was created. ' +
            'CJ Travels has not stored your password or sent your credentials anywhere. ' +
            '<a href="/">Continue browsing</a> or <a href="/register">create an account</a>.');
        }, 550);
      });

      googleBtn.addEventListener('click', function () {
        showStatus('info',
          '<strong>Google sign-in is not available yet.</strong>' +
          'This button is a visual placeholder. No Google account was contacted and no sign-in occurred.');
      });

    })();
  </script>
</body>
</html>