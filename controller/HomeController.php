<?php
namespace BIGBen\MyWebSite\Controller;

require_once('framework/Controller.php');
require_once('model/OrderManager.php');

class HomeController extends \BIGBen\MyWebSite\Framework\Controller {

    public function __construct() {
    }

    public function index() {
        $this->generateView();
    }
}
