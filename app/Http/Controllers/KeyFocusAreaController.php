<?php

namespace App\Http\Controllers;

  use App\Models\KeyFocusArea;
  use Illuminate\Support\Str;
use Illuminate\Http\Request;;

class KeyFocusAreaController extends Controller
{
   
     public function index()
    {
        $focusAreas = KeyFocusArea::all();
        return view('key_focus_areas.index', compact('focusAreas'));
    }

    public function create()
    {
        return view('key_focus_areas.create');
    }

    public function store(Request $request)
    {
       $data =  $request->validate(['title' => 'required|string|max:255', 'description' => 'nullable|string','slug' => 'nullable|string','status' => 'required|string']);
        $data['slug']  = Str::slug($request->title);
        KeyFocusArea::create($data);
        return redirect()->route('key_focus_areas.index')->with('success', 'Focus area created.');
    }

    public function edit(KeyFocusArea $keyFocusArea)
    {
        return view('key_focus_areas.edit', compact('keyFocusArea'));
    }

    public function update(Request $request, KeyFocusArea $keyFocusArea)
    {
                $data =  $request->validate(['title' => 'required|string|max:255', 'description' => 'nullable|string','slug' => 'nullable|string','status' => 'required|string']);
                $data['slug']  = Str::slug($request->title);
                $keyFocusArea->update($data);

        return redirect()->route('key_focus_areas.index')->with('success', 'Focus area updated.');
    }

    public function destroy(KeyFocusArea $keyFocusArea)
    {
        $keyFocusArea->delete();
        return redirect()->route('key_focus_areas.index')->with('success', 'Focus area deleted.');
    }
}
