<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\LayananStatus;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page', [

            'layanan' => LayananStatus::all()

        ]);
    }
}