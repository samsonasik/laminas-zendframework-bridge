<?php
/**
 * @see       https://github.com/laminas/laminas-zendframework-bridge for the canonical source repository
 * @copyright https://github.com/laminas/laminas-zendframework-bridge/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-zendframework-bridge/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\ZendFrameworkBridge;

class RewriteRules
{
    /**
     * @return array
     */
    public static function namespaceRewrite()
    {
        // @todo Need to determine the final name and namespace for zf-console
        return array(
            // Expressive
            'Zend\\ProblemDetails\\' => 'Expressive\\ProblemDetails\\',
            'Zend\\Expressive\\'     => 'Expressive\\',

            // Laminas
            'Zend\\'                    => 'Laminas\\',
            'ZF\\ComposerAutoloading\\' => 'Laminas\\ComposerAutoloading\\',
            'ZF\\Deploy\\'              => 'Laminas\\Deploy\\',
            'ZF\\DevelopmentMode\\'     => 'Laminas\\DevelopmentMode\\',

            // Apigility
            'ZF\\Apigility\\' => 'Apigility\\',
            'ZF\\'            => 'Apigility\\',

            // ZendXml, API wrappers, zend-http OAuth support, zend-diagnostics
            'ZendXml\\'         => 'Laminas\\Xml\\',
            'ZendService\\'     => 'Laminas\\',
            'ZendOAuth\\'       => 'Laminas\\OAuth\\',
            'ZendDiagnostics\\' => 'Laminas\\Diagnostics\\',
        );
    }

    /**
     * @return array
     */
    public static function namespaceReverse()
    {
        return array(
            // ZendXml, ZendOAuth, ZendDiagnostics
            'Laminas\\Xml\\'         => 'ZendXml\\',
            'Laminas\\OAuth\\'       => 'ZendOAuth\\',
            'Laminas\\Diagnostics\\' => 'ZendDiagnostics\\',

            // Zend Service
            'Laminas\\Amazon\\'    => 'ZendService\\Amazon\\',
            'Laminas\\Apple\\'     => 'ZendService\\Apple\\',
            'Laminas\\Google\\'    => 'ZendService\\Google\\',
            'Laminas\\ReCaptcha\\' => 'ZendService\\ReCaptcha\\',
            'Laminas\\Twitter\\'   => 'ZendService\\Twitter\\',

            // Zend
            'Laminas\\' => 'Zend\\',

            // Expressive
            'Expressive\\ProblemDetails\\' => 'Zend\\ProblemDetails\\',
            'Expressive\\'                 => 'Zend\\Expressive\\',

            // Laminas to ZfCampus
            'Laminas\\ComposerAutoloading\\' => 'ZF\\ComposerAutoloading\\',
            'Laminas\\Deploy\\'              => 'ZF\\Deploy\\',
            'Laminas\\DevelopmentMode\\'     => 'ZF\\DevelopmentMode\\',

            // Apigility
            'Apigility\\Admin\\'         => 'ZF\\Apigility\\Admin\\',
            'Apigility\\Doctrine\\'      => 'ZF\\Apigility\\Doctrine\\',
            'Apigility\\Documentation\\' => 'ZF\\Apigility\\Documentation\\',
            'Apigility\\Example\\'       => 'ZF\\Apigility\\Example\\',
            'Apigility\\Provider\\'      => 'ZF\\Apigility\\Provider\\',
            'Apigility\\Welcome\\'       => 'ZF\\Apiglity\\Welcome\\',
            'Apigility\\'                => 'ZF\\',
        );
    }
}
