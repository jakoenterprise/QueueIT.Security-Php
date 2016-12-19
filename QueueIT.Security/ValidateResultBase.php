<?php

namespace QueueIT\Security;

class ValidateResultBase implements IValidateResult
{
	private $queue;
	
	function getQueue()
	{
		return $this->queue;
	}
	
	public function __construct($queue)
	{
		$this->queue = $queue;		
	}
}
?>