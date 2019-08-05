<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

namespace FastD\Viewer;


use FastD\Container\Container;
use FastD\Container\ServiceProviderInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 * Class ViewServiceProvider
 * @package ServiceProvider
 */
class Viewer implements ServiceProviderInterface
{
    /**
     * @param Container $container
     */
    public function register(Container $container)
    {
        $config = config()->get('viewer', []);
        $loader = new FilesystemLoader(isset($config['path']) ? $config['path'] : app()->getPath().'/src/Views');
        $twig = new Environment($loader, isset($config['options']) ? $config['options'] : []);

        $container->add('view', $twig);
    }
}