<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        return Review::create([
            'user_id' => auth()->id(),
            'service_id' => $request->service_id,
            'rating' => $request->rating,
            'comment' => $request->comment
        ]);
    }
}
