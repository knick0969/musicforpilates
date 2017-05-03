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

	    //VIEW TRACKS PAGE CONTENT 

	} elseif ($function == 'musicdescription') {
		$musicPageDescription = array();
		$musicPageDescriptionId = 3;
		//the PAGE table has - id, content, description
		$results = $db->prepare("
			SELECT id, content, description, keywords, title
			FROM page
			WHERE id = ?
			");	
		$results->bind_param('i', $musicPageDescriptionId);
		$results->execute();
		$results->bind_result($id, $content, $description, $keywords, $title);
		$results->store_result();
		while ($results->fetch()) {
			$musicPageDescription['id']	= $id;
			$musicPageDescription['title']	= $title;
			$musicPageDescription['description']	= $description;
			$musicPageDescription['keywords']	= $keywords;
			$musicPageDescription['content'] 	= $content;

			//the PAGEIMAGE table has - id, pageid, type, fileid
			// $imageResult = $db->prepare("
			// 	SELECT fileid
			// 	FROM pageimage
			// 	WHERE pageid = ?
			// 	");
			// $imageResult->bind_param('i', $id);
			// $imageResult->execute();
			// $imageResult->bind_result($fileid);
			// $imageResult->store_result();
			// while($imageResult->fetch()){
			// 	//the FILE table has - id, link, uploaddate, type
			// 	$imageFile = $db->prepare("
			// 		SELECT link, uploaddate
			// 		FROM file
			// 		WHERE id = ?
			// 		");
			// 	$imageFile->bind_param('i', $fileid);
			// 	$imageFile->execute();
			// 	$imageFile->bind_result($link, $uploaddate);
			// 	$imageFile->store_result();
			// 	while($imageFile->fetch()){
			// 		$musicPageDescription['image'] = $link;
			// 		$musicPageDescription['uploaddate'] = $uploaddate;	
			// 	}
			// }
	    }
	    $returnData = $musicPageDescription;
		
		//EDIT TRACKS PAGE DETAILS
	} elseif ($function == 'editmusicpage') {
		$editaboutus = array();
		$aboutusid = 3;
		if ((!empty($_POST['title'])) || (!empty($_POST['keywords'])) || (!empty($_POST['description'])) || (!empty($_POST['content']))){
			$title			= $_POST['title'];
			$keywords		= $_POST['keywords'];
			$description 	= $_POST['description'];
			$content 		= $_POST['content'];
			$editaboutus['title']		= $title;
			$editaboutus['keywords']	= $keywords;
			$editaboutus['description']	= $description;
			$editaboutus['content'] 	= $content;
			//Updating the content into the page file
			$insertContent=$db->prepare("
				UPDATE page
				SET title = ?, keywords = ?, description = ?, content = ?
				WHERE id = $aboutusid
				");
			if (!$insertContent) {
				printf("Error updating page table");
				printf("Errormessage: %s\n", $db->error);
			} else {
				//echo "Content updated <br>";
				$insertContent->bind_param('ssss', $title, $keywords, $description, $content);
				$insertContent->execute();
			}
		}
		$returnData = $editaboutus;

		//VIEW BLOGS PAGE CONTENT 
	} elseif ($function == 'blogspage') {
		$blogspage = array();
		$blogspageid = 4;
		//the PAGE table has - id, content, description
		$results = $db->prepare("
			SELECT id, title, keywords, content, description
			FROM page
			WHERE id = ?
			");	
		$results->bind_param('i', $blogspageid);
		$results->execute();
		$results->bind_result($id, $title, $keywords, $content, $description);
		$results->store_result();
		while ($results->fetch()) {
			$blogspage['id']			= $id;
			$blogspage['title']			= $title;
			$blogspage['keywords']			= $keywords;
			$blogspage['content'] 	= $content;
			$blogspage['description'] 	= $description;
	    }
	    $returnData = $blogspage;
		
		//EDIT BLOGS PAGE DETAILS
	} elseif ($function == 'editblogspage') {
		$editblogspage = array();
		$blogspageid = 4;
		if ((!empty($_POST['title'])) || (!empty($_POST['keywords'])) || (!empty($_POST['description']))){
			$title			= $_POST['title'];
			$keywords		= $_POST['keywords'];
			$description 	= $_POST['description'];
			$editblogspage['title']			= $title;
			$editblogspage['keywords']		= $keywords;
			$editblogspage['description']	= $description;
			//Updating the content into the page file
			$insertContent=$db->prepare("
				UPDATE page
				SET title = ?, keywords = ?, description = ?
				WHERE id = $blogspageid
				");
			if (!$insertContent) {
				printf("Error updating page table");
				printf("Errormessage: %s\n", $db->error);
			} else {
				echo "Content updated <br>";
				$insertContent->bind_param('sss', $title, $keywords, $description);
				$insertContent->execute();
			}
		}
		$returnData = $editblogspage;

		//VIEW ABOUT US DETAILS

	} elseif ($function == 'aboutus') {
		$aboutus = array();
		$aboutUsId = 1;
		//the PAGE table has - id, content, description
		$results = $db->prepare("
			SELECT id, title, keywords, description, content
			FROM page
			WHERE id = ?
			");	
		$results->bind_param('i', $aboutUsId);
		$results->execute();
		$results->bind_result($id, $title, $keywords, $description, $content);
		$results->store_result();
		while ($results->fetch()) {
			$aboutus['id']			= $id;
			$aboutus['title']		= $title;
			$aboutus['keywords']	= $keywords;
			$aboutus['description']	= $description;
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
		if ((!empty($_POST['title'])) || (!empty($_POST['keywords'])) || (!empty($_POST['description'])) || (!empty($_POST['content'])) || (!empty($_POST['link']))){
			$title			= $_POST['title'];
			$keywords		= $_POST['keywords'];
			$description 	= $_POST['description'];
			$content 		= $_POST['content'];
			$link	 		= $_POST['link'];
				$editaboutus['title']		= $title;
				$editaboutus['keywords']	= $keywords;
				$editaboutus['description']	= $description;
				$editaboutus['content'] 	= $content;
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
						SET title = ?, keywords = ?, description = ?, content = ?
						WHERE id = $aboutusid
						");
					if (!$insertContent) {
						printf("Error updating page table");
						printf("Errormessage: %s\n", $db->error);
					} else {
						echo "Content updated <br>";
						$insertContent->bind_param('ssss', $title, $keywords, $description, $content);
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
			SELECT id, title, keywords, content, description
			FROM page
			WHERE id = ?
			");	
		$results->bind_param('i', $homepageid);
		$results->execute();
		$results->bind_result($id, $title, $keywords, $content, $description);
		$results->store_result();
		while ($results->fetch()) {
			$homepage['id']			 = $id;
			$homepage['title']		 = $title;
			$homepage['keywords']	 = $keywords;
			$homepage['content'] 	 = $content;
			$homepage['description'] = $description;
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
		$edithomepage = array();
		$homepageid = 2;
		if ((!empty($_POST['title'])) || (!empty($_POST['keywords'])) || (!empty($_POST['description'])) || (!empty($_POST['content'])) || (!empty($_POST['link']))){
			$title			= $_POST['title'];
			$keywords 		= $_POST['keywords'];
			$description 	= $_POST['description'];
			$content 		= $_POST['content'];
			$link	 		= $_POST['link'];
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
					SET title = ?, keywords = ?, content = ?, description = ?
					WHERE id = $homepageid
					");
				if (!$insertContent) {
					printf("Error updating page table");
					printf("Errormessage: %s\n", $db->error);
				} else {
					echo "Content updated <br>";
					$insertContent->bind_param('ssss', $title, $keywords, $content, $description);
					$insertContent->execute();
				}
			}
			$returnData = $edithomepage;
		}
		//VIEW AUTHORS DETAILS
	 } elseif ($function == 'authors'){
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
	 	echo "Running function?";
		$editauthors = array();
		$perryid = 1;
		$lisaid = 2;
		$perryimgid = 111;
		$lisaimgid = 112;
		if ((!empty($_POST['perryname'])) || (!empty($_POST['perryimg'])) || (!empty($_POST['perryblurb'])) || (!empty($_POST['lisaname'])) || (!empty($_POST['lisaimg'])) || (!empty($_POST['lisablurb']))){
			$perryname 	= $_POST['perryname'];
			$perryimg	= $_POST['perryimg'];
			$perryblurb	= $_POST['perryblurb'];
			$lisaname 	= $_POST['lisaname'];
			$lisaimg	= $_POST['lisaimg'];
			$lisablurb 	= $_POST['lisablurb'];
			echo "Received data";
			$insertFile = $db->prepare("
				UPDATE file
				SET link = ?
				WHERE id = $perryimgid
				");
			if (!$insertFile) {
					printf("Error updating file table");
					printf("Errormessage: %s\n", $db->error);
				} else {
					echo "Link updated <br>";
					$insertFile->bind_param('s', $perryimg);
					$insertFile->execute();
				}
			$insertauthor = $db->prepare("
				UPDATE team
				SET name = ?, profile = ?
				WHERE id = $perryid
				");
			if (!$insertauthor) {
					printf("Error updating file table");
					printf("Errormessage: %s\n", $db->error);
				} else {
					echo "Link updated <br>";
					$insertauthor->bind_param('ss', $perryname, $perryblurb);
					$insertauthor->execute();
				}
			$insertFile = $db->prepare("
				UPDATE file
				SET link = ?
				WHERE id = $lisaimgid
				");
			if (!$insertFile) {
					printf("Error updating file table");
					printf("Errormessage: %s\n", $db->error);
				} else {
					echo "Link updated <br>";
					$insertFile->bind_param('s', $lisaimg);
					$insertFile->execute();
				}
			$insertauthor = $db->prepare("
				UPDATE team
				SET name = ?, profile = ?
				WHERE id = $lisaid
				");
			if (!$insertauthor) {
					printf("Error updating file table");
					printf("Errormessage: %s\n", $db->error);
				} else {
					echo "Link updated <br>";
					$insertauthor->bind_param('ss', $lisaname, $lisablurb);
					$insertauthor->execute();
				}

				
			$returnData = $editauthors;
		}
		echo "Finished";

		//NO FUNCTION SELECTED
	 } else {
		$returnData = "No function selected";
	}

	$result['data'] = 'All ok';	
	$result['return'] = $returnData;
	echo json_encode($result);
?>