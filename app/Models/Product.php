<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property int $id
 * @property int $seller_id
 * @property string $name
 * @property string $description
 * @property int $price
 * @property int $quantity
 * @property int $sale
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property User $user
 * @property Collection|Order[] $orders
 * @property Collection|ProductPhoto[] $product_photos
 * @property Collection|ProductPriceHistory[] $product_price_histories
 * @property Collection|ProductsCategory[] $products_categories
 * @property Collection|Review[] $reviews
 *
 * @package App\Models
 */
class Product extends Model
{
    use HasFactory;

	protected $table = 'products';

	protected $casts = [
		'seller_id' => 'int',
		'price' => 'int',
		'quantity' => 'int',
		'sale' => 'int'
	];

	protected $fillable = [
		'seller_id',
		'name',
		'description',
		'price',
		'quantity',
		'sale'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'seller_id');
	}

	public function orders()
	{
		return $this->belongsToMany(Order::class, 'order_products')
					->withPivot('id', 'amount')
					->withTimestamps();
	}

	public function product_photos()
	{
		return $this->hasMany(ProductPhoto::class);
	}

	public function product_price_histories()
	{
		return $this->hasMany(ProductPriceHistory::class);
	}

	public function categories()
	{
		return $this->belongsToMany(Category::class, 'products_categories');
	}

	public function reviews()
	{
		return $this->hasMany(Review::class);
	}
}
