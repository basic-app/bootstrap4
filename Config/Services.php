<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\JQuery\Config;

use BasicApp\Bootstrap4\Bootstrap4Asset;
use BasicApp\Bootstrap4\Bootstrap4CDNAsset;

class Services extends \CodeIgniter\Config\BaseService
{

    public static function bootstrap4Asset($getShared = true)
    {
        if (!$getShared)
        {
            $config = config(Bootstrap4::class);

            if ($config->url)
            {
                return new Bootstrap4CDNAsset(__FUNCTION__, $config->url);
            }
            else
            {
                return new Bootstrap4Asset(__FUNCTION__);
            }
        }

        return static::getSharedInstance(__FUNCTION__);
    }

}