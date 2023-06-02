<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Product;

class ReviewController extends Controller
{

public function store(Request $request)
{
    $validatedData = $request->validate([
        'product_id' => 'required|exists:products,id',
        'comment' => 'required|string',
    ]);

    $review = new Review();
    $review->product_id = $validatedData['product_id'];
    $review->user_id = auth()->id();
    $review->comment = $validatedData['comment'];
    $review->save();

    return redirect()->back()->with('success', 'Review submitted successfully.');
}

public function show($id)
{
    $product = Product::with('reviews.user')->findOrFail($id);

    return view('geleend', [
        'items' => $product
    ]);
}
}
