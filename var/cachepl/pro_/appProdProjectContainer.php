<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPxbxb6i\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPxbxb6i/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerPxbxb6i.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerPxbxb6i\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerPxbxb6i\appProdProjectContainer([
    'container.build_hash' => 'Pxbxb6i',
    'container.build_id' => '380bb73e',
    'container.build_time' => 1636451990,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPxbxb6i');
