<?php

namespace App\Http\Controllers;

use App\Site;
 
class SiteAPIController extends Controller
{
    public function index()
    {
        return Site::all();
    }
 
    public function show($id)
    {
        return Site::with([])->find($id);
    }

    public function store(Request $request)
    {
        return Site::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $site = Site::findOrFail($id);
        $site->update($request->all());

        return $site;
    }

    public function delete(Request $request, $id)
    {
        $site = Site::findOrFail($id);
        $site->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
