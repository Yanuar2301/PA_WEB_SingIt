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
    <link rel="stylesheet" href="stylesheet/style_playlist.css?v5">
        
</head>
<body >
    <nav class="Navigator">
        <div class="Brand">
            <div id="Depan" onclick="ubahheader()">Sing</div>
            <div id="Belakang" onclick="ubahheader1()">It</div>
        </div>
        <ul >
        <li><a href="admin.php">Home</a></li>
            <li><a href="admin_tambah.php">Add Playlist</a></li>
            <li><a href="admin_lihat.php">Edit Playlist</a></li>
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
        <table >
            <tr>
                <th>Nama</th>
                <th>Username</th>
            </tr>
            
            <?php 
                $read = mysqli_query($conn_log, "SELECT * FROM login ");
                if(mysqli_num_rows($read) > 0){
                    while($row = mysqli_fetch_array($read)){
            ?>
            <tr>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['username'] ?></td>

            </tr>
            <?php }} ?>
        </table>
    </div>
    
    <p>Copyright. Yanuar Gideon Simalango</p>
    
    
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>