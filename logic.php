<?php
 
$password = "";
$upper_bounds = 9;
$lower_bounds = 0; 
 
$word_list = Array(
    1 => "schedule",
    2 => "computer",
    3 => "software",
    4 => "lightning",
    5 => "pencil",
    6 => "staple",
    7 => "paper",
    8 => "degree",
    9 => "mouse",
    10 => "tiger",
    11 => "lion",
    12 => "beach",
    13 => "planet",
    14 => "solaris",
    15 => "security"
);

$special_character_list = Array(
	1 => "!",
	2 => "@",
	3 => "!",
	4 => "$",	
	5 => "%",
	6 => "^",
	7 => "&",
	8 => "*",
	9 => "(",
	0 => ")"
);


for ($i=0; $i < (!empty($_GET['number_of_words']) ? $_GET['number_of_words'] : null); $i++)
	{
		$password_rand_key = array_rand($word_list);
		$password = "[".$word_list[$password_rand_key] ."]   ". $password;
	}

if ((!empty($_GET['include_symbol']) ? $_GET['include_symbol'] : null) == 'yes')
	{
		$special_character_rand_key = array_rand($special_character_list);	
		$password = $password . "[" . $special_character_list[$special_character_rand_key] . "]  ";
	}
	
if ((!empty($_GET['include_number']) ? $_GET['include_number'] : null) == 'yes')
	{	
		$rand_number = rand($lower_bounds,$upper_bounds);	
		$password = $password . "[" . $rand_number . "]  ";
	}