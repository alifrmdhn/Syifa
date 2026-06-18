<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk · Imigrasi Makassar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
    --navy:#0a244d;
    --navy-light:#0d3272;
    --blue:#1565c0;
    --blue-light:#1976d2;
    --gold:#d4a843;
    --gold-light:#e8c96a;
}
body{
    font-family:'Inter',sans-serif;
    min-height:100vh;
    display:flex;
    background:#f2f5f9;
    overflow:hidden;
}
/* bg */
.lg-bg{
    position:fixed;inset:0;z-index:0;
    background:
        radial-gradient(ellipse 80% 60% at 10% 10%, rgba(10,36,77,0.06) 0%, transparent 60%),
        radial-gradient(ellipse 70% 50% at 90% 90%, rgba(21,101,192,0.05) 0%, transparent 55%),
        radial-gradient(ellipse 50% 40% at 85% 10%, rgba(212,168,67,0.04) 0%, transparent 50%),
        radial-gradient(ellipse 40% 35% at 5% 85%, rgba(10,36,77,0.04) 0%, transparent 50%),
        linear-gradient(155deg, #f5f8ff 0%, #eef3ff 40%, #f8faff 70%, #fff 100%);
}
.lg-grid{
    position:fixed;inset:0;z-index:0;
    background-image:linear-gradient(rgba(10,36,77,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(10,36,77,0.04) 1px,transparent 1px);
    background-size:48px 48px;
    mask-image:radial-gradient(ellipse 60% 50% at 50% 50%,black,transparent 70%);
    -webkit-mask-image:radial-gradient(ellipse 60% 50% at 50% 50%,black,transparent 70%);
}
.lg-orb{
    position:fixed;border-radius:50%;pointer-events:none;z-index:0;
}
.lg-orb--1{top:-140px;left:-100px;width:500px;height:500px;background:radial-gradient(circle,rgba(10,36,77,0.06) 0%,transparent 65%);animation:drift1 20s ease-in-out infinite;}
.lg-orb--2{bottom:-120px;right:-80px;width:420px;height:420px;background:radial-gradient(circle,rgba(21,101,192,0.06) 0%,transparent 65%);animation:drift2 24s ease-in-out infinite;}
.lg-orb--3{top:40%;right:8%;width:280px;height:280px;background:radial-gradient(circle,rgba(212,168,67,0.05) 0%,transparent 65%);animation:drift3 16s ease-in-out infinite;}
@keyframes drift1{0%,100%{transform:translate(0,0)}50%{transform:translate(36px,28px)}}
@keyframes drift2{0%,100%{transform:translate(0,0)}50%{transform:translate(-30px,-36px)}}
@keyframes drift3{0%,100%{transform:translate(0,0)}50%{transform:translate(-18px,22px)}}

/* layout */
.lg-wrap{
    display:flex;width:100%;min-height:100vh;position:relative;z-index:2;
}

/* left */
.lg-left{
    width:44%;flex-shrink:0;
    background:linear-gradient(145deg,var(--navy) 0%,var(--navy-light) 50%,var(--blue) 100%);
    display:flex;flex-direction:column;align-items:center;justify-content:center;
    padding:56px 44px;position:relative;overflow:hidden;
}
.lg-left::before{
    content:'';position:absolute;inset:0;
    background-image:radial-gradient(circle,rgba(255,255,255,0.05) 1px,transparent 1px);
    background-size:36px 36px;
}
.lg-left::after{
    content:'';position:absolute;top:0;right:0;bottom:0;width:1px;
    background:linear-gradient(180deg,transparent,rgba(255,255,255,0.12) 25%,rgba(255,255,255,0.12) 75%,transparent);
}
.lg-left-glow1{position:absolute;top:-80px;right:-80px;width:360px;height:360px;border-radius:50%;background:radial-gradient(circle,rgba(255,255,255,0.06) 0%,transparent 65%);}
.lg-left-glow2{position:absolute;bottom:-60px;left:-60px;width:280px;height:280px;border-radius:50%;background:radial-gradient(circle,rgba(212,168,67,0.1) 0%,transparent 65%);}
.lg-left-glow3{position:absolute;top:15%;right:8%;width:120px;height:120px;border-radius:50%;background:radial-gradient(circle,rgba(212,168,67,0.07) 0%,transparent 65%);}

.lg-left-inner{position:relative;z-index:2;text-align:center;max-width:380px;}

.lg-logo{
    width:100px;height:100px;
    background:rgba(255,255,255,0.1);
    border:1.5px solid rgba(255,255,255,0.15);
    border-radius:24px;
    display:flex;align-items:center;justify-content:center;
    margin:0 auto 24px;
    box-shadow:0 8px 32px rgba(0,0,0,0.18),inset 0 1px 0 rgba(255,255,255,0.12);
    backdrop-filter:blur(8px);
}
.lg-logo img{height:68px;object-fit:contain;filter:drop-shadow(0 4px 12px rgba(0,0,0,0.2));}

.lg-brand{
    font-family:'Plus Jakarta Sans',sans-serif;
    font-weight:800;font-size:1.35rem;
    color:#fff;letter-spacing:.5px;line-height:1.25;margin-bottom:4px;
}
.lg-brand-sub{
    font-size:.65rem;color:rgba(255,255,255,0.45);
    font-weight:600;letter-spacing:2.5px;text-transform:uppercase;margin-bottom:36px;
}
.lg-brand-accent{
    display:inline-block;width:32px;height:2.5px;border-radius:2px;
    background:linear-gradient(90deg,var(--gold),var(--gold-light));
    margin-bottom:32px;
}

.lg-mascots{
    display:flex;align-items:flex-end;justify-content:center;
    margin-bottom:28px;
}
.lg-mascots img{
    height:150px;object-fit:contain;
    filter:drop-shadow(0 10px 28px rgba(0,0,0,0.3));
    transition:transform .4s cubic-bezier(.34,1.56,.64,1);
}
.lg-mascots img:hover{transform:translateY(-10px);}
.lg-mascots img:first-child{margin-right:-14px;z-index:1;}
.lg-mascots img:last-child{margin-left:-14px;z-index:1;}
.lg-mascots img:nth-child(2){height:120px;z-index:2;margin:0 -10px 12px;}

.lg-tagline{
    font-family:'Plus Jakarta Sans',sans-serif;
    font-size:.72rem;color:rgba(255,255,255,0.4);
    letter-spacing:2px;text-transform:uppercase;font-weight:600;
}
.lg-tagline strong{color:rgba(255,255,255,0.7);font-weight:700;}

/* right */
.lg-right{
    flex:1;display:flex;align-items:center;justify-content:center;padding:40px 48px;
}
.lg-form{
    width:100%;max-width:400px;
}

.lg-form-head{margin-bottom:32px;}
.lg-form-badge{
    display:inline-flex;align-items:center;gap:6px;
    padding:4px 14px;border-radius:100px;
    background:rgba(10,36,77,0.05);border:1px solid rgba(10,36,77,0.08);
    font-size:.64rem;font-weight:700;color:rgba(10,36,77,0.5);
    letter-spacing:2px;text-transform:uppercase;margin-bottom:12px;
}
.lg-form-badge::before{
    content:'';width:5px;height:5px;border-radius:50%;
    background:#16a34a;box-shadow:0 0 6px #16a34a;
    animation:pulse-dot 2s ease-in-out infinite;
}
@keyframes pulse-dot{0%,100%{opacity:1}50%{opacity:.3}}
.lg-form-title{
    font-family:'Plus Jakarta Sans',sans-serif;
    font-weight:800;font-size:1.75rem;
    color:var(--navy);letter-spacing:-.3px;line-height:1.15;margin-bottom:6px;
}
.lg-form-desc{font-size:.85rem;color:rgba(10,36,77,0.4);font-weight:500;}

.lg-status{
    background:#f0fdf4;border:1px solid rgba(22,163,74,.2);
    border-radius:10px;padding:12px 16px;margin-bottom:20px;
    font-size:.82rem;color:#16a34a;font-weight:600;
}

.lg-grp{margin-bottom:18px;}
.lg-lbl{
    display:block;font-size:.74rem;font-weight:600;
    color:rgba(10,36,77,0.6);margin-bottom:6px;
}
.lg-inp-wrap{position:relative;}
.lg-inp-icon{
    position:absolute;left:13px;top:50%;transform:translateY(-50%);
    color:rgba(10,36,77,0.3);font-size:.95rem;pointer-events:none;
}
.lg-inp{
    width:100%;padding:12px 14px 12px 40px;
    background:#f5f8ff;border:1.5px solid rgba(10,36,77,0.1);
    border-radius:10px;font-family:'Inter',sans-serif;
    font-size:.9rem;font-weight:500;color:#1e293b;
    outline:none;transition:all .2s ease;
}
.lg-inp:focus{
    background:#fff;border-color:var(--blue);
    box-shadow:0 0 0 3px rgba(21,101,192,0.1);
}
.lg-inp::placeholder{color:rgba(10,36,77,0.25);}
.lg-err{font-size:.75rem;color:#dc2626;font-weight:600;margin-top:4px;display:block;}

.lg-row{
    display:flex;align-items:center;justify-content:space-between;
    margin-bottom:24px;margin-top:2px;
}
.lg-rem{
    display:flex;align-items:center;gap:8px;
    font-size:.8rem;color:rgba(10,36,77,0.55);font-weight:500;cursor:pointer;
}
.lg-rem input[type="checkbox"]{
    width:15px;height:15px;border-radius:4px;
    border:1.5px solid rgba(10,36,77,0.2);
    accent-color:var(--navy);cursor:pointer;
}
.lg-fgt{
    font-size:.8rem;font-weight:600;color:var(--blue);
    text-decoration:none;transition:color .2s;
}
.lg-fgt:hover{color:var(--navy);text-decoration:underline;}

.lg-btn{
    width:100%;border:none;border-radius:10px;padding:14px;
    font-family:'Plus Jakarta Sans',sans-serif;font-weight:700;
    font-size:1rem;letter-spacing:1.5px;cursor:pointer;
    color:#fff;
    background:linear-gradient(135deg,var(--navy),var(--blue));
    box-shadow:0 6px 24px rgba(10,36,77,0.3);
    transition:all .25s ease;position:relative;overflow:hidden;
}
.lg-btn::before{
    content:'';position:absolute;top:0;left:-100%;
    width:100%;height:100%;
    background:linear-gradient(90deg,transparent,rgba(255,255,255,0.1),transparent);
    transition:left .5s ease;
}
.lg-btn:hover::before{left:100%;}
.lg-btn:hover{transform:translateY(-2px);box-shadow:0 10px 32px rgba(10,36,77,0.4);}
.lg-btn:active{transform:translateY(0);}

.lg-div{
    display:flex;align-items:center;gap:12px;margin:24px 0 0;
}
.lg-div-line{flex:1;height:1px;background:rgba(10,36,77,0.08);}
.lg-div-txt{font-size:.68rem;color:rgba(10,36,77,0.3);font-weight:600;letter-spacing:1px;}

.lg-ft{
    text-align:center;margin-top:28px;
    font-size:.68rem;color:rgba(10,36,77,0.25);
    font-weight:600;letter-spacing:1.5px;text-transform:uppercase;
}

@media(max-width:768px){
    .lg-left{display:none}
    .lg-right{padding:32px 24px}
}
</style>

<div class="lg-bg"></div>
<div class="lg-grid"></div>
<div class="lg-orb lg-orb--1"></div>
<div class="lg-orb lg-orb--2"></div>
<div class="lg-orb lg-orb--3"></div>

<div class="lg-wrap">

    <div class="lg-left">
        <div class="lg-left-glow1"></div>
        <div class="lg-left-glow2"></div>
        <div class="lg-left-glow3"></div>
        <div class="lg-left-inner">
            <div class="lg-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Imigrasi">
            </div>
            <div class="lg-brand">KANTOR IMIGRASI</div>
            <div class="lg-brand-sub">Kelas I Khusus TPI Makassar</div>
            <div class="lg-brand-accent"></div>

            <div class="lg-mascots">
                <img src="{{ asset('images/mido1.png') }}" alt="Petugas">
                <img src="{{ asset('images/midipaspor.png') }}" alt="Paspor">
                <img src="{{ asset('images/mido3.png') }}" alt="Petugas">
            </div>

            <div class="lg-tagline">
                <strong>Sistem Antrian Digital</strong><br>
                Bhumi Pura Wira Wibawa
            </div>
        </div>
    </div>

    <div class="lg-right">
        <div class="lg-form">

            <div class="lg-form-head">
                <div class="lg-form-badge">Sistem Antrian</div>
                <div class="lg-form-title">Selamat Datang</div>
                <div class="lg-form-desc">Masuk untuk mengelola sistem antrian</div>
            </div>

            @if (session('status'))
                <div class="lg-status">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="lg-grp">
                    <label class="lg-lbl" for="email">Alamat Email</label>
                    <div class="lg-inp-wrap">
                        <span class="lg-inp-icon">&#9993;</span>
                        <input id="email" type="email" name="email"
                            value="{{ old('email') }}"
                            class="lg-inp"
                            placeholder="email@imigrasi.go.id"
                            required autofocus autocomplete="username">
                    </div>
                    @error('email')
                        <span class="lg-err">{{ $message }}</span>
                    @enderror
                </div>

                <div class="lg-grp">
                    <label class="lg-lbl" for="password">Kata Sandi</label>
                    <div class="lg-inp-wrap">
                        <span class="lg-inp-icon">&#128274;</span>
                        <input id="password" type="password" name="password"
                            class="lg-inp"
                            placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"
                            required autocomplete="current-password">
                    </div>
                    @error('password')
                        <span class="lg-err">{{ $message }}</span>
                    @enderror
                </div>

                <div class="lg-row">
                    <label class="lg-rem">
                        <input type="checkbox" name="remember" id="remember_me">
                        Ingat saya
                    </label>
                    @if (Route::has('password.request'))
                        <a class="lg-fgt" href="{{ route('password.request') }}">
                            Lupa password?
                        </a>
                    @endif
                </div>

                <button type="submit" class="lg-btn">MASUK</button>
            </form>

            <div class="lg-div">
                <div class="lg-div-line"></div>
                <div class="lg-div-txt">IMIGRASI</div>
                <div class="lg-div-line"></div>
            </div>

            <div class="lg-ft">
                Sistem Antrian Digital &middot; Kantor Imigrasi Makassar
            </div>

        </div>
    </div>

</div>

</body>
</html>
