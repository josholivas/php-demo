<!DOCTYPE html>
<html>
<head>
    <title>Lab 1 - My Favorite Fruits</title>
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
            margin-top: 50px;
        }
         .form-box{
            background: #FF416C;
            background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
            background: linear-gradient(to right, #FF4B2B, #FF416C);
            padding: 50px;
            width: 500px;
            height: 480px;
            font-size: 20px;
            text-align: center; 
            box-shadow: 0px 14px 28px rgba(0, 0, 0, 0.25),
            0px 10px 10px rgba(0, 0, 0, 0.25);
            color: white;
       }
       input{
            height: 30px;
            row-gap: 10px;
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
       }
       button:hover{
            background-color: white;
            color: black;
       }
       .form-result{
            font-size: x-large;
            background: white;
            padding: 50px;
            width: 500px;
            height: 480px;
            box-shadow: 0px 14px 28px rgba(0, 0, 0, 0.25),
            0px 10px 10px rgba(18, 14, 14, 0.25);
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
    <header>
        <div class = "head"> 
            <div class="title">Laboratory 1</div>
                <nav class="buttons">
                    <a href="index.php">Home</a>            
                    <a href="lab1.php">Lab1</a>
                    <a href="lab2.php">Lab2</a>
                    <a href="lab3.php">Lab3</a>
                </nav>
        </div>
    </header>
    <div class="main">
        <div class="form-box">
            <h2>My Favorite Fruits</h2>
            <br>
            <form method="post">
                <label for="f1">Fruit 1: </label>
                <input type="text" name="fruit1"><br><br>
                <label for="f2">Fruit 2: </label>
                <input type="text" name="fruit2"><br><br>
                <label for="f3">Fruit 3: </label>
                <input type="text" name="fruit3"><br><br>
                <label for="f4">Fruit 4: </label>
                <input type="text" name="fruit4"><br><br>
                <label for="f5">Fruit 5: </label>
                <input type="text" name="fruit5"><br><br>
                <button>Save My Fruits</button>
            </form>
        </div>
        <div class="form-result">
            <p>Your Favorite Fruits:</p>
            <div class="results">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                        $fruits = array(
                            $_POST["fruit1"],
                            $_POST["fruit2"],
                            $_POST["fruit3"],
                            $_POST["fruit4"],
                            $_POST["fruit5"]
                        );

                        echo "<ul>";
                        foreach ($fruits as $fruit) {
                            if (!empty($fruit)) {
                                echo "<li>$fruit</li>";
                            }
                        }
                        echo "</ul>";
                    echo"<p>Your Favorite Fruit is: ".$fruits[0]."</p>";    
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>