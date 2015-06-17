<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vježba - tabularna navigacija</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/stil.css" />
    <script src="js/vendor/modernizr.js"></script>
   
  </head>
  <body>
  	
    	
  	<div class="tab-nav">
  		<ul class="tabs clearfix">

			<li class="active" rel="tab1"><h4> Prvi tab </h4></li>
			<li rel="tab2"><h4> Drugi tab</h4> </li>
			<li rel="tab3"><h4> Treći tab</h4> </li>
			<li rel="tab4"><h4> Četvrti tab</h4> </li>
			<li rel="tab5"><h4> Peti tab</h4> </li>
  			
  		</ul>
  		
  		<div class="panel active" id="tab1">
  			
  			Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji. 
  			Lorem Ipsum postoji kao industrijski standard još od 16-og stoljeća, kada je nepoznati tiskar uzeo tiskarsku 
  			galiju slova i posložio ih da bi napravio knjigu s uzorkom tiska. Taj je tekst ne samo preživio pet stoljeća, 
  			već se i vinuo u svijet elektronskog slovoslagarstva, ostajući u suštini nepromijenjen. 
  			Postao je popularan tijekom 1960-ih s pojavom Letraset listova s odlomcima Lorem Ipsum-a. 
  			
  		</div>
  		
  		<div class="panel" id="tab2">

			Odavno je uspostavljena činjenica da čitača ometa razumljivi tekst dok gleda raspored elemenata na stranici. 
			Smisao korištenja Lorem Ipsum-a jest u tome što umjesto 'sadržaj ovjde, sadržaj ovjde' imamo normalni raspored 
			slova i riječi, pa čitač ima dojam da gleda tekst na razumljivom jeziku
  			
  		</div>
  		
  		<div class="panel" id="tab3">

			Suprotno raširenom mišljenju, Lorem Ipsum nije samo slučajni tekst, već ima korijene u klasičnoj latinskoj 
			književnosti iz godine 45. pr.n.e., što znači da mu je preko 2000 godina. Richard McClintock, 
			profesor latinskog jezika na Hampden-Sydney koledžu u Virginiji, potražio je jednu od čudnijijh latinskih riječi, 
			consectetur, iz Lorem Ipsum teksta, i prolazeći kroz citate te riječi u klasičnoj književnosti, 
			otkrio nedvojbeni izvor. Lorem Ipsum dolazi iz odlomaka 1.10.32 i 1.10.33 Ciceronovog djela pod naslovom 
			"de Finibus Bonorum et Malorum" (Krajnosti dobra i zla), napisanog 45.
  			
  		</div>
  		
  		<div class="panel" id="tab4">

			Postoje mnoge varijacije odlomaka iz Lorem Ipsum-a, ali većina je pretrpjela kojekakve promjene s dodanim humorom, 
			ili nasumičnim riječima koje nikako tu ne spadaju. Ako trebate koristiti Lorem Ipsum, 
			morate biti sigurni da tekst ne sadrži skrivene nepodobne riječi ili fraze. Lorem Ipsum generatori na Internetu 
			većinom ponavljaju zadane odlomke po potrebi
  			
  		</div>
  		
  		<div class="panel" id="tab5">

			Za one koje zanima, standardni dio Lorem Ipsum-a koji se koristi od 16.-og stoljeća može se naći u nastavku 
			na ovoj stranici. Dijelovi 1.10.32 i 1.10.33 iz djela "de Finibus Bonorum et Malorum" su doslovno preneseni 
			iz originala, popraćeni engleskim prijevodom H. Rackhama iz 1914.
  			
  		</div>
  		
  		
  		
   	</div>

    

    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script>
    
    $(document).ready(function(){
    	
    	$('.tabs li').on('click', function(){
    		
    		$('.tabs li.active').removeClass('active');
    		$(this).addClass('active');
    			
    			var odabranPanel = $(this).attr('rel');
    			
    			$('.panel.active').hide(0,panel);
    			
    			function panel(){
    			$(this).removeClass('active');	
    			$('#'+odabranPanel).show(0, function(){
    				$(this).addClass('active');
    			});
    			
    			
    			}
    		});
    	
    });
    
    </script>
  </body>
</html>
