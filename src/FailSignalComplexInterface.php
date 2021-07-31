<?php

namespace Psg\Sr3;

interface FailSignalComplexInterface extends FailSignalInterface, HasMessageInterface, HasDetailsInterface{
	public function __construct($details, $message='');
}