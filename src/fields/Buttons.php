<?php
/**
 * EnupalStripe plugin for Craft CMS 3.x
 *
 * @link      https://enupal.com/
 * @copyright Copyright (c) 2018 Enupal
 */

namespace enupal\stripe\fields;

use craft\fields\BaseRelationField;
use enupal\stripe\elements\StripeButton;
use enupal\stripe\Stripe as StripePlugin;

/**
 * Class Buttons
 *
 */
class Buttons extends BaseRelationField
{
    /**
     * @inheritdoc
     */
    public $allowMultipleSources = false;

    /**
     * @inheritdoc
     */
    public static function displayName(): string
    {
        return StripePlugin::t('Stripe Pay Buttons');
    }

    /**
     * @inheritdoc
     */
    protected static function elementType(): string
    {
        return StripeButton::class;
    }

    /**
     * @inheritdoc
     */
    public static function defaultSelectionLabel(): string
    {
        return StripePlugin::t('Add a Stripe Pay Button');
    }
}
