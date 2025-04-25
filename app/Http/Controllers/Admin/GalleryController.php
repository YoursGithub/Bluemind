<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function allGalleryView()
    {
        return view('pages.admin.gallery.all-gallery');
    }

    public function createGalleryView()
    {
        return view('pages.admin.gallery.gallery-create');
    }

    public function createGallery(Request $request)
    {

        $request->validate([
            'heading' => 'required',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg',
        ]);

        $gallery = Gallery::create([
            'heading' => $request->input('heading')
        ]);

        $images = $request->file('images');

        // dd($images , $gallery->id);

        foreach ($images as $img) {

            GalleryImage::create([
                'gallery_id' => $gallery->id,
                'image_path' => FileUploader::upload($img),
            ]);
        }

        return to_route('admin.all-gallery')->with(['success' => 'Gallery Created']);
    }

    public function updateGalleryView(Gallery $id)
    {
        $gallery = $id;

        return view('pages.admin.gallery.gallery-update', compact('gallery'));
    }

    public function updateGallery(Request $request, Gallery $id)
    {
        $request->validate([
            'heading' => 'required',
            'new_images.*' => 'sometimes|image|mimes:jpeg,png,jpg',
        ]);

        $gallery = $id;

        $remove_images = $request->input('remove_images', []);
        $new_images = $request->file('new_images', []);

        $heading =  $request->input('heading');


        if (!empty($remove_images)) {
            GalleryImage::destroy($remove_images);
        }

        foreach ($new_images as $img) {
            GalleryImage::create([
                'gallery_id' => $gallery->id,
                'image_path' => FileUploader::upload($img),
            ]);
        }

        $gallery->update(['heading' => $heading]);

        return to_route('admin.all-gallery')->with(['success' => 'Gallery Updated']);
    }

    public function deleteGallery(Gallery $id)
    {
        $id->delete();
        return to_route('admin.all-gallery')->with(['success' => 'Gallery Deleted']);
    }
}
