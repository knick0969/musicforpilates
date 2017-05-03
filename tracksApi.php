<?php

require 'start.php';

$returnData = '';
$returnError = '';

$function = $_POST['function'];
	//DISPLAY LIST OF TRACKS
	if ($function == 'tracklist') {
		//$disabledSQL = 'WHERE enabled = 1';
		//if (empty($_POST['disabled'])) {
		//	$disabledSQL = '';
		//}
		$tracks = array();
		$results = $db->prepare("
			SELECT *
			FROM track
			WHERE enabled = 1 AND NOW() > deliver
			");	
		$results->execute();
		$results->bind_result($id, $title, $description, $tags, $soundcloudurl, $tracklink, $coverlink, $deliver, $price, $bpm, $duration,  $orderposition, $discountcode, $enabled);
		$results->store_result();
		while ($results->fetch()) {
			$newTrack['id'] = $id;
			$newTrack['title'] = $title;
			$newTrack['description'] = $description;
			$newTrack['tags'] = $tags;
			$newTrack['soundcloudurl'] = $soundcloudurl;
			$newTrack['tracklink'] = $tracklink;
			$newTrack['coverlink'] = $coverlink;
			$newTrack['deliver'] = $deliver;
			$newTrack['price'] = $price;
			$newTrack['bpm'] = $bpm;
			$newTrack['duration'] = $duration;
			$newTrack['orderposition'] = $orderposition;
			$newTrack['discountcode'] = $discountcode;
			$newTrack['enabled'] = $enabled;
			$secondResult = $db->prepare("
				SELECT id, link, uploaddate
				FROM file
				WHERE id = ?
				OR id = ?
				");
			$secondResult->bind_param('ii', $tracklink, $coverlink);
			$secondResult->execute();
			$secondResult->bind_result($id, $link, $uploaddate);
			while ($secondResult->fetch()) {
				if ($id === $tracklink){
					$newTrack['tracklinkfile'] = $link;
					$newTrack['tracklinkupload'] = $uploaddate;
				} else{
					$newTrack['coverlinkfile'] = $link;
				} 
			}
			$tracks[] = $newTrack;
	    }
	    $returnData = $tracks;
	    //DISPLAY SINGLE TRACK DATA
	} elseif ($function == 'track') {
		$track = array();
		$results = $db->prepare("
			SELECT *
			FROM track 
			WHERE id = ?
			");	
		$results->bind_param('i', $_POST['id']);
		$results->execute();
		$results->bind_result($id, $title, $description, $soundcloudurl, $tracklink, $coverlink, $deliver, $price, $bpm, $orderposition, $discountcode, $enabled);
		$results->store_result();
		while ($results->fetch()) {
			$newTrack['id'] = $id;
			$newTrack['title'] = $title;
			$newTrack['description'] = $description;
			$newTrack['soundcloudurl'] = $soundcloudurl;
			$newTrack['tracklink'] = $tracklink;
			$newTrack['coverlink'] = $coverlink;
			$newTrack['deliver'] = $deliver;
			$newTrack['price'] = $price;
			$newTrack['bpm'] = $bpm;
			$newTrack['orderposition'] = $orderposition;
			$newTrack['discountcode'] = $discountcode;
			$newTrack['enabled'] = $enabled;
			$secondResult = $db->prepare("
				SELECT id, link, uploaddate
				FROM file
				WHERE id = ?
				OR id = ?
				");
			$secondResult->bind_param('ii', $tracklink, $coverlink);
			$secondResult->execute();
			$secondResult->bind_result($id, $link, $uploaddate);
			while ($secondResult->fetch()) {
				if ($id === $tracklink){
					$newTrack['tracklinkfile'] = $link;
					$newTrack['tracklinkupload'] = $uploaddate;
				} else{
					$newTrack['coverlinkfile'] = $link;
				} 
			}
			$track[] = $newTrack;
	    }
	    $returnData = $track;
	    //ADD TRACK 
	} elseif ($function == 'addtrack') {
		$addtrack = array();
		//check to see if post data has been entered in
		if ((!empty($_POST['title'])) || (!empty($_POST['description'])) || (!empty($_POST['soundcloudurl'])) || /*(!empty($_POST['tracklink'])) || (!empty($_POST['coverlink'])) || (!empty($_POST['deliver'])) ||*/ (!empty($_POST['price'])) || (!empty($_POST['bpm'])) || (!empty($_POST['orderposition'])) || (!empty($_POST['enabled']))){
			//echo "Bewbs have been recieved <br>";
			$title 			= $_POST['title'];
			$description 	= $_POST['description'];
			$soundcloudurl 	= $_POST['soundcloudurl'];
			//$tracklink 		= $_POST['tracklink'];
			//$coverlink		= $_POST['coverlink'];
			//$deliver		= $_POST['deliver'];
			$price			= $_POST['price'];
			$bpm			= $_POST['bpm'];
			$orderposition	= $_POST['orderposition'];
			// if (empty($_POST['discountcode'])){
			// 	$discountcode = '0';
			// } else{
			// 	$discountcode = $_POST['discountcode'];
			// }
			$uploaddate		= date("Y-m-d");
			$enabled		= 1;

			//insert track link into file table
				// $insertFile = $db->prepare("
				// 	INSERT INTO file
				// 	(link, uploaddate, type)
				// 	VALUES (?, ?, ?)
				// 	");

				// if (!$insertFile) {
				// 	printf("Errormessage: %s\n", $db->error);
				// } else {
				// 	echo "Prepared putting tracklink into file <br>";
				// 	$type = 'music';
				// 	$insertFile->bind_param('sss', $tracklink, $uploaddate, $type);
				// 	$insertFile->execute();
				// }

				//save track link id to separate variable
				//$tracklinkid = $db->insert_id;

				//insert cover link data into file table
				//$insertFile = $db->prepare("
				//	INSERT INTO file
			//		(link, uploaddate, type)
			//		VALUES (?, ?, ?)
			//		");

				//if (!$insertFile) {
			//		printf("Errormessage: %s\n", $db->error);
		//		} else {
		//			echo "Prepared putting coverlink into file <br>";
		//			$type = 'image';
		//			$insertFile->bind_param('sss', $coverlink, $uploaddate, $type);
		//			$insertFile->execute();
		//		}

				//save cover link file id to separate variable
				//$coverlinkid = $db->insert_id;


				//echo "tracklink " . $tracklinkid . "<br>";
				//echo "coverlink " . $coverlinkid . "<br>";
				//echo "date " . $uploaddate . "<br>";

				//$test = "INSERT INTO track (title, description, soundcloudurl, tracklink, coverlink, price, bpm, orderposition, discountcode, enabled) VALUES ('$title', '$description', '$soundcloudurl', $tracklinkid, $coverlinkid, $price, $bpm, $orderposition, $discountcode, $enabled)";

			$inserttrack = $db->prepare("
				INSERT INTO track 
				(title, description, soundcloudurl, price, bpm, orderposition, enabled)
				VALUES (?, ?, ?, ?, ?, ?, ?)
				");

			if (!$inserttrack) {
				printf("Errormessage: %s\n", $db->error);
			} else {
				//echo "Ready to throw this shit into the tracks table <br>";
				$inserttrack->bind_param('sssdiii', $title, $description, $soundcloudurl, $price, $bpm, $orderposition, $enabled);
				$inserttrack->execute() or die(mysqli_error($db));
			}
		} else {
			echo "Post is empty, my dewd";
		}		    
		$returnData = $addtrack;
		
		//EDIT TRACK
	} elseif ($function == 'edittrack') {

		$addtrack = array();
		//check to see if post data has been entered in
		if ((!empty($_POST['title'])) || (!empty($_POST['description'])) || (!empty($_POST['soundcloudurl'])) || (!empty($_POST['tracklink'])) || (!empty($_POST['coverlink'])) || (!empty($_POST['deliver'])) || (!empty($_POST['price'])) || (!empty($_POST['bpm'])) || (!empty($_POST['orderposition'])) || (!empty($_POST['enabled'])) || (!empty($_POST['tracklinkfile'])) || (!empty($_POST['coverlinkfile']))){
			//echo "Bewbs have been recieved <br>";
			$id 			= $_POST['id'];
			$title 			= $_POST['title'];
			$description 	= $_POST['description'];
			$soundcloudurl 	= $_POST['soundcloudurl'];
			$tracklinkid	= $_POST['tracklinkid'];
			$tracklinkfile	= $_POST['tracklinkfile'];
			$coverlinkid	= $_POST['coverlinkid'];
			$coverlinkfile	= $_POST['coverlinkfile'];
			$deliver		= $_POST['deliver'];
			$price			= $_POST['price'];
			$bpm			= $_POST['bpm'];
			$orderposition	= $_POST['orderposition'];
			$discountcode	= $_POST['discountcode'];
			$enabled		= $_POST['enabled'];
			echo $title;

			$results = $db->prepare("
				SELECT id, tracklink, coverlink
				FROM track 
				WHERE id = ?
				");	
			$results->bind_param('i', $_POST['id']);
			$results->execute();
			$results->bind_result($id, $tracklinkid, $coverlinkid);
			$results->store_result();

			//update track link into file table
			$insertFile = $db->prepare("
				UPDATE file
				SET link=?
				WHERE id = $tracklinkid
				");
			if (!$insertFile) {
				printf("Errormessage: %s\n", $db->error);
			} else {
				echo "Prepared!";
				$insertFile->bind_param('s', $tracklinkfile);
				$insertFile->execute();
			}

			//update cover link data into file table
			$insertFile = $db->prepare("
				UPDATE file
				SET link=?
				WHERE id = $coverlinkid
				");
			if (!$insertFile) {
				printf("Errormessage: %s\n", $db->error);
			} else {
				echo "Prepared!";
				$insertFile->bind_param('s', $coverlinkfile);
				$insertFile->execute();
			}
				
			echo "tracklink " . $tracklinkid . "<br>";
			echo "coverlink " . $coverlinkid . "<br>";

			$inserttrack = $db->prepare("
				UPDATE track 
				SET title = ?, description = ?, soundcloudurl = ?, tracklink = ?, coverlink = ?, deliver = ?, price = ?, bpm = ?, orderposition = ?, discountcode = ?, enabled = ?
				WHERE id = $id
				");

			if (!$inserttrack) {
				printf("Errormessage: %s\n", $db->error);
			} else {
				echo "Prepared!";
				$inserttrack->bind_param('sssiisdiiss', $title, $description, $soundcloudurl, $tracklinkid, $coverlinkid, $deliver, $price, $bpm, $orderposition, $discountcode, $enabled);
				$inserttrack->execute();
			}

		} else {
			echo "Post is empty, my dewd";
		}		    
		$returnData = $addtrack;
	
		//DELETE TRACK
	} elseif ($function == 'deletetrack') {
		$id = $_POST['id'];

		$results=$db->prepare("
			UPDATE track
			SET enabled = 0
			WHERE id = $id
		");

		if (!$results) {
				printf("Errormessage: %s\n", $db->error);
			} else {
				echo "Prepared!";
			}

		$results->execute();

		$returnData = 'You are pretty';
		//NO FUNCTION SELECTED
	} else {
		$returnData = "No function selected";
	}

	$result['data'] = 'All ok';	
	//$result['test'] = $test;
	$result['return'] = $returnData;
	echo json_encode($result);
?>