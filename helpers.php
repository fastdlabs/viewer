<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

use FastD\Http\Response;

/**
 * @return Twig_Environment
 */
function view () {
    return app()->get('view');
}

/**
 * @param $template
 * @param array $variables
 * @return Response
 * @throws Twig_Error_Loader
 * @throws Twig_Error_Runtime
 * @throws Twig_Error_Syntax
 */
function render ($template, array $variables = []) {
    return new Response(view()->render($template, $variables));
}