<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerItwl5kQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerItwl5kQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerItwl5kQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerItwl5kQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerItwl5kQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'Itwl5kQ',
    'container.build_id' => '359c7686',
    'container.build_time' => 1726304982,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerItwl5kQ');
