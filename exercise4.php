
    <?php

    session_start();

     if (!isset($_SESSION['balance'])){
        $_SESSION['balance'] = 0;
     }

     $message = '';
        
     if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $amount = floatval($_POST['amount']);
        $action = $_POST['action'];

        if ($amount <= 0){
            $message = "Amount must be greater than zero!";
        } else {
            if ($action === "deposit"){
                $_SESSION['balance'] += $amount;
                $message = "Deposited: $amount lv.";
            } elseif ($action === "withdraw"){
                if ($amount > $_SESSION['balance']){
                    $message = "Not enough balance to witdrow!";
                } else{
                    $_SESSION['balance'] -= $amount;
                    $message = "Withdrew: $amount lv.";
                }
            }
        }
        }
    ?>
    
<html>
<title>Exercise 3</title>
   <link rel="stylesheet" href="style.css">
<body>

    Balance: <b><?php echo $_SESSION['balance']; ?> lv.</b>


    <form method="post">
        Amount: <input type="number" name="amount" step="0.01" required placeholder="Enter amount">
        <br>
        <input type="submit" name="action" value="deposit">
        <input type="submit" name="action" value="withdraw">
    </form>
    
    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

</body> 
</html>