<?php
    use Psr\Log\LoggerInterface;
    namespace Php\Exam;
    
    class Logger
    {
        function critical()
        {
            echo "critical";
        }
        function info()
        {
            echo "info";
        }
        function notice()
        {
            echo "notice";
        }
    }
?>