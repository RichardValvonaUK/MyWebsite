<?php

class PostOperations extends \Model {
	
	public static function addPost() {
		$userId_safe = \Base::$con->real_escape_string(\Session::$userId);
		$timeInSeconds_safe = time();
		
		$subject_safe = \Base::$con->real_escape_string($_POST["subject"]);
		$content_safe = \Base::$con->real_escape_string($_POST["content"]);
		
		$expiresIn = intval($_POST["expiresIn"]);
		// The expiry date must be between 1 and 14 days later than today's date.
		if ($expiresIn < 1 || $expiresIn > 14) return false;
		
		$expiryTimestamp = strtotime('today midnight') + SECONDS_IN_DAY * $expiresIn;
		$expiryTimestamp_safe = \Base::$con->real_escape_string($expiryTimestamp);
		
		$query = "INSERT INTO posts (user_id, timestamp, subject, content, expiry_timestamp)"
			. " VALUES ($userId_safe, $timeInSeconds_safe, '$subject_safe', '$content_safe', $expiryTimestamp_safe)";
		
		$result = \Base::$con->query($query);
		
		if ($result === false) return false;
		else return \Base::$con->insert_id;	
	}
	
	public static function deletePost() {
		
	}
	
	public static function getPosts() {
		$query = "SELECT posts.id, posts.user_id, posts.subject, posts.content, posts.timestamp, posts.expiry_timestamp, users.main_image_pending"
			. " FROM posts JOIN users ON posts.user_id = users.id ORDER BY posts.timestamp DESC";
			
		$result = \Base::$con->query($query);
		
		$resultsAsArray = array();
		
		while ($row = $result->fetch_assoc()) {
			array_push($resultsAsArray, $row);
		}
		
		return json_encode($resultsAsArray);
	}
	
	public static function addMessage($postId, $replyUserId, $isReplyUser, $content) {
		$postId_safe = \Base::$con->real_escape_string($postId);
		$replyUserId_safe = \Base::$con->real_escape_string($replyUserId);
		$isReplyUser_safe = \Base::$con->real_escape_string($isReplyUser);
		$content_safe = \Base::$con->real_escape_string($content);
		
		$status_safe = 'draft';
	}
	
	public static function saveMessage($id, $content) {
		$id_safe = \Base::$con->real_escape_string($id);
		$content = \Base::$con->real_escape_string($content);
		$isReplyUser_safe = \Base::$con->real_escape_string($isReplyUser);
		$content_safe = \Base::$con->real_escape_string($content);
	}
}
