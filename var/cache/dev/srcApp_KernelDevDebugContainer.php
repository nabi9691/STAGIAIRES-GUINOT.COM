<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGx7gbQQ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGx7gbQQ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGx7gbQQ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGx7gbQQ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerGx7gbQQ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Gx7gbQQ',
    'container.build_id' => '9312bd33',
    'container.build_time' => 1656010948,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGx7gbQQ');
