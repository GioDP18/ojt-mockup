<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadFileController extends Controller
{
    public function downloadFile()
    {
        $file = Storage::disk('public')->path('Resume.pdf');

        // Check if the file exists
        if (!Storage::disk('public')->exists('Resume.pdf')) {
            abort(404); 
        }
        $downloadName = 'Resume.pdf';
        
        return Storage::download($downloadName, [
            "Access-Control-Allow-Origin: *",
            "Access-Control-Allow-Methods: GET, OPTIONS",
            "Access-Control-Allow-Headers: *"
        ]);
    }
}

