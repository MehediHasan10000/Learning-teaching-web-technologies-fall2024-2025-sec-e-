<?php 
if (isset($_GET['submit'])) {
    $username = $_GET['username'];
    if ($username == null) 
    {
        echo "Null username";
    } 
    else 
    {
        if(strlen($username)<2)
        {
            echo"Invalid charcter size";
        }
        else if (!(($username[0] >= 'A' && $username[0] <= 'Z') || ($username[0] >= 'a' && $username[0] <= 'z'))) {
            echo "Invalid username: must start with a letter";
        }
        else {
            $valid = true;
            for ($i = 0; $i < strlen($username); $i++) 
            {
                if (
                    !(
                        ($username[$i] >= 'A' && $username[$i] <= 'Z') || 
                        ($username[$i] >= 'a' && $username[$i] <= 'z') || 
                        $username[$i] == '.' || 
                        $username[$i] == '-' || 
                        $username[$i] == ' '
                    )
                ) {
                    $valid = false;
                    break;
                }
            }
            if (!$valid) {
                echo "Invalid username: only letters, periods, dashes, and spaces are allowed";
            } else {
                echo "Valid username";
            }
        }
    }
}
?>




<html>
<head>
    <title>Name</title>
</head>
<body>
        <form method="get" action="task3.1.php" enctype=""> <br>
            Name: <input type="text" name="username" value="test" /> <br>
            <input type="submit" name="submit" value="Submit" />
        </form>
</body>
</html>