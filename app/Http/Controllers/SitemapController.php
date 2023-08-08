<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function sitemap()
    {
        $contents = file_get_contents(resource_path('views/sitemap.xml'));

        return response($contents, 200)->header('Content-Type', 'application/xml');
    }
}
