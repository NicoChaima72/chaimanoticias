<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $fillable = ['user_id', 'category_id', 'title', 'excerpt', 'body'];

	public function getRouteKeyName()
	{
		return 'url';
	}

	public static function create(array $attributes = [])
	{
		$attributes['user_id'] = auth()->id();

		$news = static::query()->create($attributes);
		$news->generateUrl();

		return $news;
	}

	public function generateUrl()
	{
		$url = to_slug($this->title);

		if ($this->where('url', $url)->exists())
			$url .= "-$this->id";

		$this->url = $url;
		$this->save();
	}
}
