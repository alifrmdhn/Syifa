{{-- home-page.blade.php --}}
<div wire:poll.1s>

<style>

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

:root{
--navy:#103060;
--navy-mid:#154080;
--navy-lite:#1a5299;
--sky:#2e7de9;
--ice:#e8f0fe;
--ice-mid:#c8d9fb;
--bg:#f4f7fd;
--border:#dce6f8;
--text-1:#0d1f3c;
--text-2:#3a4f72;
--text-3:#7a92b8;
--sh-md:0 4px 20px rgba(16,48,96,.10);
--sh-lg:0 8px 40px rgba(16,48,96,.14);
}

*,*::before,*::after{
box-sizing:border-box;
margin:0;
padding:0;
}

.hp{
font-family:'Inter',sans-serif;
min-height:100vh;
background:var(--bg);
}

/* TOPBAR */

.hp-top{
background:var(--navy);
padding:0 28px;
display:flex;
align-items:center;
justify-content:space-between;
height:60px;
position:sticky;
top:0;
z-index:100;
box-shadow:0 2px 16px rgba(16,48,96,.35);
}

.hp-top-l{
display:flex;
align-items:center;
gap:12px;
}

.hp-top-l img{
height:36px;
object-fit:contain;
}

.hp-brand{
font-weight:700;
font-size:.88rem;
color:#fff;
line-height:1.25;
}

.hp-brand-sub{
font-size:.58rem;
color:rgba(255,255,255,.5);
letter-spacing:2px;
text-transform:uppercase;
}

.hp-clk{
background:rgba(255,255,255,.1);
border:1px solid rgba(255,255,255,.2);
border-radius:50px;
padding:5px 18px;
font-weight:700;
font-size:.92rem;
color:#fff;
letter-spacing:2px;
}

/* HERO */

.hp-hero{
background:linear-gradient(
120deg,
var(--navy) 0%,
var(--navy-mid) 55%,
var(--navy-lite) 100%
);
padding:30px 28px 0;
position:relative;
overflow:hidden;
}

.hp-hero::after{
content:'';
position:absolute;
bottom:-1px;
left:0;
right:0;
height:38px;
background:var(--bg);
clip-path:ellipse(55% 100% at 50% 100%);
}

.hp-hero::before{
content:'';
position:absolute;
right:-60px;
top:-60px;
width:280px;
height:280px;
border-radius:50%;
background:rgba(255,255,255,.04);
}

.hp-hero-in{
max-width:980px;
margin:0 auto;
display:flex;
align-items:flex-end;
gap:16px;
}

.hp-hero-txt{
flex:1;
padding-bottom:46px;
}

.hp-chip{
display:inline-flex;
align-items:center;
gap:7px;
background:rgba(255,255,255,.12);
border:1px solid rgba(255,255,255,.22);
border-radius:50px;
padding:4px 14px;
font-size:.66rem;
font-weight:700;
color:rgba(255,255,255,.85);
letter-spacing:2px;
text-transform:uppercase;
margin-bottom:12px;
}

.hp-chip-dot{
width:6px;
height:6px;
background:#7ee8a2;
border-radius:50%;
animation:cb 1.5s ease-in-out infinite;
}

@keyframes cb{
0%,100%{opacity:1}
50%{opacity:.2}
}

.hp-h1{
font-weight:800;
font-size:1.65rem;
color:#fff;
line-height:1.2;
margin-bottom:5px;
}

.hp-h1 span{
color:#93c5fd;
}

.hp-sub{
font-size:.8rem;
color:rgba(255,255,255,.6);
font-weight:500;
}

.hp-mascots{
display:flex;
align-items:flex-end;
flex-shrink:0;
}

.hp-mascots img{
object-fit:contain;
filter:drop-shadow(0 6px 16px rgba(0,0,0,.22));
transition:transform .3s;
}

.hp-mascots img:hover{
transform:translateY(-6px);
}

/* BODY */

.hp-body{
max-width:980px;
margin:0 auto;
padding:26px 20px 60px;
}

.hp-sec-hd{
display:flex;
align-items:center;
gap:10px;
margin-bottom:16px;
}

.hp-sec-line{
flex:1;
height:1px;
background:var(--border);
}

.hp-sec-txt{
font-size:.66rem;
font-weight:700;
color:var(--text-3);
letter-spacing:2.5px;
text-transform:uppercase;
white-space:nowrap;
}

/* CARDS */

.hp-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(420px,1fr));
gap:14px;
}

.hp-ca{
display:block;
text-decoration:none;
}

.hp-ca:hover .hp-card{
transform:translateY(-3px);
box-shadow:var(--sh-lg);
border-color:var(--ice-mid);
}

.hp-card{
background:#fff;
border:1.5px solid var(--border);
border-radius:18px;
padding:20px;
display:flex;
align-items:flex-start;
gap:14px;
box-shadow:var(--sh-md);
transition:all .22s;
position:relative;
overflow:hidden;
min-height:145px;
}

.hp-card::before{
content:'';
position:absolute;
left:0;
top:0;
bottom:0;
width:5px;
background:var(--ca);
border-radius:18px 0 0 18px;
}

.hp-card-off{
opacity:.55;
cursor:not-allowed;
background:#fafbff;
}

/* ICON LOKET */

.hp-ico{
    width:90px;
    height:70px;
    border-radius:15px;
    background:var(--ca);
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:800;
    font-size:.9rem;
    color:#fff;
    flex-shrink:0;
    box-shadow:0 4px 14px rgba(0,0,0,.12);
}

/* TEXT */

.hp-cname{
font-weight:800;
font-size:1rem;
color:var(--text-1);
margin-bottom:8px;
line-height:1.3;
}

.hp-cdesc{
font-size:.74rem;
line-height:1.6;
color:#64748b;
font-weight:500;
}

.hp-ctag{
display:inline-flex;
align-items:center;
gap:4px;
background:#fff5f5;
border:1px solid #fecaca;
color:#dc2626;
font-size:.62rem;
font-weight:700;
padding:2px 9px;
border-radius:50px;
margin-top:10px;
letter-spacing:.5px;
}

.hp-arr{
width:34px;
height:34px;
border-radius:50%;
background:var(--ci);
border:1.5px solid var(--cb);
display:flex;
align-items:center;
justify-content:center;
color:var(--ca);
font-size:.9rem;
flex-shrink:0;
transition:all .2s;
margin-top:auto;
}

.hp-ca:hover .hp-arr{
background:var(--ca);
color:#fff;
}

/* THEME */

.tA{
--ca:#d97706;
--ci:#fffbeb;
--cb:#fde68a;
}

.tB{
--ca:#7c3aed;
--ci:#f5f3ff;
--cb:#ddd6fe;
}

.tC{
--ca:#103060;
--ci:#e8f0fe;
--cb:#c8d9fb;
}

.tD{
--ca:#dc2626;
--ci:#fff5f5;
--cb:#fecaca;
}

/* FOOTER */

.hp-foot{
text-align:center;
padding:18px;
font-size:.66rem;
color:var(--text-3);
letter-spacing:1.5px;
}

/* MOBILE */

@media(max-width:768px){

.hp-grid{
grid-template-columns:1fr;
}

.hp-hero-in{
flex-direction:column;
align-items:flex-start;
}

.hp-mascots{
width:100%;
justify-content:center;
}

.hp-card{
min-height:auto;
}

}

</style>

<div class="hp">

    {{-- TOPBAR --}}
    <div class="hp-top">

        <div class="hp-top-l">

            <img src="{{ asset('images/logo.png') }}" alt="Logo">

            <div>

                <div class="hp-brand">
                    IMIGRASI MAKASSAR
                </div>

                <div class="hp-brand-sub">
                    Kantor Imigrasi Kelas I Khusus TPI Makassar
                </div>

            </div>

        </div>

        <div class="hp-clk" id="hp-clk" wire:ignore>
            --:--:--
        </div>

    </div>

    {{-- HERO --}}
    <div class="hp-hero">

        <div class="hp-hero-in">

            <div class="hp-hero-txt">

                <div class="hp-chip">

                    <div class="hp-chip-dot"></div>

                    Sistem Antrian Digital

                </div>

                <div class="hp-h1">

                    LAYANAN ANTRIAN<br>

                    <span>CUSTOMER SERVICE</span>

                </div>

                <div class="hp-sub">
                    Kantor Imigrasi Kelas I Khusus TPI Makassar
                </div>

            </div>

            <div class="hp-mascots">

                <img
                    src="{{ asset('images/mido1.png') }}"
                    style="height:180px;margin-right:-16px;z-index:2;"
                    alt=""
                >

                <img
                    src="{{ asset('images/paspor.png') }}"
                    style="height:125px;margin-bottom:5px;"
                    alt=""
                >

                <img
                    src="{{ asset('images/midi1.png') }}"
                    style="height:180px;margin-left:-16px;z-index:2;"
                    alt=""
                >

            </div>

        </div>

    </div>

    {{-- BODY --}}
    <div class="hp-body">

        <div class="hp-sec-hd">

            <div class="hp-sec-line"></div>

            <div class="hp-sec-txt">
                Pilih Jenis Layanan
            </div>

            <div class="hp-sec-line"></div>

        </div>

        <div class="hp-grid">

            @foreach($layanan as $item)

                @php

                    $icons = [
                        'A' => 'HAM',
                        'B' => 'VIP',
                        'C' => 'REGULER',
                        'D' => 'BAP'
                    ];

                    $icon = $icons[$item->kode] ?? '•';

                @endphp

                @if($item->is_open)

                    <a href="/survey/{{ $item->kode }}" class="hp-ca t{{ $item->kode }}">

                @else

                    <div class="hp-ca t{{ $item->kode }}">

                @endif

                    <div class="hp-card {{ !$item->is_open ? 'hp-card-off' : '' }}">

                        {{-- NOMOR LOKET --}}
                        <div class="hp-ico">
                            {{ $icon }}
                        </div>

                        {{-- CONTENT --}}
                        <div style="flex:1">

                            <div class="hp-cname">
                                {{ $item->nama }}
                            </div>

                            {{-- DESKRIPSI --}}
                            <div class="hp-cdesc">

                                @if($item->kode == 'A')

                                    Layanan prioritas untuk lansia,
                                    balita, ibu hamil,
                                    dan penyandang disabilitas.

                                @elseif($item->kode == 'B')

                                    Layanan percepatan paspor
                                    selesai dalam 1 hari kerja.

                                @elseif($item->kode == 'C')

                                    Layanan pendaftaran online
                                    melalui aplikasi M-Paspor.

                                @elseif($item->kode == 'D')

                                    Layanan paspor rusak,
                                    hilang, dan perubahan data paspor.

                                @endif

                            </div>

                            {{-- STATUS --}}
                            @if(!$item->is_open)

                                <div class="hp-ctag">
                                    ⊗ Mohon Maaf Antrian Ditutup dan Buka Kembali Jam 13:00 WITA
                                </div>

                            @endif

                        </div>

                        {{-- ARROW --}}
                        @if($item->is_open)

                            <div class="hp-arr">
                                →
                            </div>

                        @endif

                    </div>

                @if($item->is_open)

                    </a>

                @else

                    </div>

                @endif

            @endforeach

        </div>

    </div>

    {{-- FOOTER --}}
    <div class="hp-foot">

        SISTEM ANTRIAN DIGITAL ·
        KANTOR IMIGRASI KELAS I KHUSUS TPI MAKASSAR

    </div>

</div>

<script>

(function(){

    function t(){

        var n = new Date(),

        p = function(v){
            return String(v).padStart(2,'0')
        };

        var el = document.getElementById('hp-clk');

        if(el){

            el.textContent =
                p(n.getHours()) + ':' +
                p(n.getMinutes()) + ':' +
                p(n.getSeconds());

        }

    }

    t();

    setInterval(t,1000);

})();

</script>

</div>