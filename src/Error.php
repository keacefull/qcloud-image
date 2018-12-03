<?php

/*
 * (link)  https://www.huangxiaomin.com
 * (c) xiaomin<keacefull@gmail.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace QcloudImage;

class Error
{
    /**
     * Create reusable signature.
     * This signature will expire at time()+$howlong timestamp.
     * Return the signature on success.
     * Return false on fail.
     */
    public static function json($code, $message, $httpcode = 0)
    {
        return json_encode([
            'code' => $code,
            'message' => $message,
            'httpcode' => $httpcode,
            'data' => json_decode('{}', true),
        ]);
    }

    public static $Param = -1;
    public static $Network = -2;
    public static $FilePath = -3;
    public static $Unknown = -4;
}
