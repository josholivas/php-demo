<!DOCTYPE html>
<html>
<head>
    <title>Lab 2 - Temperature Converter</title>
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
            margin-top: 50px;
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
            width: 500px;
            height: 210px;
            font-size: 20px;
            text-align: center; 
            box-shadow: 0px 14px 28px rgba(0, 0, 0, 0.25),
            0px 10px 10px rgba(0, 0, 0, 0.25);
            color: white;
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
       }
       button:hover{
            background-color: white;
            color: black;
       }
       .form-result{
            background: white;
            padding: 50px;
            width: 500px;
            height: 210px;
            box-shadow: 0px 14px 28px rgba(0, 0, 0, 0.25),
            0px 10px 10px rgba(0, 0, 0, 0.25);
       }
       .form-result p{
            font-size: x-large;
       }
    </style>
</head>
<body>
    <header>
        <div class = "head"> 
            <div class="title">Laboratory 2</div>
                <nav class="buttons">
                    <a href="index.php">Home</a>            
                    <a href="lab1.php">Lab1</a>
                    <a href="lab2.php">Lab2</a>
                    <a href="lab3.php">Lab3</a>
                </nav>
        </div>
    </header>
    <h1>Temperature Converter</h1>
    <div class="main">
        <div class="form-box">
            <form method="post">
                <label for="cel">Enter Celsius: </label>
                <input type="text" name="cel"><br><br>
                <button><b>Convert to Fahrenheit</b></button>
            </form>
        </div>
        <div class="form-result">
            <p>RESULT:
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $celsius = $_POST["cel"];

                    $fahrenheit = celsiusToFahrenheit($celsius);

                    echo $celsius . "°C = " . $fahrenheit . "°F";
                }
                
                function celsiusToFahrenheit($celsius) {
                    return ($celsius * 9/5) + 32;
                }
                ?>
            </p>
        </div>
    </div>
</body>
</html>