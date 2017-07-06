<?php
	Class Category{
		private $id;
		private $name;
		private $text;
		private $slug;
		private $del;			
		private $act;			
		private $ts;


		public function __construct($id, $name,$text,$slug, $del, $act, $ts){

			$this->id = $id;
			$this->name=$name;	
			$this->text=$text;					    
			$this->slug=$slug;					    
			$this->del=$del;			
			$this->act=$act;					
			$this->ts=$ts;

		}

		/* GETTERS */
		function getId(){ return $this->id; }
		function getName(){ return $this->name; }
		function getText(){ return $this->text; }
		function getSlug(){ return $this->slug; }
		function getDel(){ return $this->del; }
		function getAct(){ return $this->act; }
		function getTs(){ return $this->ts; }

		/*SETTERS*/
		function setId($value){  $this->id=$value; }
		function setName($value){  $this->name=$value; }
		function setText($value){  $this->text=$value; }
		function setSlug($value){  $this->slug=$value; }
		function setDel($value){  $this->del=$value; }
		function setAct($value){  $this->act=$value; }
		function setTs($value){  $this->ts=$value; }


	}

?>