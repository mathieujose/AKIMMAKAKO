<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOGNNNve\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOGNNNve/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerOGNNNve.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerOGNNNve\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerOGNNNve\appAppKernelProdContainer([
    'container.build_hash' => 'OGNNNve',
    'container.build_id' => 'b8cdacd6',
    'container.build_time' => 1720779415,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOGNNNve');
