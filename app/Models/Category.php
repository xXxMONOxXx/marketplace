<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|ProductsCategory[] $products_categories
 *
 * @package App\Models
 */
class Category extends Model
{
    use HasFactory;

	protected $table = 'categories';

	protected $fillable = [
		'name',
		'description'
	];
}
