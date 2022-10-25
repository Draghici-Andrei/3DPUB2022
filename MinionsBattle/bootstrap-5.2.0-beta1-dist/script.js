
//var timStats = [];
//var enemyStats = [];

let th = Math.floor(Math.random() * (100 - 70 + 1)) + 70,
    ts = Math.floor(Math.random() * (80 - 70 + 1)) + 70,
    td = Math.floor(Math.random() * (55 - 45 + 1)) + 45,
    tspeed = Math.floor(Math.random() * (50 - 40 + 1)) + 40,
    tluck = Math.floor(Math.random() * (30 - 10 + 1)) + 10;

let eh = Math.floor(Math.random() * (90 - 60 + 1)) + 60,
    es = Math.floor(Math.random() * (90 - 60 + 1)) + 60,
    ed = Math.floor(Math.random() * (60 - 40 + 1)) + 40,
    espeed = Math.floor(Math.random() * (60 - 40 + 1)) + 40,
    eluck = Math.floor(Math.random() * (40 - 25 + 1)) + 25;


//var stats = [th.toString(), ts.toString(), td.toString(), tspeed.toString(), tluck.toString(), eh.toString(), es.toString(), ed.toString(), espeed.toString(), eluck.toString()];


//-------------------------------------------------------CREATE, CHECK AND DELETE A COOKIE-----------------------------------------------------------

/*function setCookie(cstats, cvalue, exmin) { //create the cookie
    const d = new Date();
    d.setTime(d.getTime() + (exmin * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cstats + "=" + cvalue + ";" + expires + ";path=/";
}


function checkCookie() { //check the cookie
    
    let chstats = getCookie("stats");

    if (chstats != "") {
        alert("Ch stats are: " + chstats);
    }
    else{
        chstats = stats; 
        if (chstats != "" && chstats != null) {
            setCookie("stats", chstats, 2);
        }
    }
}

function deleteCookie(){ //delete the cookie
    document.cookie = "stats=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";

}*/

//---------------------------------------------------------------------------------------------------------------------------------------------------

function randomTimStats() {

    document.getElementById("TimHealth").value = th.toString();
    document.getElementById("progressbar1").style.width = document.getElementById("TimHealth").value.toString() + "%";
    document.getElementById("progressbar1").innerHTML = document.getElementById("TimHealth").value;

    document.getElementById("TimStrength").value = ts.toString();
    document.getElementById("TimDefense").value = td.toString();
    document.getElementById("TimSpeed").value = tspeed.toString();
    document.getElementById("TimLuck").value = tluck.toString() + "%";


    //timStats.push = (th, ts, td, tspeed, tluck);

    //timStats = setItem("jsArray", JSON.stringify(timStats));

}

function randomEnemyStats() {


    document.getElementById("EnemyHealth").value = eh.toString();
    document.getElementById("progressbar2").style.width = document.getElementById("EnemyHealth").value.toString() + "%";
    document.getElementById("progressbar2").innerHTML = document.getElementById("EnemyHealth").value;

    document.getElementById("EnemyStrength").value = es.toString();
    document.getElementById("EnemyDefense").value = ed.toString();
    document.getElementById("EnemySpeed").value = espeed.toString();
    document.getElementById("EnemyLuck").value = eluck.toString() + "%";

    //enemyStats.push(eh,es, ed, espeed, eluck);
    //enemyStats = setItem("jsArray", JSON.stringify(enemyStats));
}



function randomStatsForBoth() {

    randomTimStats();

    randomEnemyStats();

}

let timHealth = document.getElementById("TimHealth").value;

let enemyHealth = document.getElementById("EnemyHealth").value;

let timSpeed = document.getElementById("TimSpeed").value;

let enemySpeed = document.getElementById("EnemySpeed").value;

let timLuck = document.getElementById("TimLuck").value.substr(0, 1);

let enemyLuck = document.getElementById("EnemyLuck").value.substr(0, 1);

let timStrength = document.getElementById("TimStrength").value;

let enemyStrength = document.getElementById("EnemyStrength").value;

let timDefense = document.getElementById("TimDefense").value;

let enemyDefense = document.getElementById("EnemyDefense").value;


/*function priority() {  //we'll come back later for this one

    let priority = 0;

    if (timSpeed > enemySpeed) {
        priority = 1;
        //document.document.getElementsByClassName('form-control form-control-lg').placeholder = 'Tim\'s turn.';
    }
    else {
        if (timLuck >= enemyLuck) {
            priority = 1;
        }
    }
    return priority;
}*/




var tim_priority;

var damage;

var probability;

/*function nextRound() {

    document.getElementById("roundNumber").value = numberOfTurns.toString();

    document.getElementById("updates").value = "Into the nextRound() function...";

    tim_priority = Math.floor(Math.random() * (1 - 0 + 1)) + 0; // 0 or 1

    document.getElementById("updates").value = tim_priority.toString();


    if (tim_priority == 1) {

        document.getElementById("updates").value = "IT'S YOUR TURN! SELECT ONE ABILITY!";

        document.getElementById("bananaAttack").addEventListener('click', function () {


            document.getElementById("updates").value = "BANANA ATTACK SELECTED!";

            damage = timStrength - enemyDefense;

            enemyHealth -= damage;

        });

            //document.getElementById("updates").value = enemyHealth.toString();

            document.getElementById("EnemyHealth").value = eh.toString();
            document.getElementById("progressbar2").style.width = eh.toString() + "%";
            document.getElementById("progressbar2").innerHTML = eh.toString();

            //document.getElementById("updates").value = "Out of updateStats() function...";

            //probability = Math.random(9);

            /*if (probability == 0) {

                document.getElementById("updates").value = "YOU'RE LUCKY! YOU CAN USE THIS ABILITY A SECOND TIME!";

                document.getElementById("bananaAttack").addEventListener('click', () => {

                    document.getElementById("updates").value = "BANANA ATTACK SELECTED!";

                    enemyHealth -= damage;

                    document.getElementById("EnemyHealth").value = eh.toString();
                    document.getElementById("progressbar2").style.width = eh.toString() + "%";
                    document.getElementById("progressbar2").innerHTML = eh.toString();

                });
            }

        
    }
    else {
        //document.getElementById("updates").value = enemyStrength.toString();
        damage = enemyStrength - timDefense;
        //document.getElementById("updates").value = damage.toString();
        timHealth -= damage;

        //document.getElementById("updates").value = timHealth.toString();
        //document.getElementById("updates").value = "problema"; 

        document.getElementById("TimHealth").value = th.toString();
        document.getElementById("progressbar1").style.width = th.toString() + "%";
        document.getElementById("progressbar1").innerHTML = th.toString();
    }

    document.getElementById("updates").value = "THIS ROUND IS OVER. PRESS THE NEXT ROUND BUTTON TO CONTINUE.";
    //nextRoundButton.addEventListener('click', nextRound);
}*/


function decideTheTurn() {
    return Math.floor(Math.random() * (1 - 0 + 1)) + 0; // 0 or 1
}


var priority;

function whoStarts(){
    priority = decideTheTurn(); 
}


function enableDisableButton() {


    if (priority == 1) {
        //it's your turn
        document.getElementById("updates").value = "TIM'S TURN";

        document.getElementById("bananaAttack").disabled = false;
        document.getElementById("umbrellaAttack").disabled = false;

    }
    else {

        document.getElementById("updates").value = "ENEMY'S TURN";

        document.getElementById("bananaAttack").disabled = true;
        document.getElementById("umbrellaAttack").disabled = true;

    }
    //numberOfTurns = numberOfTurns + 1;
    //document.getElementById("roundNumber").value = numberOfTurns;

}

function switchTurns() {

    if (priority == 1)
        priority = 0;
    else
        priority = 1;
}

var numberOfTurns = 0;

function roundCounter() {
    numberOfTurns = numberOfTurns + 1;
    document.getElementById("roundNumber").value = numberOfTurns;
}

function bAttack() {
    damage = ts - ed;
    eh -= damage;
    document.getElementById("EnemyHealth").value = eh.toString();
    document.getElementById("progressbar2").style.width = eh.toString() + "%";
    document.getElementById("progressbar2").innerHTML = eh.toString();
}

function uAttack(){
    damage = (ts - ed)/2;
    eh -= damage;
    document.getElementById("EnemyHealth").value = eh.toString();
    document.getElementById("progressbar2").style.width = eh.toString() + "%";
    document.getElementById("progressbar2").innerHTML = eh.toString();
}

function enemyTurn() {
    if (priority == 0) {

        damage = es - td;
        th -= damage;

        document.getElementById("TimHealth").value = th.toString();
        document.getElementById("progressbar1").style.width = th.toString() + "%";
        document.getElementById("progressbar1").innerHTML = th.toString();

    }
}

function checkIfGameOver() {
    if (th <= 0 || eh <= 0) {
        if (th <= 0) {
            document.getElementById("exampleModalLabelGM").innerHTML = "GAME OVER!";
            document.getElementById("GameOverButton").click();
        }
        if (eh <= 0) {
            document.getElementById("exampleModalLabelGM").innerHTML = "WIN!";
            document.getElementById("GameOverButton").click();
        }
    }

}

/*function game(){

    let tim_priority = 1;

    let timer = 90; //not used

    document.getElementById("timer").innerHTML = "Timer: " + timer; //not used 

    

    let damage;

    let numberOfTurns = 0;

    let bananaAttack = document.getElementById("bananaAttack");
    let umbrellaAttack = document.getElementById("umbrellaAttack");

    while(timHealth > 0 && enemyHealth > 0 && numberOfTurns != 20) //while both minions are alive and we still have turns left...
    {

        if(tim_priority == 1) //tim will attack
        {
            damage = timStrength - enemyDefense;
            document.getElementById("updates").value = "Tim's turn. Select one ability from the menu...\n Calulated damage: " + damage;  
            //what ability he is using?



            document.getElementById("updates").value = "Passed through selection."; 

            enemyHealth -= damage; 

            document.getElementById("EnemyHealth").value = enemyHealth; 
            document.getElementById("progressbar2").style.width = enemyHealth.toString() + "%";
            tim_priority = 0;
        }
        else //enemy will attack first
        {   
            document.getElementById("updates").placeholder = "Enemy's turn.";
            damage = enemyStrength - timDefense;

            timHealth -= damage;

            document.getElementById("TimHealth").value = timHealth; 
            document.getElementById("progressbar1").style.width = timHealth.toString() + "%";

            tim_priority = 1;
        }

        numberOfTurns++;
    }

    if(numberOfTurns == 19 || timHealth <= 0 || enemyHealth <= 0){
        //Game Over
        //we have to activate a modal 

        //document.getElementById("GameOverButton").click();

        document.getElementById("updates").value = "The battle is over."; 

    }

    

}*/




