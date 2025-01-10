<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function index()
    {
    }

    public function store(Request $request)
    {
        
    }

    public function show(Folder $folder)
    {
        return $folder->load('notes');
    }

    public function update(Request $request, Folder $folder)
    {
        $data = $request->validate(['name' => 'required|string|max:255']);
        $folder->update($data);
        return $folder;
    }

    public function destroy(Folder $folder)
    {
        $folder->delete();
        return response()->noContent();
    }
}
