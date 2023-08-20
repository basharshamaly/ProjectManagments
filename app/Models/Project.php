<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function productCategories()
    {
        return $this->hasMany(ProductCategory::class, 'project_id', 'id');
    }

    public function Tasks()
    {
        return $this->hasMany(Task::class, 'project_id', 'id');
    }
}
