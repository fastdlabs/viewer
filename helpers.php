<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

/**
 * @return Twig_Environment
 */
function view () {
    return app()->get('view');
}

/**
 * @param $template
 * @param $variables
 * @return \FastD\Http\Response
 */
function render ($template, array $variables = []) {
    return new \FastD\Http\Response(view()->render($template, $variables));
}