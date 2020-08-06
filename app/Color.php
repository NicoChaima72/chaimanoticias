<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
	protected $fillable = ['description', 'background', 'text'];

	public function countCategories()
	{
		return $this->categories()->count();
	}

	public function categories()
	{
		return $this->hasMany(Category::class);
	}
}
