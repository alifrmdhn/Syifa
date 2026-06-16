{{-- ticket-page.blade.php --}}
<div wire:poll.2s="checkCalled">
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
:root{--navy:#103060;--navy-mid:#154080;--ice:#e8f0fe;--ice-mid:#c8d9fb;--bg:#f4f7fd;--border:#dce6f8;--text-1:#0d1f3c;--text-2:#3a4f72;--text-3:#7a92b8;}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}

.tk{font-family:'Inter',sans-serif;min-height:100vh;background:var(--bg);display:flex;align-items:center;justify-content:center;padding:24px 16px;position:relative;}
.tk::before{content:'';position:fixed;top:0;left:0;right:0;height:200px;background:linear-gradient(135deg,var(--navy) 0%,var(--navy-mid) 100%);clip-path:ellipse(110% 100% at 50% 0%);z-index:0;}

/* CARD */
.tk-card{position:relative;z-index:2;width:100%;max-width:420px;background:#fff;border-radius:22px;overflow:hidden;box-shadow:0 8px 40px rgba(16,48,96,.16);border:1.5px solid var(--border);}

/* HEADER */
.tk-head{background:var(--navy);padding:20px 22px 18px;position:relative;overflow:hidden;}
.tk-head::before{content:'';position:absolute;right:-40px;bottom:-40px;width:160px;height:160px;border-radius:50%;background:rgba(255,255,255,.05);}
.tk-head-row{display:flex;align-items:center;justify-content:space-between;margin-bottom:16px;}
.tk-head-row img{height:32px;object-fit:contain;}
.tk-head-lbl{font-size:.65rem;font-weight:700;color:rgba(255,255,255,.55);letter-spacing:2px;text-transform:uppercase;text-align:right;line-height:1.5;}

/* NUMBER */
.tk-numbox{background:rgba(255,255,255,.10);border:1.5px solid rgba(255,255,255,.20);border-radius:14px;padding:18px 16px;text-align:center;}
.tk-numlbl{font-size:.6rem;font-weight:700;color:rgba(255,255,255,.55);letter-spacing:3px;text-transform:uppercase;margin-bottom:5px;}
.tk-num{font-weight:800;font-size:4.2rem;color:#fff;line-height:1;letter-spacing:3px;}
.tk-layanan{font-size:.78rem;color:rgba(255,255,255,.65);font-weight:600;margin-top:7px;}
.tk-loket-badge{display:inline-block;background:rgba(255,255,255,.15);border:1px solid rgba(255,255,255,.25);color:#fff;padding:3px 14px;border-radius:50px;font-size:.68rem;font-weight:700;letter-spacing:1.5px;margin-top:5px;}

/* PROGRESS BAR */
.tk-pbar{height:3px;background:linear-gradient(90deg,#93c5fd,#60a5fa);}

/* PERF */
.tk-perf{display:flex;align-items:center;background:var(--bg);overflow:hidden;}
.tk-perf::before,.tk-perf::after{content:'';width:20px;height:20px;background:var(--bg);border-radius:50%;flex-shrink:0;margin:0 -10px;border:1.5px solid var(--border);z-index:2;}
.tk-perf-line{flex:1;border-top:2px dashed var(--border);margin:0 8px;}

/* STATUS */
.tk-szone{padding:14px 20px 8px;}
.tk-s{border-radius:11px;padding:13px 16px;display:flex;align-items:center;gap:11px;}
.tk-s-wait{background:#fffbeb;border:1.5px solid #fde68a;}
.tk-s-call{background:#f0fdf4;border:1.5px solid #86efac;animation:spulse 2s ease-in-out infinite;}
.tk-s-done{background:#f8fafc;border:1.5px solid #e2e8f0;}
@keyframes spulse{0%,100%{box-shadow:0 0 0 0 rgba(134,239,172,0)}50%{box-shadow:0 0 0 5px rgba(134,239,172,.25)}}
.tk-sdot{width:8px;height:8px;border-radius:50%;flex-shrink:0;}
.tk-sdot-w{background:#f59e0b;animation:db 1.5s ease-in-out infinite;}
.tk-sdot-c{background:#16a34a;animation:db .8s ease-in-out infinite;}
.tk-sdot-d{background:#94a3b8;}
@keyframes db{0%,100%{opacity:1}50%{opacity:.2}}
.tk-slbl{font-weight:700;font-size:.82rem;}
.tk-slbl-w{color:#92400e;}.tk-slbl-c{color:#15803d;}.tk-slbl-d{color:#475569;}
.tk-ssub{font-size:.7rem;color:var(--text-3);margin-top:2px;}
.tk-sisa{font-weight:700;color:#b45309;}

/* BODY */
.tk-body{padding:14px 20px 20px;}
.tk-rows{display:flex;flex-direction:column;gap:5px;margin-bottom:14px;}
.tk-row{display:flex;align-items:flex-start;gap:9px;padding:9px 11px;background:#f8faff;border:1px solid var(--border);border-radius:9px;}
.tk-rico{width:26px;height:26px;background:var(--ice);border-radius:7px;display:flex;align-items:center;justify-content:center;font-size:.8rem;flex-shrink:0;}
.tk-rlbl{font-size:.6rem;color:var(--text-3);font-weight:700;letter-spacing:1px;text-transform:uppercase;}
.tk-rval{font-size:.82rem;color:var(--text-1);font-weight:600;line-height:1.4;}

.tk-btn{width:100%;background:var(--navy);color:#fff;border:none;border-radius:11px;padding:13px;font-family:'Inter',sans-serif;font-weight:700;font-size:.88rem;letter-spacing:.5px;cursor:pointer;transition:all .22s;box-shadow:0 4px 14px rgba(16,48,96,.28);}
.tk-btn:hover{background:var(--navy-mid);transform:translateY(-2px);box-shadow:0 6px 20px rgba(16,48,96,.36);}

.tk-dip{margin-top:10px;background:#f0fdf4;border:1.5px solid #86efac;border-radius:11px;padding:13px 16px;text-align:center;animation:dipf 1s ease-in-out infinite;}
@keyframes dipf{0%,100%{opacity:1}50%{opacity:.7}}
.tk-dip-t{font-weight:700;font-size:.85rem;color:#15803d;letter-spacing:.5px;}

.tk-msc{position:fixed;bottom:0;right:0;width:150px;pointer-events:none;z-index:20;filter:drop-shadow(0 0 12px rgba(22,163,74,.2));animation:mscb .5s ease;}
@keyframes mscb{0%{transform:translateY(100%)}60%{transform:translateY(-8px)}100%{transform:translateY(0)}}

@media print{.tk-btn,.tk-dip,.tk-msc{display:none!important}.tk{background:#fff}.tk::before{display:none}.tk-card{box-shadow:none;border:1px solid #ddd}}
</style>

<div class="tk">
<div class="tk-card">

  <div class="tk-head">
    <div class="tk-head-row">
      <img src="{{ asset('images/logo.png') }}" alt="Logo">
      <div class="tk-head-lbl">TIKET ANTRIAN<br>IMIGRASI MAKASSAR</div>
    </div>
    <div class="tk-numbox">
      <div class="tk-numlbl">Nomor Antrian Anda</div>
      <div class="tk-num">{{ $antrian->kode }}{{ str_pad($antrian->nomor, 3, '0', STR_PAD_LEFT) }}</div>
      <div class="tk-layanan">{{ $antrian->layanan }}</div>
      <div class="tk-loket-badge">{{ $antrian->loket }}</div>
    </div>
  </div>

  <div class="tk-pbar"></div>
  <div class="tk-perf"><div class="tk-perf-line"></div></div>

  <div class="tk-szone">
    @if($antrian->status=='waiting')
    <div class="tk-s tk-s-wait">
      <div class="tk-sdot tk-sdot-w"></div>
      <div><div class="tk-slbl tk-slbl-w">MENUNGGU ANTRIAN</div><div class="tk-ssub">Sisa di depan Anda: <span class="tk-sisa">{{ $sisa }}</span> orang</div></div>
    </div>
    @elseif($antrian->status=='called')
    <div class="tk-s tk-s-call">
      <div class="tk-sdot tk-sdot-c"></div>
      <div><div class="tk-slbl tk-slbl-c">NOMOR ANDA DIPANGGIL!</div><div class="tk-ssub">Silakan segera menuju {{ $antrian->loket }}</div></div>
    </div>
    @elseif($antrian->status=='done')
    <div class="tk-s tk-s-done">
      <div class="tk-sdot tk-sdot-d"></div>
      <div><div class="tk-slbl tk-slbl-d">ANTRIAN SELESAI</div><div class="tk-ssub">Terima kasih telah menggunakan layanan kami</div></div>
    </div>
    @endif
  </div>

  <div class="tk-body">
    <div class="tk-rows">
      <div class="tk-row"><div class="tk-rico">📋</div><div><div class="tk-rlbl">Layanan</div><div class="tk-rval">{{ $antrian->layanan }}</div></div></div>
      <div class="tk-row"><div class="tk-rico">🪟</div><div><div class="tk-rlbl">Loket</div><div class="tk-rval">{{ $antrian->loket }}</div></div></div>
      <div class="tk-row"><div class="tk-rico">⚠️</div><div><div class="tk-rlbl">Perhatian</div><div class="tk-rval">Siapkan dokumen asli & fotocopy · Perhatikan monitor antrian</div></div></div>
    </div>
    <button onclick="window.print()" class="tk-btn">🖨 CETAK TIKET</button>
    @if($dipanggil)
    <div class="tk-dip"><div class="tk-dip-t">🔔 NOMOR ANDA SEDANG DIPANGGIL</div></div>
    @endif
  </div>
</div>

@if($antrian->status=='called')
<img src="{{ asset('images/mido3.png') }}" alt="" class="tk-msc">
@endif
</div>

<script>
document.addEventListener('livewire:init',()=>{
  Livewire.on('queue-called',()=>{
    var u=new SpeechSynthesisUtterance('Nomor antrian anda dipanggil');
    u.lang='id-ID';
    var b=document.getElementById('tk-bell');
    if(b){b.play().catch(()=>{}).finally(()=>{setTimeout(()=>window.speechSynthesis.speak(u),800);});}
    else window.speechSynthesis.speak(u);
  });
});
</script>
<audio id="tk-bell" src="https://assets.mixkit.co/active_storage/sfx/2869/2869-preview.mp3" preload="none"></audio>
</div>