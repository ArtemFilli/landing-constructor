<?
    // add dir

    $dirTitle = date("is_") . rand(0, 1000);
    $dirKit = "UI_kit";

    function copy_dir($src, $drc)
    {
        $dir = opendir($src);
        
        if (!is_dir($drc)) {
            mkdir($drc, 0777, true);
        }
     
        while (false !== ($file = readdir($dir))) {
            if ($file != '.' && $file != '..') {
                if (is_dir($src . '/' . $file)) {
                    copy_dir($src . '/' . $file, $drc . '/' . $file);
                } else {
                    copy($src . '/' . $file, $drc . '/' . $file);
                }
            }
        }
     
        closedir($dir);
    }

    copy_dir('./' . $dirKit, $dirTitle);

    // build
    $file = fopen('./'. $dirTitle .'/index.html', 'r+');
    $HtmlData = file_get_contents('./layout/header.html');
    $HtmlData = $HtmlData. "<body class='body-constructor " . $_POST['Theme'] . "'>";
    foreach ($_POST["Data"] as $val){
        $HtmlData = $HtmlData . $val;
    }
    $HtmlData = $HtmlData . file_get_contents('./layout/footer.html');
    fwrite($file, $HtmlData);
    fclose($file);

    // zip 
    function addFileRecursion($zip, $dir, $start = '')
    {
        if (empty($start)) {
            $start = $dir;
        }
        
        if ($objs = glob($dir . '/*')) {
            foreach($objs as $obj) { 
                if (is_dir($obj)) {
                    addFileRecursion($zip, $obj, $start);
                } else {
                    $zip->addFile($obj, str_replace(dirname($start) . '/', '', $obj));
                }
            }
        }
    }
     
    $zip = new ZipArchive();
    $zip->open(__DIR__ . '/'. $dirTitle .'.zip', ZipArchive::CREATE|ZipArchive::OVERWRITE);
    addFileRecursion($zip, './' . $dirTitle);
    $zip->close();
    
    function remove_dir($dir){
        if ($objs = glob($dir . '/*')) {
            foreach($objs as $obj) {
                is_dir($obj) ? remove_dir($obj) : unlink($obj);
            }
        }
        rmdir($dir);
    }
        
    $dir = './' . $dirTitle;
    remove_dir($dir);

    echo $dirTitle;
?>