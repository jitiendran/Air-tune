<?php 
session_start();
$_SESSION['success'] = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="admin-images/web-icon1.svg" type="image/x-icon">
    <title>Air tunes | admin-tamil</title>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="admin-sylesheets/admin-tamil.css">
</head>
<body>
    <script src="admin-javascript/admin.js"></script>
    <div class="main">
        <div class="slidebar-container">
            <h1>Admin</h1>
            <hr>
            <div class="slidebar-content">
                <a href="admin.php">Dashboard</a>
                <a href="admin-users.php">Users</a>
                <a href="admin-albums.php">Albums</a>
                <a href="admin-list.php">List</a>
                <a href="admin-tamil.php">Tamil</a>
                <a href="admin-english.php">English</a>
            </div>
        </div>
        <div class="submain">
            <div class="admin-navbar-container">
                <div class="admin-title">
                    <button class="bars"><i class="fas fa-bars"></i></button>
                    <svg width="512" height="512" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="iconfinder_equilizer_1646011 1">
                        <g id="circle">
                        <path id="Vector" d="M256 512C397.385 512 512 397.385 512 256C512 114.615 397.385 0 256 0C114.615 0 0 114.615 0 256C0 397.385 114.615 512 256 512Z" fill="url(#paint0_linear)"/>
                        </g>
                        <g id="tunes">
                        <g id="Group">
                        <path id="Vector_2" d="M175.4 282.1V142.7C175.4 139.9 173.1 137.6 170.3 137.6C167.5 137.6 165.2 139.9 165.2 142.7V282.1C146.1 284.6 131.2 300.9 131.2 320.6C131.2 340.4 146.1 356.6 165.2 359.1V369.3C165.2 372.1 167.5 374.4 170.3 374.4C173.1 374.4 175.4 372.1 175.4 369.3V359.1C194.5 356.6 209.4 340.3 209.4 320.6C209.4 300.8 194.5 284.6 175.4 282.1ZM170.3 349.5C154.4 349.5 141.4 336.5 141.4 320.6C141.4 304.7 154.4 291.7 170.3 291.7C186.2 291.7 199.2 304.6 199.2 320.6C199.2 336.5 186.2 349.5 170.3 349.5Z" fill="#010101"/>
                        <path id="Vector_3" d="M380.7 282.5C380.7 262.7 365.8 246.5 346.7 244V142.7C346.7 139.9 344.4 137.6 341.6 137.6C338.8 137.6 336.5 139.9 336.5 142.7V244C317.4 246.5 302.5 262.7 302.5 282.5C302.5 302.3 317.4 318.5 336.5 321V369.3C336.5 372.1 338.8 374.4 341.6 374.4C344.4 374.4 346.7 372.1 346.7 369.3V321C365.9 318.5 380.7 302.3 380.7 282.5ZM341.7 311.4C325.8 311.4 312.8 298.5 312.8 282.5C312.8 266.6 325.8 253.6 341.7 253.6C357.6 253.6 370.6 266.6 370.6 282.5C370.5 298.4 357.6 311.4 341.7 311.4Z" fill="#010101"/>
                        <path id="Vector_4" d="M261.7 152.9V142.7C261.7 139.9 259.4 137.6 256.6 137.6C253.8 137.6 251.5 139.9 251.5 142.7V152.9C232.4 155.4 217.5 171.7 217.5 191.4C217.5 211.1 232.4 227.4 251.5 229.9V369.3C251.5 372.1 253.8 374.4 256.6 374.4C259.4 374.4 261.7 372.1 261.7 369.3V230C280.8 227.5 295.7 211.2 295.7 191.5C295.7 171.8 280.9 155.4 261.7 152.9ZM256.7 220.3C256.7 220.3 256.6 220.3 256.7 220.3C256.6 220.3 256.6 220.3 256.7 220.3C240.8 220.3 227.8 207.3 227.8 191.4C227.8 175.5 240.8 162.5 256.7 162.5C272.6 162.5 285.6 175.5 285.6 191.4C285.5 207.3 272.6 220.3 256.7 220.3Z" fill="#010101"/>
                        </g>
                        </g>
                        </g>
                        <defs>
                        <linearGradient id="paint0_linear" x1="256" y1="512" x2="256" y2="0" gradientUnits="userSpaceOnUse">
                        <stop stop-color="white"/>
                        <stop offset="0.477083" stop-color="white"/>
                        <stop offset="0.888542" stop-color="#FDFDFD"/>
                        <stop offset="0.940625" stop-color="white"/>
                        <stop offset="0.971875" stop-color="#FDFDFD"/>
                        <stop offset="0.9998" stop-color="white"/>
                        <stop offset="0.9999" stop-color="#F5EC06"/>
                        <stop offset="1" stop-color="#4776E6"/>
                        <stop offset="1" stop-color="white"/>
                        </linearGradient>
                        </defs>
                    </svg>
                    <h1>Air tunes</h1>
                </div>            
                <a href="#"><i class="fas fa-user-circle"></i> <span>Admin </span> <i class="fas fa-chevron-down"></i></a>
            </div>
            <main>
                <form action="admin-tamil.php" method="post" enctype="multipart/form-data">
                    <div class="add-container">
                        <h1>Tamil</h1>
                        <div class="add-content">
                            <label for="#">Album Name</label>
                            <input type="text" name="album">
                        </div>
                        <div class="add-content">
                            <label for="#">Song Name</label>
                            <input type="text" name="sname">
                        </div>
                        <div class="add-content">
                            <label for="#">Song</label>
                            <input type="file" name="audio">
                        </div>
                        <button type = "submit" name="add">Add</button>
                    </div>
                </form>
                    <?php
                        $errors = array();
                        $db = mysqli_connect('localhost','root','','tamil');
                        // $id=1 //id of the music file
                        // $query1 = mysqli_query($db,"SELECT * FROM rahman WHERE sid=1");
                        // $row = mysqli_fetch_assoc($query1);
                        // echo $row['song'];
                        // echo "<audio controls>";
                        // echo "</audio>";
                        if(isset($_POST['add'])){
                            $album = mysqli_real_escape_string($db,$_POST['album']);
                            $name = mysqli_real_escape_string($db,$_POST['sname']);
                            if(isset($_FILES['audio'])){
                                $song= $_FILES['audio'] ['name'];
                            }
                            else{
                                echo "Nothing";
                            }
                            if (empty($album)){array_push($errors,"Album is required");}
                            if (empty($name)){array_push($errors,"Name is required");}
                            if (empty($song)){array_push($errors,"File is required");}
                            if(count($errors) == 0){
                                $dir = 'songs/';
                                $upload = $dir.$_FILES['audio'] ['name'];
                                $query = "INSERT INTO rahman (sname,song,composer) 
                                            VALUES('$name','$song','$album')";
                                mysqli_query($db,$query);
                                if(move_uploaded_file($name,$upload)){
                                    echo "File uploaded successfully";
                                }
                                else{
                                    echo "File is not uploaded";
                                }
                                
                            }
                        }

                    ?>
                    <?php
                        $db = mysqli_connect('localhost','root','','tamil');
                        $query2 = mysqli_query($db,"SELECT song FROM rahman");
                        $count = mysqli_num_rows($query2);
                        for($i = 1 ; $i <= $count ;$i++){
                            $query3 = mysqli_query($db,"SELECT * FROM rahman WHERE sid = $i");
                            $row = mysqli_fetch_assoc($query3);
                            $s = $row['song'];
                            $song = 'songs/'.$s;
                            echo "<a href = '$song'>Click here</a><br>";
                        }
                    ?>
                    
                    <!-- <a href="<?php echo $row['song']; ?>">Click here</a>   
            </main>
        </div>
    </div>
</body>
</html>