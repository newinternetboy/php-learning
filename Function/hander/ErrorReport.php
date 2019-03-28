<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2019-03-07
 * Time: 11:37
 */
class ErrorReportC{
    public function errorReport($e){
        echo $e->getMessage();
        echo "\nFile".$e->getFile();
        echo "\nLine".$e->getLine();
        echo "\nTracks".$e->getTraceAsString();
        echo "\n";
    }
}

$errorReport = new ErrorReportC();

try{
    set_exception_handler([$errorReport,'errorReport']);
    throw new Exception();
}catch (Exception $exception){
    $e->getMessage();
}