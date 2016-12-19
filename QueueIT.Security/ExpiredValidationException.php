<?php

namespace QueueIT\Security;

class ExpiredValidationException extends SessionValidationException
{
	private $knownUser;
	
	function getKnownUser()
	{
		return $this->knownUser;
	}
	
	public function __construct($queue, $knownUser)
	{
		parent::__construct('Known User token is expired', null, $queue);
		
		$this->knownUser = $knownUser;
	}
	
}

?>