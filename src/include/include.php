<?php    
/* Функция шаблонизации */
/*
* @param string $src
* @param array|null $data
* @return string
*/
//Include func
function include_template(string $src, array $data = null): string{
    $result = '';
    
    //Erorr report
    if (!file_exists($src)) {
        trigger_error("Template was not found: {$src}", E_USER_ERROR);
        return $result;
    }
    
    //Fuction action
    ob_start();
    if ($data){
        extract($data);
    }
    
    require($src);
    $result = ob_get_clean(); //Clear memory
    
    return $result;
};
//Render func
function render_page($data){
    $include_result = include_template('src/templates/layout.php', $data);
    print($include_result);
};

function render_back_page($data){
    $include_result = include_template('../src/templates/admin.php', $data);
    print($include_result);
};
