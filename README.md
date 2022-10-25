# 3DPUB2022 Minions Battle Project
3DPUB2022 Summer School Projects
 

MINIONS BATTLE 

Once upon a time there was a great minion, called TIM, with some strengths and weaknesses, as all minions have.
After battling all kinds of evils for more than a hundred years, TIM now has the following stats:

   ●	Health: 70 - 100

   ●	Strength: 70 - 80

   ●	Defense: 45 – 55

   ●	Speed: 40 – 50

   ●	Luck: 10% - 30% (0% means no luck, 100% lucky all the time) Also, he possesses 2 skills:

   ●	Banana strike: Strike twice while it’s his turn to attack; there’s a 10% chance he’ll use this skill every time he attacks

   ●	Umbrella Shield: Takes only half of the usual damage when an enemy attacks; there’s a 20% change he’ll use this skill every time he defends



GAMEPLAY 

As TIM walks the digital space of Gameloft, he encounters an evil with the following properties:

   ●	Health: 60 - 90

   ●	Strength: 60 - 90

   ●	Defense: 40 – 60

   ●	Speed: 40 – 60

   ●	Luck: 25% - 40% 

You’ll have to simulate a battle between TIM and an evil. either at the command line or using a web browser. In every battle, TIM and the evil must be initialized with random properties, within their ranges.

The first attack is done by the minion with the higher speed. If both minions have the same speed, then the attack is carried on by the minion with the highest luck. After an attack, the minions switch roles: the attacker now defends and the defender now attacks.

The damage done by the attacker is calculated with the following formula:

Damage = Attacker strength – Defender defense

The damage is subtracted from the defender’s health. An attacker can miss their hit and do no damage if the defender gets lucky that turn.

TIM’ skills occur randomly, based on their chances, so take them into account on each turn.

GAME OVER

 The game ends when one of the minions remains without health or the number of turns reaches 20. The application must output the results each turn: what happened, which skills were used (if any), the damage done, defender’s health left.
If we have a winner before the maximum number of rounds is reached, he must be declared.

RULES 

Gameloft is a battle land where magic does happen. Still, for this magic to work, you’ll have to follow these rules:

   ● Write code in plain PHP, without any frameworks (you are free to use 3rd parties software)

   ● Make sure your application is decoupled, code reusable and scalable. For example, can a new skill easily be added to our hero?

   ● Is your code bug-free and tested?

CHALLENGES (optional)

   ●	Add a database in which you can save a battle history. Or a small learning algorithm, where the skills of the minions increase by a random amount after every win, and decrease after every loss.

   ●	Initialize battles with multiple minions / foes.

   ●	Use an external api to influence the battle. For example you can give advantages / disadvantages based on the weather (you can use this api:  https://www.openweathermap.org/ ).

   ●	Add a visual interface (static or dynamic)
