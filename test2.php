<?php

require_once 'CircularArrayIterator.php';

$arr = [
	'best-friend' => 'Armin',
	'father' => 'Stephan',
	'mother' => 'Maria',
	'ex-girlfriend' => 'Stephanie',
	'ex-friend' => 'Thomas'
];

$iter = new CircularArrayIterator($arr);
$iter->rewind();

echo "<pre>"; var_dump($arr); echo "</pre>";

for($i=0;$i<=21;$i++) {
	echo $iter->key() . ': ' . $iter->current();
	echo '<br />';
	$iter->next();
}