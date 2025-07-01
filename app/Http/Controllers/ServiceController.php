<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        return Service::with('category')->get();
    }

    public function show($id)
    {
        return Service::with('category', 'reviews')->findOrFail($id);
    }

    public function search(Request $request)
    {
        $query = Service::query();

        if ($request->has('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->has('rating')) {
            $query->where('rating', '>=', $request->rating);
        }

        return $query->get();
    }
}
