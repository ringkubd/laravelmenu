<?php
/**
 * Created by PhpStorm.
 * User: ajrja
 * Date: 4/26/2019
 * Time: 11:05 PM
 */
use Anwar\LaravelMenu\Models\LaravelMenuModel;
$routeslist = LaravelMenuModel::active()->get();

if ($routes != null || !empty($routes)){
    $route = new Route();
    foreach ($routes as $r){
        $route->{$r->method}($r->menu,$r);
    }
}