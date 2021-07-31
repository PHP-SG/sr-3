<?php

namespace Psg\Sr3;

interface FailSignalMessageInterface extends FailSignalInterface, HasMessageInterface{
	public function __construct($message);
}