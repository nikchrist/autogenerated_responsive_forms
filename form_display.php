<?php
/*File form_display.php
*
*
*Author:Nikolaos Christomanos
*
*
*Description:Creation form and field  objects
in order to create the form
*/

//Report all errors except notices
error_reporting(E_ALL &~ E_NOTICE);
require_once('factories.php');
require_once('form_class.php');
require_once('field_class.php');
require_once('field_strategy.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--Insert bootstrap css for forms from https://maxcdn.bootstrapcdn.com -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<title>Only PHP Responsive Forms</title>
</head>

<body>
<?php
//Create a form Object
$form = CreateObject::FormObject('post','','form-1','');
//Use OpenForm method of Form class
$form->OpenForm();
//Create a  text type field Object and give the data of the field
$field = CreateObject::FieldObject(['type'=>"text",
'name'=>"txt",
'label'=>"First Name",
'inputclass'=>"form-control",
'placeholder'=>"enter your name here",
'divclass'=>"form-group",
'divsizeclass'=>"col-md-2"]);
//Choose the strategy of the field
$field->ChooseStrategy('text')->Showfield($field);

//Email type field
$field = CreateObject::FieldObject(['type'=>"email",
'name'=>"email",
'label'=>"Email",
'inputclass'=>"form-control",
'placeholder'=>"enter your email here",
'divclass'=>"form-group",
'divsizeclass'=>"col-md-2"]);
$field->ChooseStrategy('text')->Showfield($field);

//Password type field
$field = CreateObject::FieldObject(['type'=>"password",
'name'=>"pass",
'label'=>"Password",
'inputclass'=>"form-control",
'placeholder'=>"enter your password here",
'divclass'=>"form-group",
'divsizeclass'=>"col-md-2"]);
$field->ChooseStrategy('text')->Showfield($field);

//Textarea type field
$field = CreateObject::FieldObject(['name'=>"comments",
'label'=>"Comments",
'inputclass'=>"form-control",
'placeholder'=>"enter your comments here",
'divclass'=>"form-group",
'divsizeclass'=>"col-md-3"]);
$field->ChooseStrategy('textarea')->Showfield($field);

//File Input field
$field = CreateObject::FieldObject(['type'=>"file",
'name'=>"file-input",
'label'=>"File Input",
'inputclass'=>"form-control-file",
'divclass'=>"form-group"]);
$field->ChooseStrategy('text')->Showfield($field);

//Select field
$field = CreateObject::FieldObject(['name'=>"select",
'label'=>"List",'text'=>
["drop1","drop2","drop3"],
'selectnum'=>3,
'inputclass'=>"form-control"
,'multiple'=>false,
'divclass'=>"form-group",
'divsizeclass'=>"col-md-2"]);
$field->ChooseStrategy('option')->Showfield($field);

//Checkbox type field
$field = CreateObject::FieldObject(['label'=>"Check please",
'name'=>"check",'text'=>["check me","no check me"],
'type'=>"checkbox" ,'checkboxnum'=>2,
'labelclass'=>"checkbox-inline",
'space'=>3
]);
$field->ChooseStrategy('checkbox')->Showfield($field);

//Radiobutton type field
$field = CreateObject::FieldObject(['name'=>"radio",
'label'=>"RadioButtons",
'text'=>
["num1","num2","num3"],
'radionum'=>3,'type'=>"radio",
'divclass'=>"form-group"]);
$field->ChooseStrategy('radiobutton')->Showfield($field);

//Submit field
$field = CreateObject::FieldObject(['type'=>"submit",
'name'=>"submit",
'value'=>"submit",
'inputclass'=>"btn btn-primary"]);
$field->ChooseStrategy('submit')->Showfield($field);



//Close the form
$form->CloseForm();
?>
</body>
</html>
<!--End of file-->