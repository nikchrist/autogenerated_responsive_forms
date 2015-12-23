<?php
/*file form_class.php
*
*
*Author:Nikolaos Christomanos
*
*This file includes
*FormFactory Class
*Form class
*/

/*FormFactory class
*method:CreateForm
*/

/*Form Class
*method 1 = public construct
*method 2 = public OpenForm
*method 3 = public CloseForm
*/
class Form
{
/*Method construct
*Constructor of Form class
*Sets the values of method,url,fname,formclass
*Every time the Form class is called
*/
    public function __construct($method,$url,$fname,$formclass){
        $this->method = $method;
        $this->url = $url;
        $this->fname = $fname;
        $this->formclass = $formclass;

    }
/*Method OpenForm
*The html code for opening a form
*/
    public function OpenForm(){
        ?><form role="form"
        class='<?php echo $this->formclass; ?>'
        action ='<?php echo $this->url; ?>'
        method ='<?php echo $this->method; ?>'
        name='<?php  echo $this->fname ?>'
        ><?php
    }
/*Method CloseForm
*The html code for closing a form
*/
    public function CloseForm(){
      ?></form></br><?php
    }
}
//End of form_class.php file
?>