<?php

require 'start.php';

$returnData = '';
$returnError = '';

$function = $_POST['function'];
	//DISPLAY LIST OF BLOGS
	$today = date('Y-m-d');
	if ($function == 'bloglist') {
		$blogs = array();
		$results = $db->prepare("
			SELECT *
			FROM blog
			WHERE enabled = 1 AND NOW() > deliver
			");	
		$results->execute();
		$results->bind_result($id, $title, $description, $content, $author, $deliver, $coverlink, $uploaddate, $enabled);
		$results->store_result();
		while ($results->fetch()) {
			$newBlog['id'] = $id;
			$newBlog['title'] = $title;
			$newBlog['description'] = $description;
			$newBlog['content'] = $content;
			$newBlog['author'] = $author;
			$newBlog['deliver'] = $deliver;
			$newBlog['coverlink'] = $coverlink;
			$newBlog['uploaddate'] = $uploaddate;
			$newBlog['enabled'] = $enabled;
			//Retrieving the image file from the FILE table
			$secondResult = $db->prepare("
				SELECT id, link, uploaddate
				FROM file
				WHERE id = ?
				");
			$secondResult->bind_param('i', $coverlink);
			$secondResult->execute();
			$secondResult->bind_result($id, $link, $uploaddate);
			while ($secondResult->fetch()) {
				if ($id === $coverlink){
					$newBlog['coverlinkfile'] = $link;
					$newBlog['tracklinkupload'] = $uploaddate;
				} 
			}
			$blogs[] = $newBlog;
	    }
	    $returnData = $blogs;
	    //DISPLAY SINGLE BLOG DATA
	} elseif ($function == 'blog') {
		$blog = array();
		$results = $db->prepare("
			SELECT *
			FROM blog 
			WHERE id = ?
			");	
		$results->bind_param('i', $_POST['id']);
		$results->execute();
		$results->bind_result($id, $title, $description, $content, $author, $deliver, $coverlink, $uploaddate, $enabled);
		$results->store_result();
		while ($results->fetch()) {
			$newBlog['id'] 			= $id;
			$newBlog['title'] 		= $title;
			$newBlog['description'] = $description;
			$newBlog['content'] 	= $content;
			$newBlog['author'] 		= $author;
			$newBlog['deliver'] 	= $deliver;
			$newBlog['coverlink'] 	= $coverlink;
			$newBlog['uploaddate'] 	= $uploaddate;
			$newBlog['enabled'] 	= $enabled;
			//Retrieving the image file from the FILE table
			$secondResult = $db->prepare("
				SELECT id, link, uploaddate
				FROM file
				WHERE id = ?
				");
			$secondResult->bind_param('i', $coverlink);
			$secondResult->execute();
			$secondResult->bind_result($id, $link, $uploaddate);
			while ($secondResult->fetch()) {
				if ($id === $coverlink){
					$newBlog['coverlinkfile'] = $link;
					$newBlog['tracklinkupload'] = $uploaddate;
				} 
			}
			$blog[] = $newBlog;
	    }
	    $returnData = $blog;
	    //ADD BLOG 
	} elseif ($function == 'addblog') {
		$addblog = array();
		$today = date('Y-m-d');
		//check to see if post data has been entered in
		if ((!empty($_POST['title'])) || (!empty($_POST['description'])) || (!empty($_POST['content'])) || (!empty($_POST['author'])) || (!empty($_POST['deliver'])) || (!empty($_POST['coverlink'])) ||  (!empty($_POST['enabled']))){
			$title 			= $_POST['title'];
			$description 	= $_POST['description'];
			$content 		= $_POST['content'];
			$author 		= $_POST['author'];
			$deliver		= date('Y-m-d',strtotime($_POST['deliver']));
			$coverlink		= $_POST['coverlink'];
			$uploaddate		= $deliver;
			$enabled		= $_POST['enabled'];
			echo "Bewbehs received <br>";

			//insert cover link into file table
				$insertFile = $db->prepare("
					INSERT INTO file
					(link, uploaddate, type)
					VALUES (?, ?, ?)
					");

				if (!$insertFile) {
					printf("Errormessage: %s\n", $db->error);
				} else {
					echo "Inserting into file table <br>";
					$type = 'blog image';
					$insertFile->bind_param('sss', $coverlink, $uploaddate, $type);
					$insertFile->execute();
				}

				//save cover link id to separate variable
				$coverlinkid = $db->insert_id;

				echo "coverlink ID is " . $coverlinkid . "<br>";

			$insertblog = $db->prepare("
				INSERT INTO blog 
				(title, description, content, author, deliver, coverlink, uploaddate, enabled)
				VALUES (?, ?, ?, ?, ?, ?, ?, ?)
				");

			if (!$insertblog) {
				printf("Errormessage: %s\n", $db->error);
			} else {
				echo "Inserting into the blog table <br>";
				$insertblog->bind_param('sssssiss', $title, $description, $content, $author, $deliver, $coverlinkid, $uploaddate, $enabled);
				$insertblog->execute();
			}

		} else {
			echo "Post is empty, my dewd";
		}		    
		$returnData = $addblog;
		
		//EDIT BLOG
	} elseif ($function == 'editblog') {

		$addtrack = array();
		//check to see if post data has been entered in
		if ((!empty($_POST['title'])) || (!empty($_POST['description'])) || (!empty($_POST['content'])) || (!empty($_POST['author'])) || (!empty($_POST['deliver'])) || (!empty($_POST['coverlinkid'])) || (!empty($_POST['coverlinkfile'])) || (!empty($_POST['uploaddate'])) || (!empty($_POST['enabled']))){
			echo "Teh Bewbies haveth beenith receivedith <br>";
			$id 			= $_POST['id'];
			$title 			= $_POST['title'];
			$description 	= $_POST['description'];
			$content 		= $_POST['content'];
			$author			= $_POST['author'];
			$deliver		= date('Y-m-d',strtotime($_POST['deliver']));
			$coverlinkid	= $_POST['coverlinkid'];
			$coverlinkfile	= $_POST['coverlinkfile'];
			$enabled		= $_POST['enabled'];

			$results = $db->prepare("
				SELECT id, coverlink
				FROM blog 
				WHERE id = ?
				");	
			$results->bind_param('i', $_POST['id']);
			$results->execute();
			$results->bind_result($id, $coverlinkid);
			$results->store_result();

			//update cover link data into file table
			$insertFile = $db->prepare("
				UPDATE file
				SET link=?
				WHERE id = $coverlinkid
				");
			if (!$insertFile) {
				printf("Errormessage: %s\n", $db->error);
			} else {
				echo "Coverlink bewbies updated <br>";
				$insertFile->bind_param('s', $coverlinkfile);
				$insertFile->execute();
			}

			$inserttrack = $db->prepare("
				UPDATE blog 
				SET title = ?, description = ?, content = ?, author = ?, deliver = ?, coverlink = ?, enabled = ?
				WHERE id = $id
				");

			if (!$inserttrack) {
				printf("Errormessage: %s\n", $db->error);
			} else {
				echo "Insertted into blog table <br>";
				$inserttrack->bind_param('sssssii', $title, $description, $content, $author, $deliver, $coverlinkid, $enabled);
				$inserttrack->execute();
			}

		} else {
			echo "Post is empty, my dewd";
		}		    
		$returnData = $addtrack;
	
		//DELETE BLOG
	} elseif ($function == 'deleteblog') {
		$id = $_POST['id'];

		$results=$db->prepare("
			UPDATE blog
			SET enabled = 0
			WHERE id = $id
		");

		if (!$results) {
				printf("Errormessage: %s\n", $db->error);
			} else {
				echo "Prepared!";
				$results->execute();
			}

		

		$returnData = 'You are pretty';
		//NO FUNCTION SELECTED
	} else {
		$returnData = "No function selected";
	}

	$result['data'] = 'All ok';	
	$result['return'] = $returnData;
	echo json_encode($result);
?>