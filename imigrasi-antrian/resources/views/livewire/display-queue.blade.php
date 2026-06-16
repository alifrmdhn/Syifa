{{-- display-queue.blade.php --}}
<div wire:poll.1s>
<style>
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

* { box-sizing: border-box; margin: 0; padding: 0; }

.dq-root {
    font-family: 'Plus Jakarta Sans', sans-serif;
    min-height: 100vh;
    width: 100%;
    background: #f0f4ff;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
}

/* Subtle top band */
.dq-root::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 6px;
    background: linear-gradient(90deg, #1a3a8f, #2e7de9, #1e56c8);
}

/* TOPBAR */
.dq-topbar {
    background: #fff;
    border-bottom: 1.5px solid #e2eaf8;
    padding: 14px 32px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 2px 8px rgba(30,86,200,0.07);
    position: relative;
    z-index: 10;
    margin-top: 6px;
}

.dq-topbar-left {
    display: flex;
    align-items: center;
    gap: 14px;
}

.dq-topbar-left img {
    height: 44px;
    object-fit: contain;
}

.dq-topbar-title {
    font-weight: 700;
    font-size: 1rem;
    color: #1a2a4a;
    line-height: 1.3;
    letter-spacing: 0.5px;
}

.dq-topbar-sub {
    font-size: 0.62rem;
    color: #6b7fa3;
    letter-spacing: 2px;
    text-transform: uppercase;
    font-weight: 600;
    margin-top: 2px;
}

.dq-topbar-right { text-align: right; }

.dq-time {
    font-weight: 800;
    font-size: 1.8rem;
    color: #1a3a8f;
    letter-spacing: 2px;
    line-height: 1;
}

.dq-date {
    font-size: 0.65rem;
    color: #6b7fa3;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    font-weight: 600;
    margin-top: 3px;
}

/* MAIN */
.dq-main {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    padding: 20px;
}

/* MASCOTS */
.dq-mascot-l {
    position: absolute;
    bottom: 0; left: 0;
    height: 80%;
    max-height: 620px;
    object-fit: contain;
    filter: drop-shadow(0 4px 20px rgba(30,86,200,0.1));
    z-index: 2;
}

.dq-mascot-r {
    position: absolute;
    bottom: 0; right: 0;
    height: 80%;
    max-height: 620px;
    object-fit: contain;
    filter: drop-shadow(0 4px 20px rgba(30,86,200,0.1));
    z-index: 2;
}

/* CENTER DISPLAY */
.dq-center {
    position: relative;
    z-index: 10;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.dq-center-card {
    background: #fff;
    border: 2px solid #e2eaf8;
    border-radius: 28px;
    padding: 44px 80px;
    box-shadow: 0 8px 40px rgba(30,86,200,0.1), 0 2px 8px rgba(0,0,0,0.04);
    position: relative;
}

/* Blue top stripe on card */
.dq-center-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 5px;
    background: linear-gradient(90deg, #1a3a8f, #2e7de9);
    border-radius: 28px 28px 0 0;
}

.dq-eyebrow {
    font-size: 0.72rem;
    font-weight: 700;
    color: #6b7fa3;
    letter-spacing: 4px;
    text-transform: uppercase;
    margin-bottom: 12px;
}

.dq-number {
    font-weight: 800;
    font-size: clamp(7rem, 18vw, 15rem);
    color: #1a3a8f;
    line-height: 1;
    letter-spacing: 6px;
}

.dq-divider {
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, #1e56c8, #2e7de9);
    border-radius: 2px;
    margin: 16px auto;
}

.dq-loket-row {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #1a3a8f;
    border-radius: 50px;
    padding: 10px 28px;
}

.dq-loket-dot {
    width: 8px;
    height: 8px;
    background: #7ee8a2;
    border-radius: 50%;
    animation: dqBlink 1.2s ease-in-out infinite;
}

@keyframes dqBlink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.2; }
}

.dq-loket-txt {
    font-weight: 700;
    font-size: 1.3rem;
    color: #fff;
    letter-spacing: 2px;
}

/* EMPTY STATE */
.dq-empty {
    font-weight: 700;
    font-size: clamp(1.2rem, 3vw, 2rem);
    color: #c0cfe8;
    letter-spacing: 3px;
    padding: 40px 20px;
    text-align: center;
}

.dq-empty-icon {
    font-size: 3rem;
    margin-bottom: 12px;
    opacity: 0.4;
}

/* TICKER */
.dq-ticker {
    background: #1a3a8f;
    padding: 11px 0;
    display: flex;
    align-items: center;
    overflow: hidden;
    position: relative;
    z-index: 10;
}

.dq-ticker-badge {
    flex-shrink: 0;
    background: #fff;
    color: #1a3a8f;
    font-weight: 800;
    font-size: 0.7rem;
    padding: 5px 18px;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-right: 20px;
    border-radius: 0 4px 4px 0;
}

.dq-ticker-text {
    font-weight: 600;
    font-size: 0.82rem;
    color: rgba(255,255,255,0.8);
    letter-spacing: 1.5px;
    white-space: nowrap;
    animation: dqTicker 22s linear infinite;
    display: inline-block;
}

@keyframes dqTicker {
    0%   { transform: translateX(100vw); }
    100% { transform: translateX(-100%); }
}
</style>

<div class="dq-root">

    <!-- TOPBAR -->
    <div class="dq-topbar">
        <div class="dq-topbar-left">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            <div>
                <div class="dq-topbar-title">KANTOR IMIGRASI KELAS I KHUSUS TPI MAKASSAR</div>
                <div class="dq-topbar-sub">Sistem Antrian Digital · Layanan Paspor</div>
            </div>
        </div>
        <div class="dq-topbar-right">
            <div class="dq-time" id="dq-clock">--:--:--</div>
            <div class="dq-date" id="dq-date">...</div>
        </div>
    </div>

    <!-- MAIN -->
    <div class="dq-main">

        <img src="{{ asset('images/midi.png') }}"  alt="" class="dq-mascot-l">
        <img src="{{ asset('images/midi1.png') }}" alt="" class="dq-mascot-r">

        <div class="dq-center">
            @if($current)
                <div class="dq-center-card">
                    <div class="dq-eyebrow">◈ Nomor Antrian Saat Ini ◈</div>
                    <div class="dq-number">
                        {{ $current->kode }}{{ str_pad($current->nomor, 3, '0', STR_PAD_LEFT) }}
                    </div>
                    <div class="dq-divider"></div>
                    <div class="dq-loket-row">
                        <div class="dq-loket-dot"></div>
                        <div class="dq-loket-txt">{{ $current->loket }}</div>
                    </div>
                </div>
            @else
                <div class="dq-center-card">
                    <div class="dq-empty-icon">🕐</div>
                    <div class="dq-empty">BELUM ADA PANGGILAN</div>
                </div>
            @endif
        </div>

    </div>

    <!-- TICKER -->
    <div class="dq-ticker">
        <div class="dq-ticker-badge">INFO</div>
        <span class="dq-ticker-text">
            SELAMAT DATANG DI KANTOR IMIGRASI KELAS I KHUSUS TPI MAKASSAR &nbsp;·&nbsp;
            HARAP SIAPKAN DOKUMEN ASLI DAN FOTOCOPY A4 &nbsp;·&nbsp;
            PERHATIKAN LAYAR MONITOR UNTUK NOMOR ANTRIAN ANDA &nbsp;·&nbsp;
            LAYANAN PASPOR TERSEDIA SETIAP HARI KERJA PUKUL 08.00 - 15.00 WITA &nbsp;·&nbsp;
        </span>
    </div>

</div>

<script>
(function(){
    function tick() {
        const now  = new Date();
        const days   = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
        const months = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];
        const t = [now.getHours(), now.getMinutes(), now.getSeconds()]
            .map(n => String(n).padStart(2,'0')).join(':');
        const d = `${days[now.getDay()]}, ${now.getDate()} ${months[now.getMonth()]} ${now.getFullYear()}`;
        const c = document.getElementById('dq-clock');
        const dt = document.getElementById('dq-date');
        if (c) c.textContent = t;
        if (dt) dt.textContent = d;
    }
    tick(); setInterval(tick, 1000);
})();
</script>

</div>