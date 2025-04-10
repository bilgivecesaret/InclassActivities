var btn = document.getElementById("button");
var duration = 500;
var level = 0;
var count = 0;


function click(){
    count++;
    if(count == 3){
        level++;
        count = 0;  
        duration -= 100;  
        if (level > 6) {
            duration = 0;
          }
        alert("You are the winner! You can go next level" + level);
    }
} 

function move(){
    btn.style.marginLeft = Math.random()*900 + "px";
    btn.style.marginTop = Math.random()*600 + "px";
}

btn.onmouseover = function(){
    setTimeout(move, duration);
}

btn.onclick = function(){
    click();
}