<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJuEbxJA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJuEbxJA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJuEbxJA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJuEbxJA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJuEbxJA\App_KernelDevDebugContainer([
    'container.build_hash' => 'JuEbxJA',
    'container.build_id' => 'bcc7737b',
    'container.build_time' => 1726263333,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJuEbxJA');
