<?php
if (!empty($_POST["uname"])) {  
    
    $currtime = date('d-m-Y h:i:s a',time());
    $db = mysqli_connect('localhost', 'root', '', 'gitdb');
    $uname = $_POST['uname'];
    $utemp = $_POST['utemp'];
    $ucheck = $_POST['ucheck'];
	$ucomp = $_POST['ucomp'];
    $utype = $_POST['utype'];
    $ufever = $_POST['ufever'];
    $ucough = $_POST['ucough'];
    $ukey = $_POST['ukey'];
    $utime = $currtime;
    $sql = "INSERT INTO dailyreg(uname, utemp, ucheck, utype, utime, ufever, ucough, ukey, ucomp) VALUES('$uname','$utemp', '$ucheck', '$utype', '$utime', '$ufever', '$ucough', '$ukey', '$ucomp')";
    if (mysqli_query($db, $sql)) {
		echo json_encode(array("statusCode"=>200, "Time"=>$currtime));
	} 
	else {
		echo json_encode(array("statusCode"=>201, "Time"=>$currtime));
	}
    mysqli_close($db);
} 
else {  
	/* IF LOCALHOST*/
	//header("Location:/regform");
	
	/* IF GEMS*/
    header("Location: https://gems.transwater.com.my/regform");
}
?>