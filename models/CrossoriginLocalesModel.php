<?php
/**
 * Cross-Origin Locales plugin for Craft CMS
 *
 * CrossoriginLocales Model
 *
 * --snip--
 * Models are containers for data. Just about every time information is passed between services, controllers, and
 * templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 * --snip--
 *
 * @author    Tim Kelty
 * @copyright Copyright (c) 2016 Tim Kelty
 * @link      http://fusionary.com/
 * @package   CrossoriginLocales
 * @since     1.0.0
 */

namespace Craft;

class CrossoriginLocalesModel extends BaseModel
{
    /**
     * Defines this model's attributes.
     *
     * @return array
     */
    protected function defineAttributes()
    {
        return array_merge(parent::defineAttributes(), array(
            'someField'     => array(AttributeType::String, 'default' => 'some value'),
        ));
    }

}