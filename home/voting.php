<?php
include_once("../admin/config.php");
if(isset($_POST["the_vote"])){
	$data = $_POST["the_vote"];// The Voting Value
	$sql = "SELECT * FROM bodhi_poll ORDER BY id DESC limit 1";
	$result = mysqli_query($conn, $sql);
	$view = mysqli_fetch_assoc($result);
	$ip = $view["client_ip"];
	$id = $view["id"];
	$client_ip = strpos($ip, getUserIpAddr());
	if($client_ip > 0){
		echo "আপনি পূর্বে একবার ভোট দিয়েছেন। দ্বিতীয়বার আর ভোটগ্রহণ হয় না।";
	}else{
		$yes = $view["yes"]+1;
		$no = $view["no"]+1;
		$no_comment = $view["no_comment"]+1;
		$client_ip = $view["client_ip"]." ".getUserIpAddr();
		$total = $view["total"]+1;
		if($data == "yes"){
			$sql = "UPDATE bodhi_poll SET yes = '$yes', total = '$total', client_ip = '$client_ip' WHERE id = '$id'";
			if(mysqli_query($conn, $sql)){
				echo "ভোট গ্রহণ সম্পন্ন হয়েছে";
			}else{
				echo "দুঃখিত! ভোট গ্রহণ সম্পন্ন হয়নি";
			}
		}
		if($data == "no"){
			$sql = "UPDATE bodhi_poll SET no = '$no', total = '$total', client_ip = '$client_ip' WHERE id = '$id'";
			if(mysqli_query($conn, $sql)){
				echo "ভোট গ্রহণ সম্পন্ন হয়েছে";
			}else{
				echo "দুঃখিত! ভোট গ্রহণ সম্পন্ন হয়নি";
			}
		}
		if($data == "no_comment"){
			$sql = "UPDATE bodhi_poll SET no_comment = '$no_comment', total = '$total', client_ip = '$client_ip' WHERE id = '$id'";
			if(mysqli_query($conn, $sql)){
				echo "ভোট গ্রহণ সম্পন্ন হয়েছে";
			}else{
				echo "দুঃখিত! ভোট গ্রহণ সম্পন্ন হয়নি";
			}
		}
	}
}else{
	header("location: error.php");
}
// Get Client IP Functions
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}


?>