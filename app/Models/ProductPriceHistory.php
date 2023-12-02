<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductPriceHistory
 *
 * @property int $id
 * @property int $product_id
 * @property int $price
 * @property bool $was_on_sale
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Product $product
 *
 * @package App\Models
 */
class ProductPriceHistory extends Model
{
	protected $table = 'product_price_history';

	protected $casts = [
		'product_id' => 'int',
		'price' => 'int',
		'was_on_sale' => 'bool'
	];

	protected $fillable = [
		'product_id',
		'price',
		'was_on_sale'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
