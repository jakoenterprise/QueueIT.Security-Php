<?php

namespace QueueIT\Security;

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
