<?php 
include('Class.Content.php');


	function getAllContentWithCategory($conn){
		
		$collection =  array();


		$sql="SELECT *
				FROM content 
				inner join content_has_categories
				on id_content = fk_id_content
				inner join categories
				on fk_id_categories = id_category
				WHERE del_content= 0
				ORDER BY date_content DESC";

		$res=$conn->prepare($sql);
		$res->execute();

		while($row= $res->fetch(PDO::FETCH_ASSOC) ){
			// print_r($res);
			// print_r( $row);
			$content = new Content(
							$row['id_content'],
							$row['title_content'],
							$row['text_content'],
							$row['img_content'],
							$row['url_content'],
							$row['date_content'],
							$row['del_content'],
							$row['act_content'],
							$row['ts_content'],
							$row['slug_category']

				);

				array_push($collection, $content);
		}

		return $collection;		
	}


?>