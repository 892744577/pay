<?php

namespace Yansongda\Pay\Exception;

use Throwable;

class Exception extends \Exception
{
    const UNKNOWN_ERROR = 9999;

    // Service
    const UNKNOWN_SERVICE = 1000;

    const FROZEN_SERVICE = 1001;

    const GATEWAY_SERVICE = 1002;

    /**
     * raw.
     *
     * @var array
     */
    public $raw = [];

    /**
     * Bootstrap.
     *
     * @param string          $message
     * @param int             $code
     * @param array|string    $raw
     * @param \Throwable|null $previous
     */
    public function __construct($message = '', $code = self::UNKNOWN_ERROR, $raw = [], Throwable $previous = null)
    {
        $this->raw = is_array($raw) ? $raw : [$raw];

        parent::__construct($message, $code, $previous);
    }
}
