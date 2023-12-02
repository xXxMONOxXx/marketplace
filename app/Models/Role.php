<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @property int $id
 * @property string $role
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Role extends Model
{
    use HasFactory;

	protected $table = 'roles';

	protected $fillable = [
		'role'
	];

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
