<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

namespace ServiceProvider;


use FastD\Container\Container;
use FastD\Container\ServiceProviderInterface;
use Twig_Environment;
use Twig_Loader_Filesystem;

/**
 * Class ViewServiceProvider
 * @package ServiceProvider
 */
class ViewServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     */
    public function register(Container $container)
    {
        $config = config()->get('viewer', []);
        $loader = new Twig_Loader_Filesystem(isset($config['path']) ? $config['path'] : app()->getPath().'/src/Views');
        $twig = new Twig_Environment($loader, isset($config['options']) ? $config['options'] : []);

        $container->add('view', $twig);
    }
}