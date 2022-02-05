!
<!doctype html>
<html lang="in">

<head>
    // TODO
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <!-- //FIXME: perbaiki ini -->
    <div class="container">
        <div class="card card-body  alert-success">
            <h2>PHP Data Types,</h2>
            <h2>Strings,</h2>
            <h2>PHP Numbers,</h2>
            <h2>PHP Math,</h2>
            <h2>PHP Constants,</h2>
            <h2>PHP Operators,</h2>
            <h2>PHP If ...Else...Elseif,</h2>
            <h2>PHP Switch,</h2>
            <h2>PHP Loops,</h2>
            <h2>PHP Functions,</h2>
            <h2>PHP Arrays,</h2>
            <h2>PHP Superglobals,</h2>
        </div>
        //FIXME: perbaiki saja
        <div class="row">
            <div class="col-md-3">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>For</b></div>
                        <div class="card-body">
                            <ol>
                                <?php
                                for ($i = 1; $i <= 10; $i++) {
                                    echo "<li>Nama Mahasiswa ke-$i</li>";
                                }
                                ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>for</b></div>
                        <div class="card-body">
                            <ol>
                                <?php
                                for ($i = 1; $i <= 10; $i++) {
                                    echo "<li> Nama Peserta ke - $i</li>";
                                }
                                ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>Array</b></div>
                        <div class="card-body">
                            <?php
                            $cars = array("Volvo", "BMW", "Toyota");
                            echo "Aku suka " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>
                                Indexed Array
                            </b></div>
                        <div class="card-body">
                            <?php
                            $cars = array("Daihatsu", "Lexus", "Suzuki");
                            echo "Aku punya " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>
                                Loop Melalui Array Terindeks
                            </b></div>
                        <div class="card-body">
                            <?php
                            $mobil = array("Sedan", "Mercedez", "Nissan");
                            $PanjangArgumen = count($mobil);

                            for ($x = 0; $x < $PanjangArgumen; $x++) {
                                echo $mobil[$x];
                                echo "<br>";
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>
                                Associative Array
                            </b></div>
                        <div class="card-body">
                            <?php
                            $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
                            echo "Peter Berumur " . $age['Peter'] . " Tahun."; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>
                                Loop Melalui Array Asosiatif
                            </b></div>
                        <div class="card-body">
                            <?php

                            $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

                            foreach ($age as $x => $x_value) {
                                echo "Key=" . $x . ", Value=" . $x_value;
                                echo "<br>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>
                                PHP - Dua-dimensional arrays
                            </b></div>
                        <div class="card-body">
                            <?php

                            $cars = array(
                                array("Volvo", 22, 18),
                                array("BMW", 15, 13),
                                array("Saab", 5, 2),
                                array("Land Rover", 17, 15)
                            );

                            for ($row = 0; $row < 4; $row++) {
                                echo "<p><b>Row number $row</b></p>";
                                echo "<ul>";
                                for ($col = 0; $col < 3; $col++) {
                                    echo "<li>" . $cars[$row][$col] . "</li>";
                                }
                                echo "</ul>";
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>
                                PHP - If
                            </b></div>
                        <div class="card-body">
                            <?php
                            $t = date("H");

                            if ($t < "20") {
                                echo "Have a good day!";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-3">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>
                                PHP - Date
                            </b></div>
                        <div class="card-body">
                            <?php

                            // Use a constant in the format parameter
                            echo date(" h : i : mA  l, j / F / Y") . "<br><br>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>
                                PHP - The if...else Statement
                            </b></div>
                        <div class="card-body">
                            <?php
                            //    if (condition) {
                            //   code to be executed if condition is true;
                            // } else {
                            //   code to be executed if condition is false;
                            // } 

                            $t = date("H");

                            if ($t < "20") {
                                echo "Have a good days!!!";
                            } else {
                                echo "Have a good night!";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>
                                PHP - The if...elseif...else Statement
                            </b></div>
                        <div class="card-body">
                            <?php
                            //               if (condition) {
                            //   code to be executed if this condition is true;
                            // } elseif (condition) {
                            //   code to be executed if first condition is false and this condition is true;
                            // } else {
                            //   code to be executed if all conditions are false;
                            // } 

                            $t = date("H");

                            if ($t < "10") {
                                echo "Have a good morning !!!";
                            } elseif ($t < "20") {
                                echo "Have a good days";
                            } else {
                                echo "Have a good night :)";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>
                                PHP switch Statement
                            </b></div>
                        <div class="card-body">
                            <?php
                            //                switch (n) {
                            //   case label1:
                            //     code to be executed if n=label1;
                            //     break;
                            //   case label2:
                            //     code to be executed if n=label2;
                            //     break;
                            //   case label3:
                            //     code to be executed if n=label3;
                            //     break;
                            //     ...
                            //   default:
                            //     code to be executed if n is different from all labels;
                            // }

                            $favcolor = "red";

                            switch ($favcolor) {
                                case "red":
                                    echo "Your favorite color is red!";
                                    break;
                                case "blue":
                                    echo "Your favorite color is blue!";
                                    break;
                                case "green":
                                    echo "Your favorite color is green!";
                                    break;
                                default:
                                    echo "Your favorite color is neither red, blue, nor green!";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>
                                PHP Functions
                            </b></div>
                        <div class="card-body">
                            <?php
                            //            function functionName() {
                            //   code to be executed;
                            // } 

                            function writeMsg()
                            {
                                echo "Hello world!";
                            }

                            writeMsg(); // call the function
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>
                                PHP Function Arguments
                            </b></div>
                        <div class="card-body">
                            <?php
                            function familyName($fname)
                            {
                                echo "$fname Jordan Reynolds PhD.<br>";
                            }

                            familyName("Jani");
                            familyName("Hege");
                            familyName("Stale");
                            familyName("Kai Jim");
                            familyName("Borge");
                            ?>
                            <hr class="my-3 border-dark">
                            <?php
                            function familiNama($fnama, $year)
                            {
                                echo "$fnama Myles. Lahir di $year <br>";
                            }

                            familiNama("Marlen", "1964");
                            familiNama("Prohaska", "1972");
                            familiNama("Phyllis Gutkowski MD", "1979");
                            ?>
                            <hr class="my-3 border-dark">
                            <?php
                            function tambah(int $s, int $c)
                            {
                                return $s + $c;
                            }
                            echo tambah(5, "5") . " hasil";
                            // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
                            ?>
                            <hr class="my-3 border-dark">
                            <?php function setHeight(int $minheight = 50)
                            {
                                echo "The height is : $minheight <br>";
                            }

                            setHeight(350);
                            setHeight();
                            setHeight(135);
                            setHeight(80);
                            ?>
                            <hr class="my-3 border-dark">
                            <?php
                            function sum(int $x, int $y)
                            {
                                $z = $x + $y;
                                return $z;
                            }

                            echo "5 + 10 = " . sum(5, 10) . "<br>";
                            echo "7 + 13 = " . sum(7, 13) . "<br>";
                            echo "2 + 4 = " . sum(2, 4);
                            ?>
                            <hr class="my-3 border-dark">
                            <?php

                            function addNumber(float $w, float $q): float
                            {
                                return $w + $q;
                            }
                            echo addNumber(1.2, 5.2);
                            ?>
                            <hr class="my-3 border-dark">
                            <?php
                            function adNumbers(float $a, float $b): int
                            {
                                return (int)($a + $b);
                            }
                            echo adNumbers(1.2, 5.2);
                            ?>
                            <hr class="my-3 border-dark">
                            <?php
                            function add_five(&$value)
                            {
                                $value += 5;
                            }

                            $num = 2;
                            add_five($num);
                            echo $num;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-12">
                <div class="container my-3">
                    <div class="card">
                        <div class="card-title"><b>
                                while : loop melalui blok kode selama kondisi yang ditentukan benar. <br>
                                do... while : mengulang satu blok kode satu kali, dan kemudian mengulanginya selama kondisi yang
                                ditentukan
                                benar.<br>
                                for : loop melalui blok kode beberapa kali.<br>
                                foreach : loop melalui blok kode untuk setiap elemen dalam array.
                            </b></div>
                        <div class="card-body">
                            <h4>PHP while Loop</h4>
                            <!-- while (condition is true) {
                code to be executed;
                } -->
                            <?php
                            $x = 1;

                            while ($x <= 5) {
                                echo "The number is: $x <br>";
                                $x++;
                            }
                            ?>
                            <hr class="my-3 border-dark">
                            <p>PHP while Loop</p>
                            <?php
                            $x = 0;
                            while ($x <= 100) {
                                echo "The number is: $x <br>";
                                $x += 10;
                            }
                            ?>
                            <hr class="my-3 border-success border-dot  shadow-lg">
                            <h4>PHP do while Loop</h4>
                            <!-- do {
                code to be executed;
                } while (condition is true); -->
                            <?php
                            $x = 1;

                            do {
                                echo "The number is: $x <br>";
                                $x++;
                            } while ($x <= 5);
                            ?>

                            <hr class="my-3 border-dark">
                            <p>PHP do while Loop</p>
                            <?php
                            $x = 6;
                            do {
                                echo "The number is: $x <br>";
                                $x++;
                            } while ($x <= 5);
                            ?>
                            <hr class="my-3 border-info border-dot  shadow-lg">
                            <h4>PHP foreach Loop</h4>
                            <!-- foreach ($array as $value) {
                code to be executed;
                } -->
                            <?php
                            $colors = array("red", "green", "blue", "yellow");

                            foreach ($colors as $value) {
                                echo "$value <br>";
                            }
                            ?>
                            <hr class="my-3 border-dark">
                            <p>PHP foreach Loop</p>
                            <?php
                            $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
                            foreach ($age as $x => $val) {
                                echo "$x = $val<br>";
                            }
                            ?>

                            <hr class="my-3 border-danger shadow-lg">
                            <h4>PHP for Loop</h4>
                            <!-- for (init counter; test counter; increment counter) {
                code to be executed for each iteration;
                } -->
                            <?php
                            for ($x = 0; $x <= 10; $x++) {
                                echo "The number is: $x <br>";
                            }
                            ?>
                            <hr class="my-3 border-dark">
                            <p>PHP for Loop</p>
                            <?php
                            for ($x = 0; $x <= 100; $x += 10) {
                                echo "The number is: $x <br>";
                            }
                            ?>
                            <hr class="my-3 border-warning shadow-lg">
                            <h4>PHP Break and Continue</h4> <br>
                            <p>PHP Break</p>
                            <?php
                            for ($x = 0; $x < 10; $x++) {
                                if ($x == 4) {
                                }
                                echo "The number is: $x <br>";
                            }
                            ?>
                            <hr class="my-3 border-dark">
                            <p>PHP Continue</p>
                            <?php
                            for ($x = 0; $x < 10; $x++) {
                                if ($x == 4) {
                                    continue;
                                }
                                echo "The number is: $x <br>";
                            }
                            ?>
                            <hr class="my-3 border-dark">
                            <p>Break and Continue in While Loop</p>
                            <?php
                            $x = 0;

                            while ($x < 10) {
                                if ($x == 4) {
                                    break;
                                }
                                echo "The number is: $x <br>";
                                $x++;
                            }
                            ?>
                            <hr class="my-3 border-dark">
                            <p>Break and Continue in While Loop</p>
                            <?php
                            $x = 0;

                            while ($x < 10) {
                                if ($x == 4) {
                                    $x++;
                                    continue;
                                }
                                echo "The number is: $x <br>";
                                $x++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>