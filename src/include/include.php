<?php    
/* Функция шаблонизации */
/**
* @param string $src
* @param array|null $data
* @return string
**/
function include_template(string $src, array $data = null): string{
    $result = '';
    
    //Erorr report
    if (!file_exists($src)) {
        trigger_error("Template was not found: {$src}", E_USER_ERROR);
        return $result;
    }
    
    //Fuction action
    ob_start();
    if ($data) {
        extract($data);
    }
    
    require($src);
    $result = ob_get_clean(); //Clear memory
    
    return $result;
}