<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membership;

class MembershipController extends Controller
{
    public function index()
{
    return Membership::where('user_id', auth()->id())->first();
}

public function renew(Request $request)
{
    $membership = Membership::updateOrCreate(
        ['user_id' => auth()->id()],
        ['package' => $request->package, 'expired_at' => now()->addMonth()]
    );

    return response()->json(['message' => 'Membership diperpanjang', 'data' => $membership]);
}

}
