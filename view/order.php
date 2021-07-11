<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bill</title>
</head>
<body>
<h1>Bill</h1>
<p>
    Your tree is :<?= $tree->getKind() ?> and costs  &euro; <?= $tree->getPrice() ?>


</p>
<table>
    <tr><td>your decorations</td></tr>
    <?php for($i=0;$i<4;$i++){
        $dec = $decorations[$i]->getColor();
        $price = $decorations[$i]->getPrice();
        echo "<tr><td>your decoration is colored: </td><td>$dec</td><td> &euro; $price</td></tr>";
    }?>

</table>
<hr />BONUS</h1>
<p>Total price : &euro; <?=$total?></p>


</body>
</html>