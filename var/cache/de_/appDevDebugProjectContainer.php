<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXjnz8f0\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXjnz8f0/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXjnz8f0.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXjnz8f0\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXjnz8f0\appDevDebugProjectContainer([
    'container.build_hash' => 'Xjnz8f0',
    'container.build_id' => 'e8a91338',
    'container.build_time' => 1636453684,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXjnz8f0');
