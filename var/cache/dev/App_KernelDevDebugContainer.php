<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZxPxr8x\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZxPxr8x/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZxPxr8x.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZxPxr8x\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZxPxr8x\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZxPxr8x',
    'container.build_id' => '022b8ebc',
    'container.build_time' => 1726609807,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZxPxr8x');
