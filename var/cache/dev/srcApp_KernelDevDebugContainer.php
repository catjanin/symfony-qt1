<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQlfTu1z\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQlfTu1z/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQlfTu1z.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQlfTu1z\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerQlfTu1z\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'QlfTu1z',
    'container.build_id' => '5097dc41',
    'container.build_time' => 1557844327,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQlfTu1z');
