<?php
function verifica($CPF){
  $soma1=0;
   $x=10;	
   for ($i=0; $i<=9; $i++){
        $D1=substr($CPF, $i, 1);
        $teste=$D1*$x;
        $soma1=$soma1+($D1*$x);
        $x--;
        }
  $soma1=11-($soma1%11);
  if($soma1==11 or $soma1==10){
                              $soma1=0;}
  $soma2=0;
  $z=11;
  for ($y=0; $y<=9; $y++){
                           $D2=(int)substr($CPF, $y, 1);
                           $soma2=$soma2+($D2*$z);
                           $z--;
                         }
  $soma2=$soma2+($soma1*2);
  $soma2=11-($soma2%11);
  if($soma2==11 or $soma2==10){
                              $soma2=0;}
  if((substr($CPF, 9, 1)<> $soma1)or (substr($CPF, 10, 1) <> $soma2)){
                                        $CPF=true;
                                                                   }
   else{ $CPF=false;}
  return $CPF;
}
?>

