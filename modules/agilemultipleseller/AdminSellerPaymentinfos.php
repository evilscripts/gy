<?php /*
///-build_id: 2015031920.2559
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"G\x4c\x4f\x42\x41L\x53"}["\x6f\x78oui\x68\x62"]="\x74\x6fR\x65\x6do\x76\x65";${"\x47\x4cO\x42ALS"}["krp\x6d\x67\x64\x77"]="l\x61\x62\x65\x6c\x73";${"\x47L\x4fBA\x4c\x53"}["\x66\x77\x71gv\x67\x62"]="t\x6f\x6b\x65\x6e\x53\x65\x6c\x6c\x65\x72\x69\x6efo";${"G\x4c\x4fB\x41\x4c\x53"}["m\x64\x70\x6asyd"]="\x73\x65\x6cl\x65\x72i\x6e\x66\x6f";${"G\x4c\x4f\x42A\x4c\x53"}["\x67\x71\x69j\x6a\x63q\x68gi\x6a"]="m\x6f\x64ule\x73";${"G\x4c\x4f\x42\x41\x4cS"}["\x78\x65\x67\x6cy\x6d\x76\x76\x70\x76\x6f\x68"]="o\x62j";include_once(dirname(__FILE__)."/\x53e\x6c\x6c\x65\x72I\x6e\x66o.php");include_once(dirname(__FILE__)."/A\x67\x69leS\x65ll\x65r\x50ay\x6dent\x49nf\x6f\x2e\x70hp");class AdminSellerPaymentinfos extends ModuleAdminController{protected$position_identifier='id_agile_seller_paymentinfo';protected$link;public function __construct(){global$cookie;$this->table="ag\x69l\x65\x5f\x73\x65lle\x72_\x70a\x79\x6den\x74inf\x6f";$this->identifier="id_\x61\x67\x69l\x65\x5fs\x65ller_payme\x6e\x74inf\x6f";$this->className="Agil\x65Se\x6cl\x65r\x50\x61y\x6de\x6e\x74I\x6e\x66\x6f";$this->lang=false;$this->bootstrap=true;parent::__construct();$this->addRowAction("d\x65l\x65t\x65");$this->fields_list=array("i\x64\x5fa\x67\x69\x6ce_se\x6c\x6cer_p\x61\x79men\x74\x69nfo"=>array("t\x69t\x6ce"=>$this->l('ID'),"alig\x6e"=>"cent\x65r","w\x69\x64th"=>60,"fil\x74\x65\x72_k\x65y"=>"\x61\x21\x69\x64\x5f\x61\x67i\x6ce\x5fs\x65\x6cle\x72_\x70\x61\x79menti\x6efo"),"\x69d\x5fse\x6cle\x72"=>array("ti\x74\x6c\x65"=>$this->l('Seller ID'),"ali\x67\x6e"=>"c\x65\x6ete\x72","\x77\x69dt\x68"=>60,"\x66il\x74\x65r\x5fk\x65\x79"=>"a\x21id\x5f\x73e\x6cler"),"i\x6e\x5fu\x73e"=>array("tit\x6c\x65"=>$this->l('In Use'),"\x61li\x67\x6e"=>"c\x65\x6e\x74er","wi\x64\x74\x68"=>30,"\x66i\x6cte\x72\x5fkey"=>"\x61!i\x6e_\x75\x73\x65"),"\x6dodu\x6ce\x5fnam\x65"=>array("t\x69\x74l\x65"=>$this->l('Payment Module'),"al\x69g\x6e"=>"\x63ent\x65\x72","\x77\x69d\x74h"=>60,"\x66i\x6cte\x72_\x6be\x79"=>"a\x21m\x6f\x64\x75l\x65_\x6e\x61\x6de"),"c\x6f\x6dpa\x6e\x79"=>array("\x74i\x74\x6c\x65"=>$this->l('Company'),"a\x6cign"=>"\x63\x65\x6eter","w\x69d\x74h"=>70,"\x66i\x6cte\x72\x5fk\x65\x79"=>"\x73\x6c!\x63o\x6d\x70a\x6e\x79"),"in\x66\x6f1"=>array("ti\x74le"=>$this->l('info1'),"\x61\x6c\x69g\x6e"=>"c\x65\x6eter","\x77\x69\x64th"=>150,"fil\x74\x65\x72_\x6b\x65y"=>"a\x21i\x6e\x66\x6f1"),"in\x66\x6f\x32"=>array("\x74\x69\x74le"=>$this->l('info2'),"a\x6cig\x6e"=>"\x63\x65\x6et\x65\x72","wid\x74\x68"=>150,"\x66\x69l\x74er\x5f\x6be\x79"=>"a!info\x32"),"i\x6ef\x6f\x33"=>array("\x74it\x6ce"=>$this->l('info3'),"alig\x6e"=>"\x63en\x74e\x72","\x77id\x74h"=>150,"f\x69lt\x65r_\x6bey"=>"\x61!\x69n\x66o\x33"),"i\x6e\x66\x6f4"=>array("\x74itle"=>$this->l('info4'),"a\x6ci\x67n"=>"ce\x6et\x65\x72","\x77idth"=>150,"f\x69\x6c\x74\x65\x72_k\x65y"=>"\x61!\x69\x6e\x66o4"),"inf\x6f\x35"=>array("t\x69\x74le"=>$this->l('info5'),"ali\x67\x6e"=>"\x63enter","\x77i\x64\x74\x68"=>150,"\x66ilter_\x6b\x65y"=>"\x61!\x69\x6efo\x35"),);$this->_join="\n\t\t\t\x4cE\x46\x54\x20J\x4f\x49N `"._DB_PREFIX_."sell\x65r\x69n\x66\x6f\x60 \x73\x20ON\x20(\x61\x2e\x60\x69d\x5f\x73e\x6c\x6c\x65r`\x20\x3d\x20s.`\x69\x64\x5fs\x65\x6c\x6cer`)\n\t\t\tL\x45F\x54\x20\x4aO\x49\x4e\x20\x60"._DB_PREFIX_."\x73el\x6c\x65r\x69\x6e\x66o\x5fla\x6e\x67`\x20s\x6c ON\x20(\x73\x2e`\x69d_s\x65\x6c\x6ce\x72\x69n\x66o`\x20\x3d sl.`i\x64\x5fse\x6cleri\x6ef\x6f\x60\x20A\x4e\x44 \x73l\x2eid\x5flan\x67\x3d".intval($cookie->id_lang).")\n\x20 \x20  \x20   \x20\x20 ";$this->_select="sl.\x63o\x6dpan\x79\x20\x61s compan\x79";}public function init(){if(Tools::getValue("\x73\x75\x62\x6di\x74A\x64d".$this->table))$_POST["s\x75b\x6ditA\x64\x64".$this->table."A\x6ed\x53t\x61\x79"]=1;parent::init();}public function initContent(){if($this->action=="se\x6c\x65c\x74\x5f\x64\x65\x6c\x65\x74e")$this->context->smarty->assign(array("delet\x65\x5f\x66or\x6d"=>true,"url_\x64\x65\x6cet\x65"=>htmlentities($_SERVER["R\x45Q\x55ES\x54_UR\x49"]),"\x62o\x78\x65s"=>$this->boxes,));parent::initContent();}public function renderForm(){global$cookie;${"\x47\x4c\x4f\x42\x41\x4cS"}["\x75\x77\x6ec\x6c\x63"]="\x73\x65\x6c\x6c\x65\x72\x69\x6e\x66o";$bmgitbrqeuu="\x6d\x6fd\x75\x6ce\x73";${"\x47\x4c\x4f\x42AL\x53"}["\x77\x67\x64\x6b\x70c\x67\x6f\x6d\x6d\x74"]="\x6d\x6fd\x75\x6ce\x73";if(!(${${"\x47\x4cO\x42\x41\x4c\x53"}["x\x65gly\x6d\x76\x76\x70v\x6fh"]}=$this->loadObject(true)))return;${"\x47L\x4f\x42A\x4c\x53"}["c\x6d\x77\x6d\x72\x65"]="\x6c\x61\x62el\x73";$mobaqoqkpbc="m\x6fd\x75\x6c\x65s";$lkpwvshwx="\x6do\x64\x75\x6c\x65s";${"\x47L\x4fB\x41\x4c\x53"}["\x6f\x77c\x6e\x69\x6e\x71"]="m\x6fd\x75\x6ces";${$mobaqoqkpbc}=array();${$bmgitbrqeuu}[]=array("\x6eam\x65"=>"","de\x73\x63"=>"--");${${"G\x4c\x4f\x42\x41L\x53"}["\x67\x71\x69\x6a\x6a\x63\x71\x68\x67\x69\x6a"]}[]=array("na\x6de"=>"\x61\x67\x69l\x65p\x61y\x70\x61\x6c","d\x65s\x63"=>"\x41\x67i\x6ce \x50\x61yp\x61\x6c\x20\x6fr \x41\x67\x69le \x50ayp\x61\x6c A\x64a\x74ive");if(Module::isInstalled("\x61\x67i\x6c\x65b\x61\x6ekwi\x72\x65"))${${"\x47\x4cOB\x41\x4c\x53"}["\x6f\x77cni\x6e\x71"]}[]=array("\x6e\x61m\x65"=>"\x62\x61n\x6b\x77\x69re","\x64\x65\x73\x63"=>"\x41i\x67\x6c\x65\x20B\x61nk\x20\x57ir\x65");if(Module::isInstalled("\x61gi\x6c\x65googl\x65ch\x65\x63kou\x74"))${${"\x47L\x4f\x42\x41\x4c\x53"}["gq\x69jjcq\x68\x67\x69\x6a"]}[]=array("n\x61\x6d\x65"=>"g\x6f\x6fg\x6ce\x63\x68\x65ck\x6fut","des\x63"=>"\x41gi\x6ce \x47o\x6f\x67l\x65\x20C\x68\x65\x63k\x6f\x75\x74");${"\x47\x4c\x4f\x42A\x4cS"}["\x65\x6fy\x65kw\x72d\x67\x6d"]="\x74o\x6b\x65n\x53\x65\x6cl\x65\x72i\x6e\x66\x6f";if(Module::isInstalled("\x61\x67i\x6c\x65p\x61\x79b\x79\x63\x68e\x71\x75e"))${${"\x47L\x4fB\x41LS"}["\x77\x67dk\x70cg\x6fm\x6dt"]}[]=array("\x6e\x61me"=>"agil\x65\x70\x61yb\x79ch\x65\x71u\x65","\x64esc"=>"A\x67il\x65\x20\x50\x61\x79 b\x79 c\x68\x65ck");if(Module::isInstalled("a\x67i\x6c\x65\x63\x61s\x68ond\x65\x6c\x69very"))${${"GL\x4fB\x41\x4cS"}["g\x71\x69\x6aj\x63qh\x67\x69j"]}[]=array("n\x61\x6d\x65"=>"\x61g\x69leca\x73ho\x6e\x64\x65\x6civ\x65ry","de\x73\x63"=>"\x41\x69g\x6ce \x43\x61\x73\x68\x20O\x6e\x20D\x65\x6civer\x79");${${"\x47\x4c\x4f\x42\x41L\x53"}["\x63mw\x6dr\x65"]}="\n\t\t\t\x76\x61r\x20la\x62e\x6cs\x20= {\n\t\t\t\t\x61g\x69l\x65paypal:\x20{\x69\x6e\x66o1:\x22".$this->l('Paypal Address:')."\",\x69\x6e\x66o2:\"\x4e/\x41\x22,\x69n\x66\x6f3:\x22\x4e/A\x22,in\x66\x6f4:\x22\x4e/A\",\x69\x6ef\x6f5:\x22N/\x41\x22\x20} \n\t\t\t\t,\x62\x61n\x6b\x77i\x72e:\x20{inf\x6f1:\"".$this->l('Account Owner:')."\",i\x6e\x66o\x32:\x22".$this->l('Details:')."\",info3:\"".$this->l('Bank address:')."\",i\x6efo\x34:\"N/A\",in\x66o5:\x22N/A\"}\n\t\t\t\t,\x67\x6fogl\x65ch\x65\x63\x6b\x6f\x75t:\x20{inf\x6f\x31:\x22".$this->l('Merchant ID:')."\",\x69\x6efo2:\"".$this->l('Merchant Key:')."\",in\x66\x6f3:\x22\x4e/\x41\x22,\x69n\x66\x6f\x34:\x22\x4e/A\x22,info5:\x22N/A\"}\n\t\t\t\t,a\x67ile\x70\x61\x79b\x79c\x68e\x71\x75\x65:\x20{in\x66\x6f\x31:\x22".$this->l('To the order of:')."\x22,i\x6efo\x32:\"".$this->l('Address:')."\",\x69\x6e\x66o3:\x22N/\x41\",i\x6e\x66\x6f\x34:\x22\x4e/A\",i\x6e\x66\x6f\x35:\"N/A\"}\n\t\t\t\t,agi\x6cec\x61sh\x6fndeli\x76er\x79:\x20{in\x66\x6f1:\x22".$this->l('Notes at order:')."\",\x69n\x66o\x32:\"\x4e/A\x22,i\x6e\x66\x6f\x33:\"N/\x41\x22,i\x6e\x66\x6f\x34:\"\x4e/\x41\",\x69nf\x6f5:\x22\x4e/\x41\x22}\x20\n\t\t\t\x20}\x3b\t\t\n\t\t";$this->fields_form=array("l\x65\x67\x65n\x64"=>array("\x74\x69\x74le"=>$this->l('Seller Payment Info'),"im\x61ge"=>"\x2e\x2e/\x69mg/a\x64\x6d\x69\x6e/\x74a\x62-cust\x6f\x6d\x65rs.g\x69f"),"\x69n\x70\x75t"=>array(array("\x74\x79p\x65"=>"\x74e\x78t\x5f\x73\x65\x6cl\x65ri\x6e\x66o","\x6cab\x65l"=>$this->l('Seller:'),"na\x6d\x65"=>"\x69d\x5f\x73e\x6c\x6ce\x72\x69\x6efo","\x73\x69\x7ae"=>33,"r\x65\x71\x75i\x72e\x64"=>false),array("\x74\x79\x70\x65"=>"\x73\x65lect","\x6c\x61\x62el"=>$this->l('Payment Module:'),"na\x6d\x65"=>"\x6dodul\x65_\x6ea\x6de","\x6f\x70t\x69\x6fn\x73"=>array("qu\x65\x72\x79"=>${$lkpwvshwx},"id"=>"n\x61m\x65","\x6e\x61\x6d\x65"=>"\x64e\x73\x63",),"\x72\x65\x71\x75ire\x64"=>false),array("t\x79\x70\x65"=>"\x63\x68\x65\x63k\x62ox","\x6ea\x6d\x65"=>"\x69n_use","va\x6cu\x65\x73"=>array("q\x75\x65\x72y"=>array(array("i\x64"=>"\x6f\x6e","n\x61me"=>$this->l('In Use'),"\x76\x61\x6c"=>"1"),),"\x69\x64"=>"i\x64","n\x61\x6de"=>"na\x6de"),"\x72e\x71\x75ir\x65d"=>false),array("\x74ype"=>"\x74e\x78\x74\x61rea","labe\x6c"=>$this->l('Field 1:'),"\x6ea\x6d\x65"=>"i\x6e\x66\x6f1","\x72\x6f\x77s"=>3,"\x63ol\x73"=>100,"\x72\x65\x71u\x69re\x64"=>false),array("\x74yp\x65"=>"t\x65\x78\x74\x61\x72ea","l\x61\x62\x65\x6c"=>$this->l('Field 2:'),"na\x6de"=>"in\x66o2","row\x73"=>3,"\x63\x6fl\x73"=>100,"\x72e\x71ui\x72e\x64"=>false),array("\x74ype"=>"tex\x74\x61r\x65a","\x6cabe\x6c"=>$this->l('Field 3:'),"n\x61me"=>"\x69\x6ef\x6f3","ro\x77\x73"=>3,"\x63\x6f\x6cs"=>100,"requ\x69\x72\x65d"=>false),array("ty\x70\x65"=>"t\x65xtar\x65\x61","\x6c\x61be\x6c"=>$this->l('Field 4:'),"n\x61\x6d\x65"=>"\x69\x6efo\x34","\x73\x69z\x65"=>33,"requ\x69re\x64"=>false),array("\x74ype"=>"te\x78ta\x72\x65\x61","la\x62e\x6c"=>$this->l('Field 5:'),"\x6e\x61\x6de"=>"\x69n\x66o\x35","r\x6fw\x73"=>3,"co\x6c\x73"=>100,"\x72\x65qu\x69r\x65d"=>false)));$this->fields_form["su\x62m\x69t"]=array("\x74\x69t\x6c\x65"=>$this->l('Save'),"\x63\x6cas\x73"=>"b\x74\x6e\x20\x62tn-\x64ef\x61\x75lt \x70u\x6cl-\x72i\x67\x68\x74");${${"G\x4cO\x42A\x4cS"}["\x6dd\x70\x6asyd"]}=new SellerInfo(SellerInfo::getIdBSellerId($this->object->id_seller));${${"G\x4cO\x42\x41L\x53"}["e\x6fyek\x77\x72\x64gm"]}=Tools::getAdminToken("A\x64\x6di\x6eSeller\x69\x6e\x66os".(int)(Tab::getIdFromClassName("\x41\x64m\x69\x6eSe\x6cle\x72info\x73")).(int)$this->context->employee->id);$this->tpl_form_vars=array("agi\x6cem\x75lti\x70le\x73\x65l\x6ce\x72_v\x69\x65w\x73"=>_PS_ROOT_DIR_."/\x6d\x6fdul\x65\x73/\x61g\x69\x6cemu\x6c\x74\x69p\x6c\x65s\x65l\x6ce\x72/vie\x77\x73/","\x62\x61s\x65_d\x69r"=>_PS_BASE_URL_.__PS_BASE_URI__,"b\x61se_dir_\x73\x73\x6c"=>_PS_BASE_URL_SSL_.__PS_BASE_URI__,"se\x6c\x6c\x65r\x69\x6e\x66\x6f"=>${${"GL\x4f\x42\x41\x4c\x53"}["\x75\x77\x6e\x63l\x63"]},"to\x6b\x65\x6e\x53ell\x65ri\x6e\x66o"=>${${"\x47L\x4f\x42A\x4c\x53"}["\x66\x77\x71\x67v\x67\x62"]},"\x73el\x6cer\x73"=>AgileSellerManager::getSellersNV(true,"--"),"\x69\x73\x5fs\x65\x6cl\x65r"=>($cookie->profile==(int)Configuration::get("\x41\x47IL\x45_\x4d\x53_\x50ROF\x49\x4cE\x5fID")),"l\x61\x62\x65\x6cs"=>${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x6br\x70\x6d\x67\x64w"]});$this->fields_value=array("\x69\x6e\x5f\x75\x73\x65\x5fo\x6e"=>$this->getFieldValue(${${"GL\x4f\x42\x41\x4c\x53"}["\x78eg\x6c\x79m\x76v\x70\x76\x6fh"]},"\x69\x6e\x5fu\x73e"));return parent::renderForm();}public function processSave(){require_once(dirname(__FILE__)."/\x41\x67\x69l\x65\x53\x65\x6c\x6c\x65\x72\x50\x61yme\x6e\x74\x49\x6e\x66\x6f\x2e\x70\x68\x70");if(Tools::getValue("id\x5f\x73e\x6c\x6ce\x72")<=0){$this->errors[]=Tools::displayError("\x53el\x6cer\x20i\x73 re\x71\x75ir\x65\x64.");}if(Tools::getValue("id\x5f\x61\x67\x69\x6c\x65\x5fse\x6c\x6cer\x5fpaym\x65\x6et\x69n\x66o")<=0){if(AgileSellerPaymentInfo::is_seller_payment_info_existed(Tools::getValue("\x6d\x6fd\x75\x6c\x65\x5fn\x61me"),Tools::getValue("i\x64\x5fsell\x65\x72"))){$this->errors[]=Tools::displayError("S\x65\x6cl\x65\x72\x20Pa\x79m\x65n\x74\x20\x49\x6efo ".Tools::getValue("\x6d\x6fd\x75\x6c\x65\x5f\x6ea\x6d\x65")." \x6do\x64ul\x65 a\x6c\x72ea\x64y exs\x69t\x65d\x2e");}}${${"\x47L\x4f\x42ALS"}["\x6fx\x6f\x75\x69h\x62"]}=array(" ","\t","\r\n","\n","\r");if(Tools::getValue("mod\x75le\x5f\x6eam\x65")=="google\x63\x68ec\x6bou\x74"){$tsookg="\x74\x6fRem\x6fv\x65";$_POST["\x69\x6efo1"]=str_replace(${$tsookg},"",$_POST["i\x6ef\x6f\x31"]);if(AgileSellerPaymentInfo::is_seller_payment_account_existed("\x67oogle\x63\x68\x65\x63\x6bout",Tools::getValue("\x69\x64\x5fs\x65l\x6cer"),Tools::getValue("i\x6ef\x6f\x31"))){$this->errors[]=Tools::displayError("The g\x6fogl\x65 \x63h\x65\x63ko\x75t\x20\x6de\x72c\x68a\x6e\x74 \x69\x64\x20\x68\x61\x73 \x62e\x65n us\x65\x64 b\x79 \x61\x6e\x6ft\x68e\x72 \x73\x65\x6cl\x65\x72\x2e");}}if(Tools::getValue("\x6dodule_na\x6de")=="\x61\x67il\x65\x70\x61y\x70al"){${"\x47\x4c\x4fB\x41L\x53"}["\x61\x61\x69\x66k\x73\x74f\x76\x61"]="\x74o\x52\x65m\x6f\x76\x65";$_POST["\x69n\x66\x6f1"]=str_replace(${${"G\x4c\x4f\x42\x41\x4c\x53"}["a\x61i\x66\x6b\x73t\x66\x76a"]},"",$_POST["\x69\x6ef\x6f1"]);if(AgileSellerPaymentInfo::is_seller_payment_account_existed("\x61g\x69\x6c\x65\x70\x61yp\x61\x6c",Tools::getValue("\x69\x64_\x73\x65\x6c\x6c\x65r"),Tools::getValue("\x69\x6efo1"))){$this->errors[]=Tools::displayError("T\x68e\x20pa\x79\x70\x61l \x61cco\x75\x6et\x20\x65\x6da\x69\x6c addr\x65s\x73\x20\x68as\x20b\x65\x65\x6e us\x65d\x20b\x79 a\x6e\x6ft\x68\x65\x72\x20\x73elle\x72.");}if(((int)$_POST["\x69n\x5f\x75\x73e\x5fo\x6e"]||!empty($_POST["\x69\x6e\x66\x6f1"]))&&!Validate::isEmail($_POST["in\x66o\x31"])){$this->errors[]=Tools::displayError("\x54\x68e \x70a\x79\x70a\x6c\x20\x61ccou\x6et\x20\x65\x6dail i\x73\x20in\x76a\x6cid\x2e");}}if(!empty($this->errors)){$this->redirect_after=false;return false;}$_POST["in_\x75\x73e"]=(int)Tools::getValue("\x69n_\x75se\x5f\x6fn");parent::processSave();}}
?>