<?php /*
///-build_id: 2015042222.1245
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"\x47LOBA\x4cS"}["\x6d\x67\x6a\x6d\x68\x6c\x62\x69\x6d\x68"]="re\x74\x73";${"GL\x4f\x42\x41L\x53"}["\x68\x6dv\x73\x6bo\x75ay\x6c"]="\x66\x69\x65\x6c\x64s";class SellerType extends ObjectModel{public$id;public$name;public$date_add;public static$definition=array('table'=>'sellertype','primary'=>'id_sellertype','multilang'=>true,'multilang_shop'=>false,'fields'=>array('name'=>array('type'=>self::TYPE_STRING,'lang'=>true,'validate'=>'isString','required'=>true,'size'=>256),),);public function getFields(){${"G\x4cO\x42\x41L\x53"}["t\x73\x79\x72\x6c\x62\x67"]="\x66\x69el\x64s";parent::validateFields();if(isset($this->id))${${"\x47LO\x42A\x4cS"}["\x74s\x79\x72lbg"]}["i\x64\x5f\x73elle\x72\x74\x79p\x65"]=(int)($this->id);$xppbuwqow="\x66i\x65l\x64s";${${"\x47\x4cO\x42AL\x53"}["\x68\x6dvs\x6b\x6fua\x79l"]}["da\x74\x65\x5fa\x64d"]=pSQL($this->date_add);return${$xppbuwqow};}public function getTranslationsFieldsChild(){if(!parent::validateFieldsLang())return false;return parent::getTranslationsFields(array("\x6e\x61\x6de"));}public static function getSellerTypes($id_lang,$label4zero=null){${"\x47\x4c\x4f\x42A\x4c\x53"}["kr\x79\x73\x6b\x6a\x75\x71"]="\x6cab\x65l4zer\x6f";$feznhcr="i\x64\x5f\x6ca\x6eg";${"\x47\x4cO\x42\x41LS"}["\x78ci\x66\x6cuh\x64\x74\x6a"]="\x6c\x61\x62\x65\x6c4\x7ae\x72\x6f";${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["m\x67jm\x68lbimh"]}=Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS("\n\t\tS\x45L\x45\x43\x54 s.\x60\x69\x64_selle\x72\x74\x79\x70\x65\x60,s\x6c.`\x6e\x61\x6de`\n\t\tFR\x4f\x4d\x20\x60"._DB_PREFIX_."\x73\x65ll\x65r\x74\x79p\x65`\x20s\n\t\t\x4cEFT\x20\x4aOIN \x60"._DB_PREFIX_."\x73ell\x65\x72t\x79p\x65_\x6c\x61\x6e\x67`\x20A\x53 \x73l ON\x20(s\x2e`i\x64_\x73e\x6c\x6ce\x72\x74y\x70e\x60 = s\x6c\x2e`id_\x73\x65\x6c\x6ce\x72\x74yp\x65\x60\x20\x41ND s\x6c.`\x69\x64\x5f\x6c\x61\x6eg`\x20\x3d ".(int)(${$feznhcr}).")\n\t\t\x4f\x52\x44ER\x20\x42Y\x20\x73l\x2enam\x65\n\t\t");if(empty(${${"G\x4cOBA\x4c\x53"}["\x78\x63\x69f\x6c\x75\x68\x64tj"]}))return${${"\x47\x4c\x4fB\x41L\x53"}["\x6d\x67\x6am\x68l\x62i\x6d\x68"]};return array_merge(array(array("i\x64\x5f\x73\x65\x6c\x6cer\x74\x79pe"=>0,"na\x6d\x65"=>${${"G\x4c\x4fB\x41L\x53"}["\x6bry\x73\x6b\x6auq"]})),${${"\x47\x4c\x4fBAL\x53"}["\x6d\x67\x6a\x6d\x68\x6c\x62\x69\x6dh"]});}}
?>