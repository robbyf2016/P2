<!DOCTYPE html>
<html>
<head>
<!--**************************************************************************-->
<!--This page is part of CSCIE-15 created by Robby Fussell as assignment P2   -->
<!--This meta data section contains the charset, the description of the page  -->
<!--and the author of the page.                                               -->
<!--**************************************************************************-->
<meta charset="utf-8">
<meta name="description" content="CSCIE15 P2">
<meta name="author" content="Robby Fussell">
<!--**************************************************************************-->
<!--The page contains a unique and descriptive title.                         -->
<!--**************************************************************************-->
<title>CCSIE15 P2 - Password Generator</title>
<!--**************************************************************************-->
<!--This is the CSS style sheet used by P2                                    --> 
<!--**************************************************************************-->
<link href="P2.css" rel="stylesheet" type="text/css">
<?php require 'logic.php'; ?><!--Require will force the program to stop       
execution if there is a problem-->

</head>

<body>
<div class="container"> 
<!--**************************************************************************-->
<!--This is the php header reference.                                         -->
<!--**************************************************************************-->
<?php include("header.php"); ?><!--Include will only generate an error but will
allow the program to continue to execute-->
  
	  <div class="content">
      <!--Start of form to prompt user to select options for a generated password-->
        	<form action="index.php" method="get"><!--Using GET so the user can bookmark settings for reuseability and no sensitive info-->
            	<fieldset id="pw_fields">
                	<legend>Password Generator Options:</legend>
                    	<ol>
                        	<li>
                            	<label>Select number of words: </label><!--How many words to use for the password-->
                                <select name="number_of_words">
                                	<option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </li>
                            <li>
                            	<label>Include a number: <!--Option to include a number-->
                                <input type="checkbox" name="include_number" value="yes" checked="checked" /></label>
                            </li>
                            <li>
                            	<label>Include a special symbol (e.g., ! @ # $ % ): <!--Option to include a special character-->
                                <input type="checkbox" name="include_symbol" value="yes" checked="checked" /></label>
                            </li>
                            <li>
                            	<input type="submit" value="Generate Password" /><!--Execute logic.php-->
                            </li>
                        </ol>
                    <fieldset id="password_result"><!--Display generated password-->
                     <legend>The newly generated password is:</legend>
                        <p id="pw"><?php echo $password ?></p>
               		</fieldset>                  
               </fieldset>
            </form>
           
  </div>
  		
      <div class="content2">    
   		<h5>xkcd passowrd explanation</h5><!--Image from xkcd that explains the password generator-->
	   	<img src="password_strength.png" width="425" height="348" alt="xkcd password"> 
  </div>
 </div>
  <!--**************************************************************************-->
  <!--This is the php footer used for P2                                        -->
  <!--**************************************************************************--> 
  <?php include("footer.php"); ?><!--Include will only generate an error but will
allow the program to continue to execute-->
</body>
</html>