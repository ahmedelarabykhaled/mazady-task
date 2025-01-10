<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /** @use HasFactory<\Database\Factories\DepartmentFactory> */
    use HasFactory;
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;

    protected $hidden = ['employee_ids', 'salary_data'];

    protected $appends = [
        'salary'
    ];

    protected $casts = [
        'employee_ids' => 'json',
    ];

    public function employees_data()
    {
        return $this->belongsToJson(Employee::class, 'employee_ids');
    }

    public function salary_data()
    {
        return $this->belongsTo(Salary::class, 'salary_id', 'id');
    }

    public function getSalaryAttribute()
    {
        return $this->salary_data->amount;
    }
}
