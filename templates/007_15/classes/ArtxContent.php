<?php
defined('_JEXEC') or die;

/**
 * Contains content component rendering helpers and article factory method.
 */
class ArtxContent
{
    /**
     * @access protected
     */
    var $_component;

    /**
     * Component page class suffix.
     *
     * @var string
     * @access public
     */
    var $pageClassSfx;

    /**
     * @var string
     * @access public
     */
    var $pageHeading;

    /**
     * @var string
     * @access public
     */
    var $showPageHeading;

    /**
     * @access public
     */
    function ArtxContent(&$component)
    {
        $this->_component = & $component;

        $this->pageClassSfx = $this->_component->params->get('pageclass_sfx');
        $this->showPageHeading = $this->_component->params->get('show_page_title', 1);
        $this->pageHeading = $this->showPageHeading ? $this->_component->params->get('page_title') : '';
    }

    /**
     * @access public
     */
    function pageHeading($heading = null)
    {
        return artxPost(array('header-text' => null == $heading ? $this->pageHeading : $heading));
    }

    /**
     * @access public
     */
    function article($view)
    {
        switch ($view) {
            case 'article':
                return new ArtxContentArticle($this->_component, $this->_component->params,
                                              $this->_component->article, $this->_component->params);
            case 'section':
                return new ArtxContentSectionItem($this->_component, $this->_component->params,
                                                  $this->_component->item, $this->_component->item->params);
            default:
                return new ArtxContentItem($this->_component, $this->_component->params,
                                           $this->_component->item, $this->_component->item->params);
        }
    }

    /**
     * @access public
     */
    function beginPageContainer($class)
    {
        return '<div class="' . $class . $this->pageClassSfx .'">';
    }

    /**
     * @access public
     */
    function endPageContainer()
    {
        return '</div>';
    }
}
