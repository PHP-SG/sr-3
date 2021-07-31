<?php

namespace Psg\Sr3;

class ComplexException extends \Exception implements ComplexExceptionInterface{
	public $details = [];
	public function __construct($details, $message='', $code = 0, \Exception $previous = null){
		$this->details = $details;
		parent::__construct($message, $code, $previous);
	}
	public function getDetails(){
		return $this->details;
	}
}