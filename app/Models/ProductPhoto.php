<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductPhoto
 *
 * @property int $id
 * @property int $product_id
 * @property string $photo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Product $product
 *
 * @package App\Models
 */
class ProductPhoto extends Model
{
	protected $table = 'product_photos';

	protected $casts = [
		'product_id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'photo'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
