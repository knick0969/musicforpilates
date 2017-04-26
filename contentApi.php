<?php

require 'start.php';

$returnData = '';
$returnError = '';

$function = $_POST['function'];
	//DISPLAY CONTACT DETAILS
	if ($function == 'contact') {
		$contact = array();
		$results = $db->prepare("
			SELECT *
			FROM contact
			");	
		$results->execute();
		$results->bind_result($id, $streetaddress, $email, $hours);
		$results->store_result();
		while ($results->fetch()) {
			$contact['id'] = $id;
			$contact['streetaddress'] = $streetaddress;
			$contact['email'] = $email;
			$contact['hours'] = $hours;
	    }
	    $returnData = $contact;

	    //EDIT CONTACT DETAILS
	} elseif ($function == 'editcontact') {
		$editcontact = array();
		if ((!empty($_POST['streetaddress'])) || (!empty($_POST['email'])) || (!empty($_POST['hours']))){
			$streetaddress	= $_POST['streetaddress'];
			$email			= $_POST['email'];
			$hours			= $_POST['hours'];
		}

		$results = $db->prepare("
			UPDATE contact
			SET streetaddress = ?, email = ?, hours = ?
			");

		if (!$results) {
				printf("Errormessage: %s\n", $db->error);
			} else {
				echo "Updated details";
				$results->bind_param('sss', $streetaddress, $email, $hours);
				$results->execute();
			}

	    $returnData = $editcontact;
	    //VIEW ABOUT US CONTENT 
	} elseif ($function == 'aboutus') {
		$aboutus = array();
		$aboutUsId = 1;
		//the PAGE table has - id, content, description
		$results = $db->prepare("
			SELECT *
			FROM page
			WHERE id = ?
			");	
		$results->bind_param('i', $aboutUsId);
		$results->execute();
		$results->bind_result($id, $content, $description);
		$results->store_result();
		while ($results->fetch()) {
			$aboutus['id']			= $id;
			$aboutus['content'] 	= $content;
			$aboutus['description'] = $description;
			//the PAGEIMAGE table has - id, pageid, type, fileid
			$imageResult = $db->prepare("
				SELECT *
				FROM pageimage
				WHERE pageid = ?
				");
			$imageResult->bind_param('i', $id);
			$imageResult->execute();
			$imageResult->bind_result($pid, $pageid, $type, $fileid);
			$imageResult->store_result();
			while($imageResult->fetch()){
				//the FILE table has - id, link, uploaddate, type
				$imageFile = $db->prepare("
					SELECT *
					FROM file
					WHERE id = ?
					");
				$imageFile->bind_param('i', $fileid);
				$imageFile->execute();
				$imageFile->bind_result($fid, $link, $uploaddate, $type);
				$imageFile->store_result();
				while($imageFile->fetch()){
					$aboutus['image'] = $link;
					$aboutus['uploaddate'] = $uploaddate;	
				}
			}
	    }
	    $returnData = $aboutus;
		
		//EDIT ABOUT US DETAILS
	} elseif ($function == 'editaboutus') {
		$editaboutus = array();
		if ((!empty($_POST['content'])) || (!empty['description'] || (!empty($_POST['link']))){
			$content = $_POST['content'];
			$link	 = $_POST['link'];


		}

		
		//NO FUNCTION SELECTED
	} else {
		$returnData = "No function selected";
	}

	$result['data'] = 'All ok';	
	$result['return'] = $returnData;
	echo json_encode($result);
?>