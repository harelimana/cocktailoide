<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIatsCjx\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIatsCjx/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerIatsCjx.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerIatsCjx\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerIatsCjx\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'IatsCjx',
    'container.build_id' => 'b4177210',
    'container.build_time' => 1535756893,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerIatsCjx');