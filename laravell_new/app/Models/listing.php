<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listing extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['title', 'company', 'location', 'website', 'email', 'tags', 'description'];
=======
    // protected $fillable = ['title', 'company', 'location', 'website', 'email', 'tags', 'description'];
>>>>>>> 0e69cbf05cb565d32c87e1b2764e1b87312c1e30

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orwhere('description', 'like', '%' . request('search') . '%')
                ->orwhere('tags', 'like', '%' . request('search') . '%')
                ->orwhere('company', 'like', '%' . request('search') . '%');
        }
    }
}