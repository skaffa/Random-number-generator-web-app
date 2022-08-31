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
    </style>
</head>
<body>
    <div id="container">
        <form action="" autocomplete="off" method="post">
            <input type="number" name="amount" placeholder="How many dice to roll?" required>
            <button id="submit" name="submit" value="submit" type="submit"><img id="subimg" src="dice/dice-target.svg"></button>
        </form>
        <hr>
        <div id="result">
            <?php
            if (isset($_POST['submit'])) {
                if (isset($_POST['amount'])) {
                    try {
                        intval($_POST['amount']);
                    } catch {
                        echo('Please enter a number');
                    }
                    if (is_int($_POST['amount'])) {
                        if ($_POST['amount'] >= 1 && $_POST['amount'] <= 6) {
                            echo('TRUefsE');
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
</body>
</html>