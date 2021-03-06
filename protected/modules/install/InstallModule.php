<?php
class InstallModule extends YWebModule
{
    public function checkSelf()
    {
        $messages = array();

        if ($this->isActive)
            $messages[YWebModule::CHECK_ERROR][] = array(
                'type'    => YWebModule::CHECK_ERROR,
                'message' => Yii::t('yupe', 'У Вас активирован модуль "Установщик", после установки системы его необходимо отключить!')
            );

        return (isset($messages[YWebModule::CHECK_ERROR])) ? $messages : true;
    }

    public function getAdminPageLink()
    {
        return '/install/default/index';
    }

    public function getEditableParams()
    {
        return false;
    }

    public function getCategory()
    {
        return Yii::t('InstallModule.install', 'Юпи!');
    }

    public function getName()
    {
        return Yii::t('InstallModule.install', 'Установщик');
    }

    public function getIsShowInAdminMenu()
    {
        return false;
    }

    public function getDescription()
    {
        return Yii::t('InstallModule.install', 'Модуль для установки системы');
    }

    public function getVersion()
    {
        return Yii::t('InstallModule.install', '0.2');
    }

    public function getAuthor()
    {
        return Yii::t('InstallModule.install', 'yupe team');
    }

    public function getAuthorEmail()
    {
        return Yii::t('InstallModule.install', 'team@yupe.ru');
    }

    public function getUrl()
    {
        return Yii::t('InstallModule.install', 'http://yupe.ru');
    }

    public function getIcon()
    {
        return "download-alt";
    }

    public function init()
    {
        $this->setImport(array(
            'install.models.*',
            'install.components.*',
        ));
    }
}