<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function share(Product $product)
    {
        $users = User::where('id', '!=', auth()->id())->get();
        return view('products.share', compact('product', 'users'));
    }
    
    public function shareProduct(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'borrower_id' => 'required|exists:users,id',
        ]);
    
        $product->borrowers()->attach($validatedData['borrower_id']);
    
        return redirect()->route('products.share', $product->id)
            ->with('success', 'Product shared successfully!');
    }}
