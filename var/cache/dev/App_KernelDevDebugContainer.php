<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDUj0AvG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDUj0AvG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDUj0AvG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDUj0AvG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDUj0AvG\App_KernelDevDebugContainer([
    'container.build_hash' => 'DUj0AvG',
    'container.build_id' => 'b576a2e8',
    'container.build_time' => 1726173702,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDUj0AvG');
