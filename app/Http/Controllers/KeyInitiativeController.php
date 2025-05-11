<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeyInitiative;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as ResizeImage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class KeyInitiativeController extends Controller
{

public function index() {
$initiatives = KeyInitiative::all();
return view('key_initiatives.index', compact('initiatives'));
}
public function create() {

return view('key_initiatives.create');
}

public function store(Request $request)
{
// dd($request->all());

$data = $request->validate([
    'title' => 'required|string|max:255',
    'description' => 'required|string|max:255',
    'impact' => 'nullable|string|max:255',
    'project_link' => 'nullable|string|max:255',
    'year' => 'nullable|string|max:255',
    'slug' => 'nullable|string',
    'status' => 'required|in:published,draft',
    'banner' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
]);

if ($request->hasFile('banner')) {
    // $data['picture'] = $request->file('picture')->store('team', 'public');
    $path = public_path('assets/images/keyinitiative/');
    $imageBannerPath = Str::slug($request->title).'-'.time().uniqid().'.'.$request->banner->extension();
        ResizeImage::make($request->file('banner'))
            ->resize(370, 451)
            ->save($path . $imageBannerPath);
            $data['banner']  = $imageBannerPath;
}
$data['slug']  = Str::slug($request->title);
KeyInitiative::create($data);
return redirect()->route('key_initiatives.index')->with('success', 'Profile created successfully.');
}
public function show($slug) {
$keyInitiative = KeyInitiative::where('slug', $slug)->firstOrFail();
return view('key_initiatives.show', compact('keyInitiative'));
}

public function edit($slug) {
$keyInitiative = KeyInitiative::where('slug', $slug)->firstOrFail();
return view('key_initiatives.edit', compact('keyInitiative'));
}

// public function update(Request $request, $slug) {
//     $keyInitiative = KeyInitiative::where('slug', $slug)->firstOrFail();
//     // validate + update...
// }

public function update(Request $request, $slug)
{
$keyInitiative = KeyInitiative::where('slug', $slug)->firstOrFail();
$data = $request->validate([
    'title' => 'required|string|max:255',
    'description' => 'required|string|max:255',
    'project_link' => 'required|string|max:255',
    'impact' => 'nullable|string|max:255',
    'year' => 'nullable|string|max:255',
    'slug' => 'nullable|string',
    'status' => 'required|in:published,draft',
    'banner' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
]);

if ($request->hasFile('banner')) {
  
    $path = public_path('assets/images/keyinitiative/');
    $imageBannerPath = Str::slug($request->title).'-'.time().uniqid().'.'.$request->banner->extension();
        ResizeImage::make($request->file('banner'))
            ->resize(370, 451)
            ->save($path . $imageBannerPath);
            $data['banner']  = $imageBannerPath;
}

$data['slug']  =  Str::slug($request->title);
$keyInitiative->update($data);

return redirect()->route('key_initiatives.index')->with('success', 'Updated successfully.');
}
public function destroy($slug) {
$keyInitiative = KeyInitiative::where('slug', $slug)->firstOrFail();
$keyInitiative->delete();
return redirect()->route('key_initiatives.index')->with('success', 'Deleted successfully.');
}

}
