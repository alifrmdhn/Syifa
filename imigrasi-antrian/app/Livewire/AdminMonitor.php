<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Antrian;
use App\Models\LayananStatus;
use Livewire\Attributes\On;

class AdminMonitor extends Component
{
    public $currentId; // Simpan ID, bukan model langsung

    public function mount()
    {
        $called = Antrian::where('status', 'called')->first();
        $this->currentId = $called?->id;
    }

    // Helper: ambil model current dari DB fresh setiap kali
    protected function getCurrent()
    {
        return $this->currentId ? Antrian::find($this->currentId) : null;
    }

    public function nextQueue()
    {
        $current = $this->getCurrent();

        if ($current) {
            $current->update(['status' => 'done']);
        }

        // $next = Antrian::where('status', 'waiting')
        //     ->orderBy('id')
        //     ->first();
        $query = Antrian::where('status', 'waiting');

if ($this->getUserLoket() !== 'Admin') {
    $query->where('loket', $this->getUserLoket());
}

$next = $query->orderBy('id')->first();

        if ($next) {
            $next->update(['status' => 'called']);
            $this->currentId = $next->id;

            $this->dispatch(
                'queue-called',
                kode: $next->kode,
                nomor: $next->nomor,
                loket: $next->loket
            );
        } else {
            $this->currentId = null;
        }
    }

    public function callQueue($id)
    {
        $current = $this->getCurrent();

        if ($current) {
            $current->update(['status' => 'done']);
        }

        // $queue = Antrian::find($id);
        $queue = Antrian::find($id);

if (
    $queue &&
    $this->getUserLoket() !== 'Admin' &&
    $queue->loket !== $this->getUserLoket()
) {
    return;
}

        if ($queue) {
            $queue->update(['status' => 'called']);
            $this->currentId = $queue->id;

            $this->dispatch(
                'queue-called',
                kode: $queue->kode,
                nomor: $queue->nomor,
                loket: $queue->loket
            );
        }
    }

    public function previousQueue()
    {
        $current = $this->getCurrent();

        if (!$current) return;

        // $prev = Antrian::where('id', '<', $current->id)
        //     ->orderBy('id', 'desc')
        //     ->first();
        $query = Antrian::where('id', '<', $current->id);

if ($this->getUserLoket() !== 'Admin') {
    $query->where('loket', $this->getUserLoket());
}

$prev = $query
    ->orderBy('id', 'desc')
    ->first();

        if ($prev) {
            $current->update(['status' => 'waiting']);
            $prev->update(['status' => 'called']);
            $this->currentId = $prev->id;
        }
    }

    // public function closeQueue()
    // {
    //     $current = $this->getCurrent();

    //     if ($current) {
    //         $current->update(['status' => 'done']);
    //         $this->currentId = null;
    //     }
    // }
   public function closeQueue()
{
    Antrian::truncate();

    $this->currentId = null;

    LayananStatus::query()->update([
        'is_open' => false,
        'reopen_time' => 'CLOSED'
    ]);

    $this->dispatch('queue-reset-success');
}

    public function toggleLayanan($kode)
{
    $layanan = LayananStatus::where('kode', $kode)->firstOrFail();

    $layanan->update([
        'is_open' => true,
        'reopen_time' => null,
    ]);
}
    // public function render()
    // {
    //     return view('livewire.admin-monitor', [
    //         'current'  => $this->getCurrent(), // selalu fresh dari DB
    //         'waiting'  => Antrian::where('status', 'waiting')->count(),
    //         'layanans' => LayananStatus::all(),

    //         // PERBAIKAN: hapus filter loket agar semua antrian tampil,
    //         // atau sesuaikan dengan kebutuhan bisnis Anda
    //         'queues'   => Antrian::where('status', 'waiting')
    //             ->orderBy('id')
    //             ->get(),
    //     ]);
    // }
    public function render()
{
    $userLoket = $this->getUserLoket();

    $queues = Antrian::where('status', 'waiting');

    if ($userLoket !== 'Admin') {
        $queues->where('loket', $userLoket);
    }

    return view('livewire.admin-monitor', [

        'current'  => $this->getCurrent(),

        'waiting'  => $queues->count(),

        'layanans' => LayananStatus::all(),

        'queues'   => $queues
            ->orderBy('id')
            ->get(),

    ]);
}
    protected function getUserLoket()
{
    return auth()->user()->loket;
}
#[On('close-layanan')]
public function closeLayanan($kode, $jam)
{
    $layanan = LayananStatus::where('kode', $kode)->firstOrFail();

    $layanan->update([
        'is_open' => false,
        'reopen_time' => $jam,
    ]);
}
public function openAllServices()
{
    LayananStatus::query()->update([
        'is_open' => true,
        'reopen_time' => null,
    ]);

    $this->dispatch('services-opened');
}

}