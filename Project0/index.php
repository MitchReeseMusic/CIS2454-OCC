<?php
$name = htmlspecialchars(filter_input(INPUT_GET, 'name'));
$current_age = filter_input(INPUT_GET, 'current_age', FILTER_VALIDATE_INT);
$desired_retirement_age = filter_input(INPUT_GET, 'desired_retirement_age', FILTER_VALIDATE_INT);
$current_bank_savings = filter_input(INPUT_GET, 'current_bank_savings', FILTER_VALIDATE_INT);
$current_market_investments = filter_input(INPUT_GET, 'current_market_investments', FILTER_VALIDATE_INT);
$annual_bank_savings = filter_input(INPUT_GET, 'annual_bank_savings', FILTER_VALIDATE_INT);
$annual_market_investments = filter_input(INPUT_GET, 'annual_market_investments', FILTER_VALIDATE_INT);
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <form action="index.php" method="get"> 
            <label>Name: </label> 
            <input type="text" name="name"/><br> 
            <label>Current Age: </label> 
            <input type="text" name="current_age"/><br> 
            <label>Desired Retirement Age: </label> 
            <input type="text" name="desired_retirement_age"/><br> 
            <label>Current Bank Savings: </label> 
            <input type="text" name="current_bank_savings"/><br> 
            <label>Current Market Investments: </label> 
            <input type="text" name="current_market_investments"/><br> 
            <label>Amount Saved in Bank each year: </label> 
            <input type="text" name="annual_bank_savings"/><br> 
            <label>Amount Invested in the Market each year: </label> 
            <input type="text" name="annual_market_investments"/><br>

            <label>&nbsp;</label>
            <input type="submit" value="Submit"/> 
        </form>

        <h2>Retirement Projections for <?php echo $name ?></h2>

        <?php
        for ($age = $current_age; $age < $desired_retirement_age; $age++) {
            $current_bank_savings += $annual_bank_savings;
            $current_bank_savings *= 1.01;

            $current_market_investments += $annual_market_investments;
            $annual_return = 1 + (rand(-10, 30) / 100);
            $current_market_investments *= $annual_return;

            echo "</br>Age: $age - Bank Savings: $current_bank_savings - "
            . "Market Investments: $current_market_investments";
        }
        $total_retirement_value = $current_bank_savings + $current_market_investments;
        $total_retirement_value_adjusted_for_inflation = $total_retirement_value 
                / pow(1.03, ($desired_retirement_age - $current_age));
                
        echo "</br>Total retirement value: $$total_retirement_value";
        echo "</br>Total retirement value adjusted for inflation: "
        . "$$total_retirement_value_adjusted_for_inflation";
        
        ?>
    </body>
</html>
