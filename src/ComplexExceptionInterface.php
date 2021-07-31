<?php

namespace Psg\Sr3;

# when the fail signal should include some variable
interface ComplexExceptionInterface{
	public function __construct($details, $message='');
	public function getDetails();
	public function getMessage();
}