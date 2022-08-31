<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-size: 17px;
        }
        body {
            background-color: dimgray;
        }
        #container {
            text-align: center;
            margin-top: 30vh;
            display: flex;
            flex-direction: column;
        }
        form {
            background-color: darkgray;
            display: flex;
            flex-direction: column;
        }
        form > * {
            margin: 5px auto;
        }
        #submit {
            border-style: none;
            width: 50px;
            background: inherit;
        }
        #subimg {
            height: 50px;
            border-radius: 6px;
            transition: ease-in-out .15s;
        }
        #subimg:hover {
            filter: invert();
        }
        #result {
            width: 50vw;
            margin: 20px auto;
            background-color: black;
            padding: 20px;
        }
        #dice {
        }
    </style>
</head>
<body>
    <div id="container">
        <form action="" autocomplete="off" method="get">
            <input type="number" name="amount" placeholder="How many dice to roll?" required>
            <button id="submit" type="submit"><img id="subimg" src="dice/dice-target.svg"></button>
        </form>
        <hr>
        <div id="result">
            <div id="dice">
            <?php
            if (isset($_GET['amount'])) {
                $amount = intval($_GET['amount']);
                $total = 0;
                if ($amount == True) {
                    for ($i = 0;$i < $amount;$i++) {
                        $value = rand(1,6);
                        $total += $value;
                        echo('
                        <img width="50px;" loading="lazy" src="dice/'.$value.'.svg">
                        ');
                    }
                    echo('</div><span style="color: white;">Rolled '.$amount.' dice worth '.$total.'</span>');
                } else {
                    echo('Value must be an integer');
                }
            } else {
                echo('ELSE');
            }
            ?>
            </div>
        </div>
    </div>
</body>
</html>