<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRdlp44w\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRdlp44w/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerRdlp44w.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerRdlp44w\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerRdlp44w\appProdProjectContainer([
    'container.build_hash' => 'Rdlp44w',
    'container.build_id' => '7f8f99bb',
    'container.build_time' => 1636439266,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRdlp44w');
