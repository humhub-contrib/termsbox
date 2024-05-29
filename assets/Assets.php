<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
namespace humhub\modules\termsbox\assets;

use yii\web\AssetBundle;

/**
 * The asset bundle for the gallery module.
 *
 * @package humhub.modules.gallery
 * @since 1.0
 * @author Sebastian Stumpf
 */
class Assets extends AssetBundle
{
    /**
     * @inheritDoc
     */
    public $sourcePath = '@termsbox/resources';

    /**
     * @inheritDoc
     */
    public $publishOptions = [
        'forceCopy' => false,
    ];

    /**
     * @inheritDoc
     */
    public $css = [
        'css/termsbox.css',
    ];
}
