{{-- admin-monitor.blade.php --}}
<div wire:poll.1s>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function confirmResetQueue()
{
    Swal.fire({
        icon: 'warning',
        title: 'Tutup Antrian Hari Ini?',
        html: `
            <div style="font-size:15px">
                Semua nomor antrian akan dihapus dan
                penomoran akan kembali dari <b>001</b>.
                <br><br>
                Apakah Anda yakin?
            </div>
        `,
        showCancelButton: true,
        confirmButtonText: 'Ya, Reset Antrian',
        cancelButtonText: 'Batal',
        confirmButtonColor: '#dc2626',
        cancelButtonColor: '#64748b',
        reverseButtons: true,
    }).then((result) => {

        if(result.isConfirmed){

            @this.call('closeQueue');

        }

    });
}

document.addEventListener('livewire:init', () => {

    Livewire.on('queue-reset-success', () => {
      Livewire.on('services-opened', () => {

    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: 'Semua layanan telah dibuka kembali.',
        timer: 2000,
        showConfirmButton: false
    });

});

        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Semua antrian telah direset.',
            timer: 2000,
            showConfirmButton: false
        });

    });

});
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
:root{--navy:#103060;--navy-mid:#154080;--navy-lite:#1a5299;--ice:#e8f0fe;--ice-mid:#c8d9fb;--bg:#f4f7fd;--border:#dce6f8;--text-1:#0d1f3c;--text-2:#3a4f72;--text-3:#7a92b8;--sh-md:0 4px 20px rgba(16,48,96,.09);--sh-lg:0 8px 36px rgba(16,48,96,.13);}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
.am{font-family:'Inter',sans-serif;min-height:100vh;background:var(--bg);}

/* NAV */
.am-nav{background:var(--navy);height:60px;padding:0 26px;display:flex;align-items:center;justify-content:space-between;position:sticky;top:0;z-index:100;box-shadow:0 2px 16px rgba(16,48,96,.32);}
.am-nav-l{display:flex;align-items:center;gap:11px;}
.am-nav-l img{height:34px;object-fit:contain;}
.am-brand{font-weight:700;font-size:.85rem;color:#fff;}
.am-brand-sub{font-size:.57rem;color:rgba(255,255,255,.5);letter-spacing:1.8px;text-transform:uppercase;}
.am-nav-r{display:flex;align-items:center;gap:9px;}

/* CHIP + DROPDOWN */
.am-chip{display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.10);border:1px solid rgba(255,255,255,.18);border-radius:50px;padding:5px 13px 5px 8px;position:relative;cursor:pointer;user-select:none;}
.am-av{width:26px;height:26px;background:rgba(255,255,255,.2);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.72rem;color:#fff;}
.am-uname{font-weight:700;font-size:.78rem;color:#fff;}
.am-uloket{font-size:.6rem;color:rgba(255,255,255,.55);}
.am-caret{font-size:.55rem;color:rgba(255,255,255,.55);margin-left:2px;transition:transform .18s ease;line-height:1;}
.am-chip.open .am-caret{transform:rotate(180deg);}

.am-dropdown{
    position:absolute;top:calc(100% + 12px);right:0;
    background:#fff;
    border:1.5px solid rgba(16,48,96,.10);
    border-radius:16px;
    box-shadow:0 12px 40px rgba(16,48,96,.18);
    min-width:210px;
    overflow:hidden;
    opacity:0;
    pointer-events:none;
    transform:translateY(-8px);
    transition:opacity .18s ease, transform .18s ease;
    z-index:999;
}
.am-dropdown.open{opacity:1;pointer-events:auto;transform:translateY(0);}

.am-dd-head{padding:15px 17px 13px;background:#f8faff;border-bottom:1px solid rgba(16,48,96,.08);}
.am-dd-name{font-weight:700;font-size:.83rem;color:#0d1f3c;margin-bottom:2px;}
.am-dd-email{font-size:.69rem;color:#7a92b8;font-weight:500;}
.am-dd-loket{display:inline-flex;align-items:center;gap:4px;margin-top:7px;background:var(--ice);border:1px solid var(--ice-mid);border-radius:50px;padding:2px 10px;font-size:.63rem;font-weight:700;color:var(--navy-mid);}

.am-dd-sep{height:1px;background:rgba(16,48,96,.07);}

.am-dd-item{
    display:flex;align-items:center;gap:10px;
    padding:11px 17px;
    font-size:.8rem;font-weight:600;
    color:#3a4f72;
    cursor:pointer;
    transition:background .15s;
    text-decoration:none;
    width:100%;border:none;background:none;
    font-family:'Inter',sans-serif;
    text-align:left;
}
.am-dd-item:hover{background:#f4f7fd;color:#103060;}
.am-dd-item .am-dd-ico{font-size:.9rem;width:20px;text-align:center;}
.am-dd-item.danger{color:#dc2626;}
.am-dd-item.danger:hover{background:#fff5f5;color:#b91c1c;}

/* CLK */
.am-clk{background:rgba(255,255,255,.10);border:1px solid rgba(255,255,255,.18);border-radius:50px;padding:5px 16px;font-weight:700;font-size:.88rem;color:#fff;letter-spacing:2px;}

/* CONTENT */
.am-body{max-width:1080px;margin:0 auto;padding:22px 18px 60px;}

/* CARD */
.am-card{background:#fff;border:1.5px solid var(--border);border-radius:18px;overflow:hidden;margin-bottom:16px;box-shadow:var(--sh-md);}
.am-card-top{border-left:4px solid var(--navy);background:#f8faff;border-bottom:1.5px solid var(--border);padding:12px 20px;display:flex;align-items:center;justify-content:space-between;}
.am-card-ttl{font-weight:700;font-size:.75rem;color:var(--text-1);letter-spacing:1.5px;text-transform:uppercase;}
.am-live{display:flex;align-items:center;gap:5px;background:#f0fdf4;border:1px solid #86efac;border-radius:50px;padding:3px 11px;font-size:.63rem;font-weight:700;color:#15803d;letter-spacing:1.5px;}
.am-ldot{width:6px;height:6px;background:#16a34a;border-radius:50%;animation:ld 1.5s ease-in-out infinite;}
@keyframes ld{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.3;transform:scale(.8)}}

/* CURRENT */
.am-cur{padding:24px 20px;display:flex;align-items:center;gap:20px;}
.am-mascot img{height:110px;object-fit:contain;filter:drop-shadow(0 4px 10px rgba(0,0,0,.1));}
.am-num-zone{flex:1;text-align:center;}
.am-num-lbl{font-size:.62rem;font-weight:700;color:var(--navy-lite);letter-spacing:3px;text-transform:uppercase;margin-bottom:5px;}
.am-num{font-weight:800;font-size:clamp(3rem,8vw,5.5rem);color:var(--navy);letter-spacing:3px;line-height:1;}
.am-num-loket{display:inline-flex;align-items:center;gap:6px;background:var(--ice);border:1.5px solid var(--ice-mid);color:var(--navy-mid);padding:5px 16px;border-radius:50px;font-weight:700;font-size:.78rem;margin-top:9px;}
.am-empty{font-weight:600;font-size:1.2rem;color:#c0cfe8;letter-spacing:2px;padding:20px;}

/* CONTROLS */
.am-ctrl{padding:0 20px 20px;border-top:1.5px solid var(--border);padding-top:16px;display:flex;flex-wrap:wrap;gap:9px;}
.am-btn{font-family:'Inter',sans-serif;font-weight:700;padding:10px 20px;border-radius:10px;font-size:.82rem;border:none;cursor:pointer;transition:all .18s;display:flex;align-items:center;gap:6px;}
.am-btn:hover{transform:translateY(-2px);}
.am-btn-prev{background:#f1f5f9;color:#475569;border:1.5px solid #e2e8f0;}
.am-btn-prev:hover{background:#e2e8f0;}
.am-btn-next{background:linear-gradient(135deg,#15803d,#16a34a);color:#fff;flex:1;justify-content:center;box-shadow:0 4px 14px rgba(22,163,74,.28);}
.am-btn-next:hover{box-shadow:0 6px 20px rgba(22,163,74,.42);}
.am-btn-close{background:linear-gradient(135deg,#dc2626,#ef4444);color:#fff;box-shadow:0 4px 14px rgba(220,38,38,.24);}
.am-btn-close:hover{box-shadow:0 6px 20px rgba(220,38,38,.38);}

/* LAYANAN */
.am-lay-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));}
.am-lay-item{padding:16px 18px;border-right:1.5px solid var(--border);border-bottom:1.5px solid var(--border);display:flex;flex-direction:column;gap:9px;}
.am-lay-name{font-size:.78rem;font-weight:600;color:var(--text-1);line-height:1.4;}
.am-toggle{font-family:'Inter',sans-serif;font-weight:700;font-size:.72rem;padding:7px 12px;border-radius:8px;cursor:pointer;transition:all .18s;border:none;}
.am-tog-open{background:#fff5f5;color:#dc2626;border:1.5px solid #fecaca;}
.am-tog-open:hover{background:#fecaca;}
.am-tog-closed{background:#f0fdf4;color:#15803d;border:1.5px solid #86efac;}
.am-tog-closed:hover{background:#dcfce7;}

/* QUEUE GRID */
.am-q-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(110px,1fr));gap:9px;padding:18px;}
.am-qbtn{background:linear-gradient(135deg,var(--ice),#dbeafe);border:1.5px solid var(--ice-mid);border-radius:12px;padding:14px 9px;text-align:center;cursor:pointer;transition:all .18s;color:var(--navy);}
.am-qbtn:hover{background:linear-gradient(135deg,#dbeafe,#bfdbfe);transform:translateY(-3px);box-shadow:0 6px 16px rgba(16,48,96,.18);border-color:#93c5fd;}
.am-qnum{font-weight:800;font-size:1.55rem;letter-spacing:1.5px;line-height:1;color:var(--navy);}
.am-qloket{font-size:.6rem;color:var(--navy-lite);font-weight:600;margin-top:4px;}
.am-empty-q{grid-column:1/-1;text-align:center;padding:32px 20px;}
.am-empty-q img{height:70px;opacity:.3;margin:0 auto 9px;display:block;object-fit:contain;}
.am-empty-q-t{font-size:.78rem;color:var(--text-3);font-weight:600;letter-spacing:1.5px;text-transform:uppercase;}
.am-cpill{background:#fffbeb;border:1px solid #fde68a;color:#92400e;font-size:.62rem;font-weight:700;padding:2px 10px;border-radius:50px;letter-spacing:1px;}
</style>

<div class="am">
<div class="am-nav">
  <div class="am-nav-l">
    <img src="{{ asset('images/logo.png') }}" alt="Logo">
    <div><div class="am-brand">IMIGRASI MAKASSAR</div><div class="am-brand-sub">Admin Monitor · Panel Antrian</div></div>
  </div>
  <div class="am-nav-r">

    {{-- User Chip with Dropdown --}}
    <div
    class="am-chip"
    id="am-user-chip"
    onclick="toggleAmDropdown(event)"
    wire:ignore
>
      <div class="am-av">{{ strtoupper(substr(auth()->user()->name,0,2)) }}</div>
      <div>
        <div class="am-uname">{{ auth()->user()->name }}</div>
        <div class="am-uloket">{{ auth()->user()->loket }}</div>
      </div>
      <span class="am-caret">▼</span>

      <div class="am-dropdown" id="am-dropdown">
        {{-- Header --}}
        <div class="am-dd-head">
          <div class="am-dd-name">{{ auth()->user()->name }}</div>
          <div class="am-dd-email">{{ auth()->user()->email }}</div>
          <div class="am-dd-loket">◉ {{ auth()->user()->loket }}</div>
        </div>

        <div class="am-dd-sep"></div>

        {{-- Logout --}}
        <form
    id="logout-form"
    method="POST"
    action="{{ route('logout') }}"
    onclick="event.stopPropagation()"
>
    @csrf

    <button
        type="button"
        class="am-dd-item danger"
        onclick="confirmLogout(event)"
    >
        <span class="am-dd-ico">⏻</span>
        Keluar
    </button>
</form>
</div> <!-- am-dropdown -->

</div> <!-- am-chip -->
    <div class="am-clk" id="am-clk" wire:ignore>--:--:--</div>
  </div>
</div>

<div class="am-body">

  <!-- CURRENT -->
  <div class="am-card">
    <div class="am-card-top">
      <div class="am-card-ttl">Nomor Saat Ini</div>
      <div class="am-live"><div class="am-ldot"></div>LIVE</div>
    </div>
    <div class="am-cur">
      <div class="am-mascot"><img src="{{ asset('images/mido2.png') }}" alt=""></div>
      <div class="am-num-zone">
        @if($current)
          <div class="am-num-lbl">Sedang Dilayani</div>
          <div class="am-num">{{ $current->kode }}{{ str_pad($current->nomor,3,'0',STR_PAD_LEFT) }}</div>
          <div class="am-num-loket">◉ {{ $current->loket }}</div>
        @else
          <div class="am-empty">— BELUM ADA ANTRIAN —</div>
        @endif
      </div>
      <div class="am-mascot"><img src="{{ asset('images/mido1.png') }}" alt=""></div>
    </div>
    <div class="am-ctrl">
      <button wire:click="previousQueue" class="am-btn am-btn-prev">
    ← Previous
</button>

<button wire:click="nextQueue" class="am-btn am-btn-next">
    ✓ Panggil Berikutnya
</button>

<button
    wire:click="openAllServices"
    class="am-btn"
    style="
        background:linear-gradient(135deg,#2563eb,#3b82f6);
        color:#fff;
        box-shadow:0 4px 14px rgba(37,99,235,.25);
    "
>
    🔓 Buka Semua Layanan
</button>

<button
    onclick="confirmResetQueue()"
    class="am-btn am-btn-close"
>
    ✕ Tutup Antrian
</button>
    </div>
  </div>

  <!-- LAYANAN -->
  <div class="am-card">
    <div class="am-card-top"><div class="am-card-ttl">Kelola Status Layanan</div></div>
    <div class="am-lay-grid">

@foreach($layanans as $lay)

@php
    $showLayanan =
        auth()->user()->loket == 'Admin' ||
        (
            auth()->user()->loket == 'Loket 1' &&
            in_array($lay->kode, ['A','B'])
        ) ||
        (
            auth()->user()->loket == 'Loket 2' &&
            in_array($lay->kode, ['C','D'])
        );
@endphp

@if($showLayanan)
<div class="am-lay-item">
    <div class="am-lay-name">
    {{ $lay->nama }} ({{ $lay->kode }})
</div>
    @if($lay->is_open)

<button
    onclick="confirmCloseLayanan('{{ $lay->kode }}')"
    class="am-toggle am-tog-open"
>
    ⊗ Tutup Layanan
</button>

@else

<button
    wire:click="toggleLayanan('{{ $lay->kode }}')"
    class="am-toggle am-tog-closed"
>
    ⊕ Buka Layanan
</button>

@endif
</div>
@endif

@endforeach

    </div>
  </div>

  <!-- QUEUE -->
  <div class="am-card">
    <div class="am-card-top">
      <div class="am-card-ttl">Daftar Antrian Menunggu</div>
      <div class="am-cpill">{{ count($queues) }} antrean</div>
    </div>
    <div class="am-q-grid">
      @forelse($queues as $q)
        <button wire:click="callQueue({{ $q->id }})" class="am-qbtn">
          <div class="am-qnum">{{ $q->kode }}{{ str_pad($q->nomor,3,'0',STR_PAD_LEFT) }}</div>
          <div class="am-qloket">{{ $q->loket }}</div>
        </button>
      @empty
        <div class="am-empty-q">
          <img src="{{ asset('images/mido3.png') }}" alt="">
          <div class="am-empty-q-t">Tidak ada antrian menunggu</div>
        </div>
      @endforelse
    </div>
  </div>

</div>
</div>

<script>
(function(){
  function t(){
    var n=new Date(),p=function(v){return String(v).padStart(2,'0')};
    var e=document.getElementById('am-clk');
    if(e) e.textContent=p(n.getHours())+':'+p(n.getMinutes())+':'+p(n.getSeconds());
  }
  t(); setInterval(t,1000);
})();

document.addEventListener('livewire:init',()=>{
  Livewire.on('queue-called',(d)=>{
    var u=new SpeechSynthesisUtterance('Nomor antrian '+d.kode+' '+d.nomor+', silakan menuju '+d.loket);
    u.lang='id-ID'; u.rate=.9; window.speechSynthesis.speak(u);
  });
});

/* ── DROPDOWN LOGOUT ── */
function toggleAmDropdown(e) {
  e.stopPropagation();
  var chip = document.getElementById('am-user-chip');
  var dd   = document.getElementById('am-dropdown');
  var isOpen = dd.classList.contains('open');
  dd.classList.toggle('open', !isOpen);
  chip.classList.toggle('open', !isOpen);
}

// Tutup saat klik di luar chip
document.addEventListener('click', function(e) {
  var chip = document.getElementById('am-user-chip');
  if (chip && !chip.contains(e.target)) {
    document.getElementById('am-dropdown').classList.remove('open');
    chip.classList.remove('open');
  }
});

// Tutup saat Livewire re-render (wire:poll bisa bikin dropdown "ghost")
document.addEventListener('livewire:navigated', function() {
  var dd = document.getElementById('am-dropdown');
  if (dd) dd.classList.remove('open');
});
function confirmLogout(event)
{
    event.preventDefault();

    Swal.fire({
        icon: 'question',
        title: 'Keluar dari Sistem?',
        text: 'Anda yakin ingin logout dari Admin Monitor?',
        showCancelButton: true,
        confirmButtonText: 'Ya, Logout',
        cancelButtonText: 'Batal',
        confirmButtonColor: '#dc2626',
        cancelButtonColor: '#64748b',
        reverseButtons: true
    }).then((result) => {

        if (result.isConfirmed) {

            document.getElementById('logout-form').submit();

        }

    });
}
function confirmCloseLayanan(kode)
{
    let defaultTime = '13:00';

    if(kode === 'B' || kode === 'D'){
        defaultTime = '07:30';
    }

    Swal.fire({
        icon: 'warning',
        title: 'Tutup Layanan',
        html: `
            <div style="margin-bottom:10px;font-size:14px">
                Pilih Jam Buka Kembali
            </div>

            <input
                type="time"
                id="jam_buka"
                class="swal2-input"
                value="${defaultTime}"
            >
        `,
        showCancelButton: true,
        confirmButtonText: 'Tutup Layanan',
        cancelButtonText: 'Batal',
        confirmButtonColor: '#dc2626',

        preConfirm: () => {
            return document.getElementById('jam_buka').value;
        }

    }).then((result)=>{

        if(result.isConfirmed){

            Livewire.dispatch('close-layanan', {
                kode: kode,
                jam: result.value
            });

        }

    });
}


</script>

</div>