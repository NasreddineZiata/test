<?php
    $count=$count['count'];
    if(isset($count)){
        $count++;
    }else{
        $count=0;
    }

    setcookie('count',$count);
    echo $count;
?>