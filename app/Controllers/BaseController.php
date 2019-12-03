<?php
namespace App\Controllers;

class BaseController
{
    private $baseViewsDir = BASE_DIR . '/app/Views/';
    private $layoutViewDir = '';

    public function __construct()
    {
        $this->layoutViewDir = $this->baseViewsDir . 'layout.php';
    }

    protected function render(string $viewDir = '', array $params = []) : void
    {
        extract($params);
        $viewDir = $this->baseViewsDir . $viewDir;

        ob_start();
        require_once "$this->layoutViewDir";
        echo ob_get_clean();
    }
}