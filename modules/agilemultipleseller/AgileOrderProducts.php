<?php /*
///-build_id: 2015031920.2559
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"\x47\x4cOB\x41\x4cS"}["\x63\x78phh\x76\x65"]="new\x74\x6fe\x6bn";${"\x47\x4cOBA\x4c\x53"}["xeui\x6fj\x74\x66ef"]="o\x72\x64\x65\x72\x64\x65\x74\x61\x69\x6c";${"\x47L\x4fB\x41\x4cS"}["\x65\x70\x66\x67\x64o\x70"]="url";${"\x47\x4c\x4f\x42A\x4cS"}["\x61\x61\x69\x65\x73e\x79"]="\x74\x61\x62\x69d";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x6bw\x7a\x6d\x74\x77d\x77\x75"]="id\x5fo\x72\x64e\x72\x5fd\x65\x74a\x69\x6c";${"GLOB\x41L\x53"}["in\x65\x72m\x73lr\x77\x6fx"]="\x73\x74a\x74\x75\x73\x65\x73\x5farra\x79";${"\x47\x4c\x4f\x42AL\x53"}["a\x70j\x68r\x67\x6c"]="\x73\x74a\x74\x75\x73";include_once(_PS_ADMIN_DIR_."/\x2e./modu\x6ce\x73/ag\x69\x6c\x65\x6dul\x74\x69\x70\x6c\x65\x73el\x6c\x65r/\x61\x67\x69\x6c\x65\x6d\x75l\x74\x69\x70l\x65\x73el\x6c\x65\x72.\x70\x68p");class AgileOrderProducts extends ModuleAdminController{private$_isSeller;public function __construct(){global$cookie;$evgmwedmihr="\x73tatu\x73\x65\x73\x5f\x61rra\x79";${"\x47\x4c\x4fB\x41\x4c\x53"}["\x79\x6e\x6b\x70dch\x78\x79"]="s\x74\x61tu\x73es";$this->bootstrap=true;$this->table="or\x64er\x5f\x64e\x74\x61\x69\x6c";$this->identifier="\x69d\x5fo\x72\x64er_de\x74a\x69\x6c";$uabfcuorovz="\x73\x74\x61tu\x73";$this->className="Orde\x72\x44e\x74ai\x6c";$tjctkjkrs="\x73\x74\x61\x74u\x73";$this->addRowAction("");$vbvfygz="\x73\x74a\x74u\x73\x65s\x5f\x61\x72\x72ay";parent::__construct();${"\x47LO\x42\x41\x4c\x53"}["\x78\x65\x75\x79tgig"]="\x73t\x61\x74\x75\x73e\x73";${$evgmwedmihr}=array();${${"\x47LO\x42\x41L\x53"}["\x79\x6e\x6b\x70dc\x68\x78y"]}=OrderState::getOrderStates((int)$this->context->language->id);foreach(${${"\x47\x4c\x4fBA\x4c\x53"}["x\x65uyt\x67\x69\x67"]} as${$uabfcuorovz})${$vbvfygz}[${$tjctkjkrs}["\x69\x64\x5fo\x72\x64\x65r\x5f\x73ta\x74e"]]=${${"\x47\x4c\x4f\x42\x41L\x53"}["apjh\x72\x67\x6c"]}["\x6ea\x6d\x65"];$this->fields_list=array("i\x64\x5for\x64\x65\x72_\x64e\x74\x61il"=>array("\x74\x69\x74l\x65"=>$this->l('ID'),"\x61\x6cig\x6e"=>"cen\x74\x65\x72","\x77idt\x68"=>50),"id_o\x72\x64e\x72"=>array("\x74\x69\x74le"=>$this->l('Order ID'),"\x61\x6c\x69gn"=>"cen\x74\x65\x72","wi\x64th"=>50,"f\x69lt\x65\x72\x5fk\x65\x79"=>"\x61\x21id_or\x64e\x72"),"i\x64\x5f\x6f\x77n\x65\x72"=>array("ti\x74l\x65"=>$this->l('Seller ID'),"a\x6c\x69\x67n"=>"ce\x6ete\x72","w\x69\x64t\x68"=>50),"se\x6c\x6cer"=>array("\x74i\x74\x6ce"=>$this->l('Seller'),"\x68\x61\x76i\x6e\x67\x46i\x6ct\x65\x72"=>true,),"pr\x6f\x64\x75ct_\x6eam\x65"=>array("t\x69\x74\x6ce"=>$this->l('Product Name'),"\x77i\x64th"=>180,"\x61\x6ci\x67\x6e"=>"\x6ce\x66t",),"\x70\x72od\x75\x63\x74_\x70\x72ic\x65"=>array("t\x69tl\x65"=>$this->l('Price'),"w\x69dth"=>70,"a\x6ci\x67\x6e"=>"\x72\x69\x67\x68\x74","\x70refix"=>"\x3c\x62\x3e","suffix"=>"</\x62\x3e","t\x79\x70e"=>"\x70r\x69ce","\x63\x75\x72r\x65\x6ec\x79"=>true),"\x70ro\x64\x75c\x74_\x71\x75an\x74\x69\x74\x79"=>array("\x74\x69\x74l\x65"=>$this->l('Quantity'),"alig\x6e"=>"c\x65nt\x65r","h\x61\x76i\x6e\x67Fi\x6c\x74e\x72"=>true,),"\x6f\x73n\x61\x6d\x65"=>array("\x74\x69\x74\x6c\x65"=>$this->l('Status'),"\x63\x6flo\x72"=>"c\x6f\x6co\x72","\x77\x69\x64th"=>280,"\x74yp\x65"=>"sele\x63t","l\x69st"=>${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x69n\x65rm\x73\x6crwox"]},"fi\x6c\x74\x65r_\x6b\x65\x79"=>"o\x73\x21\x69\x64\x5f\x6f\x72der_\x73\x74a\x74e","\x66\x69lt\x65\x72\x5f\x74ype"=>"\x69\x6et"),"\x64\x61t\x65\x5f\x61d\x64"=>array("\x74\x69\x74le"=>$this->l('Date'),"\x77\x69\x64\x74h"=>130,"\x61lig\x6e"=>"right","ty\x70\x65"=>"d\x61\x74eti\x6de","\x66ilt\x65\x72\x5fke\x79"=>"o\x21dat\x65_\x61\x64\x64"),);$this->_isSeller=(intval($cookie->profile)==Configuration::get("A\x47I\x4c\x45_MS_\x50RO\x46ILE\x5fID"));$this->_join=$this->_join."\n\x20 \x20\x20 \x20\x20\x20  \x20\x20L\x45\x46\x54\x20\x4a\x4fI\x4e\x20`"._DB_PREFIX_."or\x64\x65rs\x60 o\x20ON\x20(\x61\x2e`\x69\x64_o\x72d\x65r\x60=o.\x69d_or\x64er)\n\x20\x20  \x20\x20    \x20\x20\x4c\x45\x46\x54\x20J\x4f\x49\x4e `"._DB_PREFIX_."\x6f\x72\x64e\x72\x5fo\x77\x6e\x65\x72`\x20o\x6f\x20O\x4e (\x61\x2e\x60\x69d\x5f\x6f\x72\x64er`=oo.\x60i\x64\x5f\x6frde\x72\x60)\n \x20\x20\x20  \x20 \x20\x20\x20\x20\x4c\x45\x46\x54\x20JO\x49N `"._DB_PREFIX_."\x73ellerin\x66\x6f\x60\x20\x73 \x4f\x4e\x20(o\x6f.\x60id\x5f\x6f\x77\x6eer`\x3d\x73.`i\x64\x5fs\x65l\x6cer`)\n   \x20  \x20 \x20\x20  LEF\x54\x20JO\x49\x4e\x20`"._DB_PREFIX_."s\x65ll\x65\x72\x69\x6e\x66\x6f\x5fl\x61\x6e\x67\x60 \x73\x6c\x20O\x4e (\x73\x6c.`i\x64_selleri\x6e\x66\x6f`=\x73\x2e`\x69\x64\x5fs\x65llerinf\x6f`\x20\x41\x4e\x44\x20sl.id\x5fl\x61n\x67\x3d".$cookie->id_lang.")\n\t\x20\t\x20 \x20 \x4c\x45F\x54 \x4a\x4f\x49\x4e\x20`"._DB_PREFIX_."o\x72\x64\x65\x72\x5f\x68ist\x6fr\x79`\x20oh \x4f\x4e\x20(\x6f\x68\x2e\x60\x69\x64_o\x72de\x72`\x20=\x20a\x2e\x60\x69d\x5f\x6f\x72\x64\x65\x72\x60)\n\t\t    L\x45FT\x20J\x4f\x49\x4e\x20`"._DB_PREFIX_."o\x72d\x65r\x5fs\x74\x61\x74\x65`\x20os O\x4e\x20(o\x73.`\x69d_or\x64\x65r_\x73\x74at\x65`\x20= oh.`i\x64_\x6f\x72\x64\x65\x72\x5fs\x74\x61\x74\x65`)\n\t\t\x20\x20\x20\x20\x4c\x45F\x54\x20\x4a\x4fIN\x20\x60"._DB_PREFIX_."\x6f\x72d\x65\x72_st\x61\x74e_\x6c\x61ng\x60 o\x73l\x20ON\x20(o\x73\x2e\x60\x69\x64_o\x72\x64\x65r_\x73tat\x65`\x20= o\x73\x6c.\x60\x69d\x5fo\x72der_\x73\x74ate` A\x4e\x44 o\x73\x6c\x2e\x60\x69\x64\x5fl\x61n\x67\x60 \x3d\x20".(int)($cookie->id_lang).")\n\t\t  \x20 ";$this->_select=$this->_select."\n \x20  \x20\x20  \x20\x20\x20 \x20\x20 \x20\x6f.da\x74e_a\x64d, \x6f\x6f\x2e\x69d\x5fo\x77n\x65r, o\x2e\x69d_\x63\x75\x72r\x65ncy\x20as \x69d_cur\x72\x65ncy,\x61\x2eproduc\x74\x5fn\x61\x6d\x65,\x20s\x6c\x2e\x63\x6f\x6dp\x61\x6e\x79 \x61s s\x65\x6c\x6cer\n\t\t\t\x20\x20  ,o\x73l\x2e\x60n\x61m\x65`\x20A\x53 \x60\x6f\x73na\x6d\x65\x60, o\x73\x2e\x60\x63olor`\n   \x20\x20\x20 \x20    \x20\x20  ";$this->_where=" A\x4eD\x20o\x68\x2e\x60id_orde\x72_hist\x6f\x72\x79`\x20=\x20(SE\x4cE\x43\x54 \x4dA\x58(\x60\x69\x64\x5f\x6frder\x5f\x68\x69s\x74o\x72\x79\x60)\x20F\x52\x4f\x4d\x20`"._DB_PREFIX_."o\x72d\x65r_\x68is\x74\x6f\x72y\x60 mo\x68 \x57\x48ER\x45\x20m\x6f\x68.`\x69\x64\x5ford\x65r`\x20\x3d\x20a\x2e`\x69\x64\x5fo\x72\x64e\x72` GR\x4fU\x50\x20B\x59\x20mo\x68\x2e\x60id_or\x64e\x72`)";if($this->_isSeller){$this->_where=$this->_where." \x41\x4e\x44 oo\x2ei\x64_\x6f\x77\x6e\x65r=".intval($cookie->id_employee);}else{$this->fieldsDisplay["se\x6cl\x65\x72"]=array("\x74\x69\x74le"=>$this->l('Seller'),"f\x69\x6cter\x5fkey"=>"\x73l!\x63\x6fmpa\x6ey");}if(isset($_GET["\x75p\x64a\x74eor\x64\x65r\x5f\x64etail"])AND isset($_GET["id\x5f\x6fr\x64\x65\x72_d\x65\x74ail"])AND(int)$_GET["i\x64\x5forde\x72\x5fd\x65\x74ail"]>0){$vpjipovr="\x6f\x72\x64\x65\x72\x64\x65\x74\x61\x69l";${${"\x47\x4c\x4fBA\x4cS"}["\x6bw\x7a\x6dt\x77\x64\x77\x75"]}=Tools::getValue("\x69d\x5fo\x72d\x65r_\x64\x65ta\x69\x6c");$zcisptfo="\x6ee\x77\x74\x6f\x65\x6bn";$crgspgj="\x6e\x65\x77\x74\x6f\x65\x6b\x6e";$gygsuy="t\x61\x62\x69\x64";$whumnqj="\x69\x64_\x6f\x72de\x72\x5f\x64e\x74\x61\x69\x6c";${$vpjipovr}=new OrderDetail(${$whumnqj});${$gygsuy}=Tab::getIdFromClassName("\x41d\x6d\x69nO\x72ders");${$crgspgj}=Tools::getAdminToken("\x41\x64\x6d\x69\x6e\x4f\x72\x64ers".intval(${${"G\x4c\x4f\x42\x41\x4cS"}["\x61a\x69\x65\x73e\x79"]}).intval($cookie->id_employee));${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x65\x70f\x67\x64op"]}="\x2e/\x69n\x64ex.p\x68\x70?co\x6e\x74ro\x6c\x6ce\x72=a\x64\x6d\x69\x6eo\x72\x64\x65\x72s&id\x5f\x6f\x72d\x65r\x3d".$orderdetail->id_order."\x26\x76\x69\x65w\x6f\x72\x64\x65r&t\x6fk\x65\x6e=".${$zcisptfo};Tools::redirectAdmin(${${"\x47L\x4fB\x41\x4c\x53"}["\x65\x70\x66\x67\x64\x6f\x70"]});}}public function initToolbar(){parent::initToolbar();unset($this->toolbar_btn["ne\x77"]);}public function init(){global$cookie;if(isset($_GET["\x75\x70d\x61\x74\x65orde\x72\x5f\x64e\x74a\x69l"])AND isset($_GET["id\x5f\x6f\x72\x64\x65r\x5f\x64\x65\x74\x61\x69\x6c"])AND(int)$_GET["\x69\x64\x5f\x6f\x72der\x5fde\x74ai\x6c"]>0){${"\x47\x4cO\x42\x41L\x53"}["\x79\x61\x78h\x65\x69\x75l"]="id\x5f\x6fr\x64\x65\x72_\x64\x65\x74\x61i\x6c";${${"\x47\x4c\x4fB\x41\x4c\x53"}["ya\x78heiul"]}=Tools::getValue("i\x64_\x6fr\x64er\x5fdetai\x6c");$nkotcipboi="\x75\x72\x6c";$mlqeupaocox="\x74a\x62\x69\x64";${${"GLOB\x41LS"}["xeu\x69o\x6at\x66\x65f"]}=new OrderDetail(${${"G\x4c\x4f\x42\x41L\x53"}["k\x77z\x6d\x74wdwu"]});${"\x47\x4c\x4fB\x41L\x53"}["\x7a\x63u\x78\x75\x68\x75\x6e"]="new\x74\x6f\x65\x6b\x6e";${${"\x47LOB\x41\x4c\x53"}["\x61\x61\x69\x65\x73\x65y"]}=Tab::getIdFromClassName("\x41dmin\x4f\x72d\x65\x72s");${${"\x47L\x4fBA\x4cS"}["zcu\x78\x75\x68\x75n"]}=Tools::getAdminToken("A\x64\x6din\x4frd\x65r\x73".intval(${$mlqeupaocox}).intval($cookie->id_employee));${${"\x47\x4c\x4fB\x41L\x53"}["\x65\x70\x66\x67\x64o\x70"]}="\x2e/in\x64ex\x2eph\x70?c\x6fn\x74\x72oll\x65\x72\x3da\x64mi\x6e\x6frde\x72\x73&id\x5fo\x72d\x65r\x3d".$orderdetail->id_order."&v\x69\x65w\x6fr\x64e\x72\x26\x74\x6fk\x65\x6e=".${${"\x47\x4cOB\x41L\x53"}["\x63\x78\x70\x68\x68v\x65"]};Tools::redirectAdmin(${$nkotcipboi});}parent::init();}}
?>