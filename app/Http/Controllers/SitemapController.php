<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $contents = file_get_contents(resource_path('views/sitemap.xml'));

        return response($contents, 200)->header('Content-Type', 'application/xml');
    }
}
