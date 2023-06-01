<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::where('user_id', Auth::id())->get();
        return view('items.index', compact('items'));
    }

    public function leenmarkt()
    {
        $items = Item::all();
        return view('Leenmarkt', compact('items'));
    }

    public function create()
    {
        $user_id = Auth::id();
        return view('items.create', compact('user_id'));
    }

    public function store(Request $request)
    {
        $item = new Item;
        $item->user_id = $request->user_id; 
        $item->name = $request->name;
        $item->category = $request->category;
        $item->description = $request->description;
        $item->image = $request->file('image')->store('items/images', 'public');
        $item->save();
    
        return redirect()->route('items.index')->with('success', 'Item created successfully');
    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $item->name = $request->name;
        $item->category = $request->category;
        $item->description = $request->description;
        $item->image = $request->file('image')->store('items/images', 'public');
        $item->save();

        return redirect()->route('items.index')->with('success', 'Item updated successfully');
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('items.index')->with('success', 'Item deleted successfully');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $items = Item::where('name', 'like', '%' . $searchTerm . '%')
            ->orWhere('description', 'like', '%' . $searchTerm . '%')
            ->get();

        return view('items.search', compact('items', 'searchTerm'));
    }
    public function show(Item $item)
{
    return view('items.details', compact('item'));
}

}
