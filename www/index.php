<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My First PHP</title>
    </head>
    <body>
        <h1>Hello There!</h1>
        <form method="post">
            <label for="bill">Total Bill Amount:</label>
            <input type="number" name="bill" id="bill" required>
            <label for="percent">Tip Percentage:</label>
            <input type="number" name="percent" id="percent" required>
            <button type="submit">Submit</button>
        </form>

        <?php
            function calculateTip($bill, $percentage){
                if (is_numeric($bill) && is_numeric($percentage)){
                    return ($percentage /100) * $bill;
                }
                return null;
                
            }
            $tipAmount = null;
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $bill = $_POST["bill"];
                $percentage = $_POST["percent"];
                $tipAmount = calculateTip($bill, $percentage);
            }
        ?>
        <?php if ($tipAmount !== null): ?>
            <h2>Tip Amount: <?php echo $tipAmount; ?></h2>
        <?php endif; ?>

    </body>
</html>
