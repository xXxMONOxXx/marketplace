<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property int $id
 * @property int $user_id
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property User $user
 * @property Collection|Product[] $products
 * @property Collection|Transaction[] $transactions
 *
 * @package App\Models
 */
class Order extends Model
{

    use HasFactory;

	protected $table = 'orders';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function products()
	{
		return $this->belongsToMany(Product::class, 'order_products')
					->withPivot('id', 'amount')
					->withTimestamps();
	}

	public function transactions()
	{
		return $this->hasMany(Transaction::class);
	}
}
