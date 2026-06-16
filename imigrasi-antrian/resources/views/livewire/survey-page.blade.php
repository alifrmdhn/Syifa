<div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('livewire:init', () => {

    Livewire.on('print-ticket', (data) => {

        const nomor =
            data.kode +
            String(data.nomor).padStart(3, '0');

        // AUTO PRINT
        // const printWindow = window.open('', '', 'width=300,height=600');

        // printWindow.document.write(`
        // <html>
        // <head>
        //     <title>Tiket Antrian</title>
        //     <style>
        //         body{
        //             width:58mm;
        //             text-align:center;
        //             font-family:monospace;
        //             padding:10px;
        //         }

        //         h1{
        //             font-size:42px;
        //             margin:10px 0;
        //         }

        //         .line{
        //             border-top:1px dashed #000;
        //             margin:10px 0;
        //         }
        //     </style>
        // </head>

        // <body>

        //     <div>KANTOR IMIGRASI MAKASSAR</div>

        //     <div class="line"></div>

        //     <div>NOMOR ANTRIAN</div>

        //     <h1>${nomor}</h1>

        //     <div>${data.layanan}</div>

        //     <div>${data.loket}</div>

        //     <div class="line"></div>

        //     <div>${new Date().toLocaleString()}</div>

        // </body>
        // </html>
        // `);

        // printWindow.document.close();

        // setTimeout(() => {
        //     printWindow.print();
        //     printWindow.close();
        // }, 500);

        // POPUP NOMOR ANTRIAN
        Swal.fire({
            icon: 'success',
            title: 'Nomor Antrian Anda',
            html: `
                <div style="
                    font-size:70px;
                    font-weight:800;
                    color:#103060;
                    margin:15px 0;">
                    ${nomor}
                </div>

                <div style="font-size:18px">
                    ${data.layanan}
                </div>

                <div style="margin-top:8px;color:#666">
                    ${data.loket}
                </div>
            `,
            confirmButtonText: 'OK',
            allowOutsideClick: false,
            allowEscapeKey: false
        }).then(() => {

            window.location.href = '/';

        });

    });

});
</script>
<style>

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

:root{
--navy:#103060;
--navy-mid:#154080;
--navy-lite:#1a5299;
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

.sv{
font-family:'Inter',sans-serif;
min-height:100vh;
background:var(--bg);
display:flex;
flex-direction:column;
}

.sv-top{
background:var(--navy);
padding:0 24px;
height:58px;
display:flex;
align-items:center;
gap:12px;
box-shadow:0 2px 14px rgba(16,48,96,.30);
flex-shrink:0;
}

.sv-top img{
height:34px;
object-fit:contain;
}

.sv-top-brand{
font-weight:700;
font-size:.85rem;
color:#fff;
line-height:1.25;
}

.sv-top-sub{
font-size:.57rem;
color:rgba(255,255,255,.5);
letter-spacing:1.8px;
text-transform:uppercase;
}

.sv-body{
flex:1;
display:flex;
align-items:center;
justify-content:center;
padding:28px 20px;
}

.sv-wrap{
width:100%;
max-width:980px;
display:flex;
align-items:flex-start;
gap:24px;
}

.sv-mascot{
flex-shrink:0;
width:140px;
align-self:flex-end;
}

.sv-mascot img{
width:100%;
object-fit:contain;
filter:drop-shadow(0 6px 16px rgba(0,0,0,.12));
}

.sv-panel{
flex:1;
background:#fff;
border:1.5px solid var(--border);
border-radius:20px;
overflow:hidden;
box-shadow:var(--sh-lg);
}

.sv-phead{
background:var(--navy);
padding:20px 26px;
display:flex;
align-items:center;
gap:14px;
position:relative;
overflow:hidden;
}

.sv-phead::before{
content:'';
position:absolute;
right:-30px;
top:-30px;
width:140px;
height:140px;
border-radius:50%;
background:rgba(255,255,255,.05);
}

.sv-phead img{
height:40px;
object-fit:contain;
flex-shrink:0;
}

.sv-ptitle{
font-weight:700;
font-size:1.05rem;
color:#fff;
}

.sv-psub{
font-size:.62rem;
color:rgba(255,255,255,.55);
letter-spacing:1.8px;
text-transform:uppercase;
margin-top:2px;
}

.sv-pbar{
height:3px;
background:linear-gradient(
90deg,
#93c5fd,
var(--navy-lite),
#93c5fd
);
}

.sv-pbody{
padding:24px 26px;
}

.sv-section{
background:#fff;
border:1.5px solid var(--border);
border-radius:18px;
padding:22px;
margin-bottom:22px;
box-shadow:0 4px 18px rgba(16,48,96,.08);
}

.sv-section-yellow{
background:#fffaf0;
border:1.5px solid #f6d58d;
box-shadow:0 4px 18px rgba(255,180,0,.08);
}

.sv-lbl{
font-size:.68rem;
font-weight:800;
color:var(--navy-mid);
letter-spacing:3px;
text-transform:uppercase;
margin-bottom:16px;
}

.sv-lbl-yellow{
color:#b7791f;
}

.sv-docs{
display:flex;
flex-direction:column;
gap:10px;
}

.sv-doc{
display:flex;
align-items:center;
gap:11px;
background:var(--ice);
border:1.5px solid var(--ice-mid);
border-radius:12px;
padding:14px 15px;
transition:all .18s;
}

.sv-doc:hover{
background:#ddeaff;
border-color:#a8c4f5;
transform:translateX(3px);
}

.sv-doc-yellow{
background:#fff;
border:1px solid #f6d58d;
}

.sv-dnum{
width:32px;
height:32px;
background:var(--navy);
border-radius:9px;
display:flex;
align-items:center;
justify-content:center;
font-weight:700;
font-size:.82rem;
color:#fff;
flex-shrink:0;
}

.sv-dnum-yellow{
background:#d69e2e;
}

.sv-dtxt{
font-weight:600;
font-size:.92rem;
color:var(--text-1);
line-height:1.5;
}

.sv-notice{
background:#fffbeb;
border:1.5px solid #fde68a;
border-radius:12px;
padding:14px 15px;
display:flex;
align-items:flex-start;
gap:10px;
margin-bottom:20px;
}

.sv-nicon{
font-size:1rem;
flex-shrink:0;
margin-top:1px;
}

.sv-ntxt{
font-size:.82rem;
color:#92400e;
font-weight:600;
line-height:1.6;
}

.sv-btn{
width:100%;
background:var(--navy);
color:#fff;
border:none;
border-radius:14px;
padding:16px;
font-family:'Inter',sans-serif;
font-weight:700;
font-size:.95rem;
letter-spacing:.5px;
cursor:pointer;
transition:all .22s;
box-shadow:0 4px 16px rgba(16,48,96,.30);
position:relative;
overflow:hidden;
}

.sv-btn:hover{
background:var(--navy-mid);
transform:translateY(-2px);
}

@media(max-width:768px){

.sv-wrap{
flex-direction:column;
}

.sv-mascot{
width:90px;
margin:0 auto;
}

.sv-pbody,
.sv-phead{
padding:18px 20px;
}

}

</style>

<div class="sv">

    <div class="sv-top">

        <img src="{{ asset('images/logo.png') }}" alt="Logo">

        <div>

            <div class="sv-top-brand">
                IMIGRASI MAKASSAR
            </div>

            <div class="sv-top-sub">
                Persyaratan & Pengambilan Antrian
            </div>

        </div>

    </div>

    <div class="sv-body">

        <div class="sv-wrap">

           <div class="sv-mascot">
    <img
        src="{{ asset('images/midi1.png') }}"
        alt="Petugas"
        style="transform: scaleX(-1);"
    >
</div>

            <div class="sv-panel">

                <div class="sv-phead">

                    <img src="{{ asset('images/logo.png') }}" alt="">

                    <div>

                        <div class="sv-ptitle">
                            Persyaratan Dokumen
                        </div>

                        <div class="sv-psub">
                            Pastikan semua dokumen siap
                        </div>

                    </div>

                </div>

                <div class="sv-pbar"></div>

                <div class="sv-pbody">

                    {{-- A --}}
                    <div class="sv-section">

                        <div class="sv-lbl">

                            @if($layanan == 'D')
                                A. PASPOR HILANG
                            @else
                                A. PASPOR BARU
                            @endif

                        </div>

                        <div class="sv-docs">

                            @foreach($pasporBaru as $i => $item)

                            <div class="sv-doc">

                                <div class="sv-dnum">
                                    {{ $i + 1 }}
                                </div>

                                <div class="sv-dtxt">
                                    {{ $item }}
                                </div>

                            </div>

                            @endforeach

                        </div>

                    </div>



                    {{-- B --}}
                    <div class="sv-section">

                        <div class="sv-lbl">

                            @if($layanan == 'D')
                                B. PASPOR RUSAK
                            @else
                                B. PENGGANTIAN PASPOR
                            @endif

                        </div>

                        <div class="sv-docs">

                            @foreach($pasporPenggantian as $i => $item)

                            <div class="sv-doc">

                                <div class="sv-dnum">
                                    {{ $i + 1 }}
                                </div>

                                <div class="sv-dtxt">
                                    {{ $item }}
                                </div>

                            </div>

                            @endforeach

                        </div>

                    </div>



                    {{-- C --}}
                    <div class="sv-section">

                        <div class="sv-lbl">

                            @if($layanan == 'D')
                                C. PASPOR RUSAK / HILANG BAGI ANAK <17 TAHUN
                            @else
                                C. PASPOR BARU / PENGGANTIAN ANAK <17 TAHUN
                            @endif

                        </div>

                        <div class="sv-docs">

                            @foreach($persyaratanTambahan as $i => $item)

                            <div class="sv-doc">

                                <div class="sv-dnum">
                                    {{ $i + 1 }}
                                </div>

                                <div class="sv-dtxt">
                                    {{ $item }}
                                </div>

                            </div>

                            @endforeach

                        </div>

                    </div>



                    {{-- KHUSUS BAP --}}
                    @if($layanan == 'D')

                    <div class="sv-section">

                        <div class="sv-lbl">

                            PERUBAHAN DATA PASPOR

                        </div>

                        <div class="sv-docs">

                            <div class="sv-doc">

                                <div class="sv-dnum">
                                    1
                                </div>

                                <div class="sv-dtxt">
                                    Silakan langsung mengambil nomor antrean untuk ditinjau langsung oleh petugas terkait perubahan data
                                </div>

                            </div>

                        </div>

                    </div>

                    @endif



                    {{-- CATATAN --}}
                    <div class="sv-section sv-section-yellow">

                        <div class="sv-lbl sv-lbl-yellow">

                            PERSYARATAN KHUSUS

                        </div>

                        <div class="sv-docs">

                            @foreach($tambahanKhusus as $item)

                            <div class="sv-doc sv-doc-yellow">

                                <div class="sv-dnum sv-dnum-yellow">
                                    ★
                                </div>

                                <div class="sv-dtxt">
                                    {{ $item }}
                                </div>

                            </div>

                            @endforeach

                        </div>

                    </div>



                    {{-- NOTICE --}}
                    <div class="sv-notice">

                        <div class="sv-nicon">
                            ⚠️
                        </div>

                        <div class="sv-ntxt">

                            Harap siapkan dokumen asli dan fotocopy A4
                            sebelum mengambil nomor antrian.
                            Pastikan seluruh persyaratan telah lengkap
                            sebelum menuju loket pelayanan.

                        </div>

                    </div>



                    {{-- BUTTON --}}
                    <button
                        wire:click="ambilAntrian"
                        wire:loading.attr="disabled"
                        type="button"
                        class="sv-btn"
                    >

                        <span wire:loading.remove>
                            ✦ AMBIL NOMOR ANTRIAN
                        </span>

                        <span wire:loading>
                            ⏳ Memproses...
                        </span>

                    </button>

                </div>

            </div>

        </div>

    </div>

</div>

</div>