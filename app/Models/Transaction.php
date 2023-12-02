<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 *
 * @property int $id
 * @property int $buyer_id
 * @property string $transaction_type
 * @property int $amount
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $order_id
 *
 * @property User $user
 * @property Order $order
 *
 * @package App\Models
 */
class Transaction extends Model
{
	protected $table = 'transactions';

	protected $casts = [
		'buyer_id' => 'int',
		'amount' => 'int',
		'order_id' => 'int'
	];

	protected $fillable = [
		'buyer_id',
		'transaction_type',
		'amount',
		'order_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'buyer_id');
	}

	public function order()
	{
		return $this->belongsTo(Order::class);
	}
}
