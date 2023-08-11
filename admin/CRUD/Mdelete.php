<?php
	include '../../CRUD/conn.php';
	$id = $_GET['id'];

	$stmt= $pdo->prepare("DELETE FROM contactus WHERE id = ?");
	$stmt->bindValue(1,$id);
	$stmt->execute();
	header('location:../feedbacks.php');
?>