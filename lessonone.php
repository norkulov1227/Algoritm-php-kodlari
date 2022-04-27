<?php
    
//    echo   $_POST['lessonfive.php'];

    // ikkita matritsaning yig'indisini hisoblash algoritmi
// function qoshish(&$A, &$B, &$C)
// {
//     $N = 4;
//     for ($i = 0; $i < $N; $i++)
//         for ($j = 0; $j < $N; $j++)
//             $C[$i][$j] = $A[$i][$j] +
//                          $B[$i][$j];
// }
 
// $A = array(array(0,3,2),
//            array(4,5,6),
//            array(-3,2,1),
//            );
 
// $B = array(array(2,-1,3),
//            array(0,2,4),
//            array(5,3,1),
//            );
 
// $N = 3;
// qoshish($A, $B, $C);
 
// echo "Ikkita matritsaning yig'indisi: <br>";
// for ($i = 0; $i < $N; $i++)
// {
//     for ($j = 0; $j < $N; $j++)
//     {
//         echo $C[$i][$j];
//         echo " ";
//     }
//     echo "<br>" ;
// }

//     // Ikkita matritsaning ayirmasini hisoblash algoritmi

//     function ayirish(&$A, &$B, &$C)
// {
//     $N = 4;
//     for ($i = 0; $i < $N; $i++)
//         for ($j = 0; $j < $N; $j++)
//             $C[$i][$j] = $A[$i][$j] -
//                          $B[$i][$j];
// }
 
// $A = array(array(0,3,2),
//            array(4,5,6),
//            array(-3,2,1),
//            );
 
// $B = array(array(2,-1,3),
//            array(0,2,4),
//            array(5,3,1),
//            );
 
// $N = 3;
// ayirish($A, $B, $C);
 
// echo "Ikkita matritsaning ayirmasi: <br>";
// for ($i = 0; $i < $N; $i++)
// {
//     for ($j = 0; $j < $N; $j++)
//     {
//         echo $C[$i][$j];
//         echo " ";
//     }
//     echo "<br>" ;
// }


//     // Ikkita matritsaning ko'paytmasini hisoblash algoritmi

// function kopaytirish(&$A, &$B, &$C)
// {
//     $N = 3;
//     for ($i = 0; $i < $N; $i++)
//     {
//         for ($j = 0; $j < $N; $j++)
//         {
//             $C[$i][$j] = 0;
//             for ($k = 0; $k < $N; $k++)
//                 $C[$i][$j] += $A[$i][$k] *
//                                 $B[$k][$j];
//         }
//     }
// }

// // Driver Code
// $A = array(array(0,3,2),
//            array(4,5,6),
//            array(-3,2,1),
//            );

// $B = array(array(2,-1,3),
//            array(0,2,4),
//            array(5,3,1),
//            );

// kopaytirish($A, $B, $C);
// $N = 3;
// echo ("Ikkita matritsaning ko'paytmasi: <br>");
// for ($i = 0; $i < $N; $i++)
// {
//     for ($j = 0; $j < $N; $j++)
//     {
//         echo ($C[$i][$j]);
//         echo(" ");
//     }
//     echo ("<br>");
// }

// // This code is contributed
// // by Shivi_Aggarwal



// function y($x)
// {
    
    
//     return 1 / (1 + $x * $x);
// }


// function trapezoidal($a, $b, $n)
// {
    
   
//     $h = ($b - $a) / $n;

    
//     $s = y($a) + y($b);

   
//     for ($i = 1; $i < $n; $i++)
//         $s += 2 * Y($a + $i * $h);

    
//     return ($h / 2) * $s;
// }

//     $x0 = 2;
//     $xn = 3;
//     $n = 10;

//     echo("Integral yechimi : ");
//     echo(trapezoidal($x0, $xn, $n));
    
/*Berilgan funksiyaning boshlang'ichini topish mumkin bo'lmagan holda funksiyalarni taqribiy hisoblash usullari orqali yechish*/
// 1. To'rtburchaklar usulida yechish
/*$a = 2;
$b = 3;
$n = 10;

$h = ($b - $a)/$n;

$sum = 0;

for ($i=1; $i <= $n; $i++) { 

    $x = $a + $h *$i;

    $sum += sin($x**4)*$h;
}

echo "<br>To'rtburchaklar usulidagi natija: " . $sum;*/
    /*$a = 0;
    $b = 1;
    $n = 10;

    $h = ($b - $a)/ $n;

    $sum = 0;

    for($i=1; $i <= $n; $i++){
        $x = $a + $h*$i;

        $sum += (($x + 5)**(1/2)) * log($x**2 + $x + 3); 
    }

    echo "<br>To'rtburchaklar usulidagi natija: " . $sum;


/*
// 2. Trapetsiyalar usulida yechish:
    $a = 2;
    $b = 3;
    $n = 10;

    

    $h = ($b - $a)/$n;

    $sum = 0;

    for ($i=1; $i <= ($n-1); $i++) { 
            
            $x = $a + $i*$h;
            
            $sum += sin($x**4);
        }    

        $result = ($h/2) * (2 * $sum + sin($a**4) + sin($b**4));

        echo "<br>Trapetsiyalar usulidagi natija: " . $result;
*//*
$a = 0;
$b = 1;
$n = 10;

$h = ($b - $a)/ $n;

$sum = 0;
for($i=1; $i <= ($n-1); $i++){
    $x = $a + $i*$h;

    $sum += (($x + 5)**(1/2)) * log($x**2 + $x + 3);
}

$result = ($h/2) * (23 * $sum + (($a+5)**(1/2)) * log($a**2 + $a + 3) + (($b+5)**(1/2)) * log($b**2  + $b +3));

echo '<br><br>Trapetsiyalar usulidagi natija:  ' . $result;*/

/*
// 3. Simson usulida yechish:

    $a = 2;
    $b = 3;
    $n = 10;
    $h = ($b - $a)/$n;
    $m = $n /2;
    $sum1 = 0;
    $sum2 = 0;

    for ($i=1; $i <= $m; $i+=2) { 
        $x = $a + $i * $h;
        $sum1 += sin($x**4);
    }
    for ($i=0; $i <= ($m-1); $i+=2) { 
        $x = $a + $i * $h;
        $sum2 += sin($x**4);
    }
    $result = ($h/3)*(sin($a**4) + sin($b**4) + 4*$sum1 + 2*$sum2);
    
    echo " <br>Simson usulidagi natija: " . $result;
    echo "<br>";*/
   /* $a = 0;
    $b = 1;
    $n = 10;
    $h = ($b - $a)/ $n;
    $m = $n/2;
    $sum1 = 0;
    $sum2 = 0;

    for($i=1; $i<=$m; $i+=2){
        $x = $a + $i*$h;
        $sum1 += (sqrt($x+5) * log($x**2 + $x + 3));
    }
    
    for($i=0; $i<=$m-1; $i+=2){
        $x = $a + $i*$h;
        $sum2 += (sqrt($x+5) * log($x**2 + $x + 3));
    }

    $natija =($h) * (  20 * $sum1 + 18 * $sum2 + (sqrt($a+5) * log($a**2 + $a + 3) +  (sqrt($b+5) * log($b**2  + $b +3)) )) ;

    echo "<br><br>Simson usulidagi natija:  " . $natija;
/*f = x**3 + x -1 = 0   [0;1] */
    
  /*  $a = 0;
    $b = 1;
    $e = 0.001;

    if (($b-$a) > $e) {

        $c = ($a+$b)/2;

        $f = ($a**3 + $a -1)*($c**3 + $c -1);

    if ($f < 0) {

        $b = $c;

    }else{

        $a = $c;
    }


        $x = ($b +$a)/2;

    echo "Natija : " . $x;
    
    }else{

        $x = ($a + $b)/2;
        echo "Natija : " . $x;

    }

    function funksiya($i)
    {
        return $f = $i**3 + $i -1;
    }
    
    function result($b, $a, $e)
    {
        $c = ($a+$b)/2;

    if ($f($a)*$f($c) < 0) {

        $b = $c;

    }else{

        $a = $c;
    }

    if(($b - $a) - $e){
        return result($b, $a, $e);
    }else {
        return ($a + $b)/2;
    

    }

    result("1", "0", "0.001");

    echo result();

    }*/

    /*Oraliqni teng ikkiga bo’lish usuli uchun dastur kodi:

program ikkiga_bolish;
var a,b,eps:real;
function f(x:real):real;
begin f:= {tenglamani o'ng tarafini yozing} end;
begin
write('a,b,eps=?');readln(a,b,eps);
1 : c:=(a+b)/2;
if f(a)*f(c)<0 then b:=c else a:=c;
if (b-a)> e then  goto 1;
write(' Yechim  =' , (a+b)/2)
end.
*/

   function method($x)
   {
       return $x**3 - 3* $x**2 + 5*$x + 1;
   }

   $a = ;
   $b = ;
   $c = ;
   $e = ;
   $x = ;

   goto method;

   $c = ($a + $b)/2;

   if (method($a) * method($c) < 0) {
       $b = $c;
   }else{
     $a = $c;
   }

   if(($b - $a) > $e){
    method:
   }
   $x = ($a + $b)/2;

   echo "Natija: " . $x;
    

?>