<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerV89Ljgp\srcApp_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerV89Ljgp/srcApp_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerV89Ljgp.legacy');

    return;
}

if (!\class_exists(srcApp_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerV89Ljgp\srcApp_KernelTestDebugContainer::class, srcApp_KernelTestDebugContainer::class, false);
}

return new \ContainerV89Ljgp\srcApp_KernelTestDebugContainer([
    'container.build_hash' => 'V89Ljgp',
    'container.build_id' => 'c26749ae',
    'container.build_time' => 1564994822,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerV89Ljgp');