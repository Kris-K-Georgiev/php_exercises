<html>
    <title>Exercise 2</title>
       <link rel="stylesheet" href="style.css">
    <body>
        <form method="post">

            Temperature: <input type="number" step="any" name="temperature" required placeholder="Enter temperature">
                <br>
            From: <select name="from">
                    <option value="celsius">Celsius</option>
                    <option value="fahrenheit">Fahrenheit</option>
                    <option value="kelvin">Kelvin</option>
                </select>
            To: <select name="to">
                    <option value="celsius">Celsius</option>
                    <option value="fahrenheit">Fahrenheit</option>
                    <option value="kelvin">Kelvin</option>
                </select>
                <br>
            <input type="submit" value="Convert">
        </from>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST"){
                $temp=(float) $_POST['temperature'];
                $from = $_POST['from'];
                $to = $_POST['to'];

                if ($from == 'fahrenheit'){
                    $celsius = ($temp - 32) * 5/9;
                } elseif ($from == 'kelvin'){
                    $celsius = $temp - 273.15;
                } else {
                    $celsius = $temp; 
                }

                if ($to == 'fahrenheit'){
                    $converted = $temp * (9/5) + 32;
                } elseif ($to == 'kelvin'){
                    $converted = $celsius + 273.15;
                }
                else {
                    $converted = $celsius;
                }
            }
            echo "<h2>Converted Temperature: $converted $to</h2>";
        ?>
</body>
</html>