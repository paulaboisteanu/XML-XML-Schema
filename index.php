<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Login</title>
    </head>
    <body>
        <form name="form" method="post" action="login.php">
            <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
                <tr>
                    <td align="center" colspan="2">Enter Login Details</td>
                </tr>
                <tr>
                    <td align="right">Username</td>
                    <td><imput type="text" name="username"></td>
                </tr>
                <tr>
                    <td align="right">Password</td>
                    <td><imput type="password" name="password"></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
            <?php
                include'connection.php';
                $sql='SELECT* FROM images;';
                $query= mysqli_query($con,$sql)or die(mysqli_error($con));
                ?>
            <table width="30%" cellpadding="4"cellspace="4" rules="rows">
                <<tr>
                    <th>Nume</th><!-- comment -->
                    <th>Imagine</th><!-- comment -->
                    <th colspan="3" align="centre">Action</th>
                </tr>  
                <?php
                while($row=mysqli_fetch_arry($query)){
                ?>
                <tr style="border-bottom:1px solid black;">
                    <td><?php echo $row['title'];?></td><!-- comment -->
                    <td><img src="<?php echo $row['image'];?>"</td><!-- comment -->
                    <td>
                        <?php echo"<a href=\view.php?id=".$row['id']."\">View</a>
                            <a href=\"edit.php?id=".$row['id']."\">Edit</a>
                                <a href=\"delete.php?id=".row['id']."\"onclick=\"return confirm('Are you sure?')\">Delete</a>"?>
                    </td>
                        
                </tr>
                <?php }?>
             </table>
        </form>
        <br><br><!-- comment -->
        <a href="upload.php">Upload another image</a>
    </body>
</html>
