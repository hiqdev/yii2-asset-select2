<?php
/**
 * Yii2 asset for Select2-SelectAll plugin
 */

namespace hiqdev\yii2\assets\select2;

use yii\web\AssetBundle;

class Select2SelectAllAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@vendor/hiqdev/yii2-asset-select2/src/assets';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'js/select2.select-all.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        Select2Asset::class,
    ];
}
