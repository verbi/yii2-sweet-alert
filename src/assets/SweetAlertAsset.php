<?php
namespace verbi\yii2SweetAlert\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle replacing the confirms and alerts with SweetAlert.
 * 
 * @author Philip Verbist <philip.verbist@gmail.com>
 * @link https://github.com/verbi/Yii2-sweet-alert/
 * @license https://opensource.org/licenses/GPL-3.0
 */
class SweetAlertAsset extends AssetBundle
{
    public $depends = [
        'verbi\yii2SweetAlert\assets\BaseSweetAlertAsset',
    ];
    public $sourcePath = '@vendor/verbi/yii2-sweet-alert/src/assets/sweetAlertAssets';
    public $js = [
        'js/sweet-alert.js',
    ];
}
