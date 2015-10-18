<?php
function array_unique_xl($array)
{
	if (count($array)<1) {
		return 0;
	}
	for ($i = 0; $i < $count; $i++) {
        if (empty($array[$i])) {
            unset($array[$i]);
        }
    }
	$result = array_keys(array_count_values($array));
	return $result;
}
