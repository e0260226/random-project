$exists = false;
$num = mysqli_num_rows($result);

        if($num == 0) {
                if( ($pwd == $pwd_again) &&  $exists ==false) {

                $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pwd')";
                $result = mysqli_query($link, $sql);

                if($result) {
                        echo "OK";
                } else {
                        echo "Not OK";
                }
                } //end if
        }
