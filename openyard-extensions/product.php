<?php

namespace Openyard;

use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * Created by JetBrains PhpStorm.
 * User: Justin
 * Date: 10/14/11
 * Time: 3:22 PM
 * To change this template use File | Settings | File Templates.
 */
 
class product implements ServiceProviderInterface
{
      public function register(Application $app)
      {
         return true;
       }
}