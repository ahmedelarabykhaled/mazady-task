<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'content', 'file_path', 'is_shared', 'folder_id'];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }
}
