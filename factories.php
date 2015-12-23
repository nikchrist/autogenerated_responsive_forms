<?php
/*factories.php file
*
*
*Author:Nikolaos Christomanos
*
*
*Content:CreateObject class,FormObject function
*FieldObject function
*
*
*Description:Instantiation of form and field  class
*/

/*CreateObject class
*method 1:FormObject
*method 2:FieldObject
*/
class CreateObject
{
/*FormObject method
*param 1 = string method:the method of the form e.g post,get
*param 2 = string url:the file contains the data of the form
*param 3 = string fname:the name of the form
*descreption:Returns a new Form class instance
*/
   public static function FormObject($method,$url,$fname,$formclass)
       {
           return new Form($method,$url,$fname,$formclass);
       }

/*FieldObject method
*param1 = associative array params:an array contains
*the data of a field;
*description:Returns a new Field class instance
*/
   public static function FieldObject($params)
      {
          return new Field($params);
      }

}
//End of factories.php file
?>