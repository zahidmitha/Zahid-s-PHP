<?php 
  
  $intro = "
  You enter the hallowed halls of Goldman Sachs on 200 West Street, curious of what lies beyond.
  A lowly ANALYST, you dream of the days when you too can look down on the 99% from the 47th Floor as a Managing Partner, dropping the occasional hundred dollar bill for the Plebs to catch.
  Yet, before you can achieve such greatness, you must suffer years of late nights, sexual abstenance, politicking, backstabbing and, yes, the feared 'cock for promotions' phase in your career.

  Can you survive? Let's find out.
  ";

  $world = array(
    array(
      "question" => "Wating in the hall, a security guard approaches you, asking for identification. How do you respond?",
      "answers" => array(
        "1. Show him your British passport, as well as the Cayman Islands passport daddy bought for tax reasons.",
        "2. Understand that, until you are fully inducted/indoctrinated, he remains higher than you in the Goldman Pyramid. You beg him for forgiveness, and get on your knees with your mouth open as a sign of hot, wet penance.",
        "3. What security guard? All I see is coat-rack..."
      ),
      "answer" => 0,
      "wrong" => array(
        1 => "While going at it, you sneak a glance at his badge and realise he's a Temp. You still swallow, but then walk out of the building in shame, never to return.",
        2 => "You are fired on the spot for arrogance, but immediately get a job at McKinsey, where you fit right in."
      )
    ),
    array(
      "question" => "He smiles at you, showing off his identification from seven different countries (including postwar Libya, Goldman's latest profitable market). After a stripsearch, you are ushered through security 
                    to a conference room, where you and many others are
                    handed a copy of Ayn Rand's 'Atlas Shrugged' on your way to the lobotamy clinic. Post-operation, you bump into an old friend from LSE.
                     He mutters about Goldman's recent dismal third quarter results, and asks whether Greg Smith might be right What do you do?",
     "answers" =>array(
           "1. Report him to the Thought Police.",
           "2. Begrudgingly agree that finance may be on a downward spiral, but that you should both milk the bank's clientsmuppets for as long as you can.",
           "3. Inform him that you're playing the game so hard you've pitched for PE at Morgan Stanley within minutes of receiving your Goldman offer."
         ),
         "answer" => 0,
		 "wrong" => array(
			1 => "Your entire conversation was recorded. You are dragged before the partnership committee and sentenced to 10 years Equities in Dallas.",
			2 => "Your baller ways are noticed by the Partnership immediately, and you are the subject of a bidding war between Morgan Stanley and Goldman where you potential bonus is so large that it affects both banks' Q4 profits. You are eventually fired with an $8m Golden Parachute at the Analyst level. You set up a Ponzi scheme in New Jersey and defraud movie stars for the rest of your days."
		)
       ),
   array (
		"question" => "
		Congratulations. Your buddy was planted by the Partnership Committee to weed out anyone who lacks total dedication to Doing God's Work. You advance to the level of ASSOCIATE.
		
		
		After two years on the job, several 3am sessions, and far too much logo formatting, you find yourself exhausted.
		The money's great, but, aside from the occasional Models & Bottles splurge, you have no time to spend it. Your eyes are permanently red, your friends/parents/trophy girlfriend haven't seen you in 3 months, and the only pleasure you now get out of life stems from seeing a deal come together using your size 12.5 Helvetica formatted pitch book.
		You question whether the \"dream\" was what you expected it to be. What should you do about your quarter-life crisis?",
		"answers" =>array(
						"1. Power through. You can sleep when you're dead, and grey hair makes men look dashing. You know it'll be awesome when you can eventually shit on Analysts from your high perch in the corner office, as long as you don't die from sleep deprivation and scurvy.",
						"2. Go out and score another ounce of cocaine. Get some of that new shit with ground-up glass in it: It goes into the bloodstream faster.",
						"3. Quit and go to B-School. Maybe you might land a sweet offer in the Promised Land of PE...or get a cushy job at Procter & Gamble.",
						"4. INCEPTION. You were only *dreaming* you were burnt-out. You're a baller, and even while you slept your fingers were on autopilot, building that leveraged-buyout model for a cosmetics company."
						),
		"answer" => 1
		"wrong" => array(
			0 => "You are already dead. On the INSIDE.",
			2 => "The economy's fucked, and PE's not hiring. You wind up begging for a job at Unilever, and selling detergent to bored housewives for the rest of your days. Suck it.",
			3 => "I-N-C-E-P-T-I-O-N. You were so baller that you had already made the job at Blackstone by the time you were nineteen, and were only DREAMING about your days as a fifteen-year-old IB rockstar. You wake up, high-five Steve Schwarzman and go sun in the Hamptons while your minimum-wage-earning maid and butler look on. Winner."
			)
		),
	array (
		"question" => "Your Managing Director walks in while you/'re hitting the coke hard. Do you:",
		"answers" => array(
						"1. Apologise profusely.",
						"2. Go long on his sperm, and short on your dignity",
						"3. Offer some of dat good shit to him.",
						),
		"answer" => 2
		"wrong" => array(
				0 => "Your MD surmizes that you have no balls and fires you. Game over. Go back to the cashiers' desk at Halifax.",
				1 => "Your sacrifice is accepted, but you fail to notice that your MD, while muscular, is in fact a female. You are fired for sexual harassment during a 360 review session."
			)
		),
	array ("question"=>
				"You hit it hard with your MD, and in a moment of dopamine-induced clarity, form a bond. You are promoted to VICE PRESIDENT at your next review.
				
				
				After much hard work, you have reached as far as pure graft can take you. 
				Your childhood friend and Analyst classmate Humphrey 
				has been sleeping with the higher-ups.
				You are both in competition for a coveted Managing Director position, 
				and you have the proof to expose him.
				What do you do?",
			"answers" => array(
						"1. Send the used condom directly to Lloyd.",
						"2. Blackmail Humphrey, getting him out of the running.",
						"3. Blackmail the Managing Partner involved, threatening to expose his homosexual fantasies to the wife and kids. While the firm favours diversity, six-year-old-Downs-Syndrome sex fantasies may not play well.",
						"4. Threesome?"
						),
			"answer" => 2
			"wrong" => array(
					0 => "After using the condom himself, Blankfein publically ignores your whistlebowing. You wake up the next morning with a $50 bill up your asshole and a note explaining that it is Severance pay.",
					1 => "Bad form. He reports the dirt he has on you in a classic brinkmanship move. Now everyone knows about your Two Girls One Lloyd photoshopped video.",
					3 => "Personal gain, career loss. After a wild night, you're fired. 2.5m+ hits on Youtube though..."
		)
  );
 
  
 $winner ="
 
 Boom. You are immediately recommended by him to the Committee for promotion to MANAGING DIRECTOR as a result of your \"Outstanding contributions to the firm, both financially and as a culture-carrier\".You've won the rat-race, but lost your family, friends, youth and soul in the process. 
 
You must feel on top of the world.";
  
  
   //echo print_r($world);
  //$answer = $_POST['form1'];
  //echo $answer;
  
  $debug = "";
  $previous;
  $section;
  // $POST;
  $intro;
  $winner;
  $wrong_statement;

  /*
	check if the 'current' post variable is set,
	if it is, set current equal to this otherwise
	it must be the begining of the game.
  */
  if(isset($_POST['current'])) 
  {
  	$previous = $_POST['current'];
  } else {
  	$previous = 0;
  }

  /*
	set section equal  to the 
	the current section so we
	can check if the posted 
	answer is corret.
  */
  $section = $world[$previous];
 
  /*
	check if the answer is corret. If it is
	we need to update the $section variable to 
	represent the next question. The index of
	the section question will be $current + 1
  */
  
  //check if answer is correct
  if($_POST['answer'] == $section['answer']) 
  {
  	$previous = $previous + 1;
  //answer is incorrect
  } 
  else { 
	$wrong_statement = $world[$previous]["wrong"][$_POST['answer']];
  	//print out wrong statement
  }

  //set the section to the new
  //section based  on the answer
  $section = $world[$previous];
  $debug = $_POST;

  /*
		!Zahid! - what you need to do:
		0) Make sure you understand the code above
		1) Check that the answer checking code is working
		   correctly.
		2) Include a check for the end of the array
		3) Do something when the user gets the question wrong
  */
  
  
  ?>

<!DOCTYPE>
<html>

<head>

	<title>Fear & Loating on Wall Street</title>

	<style type="text/css">
	
	#header, #footer {
	border: solid 2px black;
	margin: 2px;
	padding: 1px;
	background-color: gray;
	}
	
	ul{
	list-style-type: none;
	margin: 2px;
	padding: 2px;
	border: solid 1px black;
	background-color: grey;
	}
	
	li {
	display: inline;
	}
	
	form.game {
		border: solid 2px black;
		margin: 2px;
		padding: 2px;
	
	
	</style>
	
	

</head>

<body>

	<h1 id="header">
	Fear and Loathing on Wall Street
	</h1>
	
	<ul>
        <li><?php echo $section['question']; ?></li>
	</ul>

  <form class="game" method="post">
  <!--
  <input type="radio" name="form1" value="Water" /> Water<br>
  <input type="radio" name="form1" value="Beer" /> Beer<br>
  <input type="hidden" name="progress" value="0" /> 
  -->
  <?php foreach($section['answers'] as $key => $answer):  ?>
    <input type="radio" name="answer" value="<?php echo $key; ?>" /> <?php echo $answer; ?> <br>
  <?php endforeach; ?>
	<p><strong><?php echo $wrong_statement; ?></strong></p>
  <input class="submit" type="submit" />
  
  <div id="footer"> &copy;Just Rejected LLC
  
  </div>
  

  </form>


</body>

</html>
