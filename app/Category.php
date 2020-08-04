<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['color_id', 'description'];

	public static function create(array $attributes = [])
	{
		$category = static::query()->create($attributes);
		$category->generateUrl();
	}

	public function generateUrl()
	{
		$url = to_slug($this->description);

		if ($this::where('url', $url)->exists())
			$url .= "-$this->id";

		$this->url = $url;
		$this->save();
	}

	// public function setDescriptionAttribute($name)
	// {
	// 	$this->attributes['description'] = to_capitalized($name);
	// 	$this->attributes['url'] = $this->generateUrl($name);
	// }

	// public function generateUrl($name)
	// {
	// 	$url = to_slug($name);

	// 	if ($this::where('url', $url)->exists())
	// 		$url .= "-$this->id";

	// 	return $url;
	// }


	public function color()
	{
		return $this->belongsTo(Color::class);
	}
}
