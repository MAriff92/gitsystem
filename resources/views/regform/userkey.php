<?php
if (!empty($_POST["ukey"])) { 
    if ((strval(base64_encode($_POST['uname'] . $_POST['utype'])) == $_POST["ukey"])){
         
        $result_array = [];
        $currtime = date('d-m-Y h:i:s a',time());
        $db = mysqli_connect('localhost', 'root', '', 'gitdb');
        $ukey = $_POST['ukey'];
        $sql = "SELECT * FROM dailyreg WHERE ukey = '$ukey' ORDER BY id DESC LIMIT 1";
        if (mysqli_query($db, $sql)) {
            $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    array_push($result_array, $row);
                }
                echo json_encode(array("statusCode"=>200, "Time"=>$currtime, "data"=>$result_array));
            }
            else {
                echo json_encode(array("statusCode"=>200, "Time"=>$currtime, "data"=>NULL));
            }
        } 
        else {
            echo json_encode(array("statusCode"=>201, "Time"=>$currtime));
        }
        mysqli_close($db);
    }
    else{
		header("Location: /regform");
        //header("Location: https://gems.transwater.com.my/regform");
    }
} 
else {  
    header("Location: /regform");
	//header("Location: https://gems.transwater.com.my/regform");
}
?>