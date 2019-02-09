<?php
/*
* license   GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html
*/


// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit570f23b9c6605a727b6d9ceee50afbe5
{
    public static $prefixesPsr0 = array (
        'M' =>
            array (
                'Michelf' =>
                    array (
                        0 => __DIR__ . '/../..' . '/',
                    ),
            ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit570f23b9c6605a727b6d9ceee50afbe5::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
