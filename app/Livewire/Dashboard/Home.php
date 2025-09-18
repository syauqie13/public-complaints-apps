<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Laporan; // ✅ import model

class Home extends Component
{
    public $totalLaporan;

    public function mount()
    {
        $this->totalLaporan = Laporan::count();
    }

    public function render()
    {
        return view('livewire.dashboard.home', [
            'laporanPending' => Laporan::where('status', 'pending')->count(),
            'laporanProses' => Laporan::where('status', 'diproses')->count(),
            'laporanSelesai' => Laporan::where('status', 'selesai')->count(),
        ]);
    }
}
