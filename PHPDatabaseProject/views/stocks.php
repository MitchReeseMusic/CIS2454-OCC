
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Stocks List</title>
    </head>
    <?php include ('topNavigation.php'); ?>
    </br>
    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Symbol</th>
                <th>Current Price</th>
                <th>ID</th>
            </tr>
            <?php foreach($stocks as $stock) : ?>
            <tr>
                <td><?php echo $stock['symbol']; ?></td>
                <td><?php echo $stock['name']; ?></td>
                <td><?php echo $stock['current_price']; ?></td>
                <td><?php echo $stock['id']; ?></td>
            </tr>
            
            <?php endforeach; ?>
        </table>
        </br>
        <h2>Add Stock</h2>
        <form action="stocks.php" method="post"> 
            <label>Symbol:</label> 
            <input type="text" name="symbol"/><br> 
            <label>Name:</label> 
            <input type="text" name="name"/><br> 
            <label>Current Price:</label> 
            <input type="text" name="current_price"/><br> 
            <input type="hidden" name='action' value='insert'/>
            <label>&nbsp;</label>
            <input type="submit" value="Add Stock"/> 
        </form>
        </br>
        <h2>Update Stock</h2>
        <form action="stocks.php" method="post"> 
            <label>Symbol:</label> 
            <input type="text" name="symbol"/><br> 
            <label>Name:</label> 
            <input type="text" name="name"/><br> 
            <label>Current Price:</label> 
            <input type="text" name="current_price"/><br> 
            <input type="hidden" name='action' value='update'/>
            <label>&nbsp;</label>
            <input type="submit" value="Update Stock"/> 
        </form>
        <h2>Delete Stock</h2>
        <form action="stocks.php" method="post"> 
            <label>Symbol:</label> 
            <input type="text" name="symbol"/><br> 
            <input type="hidden" name='action' value='delete'/>
            <label>&nbsp;</label>
            <input type="submit" value="Delete Stock"/> 
        </form>
    </body>
    </br>
    <?php include ('footer.php'); ?>
</html>