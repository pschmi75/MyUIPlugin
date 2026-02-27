<?php

require_once __DIR__ . '/class.ilMyUIPluginUIHookGUI.php';
use ILIAS\GlobalScreen\Provider\ProviderCollection;

class ilMyUIPluginPlugin extends ilUserInterfaceHookPlugin
{
	protected ProviderCollection $provider_collection;
	protected static ?self $instance = null;
	
	/*public function __construct(ilDBInterface $db, ilComponentRepositoryWrite $component_repo, string $id)
	{
		global $DIC;
		$this->db = $db;
		$this->component_repo = $component_repo;
		$this->id = $id;

        parent::__construct($db, $component_repo, $id);

		//add scripts and styles to metadata
		$this->addMetadata();
	}
	*/

	public function getPluginName(): string
    {
        return 'MyUIPlugin';
    }

    public function getUIHookClass()
    {
        return 'ilMyUIPluginUIHookGUI';
    }

    public function getCssFiles(): array
    {
        return [
            'css/myuiplugin.css'
        ];
    }
/*
    private function addMetadata(): void
    {
	    global $DIC;
        $directory = $this->getDirectory();
	    $meta_content = $DIC->globalScreen()->layout()->meta();
	    $meta_content->addCss('Customizing/global/plugins/Services/UIComponent/UserInterfaceHook/MyUIPlugin/css/myuiplugin.css');
	    //addJs(path, false, 1) can be used to add scripts
    }
*/

}
