<?php

namespace App\Http\Controllers\Frontend\Masjid;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;

class DashboardController extends Controller
{
    public function index()
    {
        $jmlUstadz = User::whereHas('profile', function (Builder $query) {
            $query->where('id_khidmat', auth()->user()->id);
        })->count();
        
        // Mendapatkan id_user dari ustadz
        $ustadzIds = User::whereHas('profile', function (Builder $query) {
            $query->where('id_khidmat', auth()->user()->id);
        })->pluck('id')->all();

        // Menghitung jumlah santri yang dimiliki oleh ustadz-ustadz tersebut
        $jmlSantri = User::whereHas('profile', function (Builder $query) use ($ustadzIds) {
            $query->whereIn('id_khidmat', $ustadzIds);
        })->count();

        return response()->json([
            'jumlah_ustadz' => $jmlUstadz,
            'jumlah_santri' => $jmlSantri,
        ]);
    }
}
