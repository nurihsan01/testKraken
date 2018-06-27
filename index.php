<?php 
	//echo "ini achooo";
	
	// ini mengkoneksikan php ke database
	$con = mysql_connect('localhost','root','');
	if(!$con){
		die('tidak bisa konek'.mysql_error());
	}else{
		echo 'berhasil';
	}
	
	//untuk menutup koneksi
	mysql_close($con);
	
?>