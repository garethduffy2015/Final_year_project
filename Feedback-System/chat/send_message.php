<?php
	include ('conn.php');
	session_start();
	if(isset($_POST['msg'])){		
		$msg = addslashes($_POST['msg']);
		$id = $_POST['id'];
		mysqli_query($conn,"insert into `chat` (chat_room_id, chat_msg,  chat_date) values ('$id', '$msg', NOW())") or die(mysqli_error());
	}
?>
	
		<div>
			<?php echo date('h:i A',strtotime($row['chat_date'])); ?><br>
			<?php echo $row['your_name']; ?>: <?php echo $row['chat_msg']; ?><br>
		</div>
		<br>
	<?php
		}
	}	
?>

