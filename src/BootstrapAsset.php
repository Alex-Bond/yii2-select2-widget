<?php

namespace alexBond\select2;

use yii\web\AssetBundle;

/**
 * Widget bootstrap asset bundle.
 */
class BootstrapAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/select2-bootstrap-theme/dist';
    /**
     * @inheritdoc
     */
    public $css = [
        'select2-bootstrap.css'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        \alexBond\select2\Asset::class,
        \yii\bootstrap\BootstrapAsset::class
    ];
}
