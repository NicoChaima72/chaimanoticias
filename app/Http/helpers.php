<?php

use Illuminate\Support\Str;

function setActiveRoute($name)
{
	return request()->routeIs($name) ? 'active' : '';
}

function setMenuOpen($name)
{
	return request()->routeIs($name) ? 'menu-open' : '';
}

function to_slug($description)
{
	return Str::slug($description);
}

function to_capitalized($mesage)
{
	return Str::ucfirst($mesage);
}
