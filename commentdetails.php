<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
  <?php
    
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="sajeer";
  $conn=new mysqli($servername,$username,$password,$dbname);
  
			

  if($conn->connect_error)
    {
	die("connection failed:".$conn->connect_error);
	}
	
								 $date=date('d-m-Y / D');
	$sql="insert into comment(name,email,comment,date)values('$_POST[name]','$_POST[email]','$_POST[comment]','$date')";
	 
	  if($conn->query($sql)===true)
	          {
			  $name=$_POST['name'];
	      echo "<script type='text/javascript'> alert('congratulations $name...  send your comment!!!!! ');
		window.location.href='index.php';
	    </script>";
	       
	          }
	else
	{ 

	echo "<script type='text/javascript'> alert('Message Not Send !!!!!');
		window.location.href='blog_post.php';
	    </script>";
	}
	$conn->close();
	 
	?>
</body>
</html>
