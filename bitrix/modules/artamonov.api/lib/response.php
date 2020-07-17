<?php


namespace Artamonov\Api;


class Response
{
    private static function setHeaders()
    {
        header('Powered: Artamonov Denis Pro 2016-'.date('Y'));
        header('Support: http://artamonov.pro');
        header('Content-Type: application/json; charset=utf-8');
    }

    public static function ShowResult($data, $options = false)
    {
        self::setHeaders();
        header('HTTP/1.1 200');

        $result = json_encode(['status' => 200, 'result' => $data], $options);

        if ($error = self::ckeckError()) {
            header('HTTP/1.1 500');
            $result = json_encode(['status' => 500, 'result' => $error]);
        }

        echo $result;
        die();
    }

    public static function NoResult($message = '')
    {
        self::setHeaders();

        $message = ($message) ? $message : 'No Result';
        header('HTTP/1.1 200');
        echo json_encode(['status' => 200, 'error' => $message]);
        die();
    }

    public static function BadRequest($message = '')
    {
        self::setHeaders();

        $message = ($message) ? $message : 'Bad Request';
        header('HTTP/1.1 400');
        echo json_encode(['status' => 400, 'error' => $message]);
        die();
    }

    public static function DenyAccess()
    {
        self::setHeaders();
        header('HTTP/1.1 403');
        echo json_encode(['status' => 403, 'error' => 'Forbidden']);
        die();
    }

    private static function ckeckError() {

        $result = false;

        switch (json_last_error()) {

            case JSON_ERROR_DEPTH:
                $result = 'JSON_ERROR_DEPTH';
                break;
            case JSON_ERROR_STATE_MISMATCH:
                $result = 'JSON_ERROR_STATE_MISMATCH';
                break;
            case JSON_ERROR_CTRL_CHAR:
                $result = 'JSON_ERROR_CTRL_CHAR';
                break;
            case JSON_ERROR_SYNTAX:
                $result = 'JSON_ERROR_SYNTAX';
                break;
            case JSON_ERROR_UTF8:
                $result = 'JSON_ERROR_UTF8';
                break;
        }

        return $result;
    }
}