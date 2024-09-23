<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::Paginate(9);
        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {

    }

    public function store()
    {
    }

    public function show($review)
    {
    }

    public function edit($review)
    {
    }

    public function update($review)
    {
    }

    public function destroy($review)
    {
    }
}
