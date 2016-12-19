<?php

namespace QueueIT\Security;

abstract class ValidateResultRepositoryBase implements IValidateResultRepository
{
	private $sessionQueueId = "QueueITAccepted-SDFrts345E-";

	protected function generateKey($customerId, $eventId)
	{
		return $this->sessionQueueId . $customerId . "-" . $eventId;
	}
}
?>