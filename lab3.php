<!DOCTYPE html>
<html>
<head>
    <title>Lab 3 - ATM Machine Simulation</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

        }
        header{
             background: #FF416C;
             background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
             background: linear-gradient(to right, #FF4B2B, #FF416C);
             height: 120px;
             
        }
        header a{
            text-decoration: none;
        }
        .head{
            display: grid;
            grid-template-columns: auto 400px;
            padding: 50px;
            color: white;
        }
        .title{
            font-size: x-large;
            margin-top: -5px;
        }
        .buttons{
            display: flex;
            flex-direction: row;
            justify-content: center;
            gap: 50px;
        }
        .buttons a{
            color: white;
        }    
        .buttons a:hover{
            color: black;
        }
        h1{
            text-align: center;
            padding: 40px;
        }
        /*Form-Section*/
        .main{
            display: flex;
            flex-direction: ROW;
            gap: 0;
            justify-content: center;
        }
         .form-box{
            background: #FF416C;
            background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
            background: linear-gradient(to right, #FF4B2B, #FF416C);
            padding: 50px;
            width: 620px;
            height: 350px;
            font-size: large;
            box-shadow: 0px 14px 28px rgba(0, 0, 0, 0.25),
            0px 10px 10px rgba(0, 0, 0, 0.25);
            color: white;
            display: grid;
            
       }
       input{
            height: 30px;
            width: 250px;
       }
       button{
            border-radius: 20px;
            width: 130px;
            height: 60px;
            font-size: 15px; 
            color: white;
            background-color: transparent;
            border-color: #ffffff;
            margin-left: 200px;
       }
       button:hover{
            background-color: white;
            color: black;
       }
       .form-result{
            font-size: x-large;
            background: white;
            padding: 50px;
            width: 450px;
            height: 350px;
            box-shadow: 0px 14px 28px rgba(0, 0, 0, 0.25),
            0px 10px 10px rgba(0, 0, 0, 0.25);
       }
       .results{
            margin-left: 20px;
       }
       .results p{
            margin-left: -20px;
       }
    </style>
</head>
<body>
    <?php
        class ATM {
            private $accountName;
            private $balance;

            public function __construct($accountName, $balance) {
                $this->accountName = $accountName;
                $this->balance = $balance;
            }

            public function getAccountName() {
                return $this->accountName;
            }

            public function getBalance() {
                return $this->balance;
            }

            public function deposit($amount) {
                if ($amount > 0) {
                    $this->balance += $amount;
                    return "Deposit of $amount.";
                } else {
                    return "Invalid deposit amount.";
                }
            }

            public function withdraw($amount) {
                if ($amount <= 0) {
                    return "Invalid withdrawal amount.";
                } elseif ($amount > $this->balance) {
                    return "Insufficient balance.";
                } else {
                    $this->balance -= $amount;
                    return "Withdrawal of $amount.";
                }
            }
        }
    ?>
    <header>
        <div class = "head"> 
            <div class="title">Laboratory 3</div>
                <nav class="buttons">
                    <a href="index.php">Home</a>            
                    <a href="lab1.php">Lab1</a>
                    <a href="lab2.php">Lab2</a>
                    <a href="lab3.php">Lab3</a>
                </nav>
        </div>
    </header>
    <h1>ATM Machine Simulation</h1>
    <div class= "main">
        <div class="form-box">
            <form method="post">
                <label for="accN">Account Name: </label>
                <input type="text" name="accN"> <br><br>

                <label for="inBal">Initial Balance: </label>
                <input type="text" name="inBal"> <br><br>

                <label for="act">Amount: </label>
                <select name="act" id="act">
                    <option value="chkbal">Check Balance</option>
                    <option value="with"> Withdraw</option>
                    <option value="dep">Deposit</option>
                </select><br><br>

                <label for="am">Amount (for Deposit/Withdraw): </label>
                <input type="text" name="am"> <br><br>

                <button>Submit Transaction</button>
        </form>

        </div>

        <div class="form-result">
             <p><b>TRANSACTION RESULT:</b></p>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $name = $_POST["accN"];
                    $initialBalance = $_POST["inBal"];
                    $action = $_POST["act"];
                    $amount = $_POST["am"];

                    // Validate balance
                    if (!is_numeric($initialBalance)) {
                        echo "<p>Invalid initial balance.</p>";
                    } else {
                        $atm = new ATM($name, (float)$initialBalance);

                        echo "<p>Account Name: " . $atm->getAccountName() . "</p>";

                        if ($action == "chkbal") {
                            echo "<p>Current Balance: " . $atm->getBalance() . "</p>";

                        } elseif ($action == "dep") {
                            if (is_numeric($amount)) {
                                echo "<p>Action: " . $atm->deposit($amount) . "</p>";
                                echo "<p>New Balance: " . $atm->getBalance() . "</p>";
                            } else {
                                echo "<p>Invalid deposit amount.</p>";
                            }

                        } elseif ($action == "with") {
                            if (is_numeric($amount)) {
                                echo "<p>Action: " . $atm->withdraw($amount) . "</p>";
                                echo "<p>New Balance: " . $atm->getBalance() . "</p>";
                            } else {
                                echo "<p>Invalid withdrawal amount.</p>";
                            }
                        }
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>