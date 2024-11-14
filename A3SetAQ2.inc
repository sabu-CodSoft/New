<?php
 function len($s)
 {
	 $l=0;
	 for($i=0;$s[$i]!=NULL;$i++)
	 {
		 $l++;
	 }
	 return $l;
 }
 function vowel($s)
 {
	 $c=0;
	 for($i=0;$s[$i]!=NULL;$i++)
	 {
		 if($s[$i]=="a" || $s[$i]=="A" || $s[$i]=="e" || $s[$i]=="E" || $s[$i]=="i" || $s[$i]=="I" || $s[$i]=="o" || $s[$i]=="O" || $s[$i]=="u"|| $s[$i]=="U")
		 {
			 $c++;
		 }

	 }
	 return $c;
 }
?>
