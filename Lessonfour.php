<?php
        
        $news = [
            [
                'id' => 1,
                'title' => 'Futbol boyicha jahon chempionatiga chiqa olmadik ',
                'description' => 'bu yangilik',
                'image' => 'image.png',
                'written' => 'Ronda Bern',
                'date' => '2021-12-12',
                'status' => 1,
                'views' => 45
            ],
            [
                'id' => 2,
                'title' => 'Futbol boyicha jahon chempionatiga chiqa olmadik ',
                'description' => 'bu yangilik',
                'image' => 'image.png',
                'written' => 'Ronda Bern',
                'date' => '2021-12-12',
                'status' => 1,
                'views' => 34
            ],
            [
                'id' => 3,
                'title' => 'Futbol boyicha jahon chempionatiga chiqa olmadik ',
                'description' => 'bu yangilik',
                'image' => 'image.png',
                'written' => 'Ronda Bern',
                'date' => '2021-12-12',
                'status' => 0,
                'views' => 56
            ]
            ];
        
        
            foreach($news as $key=>$value){
                $max = 0;
                if($max > $value['views'])
                    $id = $value['id'];
            }
            // echo $id;
        
        
            $sonlar = [3,234,23,423,1,2,23,789,23,40];
        
            $avg = array_sum($sonlar)/sizeof($sonlar);
            // echo $avg;
        
            $arr = [];
            for($i=0; $i<sizeof($sonlar); $i++){
                if($sonlar[$i] > $avg){
                    $arr[] = $sonlar[$i];
                    // array_push($arr, $sonlar[$i]);
                }
            }
        
            var_dump($arr); // homework
        
        ?>
        
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <title>Lesson 4</title>
        </head>
        <body>
            <div class="container">
                <h3>Yangiliklar</h3>
                    <div >
                     <table class="table table-dark">
                         <thead>
                             <tr>
                                 <td>ID</td>
                                 <td>Title</td>
                                 <td>Description</td>
                                 <td>Written</td>
                                 <td>Date</td>
                                 <td>Status</td>
                                 <td>Views</td>
                             </tr>
                         </thead>
                         <tbody>
                             <?php 
                                 foreach($news as $key => $item):
                                     if($item['status'] == false):
                             ?>
                                 <tr>
                                     <td><?=$item['id' ]?></td>    
                                     <td><?=$item['title' ]?></td>    
                                     <td><?=$item['description' ]?></td>    
                                     <td><?=$item['written' ]?></td>    
                                     <td><?=$item['date'] ?></td>    
                                     <td><?=$item['status'] ?></td>    
                                     <td><?=$item['views'] ?></td>    
                                 </tr>
                             <?php
                                 endif;
                             endforeach;
                             ?> 
                         </tbody>
                     </table>
                    </div>
                    <div >
                     <table class="table table-light">
                         <thead>
                             <tr>
                                 <td>ID</td>
                                 <td>Title</td>
                                 <td>Description</td>
                                 <td>Written</td>
                                 <td>Date</td>
                                 <td>Status</td>
                                 <td>Views</td>
                             </tr>
                         </thead>
                         <tbody>
                             <?php 
                                 foreach($news as $key => $item):
                                     if($item['status'] == true):
                             ?>
                                 <tr>
                                     <td><?=$item['id' ]?></td>    
                                     <td><?=$item['title' ]?></td>    
                                     <td><?=$item['description' ]?></td>    
                                     <td><?=$item['written' ]?></td>    
                                     <td><?=$item['date'] ?></td>    
                                     <td><?=$item['status'] ?></td>    
                                     <td><?=$item['views'] ?></td>    
                                 </tr>
                             <?php
                                 endif;
                             endforeach;
                             ?> 
                         </tbody>
                     </table>  
                    </div>
            </div>
        </body>
        </html>
