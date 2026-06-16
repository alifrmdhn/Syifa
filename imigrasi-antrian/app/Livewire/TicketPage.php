<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Antrian;

class TicketPage extends Component
{
    // PERBAIKAN: simpan ID saja, bukan model Eloquent
    // Model Eloquent tidak aman di-serialize sebagai Livewire property
    public int $antrianId;

    public bool $dipanggil = false;

    public int $sisa = 0;

    public function mount($id)
    {
        // Pastikan antrian ada, kalau tidak lempar 404
        $antrian = Antrian::findOrFail($id);
        $this->antrianId = $antrian->id;
        $this->checkCalled();
    }

    public function checkCalled()
    {
        // Query fresh setiap poll agar status selalu up-to-date
        $antrian = Antrian::findOrFail($this->antrianId);

        $this->sisa = Antrian::where('status', 'waiting')
            ->where('id', '<', $antrian->id)
            ->count();

        if ($antrian->status === 'called') {
            $this->dipanggil = true;
        }
    }

    public function render()
    {
        // Query fresh setiap render agar tampilan selalu sinkron
        $antrian = Antrian::findOrFail($this->antrianId);

        return view('livewire.ticket-page', [
            'antrian'    => $antrian,
            'sisa'       => $this->sisa,
            'dipanggil'  => $this->dipanggil,
        ]);
    }
}