<?php
	include("../config.php");
	session_start();
	if(isset($_SESSION['login_id'])){
		if(isset($_POST['txtProfileName'])){
			$name = $_POST['txtProfileName'];
			$email = $_POST['txtProfileEmail'];
			$password = $_POST['txtProfilePassword'];
			$sql = '';
			if($_SESSION['login_type'] == '6'){
				$sql = "UPDATE `tbl_add_admin` set name = '$name', email = '$email', password = '$password' where aid = '$_POST[user_id]'";
			}
			else if($_SESSION['login_type'] == '2'){
				$sql = "UPDATE `tbl_add_uadmin` set name = '$name', email = '$email', password = '$password' where aid = '$_POST[user_id]'";
			}
			else if($_SESSION['login_type'] == '3'){
				$sql = "UPDATE `tbl_add_employee` set e_name = '$name', e_email = '$email', e_password = '$password' where eid = '$_POST[user_id]'";
			}
			else if($_SESSION['login_type'] == '4'){
				$sql = "UPDATE `tbl_add_rent` set r_name = '$name', r_email = '$email', r_password = '$password' where rid = '$_POST[user_id]'";
			}
			else if($_SESSION['login_type'] == '5'){
				$sql = "UPDATE `tblsuper_admin` set name = '$name', email = '$email', password = '$password' where user_id = '$_POST[user_id]'";
			}
			else if($_SESSION['login_id'] == '1'){
				$sql = "UPDATE `login` set username = '$username', password = '$password', name = '$name' where login_id = '$_POST[login_id]'";
			}
			mysql_query($sql,$link);
			echo "1";
			die();
		}
		else{
			echo '-99';
		}
	}
	else{
		echo '-99';
		die();
	}
?>
