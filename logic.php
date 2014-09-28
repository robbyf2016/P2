<?php
/*****************************************************************************/
/*This section is used to initialize variables.  The password string variable
will be used to hold the generated password.  The upper and lower bounds 
variables are used to specify the range for the rand function to generate a 
random number*/
$password = "";
$upper_bounds = 9;
$lower_bounds = 0; 
/*****************************************************************************/
 
 
/*****************************************************************************/ 
/*This is the word array list to select random words for the generated
password.  I would had liked to have time to generate a word list array in a
separate php file and include it here that would have a much larger selection.
*/
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
/*****************************************************************************/



/*****************************************************************************/
/*This is the special character array that will add a special character to
the end of the new password if the user selects it.
*/
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
/*****************************************************************************/



/***********************************************************************************************/
/*This for loop is used to randomly cycle through the word list and grabs a random word
to include in the generated password.  It loops through based on the number that the
user selects from the dropdown menu in the password options form menu
*/
for ($i=0; $i < (!empty($_GET['number_of_words']) ? $_GET['number_of_words'] : null); $i++)
	{
		$password_rand_key = array_rand($word_list);
		$password = "[".$word_list[$password_rand_key] ."]   ". $password;
	}
/***********************************************************************************************/



/***********************************************************************************************/
/*This if statement is used to test if the user selected to add a special character to their
password.  If they did select to add a special character, then this section will randomly select
a special character rom the special character array list
*/
if ((!empty($_GET['include_symbol']) ? $_GET['include_symbol'] : null) == 'yes')
	{
		$special_character_rand_key = array_rand($special_character_list);	
		$password = $password . "[" . $special_character_list[$special_character_rand_key] . "]  ";
	}
/***********************************************************************************************/



/***********************************************************************************************/
/*This if statement tests to see if the user selected to add a number to their password. 
If selected, this section will randomly select a number from a range between the variables
upper and lower bounds declared at the top of this code page.  It currently select single digit
numbers to use.
*/	
if ((!empty($_GET['include_number']) ? $_GET['include_number'] : null) == 'yes')
	{	
		$rand_number = rand($lower_bounds,$upper_bounds);	
		$password = $password . "[" . $rand_number . "]  ";
	}
/***********************************************************************************************/