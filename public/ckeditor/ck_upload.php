<?php
// Yüklenen resim dosyalarının nereye kaydedileceği
$upload_dir = array(
    'img'=> '/../haber/',
);

// Kabul edilen dosya boyutları
$imgset = array(
    'maxsize' => 4000,
    'maxwidth' => 1920,
    'maxheight' => 1080,
    'minwidth' => 10,
    'minheight' => 10,
    'type' => array('bmp', 'gif', 'jpg', 'jpeg', 'png'),
);

// Eğer 0 ise dosyanın üzerine yazılır
define('RENAME_F', 1);

/**
 * Dosya adını Ayarla
 * Eğer dosya var ise RENAME_F 1 olarak ayarla, yoksa  "img_name_1"
 *
 *
 */
function setFName($p, $fn, $ex, $i){
    if(RENAME_F ==1 && file_exists($p .$fn .$ex)){
        return setFName($p, F_NAME .'_'. ($i +1), $ex, ($i +1));
    }else{
        return $fn .$ex;
    }
}

$re = '';
if(isset($_FILES['upload']) && strlen($_FILES['upload']['name']) > 1) {

    define('F_NAME', preg_replace('/\.(.+?)$/i', '', basename($_FILES['upload']['name'])));

    // Dosya adını uzantı belirtmeden alıyoruz
    $sepext = explode('.', strtolower($_FILES['upload']['name']));
    $type = end($sepext);    /** gets extension **/

    // Upload directory
    $upload_dir = in_array($type, $imgset['type']) ? $upload_dir['img'] : $upload_dir['audio'];
    $upload_dir = trim($upload_dir, '/') .'/';

    // Dosya türünü doğrula
    if(in_array($type, $imgset['type'])){
        // Resim yükseklik ve genişlik ayarı
        list($width, $height) = getimagesize($_FILES['upload']['tmp_name']);

        if(isset($width) && isset($height)) {
            if($width > $imgset['maxwidth'] || $height > $imgset['maxheight']){
                $re .= '\\n Width x Height = '. $width .' x '. $height .' \\n İzin verilen maksimum Yükseklik ve Genişlik: '. $imgset['maxwidth']. ' x '. $imgset['maxheight'];
            }

            if($width < $imgset['minwidth'] || $height < $imgset['minheight']){
                $re .= '\\n Width x Height = '. $width .' x '. $height .'\\n İzin verilen maksimum Yükseklik ve Genişlik: '. $imgset['minwidth']. ' x '. $imgset['minheight'];
            }

            if($_FILES['upload']['size'] > $imgset['maxsize']*1000){
                $re .= '\\n İzin verilen dosya boyutu: '. $imgset['maxsize']. ' KB.';
            }
        }
    }else{
        $re .= 'The file: '. $_FILES['upload']['name']. ' Yüklemeye Çalıştığınız Dosya Desteklenmiyor.';
    }

    // Dosya Yükleme yolu
    $f_name = setFName($_SERVER['DOCUMENT_ROOT'] .'/'. $upload_dir, F_NAME, ".$type", 0);
    $uploadpath = $upload_dir . $f_name;

    // Hata yok ise Sunucuya Dosyayı Yükleyin Var ise Uyarıyı Ekrana yazın
    if($re == ''){
        if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadpath)) {
            $CKEditorFuncNum = $_GET['CKEditorFuncNum'];
            $url = 'http://mehmetkucukcelebi.com.tr/upload/'. $upload_dir . $f_name;
            $msg = F_NAME .'.'. $type .' Başarıyla Yüklendi: \\n- Dosya Boyutu: '. number_format($_FILES['upload']['size']/1024, 2, '.', '') .' KB';
            $re = in_array($type, $imgset['type']) ? "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>":'<script>var cke_ob = window.parent.CKEDITOR; for(var ckid in cke_ob.instances) { if(cke_ob.instances[ckid].focusManager.hasFocus) break;} cke_ob.instances[ckid].insertHtml(\' \', \'unfiltered_html\'); alert("'. $msg .'"); var dialog = cke_ob.dialog.getCurrent();dialog.hide();</script>';
        }else{
            $re = '<script>alert("Bu Dosya Doğru Dizin Olmadığı Veya Disk Doluğu Olduğu için yüklenemiyor!")</script>';
        }
    }else{
        $re = '<script>alert("'. $re .'")</script>';
    }
}

// HTML Çıkıtısı
@header('Content-type: text/html; charset=utf-8');
echo $re;
