<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJnF5jav\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJnF5jav/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJnF5jav.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJnF5jav\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJnF5jav\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'JnF5jav',
    'container.build_id' => '22e0ecc7',
    'container.build_time' => 1565524513,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJnF5jav');
