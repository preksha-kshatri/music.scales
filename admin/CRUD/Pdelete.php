<?php
	include '../../CRUD/conn.php';
	$id = $_GET['id'];

	$stmt= $pdo->prepare("DELETE FROM pianolessons WHERE id = ?");
	$stmt->bindValue(1,$id);
	$stmt->execute();
	header('location:../lessons.php');
?>