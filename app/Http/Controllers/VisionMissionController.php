<?php

namespace App\Http\Controllers;

use App\Models\Vision_Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VisionMissionController extends Controller
{
    // Show all blogs (Admin list)
    public function index()
    {
        $visions = Vision_Mission::all();
        return view('admin.pages.aboutpage.vision_mission.index', compact('visions'));
    }

    // Show single Vison Mission details (Admin)
    public function show($id)
    {
        $vision = Vision_Mission::findOrFail($id);
        return view('admin.pages.aboutpage.vision_mission.show', compact('vision'));
    }

    // Show create form
    public function create()
    {
        return view('admin.pages.aboutpage.vision_mission.create');
    }

    // Store new blog
    public function store(Request $request)
    {
        $request->validate([
            'icon'          => 'required|string|max:255',
            'heading'       => 'required|string|max:255',
            'description'   => 'required|string',
            'stats'         => 'required|string|max:255'
        ]);

        $data = $request->all();

        // Generate slug automatically
        $data['slug'] = Str::slug($request->heading);

        Vision_Mission::create($data);

        return redirect()->route('admin.vision-mission.index')->with('success', 'Vision - Mission section added successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $vision = Vision_Mission::findOrFail($id);
        return view('admin.pages.aboutpage.vision_mission.edit', compact('vision'));
    }

    // Update existing blog
    public function update(Request $request, $id)
    {
        $vision = Vision_Mission::findOrFail($id);

        $request->validate([

            'icon'          => 'sometimes|nullable|string',
            'heading'       => 'sometimes|required|string|max:255',
            'description'   => 'sometimes|required|string',
            'stats'         => 'sometimes|required|string|max:255',

        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->heading);

        $vision->update($data);

        return redirect()->route('admin.vision-mission.index')->with('success', 'Vision Mission section updated successfully!');
    }

    // Delete a blog
    public function destroy($id)
    {
        $vision = Vision_Mission::findOrFail($id);

        $vision->delete();

        return redirect()->route('admin.vision-mission.index')->with('success', 'Vision Missiont section deleted successfully!');
    }
}

