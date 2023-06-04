<div class="row">

    <!-- form start -->
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Registration Form</h4>
            <p class="card-description"> Basic form layout </p>
                <form class="forms-sample">
                    <div class="form-group">
                    <label for="exampleInputUsername1">Username</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <!-- form end -->

    <!-- table start -->
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">List of Users</h4>
            </p>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th> User </th>
                    <th> First name </th>
                    <th> Last name </th>
                    <th> Username </th>
                    <th> Email </th>
                </tr>
                </thead>
                <tbody>

                <?php
                    $query_users = $conn->query("SELECT * FROM users ORDER BY id DESC") or die("Failed to query users ".$conn->error.__LINE__);

                    while ($row = $query_users->fetch_assoc()):
                ?>

                <tr>
                    <td class="py-1">
                    <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                    </td>
                    <td> <?php echo $row['first_name']; ?> </td>
                    <td> <?php echo $row['last_name']; ?> </td>
                    <td> <?php echo $row['user_name']; ?> </td>
                    <td> <?php echo $row['email']; ?> </td>
                </tr>

                <?php endwhile; ?>

                </tbody>
            </table>
            </div>
        </div>
        </div>
     <!-- table end -->
</div>

