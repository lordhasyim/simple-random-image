<?php
/**
 * Created by PhpStorm.
 * User: hasyim
 * Date: 8/29/17
 * Time: 12:10 AM
 */

namespace App\Providers;

use Pimple\{Container, ServiceProviderInterface};
use Intervention\Image\ImageManager;

class  ImageServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app){
        $app['image'] = $app->factory(function () {
            return new ImageManager;
        });
    }
}

