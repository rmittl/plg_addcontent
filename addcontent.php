<?php
/**
 * Content Plugi
 */

defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * Class PlgContentAddContent
 *
 * @since  February 2015
 */
class PlgContentAddContent extends JPlugin
{
    /**
     * Event method onContentBeforeDisplay
     *
     * @param   string  $context  The context of the content being passed to the plugin
     * @param   mixed   &$row     An object with a "text" property
     * @param   mixed   &$params  Additional parameters
     * @param   int     $page     Optional page number
     *
     * @return  null
     */
    public function onContentBeforeDisplay($context,  &$row, &$params, $page = 0)
    {

        $include_categories = $this->params->get('include_category');
        $textfield = $this->params->get('textfield');


        if (empty($include_categories))
        {
           return true;
        }


         if (in_array($row->catid, $include_categories))
        {
            $row->text = $row->text . $textfield;
        }

    }


    /**
     * Method to do something with this plugin
     *
     * @return null
     */
    protected function doSomethingWithinAddContent()
    {
    }
}

