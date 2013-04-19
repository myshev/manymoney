<?php

/**
 * StatPage form.
 *
 * @package    manymoney
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class StatPageForm extends BaseStatPageForm {
	public function configure() {
		parent::configure();

		$this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
			'label'     => 'Image',
			'file_src'  => '/uploads/stat/'.$this->getObject()->getImage(),
			'is_image'  => true,
			'edit_mode' => !$this->isNew(),
			'template'  => '<div>'.($this->getObject()->getImage() ? '%file%' : '') .'<br />%input%<br />%delete% %delete_label%</div>',
		));
		$this->validatorSchema['image']	= new sfValidatorFile(
			array(
				'max_size'		=> '2000000',
				'mime_types'	=> 'web_images',
				'path'			=> sfConfig::get('sf_upload_dir') . DIRECTORY_SEPARATOR . 'stat',
				'required'    => false
			)
		);

		$this->validatorSchema['image_delete'] = new sfValidatorPass();

		$this->removeFields();
	}

	private function removeFields() {
		unset(
		$this['created_at'],
		$this['updated_at']
		);
	}
}
