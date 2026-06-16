{{-- login.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login · Imigrasi Makassar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;600;700&family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

body {
    font-family: 'DM Sans', sans-serif;
    min-height: 100vh;
    background: #f0f4ff;
    display: flex;
    position: relative;
    overflow: hidden;
}

/* ── SOFT WHITE MESH BG ── */
.lg-bg {
    position: fixed; inset: 0;
    background:
        radial-gradient(ellipse 75% 60% at 8% 8%, rgba(13,50,114,0.08) 0%, transparent 55%),
        radial-gradient(ellipse 65% 55% at 92% 92%, rgba(26,95,184,0.07) 0%, transparent 52%),
        radial-gradient(ellipse 55% 45% at 88% 5%, rgba(56,189,248,0.05) 0%, transparent 50%),
        radial-gradient(ellipse 45% 40% at 5% 88%, rgba(129,140,248,0.05) 0%, transparent 50%),
        linear-gradient(155deg, #f5f8ff 0%, #eef3ff 40%, #f8faff 70%, #fff 100%);
    pointer-events: none; z-index: 0;
}
.lg-dots {
    position: fixed; inset: 0;
    background-image: radial-gradient(circle, rgba(13,50,114,0.055) 1px, transparent 1px);
    background-size: 30px 30px; pointer-events: none; z-index: 0;
}
.lg-blob1 { position: fixed; top: -120px; left: -120px; width: 460px; height: 460px; border-radius: 50%; background: radial-gradient(circle, rgba(13,50,114,0.07) 0%, transparent 65%); pointer-events: none; z-index: 0; animation: lgB1 18s ease-in-out infinite; }
.lg-blob2 { position: fixed; bottom: -100px; right: -100px; width: 400px; height: 400px; border-radius: 50%; background: radial-gradient(circle, rgba(56,189,248,0.07) 0%, transparent 65%); pointer-events: none; z-index: 0; animation: lgB2 22s ease-in-out infinite; }
.lg-blob3 { position: fixed; top: 45%; right: 5%; width: 260px; height: 260px; border-radius: 50%; background: radial-gradient(circle, rgba(129,140,248,0.06) 0%, transparent 65%); pointer-events: none; z-index: 0; animation: lgB3 14s ease-in-out infinite; }
@keyframes lgB1 { 0%,100%{transform:translate(0,0)} 50%{transform:translate(32px,26px)} }
@keyframes lgB2 { 0%,100%{transform:translate(0,0)} 50%{transform:translate(-26px,-32px)} }
@keyframes lgB3 { 0%,100%{transform:translate(0,0)} 50%{transform:translate(-16px,20px)} }

/* ── SPLIT LAYOUT ── */
.lg-wrapper {
    display: flex;
    width: 100%;
    min-height: 100vh;
    position: relative;
    z-index: 2;
}

/* LEFT PANEL — navy branding */
.lg-left {
    width: 45%;
    background: linear-gradient(155deg, #0d3272 0%, #1565c0 55%, #1976d2 100%);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 60px 48px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
}

/* Left panel decorations */
.lg-left::before {
    content: '';
    position: absolute; top: 0; left: 0; right: 0; bottom: 0;
    background-image: radial-gradient(circle, rgba(255,255,255,0.055) 1px, transparent 1px);
    background-size: 34px 34px;
}
.lg-left-orb1 { position: absolute; top: -100px; right: -100px; width: 380px; height: 380px; border-radius: 50%; background: radial-gradient(circle, rgba(255,255,255,0.07) 0%, transparent 65%); }
.lg-left-orb2 { position: absolute; bottom: -80px; left: -80px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(56,189,248,0.12) 0%, transparent 65%); }
.lg-left-line { position: absolute; top: 0; right: 0; bottom: 0; width: 1px; background: linear-gradient(180deg, transparent, rgba(255,255,255,0.15) 30%, rgba(255,255,255,0.15) 70%, transparent); }

.lg-left-content { position: relative; z-index: 2; text-align: center; }

.lg-logo-wrap {
    width: 110px; height: 110px;
    background: rgba(255,255,255,0.12);
    border: 1.5px solid rgba(255,255,255,0.2);
    border-radius: 28px;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 28px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.15), inset 0 1px 0 rgba(255,255,255,0.15);
    backdrop-filter: blur(10px);
}
.lg-logo-wrap img {
    height: 75px;
    object-fit: contain;
    filter: drop-shadow(0 4px 12px rgba(0,0,0,0.2));
}

.lg-brand-name {
    font-family: 'Rajdhani', sans-serif;
    font-weight: 700; font-size: 1.6rem;
    color: #fff; letter-spacing: 1.5px;
    line-height: 1.2; margin-bottom: 6px;
}
.lg-brand-sub {
    font-size: 0.68rem; color: rgba(255,255,255,0.5);
    font-weight: 600; letter-spacing: 2.5px;
    text-transform: uppercase; margin-bottom: 40px;
}

/* Mascot area */
.lg-mascot-group {
    display: flex;
    align-items: flex-end;
    justify-content: center;
    gap: 0;
    margin-bottom: 32px;
}
.lg-mascot-group img {
    height: 160px;
    object-fit: contain;
    filter: drop-shadow(0 10px 24px rgba(0,0,0,0.25));
    transition: transform 0.3s ease;
}
.lg-mascot-group img:hover { transform: translateY(-8px); }
.lg-mascot-group img:first-child { margin-right: -16px; z-index: 1; }
.lg-mascot-group img:last-child { margin-left: -16px; z-index: 1; }

.lg-tagline {
    font-family: 'Rajdhani', sans-serif;
    font-size: 0.78rem; color: rgba(255,255,255,0.45);
    letter-spacing: 2px; text-transform: uppercase;
    font-weight: 600;
}
.lg-tagline strong { color: rgba(255,255,255,0.75); font-weight: 700; }

/* ── RIGHT PANEL — login form ── */
.lg-right {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 48px;
}

.lg-form-box {
    width: 100%;
    max-width: 400px;
}

.lg-form-header { margin-bottom: 32px; }
.lg-form-eyebrow {
    display: inline-flex; align-items: center; gap: 7px;
    background: rgba(13,50,114,0.06);
    border: 1.5px solid rgba(13,50,114,0.11);
    border-radius: 50px; padding: 5px 16px;
    font-size: 0.68rem; font-weight: 700; color: rgba(13,50,114,0.6);
    letter-spacing: 2.5px; text-transform: uppercase; margin-bottom: 14px;
}
.lg-eyebrow-dot { width: 6px; height: 6px; background: #16a34a; border-radius: 50%; box-shadow: 0 0 5px #16a34a; animation: edot 2s ease-in-out infinite; }
@keyframes edot { 0%,100%{opacity:1} 50%{opacity:0.3} }

.lg-form-title {
    font-family: 'Rajdhani', sans-serif;
    font-weight: 700; font-size: 2rem;
    color: #0d3272; letter-spacing: 0.5px; line-height: 1.1;
    margin-bottom: 6px;
}
.lg-form-desc { font-size: 0.85rem; color: rgba(13,50,114,0.45); font-weight: 500; }

/* SESSION STATUS */
.lg-status {
    background: #f0fdf4; border: 1.5px solid rgba(22,163,74,0.25);
    border-radius: 12px; padding: 12px 16px; margin-bottom: 20px;
    font-size: 0.85rem; color: #16a34a; font-weight: 600;
}

/* FORM FIELDS */
.lg-field { margin-bottom: 18px; }
.lg-label {
    display: block; font-size: 0.78rem; font-weight: 700;
    color: rgba(13,50,114,0.65); letter-spacing: 0.5px;
    margin-bottom: 7px;
}

.lg-input-wrap { position: relative; }
.lg-input-icon {
    position: absolute; left: 14px; top: 50%; transform: translateY(-50%);
    color: rgba(13,50,114,0.35); font-size: 1rem; pointer-events: none;
}
.lg-input {
    width: 100%; padding: 13px 16px 13px 42px;
    background: #f5f8ff;
    border: 1.5px solid rgba(13,50,114,0.12);
    border-radius: 12px;
    font-family: 'DM Sans', sans-serif;
    font-size: 0.92rem; font-weight: 500; color: #1e293b;
    outline: none; transition: all 0.2s ease;
}
.lg-input:focus {
    background: #fff;
    border-color: #1565c0;
    box-shadow: 0 0 0 3px rgba(21,101,192,0.1);
}
.lg-input::placeholder { color: rgba(13,50,114,0.3); }

.lg-input-error { font-size: 0.78rem; color: #dc2626; font-weight: 600; margin-top: 5px; display: block; }

/* REMEMBER + FORGOT ROW */
.lg-meta {
    display: flex; align-items: center; justify-content: space-between;
    margin-bottom: 24px; margin-top: 4px;
}
.lg-remember {
    display: flex; align-items: center; gap: 8px;
    font-size: 0.82rem; color: rgba(13,50,114,0.6); font-weight: 500; cursor: pointer;
}
.lg-remember input[type="checkbox"] {
    width: 16px; height: 16px; border-radius: 4px;
    border: 1.5px solid rgba(13,50,114,0.25);
    accent-color: #0d3272; cursor: pointer;
}
.lg-forgot {
    font-size: 0.82rem; font-weight: 600; color: #1565c0;
    text-decoration: none; letter-spacing: 0.2px;
    transition: color 0.2s;
}
.lg-forgot:hover { color: #0d3272; text-decoration: underline; }

/* SUBMIT BTN */
.lg-btn {
    width: 100%;
    background: linear-gradient(135deg, #0d3272, #1565c0, #1976d2);
    color: #fff; border: none; border-radius: 14px;
    padding: 15px;
    font-family: 'Rajdhani', sans-serif; font-weight: 700;
    font-size: 1.2rem; letter-spacing: 2px; cursor: pointer;
    transition: all 0.25s ease;
    box-shadow: 0 8px 26px rgba(13,50,114,0.35);
    position: relative; overflow: hidden;
}
.lg-btn::before {
    content: ''; position: absolute; top: 0; left: -100%;
    width: 100%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.12), transparent);
    transition: left 0.5s ease;
}
.lg-btn:hover::before { left: 100%; }
.lg-btn:hover { transform: translateY(-2px); box-shadow: 0 14px 36px rgba(13,50,114,0.45); }
.lg-btn:active { transform: translateY(0); }

/* DIVIDER */
.lg-divider {
    display: flex; align-items: center; gap: 12px;
    margin: 24px 0 0;
}
.lg-divider-line { flex: 1; height: 1px; background: rgba(13,50,114,0.1); }
.lg-divider-text { font-size: 0.72rem; color: rgba(13,50,114,0.35); font-weight: 600; letter-spacing: 1px; }

/* FOOTER TEXT */
.lg-footer-note {
    text-align: center; margin-top: 28px;
    font-size: 0.72rem; color: rgba(13,50,114,0.3);
    font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .lg-left { display: none; }
    .lg-right { padding: 32px 24px; }
}
</style>

<div class="lg-bg"></div>
<div class="lg-dots"></div>
<div class="lg-blob1"></div>
<div class="lg-blob2"></div>
<div class="lg-blob3"></div>

<div class="lg-wrapper">

    <!-- LEFT — Branding -->
    <div class="lg-left">
        <div class="lg-left-orb1"></div>
        <div class="lg-left-orb2"></div>
        <div class="lg-left-line"></div>

        <div class="lg-left-content">
            <div class="lg-logo-wrap">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Imigrasi">
            </div>
            <div class="lg-brand-name">KANTOR IMIGRASI</div>
            <div class="lg-brand-sub">Kelas I Khusus TPI MAKASSAR</div>

            <div class="lg-mascot-group">
                <img src="{{ asset('images/mido1.png') }}" alt="Petugas">
                <img src="{{ asset('images/midipaspor.png') }}" alt="Paspor" style="height:130px;z-index:2;margin:0 -12px 12px;">
                <img src="{{ asset('images/mido3.png') }}" alt="Petugas">
            </div>

            <div class="lg-tagline">
                <strong>Sistem Antrian Digital</strong><br>
                Bhumi Pura Wira Wibawa
            </div>
        </div>
    </div>

    <!-- RIGHT — Form -->
    <div class="lg-right">
        <div class="lg-form-box">

            <div class="lg-form-header">
                <!-- <div class="lg-form-eyebrow">
                    <div class="lg-eyebrow-dot"></div>
                    Admin Panel
                </div> -->
                <div class="lg-form-title">Selamat Datang</div>
                <div class="lg-form-desc">Masuk untuk mengelola sistem antrian</div>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="lg-status">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="lg-field">
                    <label class="lg-label" for="email">Alamat Email</label>
                    <div class="lg-input-wrap">
                        <span class="lg-input-icon">✉</span>
                        <input
                            id="email" type="email" name="email"
                            value="{{ old('email') }}"
                            class="lg-input"
                            placeholder="email@imigrasi.go.id"
                            required autofocus autocomplete="username">
                    </div>
                    @error('email')
                        <span class="lg-input-error">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="lg-field">
                    <label class="lg-label" for="password">Kata Sandi</label>
                    <div class="lg-input-wrap">
                        <span class="lg-input-icon">🔒</span>
                        <input
                            id="password" type="password" name="password"
                            class="lg-input"
                            placeholder="••••••••"
                            required autocomplete="current-password">
                    </div>
                    @error('password')
                        <span class="lg-input-error">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember + Forgot -->
                <div class="lg-meta">
                    <label class="lg-remember">
                        <input type="checkbox" name="remember" id="remember_me">
                        Ingat saya
                    </label>
                    @if (Route::has('password.request'))
                        <a class="lg-forgot" href="{{ route('password.request') }}">
                            Lupa password?
                        </a>
                    @endif
                </div>

                <!-- Submit -->
                <button type="submit" class="lg-btn">
                    MASUK
                </button>
            </form>

            <div class="lg-divider">
                <div class="lg-divider-line"></div>
                <div class="lg-divider-text">IMIGRASI</div>
                <div class="lg-divider-line"></div>
            </div>

            <div class="lg-footer-note">
                Sistem Antrian Digital · Kantor Imigrasi Makassar
            </div>

        </div>
    </div>

</div>

</body>
</html>