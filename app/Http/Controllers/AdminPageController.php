<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPageController extends Controller
{
    public function index(Request $request)
    {

        return view("adminhome");
    }

    public function galery(Request $request)
    {

        $request->validate(
            [
                "gambar" => 'required|mimes:png,jpg,jpeg,webp|mimetypes:image/jpeg,image/png,image/webp',
                'info' => 'required|max:255'
            ]
        );
        $gambar = $request->file('gambar');
        $hasname =  pathinfo($gambar->hashName(), PATHINFO_FILENAME);
        Storage::putFileAs('galery', $gambar, $gambar->hashName());
        Galery::create(attributes: [
            'file' => $gambar->hashName(),
            'filename' => $hasname,
            'info' => $request->info,
        ]);
        return back()->with('success', 'berhasil upload');
    }
}
