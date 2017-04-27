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
			SELECT id, content
			FROM page
			WHERE id = ?
			");	
		$results->bind_param('i', $aboutUsId);
		$results->execute();
		$results->bind_result($id, $content);
		$results->store_result();
		while ($results->fetch()) {
			$aboutus['id']			= $id;
			$aboutus['content'] 	= $content;
			//the PAGEIMAGE table has - id, pageid, type, fileid
			$imageResult = $db->prepare("
				SELECT fileid
				FROM pageimage
				WHERE pageid = ?
				");
			$imageResult->bind_param('i', $id);
			$imageResult->execute();
			$imageResult->bind_result($fileid);
			$imageResult->store_result();
			while($imageResult->fetch()){
				//the FILE table has - id, link, uploaddate, type
				$imageFile = $db->prepare("
					SELECT link, uploaddate
					FROM file
					WHERE id = ?
					");
				$imageFile->bind_param('i', $fileid);
				$imageFile->execute();
				$imageFile->bind_result($link, $uploaddate);
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
		$aboutusid = 1;
		if ((!empty($_POST['content'])) || (!empty($_POST['link']))){
			$content = $_POST['content'];
			$link	 = $_POST['link'];
				$editaboutus['content'] = $content;
				$imageResult=$db->prepare("
					SELECT fileid
					FROM pageimage
					WHERE pageid = $aboutusid
					");
				$imageResult->execute();
				$imageResult->bind_result($fileid);
				$imageResult->store_result();
				while($imageResult->fetch()){
				//Updating the link in the file table
					$insertFile=$db->prepare("
						UPDATE file
						SET link = ?
						WHERE id = $fileid
						");
					if (!$insertFile) {
						printf("Error updating file table");
						printf("Errormessage: %s\n", $db->error);
					} else {
						echo "Link updated <br>";
						$insertFile->bind_param('s', $link);
						$insertFile->execute();
					}
					//Updating the content into the page file
					$insertContent=$db->prepare("
						UPDATE page
						SET content = ?
						WHERE id = $aboutusid
						");
					if (!$insertContent) {
						printf("Error updating page table");
						printf("Errormessage: %s\n", $db->error);
					} else {
						echo "Content updated <br>";
						$insertContent->bind_param('s', $content);
						$insertContent->execute();
					}
				}
			$returnData = $editaboutus;
		}

		
		//VIEW HOMEPAGE DETAILS
	} elseif ($function == 'homepage') {
		$homepage = array();
		$homepageid = 2;
		$results = $db->prepare("
			SELECT id, content
			FROM page
			WHERE id = ?
			");	
		$results->bind_param('i', $homepageid);
		$results->execute();
		$results->bind_result($id, $content);
		$results->store_result();
		while ($results->fetch()) {
			$homepage['id']			= $id;
			$homepage['content'] 	= $content;
			$imageResult = $db->prepare("
				SELECT fileid
				FROM pageimage
				WHERE pageid = ?
				");
			$imageResult->bind_param('i', $id);
			$imageResult->execute();
			$imageResult->bind_result($fileid);
			$imageResult->store_result();
			while($imageResult->fetch()){
				$imageFile = $db->prepare("
					SELECT link, uploaddate
					FROM file
					WHERE id = ?
					");
				$imageFile->bind_param('i', $fileid);
				$imageFile->execute();
				$imageFile->bind_result($link, $uploaddate);
				$imageFile->store_result();
				while($imageFile->fetch()){
					$homepage['image'] = $link;
					$homepage['uploaddate'] = $uploaddate;	
				}
			}
	    }
	    $returnData = $homepage;
		
		//EDIT HOME PAGE DETAILS
	} elseif ($function == 'edithomepage') {
		$editaboutus = array();
		$homepageid = 2;
		if ((!empty($_POST['content'])) || (!empty($_POST['link']))){
			$content = $_POST['content'];
			$link	 = $_POST['link'];
				$editaboutus['content'] = $content;
				$imageResult=$db->prepare("
					SELECT fileid
					FROM pageimage
					WHERE pageid = $homepageid
					");
				$imageResult->execute();
				$imageResult->bind_result($fileid);
				$imageResult->store_result();
				while($imageResult->fetch()){
				//Updating the link in the file table
					$insertFile=$db->prepare("
						UPDATE file
						SET link = ?
						WHERE id = $fileid
						");
					if (!$insertFile) {
						printf("Error updating file table");
						printf("Errormessage: %s\n", $db->error);
					} else {
						echo "Link updated <br>";
						$insertFile->bind_param('s', $link);
						$insertFile->execute();
					}
					//Updating the content into the page file
					$insertContent=$db->prepare("
						UPDATE page
						SET content = ?
						WHERE id = $homepageid
						");
					if (!$insertContent) {
						printf("Error updating page table");
						printf("Errormessage: %s\n", $db->error);
					} else {
						echo "Content updated <br>";
						$insertContent->bind_param('s', $content);
						$insertContent->execute();
					}
				}
			$returnData = $editaboutus;
		}
		//VIEW AUTHORS DETAILS
	 } elseif ($function = 'authors'){
	 	$authors = array();
	 	$member = 1;
	 	$results = $db->prepare("
	 		SELECT *
	 		FROM team 
	 		WHERE id = ?
	 		");
	 	$results->bind_param('i', $member);
	 	$results->execute();
	 	$results->bind_result($id1, $perryname, $perryblurb, $perryimgid);
	 	$results->store_result();
	 	while($results->fetch()){
	 		$authors['perryname'] = $perryname;
	 		$authors['perryblurb'] = $perryblurb;
	 		$secondresult = $db->prepare("
	 			SELECT link
	 			FROM file 
	 			WHERE id = $perryimgid
	 			");
	 		$secondresult->execute();
	 		$secondresult->bind_result($perryimg);
	 		$secondresult->store_result();
	 		while ($secondresult->fetch()){
	 			$authors['perryimg'] = $perryimg;
	 		}
	 	}
	 	$results = $db->prepare("
	 		SELECT *
	 		FROM team 
	 		WHERE id = ?
	 		");
	 	$results->bind_param('i', $member);
	 	$results->execute();
	 	$results->bind_result($id1, $lisaname, $lisablurb, $lisaimgid);
	 	$results->store_result();
	 	while($results->fetch()){
	 		$authors['lisaname'] = $lisaname;
	 		$authors['lisablurb'] = $lisablurb;
	 		$secondresult = $db->prepare("
	 			SELECT link
	 			FROM file 
	 			WHERE id = $lisaimgid
	 			");
	 		$secondresult->execute();
	 		$secondresult->bind_result($lisaimg);
	 		$secondresult->store_result();
	 		while ($secondresult->fetch()){
	 			$authors['lisaimg'] = $lisaimg;
	 		}
	 	}
	 	$returnData = $authors;



		//EDIT AUTHORS DETAILS
	 } elseif ($function == 'editauthors') {
		$authors = array();
		if ((!empty($_POST['perryname'])) || (!empty($_POST['perryimg'])) || (!empty($_POST['perryblurb'])) || (!empty($_POST['lisaname'])) || (!empty($_POST['lisaimg'])) || (!empty($_POST['lisablurb']))){
			$content = $_POST['content'];
			$link	 = $_POST['link'];
				$editaboutus['content'] = $content;
				$imageResult=$db->prepare("
					SELECT fileid
					FROM pageimage
					WHERE pageid = $homepageid
					");
				$imageResult->execute();
				$imageResult->bind_result($fileid);
				$imageResult->store_result();
				while($imageResult->fetch()){
				//Updating the link in the file table
					$insertFile=$db->prepare("
						UPDATE file
						SET link = ?
						WHERE id = $fileid
						");
					if (!$insertFile) {
						printf("Error updating file table");
						printf("Errormessage: %s\n", $db->error);
					} else {
						echo "Link updated <br>";
						$insertFile->bind_param('s', $link);
						$insertFile->execute();
					}
					//Updating the content into the page file
					$insertContent=$db->prepare("
						UPDATE page
						SET content = ?
						WHERE id = $homepageid
						");
					if (!$insertContent) {
						printf("Error updating page table");
						printf("Errormessage: %s\n", $db->error);
					} else {
						echo "Content updated <br>";
						$insertContent->bind_param('s', $content);
						$insertContent->execute();
					}
				}
			$returnData = $editaboutus;
		}

		//NO FUNCTION SELECTED
	 }else {
		$returnData = "No function selected";
	}

	$result['data'] = 'All ok';	
	$result['return'] = $returnData;
	echo json_encode($result);
?>