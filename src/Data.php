<?php

namespace App;

class Data {
    /**
    *
    *
    * @var int
    */
    private $postID;

    /**
    *
    *
    * @var bool
    */
    private $displayComments;
    /**
    *
    *
    * @var bool
    */
    private $displayArr;
    
	public function __construct(int $postID=null,bool $displayComments,bool $displayArr){
		$this -> postID = $postID;
		$this -> displayComments= $displayComments;
		$this -> displayArr = $displayArr;		
		
	}
    /**
    *
    *
    * @return void
    */
	public function displayData(){
		return [
			"postID" => $this -> postID,
			"displayComments"  => $this -> displayComments,
			"displayArr" => $this -> displayArr
		];
	}

	public function getApi(){
		$apiURL = 'https://jsonplaceholder.typicode.com/posts';
		$postID = ($this->postID != 0 ? '/'.$this->postID : '');
		$displayComments = ($this->displayComments ? '/comments' : '');
		echo $apiURL.$postID.$displayComments;
		$json = file_get_contents($apiURL.$postID.$displayComments);
		$res = ($this -> displayArr == true ? json_encode($json,true) : $json);

		return $res;
	}
}
