<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVxetp8z\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVxetp8z/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerVxetp8z.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerVxetp8z\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerVxetp8z\appDevDebugProjectContainer([
    'container.build_hash' => 'Vxetp8z',
    'container.build_id' => 'c7a61a4a',
    'container.build_time' => 1564755949,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVxetp8z');
