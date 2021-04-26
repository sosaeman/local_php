<?php

    function getMainPosts(){ 
        $db=mysqli_connect('localhost','root','','php-mysql');
        $query= "SELECT * FROM post";
        $result= mysqli_query($db,$query);

//check to see if $result has data
        if($result==FALSE){
            echo'$result = FALSE';
        }

//print object for debugging array issue
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';

        //debugg sub-array issue
        // foreach($result as $val){
        //     //Print out the element if it isn't an array.
        //     if(!is_array($val)){
        //         echo $val, '<br>';
        //     }
        // }
        
        //loop through table rows
        foreach($result as $item){
            echo '<tr>
                 <th>'.$item['id'].'</th>
                 <td>'.$item['title'].'</td>
                 <td>'.$item['content'].'</td>
                 <td>'.$item['author'].'</td>
             </tr>' ;
        }
          
    //loop through array function trows error
        // while($row= mysqli_fecth_array($result)){
        //    echo '<tr>
        //     <th>'.$row['id'].'</th>
        //     <td>'.$row['title'].'</td>
        //     <td>'.$row['content'].'</td>
        //     <td>'.$row['author'].'</td>
        //   </tr>' ;
        // }
        
    }

?>