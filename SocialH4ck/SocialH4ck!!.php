<?php

for($i=0; $i<=100 ; $i++){
	
	
	
 switch ($i){
	  case ($i % 3 == 0 && $i % 5 ==0):
	 
	 print "SocialH4ck  ".$i."<br/>\n\n ";
	 
	 break;
	 case ($i % 3 == 0):
	 
	  print "Social ".$i."<br/> \n\n ";
	 
	 break;
	 
	 case ($i % 5 ==0):
	 
	 print "H4ck".$i."<br/> \n\n ";
	 
	 break;
	
 }
	
	
	
	
}






?>