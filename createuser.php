<!-- <?php
session_start();
include 'dbcon.php';

if (isset($_POST['user_signup'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $blood_group = mysqli_real_escape_string($con, $_POST['blood_group']);
    $location = mysqli_real_escape_string($con, $_POST['location']);

    $query = "INSERT INTO donor (username, password, email, phone, blood_group, location) VALUES ('$username', '$password', '$email', '$phone', '$blood_group', '$location')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo '
                    <div class="alert alert-success alert-dismissible">
                        Account Created Successfully.
                    </div> ';
    } else {
        echo '
                    <div class="alert alert-danger alert-dismissible">
                        Error: ' . mysqli_error($con) . '
                    </div> ';
    }
}
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="userstyles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container h-100" >
        <div class="d-flex justify-content-center h-100">
            <div class="user_card" style="background-color: rgb(255,97,97,56%)">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="img/ico.png" class="brand_logo" alt="Logo">
                        <span><h4><b>Sign Up</b></h4></span>
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form action="#" method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control input_user" value="" placeholder="Username" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control input_pass" value="" placeholder="Password" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control input_user" value="" placeholder="Email" required>
                        </div>
                        
                        
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" name="user_signup" style="border-radius: 8px" class="btn login_btn">Sign Up</button>
                        </div>
                        <div class="d-flex justify-content-center links">
						<a href="userlogin.php" style="text-decoration:none; color: #8A0302;">Back to Login</a>
					</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>