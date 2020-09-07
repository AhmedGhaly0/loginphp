<?php

session_start();


if(empty($_SESSION['userdata'])){

    header('LOCATION:index.html');

}else{
    echo '<div style=" width:100%; color:white; height: 60; background: #222; text-align: center; margin: 0; padding-top: 5px ;"> Welcome To Page Home <a style="background: white; color: #3f65b5;  padding: 15px 20px; float:right; margin-right:20px;" href = "logout.php">LogOut</a></div>' . '<br>';
   
}

?>

<!DOCTYPE HTML>
<html>
<head>
     <meta charset="utf-8">
	 <meta name="description" content ="welcome to new">
	 <title>Task 2</title>

	 
     
</head>

    
        <?php
                // function max number to min 
               $s= array(2,20,7,3,6,8,10);
                print_r($s);
                echo '<br>';
         $d= max(array(2,20,7,3,6,8,10));
         echo"<br>". "<div style='text-align:center; width:70px ;background :red; '>".'max ' .  $d .  "</div>";

         $d= min(array(2,20,7,3,6,8,10));
         echo "<div style='text-align:center; width:70px ;background :red; margin-top:2px; '>".'min ' .  $d .  "</div>";
        $posts = [
            [ 'tittle' => 'post one' , 'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corrupti temporibus fugit nam dolore! Facere sapiente fuga laboriosam. Omnis facilis maxime aspernatur fuga possimus pariatur quia quasi consequuntur dolores tenetur.'],
            [ 'tittle' => 'post tow' , 'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corrupti temporibus fugit nam dolore! Facere sapiente fuga laboriosam. Omnis facilis maxime aspernatur fuga possimus pariatur quia quasi consequuntur dolores tenetur.'],
            [ 'tittle' => 'post three' , 'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corrupti temporibus fugit nam dolore! Facere sapiente fuga laboriosam. Omnis facilis maxime aspernatur fuga possimus pariatur quia quasi consequuntur dolores tenetur.'],
            [ 'tittle' => 'post four' , 'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corrupti temporibus fugit nam dolore! Facere sapiente fuga laboriosam. Omnis facilis maxime aspernatur fuga possimus pariatur quia quasi consequuntur dolores tenetur.'],
            [ 'tittle' => 'post five' , 'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corrupti temporibus fugit nam dolore! Facere sapiente fuga laboriosam. Omnis facilis maxime aspernatur fuga possimus pariatur quia quasi consequuntur dolores tenetur.'],
            [ 'tittle' => 'post six' , 'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corrupti temporibus fugit nam dolore! Facere sapiente fuga laboriosam. Omnis facilis maxime aspernatur fuga possimus pariatur quia quasi consequuntur dolores tenetur.'],
            [ 'tittle' => 'post seven' , 'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corrupti temporibus fugit nam dolore! Facere sapiente fuga laboriosam. Omnis facilis maxime aspernatur fuga possimus pariatur quia quasi consequuntur dolores tenetur.'],
            [ 'tittle' => 'post eight' , 'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corrupti temporibus fugit nam dolore! Facere sapiente fuga laboriosam. Omnis facilis maxime aspernatur fuga possimus pariatur quia quasi consequuntur dolores tenetur.'],
            [ 'tittle' => 'post nine' , 'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corrupti temporibus fugit nam dolore! Facere sapiente fuga laboriosam. Omnis facilis maxime aspernatur fuga possimus pariatur quia quasi consequuntur dolores tenetur.']
        ];

        foreach($posts as $key){

            
        foreach( $key as $k => $v ){
               
        echo "<div style =\"background :#222; margin:5;  text-align:center; display:inline-block; width:500px; padding:20px 0 20px 0 ; color:white; \">
        " . $k . ' ! '  . '<br>' . $v ."
        </div>";
        }
        }
 

  ?>
</html>
