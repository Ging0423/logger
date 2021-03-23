<?php
    namespace Php\Exam;
    use Psr\Log\LoggerInterface;
    
    class Logger implements LoggerInterface
{
    function critical($message, array $context = array())
    {
            echo "critical\n";
    }
    function info($message, array $context = array())
    {
            echo "info\n";
    }
    function notice($message, array $context = array())
    {
            echo "notice\n";
    }
    function debug($message, array $context = array())
    {

    }
    function error($message, array $context = array())
    {
            echo "error\n";
    }
    function alert($message, array $context = array())
    {

    }
    function emergency($message, array $context = array())
    {

    }
    function warning($message, array $context = array())
    {

    }
    function log($level, $message, array $context = array())
    {

    }
}
?>