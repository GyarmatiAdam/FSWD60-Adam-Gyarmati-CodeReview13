<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHtkuojz\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHtkuojz/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerHtkuojz.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerHtkuojz\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerHtkuojz\appDevDebugProjectContainer([
    'container.build_hash' => 'Htkuojz',
    'container.build_id' => '52eace13',
    'container.build_time' => 1566118232,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHtkuojz');
