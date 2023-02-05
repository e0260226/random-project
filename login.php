    // Please insert your code here.

    require_once "config.php";


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(trim($_POST["username"]))){
            $user_err = "Please enter user name.";
        } else{

            $user = trim($_POST["username"]);

        }

        if(empty(trim($_POST["password"]))){
            $pwd_err = "Please enter password.";     
        } else{
            $pwd = trim($_POST["password"]);
        }


        if (!empty($user_err)) {
            echo "<br>";
            echo $user_err;
        }

        if (!empty($pwd_err)) {
            echo "<br>";
            echo $pwd_err;
        }


        if(empty($user_error) && empty($pwd_err)) {
                $sql = "SELECT id, username, password FROM users WHERE username='$user' AND password ='$pwd'";
                $result = mysqli_query($link, $sql);

                if(mysqli_num_rows($result) == 1) {
                        header('Location: welcome.php');
                } else {
                        echo "Not OK";
                }

        }

        mysqli_close($link);
}

