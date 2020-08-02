<?php

function setActiveRoute($name)
{
	return request()->routeIs($name) ? 'active' : '';
}

function setMenuOpen($name)
{
	return request()->routeIs($name) ? 'menu-open' : '';
}
