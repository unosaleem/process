<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommunityEventGallery;
use App\Models\CommunityEvent;

class CommunityEventGalleryController extends Controller
{
    /**
     * Display a listing of the gallery images.
     */
    public function index()
    {
        // Get all gallery images with related event
        $galleries = CommunityEventGallery::with('event')->latest()->get();

        return view('admin.pages.community_events.gallery.index', compact('galleries'));
    }


    /**
     * Show the form for creating a new gallery entry.
     */
    public function create($event_id)
    {
        $event = CommunityEvent::findOrFail($event_id);
        $gallery = CommunityEventGallery::where('community_event_id', $event_id)->latest()->get();
        
        // -return $gallery;
        return view('admin.pages.community_events.gallery.create', compact('event_id', 'event', 'gallery'));
    }


    /**
     * Store a newly created gallery image(s) in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();

        $request->validate([
            'community_event_id' => 'required|exists:community_events,id',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $filename = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('admin-assets/images/admin-image/community-events/gallery'), $filename);

                CommunityEventGallery::create([
                    'community_event_id' => $request->community_event_id,
                    'images' => $filename,
                    'caption' => $request->caption ?? null,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Gallery images uploaded successfully!');
    }
    public function show($event_id)
    {
        $event = CommunityEvent::findOrFail($event_id);

        // Get all gallery images for this event
        $galleries = CommunityEventGallery::where('community_event_id', $event_id)
                                        ->latest()
                                        ->get();

        return view('admin.pages.community_events.gallery.show', compact('event', 'galleries'));
    }

    /**
     * Remove the specified gallery image.
     */
    public function destroy($id)
    {
        $gallery = CommunityEventGallery::findOrFail($id);

        // Only try to delete if an image name exists
        if (!empty($gallery->image)) {
            $imagePath = public_path('admin-assets/images/admin-image/community-events/gallery/' . $gallery->image);

            // Check if it's a file before unlinking
            if (file_exists($imagePath) && is_file($imagePath)) {
                unlink($imagePath);
            }
        }

        $gallery->delete();

        return redirect()->back()->with('success', 'Gallery image deleted successfully!');
    }

}
