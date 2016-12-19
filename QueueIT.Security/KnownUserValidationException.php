<?php

namespace QueueIT\Security;

class KnownUserValidationException extends SessionValidationException
{
	public function __construct($previous, $queue)
	{
		parent::__construct($previous->message, $previous, $queue);
	}
}

?>