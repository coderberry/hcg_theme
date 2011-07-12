<?php   

defined('C5_EXECUTE') or die(_("Access Denied."));

class ThemeHcgPackage extends Package {

	protected $pkgHandle = 'theme_hcg';
	protected $appVersionRequired = '5.2.2';
	protected $pkgVersion = '1.0';
	
	public function getPackageDescription() {
		return t("Installs the HCG theme.");
	}
	
	public function getPackageName() {
		return t("Hcg");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		PageTheme::add('hcg', $pkg);		
	}




}