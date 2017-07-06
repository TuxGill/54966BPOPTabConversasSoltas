<?php

	include('Class.Category.php');

	function getAllCategories($conn){
		
		$collection =  array();


		$sql="SELECT *
				FROM categories 
				WHERE del_category= 0";

		$res= $conn->prepare($sql);
		$res->bindParam(':id', $id, PDO::PARAM_INT);
		$res->execute();

		while($row= $res->fetch(PDO::FETCH_ASSOC) ){
			// print_r($res);
			// print_r( $row);
			$content = new Category(
							$row['id_category'],
							$row['name_category'],
							$row['text_category'],
							$row['slug_category'],
							$row['img_category'],
							$row['del_category'],
							$row['act_category'],
							$row['ts_category']
				);

				array_push($collection, $content);
		}

		return $collection;		
	}

	function getCategoryBySlug($conn, $slug){
		
		$collection =  array();


		$sql="SELECT *
				FROM categories 
				WHERE slug_category= :slug";

		$res= $conn->prepare($sql);
		$res->bindParam(':slug', $slug, PDO::PARAM_INT);
		$res->execute();

		while($row= $res->fetch(PDO::FETCH_ASSOC) ){
			// print_r($res);
			// print_r( $row);
			$content = new Category(
							$row['id_category'],
							$row['name_category'],
							$row['text_category'],
							$row['slug_category'],
							$row['img_category'],
							$row['del_category'],
							$row['act_category'],
							$row['ts_category']
				);

				array_push($collection, $content);
		}

		return $collection;		
	}

	
?>