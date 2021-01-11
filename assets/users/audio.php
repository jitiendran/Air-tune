<?php
    $i = 0;
    function audio(){
        $db = mysqli_connect('localhost','root','','tamil');
        $query = mysqli_query($db,"SELECT * FROM rahman");
        $count = mysqli_num_rows($query);
        $audio_songs = array();
        for($i = 1 ; $i <= $count ;$i++){
            $query2 = mysqli_query($db,"SELECT * FROM rahman WHERE sid = $i");
            $row = mysqli_fetch_assoc($query2);
            $name = $row['sname'];
            $comp = $row['composer'];
            $s = $row['song'];
            $song = 'songs/'.$s;
            array_push($audio_songs,$song);
        }
        echo $audio_songs[$i];
        $i++;
    }
?>