<?php
/**
 * Yii2 asset for Select2 plugin
 *
 * @link      https://github.com/hiqdev/yii2-asset-select2
 * @package   yii2-asset-select2
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\assets\select2;

use Yii;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class Select2Asset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@vendor/bower-asset/select2/dist';

    /**
     * {@inheritdoc}
     */
    public $js = [
        YII_DEBUG ? 'js/select2.full.js' : 'js/select2.full.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $css = [
        YII_DEBUG ? 'css/select2.css' : 'css/select2.min.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        JqueryAsset::class,
    ];

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        $language = Yii::$app->language;

        if (is_file(Yii::getAlias("{$this->sourcePath}/js/i18n/{$language}.js"))) {
            $this->js[] = "js/i18n/{$language}.js";
        }
    }
}
