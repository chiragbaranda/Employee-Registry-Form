 <?php
$validateData = array();

if ($_REQUEST['act'] == 'validateName') {
	
    if (empty($_REQUEST['name'])) {
        $validateData['err'] = 0;
        $validateData['msg'] = "no input";
    } else if (!preg_match("/^[a-zA-Z\s]+$/", $_REQUEST['name'])) {
        $validateData['err'] = 1;
        $validateData['msg'] = "no match regex";
    } else if (strlen($_REQUEST['name']) < 5 || strlen($_REQUEST['name']) > 20) {
        $validateData['err'] = 2;
        $validateData['msg'] = "no match length";
    }
}



if ($_REQUEST['act'] == 'validateID') {
	
    if (empty($_REQUEST['id'])) {
        $validateData['err'] = 0;
        $validateData['msg'] = "no input";
    } else if (!preg_match("/^[0-9]+$/", $_REQUEST['id'])) {
        $validateData['err'] = 1;
        $validateData['msg'] = "no match regex";
    } else if (strlen($_REQUEST['id']) != 9 ) {
        $validateData['err'] = 2;
        $validateData['msg'] = "no match length";
    }
}


if ($_REQUEST['act'] == 'validateDept') {
	
    if (empty($_REQUEST['dept'])) {
        $validateData['err'] = 0;
        $validateData['msg'] = "no input";
    }else if ($_REQUEST['dept'] == "Advertising") {
        $validateData['err'] = 1;
        $validateData['msg'] = "Advertising";
    }else if ($_REQUEST['dept'] == "Sales" ) {
        $validateData['err'] = 2;
        $validateData['msg'] = "sales";
    }
}

if ($_REQUEST['act'] == 'validateBonus') {
	
    if (empty($_REQUEST['bonus'])) {
        $validateData['err'] = 0;
        $validateData['msg'] = "no input";
    } else if (!preg_match("/^[0-9]+$/", $_REQUEST['bonus'])) {
        $validateData['err'] = 1;
        $validateData['msg'] = " Bonus must only contain digits.";
    }
}

echo json_encode($validateData);

?>
