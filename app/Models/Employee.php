<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;

    // protected $casts = [
    //     'employees' => 'json',
    // ];

    protected $hidden = ['departments_data'];

    public function departments_data()
    {
        return $this->hasManyJson(Department::class, 'employee_ids');
    }
}
