<?php
    require('koneksi.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingIt</title>
    <link rel="stylesheet" href="stylesheet/style.css?v2">
        
</head>
<body >
    <nav class="Navigator">
        <div class="Brand">
            <div id="Depan" onclick="ubahheader()">Sing</div>
            <div id="Belakang" onclick="ubahheader1()">It</div>
        </div>
        <ul >
            <li><a href="home.php">Home</a></li>
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
    <h1>Daftar Lagu</h1>
        <table class="artis">
            <tr>
                <th>Judul</th>
                <th>Gambar</th>
                <th></th>
            </tr>
            

            <?php 
                $read = mysqli_query($conn_log, "SELECT * FROM playlist WHERE Penyanyi = 'Mahalini'");
                if(mysqli_num_rows($read) > 0){
                    while($row = mysqli_fetch_array($read)){
            ?>
            <tr>
                <td><?php echo $row['Lagu'] ?></td>
                <td><img src="file/<?php echo $row['Gambar']?>" alt=""></td>
                <td>
                    <a href="play.php?id_playlist=<?=$row['id_playlist'];?>">
                        <img id ="icon" src="img/play.png" alt="play" >
                    </a>
                </td>
            </tr>
            <?php }} ?>
        </table>
        </div>
    
    <footer>
        <p>Copyright. Yanuar Gideon Simalango</p>
    </footer>
    
    
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>