<?php

// Replacing timetable to get week numbers
if (strpos($controllerName, "timetable/Week") === 0) {
	$_GET['week'] = substr($controllerName, strlen("timetable/Week"));
	$controllerName = 'Timetable';
}
else if (strpos($controllerName, "images/") === 0) {
	$controllerNameRawSplit = explode('/', $controllerNameRaw);
	$_GET['file_id'] = $controllerNameRawSplit[count($controllerNameRawSplit)-1];
	$controllerName = 'ajax/GetImageAjax';
}

else if ($controllerName === "computerTask/task/Practice") {
	$_GET['practice_mode'] = true;
	$controllerName = 'computerTask/Task';
}
