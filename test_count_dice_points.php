<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing page for count_dice_points.php</title>
</head>
<body>
    <h1>Testing page for count_dice_points.php</h1>
    <form action="test_count_dice_points.php" method="POST">

        Würfel1:
        <input type="number" name="dice1" value=""><br>
        Würfel2:
        <input type="number" name="dice2" value=""><br>
        Würfel3:
        <input type="number" name="dice3" value=""><br>
        Würfel4:
        <input type="number" name="dice4" value=""><br>
        Würfel5:
        <input type="number" name="dice5" value="">
        
        <input type="submit" name="test" value="Test">

    </form>

    <?php
        if(isset($_POST["test"])) {
            
            $dices = [$_POST["dice1"], $_POST["dice2"], $_POST["dice3"], $_POST["dice4"], $_POST["dice5"]];
            include "count_dice_points.php";

            echo "<hr>";
            echo "<h2>Eingegebene Testdaten</h2>";
            echo "W1: ".$dices[0]."<br>";
            echo "W2: ".$dices[1]."<br>";
            echo "W3: ".$dices[2]."<br>";
            echo "W4: ".$dices[3]."<br>";
            echo "W5: ".$dices[4]."<br>";

            echo "<hr>";
            echo "<h2>I. Upper Block</h2>";
            echo "<h3>Teste \"Eins'er zählen\" - function count_ones(..){..}</h3>";
            echo count_ones($dices);

            echo "<hr>";
            echo "<h3>Teste \"Zwei'er zählen\" - function count_twos(..){..}</h3>";
            echo count_twos($dices);

            echo "<hr>";
            echo "<h3>Teste \"Drei'er zählen\" - function count_threes(..){..}</h3>";
            echo count_threes($dices);

            echo "<hr>";
            echo "<h3>Teste \"Vier'er zählen\" - function count_fours(..){..}</h3>";
            echo count_fours($dices);

            echo "<hr>";
            echo "<h3>Teste \"Fünf'er zählen\" - function count_fives(..){..}</h3>";
            echo count_fives($dices);

            echo "<hr>";
            echo "<h3>Teste \"Sechs'er zählen\" - function count_sixs(..){..}</h3>";
            echo count_sixs($dices);

            echo "<hr>";
            echo "<h2>II. Lower Block</h2>";
            echo "<h3>Teste \"Dreierpasch zählen\" - function triple(..){..}</h3>";
            echo triple($dices);

            echo "<hr>";
            echo "<h3>Teste \"Viererpasch zählen\" - function foursome(..){..}</h3>";
            echo foursome($dices);

            echo "<hr>";
            echo "<h3>Teste \"Full House zählen\" - function fullhouse(..){..}</h3>";
            echo fullhouse($dices);

            echo "<hr>";
            echo "<h3>Teste \"Kleine Straße zählen\" - function small_street(..){..}</h3>";
            echo small_street($dices);

            echo "<hr>";
            echo "<h3>Teste \"Große Straße zählen\" - function big_street(..){..}</h3>";
            echo big_street($dices);

            echo "<hr>";
            echo "<h3>Teste \"Kniffel zählen\" - function yahtzee(..){..}</h3>";
            echo yahtzee($dices);

            echo "<hr>";
            echo "<h3>Teste \"Chance zählen\" - function chance(..){..}</h3>";
            echo chance($dices);

            echo "<hr>";
        }
    ?>
</body>
</html>