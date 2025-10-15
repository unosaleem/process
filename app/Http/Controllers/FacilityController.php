<?php


namespace App\Http\Controllers;
use App\Models\Facility;

use Illuminate\Http\Request;

class FacilityController extends Controller
{
    // Show all blogs (Admin list)
    public function index()
    {
        $facilities = Facility::all();
        return view('admin.pages.aboutpage.facility.index', compact('facilities'));
    }

    // Show single blog details (Admin)
    public function show($id)
    {
        $facility = Facility::findOrFail($id);
        return view('admin.pages.aboutpage.facility.show', compact('facility'));
    }

    // Show create form
    public function create()
    {
        return view('admin.pages.aboutpage.facility.create');
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

        
        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('admin-assets/images/admin-image/facilities/'), $filename);
            $data['image'] = $filename;
        }

        Facility::create($data);

        return redirect()->route('admin.facility.index')->with('success', 'Facility section added successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $facility = Facility::findOrFail($id);
        return view('admin.pages.aboutpage.facility.edit', compact('facility'));
    }

    // Update existing blog
    public function update(Request $request, $id)
    {
        $facility = Facility::findOrFail($id);

        $request->validate([

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'heading' => 'required|string|max:255',
            'description' => 'required|string'
        ]);
        $data = $request->all();
        // Handle new image upload (delete old one)

        if ($request->hasFile('image')) {
            if ($facility->image && file_exists(public_path('admin-assets/images/admin-image/facilities/' . $facility->image))) {
                unlink(public_path('admin-assets/images/admin-image/facilities/' . $facility->image));
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('admin-assets/images/admin-image/facilities/'), $filename);
            $data['image'] = $filename;
        }

        $facility->update($data);

        return redirect()->route('admin.facility.index')->with('success', 'Facility section updated successfully!');
    }

    // Delete a blog
    public function destroy($id)
    {
        $facility = Facility::findOrFail($id);

        if ($facility->image && file_exists(public_path('admin-assets/images/admin-image/facilities/' . $facility->image))) {
            unlink(public_path('admin-assets/images/admin-image/facilities/' . $facility->image));
        }

        $facility->delete();

        return redirect()->route('admin.facility.index')->with('success', 'Facility section deleted successfully!');
    }
}
