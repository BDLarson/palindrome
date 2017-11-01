<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Palindrome Checker</title>
    </head>
    <body>
        <form action="index.php" method="post">
            Enter a Number: <input type="text" name="input"/>
            <button type ="submit">Check</button>
        </form>
        <?php
            if ($_POST) {
                //Remove spaces in input
                $input = str_replace(' ', '', $input);

                //Remove special characters in input
                $input = preg_replace('/[^A-Za-z0-9\-]/', '',$input);

                //Change all individual characters to lowercase
                $input = strtolower($input);

                //Create a reverse input variable
                $reverseInput = strrev($input);

                if ($input == $reverseInput) {
                    echo "The input IS a Palindrome!";
                } else {
                    echo "The input IS NOT a Palindrome!";
                }
            }
        ?>
    </body>
</html>
