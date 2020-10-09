<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Bootstrap4;

class Bootstrap4Asset extends \BasicApp\Asset\BaseAsset
{

    public function __construct(string $id, bool $minified = true)
    {
        parent::__construct($id);

        $this->js[] = base_url('assets/bootstrap4/bootstrap.js');
    }

}