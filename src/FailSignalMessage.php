<?php

namespace Psg\Sr3;

class FailSignalMessage implements FailSignalMessageInterface{
	protected $message;
	public function __construct($message){
		$this->message = $message;
	}
	public function getMessage(){
		return $this->message;
	}
}