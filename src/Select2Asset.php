<?php

namespace alexBond\select2;

use yii\web\AssetBundle;

/**
 * Widget select2 asset bundle.
 */
class Select2Asset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/select2/dist';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/select2.css'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        \alexBond\select2\Asset::class
    ];
}
