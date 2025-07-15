<html>
<title>Exercise 3</title>
   <link rel="stylesheet" href="style.css">
<body>
    <form method="post">
        First date: <input type="date" name="first_date" required placeholder="Enter first date"></input>
        <br>
        Second date: <input type="date" name="second_date" required placeholder="Enter second date"></input>
        <br>
        <input type="submit" value="Calculate Difference">
    </form>
    <?php
     if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $firstDate = new DateTime($_POST['first_date']);
            $secondDate = new DateTime($_POST['second_date']);
            
            $interval = $firstDate->diff($secondDate);
            echo "</h2>Difference: " . $interval->format('%y yesrs, %m months, %d days') . "</h2>";
        }
    ?>
</body> 
</html>