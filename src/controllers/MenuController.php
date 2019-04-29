<?php
/**
 * Created by PhpStorm.
 * User: ajrja
 * Date: 4/29/2019
 * Time: 9:47 PM
 */

namespace Anwar\LaravelMenu\Controllers;
use Anwar\Laravelmenu\LaravelMenu;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index(){
        return dump(LaravelMenu::all());
    }
}