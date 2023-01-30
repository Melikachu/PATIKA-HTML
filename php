if (isset($_POST["value"])) {
    $q = $_POST["value"];
    if ($q == "") {
        echo "Try Again !"."<br>";
        header('Refresh:3 ; URL=PHP.php');
    } else {
        if ($q % 3 == 0) {
            echo "$q is divisible by 3";
            header('Refresh:3 ; URL=PHP.php');
        } else {
            $next = $q;
            $next++;
            while ($next % 3 !== 0) {
                $next++;
            }
            echo "The number $q is not divisible by 3";
            echo '<br>';
            echo  "The number that is divisible by the closest 3 to the value you entered is: $next";
            header('Refresh:5 ; URL=PHP.php');
        }
    }
}
