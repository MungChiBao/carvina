<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ShopOrder;
use App\Models\ShopProduct;
use App\User;
use DB;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\InfoBox;
use Encore\Admin\Widgets\Table;

class HomeController extends Controller
{
    public function index()
    {
        return redirect("system_admin/shop_product");

    }
}
