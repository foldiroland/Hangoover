var currentPlace = 0;

const dice = document.getElementById("dice");
dice.onclick = ()=>{step();}

function step(){
    var stepNumber = rand(6);
        currentPlace = stepNumber;
        
        if (currentPlace == stepNumber)
            {
                document.getElementById(`${stepNumber}`).src = "player.png";
            }       
        
}

function rand(start,end) {
    return Math.floor(Math.random() + start * end-start);
}
