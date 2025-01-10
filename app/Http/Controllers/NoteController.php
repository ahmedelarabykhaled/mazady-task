<?php
namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        return Note::where('is_shared', true)->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:text,pdf',
            'content' => 'nullable|string',
            'file_path' => 'nullable|file',
            'folder_id' => 'required|exists:folders,id',
            'is_shared' => 'boolean',
        ]);

        return Note::create($data);
    }

    public function show(Note $note)
    {

    }

    public function update(Request $request, Note $note)
    {
        $data = $request->validate([
            'name' => 'string|max:255',
            'content' => 'nullable|string',
            'file_path' => 'nullable|file',
            'is_shared' => 'boolean',
        ]);
        $note->update($data);
        return $note;
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return response()->noContent();
    }
}
