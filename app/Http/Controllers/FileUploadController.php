<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class FileUploadController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

    public function storeUploads(Request $request)
    {
        $response = Cloudinary::upload($request->file('file')->getRealPath())->getSecurePath();

        dd($response);

        return back()
            ->with('success', 'File uploaded successfully');
    }
}