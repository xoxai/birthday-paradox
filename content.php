<?php

$birthdays = file_get_contents("./birthdays_list.txt");
$birthdays = explode(",", $birthdays);

// последний всегда -- это пустая строка, удалим её
unset($birthdays[count($birthdays)-1]);

// выведем списком повторяющиеся дни рождения
$content = "";
foreach(array_count_values($birthdays) as $value => $counter) {
	if ($counter > 1) {
		$content .= '<span id="birthday"><b>' . $value . '</b></span>';
	}
}

if ($content == "") {
	echo "Здесь появятся все даты, в которые родились больше, чем один человек.";
}

$totalCounter = count($birthdays);

echo $content . '<br><span id="total_counter"><b>Всего голосов</b>: ' . $totalCounter . '</span>';

?>