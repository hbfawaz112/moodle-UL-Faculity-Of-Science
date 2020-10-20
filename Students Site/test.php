<?php

if ($dbc = @mysqli_connect('localhost','root', ''))
	{
		// Handle the error if the database couldnot be selected:
		if (@mysqli_select_db($dbc,'ulfs5_student'))
		{
            echo "selecteddd";
        }
    
    }

?>