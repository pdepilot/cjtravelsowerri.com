<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="/images/logo-mark.png" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Flights — CJ Travels</title>
  <meta name="description" content="Search and compare flights with CJ Travels. Filter by airline, price, stops and departure time, then review your itinerary before booking." />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
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
      --navy-deep: #060f21;
      --gold: #a8842c;
      --gold-soft: #c9a55b;
      --gold-pale: #e8d9b3;
      --ink: #1a1a1a;
      --ink-soft: #4a4741;
      --muted: #8a8378;
      --hairline: #d9d1c0;
      --hairline-soft: #e8e1d1;
      --green: #2e7d5b;
      --red: #a3452e;
    }

    /* =======================================================
       BASE
       ======================================================= */
    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body {
      font-family: 'DM Sans', sans-serif;
      font-weight: 400;
      color: var(--ink);
      background: var(--cream);
      line-height: 1.65;
      -webkit-font-smoothing: antialiased;
      overflow-x: hidden;
    }
    h1, h2, h3, h4, h5, h6 {
      font-family: 'Cormorant Garamond', serif;
      font-weight: 400;
      letter-spacing: -.01em;
      color: var(--navy);
      margin: 0;
      line-height: 1.15;
    }
    a { color: inherit; text-decoration: none; }
    img { max-width: 100%; display: block; }
    input, button, select { font: inherit; }

    a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible {
      outline: 1.5px solid var(--navy);
      outline-offset: 4px;
    }

    .skip-link {
      position: absolute; left: 1rem; top: -60px; z-index: 100;
      background: var(--navy); color: var(--ivory);
      padding: .7rem 1.2rem; font-size: 13px;
      letter-spacing: .1em; text-transform: uppercase;
      transition: top .25s ease;
    }
    .skip-link:focus { top: 0; }

    /* =======================================================
       UTILITIES
       ======================================================= */
    .container { max-width: 1200px; padding-left: 24px; padding-right: 24px; margin: 0 auto; }

    .eyebrow {
      display: inline-flex; align-items: center; gap: 14px;
      font-size: 10.5px; font-weight: 500;
      letter-spacing: .32em; text-transform: uppercase;
      color: var(--muted); margin-bottom: 20px;
    }
    .eyebrow::before, .eyebrow::after {
      content: ""; width: 28px; height: 1px; background: var(--gold);
    }
    .eyebrow.no-after::after { display: none; }

    .section { padding: clamp(56px, 7vw, 96px) 0; }
    .bg-cream { background: var(--cream); }
    .bg-cream-soft { background: var(--cream-soft); }
    .bg-ivory { background: var(--ivory); }

    .reveal { opacity: 1; transform: none; }
    .js .reveal {
      opacity: 0; transform: translateY(24px);
      transition: opacity .8s cubic-bezier(.4,0,.2,1), transform .8s cubic-bezier(.4,0,.2,1);
    }
    .js .reveal.is-visible { opacity: 1; transform: none; }

    /* =======================================================
       BUTTONS
       ======================================================= */
    .btn {
      display: inline-flex; align-items: center; justify-content: center; gap: 10px;
      padding: 16px 28px;
      font-family: 'DM Sans', sans-serif;
      font-size: 11px; font-weight: 600;
      letter-spacing: .28em; text-transform: uppercase;
      cursor: pointer; border: 0; border-radius: 0;
      transition: all .3s ease;
    }
    .btn-lg { padding: 18px 32px; }
    .btn-sm { padding: 10px 18px; font-size: 10px; }
    .btn-block { width: 100%; }

    .btn-navy { background: var(--navy); color: var(--ivory); }
    .btn-navy:hover, .btn-navy:focus { background: var(--navy-soft); color: var(--ivory); }
    .btn-navy i { font-size: 12px; transition: transform .3s ease; }
    .btn-navy:hover i { transform: translateX(3px); }

    .btn-gold { background: var(--gold); color: var(--navy-deep); }
    .btn-gold:hover, .btn-gold:focus { background: var(--gold-soft); color: var(--navy-deep); }

    .btn-ghost { background: transparent; color: var(--navy); border: 1px solid var(--hairline); }
    .btn-ghost:hover, .btn-ghost:focus { background: var(--cream-soft); border-color: var(--navy); color: var(--navy); }

    .btn-outline-navy { background: transparent; border: 1px solid var(--navy); color: var(--navy); }
    .btn-outline-navy:hover, .btn-outline-navy:focus { background: var(--navy); color: var(--ivory); }

    /* =======================================================
       TOPBAR
       ======================================================= */
    .topbar {
      background: var(--navy); color: rgba(253,251,246,.7);
      font-size: 12px; padding: 14px 0;
      border-bottom: 1px solid rgba(255,255,255,.06);
    }
    .topbar-inner { display: flex; align-items: center; justify-content: space-between; gap: 24px; flex-wrap: wrap; }
    .topbar-left { display: flex; align-items: center; gap: 28px; }
    .topbar a {
      color: rgba(253,251,246,.7); display: inline-flex; align-items: center; gap: 8px;
      letter-spacing: .04em; transition: color .2s ease;
    }
    .topbar a:hover { color: var(--gold-soft); }
    .topbar i { color: var(--gold-soft); font-size: 12px; }
    .topbar-right { display: flex; align-items: center; gap: 20px; }
    .topbar-badge {
      display: inline-flex; align-items: center; gap: 6px;
      padding: 4px 12px;
      border: 1px solid rgba(201,165,91,.4); border-radius: 100px;
      font-size: 10px; letter-spacing: .18em; text-transform: uppercase;
      color: var(--gold-soft);
    }
    .topbar-badge::before {
      content: ""; width: 5px; height: 5px; border-radius: 50%;
      background: var(--gold-soft);
    }

    /* =======================================================
       NAVBAR
       ======================================================= */
    .site-header {
      position: sticky; top: 0; z-index: 1030;
      background: var(--cream);
      border-bottom: 1px solid var(--hairline-soft);
      transition: box-shadow .3s ease, background-color .3s ease;
    }
    .site-header.scrolled {
      background: rgba(245,240,230,.97);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      box-shadow: 0 1px 0 var(--hairline);
    }
    .nav-inner { display: flex; align-items: center; justify-content: space-between; gap: 32px; padding: 22px 0; }

    .brand { display: inline-flex; align-items: center; gap: 12px; flex-shrink: 0; }
    .brand-mark {
      width: 42px; height: 42px; border-radius: 50%;
      border: 1px solid var(--navy);
      display: inline-flex; align-items: center; justify-content: center;
      color: var(--navy); font-size: 15px; flex-shrink: 0;
      transition: all .3s ease;
    }
    .brand:hover .brand-mark { background: var(--navy); color: var(--ivory); }
    .brand-name {
      font-family: 'Cormorant Garamond', serif;
      font-size: 24px; font-weight: 500;
      letter-spacing: .01em; color: var(--navy); line-height: 1;
    }
    .brand-name em { font-style: italic; color: var(--gold); font-weight: 400; }

    .nav-center { display: flex; align-items: center; gap: 4px; flex: 1; justify-content: center; }
    .nav-center a {
      padding: 10px 16px;
      font-size: 12px; font-weight: 500;
      letter-spacing: .12em; text-transform: uppercase;
      color: var(--ink-soft);
      border-bottom: 1px solid transparent;
      transition: all .25s ease; white-space: nowrap;
    }
    .nav-center a:hover { color: var(--navy); }
    .nav-center a.active { color: var(--navy); border-bottom-color: var(--gold); }

    .nav-actions { display: flex; align-items: center; gap: 20px; flex-shrink: 0; }
    .nav-actions a.text-link {
      font-size: 12px; font-weight: 500;
      letter-spacing: .12em; text-transform: uppercase;
      color: var(--ink-soft); transition: color .2s ease;
    }
    .nav-actions a.text-link:hover { color: var(--navy); }
    .btn-nav-cta {
      display: inline-flex; align-items: center; gap: 10px;
      padding: 12px 22px;
      font-size: 11px; font-weight: 600;
      letter-spacing: .22em; text-transform: uppercase;
      background: var(--navy); color: var(--ivory);
      border: 0; cursor: pointer; transition: background-color .25s ease;
    }
    .btn-nav-cta:hover { background: var(--navy-soft); color: var(--ivory); }

    .navbar-toggler {
      display: none; width: 44px; height: 44px;
      border: 1px solid var(--hairline); background: transparent;
      color: var(--navy); align-items: center; justify-content: center;
      cursor: pointer;
    }
    @media (max-width: 991.98px) {
      .nav-center, .nav-actions { display: none; }
      .navbar-toggler { display: inline-flex; }
    }

    /* =======================================================
       MOBILE DRAWER
       ======================================================= */
    .mobile-nav-overlay {
      position: fixed; inset: 0;
      background: rgba(6,15,33,.55); backdrop-filter: blur(3px);
      z-index: 1049; opacity: 0; pointer-events: none;
      transition: opacity .3s ease;
    }
    .mobile-nav-overlay.show { opacity: 1; pointer-events: auto; }
    .mobile-nav {
      position: fixed; top: 0; right: 0; bottom: 0;
      width: min(360px, 88vw); background: var(--cream);
      z-index: 1050; transform: translateX(100%);
      transition: transform .4s cubic-bezier(.4,0,.2,1);
      display: flex; flex-direction: column; overflow-y: auto;
    }
    .mobile-nav.open { transform: translateX(0); }
    .mobile-nav-head {
      display: flex; align-items: center; justify-content: space-between;
      padding: 22px 24px; border-bottom: 1px solid var(--hairline-soft);
    }
    .mobile-nav-close {
      width: 40px; height: 40px; border: 1px solid var(--hairline);
      background: transparent; color: var(--navy);
      display: inline-flex; align-items: center; justify-content: center;
      cursor: pointer;
    }
    .mobile-nav-body { padding: 24px; flex: 1; }
    .mobile-nav .nav-list { list-style: none; padding: 0; margin: 0; display: grid; }
    .mobile-nav .nav-link {
      display: flex; align-items: center; justify-content: space-between;
      padding: 18px 0;
      font-family: 'Cormorant Garamond', serif;
      font-size: 24px; font-weight: 400; color: var(--navy);
      border-bottom: 1px solid var(--hairline-soft);
      transition: color .2s ease;
    }
    .mobile-nav .nav-link:hover, .mobile-nav .nav-link.active { color: var(--gold); }
    .mobile-nav .nav-link i { font-size: 14px; color: var(--hairline); }
    .mobile-nav-cta {
      padding: 24px; border-top: 1px solid var(--hairline-soft);
      display: grid; gap: 12px;
    }
    .mobile-nav-cta .btn { justify-content: center; }
    .mobile-nav-footer {
      padding: 20px 24px 28px;
      border-top: 1px solid var(--hairline-soft); background: var(--cream-soft);
    }
    .mobile-nav-footer p {
      font-size: 11px; letter-spacing: .22em; text-transform: uppercase;
      color: var(--muted); margin-bottom: 12px;
    }
    .mobile-nav-footer a {
      display: flex; align-items: center; gap: 10px;
      font-size: 13px; color: var(--ink-soft); padding: 6px 0;
    }
    .mobile-nav-footer a i { color: var(--gold); }

    
    /* =======================================================
       CJ TRAVELS PREMIER FLIGHTS HERO & SEARCH TERMINAL
       ======================================================= */
    .flights-hero-sky {
      position: relative;
      background: radial-gradient(circle at 50% -10%, #0d274c 0%, #08152c 45%, #020712 100%);
      color: #fdfbf6;
      padding: clamp(64px, 8vw, 115px) 0 clamp(90px, 11vw, 140px);
      overflow: hidden;
      isolation: isolate;
    }

    /* Ambient Aviation Sky Lighting & Jet Trails */
    .flights-hero-sky::before {
      content: "";
      position: absolute;
      top: -150px;
      left: 50%;
      transform: translateX(-50%);
      width: clamp(600px, 80vw, 1200px);
      height: 550px;
      background: radial-gradient(ellipse, rgba(201, 165, 91, 0.22) 0%, rgba(30, 80, 150, 0.28) 45%, transparent 75%);
      filter: blur(80px);
      border-radius: 50%;
      pointer-events: none;
      z-index: 0;
      animation: skyPulse 10s ease-in-out infinite alternate;
    }

    .flights-hero-sky::after {
      content: "";
      position: absolute;
      inset: 0;
      background-image: 
        radial-gradient(1px 1px at 40px 60px, rgba(201, 165, 91, 0.6), transparent),
        radial-gradient(1.5px 1.5px at 180px 140px, rgba(253, 251, 246, 0.8), transparent),
        radial-gradient(1.2px 1.2px at 360px 220px, rgba(201, 165, 91, 0.5), transparent),
        radial-gradient(1.5px 1.5px at 580px 90px, rgba(253, 251, 246, 0.75), transparent),
        radial-gradient(1px 1px at 780px 240px, rgba(201, 165, 91, 0.5), transparent),
        radial-gradient(1.5px 1.5px at 980px 130px, rgba(253, 251, 246, 0.8), transparent);
      background-size: 1100px 360px;
      opacity: 0.6;
      pointer-events: none;
      z-index: 0;
    }

    @keyframes skyPulse {
      0% { transform: translateX(-50%) scale(0.95); opacity: 0.7; }
      100% { transform: translateX(-50%) scale(1.15); opacity: 1; }
    }

    /* Aviation Backdrop Image */
    .flights-sky-backdrop {
      position: absolute;
      inset: 0;
      z-index: 0;
      overflow: hidden;
      pointer-events: none;
    }
    .flights-sky-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      filter: brightness(0.42) contrast(1.1);
      transform: scale(1.04);
      transition: transform 12s ease;
    }
    .flights-sky-scrim {
      position: absolute;
      inset: 0;
      background: 
        linear-gradient(180deg, 
          rgba(2, 7, 18, 0.82) 0%, 
          rgba(8, 21, 44, 0.65) 40%, 
          rgba(2, 7, 18, 0.94) 100%),
        radial-gradient(circle at 50% 30%, 
          rgba(13, 39, 76, 0.3) 0%, 
          rgba(2, 7, 18, 0.88) 100%);
    }

    /* Live Air Desk Radar Badge */
    .air-desk-badge {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 8px 20px;
      background: rgba(253, 251, 246, 0.08);
      border: 1px solid rgba(201, 165, 91, 0.38);
      border-radius: 100px;
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      font-family: 'DM Sans', sans-serif;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: #e8d9b3;
      margin-bottom: 24px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.35);
    }
    .air-desk-badge .beacon {
      width: 8px;
      height: 8px;
      background: #2e7d5b;
      border-radius: 50%;
      box-shadow: 0 0 0 3px rgba(46, 125, 91, 0.35);
      animation: beaconPulse 2s infinite;
    }
    @keyframes beaconPulse {
      0% { box-shadow: 0 0 0 0 rgba(46, 125, 91, 0.7); }
      70% { box-shadow: 0 0 0 8px rgba(46, 125, 91, 0); }
      100% { box-shadow: 0 0 0 0 rgba(46, 125, 91, 0); }
    }

    /* Grand Monumental Title */
    .flights-sky-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(2.6rem, 7vw, 5.8rem);
      line-height: .98;
      letter-spacing: -.03em;
      font-weight: 300;
      color: #fdfbf6;
      margin-bottom: 22px;
      text-wrap: balance;
    }
    .flights-sky-title em {
      font-style: italic;
      font-weight: 400;
      background: linear-gradient(135deg, #ffffff 0%, #e8d9b3 50%, #c9a55b 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .flights-sky-sub {
      font-size: clamp(15px, 1.4vw, 17.5px);
      color: rgba(253, 251, 246, 0.78);
      max-width: 68ch;
      margin: 0 auto 32px;
      line-height: 1.7;
      font-weight: 300;
    }

    /* Trending Route Chips */
    .flight-chips-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 12px;
      margin-top: 10px;
    }
    .flight-chips-label {
      font-family: 'DM Sans', sans-serif;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: .2em;
      text-transform: uppercase;
      color: #c9a55b;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }
    .flight-chips-scroll {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      flex-wrap: wrap;
      max-width: 900px;
    }
    .flight-chip-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 16px;
      background: rgba(253, 251, 246, 0.07);
      border: 1px solid rgba(253, 251, 246, 0.16);
      border-radius: 100px;
      color: #fdfbf6;
      font-family: 'DM Sans', sans-serif;
      font-size: 12px;
      cursor: pointer;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      transition: all .25s cubic-bezier(0.2, 0.8, 0.2, 1);
    }
    .flight-chip-btn .chip-cities { font-weight: 500; }
    .flight-chip-btn .chip-price {
      background: rgba(201, 165, 91, 0.22);
      color: #e8d9b3;
      padding: 2px 8px;
      border-radius: 100px;
      font-size: 10.5px;
      font-weight: 600;
    }
    .flight-chip-btn:hover {
      background: rgba(201, 165, 91, 0.25);
      border-color: #c9a55b;
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 4px 16px rgba(201, 165, 91, 0.25);
    }
    .flight-chip-btn:hover .chip-price {
      background: #c9a55b;
      color: var(--navy-deep);
    }

    /* Floating Spotlight Cards on Sides */
    .flight-floating-spotlight {
      position: absolute;
      top: 36%;
      z-index: 3;
      background: rgba(6, 17, 38, 0.85);
      border: 1px solid rgba(201, 165, 91, 0.35);
      border-radius: 16px;
      padding: 16px 20px;
      width: 240px;
      backdrop-filter: blur(18px);
      -webkit-backdrop-filter: blur(18px);
      box-shadow: 0 16px 40px rgba(0, 0, 0, 0.45);
      cursor: pointer;
      transition: all .3s cubic-bezier(0.2, 0.8, 0.2, 1);
      display: none;
    }
    @media (min-width: 1280px) {
      .flight-floating-spotlight { display: block; }
    }
    .flight-floating-spotlight.left { left: 32px; }
    .flight-floating-spotlight.right { right: 32px; }
    .flight-floating-spotlight:hover {
      transform: translateY(-4px) scale(1.02);
      border-color: #c9a55b;
      background: rgba(11, 30, 61, 0.95);
      box-shadow: 0 20px 50px rgba(201, 165, 91, 0.25);
    }
    .spotlight-badge {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      font-family: 'DM Sans', sans-serif;
      font-size: 9.5px;
      font-weight: 700;
      letter-spacing: .15em;
      text-transform: uppercase;
      color: #fdfbf6;
      background: rgba(163, 69, 46, 0.35);
      border: 1px solid rgba(163, 69, 46, 0.6);
      padding: 3px 8px;
      border-radius: 100px;
      margin-bottom: 8px;
    }
    .spotlight-badge.gold {
      background: rgba(201, 165, 91, 0.25);
      border-color: rgba(201, 165, 91, 0.5);
      color: #e8d9b3;
    }
    .spotlight-route {
      display: flex;
      align-items: center;
      gap: 8px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.4rem;
      font-weight: 600;
      color: #fdfbf6;
      line-height: 1;
      margin-bottom: 4px;
    }
    .spotlight-route i { color: #c9a55b; font-size: 14px; }
    .spotlight-airline {
      display: block;
      font-family: 'DM Sans', sans-serif;
      font-size: 11px;
      color: rgba(253, 251, 246, 0.7);
      margin-bottom: 12px;
    }
    .spotlight-bottom {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-top: 1px solid rgba(253, 251, 246, 0.1);
      padding-top: 8px;
    }
    .spotlight-price {
      font-family: 'DM Sans', sans-serif;
      font-size: 12px;
      font-weight: 700;
      color: #c9a55b;
    }
    .spotlight-action {
      font-size: 10px;
      color: #e8d9b3;
      text-transform: uppercase;
      letter-spacing: .1em;
      display: inline-flex;
      align-items: center;
      gap: 2px;
    }

    /* Elevated Glassmorphism Flight Terminal Card */
    .flight-terminal-card {
      background: #fdfbf6 !important;
      border: 1px solid rgba(201, 165, 91, 0.35) !important;
      border-radius: 2px;
      box-shadow: 0 24px 60px rgba(6, 17, 38, 0.28) !important;
      padding: clamp(30px, 4vw, 46px) !important;
      position: relative;
    }
    .flight-terminal-card::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 3px;
      background: linear-gradient(90deg, #0b1e3d 0%, #c9a55b 50%, #0b1e3d 100%);
    }

    .terminal-card-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid var(--hairline-soft);
      padding-bottom: 16px;
      margin-bottom: 28px;
      flex-wrap: wrap;
      gap: 16px;
    }
    .terminal-card-header .trip-switch {
      border-bottom: none;
      margin-bottom: 0;
      padding: 0;
    }
    .trip-btn {
      border: 1px solid transparent;
      background: transparent;
      padding: 10px 20px;
      font-family: 'DM Sans', sans-serif;
      font-size: 11.5px;
      font-weight: 500;
      letter-spacing: .15em;
      text-transform: uppercase;
      color: var(--ink-soft);
      border-radius: 100px;
      cursor: pointer;
      transition: all .2s ease;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }
    .trip-btn:hover {
      color: var(--navy);
      background: rgba(11, 30, 61, 0.05);
    }
    .trip-btn.active {
      color: var(--navy);
      background: rgba(201, 165, 91, 0.16);
      border-color: rgba(201, 165, 91, 0.4);
      font-weight: 600;
    }

    .terminal-guarantee-pill {
      font-family: 'DM Sans', sans-serif;
      font-size: 11px;
      color: var(--muted);
      letter-spacing: .04em;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }
    .terminal-guarantee-pill i { color: var(--green); font-size: 13px; }

    .search-form .form-label {
      font-family: 'DM Sans', sans-serif;
      font-size: 10.5px;
      font-weight: 600;
      letter-spacing: .2em;
      text-transform: uppercase;
      color: var(--navy);
      margin-bottom: 8px;
    }

    .search-form .form-control,
    .search-form .form-select {
      background: #ffffff !important;
      border: 1px solid var(--hairline);
      height: 54px;
      font-size: 14px;
      font-weight: 500;
      color: var(--navy);
      transition: all .25s ease;
    }
    .search-form .form-control:focus,
    .search-form .form-select:focus {
      border-color: var(--navy) !important;
      box-shadow: 0 0 0 3px rgba(11, 30, 61, 0.1) !important;
      background: #ffffff !important;
    }

    .search-card .swap-btn {
      position: absolute;
      right: -17px;
      top: 38px;
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: var(--navy);
      color: #c9a55b;
      border: 2px solid #fdfbf6;
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 4;
      cursor: pointer;
      transition: all .25s ease;
      box-shadow: 0 4px 10px rgba(11, 30, 61, 0.25);
    }
    @media (min-width: 992px) { .search-card .swap-btn { display: inline-flex; } }
    .search-card .swap-btn:hover {
      background: var(--gold);
      color: var(--navy);
      transform: rotate(180deg);
    }

    /* Primary Search CTA Button */
    .btn-flight-search-cta {
      width: 100%;
      height: 54px;
      background: linear-gradient(135deg, var(--navy) 0%, #1e3b68 100%);
      color: #fdfbf6;
      border: 1px solid var(--navy);
      border-radius: 2px;
      font-family: 'DM Sans', sans-serif;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: .22em;
      text-transform: uppercase;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      cursor: pointer;
      transition: all .3s cubic-bezier(0.2, 0.8, 0.2, 1);
      position: relative;
      overflow: hidden;
    }
    .btn-flight-search-cta:hover {
      background: linear-gradient(135deg, #061126 0%, var(--navy) 100%);
      box-shadow: 0 8px 24px rgba(11, 30, 61, 0.35);
      transform: translateY(-1px);
      color: #e8d9b3;
    }
    .btn-flight-search-cta i {
      transition: transform .25s ease;
    }
    .btn-flight-search-cta:hover i {
      transform: translateX(4px);
    }

    .search-guarantees {
      display: flex;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }
    .search-guarantees .search-note {
      font-family: 'DM Sans', sans-serif;
      font-size: 11.5px;
      font-weight: 500;
      color: var(--ink-soft);
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }
    .search-guarantees .search-note i {
      color: var(--green);
      font-size: 13px;
    }

    /* Partner Airlines Strip */
    .airline-partner-strip {
      margin-top: 28px;
      padding-top: 22px;
      border-top: 1px solid var(--hairline-soft);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      flex-wrap: wrap;
    }
    .partner-label {
      font-family: 'DM Sans', sans-serif;
      font-size: 10px;
      font-weight: 600;
      letter-spacing: .2em;
      text-transform: uppercase;
      color: var(--muted);
      flex-shrink: 0;
    }
    .partner-tags {
      display: flex;
      align-items: center;
      gap: 12px;
      flex-wrap: wrap;
    }
    .carrier-tag {
      font-family: 'DM Sans', sans-serif;
      font-size: 11.5px;
      font-weight: 500;
      color: var(--navy);
      background: rgba(11, 30, 61, 0.04);
      padding: 4px 12px;
      border-radius: 100px;
      border: 1px solid var(--hairline-soft);
      display: inline-flex;
      align-items: center;
      gap: 6px;
      white-space: nowrap;
    }
    .carrier-tag i {
      color: var(--gold);
      font-size: 11px;
    }

    /* =======================================================
       RESULTS
       ======================================================= */
    .results-head {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      gap: 24px;
      flex-wrap: wrap;
      margin-bottom: 32px;
    }
    .results-head h2 {
      font-size: clamp(1.8rem, 3vw, 2.6rem);
      margin-bottom: 6px;
    }
    .results-sub {
      font-size: 11px;
      letter-spacing: .18em;
      text-transform: uppercase;
      color: var(--muted);
      margin: 0;
    }

    .demo-banner {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      background: var(--ivory);
      border: 1px solid var(--hairline);
      padding: 16px 20px;
      font-size: 12px;
      color: var(--ink-soft);
      margin-bottom: 32px;
      line-height: 1.6;
    }
    .demo-banner i { color: var(--gold); margin-top: 2px; flex-shrink: 0; }
    .demo-banner strong { color: var(--navy); }

    /* Filters */
    .filters {
      background: var(--ivory);
      border: 1px solid var(--hairline);
      padding: 28px;
    }
    @media (min-width: 992px) { .filters { position: sticky; top: 100px; } }

    .filters-head {
      display: flex; align-items: center; justify-content: space-between;
      gap: 8px; margin-bottom: 8px;
    }
    .filters-head h3 {
      font-size: 1.2rem; margin: 0;
      display: inline-flex; align-items: center; gap: 8px;
    }
    .filters-head h3 i { color: var(--gold); font-size: 14px; }
    .clear-filters {
      border: 0; background: transparent;
      color: var(--gold); font-size: 11px; font-weight: 500;
      letter-spacing: .1em; text-transform: uppercase;
      padding: 0; cursor: pointer;
    }
    .clear-filters:hover { color: var(--navy); }

    .filter-group {
      border-top: 1px solid var(--hairline-soft);
      padding-top: 20px; margin-top: 20px;
    }
    .filter-group h4 {
      font-size: 10px; font-weight: 600;
      letter-spacing: .22em; text-transform: uppercase;
      color: var(--muted); margin-bottom: 12px;
    }
    .filter-group .form-check { margin-bottom: 8px; }
    .filter-group .form-check-label { font-size: 13px; color: var(--ink-soft); cursor: pointer; }
    .filter-group .form-check-input {
      border: 1px solid var(--hairline); border-radius: 0;
      background-color: transparent; cursor: pointer;
    }
    .filter-group .form-check-input:checked { background-color: var(--navy); border-color: var(--navy); }
    .filter-group .form-check-input:focus { border-color: var(--navy); box-shadow: 0 0 0 2px rgba(11,30,61,.15); }

    .price-value { font-size: 14px; font-weight: 500; color: var(--navy); margin-bottom: 6px; }
    .price-range-hint { display: flex; justify-content: space-between; font-size: 11px; color: var(--muted); margin-top: 4px; }

    /* Toolbar */
    .results-toolbar {
      display: flex; align-items: center; justify-content: space-between;
      gap: 16px; flex-wrap: wrap;
      background: var(--ivory);
      border: 1px solid var(--hairline);
      padding: 16px 20px; margin-bottom: 24px;
    }
    .results-count { font-size: 12px; color: var(--muted); margin: 0; }
    .results-count strong { color: var(--navy); }
    .sort-wrap { display: flex; align-items: center; gap: 12px; }
    .sort-wrap label {
      font-size: 10px; font-weight: 600;
      letter-spacing: .18em; text-transform: uppercase;
      color: var(--muted); margin: 0; white-space: nowrap;
    }
    .sort-wrap .form-select {
      border: 1px solid var(--hairline);
      border-radius: 0;
      background-color: transparent;
      font-size: 12px; font-weight: 500;
      color: var(--navy);
      padding: 10px 32px 10px 12px;
      min-width: 200px;
      appearance: none;
      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%238a8378' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 10px center;
      background-size: 12px;
    }
    .sort-wrap .form-select:focus { outline: none; border-color: var(--navy); }

    /* Flight cards */
    .flight-card {
      background: var(--ivory);
      border: 1px solid var(--hairline);
      display: grid;
      grid-template-columns: minmax(160px, 200px) 1fr auto;
      gap: 24px 32px;
      align-items: center;
      padding: 24px;
      margin-bottom: 16px;
      transition: border-color .3s ease;
    }
    .flight-card:hover { border-color: var(--gold-pale); }

    .airline-block { display: flex; align-items: center; gap: 14px; min-width: 0; }
    .airline-logo {
      width: 48px; height: 48px;
      border-radius: 0;
      display: inline-flex; align-items: center; justify-content: center;
      color: var(--ivory);
      font-family: 'Cormorant Garamond', serif;
      font-weight: 500;
      font-size: 1.05rem;
      letter-spacing: .02em;
      flex: 0 0 auto;
    }
    .airline-meta { min-width: 0; }
    .airline-meta strong {
      display: block;
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.15rem;
      font-weight: 500;
      color: var(--navy);
      white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
    }
    .airline-meta small {
      display: block;
      font-size: 10px;
      letter-spacing: .18em;
      text-transform: uppercase;
      color: var(--muted);
      margin-top: 2px;
    }

    .fc-route { display: flex; align-items: center; gap: 20px; min-width: 0; }
    .fc-point { text-align: center; min-width: 72px; }
    .fc-point .t {
      display: block;
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.5rem;
      font-weight: 500;
      color: var(--navy);
      line-height: 1.1;
      letter-spacing: -.01em;
    }
    .fc-point .t sup {
      font-size: .55em; font-weight: 500;
      color: var(--gold); margin-left: 2px; top: -.6em;
    }
    .fc-point .c {
      display: block;
      font-size: 10px; font-weight: 500;
      letter-spacing: .22em; color: var(--muted);
      margin-top: 4px;
    }
    .fc-middle { flex: 1; text-align: center; min-width: 100px; }
    .fc-middle .dur {
      font-size: 10px; font-weight: 500;
      letter-spacing: .18em; text-transform: uppercase;
      color: var(--muted);
    }
    .fc-track {
      position: relative;
      height: 1px;
      background: var(--hairline);
      margin: 10px 0 8px;
    }
    .fc-track::before, .fc-track::after {
      content: "";
      position: absolute;
      top: 50%;
      width: 5px; height: 5px;
      border-radius: 50%;
      background: var(--gold);
      transform: translateY(-50%);
    }
    .fc-track::before { left: 0; }
    .fc-track::after { right: 0; }
    .fc-middle .stops {
      font-size: 10px; font-weight: 500;
      letter-spacing: .18em; text-transform: uppercase;
      color: var(--sky-700, var(--gold));
    }
    .fc-middle .stops.direct { color: var(--green); }

    .fc-price { text-align: right; }
    .fc-price .amount {
      display: block;
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.7rem;
      font-weight: 500;
      color: var(--navy);
      letter-spacing: -.01em;
      line-height: 1.1;
    }
    .fc-price .per {
      display: block;
      font-size: 10px;
      letter-spacing: .18em;
      text-transform: uppercase;
      color: var(--muted);
      margin: 4px 0 14px;
    }
    .fc-actions { display: flex; gap: 8px; justify-content: flex-end; flex-wrap: wrap; }

    .empty-state {
      background: var(--ivory);
      border: 1px dashed var(--hairline);
      padding: 64px 24px;
      text-align: center;
    }
    .empty-state i { font-size: 24px; color: var(--gold); margin-bottom: 16px; display: block; }
    .empty-state h3 { font-size: 1.4rem; margin-bottom: 8px; }
    .empty-state p { font-size: 13px; color: var(--muted); margin-bottom: 24px; }

    /* =======================================================
       REVIEW SCREEN
       ======================================================= */
    .review-card {
      background: var(--ivory);
      border: 1px solid var(--hairline);
      padding: clamp(28px, 4vw, 44px);
    }
    .review-card h2 { font-size: clamp(1.6rem, 2.6vw, 2.2rem); margin-bottom: 8px; }
    .review-card > p { color: var(--muted); font-size: 13px; margin-bottom: 24px; }

    .review-flight {
      background: var(--cream-soft);
      border: 1px solid var(--hairline);
      padding: 24px;
      margin: 24px 0;
    }
    .review-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 12px;
      margin-bottom: 24px;
    }
    .detail-item {
      background: var(--cream-soft);
      border: 1px solid var(--hairline);
      padding: 14px 16px;
    }
    .detail-item span {
      display: block;
      font-size: 9px; font-weight: 500;
      letter-spacing: .22em; text-transform: uppercase;
      color: var(--muted); margin-bottom: 4px;
    }
    .detail-item strong { font-size: 14px; color: var(--navy); font-weight: 500; }

    .price-summary {
      background: var(--ivory);
      border: 1px solid var(--hairline);
      padding: 28px;
    }
    @media (min-width: 992px) { .price-summary { position: sticky; top: 100px; } }
    .price-summary h3 { font-size: 1.3rem; margin-bottom: 20px; }

    .summary-row {
      display: flex; justify-content: space-between;
      gap: 16px; font-size: 13px; color: var(--muted);
      padding: 6px 0;
    }
    .summary-row span:last-child { color: var(--navy); font-weight: 500; }
    .summary-total {
      display: flex; justify-content: space-between; align-items: baseline;
      gap: 16px;
      border-top: 1px solid var(--hairline);
      margin-top: 12px; padding-top: 16px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.5rem; font-weight: 500;
      color: var(--navy);
    }
    .summary-total small {
      display: block;
      font-family: 'DM Sans', sans-serif;
      font-size: 10px; font-weight: 400;
      color: var(--muted); letter-spacing: .1em;
    }

    .review-status {
      display: none;
      margin-top: 20px;
      font-size: 13px;
      padding: 16px 20px;
      line-height: 1.6;
    }
    .review-status.show { display: block; }
    .review-status.info {
      background: rgba(201,165,91,.08);
      border-left: 2px solid var(--gold);
      color: var(--ink-soft);
    }

    /* =======================================================
       FOOTER
       ======================================================= */
    .site-footer {
      background: var(--navy-deep);
      color: rgba(253,251,246,.7);
      position: relative; overflow: hidden;
      padding: 96px 0 0;
    }
    .footer-watermark {
      position: absolute;
      left: 50%; bottom: -10rem;
      transform: translateX(-50%);
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(10rem, 24vw, 28rem);
      font-weight: 300; font-style: italic;
      letter-spacing: -.03em; line-height: .8;
      white-space: nowrap; pointer-events: none; user-select: none;
      z-index: 0;
      background: linear-gradient(180deg, rgba(201,165,91,.14) 0%, rgba(201,165,91,.05) 40%, rgba(201,165,91,0) 85%);
      -webkit-background-clip: text; background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .footer-watermark::before { content: "CJ Travels"; }
    .footer-inner { position: relative; z-index: 1; }
    .footer-grid {
      display: grid;
      grid-template-columns: 1.5fr 1fr 1fr 1.3fr;
      gap: clamp(32px, 5vw, 64px);
      padding-bottom: 72px;
      border-bottom: 1px solid rgba(253,251,246,.08);
    }
    .footer-brand {
      display: inline-flex; align-items: center; gap: 12px;
      margin-bottom: 24px;
    }
    .footer-brand .brand-mark {
      width: 40px; height: 40px;
      border-color: rgba(201,165,91,.4);
      color: var(--gold-soft);
    }
    .footer-brand .brand-name { color: var(--ivory); font-size: 22px; }
    .footer-brand .brand-name em { color: var(--gold-soft); }
    .footer-about {
      font-size: 13px; line-height: 1.75;
      color: rgba(253,251,246,.55);
      max-width: 36ch; margin-bottom: 28px;
    }
    .footer-social { display: flex; gap: 10px; }
    .footer-social a {
      width: 38px; height: 38px;
      border: 1px solid rgba(253,251,246,.14);
      color: rgba(253,251,246,.7);
      display: inline-flex; align-items: center; justify-content: center;
      font-size: 14px; transition: all .25s ease;
    }
    .footer-social a:hover { border-color: var(--gold-soft); color: var(--gold-soft); }
    .footer-heading {
      font-family: 'DM Sans', sans-serif;
      font-size: 10px; font-weight: 600;
      letter-spacing: .28em; text-transform: uppercase;
      color: var(--gold-soft);
      margin-bottom: 24px;
    }
    .footer-links { list-style: none; padding: 0; margin: 0; display: grid; gap: 12px; }
    .footer-links a {
      color: rgba(253,251,246,.6);
      font-size: 13px; transition: color .2s ease;
    }
    .footer-links a:hover { color: var(--gold-soft); }
    .footer-contact { display: grid; gap: 12px; margin-bottom: 24px; }
    .footer-contact a, .footer-contact span {
      display: inline-flex; align-items: center; gap: 10px;
      font-size: 13px; color: rgba(253,251,246,.6);
      transition: color .2s ease;
    }
    .footer-contact a:hover { color: var(--gold-soft); }
    .footer-contact i { color: var(--gold-soft); font-size: 12px; }
    .footer-newsletter { margin-top: 24px; }
    .footer-newsletter p {
      font-size: 12px; color: rgba(253,251,246,.5);
      margin-bottom: 12px; letter-spacing: .02em;
    }
    .footer-newsletter-form {
      display: flex; border-bottom: 1px solid rgba(253,251,246,.15);
      transition: border-color .25s ease;
    }
    .footer-newsletter-form:focus-within { border-bottom-color: var(--gold-soft); }
    .footer-newsletter-form input {
      flex: 1; background: transparent; border: 0;
      padding: 10px 0; color: var(--ivory);
      font-size: 13px; outline: none; min-width: 0;
    }
    .footer-newsletter-form input::placeholder { color: rgba(253,251,246,.35); }
    .footer-newsletter-form button {
      background: transparent; border: 0;
      color: var(--gold-soft); padding: 10px 12px;
      cursor: pointer; font-size: 14px;
    }
    .newsletter-status { display: none; font-size: 11px; margin-top: 8px; }
    .newsletter-status.show { display: block; }
    .newsletter-status.success { color: var(--gold-soft); }
    .newsletter-status.error { color: #f0a19a; }
    .footer-bottom {
      padding: 32px 0;
      display: flex; align-items: center; justify-content: space-between;
      gap: 20px; flex-wrap: wrap;
      font-size: 11px; color: rgba(253,251,246,.4);
      letter-spacing: .04em;
    }
    .footer-legal { list-style: none; display: flex; gap: 24px; margin: 0; padding: 0; flex-wrap: wrap; }
    .footer-legal a { color: rgba(253,251,246,.4); transition: color .2s ease; }
    .footer-legal a:hover { color: var(--gold-soft); }

    @media (max-width: 991.98px) {
      .footer-grid { grid-template-columns: 1fr 1fr; }
      .footer-grid > :first-child { grid-column: 1 / -1; }
    }
    @media (max-width: 575.98px) {
      .footer-grid { grid-template-columns: 1fr; }
      .footer-bottom { flex-direction: column; text-align: center; }
      .footer-legal { justify-content: center; }
    }

    /* =======================================================
       RESPONSIVE
       ======================================================= */
    @media (max-width: 1199.98px) {
      .flight-card { grid-template-columns: minmax(150px, 170px) 1fr auto; gap: 20px; }
      .fc-actions .btn { padding: 8px 14px; font-size: 9px; }
    }
    @media (max-width: 991.98px) {
      .flight-card { grid-template-columns: 1fr; gap: 20px; }
      .fc-price { text-align: left; }
      .fc-actions { justify-content: flex-start; }
      .fc-route { gap: 12px; }
    }
    @media (max-width: 767.98px) {
      .flights-hero { padding: 40px 0 32px; }
      .search-wrap { margin-top: -24px; }
      .results-toolbar { flex-direction: column; align-items: stretch; }
      .sort-wrap { justify-content: space-between; }
      .sort-wrap .form-select { min-width: 0; flex: 1; }
    }

    @media (prefers-reduced-motion: reduce) {
      * { transition-duration: .01ms !important; animation: none !important; }
      html { scroll-behavior: auto; }
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

  <script>document.documentElement.classList.add('js');</script>
</head>

<body>
  <a href="#main" class="skip-link">Skip to main content</a>

  <!-- TOPBAR -->
  <div class="topbar d-none d-lg-block">
    <div class="container">
      <div class="topbar-inner">
        <div class="topbar-left">
          <a href="tel:+2348080452890"><i class="bi bi-telephone"></i> 0808 045 2890</a>
          <a href="mailto:info@cjtravelsowerri.com"><i class="bi bi-envelope"></i> info@cjtravelsowerri.com</a>
        </div>
        <div class="topbar-right">
          <span class="topbar-badge">Concierge · Available 24/7</span>
          <a href="/contact">Contact</a>
        </div>
      </div>
    </div>
  </div>

  <!-- NAVBAR -->
  <header class="site-header" id="siteHeader">
    <div class="container">
      <div class="nav-inner">
        <a class="brand" href="/" aria-label="CJ Travels home">
          <img src="/images/logo-transparent.png" alt="CJ Travels" class="brand-logo" />
        </a>
        <nav class="nav-center" aria-label="Main navigation">
          <a href="index.html">Home</a>
          <a href="/flights" class="active">Flights</a>
          <a href="/hotels">Hotels</a>
          <a href="/destinations">Destinations</a>
          <a href="/financing">Financing</a>
          <a href="/about">About</a>
        
        </nav>
        <div class="nav-actions">
          <a href="/login" class="text-link">Sign in</a>
          <a href="/register" class="btn-nav-cta">Book now <i class="bi bi-arrow-right"></i></a>
        </div>
        <button class="navbar-toggler" type="button" id="mobileToggle"
                aria-controls="mobileNav" aria-expanded="false" aria-label="Open menu">
          <i class="bi bi-list"></i>
        </button>
      </div>
    </div>
  </header>

  <!-- MOBILE DRAWER -->
  <div class="mobile-nav-overlay" id="mobileOverlay"></div>
  <aside class="mobile-nav" id="mobileNav" aria-label="Mobile navigation">
    <div class="mobile-nav-head">
      <a class="brand" href="/" aria-label="CJ Travels home">
          <img src="/images/logo-transparent.png" alt="CJ Travels" class="brand-logo" />
        </a>
      <button class="mobile-nav-close" id="mobileClose" aria-label="Close menu">
        <i class="bi bi-x-lg"></i>
      </button>
    </div>
    <div class="mobile-nav-body">
      <ul class="nav-list">
        <li><a class="nav-link" href="/">Home <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link active" href="/flights">Flights <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/hotels">Hotels <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/destinations">Destinations <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/financing">Financing <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/about">About <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/contact">Contact <i class="bi bi-arrow-right"></i></a></li>
      </ul>
    </div>
    <div class="mobile-nav-cta">
      <a href="/login" class="btn btn-ghost">Sign in</a>
      <a href="/register" class="btn btn-navy">Book now <i class="bi bi-arrow-right"></i></a>
    </div>
    <div class="mobile-nav-footer">
      <p>Reach the concierge</p>
      <a href="tel:+2348080452890"><i class="bi bi-telephone"></i> 0808 045 2890</a>
      <a href="mailto:info@cjtravelsowerri.com"><i class="bi bi-envelope"></i> info@cjtravelsowerri.com</a>
    </div>
  </aside>

  <main id="main">

        <!-- =========================================================
         CJ TRAVELS FLIGHTS HERO — LUXURY SKY CONSOLE
         ========================================================= -->
    <section class="flights-hero-sky" id="flightsHero">
      <!-- Aviation Cinematic Backdrop -->
      <div class="flights-sky-backdrop">
        <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=2000&q=85" alt="CJ Travels Flight Sky" class="flights-sky-img" />
        <div class="flights-sky-scrim"></div>
      </div>

      <!-- Floating 3D Route Cards (Desktop) -->
      <div class="flight-floating-spotlight left" data-from="Lagos (LOS)" data-to="London (LHR)" title="Click to book Lagos to London">
        <span class="spotlight-badge"><i class="bi bi-fire"></i> Best Seller</span>
        <div class="spotlight-content">
          <div class="spotlight-route">
            <strong>LOS</strong>
            <i class="bi bi-arrow-right"></i>
            <strong>LHR</strong>
          </div>
          <span class="spotlight-airline">British Airways · Non-stop</span>
          <div class="spotlight-bottom">
            <span class="spotlight-price">From ₦940,000</span>
            <span class="spotlight-action">Select <i class="bi bi-chevron-right"></i></span>
          </div>
        </div>
      </div>

      <div class="flight-floating-spotlight right" data-from="Lagos (LOS)" data-to="Dubai (DXB)" title="Click to book Lagos to Dubai">
        <span class="spotlight-badge gold"><i class="bi bi-stars"></i> Exclusive</span>
        <div class="spotlight-content">
          <div class="spotlight-route">
            <strong>LOS</strong>
            <i class="bi bi-arrow-right"></i>
            <strong>DXB</strong>
          </div>
          <span class="spotlight-airline">Emirates · Direct Cabin</span>
          <div class="spotlight-bottom">
            <span class="spotlight-price">From ₦780,000</span>
            <span class="spotlight-action">Select <i class="bi bi-chevron-right"></i></span>
          </div>
        </div>
      </div>

      <div class="container text-center position-relative" style="z-index: 2;">
        <!-- Live Air Desk Radar Badge -->
        <div class="d-inline-block">
          <span class="air-desk-badge">
            <span class="beacon"></span>
            CJ Travels Air Desk · 500+ Global Airlines · Best Fare Guarantee
          </span>
        </div>

        <!-- Monumental Cormorant Garamond Title -->
        <h1 class="flights-sky-title">
          Where Ambition Takes Flight.<br />
          <em>Fly Anywhere in Pure Luxury.</em>
        </h1>

        <p class="flights-sky-sub">
          Compare live fares across British Airways, Emirates, Qatar Airways, Air Peace, Virgin Atlantic and 500+ carriers. Enjoy transparent pricing, 24/7 dedicated flight concierge, flexible travel financing, and instant e-ticket issuance.
        </p>

        <!-- Fast Route Select Chips -->
        <div class="flight-chips-container">
          <span class="flight-chips-label"><i class="bi bi-lightning-charge-fill"></i> Trending Flight Routes:</span>
          <div class="flight-chips-scroll">
            <button type="button" class="flight-chip-btn" data-from="Lagos (LOS)" data-to="London (LHR)">
              <span class="chip-cities">Lagos → London</span>
              <span class="chip-price">₦940k</span>
            </button>
            <button type="button" class="flight-chip-btn" data-from="Abuja (ABV)" data-to="London (LHR)">
              <span class="chip-cities">Abuja → London</span>
              <span class="chip-price">₦980k</span>
            </button>
            <button type="button" class="flight-chip-btn" data-from="Lagos (LOS)" data-to="Dubai (DXB)">
              <span class="chip-cities">Lagos → Dubai</span>
              <span class="chip-price">₦780k</span>
            </button>
            <button type="button" class="flight-chip-btn" data-from="Lagos (LOS)" data-to="New York (JFK)">
              <span class="chip-cities">Lagos → New York</span>
              <span class="chip-price">₦1.25m</span>
            </button>
            <button type="button" class="flight-chip-btn" data-from="Lagos (LOS)" data-to="Paris (CDG)">
              <span class="chip-cities">Lagos → Paris</span>
              <span class="chip-price">₦910k</span>
            </button>
            <button type="button" class="flight-chip-btn" data-from="Owerri (QOW)" data-to="Lagos (LOS)">
              <span class="chip-cities">Owerri → Lagos</span>
              <span class="chip-price">₦110k</span>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- SEARCH PANEL (Elevated Glassmorphism Flight Console) -->
    <div class="search-wrap" id="flightSearchWrap">
      <div class="search-card flight-terminal-card">
        <form class="search-form" id="flightSearchForm" novalidate>
          <div class="terminal-card-header">
            <!-- Trip Switch Tabs -->
            <div class="trip-switch" role="group" aria-label="Trip type">
              <button type="button" class="trip-btn" data-trip="oneway" aria-pressed="false">
                <i class="bi bi-arrow-right"></i> One-way
              </button>
              <button type="button" class="trip-btn active" data-trip="round" aria-pressed="true">
                <i class="bi bi-arrow-left-right"></i> Round-trip
              </button>
              <button type="button" class="trip-btn" data-trip="multi" aria-pressed="false">
                <i class="bi bi-diagram-3"></i> Multi-city
              </button>
            </div>
            
            <div class="terminal-guarantee-pill d-none d-md-inline-flex">
              <i class="bi bi-shield-check"></i> IATA &amp; ATOL Protected · Zero Hidden Charges
            </div>
          </div>

          <div class="row g-3">
            <div class="col-lg-3 col-md-6 position-relative">
              <label class="form-label" for="leg1From">Flying From</label>
              <div class="field">
                <i class="bi bi-geo-alt-fill"></i>
                <input type="text" class="form-control" id="leg1From" list="airportList"
                       placeholder="Lagos (LOS)" autocomplete="off" value="Lagos (LOS)" />
              </div>
              <button type="button" class="swap-btn" id="swapBtn" aria-label="Swap departure and destination" title="Swap cities">
                <i class="bi bi-arrow-left-right"></i>
              </button>
            </div>
            <div class="col-lg-3 col-md-6">
              <label class="form-label" for="leg1To">Flying To</label>
              <div class="field">
                <i class="bi bi-geo-alt-fill"></i>
                <input type="text" class="form-control" id="leg1To" list="airportList"
                       placeholder="London (LHR)" autocomplete="off" value="London (LHR)" />
              </div>
            </div>
            <div class="col-lg-2 col-md-6">
              <label class="form-label" for="leg1Date">Departure Date</label>
              <div class="field">
                <i class="bi bi-calendar3"></i>
                <input type="date" class="form-control" id="leg1Date" />
              </div>
            </div>
            <div class="col-lg-2 col-md-6 return-col">
              <label class="form-label" for="leg1Return">Return Date</label>
              <div class="field">
                <i class="bi bi-calendar3"></i>
                <input type="date" class="form-control" id="leg1Return" />
              </div>
            </div>
            <div class="col-lg-2 col-md-6">
              <label class="form-label" for="adultsSelect">Travellers</label>
              <div class="field">
                <i class="bi bi-people-fill"></i>
                <select class="form-select" id="adultsSelect">
                  <option value="1" selected>1 adult (12+)</option>
                  <option value="2">2 adults</option>
                  <option value="3">3 adults</option>
                  <option value="4">4 adults</option>
                </select>
              </div>
            </div>
          </div>

          <div class="extra-legs d-none" id="extraLegs"></div>
          <button type="button" class="add-leg-btn d-none" id="addLegBtn">
            <i class="bi bi-plus-circle"></i> Add another flight leg
          </button>

          <div class="row g-3 mt-1 align-items-end">
            <div class="col-lg-3 col-md-4">
              <label class="form-label" for="childrenSelect">Children / Infants</label>
              <div class="field">
                <i class="bi bi-person"></i>
                <select class="form-select" id="childrenSelect">
                  <option value="0" selected>0 children</option>
                  <option value="1">1 child (2-11)</option>
                  <option value="2">2 children</option>
                  <option value="3">3 children</option>
                </select>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <label class="form-label" for="cabinSelect">Cabin Class</label>
              <div class="field">
                <i class="bi bi-suit-heart"></i>
                <select class="form-select" id="cabinSelect">
                  <option value="Economy" selected>Economy Class</option>
                  <option value="Premium Economy">Premium Economy</option>
                  <option value="Business">Business Class</option>
                  <option value="First Class">First Class Suite</option>
                </select>
              </div>
            </div>
            <div class="col-lg-5 col-md-4">
              <button type="submit" class="btn-flight-search-cta">
                <span>Find Flights Now</span>
                <i class="bi bi-arrow-right"></i>
              </button>
            </div>
          </div>

          <div class="search-footer">
            <div class="search-guarantees">
              <span class="search-note"><i class="bi bi-check-circle-fill"></i> Best Price Guarantee</span>
              <span class="search-note"><i class="bi bi-check-circle-fill"></i> Instant E-Ticketing</span>
              <span class="search-note"><i class="bi bi-check-circle-fill"></i> Pay Small Small Financing</span>
              <span class="search-note"><i class="bi bi-check-circle-fill"></i> 24/7 Concierge Support</span>
            </div>
            <p class="search-note mb-0 text-muted" style="font-size: 11px;">
              <i class="bi bi-shield-lock-fill"></i> 256-Bit SSL Encrypted &middot; Official CJ Travels Booking Engine
            </p>
          </div>

          <div class="form-status" id="formStatus" role="status" aria-live="polite"></div>
        </form>

        <!-- Partner Airlines Strip -->
        <div class="airline-partner-strip">
          <span class="partner-label">Official Ticketing Partner For:</span>
          <div class="partner-tags">
            <span class="carrier-tag"><i class="bi bi-airplane"></i> British Airways</span>
            <span class="carrier-tag"><i class="bi bi-airplane"></i> Emirates</span>
            <span class="carrier-tag"><i class="bi bi-airplane"></i> Qatar Airways</span>
            <span class="carrier-tag"><i class="bi bi-airplane"></i> Virgin Atlantic</span>
            <span class="carrier-tag"><i class="bi bi-airplane"></i> Air Peace</span>
            <span class="carrier-tag"><i class="bi bi-airplane"></i> Turkish Airlines</span>
            <span class="carrier-tag"><i class="bi bi-airplane"></i> Delta Air Lines</span>
            <span class="carrier-tag"><i class="bi bi-airplane"></i> Lufthansa</span>
            <span class="carrier-tag"><i class="bi bi-airplane"></i> Ethiopian Airlines</span>
          </div>
        </div>
      </div>
    </div>

    <!-- RESULTS -->
    <section class="section bg-cream-soft" id="resultsSection">
      <div class="container">
        <div class="results-head">
          <div>
            <span class="eyebrow no-after" style="margin-bottom: 12px;">Available fares</span>
            <h2 id="resultsTitle">Lagos (LOS) → London (LHR)</h2>
            <p class="results-sub" id="resultsSummary">Round-trip · Economy · 1 adult</p>
          </div>
          <button class="btn btn-ghost d-lg-none" type="button"
                  data-bs-toggle="collapse" data-bs-target="#filtersPanel"
                  aria-expanded="false" aria-controls="filtersPanel">
            <i class="bi bi-sliders"></i> Filters
          </button>
        </div>

        <div class="demo-banner">
          <i class="bi bi-info-circle"></i>
          <div>
            <strong>Sample flight data.</strong> These results are for demonstration only. The airlines,
            flight numbers, times and prices shown are illustrative — they are not live fares and cannot be booked.
          </div>
        </div>

        <div class="row g-4">
          <div class="col-lg-3">
            <aside class="filters collapse d-lg-block" id="filtersPanel">
              <div class="filters-head">
                <h3><i class="bi bi-sliders"></i> Filters</h3>
                <button type="button" class="clear-filters" id="clearFilters">Clear all</button>
              </div>

              <div class="filter-group">
                <h4>Stops</h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="stops" id="stopsAny" value="any" checked />
                  <label class="form-check-label" for="stopsAny">Any number of stops</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="stops" id="stopsDirect" value="direct" />
                  <label class="form-check-label" for="stopsDirect">Direct only</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="stops" id="stopsOne" value="one" />
                  <label class="form-check-label" for="stopsOne">1 stop</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="stops" id="stopsTwo" value="two" />
                  <label class="form-check-label" for="stopsTwo">2+ stops</label>
                </div>
              </div>

              <div class="filter-group">
                <h4>Maximum price</h4>
                <div class="price-value" id="priceRangeLabel">Any price</div>
                <input type="range" class="form-range" id="priceRange" min="0" max="100" step="1" value="100"
                       aria-label="Maximum price" />
                <div class="price-range-hint">
                  <span id="priceMinHint">—</span>
                  <span id="priceMaxHint">—</span>
                </div>
              </div>

              <div class="filter-group">
                <h4>Airlines</h4>
                <div id="airlineFilters"></div>
              </div>

              <div class="filter-group">
                <h4>Departure time</h4>
                <div class="form-check">
                  <input class="form-check-input dep-time" type="checkbox" id="timeEarly" value="early" checked />
                  <label class="form-check-label" for="timeEarly">Early morning <span class="text-muted">(00:00–05:59)</span></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input dep-time" type="checkbox" id="timeMorning" value="morning" checked />
                  <label class="form-check-label" for="timeMorning">Morning <span class="text-muted">(06:00–11:59)</span></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input dep-time" type="checkbox" id="timeAfternoon" value="afternoon" checked />
                  <label class="form-check-label" for="timeAfternoon">Afternoon <span class="text-muted">(12:00–17:59)</span></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input dep-time" type="checkbox" id="timeEvening" value="evening" checked />
                  <label class="form-check-label" for="timeEvening">Evening <span class="text-muted">(18:00–23:59)</span></label>
                </div>
              </div>
            </aside>
          </div>

          <div class="col-lg-9">
            <div class="results-toolbar">
              <p class="results-count mb-0"><strong id="resultsCount">0</strong> flights found</p>
              <div class="sort-wrap">
                <label for="sortSelect">Sort by</label>
                <select class="form-select" id="sortSelect">
                  <option value="recommended" selected>Recommended</option>
                  <option value="price-asc">Price: low to high</option>
                  <option value="price-desc">Price: high to low</option>
                  <option value="duration-asc">Duration: shortest first</option>
                  <option value="departure-asc">Departure: earliest first</option>
                </select>
              </div>
            </div>
            <div id="resultsList" aria-live="polite"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- REVIEW -->
    <section class="section d-none" id="reviewSection">
      <div class="container">
        <button type="button" class="btn btn-ghost mb-4" id="backToResults">
          <i class="bi bi-arrow-left"></i> Back to results
        </button>
        <div class="row g-4">
          <div class="col-lg-8">
            <div class="review-card">
              <span class="eyebrow">Step 1 of 3</span>
              <h2>Review your <em style="font-style: italic; color: var(--gold);">flight</em></h2>
              <p>
                Check the details below before continuing. This is a frontend preview — no reservation,
                payment or ticket is created.
              </p>
              <div class="review-flight" id="reviewFlight"></div>
              <div class="review-grid" id="reviewDetails"></div>
              <div class="demo-banner mb-0">
                <i class="bi bi-info-circle"></i>
                <div>
                  <strong>Demonstration only.</strong> CJ Travels has not contacted any airline, and the
                  fare shown is sample data. Real bookings will be enabled when our booking engine goes live.
                </div>
              </div>
              <div class="d-flex flex-wrap gap-2 mt-4">
                <button type="button" class="btn btn-navy" id="proceedBtn">
                  Continue to passenger details <i class="bi bi-arrow-right"></i>
                </button>
                <button type="button" class="btn btn-ghost" id="backToResults2">
                  Change flight
                </button>
              </div>
              <div class="review-status" id="reviewStatus" role="status" aria-live="polite"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <aside class="price-summary" id="priceSummary"></aside>
          </div>
        </div>
      </div>
    </section>

  </main>

  <datalist id="airportList">
    <option value="Lagos (LOS)"></option>
    <option value="Abuja (ABV)"></option>
    <option value="Port Harcourt (PHC)"></option>
    <option value="Kano (KAN)"></option>
    <option value="Enugu (ENU)"></option>
    <option value="Accra (ACC)"></option>
    <option value="London (LHR)"></option>
    <option value="London (LGW)"></option>
    <option value="Manchester (MAN)"></option>
    <option value="Paris (CDG)"></option>
    <option value="Amsterdam (AMS)"></option>
    <option value="Frankfurt (FRA)"></option>
    <option value="Istanbul (IST)"></option>
    <option value="Dubai (DXB)"></option>
    <option value="Doha (DOH)"></option>
    <option value="Cairo (CAI)"></option>
    <option value="Addis Ababa (ADD)"></option>
    <option value="Nairobi (NBO)"></option>
    <option value="Johannesburg (JNB)"></option>
    <option value="Cape Town (CPT)"></option>
    <option value="New York (JFK)"></option>
    <option value="Toronto (YYZ)"></option>
  </datalist>

  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="footer-watermark" aria-hidden="true"></div>
    <div class="container footer-inner">
      <div class="footer-grid">
        <div>
          <a class="footer-brand" href="/" aria-label="CJ Travels home">
            <img src="/images/logo-white.png" alt="CJ Travels" class="brand-logo footer-logo" />
          </a>
          <p class="footer-about">
            An online travel agency serving customers in Nigeria and internationally.
            Flights, hotels, destination guides and travel financing — all in one place.
          </p>
          <div class="footer-social">
            <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" aria-label="X"><i class="bi bi-twitter-x"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div>
          <h4 class="footer-heading">Travel</h4>
          <ul class="footer-links">
            <li><a href="/flights">Flights</a></li>
            <li><a href="/hotels">Hotels</a></li>
            <li><a href="/destinations">Destinations</a></li>
            <li><a href="/financing">Travel financing</a></li>
          </ul>
        </div>
        <div>
          <h4 class="footer-heading">Company</h4>
          <ul class="footer-links">
            <li><a href="/about">About us</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="manage-booking.html">Manage booking</a></li>
          </ul>
        </div>
        <div>
          <h4 class="footer-heading">Get in touch</h4>
          <div class="footer-contact">
            <a href="tel:+2348080452890"><i class="bi bi-telephone"></i> 0808 045 2890</a>
            <a href="mailto:info@cjtravelsowerri.com"><i class="bi bi-envelope"></i> info@cjtravelsowerri.com</a>
          </div>
          <div class="footer-newsletter">
            <p>Join the letter — fare updates and travel notes.</p>
            <form class="footer-newsletter-form" id="newsletterForm" novalidate>
              <label class="visually-hidden" for="newsletterEmail">Email address</label>
              <input type="email" id="newsletterEmail" placeholder="Your email address" required />
              <button type="submit" aria-label="Subscribe">
                <i class="bi bi-arrow-right"></i>
              </button>
            </form>
            <div class="newsletter-status" id="newsletterStatus" role="status" aria-live="polite"></div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; <span data-year>2025</span> CJ Travels. All rights reserved.</p>
        <ul class="footer-legal">
          <li><a href="privacy.html">Privacy</a></li>
          <li><a href="terms.html">Terms</a></li>
          <li><a href="faq.html">Help</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    (function () {
      'use strict';

      /* NAVBAR + DRAWER */
      var siteHeader = document.getElementById('siteHeader');
      var mobileToggle = document.getElementById('mobileToggle');
      var mobileClose = document.getElementById('mobileClose');
      var mobileNav = document.getElementById('mobileNav');
      var mobileOverlay = document.getElementById('mobileOverlay');
      function onHeaderScroll() { if (siteHeader) siteHeader.classList.toggle('scrolled', window.scrollY > 8); }
      onHeaderScroll(); window.addEventListener('scroll', onHeaderScroll, { passive: true });
      function openMobile() { mobileNav.classList.add('open'); mobileOverlay.classList.add('show'); mobileToggle.setAttribute('aria-expanded', 'true'); document.body.style.overflow = 'hidden'; }
      function closeMobile() { mobileNav.classList.remove('open'); mobileOverlay.classList.remove('show'); mobileToggle.setAttribute('aria-expanded', 'false'); document.body.style.overflow = ''; }
      if (mobileToggle) mobileToggle.addEventListener('click', openMobile);
      if (mobileClose) mobileClose.addEventListener('click', closeMobile);
      if (mobileOverlay) mobileOverlay.addEventListener('click', closeMobile);
      document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && mobileNav.classList.contains('open')) { closeMobile(); mobileToggle.focus(); } });
      document.querySelectorAll('#mobileNav .nav-link').forEach(function (l) { l.addEventListener('click', closeMobile); });

      /* HELPERS */
      function pad(n) { return String(n).padStart(2, '0'); }
      function toISO(date) { return date.getFullYear() + '-' + pad(date.getMonth() + 1) + '-' + pad(date.getDate()); }
      function todayISO() { return toISO(new Date()); }
      function daysFromNow(n) { var d = new Date(); d.setDate(d.getDate() + n); return toISO(d); }
      function formatDateShort(iso) { if (!iso) return ''; var d = new Date(iso + 'T00:00:00'); return d.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' }); }
      function formatMinutes(total) { total = ((total % 1440) + 1440) % 1440; return pad(Math.floor(total / 60)) + ':' + pad(total % 60); }
      function formatDuration(mins) { var h = Math.floor(mins / 60), m = mins % 60; return h + 'h ' + (m < 10 ? '0' + m : m) + 'm'; }
      function formatMoney(value) { return new Intl.NumberFormat('en-NG', { style: 'currency', currency: 'NGN', maximumFractionDigits: 0 }).format(value); }
      function parseTime(str) { var p = str.split(':'); return (parseInt(p[0], 10) * 60) + parseInt(p[1], 10); }
      function escapeHTML(str) { return String(str).replace(/[&<>"']/g, function (ch) { return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[ch]; }); }
      function airportCode(value) { var m = String(value).match(/\(([A-Za-z]{3})\)/); if (m) return m[1].toUpperCase(); var l = String(value).replace(/[^A-Za-z]/g, ''); return (l.slice(0, 3) || '---').toUpperCase(); }
      function timeBucket(minutes) { if (minutes < 360) return 'early'; if (minutes < 720) return 'morning'; if (minutes < 1080) return 'afternoon'; return 'evening'; }

      /* DATA */
      var SAMPLE_FLIGHTS = [
        { id: 'f1', airline: 'Air Peace', flightNo: 'P4 7102', depTime: '08:15', duration: 390, stops: 0, price: 1150000, aircraft: 'Boeing 787-9', baggage: '1 × 23kg checked bag', fareType: 'Saver' },
        { id: 'f2', airline: 'British Airways', flightNo: 'BA 074', depTime: '23:10', duration: 400, stops: 0, price: 1420000, aircraft: 'Airbus A350-1000', baggage: '2 × 23kg checked bags', fareType: 'Standard' },
        { id: 'f3', airline: 'Emirates', flightNo: 'EK 782', depTime: '17:25', duration: 720, stops: 1, price: 980000, aircraft: 'Boeing 777-300ER', baggage: '1 × 30kg checked bag', fareType: 'Saver' },
        { id: 'f4', airline: 'Qatar Airways', flightNo: 'QR 1406', depTime: '13:05', duration: 660, stops: 1, price: 1050000, aircraft: 'Airbus A330-900', baggage: '1 × 23kg checked bag', fareType: 'Standard' },
        { id: 'f5', airline: 'Ethiopian Airlines', flightNo: 'ET 900', depTime: '11:40', duration: 865, stops: 1, price: 890000, aircraft: 'Boeing 737-800', baggage: '1 × 23kg checked bag', fareType: 'Saver' },
        { id: 'f6', airline: 'KLM', flightNo: 'KL 588', depTime: '22:30', duration: 615, stops: 1, price: 1320000, aircraft: 'Boeing 787-10', baggage: '1 × 23kg checked bag', fareType: 'Flex' },
        { id: 'f7', airline: 'Turkish Airlines', flightNo: 'TK 626', depTime: '19:55', duration: 1015, stops: 2, price: 940000, aircraft: 'Airbus A321neo', baggage: '1 × 20kg checked bag', fareType: 'Saver' },
        { id: 'f8', airline: 'Kenya Airways', flightNo: 'KQ 533', depTime: '05:20', duration: 805, stops: 1, price: 875000, aircraft: 'Boeing 737 MAX 8', baggage: '1 × 23kg checked bag', fareType: 'Saver' },
        { id: 'f9', airline: 'Air Peace', flightNo: 'P4 7204', depTime: '02:40', duration: 420, stops: 0, price: 1090000, aircraft: 'Boeing 787-9', baggage: '1 × 23kg checked bag', fareType: 'Saver' },
        { id: 'f10', airline: 'Virgin Atlantic', flightNo: 'VS 652', depTime: '14:50', duration: 395, stops: 0, price: 1560000, aircraft: 'Airbus A350-1000', baggage: '2 × 23kg checked bags', fareType: 'Flex' }
      ];
      var AIRLINE_COLORS = ['#0b1e3d', '#1e3657', '#a8842c', '#2e7d5b', '#6b4bc9', '#a3452e', '#0f6f8c'];

      /* STATE */
      var state = {
        tripType: 'round',
        search: { from: 'Lagos (LOS)', to: 'London (LHR)', depart: daysFromNow(14), ret: daysFromNow(21), adults: 1, children: 0, cabin: 'Economy' },
        filters: { stops: 'any', maxPrice: 2000000, airlines: new Set(), times: new Set(['early', 'morning', 'afternoon', 'evening']) },
        sort: 'recommended',
        selectedFlightId: null
      };

      /* DOM */
      var els = {
        form: document.getElementById('flightSearchForm'),
        formStatus: document.getElementById('formStatus'),
        tripButtons: Array.prototype.slice.call(document.querySelectorAll('.trip-btn')),
        returnCol: document.querySelector('.return-col'),
        extraLegs: document.getElementById('extraLegs'),
        addLegBtn: document.getElementById('addLegBtn'),
        swapBtn: document.getElementById('swapBtn'),
        leg1From: document.getElementById('leg1From'),
        leg1To: document.getElementById('leg1To'),
        leg1Date: document.getElementById('leg1Date'),
        leg1Return: document.getElementById('leg1Return'),
        adults: document.getElementById('adultsSelect'),
        children: document.getElementById('childrenSelect'),
        cabin: document.getElementById('cabinSelect'),
        resultsSection: document.getElementById('resultsSection'),
        resultsTitle: document.getElementById('resultsTitle'),
        resultsSummary: document.getElementById('resultsSummary'),
        resultsCount: document.getElementById('resultsCount'),
        resultsList: document.getElementById('resultsList'),
        sortSelect: document.getElementById('sortSelect'),
        clearFilters: document.getElementById('clearFilters'),
        priceRange: document.getElementById('priceRange'),
        priceRangeLabel: document.getElementById('priceRangeLabel'),
        priceMinHint: document.getElementById('priceMinHint'),
        priceMaxHint: document.getElementById('priceMaxHint'),
        airlineFilters: document.getElementById('airlineFilters'),
        depTimeInputs: Array.prototype.slice.call(document.querySelectorAll('.dep-time')),
        reviewSection: document.getElementById('reviewSection'),
        reviewFlight: document.getElementById('reviewFlight'),
        reviewDetails: document.getElementById('reviewDetails'),
        priceSummary: document.getElementById('priceSummary'),
        reviewStatus: document.getElementById('reviewStatus'),
        proceedBtn: document.getElementById('proceedBtn'),
        backToResults: document.getElementById('backToResults'),
        backToResults2: document.getElementById('backToResults2')
      };

      /* YEAR + REVEAL */
      document.querySelectorAll('[data-year]').forEach(function (n) { n.textContent = new Date().getFullYear(); });
      var revealEls = document.querySelectorAll('.reveal');
      if ('IntersectionObserver' in window && revealEls.length) {
        var obs = new IntersectionObserver(function (entries) {
          entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-visible'); obs.unobserve(e.target); } });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        revealEls.forEach(function (el) { obs.observe(el); });
      } else { revealEls.forEach(function (el) { el.classList.add('is-visible'); }); }

      /* PRICE RANGE */
      var PRICE_MIN = Math.min.apply(null, SAMPLE_FLIGHTS.map(function (f) { return f.price; }));
      var PRICE_MAX = Math.max.apply(null, SAMPLE_FLIGHTS.map(function (f) { return f.price; }));
      els.priceRange.min = String(PRICE_MIN);
      els.priceRange.max = String(PRICE_MAX);
      els.priceRange.step = '10000';
      els.priceRange.value = String(PRICE_MAX);
      els.priceMinHint.textContent = formatMoney(PRICE_MIN);
      els.priceMaxHint.textContent = formatMoney(PRICE_MAX);
      state.filters.maxPrice = PRICE_MAX;
      function updatePriceLabel() {
        var v = Number(els.priceRange.value);
        els.priceRangeLabel.textContent = v >= PRICE_MAX ? 'Any price' : 'Up to ' + formatMoney(v);
      }
      updatePriceLabel();
      els.priceRange.addEventListener('input', function () {
        state.filters.maxPrice = Number(els.priceRange.value);
        updatePriceLabel(); renderResults();
      });

      /* AIRLINE FILTERS */
      var airlines = [];
      SAMPLE_FLIGHTS.forEach(function (f) { if (airlines.indexOf(f.airline) === -1) airlines.push(f.airline); });
      airlines.sort();
      els.airlineFilters.innerHTML = airlines.map(function (name, i) {
        var id = 'airline-' + i;
        state.filters.airlines.add(name);
        return '<div class="form-check"><input class="form-check-input airline-check" type="checkbox" id="' + id + '" value="' + escapeHTML(name) + '" checked /><label class="form-check-label" for="' + id + '">' + escapeHTML(name) + '</label></div>';
      }).join('');
      var airlineChecks = Array.prototype.slice.call(document.querySelectorAll('.airline-check'));
      airlineChecks.forEach(function (cb) {
        cb.addEventListener('change', function () {
          if (cb.checked) state.filters.airlines.add(cb.value); else state.filters.airlines.delete(cb.value);
          renderResults();
        });
      });

      document.querySelectorAll('input[name="stops"]').forEach(function (r) {
        r.addEventListener('change', function () { state.filters.stops = r.value; renderResults(); });
      });
      els.depTimeInputs.forEach(function (cb) {
        cb.addEventListener('change', function () {
          if (cb.checked) state.filters.times.add(cb.value); else state.filters.times.delete(cb.value);
          renderResults();
        });
      });
      els.sortSelect.addEventListener('change', function () { state.sort = els.sortSelect.value; renderResults(); });
      els.clearFilters.addEventListener('click', function () {
        state.filters.stops = 'any';
        state.filters.maxPrice = PRICE_MAX;
        state.filters.airlines = new Set(airlines);
        state.filters.times = new Set(['early', 'morning', 'afternoon', 'evening']);
        document.getElementById('stopsAny').checked = true;
        els.priceRange.value = String(PRICE_MAX);
        updatePriceLabel();
        airlineChecks.forEach(function (cb) { cb.checked = true; });
        els.depTimeInputs.forEach(function (cb) { cb.checked = true; });
        renderResults();
      });

      /* TRIP TYPE */
      function setTripType(type) {
        state.tripType = type;
        els.tripButtons.forEach(function (b) {
          var active = b.dataset.trip === type;
          b.classList.toggle('active', active);
          b.setAttribute('aria-pressed', active ? 'true' : 'false');
        });
        var showReturn = type === 'round';
        var showExtras = type === 'multi';
        els.returnCol.classList.toggle('d-none', !showReturn);
        els.leg1Return.required = showReturn;
        els.extraLegs.classList.toggle('d-none', !showExtras);
        els.addLegBtn.classList.toggle('d-none', !showExtras);
        if (showExtras && els.extraLegs.children.length === 0) addExtraLeg();
        if (!showExtras) els.extraLegs.innerHTML = '';
      }
      els.tripButtons.forEach(function (b) { b.addEventListener('click', function () { setTripType(b.dataset.trip); }); });

      function extraLegCount() { return els.extraLegs.querySelectorAll('.extra-leg').length; }
      function addExtraLeg() {
        if (extraLegCount() >= 3) return;
        var leg = document.createElement('div');
        leg.className = 'extra-leg';
        leg.innerHTML =
          '<button type="button" class="remove-leg" aria-label="Remove this flight"><i class="bi bi-x-lg"></i></button>' +
          '<div class="row g-3">' +
            '<div class="col-lg-3 col-md-6"><label class="form-label">From</label><div class="field"><i class="bi bi-geo-alt"></i><input type="text" class="form-control extra-from" list="airportList" placeholder="City or airport" autocomplete="off" /></div></div>' +
            '<div class="col-lg-3 col-md-6"><label class="form-label">To</label><div class="field"><i class="bi bi-geo-alt"></i><input type="text" class="form-control extra-to" list="airportList" placeholder="City or airport" autocomplete="off" /></div></div>' +
            '<div class="col-lg-3 col-md-6"><label class="form-label">Departure date</label><div class="field"><i class="bi bi-calendar3"></i><input type="date" class="form-control extra-date" /></div></div>' +
          '</div>';
        els.extraLegs.appendChild(leg);
        var dateInput = leg.querySelector('.extra-date');
        dateInput.min = todayISO();
        dateInput.value = daysFromNow(21 + extraLegCount() * 3);
        leg.querySelector('.remove-leg').addEventListener('click', function () { leg.remove(); });
        els.addLegBtn.disabled = extraLegCount() >= 3;
      }
      els.addLegBtn.addEventListener('click', addExtraLeg);

      els.swapBtn.addEventListener('click', function () {
        var t = els.leg1From.value;
        els.leg1From.value = els.leg1To.value;
        els.leg1To.value = t;
        els.swapBtn.classList.add('spun');
        window.setTimeout(function () { els.swapBtn.classList.remove('spun'); }, 320);
      });

      els.leg1Date.min = todayISO();
      els.leg1Return.min = todayISO();
      els.leg1Date.value = daysFromNow(14);
      els.leg1Return.value = daysFromNow(21);
      els.leg1Date.addEventListener('change', function () {
        if (!els.leg1Date.value) return;
        els.leg1Return.min = els.leg1Date.value;
        if (els.leg1Return.value && els.leg1Return.value < els.leg1Date.value) {
          els.leg1Return.value = els.leg1Date.value;
        }
      });

      function showFormStatus(m, t) { els.formStatus.textContent = m; els.formStatus.className = 'form-status show ' + t; }
      function clearFormStatus() { els.formStatus.textContent = ''; els.formStatus.className = 'form-status'; }

      function collectLegs() {
        var legs = [{ from: els.leg1From.value.trim(), to: els.leg1To.value.trim(), date: els.leg1Date.value }];
        els.extraLegs.querySelectorAll('.extra-leg').forEach(function (leg) {
          legs.push({
            from: leg.querySelector('.extra-from').value.trim(),
            to: leg.querySelector('.extra-to').value.trim(),
            date: leg.querySelector('.extra-date').value
          });
        });
        return legs;
      }

      function validateSearch() {
        var legs = collectLegs();
        var today = todayISO();
        for (var i = 0; i < legs.length; i++) {
          var leg = legs[i];
          var label = legs.length > 1 ? ' (flight ' + (i + 1) + ')' : '';
          if (!leg.from || !leg.to) return 'Please enter both a departure city and a destination' + label + '.';
          if (leg.from.toLowerCase() === leg.to.toLowerCase()) return 'Departure and destination cannot be the same city' + label + '.';
          if (!leg.date) return 'Please choose a departure date' + label + '.';
          if (leg.date < today) return 'Departure dates cannot be in the past' + label + '.';
        }
        if (state.tripType === 'round') {
          if (!els.leg1Return.value) return 'Please choose a return date for your round-trip.';
          if (els.leg1Return.value < els.leg1Date.value) return 'The return date must be on or after the departure date.';
        }
        return null;
      }

      els.form.addEventListener('submit', function (event) {
        event.preventDefault();
        var err = validateSearch();
        if (err) { showFormStatus(err, 'error'); return; }
        clearFormStatus();
        state.search = {
          from: els.leg1From.value.trim(),
          to: els.leg1To.value.trim(),
          depart: els.leg1Date.value,
          ret: state.tripType === 'round' ? els.leg1Return.value : '',
          adults: Number(els.adults.value),
          children: Number(els.children.value),
          cabin: els.cabin.value
        };
        updateResultsHeading();
        renderResults();
        els.reviewSection.classList.add('d-none');
        els.resultsSection.classList.remove('d-none');
        els.resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
      });

      function travellerSummary(a, c) {
        var parts = [a + (a === 1 ? ' adult' : ' adults')];
        if (c > 0) parts.push(c + (c === 1 ? ' child' : ' children'));
        return parts.join(', ');
      }

      function updateResultsHeading() {
        var s = state.search;
        els.resultsTitle.textContent = s.from + ' → ' + s.to;
        var tripLabel = state.tripType === 'round' ? 'Round-trip' : state.tripType === 'oneway' ? 'One-way' : 'Multi-city';
        var dateLabel = state.tripType === 'round' ? formatDateShort(s.depart) + ' – ' + formatDateShort(s.ret) : formatDateShort(s.depart);
        els.resultsSummary.textContent = tripLabel + ' · ' + dateLabel + ' · ' + s.cabin + ' · ' + travellerSummary(s.adults, s.children);
      }

      function getVisibleFlights() {
        var f = state.filters;
        var filtered = SAMPLE_FLIGHTS.filter(function (flight) {
          if (f.stops === 'direct' && flight.stops !== 0) return false;
          if (f.stops === 'one' && flight.stops !== 1) return false;
          if (f.stops === 'two' && flight.stops < 2) return false;
          if (flight.price > f.maxPrice) return false;
          if (!f.airlines.has(flight.airline)) return false;
          var bucket = timeBucket(parseTime(flight.depTime));
          if (!f.times.has(bucket)) return false;
          return true;
        });
        switch (state.sort) {
          case 'price-asc': filtered.sort(function (a, b) { return a.price - b.price; }); break;
          case 'price-desc': filtered.sort(function (a, b) { return b.price - a.price; }); break;
          case 'duration-asc': filtered.sort(function (a, b) { return a.duration - b.duration; }); break;
          case 'departure-asc': filtered.sort(function (a, b) { return parseTime(a.depTime) - parseTime(b.depTime); }); break;
          default: filtered.sort(function (a, b) { if (a.stops !== b.stops) return a.stops - b.stops; return a.price - b.price; });
        }
        return filtered;
      }

      function airlineColor(name) {
        var t = 0; for (var i = 0; i < name.length; i++) t += name.charCodeAt(i);
        return AIRLINE_COLORS[t % AIRLINE_COLORS.length];
      }
      function airlineInitials(name) { return name.split(/\s+/).map(function (w) { return w.charAt(0); }).join('').slice(0, 2).toUpperCase(); }
      function stopsLabel(stops) { if (stops === 0) return 'Direct'; if (stops === 1) return '1 stop'; return stops + ' stops'; }

      function flightCardHTML(flight) {
        var fromCode = airportCode(state.search.from);
        var toCode = airportCode(state.search.to);
        var depMins = parseTime(flight.depTime);
        var arrivalTotal = depMins + flight.duration;
        var dayOffset = Math.floor(arrivalTotal / 1440);
        var arrivalTime = formatMinutes(arrivalTotal);

        var detailsHref = 'flights-details.html?id=' + encodeURIComponent(flight.id) +
          '&from=' + encodeURIComponent(state.search.from) +
          '&to=' + encodeURIComponent(state.search.to) +
          '&depart=' + encodeURIComponent(state.search.depart) +
          '&ret=' + encodeURIComponent(state.search.ret) +
          '&adults=' + state.search.adults +
          '&children=' + state.search.children +
          '&cabin=' + encodeURIComponent(state.search.cabin);

        return (
          '<article class="flight-card">' +
            '<div class="airline-block">' +
              '<span class="airline-logo" style="background:' + airlineColor(flight.airline) + '">' + airlineInitials(flight.airline) + '</span>' +
              '<span class="airline-meta"><strong>' + escapeHTML(flight.airline) + '</strong><small>' + escapeHTML(flight.flightNo) + '</small></span>' +
            '</div>' +
            '<div class="fc-route">' +
              '<div class="fc-point"><span class="t">' + flight.depTime + '</span><span class="c">' + escapeHTML(fromCode) + '</span></div>' +
              '<div class="fc-middle"><span class="dur">' + formatDuration(flight.duration) + '</span><div class="fc-track"></div><span class="stops' + (flight.stops === 0 ? ' direct' : '') + '">' + stopsLabel(flight.stops) + '</span></div>' +
              '<div class="fc-point"><span class="t">' + arrivalTime + (dayOffset > 0 ? '<sup>+' + dayOffset + '</sup>' : '') + '</span><span class="c">' + escapeHTML(toCode) + '</span></div>' +
            '</div>' +
            '<div class="fc-price">' +
              '<span class="amount">' + formatMoney(flight.price) + '</span>' +
              '<span class="per">per adult · sample</span>' +
              '<div class="fc-actions">' +
                '<a href="' + detailsHref + '" class="btn btn-ghost btn-sm">Details</a>' +
                '<button type="button" class="btn btn-navy btn-sm js-select" data-flight-id="' + flight.id + '">Select flight</button>' +
              '</div>' +
            '</div>' +
          '</article>'
        );
      }

      function renderResults() {
        var flights = getVisibleFlights();
        els.resultsCount.textContent = String(flights.length);
        if (!flights.length) {
          els.resultsList.innerHTML =
            '<div class="empty-state"><i class="bi bi-search"></i><h3>No flights match your filters</h3><p>Try widening your price range, selecting more airlines, or allowing more stops.</p><button type="button" class="btn btn-outline-navy" id="resetFromEmpty">Reset filters</button></div>';
          var rb = document.getElementById('resetFromEmpty');
          if (rb) rb.addEventListener('click', function () { els.clearFilters.click(); });
          return;
        }
        els.resultsList.innerHTML = flights.map(flightCardHTML).join('');
      }

      els.resultsList.addEventListener('click', function (event) {
        var selectBtn = event.target.closest('.js-select');
        if (selectBtn) openReview(selectBtn.dataset.flightId);
      });

      function getFlightById(id) { return SAMPLE_FLIGHTS.filter(function (f) { return f.id === id; })[0]; }

      function openReview(flightId) {
        var flight = getFlightById(flightId);
        if (!flight) return;
        state.selectedFlightId = flight.id;
        var s = state.search;
        var fromCode = airportCode(s.from);
        var toCode = airportCode(s.to);
        var depMins = parseTime(flight.depTime);
        var arrivalTotal = depMins + flight.duration;
        var dayOffset = Math.floor(arrivalTotal / 1440);
        var arrivalTime = formatMinutes(arrivalTotal);

        els.reviewFlight.innerHTML =
          '<div class="airline-block mb-3"><span class="airline-logo" style="background:' + airlineColor(flight.airline) + '">' + airlineInitials(flight.airline) + '</span><span class="airline-meta"><strong>' + escapeHTML(flight.airline) + '</strong><small>' + escapeHTML(flight.flightNo) + ' · ' + escapeHTML(flight.aircraft) + '</small></span></div>' +
          '<div class="fc-route">' +
            '<div class="fc-point"><span class="t">' + flight.depTime + '</span><span class="c">' + escapeHTML(fromCode) + '</span></div>' +
            '<div class="fc-middle"><span class="dur">' + formatDuration(flight.duration) + '</span><div class="fc-track"></div><span class="stops' + (flight.stops === 0 ? ' direct' : '') + '">' + stopsLabel(flight.stops) + '</span></div>' +
            '<div class="fc-point"><span class="t">' + arrivalTime + (dayOffset > 0 ? '<sup>+' + dayOffset + '</sup>' : '') + '</span><span class="c">' + escapeHTML(toCode) + '</span></div>' +
          '</div>';

        var tripLabel = state.tripType === 'round' ? 'Round-trip' : state.tripType === 'oneway' ? 'One-way' : 'Multi-city';
        var dateLabel = state.tripType === 'round' ? formatDateShort(s.depart) + ' – ' + formatDateShort(s.ret) : formatDateShort(s.depart);

        els.reviewDetails.innerHTML =
          '<div class="detail-item"><span>Route</span><strong>' + escapeHTML(s.from) + ' → ' + escapeHTML(s.to) + '</strong></div>' +
          '<div class="detail-item"><span>Trip type</span><strong>' + tripLabel + '</strong></div>' +
          '<div class="detail-item"><span>Travel dates</span><strong>' + dateLabel + '</strong></div>' +
          '<div class="detail-item"><span>Cabin class</span><strong>' + escapeHTML(s.cabin) + '</strong></div>' +
          '<div class="detail-item"><span>Travellers</span><strong>' + escapeHTML(travellerSummary(s.adults, s.children)) + '</strong></div>' +
          '<div class="detail-item"><span>Baggage</span><strong>' + escapeHTML(flight.baggage) + '</strong></div>';

        var adultFare = flight.price;
        var childFare = Math.round(flight.price * 0.75);
        var adultsTotal = adultFare * s.adults;
        var childrenTotal = childFare * s.children;
        var subtotal = adultsTotal + childrenTotal;
        var taxes = Math.round(subtotal * 0.12);
        var total = subtotal + taxes;

        els.priceSummary.innerHTML =
          '<h3>Price summary</h3>' +
          '<div class="summary-row"><span>Adults (' + s.adults + ' × ' + formatMoney(adultFare) + ')</span><span>' + formatMoney(adultsTotal) + '</span></div>' +
          (s.children > 0 ? '<div class="summary-row"><span>Children (' + s.children + ' × ' + formatMoney(childFare) + ')</span><span>' + formatMoney(childrenTotal) + '</span></div>' : '') +
          '<div class="summary-row"><span>Taxes &amp; fees (estimated)</span><span>' + formatMoney(taxes) + '</span></div>' +
          '<div class="summary-total"><span>Total<small>Sample estimate</small></span><span>' + formatMoney(total) + '</span></div>' +
          '<p class="modal-note" style="font-size:11px; color:var(--muted); margin-top:16px;">Prices are illustrative sample data. No payment will be taken and no reservation is created.</p>';

        els.resultsSection.classList.add('d-none');
        els.reviewSection.classList.remove('d-none');
        els.reviewStatus.className = 'review-status';
        els.reviewStatus.textContent = '';
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }

      function returnToResults() {
        els.reviewSection.classList.add('d-none');
        els.resultsSection.classList.remove('d-none');
        els.resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
      els.backToResults.addEventListener('click', returnToResults);
      els.backToResults2.addEventListener('click', returnToResults);

      els.proceedBtn.addEventListener('click', function () {
        els.reviewStatus.className = 'review-status show info';
        els.reviewStatus.textContent = 'This is a frontend demonstration. Passenger details, payment and ticketing are not available on this page yet — they will be added when the booking engine is connected.';
      });

      
      /* =====================================================
         CJ TRAVELS FLIGHT FAST ROUTE CHIPS & SPOTLIGHT CARDS
         ===================================================== */
      function setAndSearchRoute(from, to) {
        if (els.leg1From) els.leg1From.value = from;
        if (els.leg1To) els.leg1To.value = to;
        var searchEl = document.getElementById('flightSearchWrap');
        if (searchEl) {
          searchEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        // Focus or trigger search if dates are set
        if (els.leg1From && els.leg1To) {
          state.search.from = from;
          state.search.to = to;
          updateResultsHeading();
          renderResults();
        }
      }

      document.querySelectorAll('.flight-chip-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
          var from = btn.getAttribute('data-from');
          var to = btn.getAttribute('data-to');
          if (from && to) setAndSearchRoute(from, to);
        });
      });

      document.querySelectorAll('.flight-floating-spotlight').forEach(function (card) {
        card.addEventListener('click', function () {
          var from = card.getAttribute('data-from');
          var to = card.getAttribute('data-to');
          if (from && to) setAndSearchRoute(from, to);
        });
      });

      var newsletterForm = document.getElementById('newsletterForm');
      if (newsletterForm) {
        newsletterForm.addEventListener('submit', function (event) {
          event.preventDefault();
          var emailInput = document.getElementById('newsletterEmail');
          var status = document.getElementById('newsletterStatus');
          var email = emailInput.value.trim();
          var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
          if (!pattern.test(email)) {
            status.textContent = 'Please enter a valid email address.';
            status.className = 'newsletter-status show error';
            return;
          }
          status.textContent = 'Thank you — please check ' + email + ' to confirm.';
          status.className = 'newsletter-status show success';
          newsletterForm.reset();
        });
      }

      setTripType('round');
      updateResultsHeading();
      renderResults();

    })();
  </script>
</body>
</html>