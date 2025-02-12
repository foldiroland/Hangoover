<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="Hangoover">
                <img src="" alt="">
                <br><br><br><br>
                <img src="card.png" alt="">
                <div class="taskInfo">
                    <h1>Current task: </h1>
                    <h3 id="taskName">Brand Ring</h3>
                    <p id="task">Everyone says a brand, who can’t, has to drink a sip</p>
                </div>
                <div class="navigate">
                    <br><br><br><br><br>
                    <button id="dice" onclick="<?php step();?>"><img src="dice.png" width="200px"></button>
                </div>
                
                
        </div>
        <div class="HangooverBack" id="segs" >
        
        <!-- 41 cella van tehát 41 lépés érhető el  -->

            <table class="cock" border="0px">
                
                        <!-- 1 sor -->
                <tr>
                    <th id="cell" id="1"><img src="player.png" alt="player"></th>
                    <th></th>
                    <th id="cell" id="2"></th>
                    <th id="cell" id="3"></th>
                    <th id="cell" id="4"></th>
                    <th></th>
                    <th id="cell" id="5"></th>
                    <th></th>
                    <th id="cell" id="6"></th>
                    <th></th>
                    <th id="cell" id="7"></th>
                </tr>
                        <!-- 2 sor -->
                <tr>
                    <th id="cell" id="8"></th>
                    <th></th>
                    <th id="cell" id="9"></th>
                    <th></th>
                    <th id="cell" id="10"></th>
                    <th></th>
                    <th id="cell" id="11"></th>
                    <th></th>
                    <th id="cell" id="12"></th>
                    <th></th>
                    <th id="cell" id="13"></th>
                </tr>
                        <!-- 3 sor -->
                <tr>
                    <th id="cell" id="14"></th>
                    <th></th>
                    <th id="cell" id="15"></th>
                    <th></th>
                    <th id="cell" id="16"></th>
                    <th></th>
                    <th id="cell" id="17"></th>
                    <th></th>
                    <th id="cell" id="18"></th>
                    <th></th>
                    <th id="cell" id="19"></th>
                </tr>
                        <!-- 4 sor -->
                <tr>
                    <th id="cell" id="20"></th>
                    <th></th>
                    <th id="cell" id="21"></th>
                    <th></th>
                    <th id="cell"  id="22"></th></th>
                    <th></th>
                    <th id="cell" id="23"></th>
                    <th></th>
                    <th id="cell" id="24"></th>
                    <th></th>
                    <th id="cell" id="25"></th>
                </tr>
                        <!-- 5 sor -->
                <tr>
                    <th id="cell" id="26"></th>
                    <th></th>
                    <th id="cell" id="27"></th>
                    <th></th>
                    <th id="cell" id="28"></th>
                    <th></th>
                    <th id="cell" id="29"></th>
                    <th></th>
                    <th id="cell" id="30"></th>
                    <th></th>
                    <th id="cell" id="31"></th>
                </tr>
                        <!-- 6 sor -->
                <tr>
                    <th id="cell" id="32"></th>
                    <th></th>
                    <th id="cell" id="33"></th>
                    <th></th>
                    <th id="cell" id="34"></th>
                    <th></th>
                    <th id="cell" id="35"></th>
                    <th></th>
                    <th id="cell" id="36"></th>
                    <th></th>
                    <th id="cell" id="37"></th>
                </tr>
                        <!-- 7 sor -->
                <tr>
                    <th id="cell" id="38"></th>
                    <th id="cell" id="39"></th>
                    <th id="cell" id="40"></th>
                    <th></th>
                    <th id="cell" id="41"></th>
                    <th id="cell" id="42"></th>
                    <th id="cell"id="43"></th>
                    <th></th>
                    <th id="cell"id="44"></th>
                    <th id="cell"id="45"></th>
                    <th id="cell"id="46"></th>
                </tr>                
            </table>
            
        </div>
    </div>
    
</body>
</html>

<?php

function step(){
    $stepNumber = rand(1,6);

}














?>