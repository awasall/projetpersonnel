<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMKK0cvq\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMKK0cvq/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMKK0cvq.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMKK0cvq\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerMKK0cvq\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'MKK0cvq',
    'container.build_id' => 'ac2e4301',
    'container.build_time' => 1564993740,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMKK0cvq');
