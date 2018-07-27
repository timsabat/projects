<?php
	session_start();
	if (isset($_POST['idE'])) { 
		$idE = $_POST['idE'];
		$_SESSION['id'] = $idE;
		header ('Location: edytuj.php');
	
	}else {
			
		if (isset($_POST['idS'])) { 
			
			$idS = $_POST['idS'];
			$_SESSION['id'] = $idS;
			echo $idS;
			header ('Location: szczegoly.php');
		
		} else {
			
			if (isset($_POST['idU'])) {
				$idU = $_POST['idU'];
				require_once 'connect.php';
				echo $idU;
				$query = $db->prepare("DELETE FROM klienci WHERE id='$idU'");
				$query->execute();
		
				header ('Location: tabela.php');
				 
		
			} else {
				if (isset ($_SESSION['id_edit'])) {
						$id = $_SESSION['id_edit'];
						unset ($_SESSION['id_edit']);

						if(isset($_POST['email'])) {
							
							$imie = $_POST['imie'];
							$nazwisko = $_POST['nazwisko'];
							$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL );
							$telefon = $_POST['telefon'];
							
								
							require_once 'connect.php';

							$query = $db->prepare("UPDATE klienci SET imie='$imie', nazwisko='$nazwisko', telefon='$telefon', email='$email' where id='$id'");
							$query->execute();
							}
							

						header('Location:tabela.php');
											
				} else {
					
					if(isset($_POST['email_save'])) {
	
						$imie = $_POST['imie'];
						$nazwisko = $_POST['nazwisko'];
						$email = filter_input(INPUT_POST, 'email_save', FILTER_VALIDATE_EMAIL );
						$telefon = $_POST['telefon'];
						
							
						require_once 'connect.php';

						$query = $db->prepare("INSERT INTO klienci VALUES (NULL, '$imie', '$nazwisko', '$telefon', '$email')");
						$query->execute();
						
						header('Location:tabela.php');
						} else {
					
							echo "You don't have permission to edit this file.";
						}
				}
			}	
		}
	}
?>

