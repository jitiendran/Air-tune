<?php
    function sname($j){
        $db = mysqli_connect('localhost','root','','tamil');
        $query = mysqli_query($db,"SELECT * FROM rahman");
        $count = mysqli_num_rows($query);
        $song_names = array();
        for($i = 1 ; $i <= $count ;$i++){
            $query2 = mysqli_query($db,"SELECT * FROM rahman WHERE sid = $i");
            $row = mysqli_fetch_assoc($query2);
            $name = $row['sname'];
            array_push($song_names,$name);
        }
        echo $song_names[$j];
    }
?>