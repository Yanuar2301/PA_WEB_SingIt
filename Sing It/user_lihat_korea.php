<?php
    require('koneksi.php');
    session_start();
    if ( !isset($_SESSION['login'])){
        header("Location: login.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingIt</title>
    <link rel="stylesheet" href="stylesheet/style_user_lihat.css?v2">
        
</head>
<body >
    <nav class="Navigator">
        <div class="Brand">
            <div id="Depan" onclick="ubahheader()">Sing</div>
            <div id="Belakang" onclick="ubahheader1()">It</div>
        </div>
        <ul >
            <li><a href="home.php">Profile</a></li>
            <li><a href="home.php">Home</a></li>
            <li><a href="user_lihat_playlist.php">Playlist</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="artis.php">Artist</a></li>
            <li><a href="index.php">Logout</a></li>
            <li ><input class="btn" onclick="mode()" type="checkbox"></li>
        </ul>
        <div class="List-Nav-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </nav>
    <div class="ContentPlace">
        <h1>Daftar Lagu Top 10 Korea</h1>
        <div>
        <form class="box-cari" method= "get" action="">
            <input type="text" placeholder= "Cari Lagu ..." name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];} ?>">
            <br>
            <button type="submit"><img src="img/search.png"></button>
        </form>  
        </div>
        <table>
            <tr>
                <th>Artis</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th></th>
            </tr>
            
            <?php 
                include "koneksi.php";
                if (isset($_GET['cari'])){
                    $pencarian= $_GET['cari'];
                    $query = "SELECT * FROM topkorea WHERE Penyanyi LIKE '%".$pencarian."%' OR Lagu LIKE '%".$pencarian."%'";  
                }else{
                    $query= "SELECT * FROM topkorea";
                }


                $read = mysqli_query($conn_log, $query);
                while($row = mysqli_fetch_assoc($read)){
            ?>
            <tr>
                <td><?php echo $row['Penyanyi'] ?></td>
                <td><?php echo $row['Lagu'] ?></td>
                <td><img src="file/<?php echo $row['Gambar']?>" alt=""></td>
                <td>
                    <a href="play.php?id_korea=<?=$row['id_korea'];?>">
                        <img id ="icon" src="img/play.png" alt="play" >
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
    
    <footer>
        <p>Copyright. Yanuar Gideon Simalango</p>
    </footer>
    
    
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>