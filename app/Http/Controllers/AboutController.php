<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    // Show all blogs (Admin list)
    public function index()
    {
        $abouts = About::all();
        return view('admin.pages.aboutpage.about.index', compact('abouts'));
    }

    // Show single blog details (Admin)
    public function show($id)
    {
        $about = About::findOrFail($id);
        return view('admin.pages.aboutpage.about.show', compact('about'));
    }

    // Show create form
    public function create()
    {
        return view('admin.pages.aboutpage.about.create');
    }

    // Store new blog
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp',
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $data = $request->all();

        // Generate slug automatically
        $data['slug'] = Str::slug($request->heading);

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('admin-assets/images/admin-image/abouts/'), $filename);
            $data['image'] = $filename;
        }

        About::create($data);

        return redirect()->route('admin.about.index')->with('success', 'About section added successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.pages.aboutpage.about.edit', compact('about'));
    }

    // Update existing blog
    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);

        $request->validate([

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'heading' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->heading);

        // Handle new image upload (delete old one)
        if ($request->hasFile('image')) {
            if ($about->image && file_exists(public_path('admin-assets/images/admin-image/abouts/' . $about->image))) {
                unlink(public_path('admin-assets/images/admin-image/abouts/' . $about->image));
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('admin-assets/images/admin-image/abouts/'), $filename);
            $data['image'] = $filename;
        }

        $about->update($data);

        return redirect()->route('admin.about.index')->with('success', 'About section updated successfully!');
    }

    // Delete a blog
    public function destroy($id)
    {
        $about = About::findOrFail($id);

        if ($about->image && file_exists(public_path('admin-assets/images/admin-image/abouts/' . $about->image))) {
            unlink(public_path('admin-assets/images/admin-image/abouts/' . $about->image));
        }

        $about->delete();

        return redirect()->route('admin.about.index')->with('success', 'About section deleted successfully!');
    }
}

