<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function permissions()
    {
        $this->belongsToMany(Permission::class, 'role_has_permissions');
    }

    public function users()
    {
        $this->belongsToMany(User::class, 'user_permissions');
    }
}
