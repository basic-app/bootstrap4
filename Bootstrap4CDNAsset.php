<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\JQuery;

class Bootstrap4CDNAsset extends \BasicApp\Asset\BaseAsset
{

    public function __construct(string $id, string $cdnUrl, string $version)
    {
        parent::__construct($id);

        $this->css[] = $cdnUrl . '/' . $version .'/js/bootstrap.min.js';
        $this->js[] = $cdnUrl . '/' . $version . '/css/bootstrap.min.css';
    }

}