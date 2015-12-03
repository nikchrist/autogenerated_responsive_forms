<?php require_once('form_class.php') ?>
<!DOCTYPE html>
<html>

<head>
</title></title>
</head>

<body>

<?php //create a new form  object

      $form1 = new form('form.php','post','form-1');
	  
	  /*set the  inputs of the form  passing  4 parameters to method form_new_input.1st param the number of inputs,
	    2nd param the input type,3rd param the input name 4th param
		the input value  5th param number of spaces between inputs and 6th param input a textarea*/
      $form1->form_new_input(3,'text','txt','',2,'');
	  
	  //create the form if param = true
	  $form1->form_creation(true);
	  
	  //add a  submit button
	  $form1->form_new_input(1,'submit','','submit',0,'');
	  
	  //update the form if param = false
	  $form1->form_creation(false);
	  
	  //end form
	  $form1->end_form();
	  
	  
	  
	  
	  //create a second form object
	  
	  $form2 = new form('form.php','post','form-2');
	  
	  //set inputs
	  $form2->form_new_input(1,'text','name','',2,'');
	  
	  $form2->form_creation(true);
	  
	  //add  a submit button
	  $form2->form_new_input(1,'submit','','submit',0,'');
	 
	  $form2->form_creation(false);
	  
	  //end form
	  $form2->end_form();
	  
	  
	  
	  //create a form with textarea
	  $form3 = new form('form.php','post','form-3');
	  
	  $form3->form_new_input(1,'','txtarea','',2,true);
	  $form3->form_creation(true);
	  $form3->form_new_input(1,'submit','','submit',2,false);
	  $form3->form_creation(false);
	  $form3->end_form();
	  
	  
	  
	  
	  
	  //print 1st result of form1 
	  
	      if(isset($_POST['txt0']) and isset($_POST['txt1'])  and isset($_POST['txt2']) )
		  {
			  echo $_POST['txt0'] ."</br>";
			  echo $_POST['txt1'] ."</br>";
			  echo $_POST['txt2'] ."</br>";
			  
		  }
		 else 
		 {
			 echo "please fill in the form1." ;
		 }			 
	  //print result of form2

          isset($_POST['name0'])? print($_POST['name0'])."</br>" : print('field of form2 is empty.')."</br>";	  
		  
	 //print result of form3
         isset($_POST['txtarea0'])? print($_POST['txtarea0'])."</br>" : print('field of form3 is empty.')."</br>" ;	 
	   
    		 
	 
	  
      ?>
</body>

</html>