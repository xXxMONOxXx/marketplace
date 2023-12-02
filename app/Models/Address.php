<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 *
 * @property int $id
 * @property int $user_id
 * @property string $street
 * @property string $city
 * @property string|null $apartament
 * @property int $zipcode
 * @property string $country
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property User $user
 *
 * @package App\Models
 */
class Address extends Model
{
    use HasFactory;

	protected $table = 'addresses';

	protected $casts = [
		'user_id' => 'int',
		'zipcode' => 'int'
	];

	protected $fillable = [
		'user_id',
		'street',
		'city',
		'apartment',
		'zipcode',
		'country'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
