<?php

/**
 * Karpon V0.1
 * Copyright 2014, Marko Manninen
 * www.karpon.net
 * Free to use under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 */

include 'manuscript.php';

$manuscript_name = 'sonnets';

foreach ($manuscript[$manuscript_name] as $chapter_num => $chapter) {
	foreach ($chapter as $verse_num => $verse) {
		$words = array();
		$verse = preg_replace('/[^\p{L}\p{N}\s]/u', '', $verse);
		foreach (explode(' ', $verse) as $word) {
			$words[] = array($word, '', '');
		}
		$manuscript[$manuscript_name][$chapter_num][$verse_num] = $words;
	}
}

?>