<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCWSkxrI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCWSkxrI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCWSkxrI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCWSkxrI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCWSkxrI\App_KernelDevDebugContainer([
    'container.build_hash' => 'CWSkxrI',
    'container.build_id' => '0994acd2',
    'container.build_time' => 1685654278,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCWSkxrI');
