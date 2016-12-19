<?php

namespace QueueIT\Security;

require_once 'CurrentUrl.php';
require_once 'Guid.php';
require_once 'Version.php';

class QueueIt {

  /**
   * @todo
   */
  public static function getIniPath() {
    if (getenv('QUEUE_IT_INI_PATH')) {
      return getenv('QUEUE_IT_INI_PATH');
    }

    if (defined('QUEUE_IT_INI_PATH')) {
      return QUEUE_IT_INI_PATH;
    }

    return $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'queueit.ini';
  }
}
