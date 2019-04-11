<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Part 2</title>
    <style type="text/css">
    box {
        background-color: yellow;
        height: 350px;
        width: 50%;
    }
    </style>
</head>
<body>
    <?php
    function writeMsg() {
        echo "Hello world! <br>";
    $name = " Lovepreet Uppal <br>";
        echo "My name is" .$name;
    }
    writeMsg();
    ?>
    
    <?php
    function starWars($epNum, $relYear, $title) {
        echo "$relYear, Star Wars Episode $epNum: $title<br>";
    }
    starWars("IV", "1977", "A New Hope");
    starWars("V", "1980", "The Empire Strikes Back");
    starWars("VI", "1983", "Return of the Jedi");
    starWars("I", "1999", "The Phantom Menace");
    starWars("II", "2002", "Attack of the Clones");
    starWars("III", "2005", "Revenge of the Sith");
    starWars("VII", "2015", "The Forces Awaken");
    starWars("VIII", "2017", "The Last Jedi");
    ?>
    
    
    <?php
    function setHeight($minheight = 50) {
        echo "The height is : $minheight <br>";
    }
    echo "<box>";
    $div = "setHeight(350)";
    echo "Height of this div is 350";
        echo "</box>";
    setHeight(350);

    setHeight(); // will use the default value of 50
    setHeight(135);
    setHeight(80);
    
    ?>
    
    
    <?php
    function sum($x, $y) {
//    $z = $x - $y;
    echo "$x" - "$y";
    }
    sum("2019", "1970");
    ?>
    
    
    <?php
    $x = 5; 
    function myTest1() {
    echo "<p>Variable x inside function is: $x</p>";
    } 
    myTest1();
    echo "<p>Variable x outside function is: $x</p>";
    ?>
    
    
    <?php
    function myTest2() {
	$x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
    } 
    myTest2();
    echo "<p>Variable x outside function is: $x</p>";
    ?>
    
    
    <?php
    $x = 5;
    $y = 10;
    function myTest3() {
    global $x, $y;
    $y = $x + $y;
    }
    myTest3();
    echo $y;
    ?>
    
    
    <?php
    $x = 5;
    $y = 10;
    function myTest4() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    } 
    myTest4();
    echo $y; // outputs 15
    ?>

    
</body>
</html>