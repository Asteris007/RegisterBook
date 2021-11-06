<?php session_start(); ?>
<h1 align="center">Users</h1><p><a href="index.php"> Back </a> </p>
    <?php
    echo $_SESSION['update'];
    ?>
 <table border="1" align="center">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
                <td>Image</td>
            </tr>
            <?php
                include_once 'Register.php';
                $obj = new Register();

                   if(!empty($_GET['row_id'])){
                       $del = $obj->dataDelete($_GET['row_id']);
                       if($del){
                           echo"Data Deleted";
                       }else{
                           echo"Data Not Deleted";
                       }
                   }

               $re= $obj->dataShow($_POST);
               while ($row = mysqli_fetch_array($re)) {
            ?>


            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><img src="images/<?php echo $row['image']; ?>" width="100" height="100"></td>

                <td>
                    <a href="Users.php?row_id=<?php echo $row['id']; ?>"> Delete</a>
                    <a href="updateData.php?rowId=<?php echo $row['id'] ?>">Edit</a>
                </td>
            </tr>
               <?php
               }
               ?>
        </table>