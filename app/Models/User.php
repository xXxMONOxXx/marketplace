<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $table = 'users';

    public $fillable = [
        'username',
        'email',
        'password',
        'role_id',
    ];

    protected $casts = [
        'role_id' => 'int',
    ];

    public static array $rules = [

    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function role()
    {
        return $this->hasOne(Role::class, 'id');
    }
}
