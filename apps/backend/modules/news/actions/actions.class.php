<?php

require_once dirname(__FILE__).'/../lib/newsGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/newsGeneratorHelper.class.php';

/**
 * news actions.
 *
 * @package    manymoney
 * @subpackage news
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class newsActions extends autoNewsActions {
	public function executePromote() {
		$object=Doctrine::getTable('News')->findOneById($this->getRequestParameter('id'));


		$object->promote();
		$this->redirect("@news");
	}

	public function executeDemote() {
		$object=Doctrine::getTable('News')->findOneById($this->getRequestParameter('id'));

		$object->demote();
		$this->redirect("@news");
	}
}
