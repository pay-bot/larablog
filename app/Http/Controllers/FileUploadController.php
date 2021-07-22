<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

    public function storeUploads(Request $request)
    {
        $uploadedFileUrl = Cloudinary::upload($request->file('file')->getRealPath())->getSecurePath();

        dd($uploadedFileUrl);

        return back()
            ->with('success', 'File uploaded successfully');
    }
}