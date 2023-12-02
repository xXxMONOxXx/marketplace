<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Review
 *
 * @property int $id
 * @property int $reviewer_id
 * @property int $product_id
 * @property int $rating
 * @property string|null $comment
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Product $product
 * @property User $user
 *
 * @package App\Models
 */
class Review extends Model
{
    use HasFactory;

	protected $table = 'reviews';

	protected $casts = [
		'reviewer_id' => 'int',
		'product_id' => 'int',
		'rating' => 'int'
	];

	protected $fillable = [
		'reviewer_id',
		'product_id',
		'rating',
		'comment'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'reviewer_id');
	}
}
