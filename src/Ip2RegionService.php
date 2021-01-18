<?php

namespace cma;

use think\Config;
use think\Route;
use think\Service;

class Ip2RegionService extends Service
{
    public function boot()
    {
        $this->registerRoutes(function (Route $route) {
            $route->get('info/ip2region', function (Config $config) {
                $data = $config->get('extra.product', []);
                $data['conposer'] = 'Ip2Region';
                $data['statement'] = 'Cma';;

                foreach ($data as $key => $value) {
                    echo $key . '：' . $value;
                    echo '<br>';
                }
            })->ext('cs');
        });
    }
}
