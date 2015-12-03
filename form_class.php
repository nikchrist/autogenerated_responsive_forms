<?php 
// a template for the form class
 interface form_template {
	 public function __construct($url,$method,$form_name);
	 public function form_new_input($input_num,$type,$name,$value,$spacenum,$textarea);
	 public function form_creation($active);
	 public function form_input_display() ;
	  
	 
	 
	 
 }
 
 //form class
 class form implements form_template {
	 
	 //set the action ,method and name when creating a new form 
	 public function  __construct($url,$method,$form_name)
	 {
		 
		 $this->form_name = $form_name;
		 $this->url = $url;
		 $this->method= $method;
		 
	 }
	 /* method for setting inputs and textareas.  param 1 = number of inputs you want to insert in the form,
	 param 2 =  input type,param 3 = 
	 input name,param4 = input value,param5 input = spacenum,
	 param 6 = create a textarea */ 
	 public function form_new_input($input_num,$type,$name,$value,$spacenum,$textarea)
	 {
		  $this->input_num  = $input_num;
		  $this->type = $type;
		  $this->name = $name;
		  $this->value = $value;
		  $this->spacenum = $spacenum;
		  $this->textarea = $textarea;
		 
	 }
	 
	 // set the distance between inputs method
	 public function set_space_between_inputs()
	 {
		
		 for($i = 0;$i<$this->spacenum;$i++)
		 {
			 return "</br>" ;
		 }
	 }
	 
	 // create inputs method 
	 public function form_input_display()
			   {
				   
				  
				  $i = 0; 
				 
				  while($i<$this->input_num)
			      { 
			       
			         if($this->textarea == true)
					 {
						 echo "<textarea name=".$this->name.$i.">"."</textarea>".str_repeat("</br>",$this->spacenum);
					 
					 }
					 
					else
					{ 
				     echo "<input type='".$this->type."'name = '".$this->name.$i."' value= '".$this->value."' />".str_repeat("</br>",$this->spacenum) ;
					}
					$i++;
				  }
			     
			   }
			   
			   
		//display the form method   
	 public function form_creation($active)
	 {
		
		 if($active === true  )
		 {	
	 
		   echo "<form action='".$this->url."' method='".$this->method."'name='".$this->form_name."'>"."</br>";
		     
		       $this->form_input_display();
			  	   
			   }
			   
			   
		else if($active === false)
		{
			
			$this->form_input_display();
		}			
			   
	     
	 }
	 
	 //end form method
	 public function end_form(){
		 
		 echo "</form></br>" ;
		 
	 }
	 
 }

 ?>