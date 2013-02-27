<?php

function parariusoffice_property_title($property)
{
	$parts = array();
	
	if (!empty($property['city']))
	{
		$parts[] = $property['city'];
	}

	if ($property['forsale'] == '1')
	{
		if (!empty($property['street']))
		{
			$parts[] = $property['street'];
		}
	}
	else
	{
		if (!empty($property['street']))
		{
			$parts[] = trim($property['street'] . ' ' . $property['number'] . ' ' . $property['addition']);
		}
	}

	return implode(', ', $parts);
}
