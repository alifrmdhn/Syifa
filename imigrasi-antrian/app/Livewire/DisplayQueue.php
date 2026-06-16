<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Antrian;

class DisplayQueue extends Component
{
    // Tidak perlu menyimpan $current sebagai property —
    // cukup query fresh setiap render() dipanggil oleh wire:poll

    public function render()
    {
        return view('livewire.display-queue', [
            // PERBAIKAN: query dijalankan setiap render, bukan hanya saat mount()
            'current' => Antrian::where('status', 'called')
                ->latest()
                ->first(),
        ]);
    }
}