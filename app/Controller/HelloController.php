<?php
/**
 *
 */

namespace Bravewood\Controller;

use Dietcube\Controller;
use Pimple\Container;

class HelloController extends Controller
{
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function index()
    {
        return $this->render('hello/index');
    }
}
