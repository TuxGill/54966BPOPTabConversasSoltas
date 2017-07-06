<?php
	Class Content{
		private $id;
		private $title;
		private $text;
		private $img;
		private $url;
		private $date;
		private $del;			
		private $act;			
		private $ts;
		private $slugCat;


		public function __construct($id, $title, $text, $img, $url, $date, $del, $act, $ts, $slugCat){

			$this->id = $id;
			$this->title=$title;				
			$this->text=$text;
			$this->img=$img;					
			$this->url=$url;
			$this->date=$date;		    
			$this->del=$del;			
			$this->act=$act;					
			$this->ts=$ts;
			$this->ts=$ts;
			$this->slugCat=$slugCat;

		}

		/* GETTERS */
		function getId(){ return $this->id; }
		function getTitle(){ return $this->title; }
		function getText(){ return $this->text; }
		function getImg(){ return $this->img; }
		function getDate(){ return $this->date; }
		function getUrl(){ return $this->url; }
		function getDel(){ return $this->del; }
		function getAct(){ return $this->act; }
		function getTs(){ return $this->ts; }
		function getSlugCat(){ return $this->slugCat; }

		/*SETTERS*/
		function setId($value){  $this->id=$value; }
		function setTitle($value){  $this->title=$value; }
		function setText($value){  $this->text=$value; }
		function setImg($value){  $this->img=$value; }
		function setUrl($value){  $this->url=$value; }
		function setDate($value){  $this->date=$value; }
		function setDel($value){  $this->del=$value; }
		function setAct($value){  $this->act=$value; }
		function setTs($value){  $this->ts=$value; }
		function setSlugCat($value){  $this->slugCat=$value; }



	}

?>