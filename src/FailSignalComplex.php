<?php

namespace Psg\Sr3;

# when the fail signal should include some variable
class FailSignalComplex implements FailSignalComplexInterface{
	protected $message;
	protected $details;
	public function __construct($details, $message=''){
		$this->details = $details;
		$this->message = $message;
	}
	public function getDetails(){
		return $this->details;
	}
	public function getMessage(): string{
		return $this->message;
	}
}