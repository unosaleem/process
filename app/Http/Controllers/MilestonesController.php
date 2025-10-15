<?php

namespace App\Http\Controllers;
use App\Models\Milestone;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MilestonesController extends Controller
{
    // Show all blogs (Admin list)
    public function index()
    {
        $milestones = Milestone::all();
        return view('admin.pages.aboutpage.milestone.index', compact('milestones'));
    }

    // Show single Vison Mission details (Admin)
    public function show($id)
    {
        $milestone = Milestone::findOrFail($id);
        return view('admin.pages.aboutpage.milestone.show', compact('milestone'));
    }

    // Show create form
    public function create()
    {
        return view('admin.pages.aboutpage.milestone.create');
    }

    // Store new blog
    public function store(Request $request)
    {
        $request->validate([
            'icon'          => 'required|string|max:255',
            'heading'       => 'required|string|max:255',
            'description'   => 'required|string',
            'year'       => 'required|digits:4|integer|min:1901|max:2155',
        ]);

        $data = $request->all();

        // Generate slug automatically
        $data['slug'] = Str::slug($request->heading);

        Milestone::create($data);

        return redirect()->route('admin.milestones.index')->with('success', 'Milestone section added successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $milestone  = Milestone::findOrFail($id);
        return view('admin.pages.aboutpage.milestone.edit', compact('milestone'));
    }

    // Update existing blog
    public function update(Request $request, $id)
    {
        $milestone = Milestone::findOrFail($id);

        $request->validate([

            'icon'          => 'sometimes|nullable|string',
            'heading'       => 'sometimes|required|string|max:255',
            'description'   => 'sometimes|required|string',
             'year'       => 'sometimes|required|digits:4|integer|min:1901|max:2155',

        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->heading);

        $milestone->update($data);

        return redirect()->route('admin.milestones.index')->with('success', 'Milestones section updated successfully!');
    }

    // Delete a blog
    public function destroy($id)
    {
        $milestone = Milestone::findOrFail($id);

        $milestone->delete();

        return redirect()->route('admin.milestones.index')->with('success', 'Milestones section deleted successfully!');
    }
}
