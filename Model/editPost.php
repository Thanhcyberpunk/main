<?php

public function editPost($id, $title, $slug, $summary, $content, $categoryId, $image)
	{
		$title = $this->db->conn->real_escape_string($title);
		$slug = $this->db->conn->real_escape_string($slug);
		$summary = $this->db->conn->real_escape_string($summary);
		$content = $this->db->conn->real_escape_string($content);
		$sql = "UPDATE posts SET title = '$title', 
								 slug = '$slug', 
								 summary = '$summary', 
								 content = '$content',
								 category_id = '$categoryId',
								 image = '$image'
							 WHERE id = $id
								 ";

		return $this->db->conn->query($sql);
	}
