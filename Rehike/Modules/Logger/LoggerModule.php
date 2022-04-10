<?php

namespace Rehike\Modules\Logger;

/**
 * A simple logger module for Rehike
 * 
 * TODO (kirasicecreamm): Exception logging, dumping, and
 * whatnot. The former could probably be implemented through
 * registering an exception handler in the constructor function.
 */
class LoggerModule extends \Rehike\AbstractModule
{
    /** 
     * Stores the log information 
     * 
     * @var Log[]
     */
    public $logs = [];

    /**
     * Retrieve the logs stored
     * 
     * @return Log[]
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * Retrieve only the logs of a specified type
     * 
     * @param string $type of the log class
     * @return Log[]
     */
    public function getLogsByType($type)
    {
        /** @var Log[] */
        $logs = $this->getLogs();

        /** 
         * Sorted items to be returned
         * 
         * @var Log[] 
         */
        $sort = [];

        foreach ($logs as $i => $instance)
        {
            // Since types are dynamically compared against strings,
            // it must be checked against is_subclass_of.
            // This has the added benefit of acknowledging parent classes
            // (sorting by Log should return all log types)
            if (is_subclass_of($instance, $type))
            {
                // Push the instance to the sorted array
                $sort[] = $instance;
            }
        }

        return $sort;
    }

    /**
     * Push a log instance to the logs array
     * 
     * @param Log $log
     * @return void
     */
    public function pushLog($log)
    {
        $this->logs[] = $log;
    }

    /**
     * Instantiate and push an InfoLog
     * 
     * @param string $message to be logged
     * @param int $code (optional)
     * @return void
     */
    public function info($message, $code = 0)
    {
        $this->pushLog(
            new InfoLog($message, $code)
        );
    }

    /**
     * Instantiate and push an WarnLog
     * 
     * @param string $message to be logged
     * @param int $code (optional)
     * @return void
     */
    public function warn($message, $code = 0)
    {
        $this->pushLog(
            new WarnLog($message, $code)
        );
    }
}