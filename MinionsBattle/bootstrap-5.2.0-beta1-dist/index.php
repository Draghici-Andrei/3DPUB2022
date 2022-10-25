<?php include_once("script.php"); ?>




<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Minions Battle</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
</head>

<body>

  <!-----------------------------------------NAVIGATION BAR-------------------------------------------------->

  <div class="container-fluid bg-black" id="navbar">
    
    <div class="row">
      
      <div class="col">

        <ul class="nav justify-content-center">
        
          <li class="nav-item">

            <a class="nav-link active" aria-current="page" href="#">Home</a>
          
          </li>

          <li class="nav-item">

            <!-- Button trigger modal -->
          
            <a href="#" class="nav-link active" data-bs-toggle="modal" data-bs-target="#exampleModal">Story</a>
          
          </li>

          <li class="nav-item">

            <a class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Scores</a>
          
          </li>

          <li class="nav-item">

            <a href="#" class="nav-link active" data-bs-toggle="modal" data-bs-target="#exampleModal1">About</a>
          
          </li>
        
        </ul>

      </div>

    </div>

  </div>

  <!-----------------------------------------TITLE-------------------------------------------------------------->
  <div class="container-fluid" id="titlu">

    <div class="row d-flex justify-content-center">
      
      <div class="col col-xxl-6 d-flex justify-content-center rounded-4" style="background-color: rgb(0, 0, 0);">
      
        <p>Minions Battle</p>
      
      </div>
    
    </div>
  
  </div>

  <!------------------------------------------------------------------------------------------------------------>

  <!-----------------------------------------PICTURE1----------------------------------------------------------->

  <div class="container-fluid" id="picture1">

    <div class="row">

      <div class="col-4 d-flex justify-content-center">
        
        <img src="images/m-tower.png" alt="" id="m-tower">

      </div>

    </div>

  </div>

  <!------------------------------------------------------------------------------------------------------------>

  <!-----------------------------------------START BUTTON------------------------------------------------------->

  <div class="container-fluid" id="start">

    <div class="row d-flex justify-content-center">

      <div class="col-4 d-flex justify-content-center">

        <a href="#playground" onclick = "randomStatsForBoth(); whoStarts(); enableDisableButton();">

          <button type="button" id = "Start" class="btn btn-primary btn-lg border-0" style="background-color: black; color:yellow">START</button>

        </a>

      </div>

    </div>

  </div>

  <!------------------------------------------------------------------------------------------------------------>

  <!-----------------------------------------PICTURE2----------------------------------------------------------->
  
  <div class="container-fluid" id="picture2">

    <div class="row d-flex justify-content-end">

      <div class="col-4 d-flex justify-content-center">

        <img src="images/blaster.png" alt="" id="blaster">

      </div>

    </div>

  </div>

  <!------------------------------------------------------------------------------------------------------------>

  <!-----------------------------------------PLAYGROUND--------------------------------------------------------->

  <div class="container-fluid" id="playground">

  <!-----------------------------TIMER---------------------------------->

    <div class="row d-flex justify-content-center" id="actual_playground">

      <div class="col fs-3 d-flex justify-content-center" id = "timer">00</div>

    </div>

  <!-------------------------------------------------------------------->

  <!-----------------------------PROGRESS BARS-------------------------->

    <div class="row gx-5 my-5 d-flex justify-content-center">
  
      <!-------------TIM'S PROGRESS BAR---------------->

      <div class="col-5">

        <div class="progress">

          <div class="progress-bar" role="progressbar" id = "progressbar1" style="width: 25%; background-color: red" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>

        </div>

      </div>

      <!----------------------------------------------->  

      <!-------------ENEMY'S PROGRESS BAR-------------->

      <div class="col-5">

        <div class="progress">

          <div class="progress-bar" role="progressbar" id = "progressbar2" style="width: 25%; background-color: red" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>

        </div>

      </div>

      <!----------------------------------------------->  

    </div>

    <!-------------------------------------------------------------------->

    <!-------------------------CHARACTERS--------------------------------->

    <div class="row my-5 d-flex justify-content-center">

      <!-------------------TIM-------------------------> 

      <div class="col col-md-4 d-flex justify-content-start border">

        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#Tim_stats" aria-controls="Tim_stats">

          <img src="images/tim5.png" class="img-fluid" alt="" style="height:265px; width:250px;">

        </a>

      </div>

      <!-----------------------------------------------> 

      <!-------------------ENEMY-----------------------> 

      <div class="col col-md-4 d-flex justify-content-end border">

        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#Enemy_stats" aria-controls="Enemy_stats">

          <img src="images/purple_minion.png" class="img-fluid" alt="" style="height:265px; width:250px;">

        </a>

      </div>

      <!-----------------------------------------------> 

    </div>

    <!-------------------------------------------------------------------->
    
  </div>

  <!------------------------------------------------------------------------------------------------------------>


  <!-----------------------------------------CONTROL MENU(HIDDEN)-----------------------------------------------> <!--NOT USEABLE-->

  <!--<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
    
    <div class="offcanvas-header">

      <h5 class="offcanvas-title" id="offcanvasBottomLabel" style="color:black;">Abilities</h5>

      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

    </div>

    <div class="offcanvas-body small">

      <div class="row d-flex justify-content-center">

        <div class="col-3"> -->

          <!--1st Ability-->

          <!--<div class="card bg-dark">

            <div class="card-body">

              <h5 class="card-title" id = "bananaAttack">Banana Attack</h5>

              <a href="#playground" class="btn btn-primary d-flex justify-content-center">Use</a>

            </div>

          </div> -->

          <!-------------->

        <!--</div>

        <div class="col-3">-->

          <!--2nd Ability-->

          <!--<div class="card bg-dark">

            <div class="card-body">

              <h5 class="card-title" id = "umbrellaAttack">Umbrella Attack</h5>

              <a href="#playground" class="btn btn-primary d-flex justify-content-center">Use</a>

            </div>

          </div>-->

          <!-------------->

        <!--</div>

      </div>

    </div>
    
  </div>-->

  <!------------------------------------------------------------------------------------------------------------>


  <!-----------------------------------------CONTROL MENU------------------------------------------------------->

  <div class="container-fluid border" id="control_menu">
    
    <div class="row d-flex justify-content-center">

      <div class="col-2 d-flex justify-content-center">

        <!--<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" id = "abilitiesBt" style="background-color: black; color:yellow; z-index: 1;">ABILITIES</button>-->
        <button class="btn btn-primary" type="button" id = "bananaAttack" style="background-color: black; color:yellow; z-index: 1;" onclick = "roundCounter(); switchTurns(); bAttack(); enableDisableButton(); checkIfGameOver();" >BANANA ATTACK</button>
      </div>

      <div class="col-2 d-flex justify-content-center">

        <!--<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" id = "abilitiesBt" style="background-color: black; color:yellow; z-index: 1;">ABILITIES</button>-->
        <button class="btn btn-primary" type="button" id = "umbrellaAttack" style="background-color: black; color:yellow; z-index: 1;" onclick = "roundCounter(); switchTurns(); uAttack(); enableDisableButton(); checkIfGameOver();" >UMBRELLA ATTACK</button>
      </div>

      <div class="col-2 d-flex justify-content-center">

        <button class="btn btn-primary" type="button" id = "nextRoundBt" style="background-color: black; color:yellow; z-index: 1;" onclick = "roundCounter(); enemyTurn(); switchTurns(); enableDisableButton(); checkIfGameOver();">NEXT ROUND</button>
      
      </div>

      <div class="col-4 justify-content-end">

        <input class="form-control" type="text" value="PRESS THE START BUTTON TO START THE GAME..." id = "updates" aria-label="readonly input example" readonly>
      
      </div>

      <!--<div class="col-2 justify-content-end">

        <input class="form-control" type="text" value="X" id = "" aria-label="readonly input example" readonly>
      
      </div>-->

      <div class="col-2 justify-content-end">

        <input class="form-control" type="text" value="X" id = "roundNumber" aria-label="readonly input example" readonly>
      
      </div>

    </div>

  </div>

  <!------------------------------------------------------------------------------------------------------------>

  <!-----------------------------------------MODAL STORY-------------------------------------------------------->


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel" style="color:black;">Story</h5>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>

        <div class="modal-body" id="story">

          <h2>Minions Battle</h2>

          <p>Once upon a time there was a great minion, called TIM, with some strengths and weaknesses, as all minions
            have.</p>

          <p>After battling all kinds of evils for more than a hundred years, TIM now has the following stats:</p>
          
          <ul>
            <li>Health: 70 - 100</li>

            <li>Strength: 70 - 80</li>

            <li>Defense: 45 – 55</li>

            <li>Speed: 40 – 50</li>
             
            <li>Luck: 10% - 30% (0% means no luck, 100% lucky all the time) Also, he possesses 2 skills:</li>

            <li>Banana strike: Strike twice while it’s his turn to attack; there’s a 10% chance he’ll use this skill
              every time he attacks</li>

            <li>Umbrella Shield: Takes only half of the usual damage when an enemy attacks; there’s a 20% change he’ll
              use this skill every time he defends</li>

          </ul>


          <h2>Gameplay</h2>

          <p>TIM walks the digital space of Gameloft, he encounters an evil with the following properties:</p>

          <ul>
            
            <li>Health: 60 - 90</li>

            <li>Strength: 60 - 90</li>

            <li>Defense: 40 – 60</li>

            <li>Speed: 40 – 60</li>

            <li>Luck: 25% - 40%</li>

          </ul>

          <p>You’ll have to simulate a battle between TIM and an evil. either at the command line or using a web
            browser.
            In every battle, TIM and the evil must be initialized with random properties, within their ranges.</p>

          <p>The first attack is done by the minion with the higher speed. If both minions have the same speed, then the
            attack is carried on by the minion with the highest luck. After an attack, the minions switch roles: the
            attacker now defends and the defender now attacks.</p>

          <p>The damage done by the attacker is calculated with the following formula:</p>

          <b>Damage = Attacker strength – Defender defense</b>

          <p>The damage is subtracted from the defender’s health. An attacker can miss their hit and do no damage if the
            defender gets lucky that turn.</p>

          <p>TIM’s skills occur randomly, based on their chances, so take them into account on each turn.</p>

          <h2>Game over</h2>

          <p>The game ends when one of the minions remains without health or the number of turns reaches 20. The
            application must output the results each turn: what happened, which skills were used (if any), the damage
            done, defender’s health left.</p>
          <p>If we have a winner before the maximum number of rounds is reached, he must be declared.</p>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>

      </div>

    </div>

  </div>

  <!------------------------------------------------------------------------------------------------------------>


  <!-------------------------------------------MODAL ABOUT------------------------------------------------------>

  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1" aria-hidden="true">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModal1" style="color: black;">About</h5>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>

        <div class="modal-body" style="color: black;">

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada dui dui, consectetur imperdiet
            leo hendrerit nec. Vivamus finibus felis sit amet dui ultrices vehicula. Sed vitae nibh in nisi varius
            congue. Pellentesque eget nisl lobortis, euismod purus ac, maximus lacus. Vestibulum id blandit magna. Duis
            sollicitudin tincidunt mattis. Nam eget est posuere lorem mollis pretium nec in ante.</p>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>

      </div>
      
    </div>

  </div>

  <!------------------------------------------------------------------------------------------------------------>

  <!------------------------------------OFFCANVAS SCRORE TABLE-------------------------------------------------->

  <div class="offcanvas offcanvas-start" style="color: black;" data-bs-scroll="true" tabindex="-1"
    id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">

    <div class="offcanvas-header">

      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Top Scores</h5>

      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

    </div>

    <div class="offcanvas-body">

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada dui dui, consectetur imperdiet leo
        hendrerit nec. Vivamus finibus felis sit amet dui ultrices vehicula. Sed vitae nibh in nisi varius congue.
        Pellentesque eget nisl lobortis, euismod purus ac, maximus lacus. Vestibulum id blandit magna. Duis sollicitudin
        tincidunt mattis. Nam eget est posuere lorem mollis pretium nec in ante.</p>

      <ul class="list-group">

        <li class="list-group-item">#1</li>

        <li class="list-group-item">#2</li>

        <li class="list-group-item">#3</li>

        <li class="list-group-item">#4</li>

        <li class="list-group-item">#5</li>

      </ul>

    </div>

  </div>

  <!------------------------------------------------------------------------------------------------------------>

  <!------------------------------------OFFCANVAS TIM'S STATS--------------------------------------------------->

  <form name = "stats" id = "charactersstats" method = "POST">

    <div class="offcanvas offcanvas-start" tabindex="-1" id="Tim_stats" aria-labelledby="Tim_stats" style="color:black;">

      <div class="offcanvas-header">

        <h5 class="offcanvas-title" id="Tim_stats_title">Tim's Stats</h5>

        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

      </div>

      <div class="offcanvas-body">

        <div>
           Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists,
           etc.
        </div>
      
        <ul class="list-group w-50">

          <li class="list-group-item" for = "TimHealth">Health:</li>

          <input type = "text" name = "timhealth" id = "TimHealth" value = "70-100" disabled>

          <li class="list-group-item" for = "TimStrength">Strength:</li>

          <input type="text" name = "timstrength" id = "TimStrength" value = "70-80" disabled>

          <li class="list-group-item" for = "TimDefense">Defense:</li>

          <input type="text" name = "timdefense" id = "TimDefense" value ="45-55" disabled>

          <li class="list-group-item" for = "TimSpeed">Speed:</li>

          <input type="text" name = "timspeed" id = "TimSpeed" value = "45-50" disabled> 
          
          <li class="list-group-item" for = "TimLuck">Luck:</li>

          <input type="text" name = "timluck" id = "TimLuck" value = "10%-30%" disabled>

        </ul>

        <input type="submit" name="Submit" id="Submit" value="Submit">

      </div>

    </div>
    
  <!------------------------------------------------------------------------------------------------------------>

  <!------------------------------------OFFCANVAS ENEMY'S STATS------------------------------------------------->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="Enemy_stats" aria-labelledby="Enemy_stats" style="color:black;">
      
      <div class="offcanvas-header">

        <h5 class="offcanvas-title" id="Enemy_stats_title">Enemy's Stats</h5>

        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

      </div>

      <div class="offcanvas-body">

        <div>
          Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists,
          etc.
        </div>

        <ul class="list-group w-50">

          <li class="list-group-item" for = "EnemyHealth">Health:</li>

          <input type="text" name = "enemyhealth" id = "EnemyHealth" value = "60-90" disabled>

          <li class="list-group-item" for = "EnemyStrength">Strength:</li>

          <input type="text" name = "enemystrength" id = "EnemyStrength" value = "60-90" disabled>

          <li class="list-group-item" for = "EnemyDefense">Defense:</li>

          <input type="text" name = "enemydefense" id = "EnemyDefense" value = "40-60" disabled>

          <li class="list-group-item" for = "EnemySpeed">Speed:</li>

          <input type="text" name = "enemyspeed" id ="EnemySpeed" value ="40-60" disabled>

          <li class="list-group-item" for = "EnemyLuck">Luck:</li>

          <input type="text" name = "enemyluck" id ="EnemyLuck" value = "25%-40%" disabled>



        </ul>
      
      </div>
    
    </div>
   
  </form>

  <!------------------------------------------------------------------------------------------------------------>

  <!------------------------------------GAME OVER MODAL--------------------------------------------------------->


  <!-- Button trigger modal(not used) -->

  <button type="button" class="btn btn-primary" style = "position: absolute; top: 150vh;" data-bs-toggle="modal" data-bs-target="#exampleModalGM" id = "GameOverButton" hidden>
    Launch demo modal
  </button>

  <!-------------------------->

  <!---------Modal------------>

  <div class="modal fade" id="exampleModalGM" tabindex="-1" aria-labelledby="exampleModalLabelGM" aria-hidden="true" style = "color: black;">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabelGM">Game Over!</h5>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>

        <div class="modal-body">

          <p>"Do you want to save this score?"</p>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      
      </div>

    </div>

  </div>

  <!------------------------>

  <!------------------------------------------------------------------------------------------------------------>

  <script src="js/bootstrap.js"></script>

</body>

</html>