<?php
    include("header.php");
?>

<?php
    include("dbconfig.php");
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            PHP - CRUD
                            <a href="register.php" class="btn btn-primary float-right">Register / Add</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <?php
                        
                        $register = "SELECT * FROM `register`";
                        $register_run = mysqli_query($conn, $register);

                        if(mysqli_num_rows($register_run) > 0)
                        {
                            ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scpoe="col">Email</th>
                                    <th scope="col">Pasword</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">EDIT</th>
                                    <th scpoe="col">DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                      while($reg_row = mysqli_fetch_assoc($register_run))
                                      {
                                ?>
                                <tr>
                                    <th><?php echo $reg_row['Id']; ?></th>
                                    <td><?php echo $reg_row['fname']; ?></td>
                                    <td><?php echo $reg_row['lname']; ?></td>
                                    <td><?php echo $reg_row['email']; ?></td>
                                    <td><?php echo $reg_row['password']; ?></td>
                                    <td><?php echo $reg_row['phone']; ?></td>
                                    <td>
                                        <a href="register-edit.php?id=<?php echo $reg_row['Id']; ?>" class="btn btn-primary ">Edit</a>
                                    </td>
                                    <td>
                                        <a href="register-delete.php" class="btn btn-danger ">Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php
                        }
                        else
                        {
                            echo "No Record Found";
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include("footer.php");
?>