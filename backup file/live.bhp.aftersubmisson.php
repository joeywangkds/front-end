<?php

function signupvalidate( $validation_result ) {
$form = $validation_result['form'];
if ( $status !== "Success") {
    //$validation_result['is_valid'] = false;
    foreach( $form['fields'] as &$field ) {
        if ( $field->id == '14' ) {
            $field->failed_validation = true;
            $field->validation_message = 'These fields are required.';
            break;
        }
		
      
    }
}
$validation_result['form'] = $form;
return $validation_result;

}
add_filter( 'gform_validation_3', 'signupvalidate' );
add_filter( 'gform_validation_5', 'signupvalidate' );

add_action( 'gform_after_submission_3', 'custom_action_after_apc', 10, 2 );
add_action( 'gform_after_submission_46', 'custom_action_after_apc', 10, 2 );
function custom_action_after_apc( $entry, $form ) {
 
  // echo "<pre>";print_r($entry);
   //echo "<pre>";print_r(unserialize($entry[9]));
   //die;
	 
   $siblings_data = unserialize($entry[9]);
	$servername = "localhost";
	$username = "ldbubhd";
	$password = "if@XT3GsapZkPfa8";
	$dbname = "bhdata_live";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}




	foreach($siblings_data as $siblingsdata){
	 
	  /* node id and vid*/
		//$sibling_id =  $siblingsdata[14][0].rand(0,99999);
		 $titlName =  $siblingsdata[14][0]." ".$siblingsdata[14][1];
		
		$sql_vid = "INSERT INTO node_revision(title, log) VALUES ('". $titlName."', '0')";
		//echo "<br/>";
		programManagerEmails($titlName);
		if ($conn->query($sql_vid) === TRUE) {
			$vid = $conn->insert_id;
			//last insertid = vid;
		} else {
		  echo "Error: " . $sql_vid . "<br>" . $conn->error;
		}

		
		  $sql_nid = "INSERT INTO node(vid,title,type,language,uid,status,promote,comment) VALUES (".$vid.",'".$titlName."', 'participant', 'und', '1', '1', '0', '1')";
		if ($conn->query($sql_nid) === TRUE) {
			$nid = $conn->insert_id;
		} else {
		  echo "Error: " . $sql_nid . "<br>" . $conn->error;
		}
		//echo "<br/>";
		
		//die;
	  /*echo $nid;
	  echo "<br/>";
	  echo $vid;
	  die;*/
		//echo "<pre>";print_r($siblingsdata);die;
	   $sql = "INSERT INTO mydata_participants (nid,vid,child_fname, child_lname, child_dob, child_gender, child_ht_mm, child_wt_kgs, addrln1, carer_fname, carer_lname, relation, email, mobile_phone, confirmation, cuser, cdttm, prog_id, member_code,program_formate)
		VALUES ('".$nid."','".$vid."','".$siblingsdata[14][0]."', '".$siblingsdata[14][1]."', '".date('Y-m-d H:i:s', strtotime($siblingsdata[20][0]))."', '".$siblingsdata[16][0]."', '". $siblingsdata[17][0]."', '".$siblingsdata[18][0]."', '".$entry['7.1'].$entry['7.2'].$entry['7.3'].$entry['7.4'].$entry['7.5'].$entry['7.6']."', '".$entry['2']."', '".$entry['23']."', '".$entry['3']."', '".$entry['4']."', '".$entry['22']."', 'No', '1', '".date("Y-m-d H:i:s")."', 'XYZ01_0113', '','".$entry['24']."')";
		
			
// 		$sql = "INSERT INTO mydata_participants (nid,vid,child_fname, child_lname, child_dob, addrln1, carer_fname, carer_lname, relation, email, mobile_phone, confirmation, cuser, cdttm, prog_id, member_code,program_formate)
// 		VALUES ('".$nid."','".$vid."','".$siblingsdata[14][0]."', '".$siblingsdata[14][1]."', '".date('Y-m-d H:i:s', strtotime($siblingsdata[20][0]))."', '".$entry['7.1'].$entry['7.2'].$entry['7.3'].$entry['7.4'].$entry['7.5'].$entry['7.6']."', '".$entry['2']."', '".$entry['23']."', '".$entry['3']."', '".$entry['4']."', '".$entry['22']."', 'No', '1', '".date("Y-m-d H:i:s")."', 'TES99_0042', '','".$entry['24']."')";
		
		/*$sql = "INSERT INTO mydata_participants (nid,vid,child_fname, child_lname, child_dob, addrln1, carer_fname, carer_lname, relation, email, mobile_phone, confirmation, cuser, cdttm, prog_id, member_code,program_formate)
		VALUES ('".$nid."','".$vid."','".$siblingsdata[14][0]."', '".$siblingsdata[14][1]."', '".date('Y-m-d H:i:s', strtotime($siblingsdata[20][0]))."', '".$entry['7.1'].$entry['7.2'].$entry['7.3'].$entry['7.4'].$entry['7.5'].$entry['7.6']."', '".$entry['2']."', '".$entry['23']."', '".$entry['3']."', '".$entry['4']."', '".$entry['22']."', 'No', '1', '".date("Y-m-d H:i:s")."', 'XYZ01_0113', '','".$entry['24']."')";*/
 
		if ($conn->query($sql) === TRUE) {
		  //echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		/*$sql_child = "INSERT INTO node_revision(title, log) VALUES ('". $siblingsdata[14][0]."', '0')";
		//echo "<br/>";
		if ($conn->query($sql_vid) === TRUE) {
			$vid = $conn->insert_id;
			//last insertid = vid;
		} else {
		  echo "Error: " . $sql_vid . "<br>" . $conn->error;
		}*/

			/*$servername1 = "54.66.175.182";
			$username1 = "bhcdevdbu";
			$password1 = "AdLdCZG2SDZNoXy8dvdb";
			$dbname1 = "dev_bhp";

			// Create connection
			$conn1 = new mysqli($servername1, $username1, $password1, $dbname1);
			// Check connection
			if ($conn1->connect_error) {
			  die("Connection failed: " . $conn1->connect_error);
			}
		
		 $sql_child = "INSERT INTO wpe4_child_details(node_id, v_id, parent_email,child_name,program_id) VALUES ('". $nid."','".$vid."', '".$entry['4']."','".$siblingsdata[14][0]." ".$siblingsdata[14][1]."','NULL')";
		//echo "<br/>";
		if ($conn1->query($sql_child) === TRUE) {
			
			//last insertid = vid;
		} else {
		  echo "Error: " . $sql_child . "<br>" . $conn1->error;
		}
		
		//$conn->close();
		//die;*/
		  
 }
	global $wpdb;
$signup_email = $wpdb->get_results("SELECT signup_id FROM $wpdb->signups WHERE user_email =".$entry['4']);
if(empty($signup_email)){
$table = $wpdb->prefix.'signups';
$data = array('domain'=>'','path'=>'','title'=>'','user_login' => $entry['4'], 'user_email' => $entry['4'],'registered'=>date("Y-m-d h:i:s"),'activated'=>date("Y-m-d h:i:s"),'active'=>'0','activation_key'=>'','meta'=>'');
//$format = array('%s','%d');
$wpdb->insert($table,$data);	
}
 //echo "<pre>";print_r($testdata);
}


