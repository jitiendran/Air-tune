<?php
                    $db = mysqli_connect('localhost','root','','tamil');
                    // $id=1; //id of the music file
                    $query2 = mysqli_query($db,"SELECT * FROM rahman WHERE sid=2");
                    $row = mysqli_fetch_assoc($query2);
                    header("Content-type: audio/mp3");
                    header("Content-transfer-encoding:binary");
                    header("Accept-Ranges:bytes");
                    echo $row['song'];
?>