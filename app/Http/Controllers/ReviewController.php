<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'rating' => 'required|numeric|min:1|max:5',
            'comment' => 'required',
            'product_id' => 'required|exists:products,id',
        ]);
    
        $comment = new Comment();
        $comment->user_id = auth()->id();
        $comment->product_id = $validatedData['product_id'];
        $comment->name = $validatedData['name'];
        $comment->rating = $validatedData['rating'];
        $comment->comment = $validatedData['comment'];
        $comment->save();
    
        // Retrieve the item with its comments for display
        $item = Item::with('comments')->find($validatedData['product_id']);
    
        return view('product-details', compact('item'))->with('success', 'Comment added successfully');
    }
    
}