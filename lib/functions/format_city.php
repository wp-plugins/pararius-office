<?php

// function to properly display dutch city names
function parariusoffice_format_city($city)
{
	return preg_replace_callback('/[^^]\b(aan|bij|de|den|en|het|in|op|over|ter|van|s|t)\b/i', function($m)
	{
		return strtolower($m[0]);
	},
	preg_replace_callback('/\b(\w+)\b/', function($word)
	{
		return mb_strtoupper(mb_substr($word[1], 0, 1), 'utf-8') . mb_substr($word[1], 1);
	}, mb_strtolower($city, 'utf-8')));
}
