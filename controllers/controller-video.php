<?php
function toolbar($url){
    
    if($url != "true"){
    
        $hey = "el resultado seria $url y punto";
        return "<link rel='stylesheet' href='/css/style_video_.css'>
        <iframe  class='container_video' 
             src='$url?feature=oembed&amp;autoplay=1&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;rel=0&amp;modestbranding=1'
             frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen>
        </iframe>";
        
    }else{
    return "";
    }
    
    }
    
     if(isset( $_POST['url'])){
        echo toolbar($_POST['url']);
       /*  echo $_POST['valor']; */
    }else{
       
    }
?>