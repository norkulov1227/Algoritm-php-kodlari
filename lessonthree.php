<?php

 /*$products = [
    [
        'id' => '1',
        'name' => 'olma',
        'price' => '15000',
        'category' => 'fruits'
    ],
    [
        'id' => '2',
        'name' => 'snikers',
        'price' => '10000',
        'category' => 'swits'
    ],
    [
        'id' => '3',
        'name' => 'carrot',
        'price' => '21000',
        'category' => 'vegatables'

    ]
];
    echo '<ol>';
foreach($products as $key => $value){
echo '<li>'. $value['name'] . ' '. $value['category'] . '</li>';
}
echo '</ol>';

       $fruits = ['apple','nok','olcha','gilos','behi','anjir','banan'];

        if(in_array('nok', $fruits)){
            echo array_search('nok', $fruits);
           
        }*/
            
        $books = 
        [
            [
                'id' => '1',
                'name' => 'Boburnoma',
                'color' => '<p style ="color: red">qizil</p>',
                'price' => 12345,
                'quantity' => 1754
            ],
            [   
                'id' => '2',
                'name' => 'Ikki eshik orasi',
                'color' => '<p style ="color: blue">ko\'k</p>',
                'price' => 46432,
                'quantity' => 765
            ],
            [
                'id' => 3,
                'name' => 'baxt qasri',
                'color' => '<p style ="color: yellow">yellow</p>',
                'price' => 34256,
                'quantity' => 365
            ],
            [
                'id' => 4,
                'name' => 'Yillar tuzoni',
                'color' => '<p style ="color: green">yashil</p>',
                'price' => 26534,
                'quantity' => 867
            ]  ,     
            [
                'id' => 5,
                'name' => 'Yulduzli tunlar',
                'color' => '<p style ="color: grey">kulrang</p>',
                'price' => 76543,
                'quantity' => 824
            ]              
        ];
        $sum = 0;
        $summ = 0 ;
    // echo    '<style>';


    // echo '</style>';
        echo "<table border = '5'>";
        echo '<tr>';
        echo '<th>' . 'id' . '</th>';
        echo '<th>' . 'Book_name' . '</th>';
        echo '<th>' . 'color' . '</th>';
        echo '<th>' . 'price' . '</th>';
        echo '<th>' . 'quantity' . '</th>';
    echo '</tr>';
    
foreach($books as $key => $value){
    
    echo '<tr>';
    echo '<td>' . $value['id'] . '</td>';
echo '<td>'. $value['name'] . ' </td>';
echo '<td>'. $value['color'] . ' </td>';
echo '<td>'. $value['price'] . ' </td>';
echo '<td>'. $value['quantity'] . ' </td>';
      echo '</tr>';  
}
echo '<tr>';
echo '<th>' . 'All price' . '</th>';
echo '<th>' . 'All quantity' . '</th>'; 
echo '<tr>';
foreach($books as $key => $value){
    $sum+=$value['price'];
    $summ += $value['quantity'];
}
echo  '<td>'.$sum . '</td>' ;
echo  '<td>'.$summ . '</td>' ;
echo '</table>';
       


function maxniTop($arr){
    $max = 0;

    foreach($arr as $key => $value){
        if($max < $value['price']){
            $max = $value['price'];
        }
    }
    return $max;

}

$max = maxniTop($books);

echo '<p style = "color: red"> MaxPrice </p>= '.$max;

/*function Area($a,$b,$c){
    $p = ($a+$b+$c)/2;

    $s = sqrt($p*($p-$a)*($p-$b)*($p-$c));

    return $s;
}
echo Area(6,8,10) . '<br>';

     function Kvadrattenglama($a,$b,$c){

        $x1 = (-$b + sqrt($b**2 - 4*$a*$c))/(2*$a);
        $x2 = (-$b - sqrt($b**2 - 4*$a*$c))/(2*$a);
        return [$x1,$x2];
     }
     $x = Kvadrattenglama(1,8,0);

     echo 'Tenglama ildiz 1 = ' . $x[0] . '<br>';
     echo 'Tenglama ildiz 2 = ' . $x[1];*/
?>