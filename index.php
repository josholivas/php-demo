<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratories</title>
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
        .content{
            padding: 250px;
            display:flex ;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            row-gap: 20px;
        } 
        .content h2{
            font-size: 50px;
            color:linear-gradient(to right, #FF4B2B, #FF416C);
        }  
        
    </style>
</head>
<body>
    <header>
        <div class = "head"> 
            <div class="title">Laboratories</div>
                <nav class="buttons">
                    <a href="index.php">Home</a>            
                    <a href="lab1.php">Lab1</a>
                    <a href="lab2.php">Lab2</a>
                    <a href="lab3.php">Lab3</a>
                </nav>
        </div>
    </header>
    <div class = "content">
        <h2>WELCOME TO MY LABORATORY LIBRARY!</h2>
        <p><i>This library contains lab1, lab2, and lab3 in ITEC65.</i></p>
    </div>
</body>
</html>