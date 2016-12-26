<?php
	include 'includes/connect.php';
	header('Access-Control-Allow-Origin: *');
	$reply = array();
?>

<?php
/*---------------------------------------------------Alumni Validate ID Before He/She can Register*/
if(isset($_POST['Check_Alumni_ID']))
{
	$id_one = $_POST["id_one"];
	$id_two = $_POST["id_two"];
	$id_three = $_POST["id_three"];
	//QUERY GOES HERE
	$sql = "SELECT * FROM alumni WHERE (id_no_one = '".$id_one."' AND id_no_two = '".$id_two."' AND id_no_three = '".$id_three."') AND (username='' AND email='' AND fname='' AND mname='' AND lname='') ";

	if (mysqli_num_rows(mysqli_query($con,$sql))>0)
	{
		$reply[0] = array('message'=>'ok');

	} else 
	{
		$reply[0] = array('message'=>'not');
	}
	echo json_encode($reply);	
}

/*--------------------------------------------------------------CHECK ALUMNI USERNAME IF EXIST*/
if (isset($_POST['Alumni_Registration_Check'])) 
{

	$username =$_POST['username'];
	$email =$_POST['email'];

	$sql = "SELECT * FROM alumni WHERE username = '".$username."' OR email = '".$email."' ";

		if (mysqli_num_rows(mysqli_query($con,$sql))>0)
		{
			$reply[0] = array('message'=>'not');

		} else 
		{
			$reply[0] = array('message'=>'ok');
		}
		echo json_encode($reply);	
	}


/*---------------------------------------------------------INSERT USER IF ALUMNI ID AND USERNAME NOT EXITS*/
if(isset($_POST['Alumni_Insert_User'])){
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = md5($_POST['passwords']);
	$first_name = $_POST['first_name'];
	$m_name = $_POST['m_name'];
	$last_name = $_POST['last_name'];
	$suffix = $_POST['suffix'];
	$course = $_POST['course'];
	$college_id = $_POST['college'];
	$level = $_POST['level'];
	$yeardate = $_POST['yeardate'];
	$bdate = $_POST['bdate'];
	$gender = $_POST['gender'];
	$religion = $_POST['religion'];
	$address = $_POST['address'];
	$scholarship = $_POST['scholarship'];
	$contacts = $_POST['contacts'];
	$company = $_POST['company'];
	$companyaddress = $_POST['companyaddress'];
	$workposition = $_POST['workposition'];
	$datehired = $_POST['datehired'];
	$scholarship = $_POST['scholarship'];
	$id_one = $_POST['id_one'];
	$id_two = $_POST['id_two'];
	$id_three = $_POST['id_three'];
	$rank = 'Member';

	//QUERY GOES HERE
	$sql_alumni = "UPDATE alumni SET username ='$username', password ='$password', fname ='$first_name', mname ='$m_name', lname = '$last_name', suffix ='$suffix', course ='$course', bday ='$bdate', gender ='$gender', email ='$email', contact_number ='$contacts', address ='$address', scholar ='$scholarship', company ='$company', work_position ='$workposition', date_hired ='$datehired', rank= '$rank' WHERE id_no_one = '$id_one' AND id_no_two = '$id_two' AND id_no_three = '$id_three' ";
	
	if ($result_alumni = mysqli_query($con, $sql_alumni))
	{
	  $sql_alumni_all = mysqli_query($con, " SELECT * FROM alumni WHERE id_no_one = '$id_one' AND id_no_two = '$id_two' AND id_no_three = '$id_three' ");

	  while ($result_alumni = mysqli_fetch_assoc($sql_alumni_all) ) {
	  	$alumni_id = $result_alumni['alumni_id'];

	  	mysqli_query($con,"INSERT INTO alumni_directory(alumni_id, directory_id) VALUES('$alumni_id', '$college_id')");

	  		mysqli_query($con,"INSERT INTO alumni_batch(alumni_id, batch_id) VALUES('$alumni_id', '$yeardate')");

	  	$reply[0] = array('message'=>'ok');
	  }
	} 
	else 
	{
		$reply[0] = array('message'=>'not');
	}
	echo json_encode($reply);
}
?>