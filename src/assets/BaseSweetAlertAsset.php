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
class BaseSweetAlertAsset extends AssetBundle
{
    public $depends = [
    ];
    public $sourcePath = '@vendor/npm-assets/sweetalert';
    public $js = [
    ];
}
