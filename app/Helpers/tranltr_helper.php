<?php
function rus2translit($text, $option)
{
	// Русский алфавит
	$rus_alphabet = array(
		'Ш', 'Щ', 'Э', 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й',
		'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф',
		'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я',
		'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й',
		'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф',
		'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'
	);
	
	// Английская транслитерация
	$rus_alphabet_translit = array(
		'SH','SHCH','AA', 'A', 'B', 'V', 'G', 'D', 'E', 'IO', 'ZH', 'Z', 'I', 'I',
		'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F',
		'H', 'C', 'CH', 'SH', 'SHCH', '`', 'Y', '`', 'E', 'IU', 'IA',
		'a', 'b', 'v', 'g', 'd', 'e', 'io', 'zh', 'z', 'i', 'i',
		'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f',
		'h', 'c', 'ch', 'sh', 'shch', '`', 'y', '`', 'e', 'iu', 'ia'
	);
	
if ($option == 'ru')
{
	return str_replace($rus_alphabet_translit, $rus_alphabet, $text);
}
else if ($option == 'en')
{
	return str_replace($rus_alphabet, $rus_alphabet_translit, $text);
}	
}
?>