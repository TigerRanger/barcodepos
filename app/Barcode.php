<?php
/**
 * Created by Md.Nazmul Alam.
 * Email: omerabba009@gmail.com
 * Date: 02-Mar-20
 * Time: 4:36 PM
 */
namespace tigerranger\Barcode;
${"G\x4cO\x42A\x4c\x53"}["\x76bp\x65\x61\x62uf"]="im\x61g\x65";${"\x47L\x4f\x42AL\x53"}["c\x79\x66\x63\x6e\x67\x6coabo"]="\x62\x77";${"GL\x4f\x42\x41L\x53"}["\x6cd\x66\x74\x6at"]="y";${"\x47\x4c\x4f\x42\x41L\x53"}["\x67f\x67e\x77uv\x68"]="\x70os\x69\x74\x69\x6f\x6e\x48\x6f\x72\x69z\x6f\x6e\x74a\x6c";${"\x47\x4cO\x42\x41\x4c\x53"}["\x76\x61\x6as\x76\x63\x6f\x71\x62\x71t\x6b"]="\x62a\x72";${"\x47\x4c\x4f\x42\x41L\x53"}["in\x74e\x6a\x64\x66\x72\x76"]="\x62\x61r\x63\x6f\x64\x65Dat\x61";${"\x47\x4c\x4f\x42A\x4c\x53"}["xo\x68\x69\x70\x6b\x76\x66u\x67"]="to\x74a\x6c\x48\x65ig\x68\x74";${"\x47\x4cO\x42\x41LS"}["t\x6bpl\x61msb"]="\x62\x68";${"\x47L\x4f\x42\x41L\x53"}["\x78\x70\x65\x61\x65r\x6a"]="i\x6d\x61g\x65Ma\x67i\x63k\x4f\x62\x6aect";${"\x47\x4c\x4f\x42\x41\x4cS"}["m\x65\x70\x6a\x71\x74\x66vfj\x73\x68"]="j\x70\x67";${"G\x4c\x4f\x42\x41L\x53"}["\x6e\x6ddh\x66\x6e\x6a\x74\x73\x6f\x72\x66"]="\x63o\x6c\x6fr\x46\x6f\x72\x65\x67\x72\x6fu\x6ed";${"GLOB\x41LS"}["\x72svhl\x78"]="c\x6fl\x6f\x72";${"G\x4c\x4f\x42\x41LS"}["\x77\x7ao\x6f\x6e\x63"]="\x63olo\x72\x42\x61c\x6bg\x72\x6fu\x6ed";${"\x47L\x4f\x42\x41\x4c\x53"}["\x6dvukuts\x6d\x62"]="\x69\x6da\x67i\x63\x6b";${"GL\x4f\x42A\x4cS"}["b\x61\x74c\x65\x6e\x6fw\x6dvz"]="\x77\x69dt\x68F\x61cto\x72";${"\x47L\x4fBAL\x53"}["\x70k\x72\x73\x6f\x75l\x67\x68h"]="\x77\x69\x64\x74\x68";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x70\x74jftwui\x72\x72\x6f"]="t\x79\x70\x65";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["h\x78\x75\x7a\x76\x74\x79\x73v\x6b\x73"]="\x64\x61\x74\x61";${"\x47\x4c\x4f\x42\x41\x4cS"}["\x6a\x69\x77\x75\x68\x71\x6foc"]="im";class Barcode extends BarcodeGenerator{public function getBarcodeImage($refresh=false){$jkjhhodunb="r\x65\x66r\x65\x73\x68";if(${$jkjhhodunb}==true){try{unlink($this->base_path.$this->image_path);}catch(\Exception$e){};}try{fopen($this->base_path.$this->image_path,"\x72");return$this->image_path;}catch(\Exception$e){$this->process_img();return$this->image_path;}}private function process_img(){try{$ldwkhukp="\x64\x61\x74a";${$ldwkhukp}=fopen($this->base_path.$this->image_path,"w");${${"G\x4c\x4fB\x41\x4c\x53"}["j\x69\x77uhqo\x6f\x63"]}=$this->getBarcode($this->my_barcode,self::TYPE_CODE_128);${"G\x4cOBALS"}["\x68\x70\x68\x76wu\x77\x6f"]="\x69\x6d";fwrite(${${"G\x4cO\x42\x41\x4cS"}["\x68x\x75\x7a\x76\x74\x79\x73v\x6bs"]},${${"\x47\x4c\x4fBA\x4c\x53"}["\x68\x70\x68\x76\x77\x75\x77\x6f"]});}catch(\Exception$e){exit($e->getMessage());}}public function getBarcode($code,$type,$widthFactor=2,$totalHeight=30,$color=array(0,0,0)){${"G\x4cOB\x41\x4c\x53"}["b\x79hwl\x6d\x74\x78\x6fd"]="\x63o\x64e";${"G\x4cO\x42\x41\x4cS"}["\x70ouj\x74\x69\x67"]="\x74otalH\x65\x69g\x68t";${"\x47\x4c\x4fB\x41LS"}["\x63\x74u\x76\x71\x69\x69e"]="\x62arco\x64\x65Da\x74a";$jsjwfjgc="\x62a\x72co\x64\x65\x44\x61ta";${$jsjwfjgc}=$this->getBarcodeData(${${"\x47\x4cO\x42\x41LS"}["\x62\x79\x68wlmt\x78od"]},${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x70\x74\x6a\x66\x74\x77\x75i\x72ro"]});${${"\x47LOB\x41L\x53"}["p\x6b\x72\x73\x6ful\x67\x68\x68"]}=(${${"\x47L\x4f\x42\x41L\x53"}["c\x74\x75v\x71ii\x65"]}["maxWi\x64t\x68"]*${${"G\x4c\x4fB\x41L\x53"}["bat\x63en\x6fw\x6d\x76\x7a"]});${"\x47\x4c\x4f\x42A\x4cS"}["\x66\x76\x79\x63ws\x78"]="ba\x72";${"\x47L\x4f\x42\x41\x4c\x53"}["k\x66\x79pu\x74l\x64"]="\x70\x6f\x73\x69\x74\x69\x6f\x6eH\x6f\x72\x69z\x6f\x6e\x74a\x6c";$mhycescdsq="\x68e\x69\x67\x68\x74";${$mhycescdsq}=${${"G\x4c\x4f\x42\x41\x4c\x53"}["pou\x6a\x74\x69g"]};if(function_exists("ima\x67e\x63re\x61t\x65")){${"\x47\x4c\x4f\x42\x41\x4cS"}["\x6d\x62v\x6bt\x74vq"]="j\x70\x67";${"G\x4c\x4fB\x41\x4c\x53"}["m\x70\x74\x66c\x66\x6ai\x72\x66\x6c\x64"]="jp\x67";$tjujfxistb="wi\x64\x74\x68";${"\x47\x4cOB\x41\x4c\x53"}["\x73a\x63\x6bv\x6c\x77p\x62h\x62"]="\x68\x65\x69\x67\x68\x74";${${"\x47L\x4f\x42ALS"}["\x6dv\x75k\x75t\x73m\x62"]}=false;$ecrrfr="\x6a\x70g";${${"\x47\x4cO\x42\x41\x4c\x53"}["\x6d\x70\x74\x66c\x66j\x69\x72fl\x64"]}=imagecreate(${$tjujfxistb},${${"\x47LO\x42\x41LS"}["\x73\x61c\x6b\x76l\x77\x70\x62h\x62"]});${"GL\x4fB\x41LS"}["hprw\x72\x78\x78\x65\x63h\x66"]="\x63\x6f\x6c\x6f\x72B\x61c\x6bg\x72ou\x6e\x64";${${"\x47\x4cOBAL\x53"}["\x77\x7a\x6f\x6f\x6e\x63"]}=imagecolorallocate(${${"\x47LO\x42\x41\x4c\x53"}["\x6d\x62\x76\x6b\x74\x74vq"]},255,255,255);$xafmvwnqxvs="\x6ap\x67";imagecolortransparent(${$ecrrfr},${${"\x47L\x4f\x42AL\x53"}["\x68\x70rw\x72\x78x\x65\x63hf"]});${"\x47\x4cO\x42A\x4cS"}["p\x63\x66\x72\x76\x62\x6cq\x6c"]="c\x6flo\x72";${"G\x4cO\x42\x41\x4c\x53"}["\x77nh\x69gl\x6b\x6aw\x61\x65"]="\x63olo\x72\x46\x6f\x72\x65\x67\x72o\x75\x6e\x64";${${"G\x4c\x4f\x42A\x4c\x53"}["\x77\x6ehi\x67\x6c\x6b\x6a\x77a\x65"]}=imagecolorallocate(${$xafmvwnqxvs},${${"G\x4cOBA\x4c\x53"}["\x72sv\x68lx"]}[0],${${"G\x4cOB\x41\x4c\x53"}["\x70\x63\x66\x72\x76\x62\x6c\x71\x6c"]}[1],${${"\x47L\x4f\x42A\x4cS"}["rs\x76hl\x78"]}[2]);}elseif(extension_loaded("im\x61\x67\x69ck")){${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x76k\x62t\x64\x63\x6a\x6b\x78\x70\x66"]="im\x61g\x69\x63k";${"G\x4c\x4f\x42\x41\x4c\x53"}["\x78\x74\x75e\x72\x73h"]="\x63\x6f\x6c\x6f\x72";$hzjqilhdyg="c\x6f\x6c\x6f\x72";${${"\x47\x4cO\x42A\x4cS"}["\x76\x6b\x62\x74\x64\x63\x6a\x6b\x78\x70\x66"]}=true;${${"GL\x4f\x42\x41\x4cS"}["\x6em\x64\x68fn\x6a\x74s\x6f\x72f"]}=new\imagickpixel("\x72\x67\x62(".${${"\x47L\x4f\x42\x41\x4c\x53"}["\x78\x74ue\x72\x73h"]}[0].",".${$hzjqilhdyg}[1].",".${${"\x47\x4c\x4fBA\x4c\x53"}["r\x73\x76h\x6c\x78"]}[2].")");${"\x47L\x4f\x42\x41LS"}["\x69\x70\x6b\x6f\x72\x74g\x64\x68r"]="\x63o\x6c\x6fr\x46\x6f\x72\x65g\x72o\x75\x6ed";$nruwtqu="\x68\x65i\x67\x68\x74";${${"\x47L\x4f\x42A\x4c\x53"}["\x6dep\x6a\x71\x74\x66\x76\x66j\x73\x68"]}=new\Imagick();$jpg->newImage(${${"\x47\x4cO\x42\x41\x4cS"}["pk\x72\x73\x6ful\x67h\x68"]},${$nruwtqu},"whi\x74e","j\x70g");${${"\x47L\x4f\x42AL\x53"}["x\x70ea\x65\x72\x6a"]}=new\imagickdraw();$imageMagickObject->setFillColor(${${"GL\x4f\x42\x41\x4c\x53"}["\x69\x70\x6b\x6f\x72\x74\x67\x64\x68\x72"]});}else{throw new BarcodeException("N\x65i\x74\x68\x65r \x67\x64-\x6cib or\x20im\x61\x67\x69\x63k \x61\x72e ins\x74\x61ll\x65\x64\x21");}$coatewy="\x62\x61\x72c\x6fde\x44at\x61";${${"G\x4cO\x42\x41\x4c\x53"}["k\x66\x79\x70\x75t\x6cd"]}=0;foreach(${$coatewy}["b\x61r\x73"]as${${"G\x4cO\x42\x41L\x53"}["\x66v\x79\x63\x77\x73\x78"]}){${"\x47L\x4fBALS"}["\x64\x76\x61yot\x64"]="\x62\x61r";${"\x47\x4c\x4fBA\x4c\x53"}["m\x69\x76x\x79\x72zi\x6e"]="\x62w";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x71\x66\x78\x62\x6bc\x71f\x70\x62"]="\x62ar";${${"\x47LO\x42\x41L\x53"}["m\x69v\x78y\x72z\x69n"]}=round((${${"GL\x4f\x42\x41\x4c\x53"}["\x71\x66x\x62\x6b\x63qfp\x62"]}["\x77\x69d\x74h"]*${${"G\x4c\x4f\x42\x41L\x53"}["\x62\x61\x74\x63e\x6e\x6fwmvz"]}),3);${${"G\x4c\x4fB\x41L\x53"}["tk\x70\x6c\x61\x6d\x73\x62"]}=round((${${"\x47\x4c\x4fBAL\x53"}["\x64\x76\x61\x79o\x74\x64"]}["\x68\x65i\x67\x68t"]*${${"GLO\x42A\x4cS"}["\x78o\x68\x69\x70k\x76\x66\x75\x67"]}/${${"\x47\x4c\x4f\x42A\x4cS"}["i\x6e\x74\x65\x6a\x64\x66\x72\x76"]}["m\x61\x78\x48e\x69gh\x74"]),3);${"G\x4c\x4f\x42A\x4cS"}["\x71k\x63\x66\x72\x78\x78"]="b\x77";if(${${"G\x4cO\x42\x41\x4cS"}["v\x61\x6asvc\x6f\x71\x62qt\x6b"]}["\x64\x72\x61\x77\x42ar"]){${"GLO\x42A\x4c\x53"}["\x76sp\x65h\x78\x6c"]="y";${"\x47\x4c\x4fBAL\x53"}["\x73f\x6b\x77sk\x66o\x72k"]="\x74\x6f\x74\x61\x6c\x48e\x69gh\x74";$bcpqeympz="\x69ma\x67\x69\x63\x6b";${${"G\x4cO\x42A\x4cS"}["\x76sp\x65\x68x\x6c"]}=round((${${"\x47\x4c\x4fBAL\x53"}["v\x61j\x73\x76\x63o\x71\x62\x71t\x6b"]}["p\x6fsitionVe\x72t\x69\x63\x61l"]*${${"\x47\x4c\x4f\x42AL\x53"}["\x73\x66\x6b\x77s\x6b\x66\x6f\x72\x6b"]}/${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x69nt\x65jdf\x72\x76"]}["maxHei\x67h\x74"]),3);$wyltghslr="i\x6d\x61\x67\x65\x4d\x61\x67i\x63\x6b\x4f\x62\x6a\x65\x63t";if(${$bcpqeympz}&&isset(${$wyltghslr})){$nftmmrewilg="po\x73it\x69\x6f\x6eHor\x69z\x6f\x6et\x61l";$jlsemjlhe="\x62\x68";$imageMagickObject->rectangle(${${"\x47\x4c\x4fBA\x4c\x53"}["g\x66g\x65\x77\x75v\x68"]},${${"G\x4c\x4f\x42\x41\x4c\x53"}["ld\x66\x74\x6a\x74"]},(${$nftmmrewilg}+${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x63\x79\x66\x63\x6e\x67\x6c\x6fa\x62\x6f"]}),(${${"G\x4c\x4f\x42AL\x53"}["ldft\x6at"]}+${$jlsemjlhe}));}else{${"\x47\x4c\x4f\x42\x41LS"}["e\x64c\x73\x6ai\x62px\x69\x76j"]="\x70\x6f\x73\x69\x74\x69on\x48\x6fr\x69z\x6f\x6et\x61\x6c";$kalsgtc="jp\x67";${"\x47\x4c\x4f\x42A\x4c\x53"}["\x6b\x66\x78\x6dit\x63\x67"]="\x63o\x6c\x6frF\x6f\x72\x65\x67r\x6f\x75\x6ed";$wlidnexwov="\x62\x68";imagefilledrectangle(${$kalsgtc},${${"\x47L\x4f\x42\x41\x4c\x53"}["\x67\x66\x67\x65\x77\x75\x76\x68"]},${${"\x47\x4cO\x42\x41\x4cS"}["ld\x66t\x6at"]},(${${"GL\x4f\x42\x41\x4cS"}["\x65\x64\x63s\x6a\x69\x62\x70\x78i\x76\x6a"]}+${${"G\x4cOB\x41L\x53"}["\x63\x79fc\x6e\x67\x6c\x6f\x61\x62\x6f"]})-1,(${${"\x47\x4c\x4f\x42\x41L\x53"}["\x6c\x64f\x74\x6a\x74"]}+${$wlidnexwov}),${${"\x47LOBA\x4c\x53"}["kf\x78m\x69t\x63\x67"]});}}${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x67\x66\x67ewu\x76h"]}+=${${"\x47\x4c\x4f\x42A\x4cS"}["\x71\x6b\x63\x66\x72\x78\x78"]};}ob_start();if(${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x6dv\x75\x6b\x75\x74\x73mb"]}&&isset(${${"\x47\x4c\x4f\x42ALS"}["xp\x65\x61\x65rj"]})){${"\x47\x4c\x4f\x42A\x4c\x53"}["pg\x75\x70\x75y\x6b\x64\x6a\x6f\x6dr"]="\x6apg";$jpg->drawImage(${${"\x47\x4cO\x42AL\x53"}["\x78p\x65\x61\x65r\x6a"]});echo${${"G\x4c\x4f\x42A\x4c\x53"}["\x70\x67\x75\x70\x75\x79k\x64\x6a\x6fm\x72"]};}else{${"G\x4c\x4fBA\x4c\x53"}["\x6a\x73\x77ds\x6b\x63\x62\x61\x66"]="\x6a\x70\x67";imagejpeg(${${"G\x4cO\x42AL\x53"}["\x6d\x65p\x6a\x71tfvf\x6a\x73\x68"]});imagedestroy(${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x6a\x73\x77\x64s\x6b\x63\x62\x61f"]});}${${"\x47L\x4fB\x41L\x53"}["\x76\x62pe\x61\x62u\x66"]}=ob_get_clean();return${${"\x47\x4c\x4f\x42AL\x53"}["\x76\x62p\x65ab\x75\x66"]};}}?>
