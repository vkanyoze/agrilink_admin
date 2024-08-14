<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Agrilink - Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <center><img src="images/rounded.png" width="30%"class="img-responsive"/></center>
                                    </br> <h4 class="text-center mb-4">Admin Sign In</h4>
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input name="email" type="email" class="form-control" value="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input name="password" type="password" class="form-control" value="Password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit" class="btn btn-success btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    session_start(); // Start the session

    if (isset($_POST['submit'])) {
        // Retrieve form data
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Create payload object
        $payload = array(
            "email" => $email,
            "password" => $password
        );

    // Convert payload to JSON
    $payload_json = json_encode($payload);

    // Make POST request to the endpoint
    $endpoint = 'http://64.227.36.36:8186/agrilinkapi/admin/login';
    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-Type: application/json',
            'content' => $payload_json
        )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($endpoint, false, $context);
    echo "<script>console.error('Error: Unable to fetch data');</script>";

    // Log the result
    if ($result !== false) {
        $decoded_result = json_decode($result, true);
        if(isset($decoded_result['access'])) {
            $_SESSION['access_token'] = $decoded_result['access']; // Save access token in session variable
            header("Location: home.php"); // Redirect to home.php
            echo "<script>console.error('".$_SESSION['access_token']."');</script>";
            exit(); // Ensure that subsequent code is not executed after the redirect
        } else {
            echo "<script>console.error('Error: Access token not found in response');</script>";
        }
    } else {
        echo "<script>console.error('Error: Unable to fetch data');</script>";
    }
}
?>


</body>

</html>

