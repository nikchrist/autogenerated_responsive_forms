<?php
/*File field_strategy.php
*
*
Author:Nikolaos Christomanos
*
*
*Content:Classes StrategyContext
*StrategyText,StrategyRadioButton,
*StrategyCheckBox,StrategyTextarea,
*StrategySubmit,StrategySelect
*
*
*description:This file contains the
*strategy required for each type of field
*/

/*StrategyContext class
*attribute = private strategy:contains the returned strategies
*method 1 = public construct
*method 2 = public ShowField
*/
class StrategyContext
{
    private $strategy = NULL;
/*method constuct
*param 1 = string strategy_id
*description:give the type of strategy as parameter
and store strategy into strategy variable
*/
    public function __construct($strategy_id){
        switch($strategy_id){

            case 'text':
              $this->strategy = new StrategyText();
            break;

            case 'radiobutton':
              $this->strategy = new StrategyRadioButton();
            break;

            case 'checkbox':
              $this->strategy = new StrategyCheckBox();
            break;

            case 'textarea':
              $this->strategy = new StrategyTextarea();
            break;

            case 'option':
              $this->strategy = new StrategySelect();
            break;

            case 'submit':
              $this->strategy = new StrategySubmit();
            break;
        }
    }
/*method ShowField
*param 1 = (object) field
*description:shows the html of a field
*/
    public function Showfield($field){
        return $this->strategy->showFieldHtml($field);
    }
}
//Interface of strategies
interface StrategyInterface
{
    public function ShowFieldHtml($field);
}
/*StrategyText class
*method = public ShowFieldHtml
*/
class StrategyText
{
/*ShowFieldHtml method
*param = (object) field
*description:shows the html of the text field
*/
    public function ShowFieldHtml($field){
          ?>
          <div class=<?php echo $field->getDivclass(); ?>>
           <div class="row">
            <div class=<?php echo $field->getDivSizeclass() ?>>
             <label class=<?php echo $field->getLabelclass(); ?>
             for=<?php echo $field->getName(); ?>
             ><?php echo $field->getLabel(); ?>
             </label>
             <input type="<?php echo $field->getType();
             ?>"name="<?php echo $field->getName();
             ?>"value="<?php echo $field->getValue();
             ?>"class="<?php echo $field->getInputclass();
             ?>"placeholder="<?php echo $field->getPlaceholder();
             ?>" />
            </div>
           </div>
          </div>
          <?php
            $field->SetSpace();
    }
}
/*StrategyText class
*method = public ShowFieldHtml
*/
class StrategyRadioButton
{
/*ShowFieldHtml method
*param = (object) field
*description:shows the html of the radiobutton field
*/
    public function ShowFieldHtml($field){
        $count = 0;
        ?><label>
        <?php echo $field->getLabel();
        ?></label><?php
      Do
        {
        if($field->getDivclass() !=NULL )
        {?>

        <div class='<?php echo $field->getDivclass(); ?>'><br>
        <?php }
        else { ?>
         <label class='<?php echo $field->getLabelclass(); ?>
         <?php } ?>
         <input type='<?php echo $field->getType();
         ?>'name='<?php echo $field->getName();
         ?>'><?php  echo $field->params['text'][$count];
         $count++ ; ?>
         </label>

        </div><?php
        }

      while($count<$field->getradionum());
         $field->SetSpace();
    }

}
/*StrategyCheckBox class
*method = public ShowFieldHtml
*/
class StrategyCheckBox
{
/*ShowFieldHtml method
*param = (object) field
*description:shows the html of the checkbox field
*/
    public function ShowFieldHtml($field){
        ?><label><?php echo $field->getLabel();?></label>
        <?php
        $count = 0;
      Do
      {
        if($field->getDivclass() !=NULL )
        {?>

            <div class='<?php echo $field->getDivclass(); ?>'><br>
        <?php }
        else if($field->getDivclass() ==NULL)
         {?>
            <label class='<?php echo $field->getLabelclass(); ?>'>
             <?php } ?>
            <input type='<?php echo $field->getType();
            ?>'name='<?php echo $field->getName();
            ?>'/><?php echo $field->params['text'][$count] ?>
            </label>
            </div>
            <?php
            $count++;
      }

       while($count<$field->getCheckboxnum());
             $field->SetSpace();
    }
}
/*StrategyTextarea class
*method = public ShowFieldHtml
*/
class StrategyTextarea
{
/*ShowFieldHtml method
*param = (object) field
*description:shows the html of the textarea field
*/
    public function ShowFieldHtml($field){
        ?><div class="<?php echo $field->getDivclass(); ?>">
           <div class="row">
            <div class=<?php echo $field->getDivSizeclass() ?>>
             <label class=<?php echo $field->getLabelclass(); ?>
             for="<?php echo $field->getName();
             ?>"><?php echo $field->getLabel();
             ?></label>
             <textarea name="<?php echo $field->getName();
             ?>"value="<?php echo $field->getValue();
             ?>"class="<?php  echo $field->getInputclass();
             ?>"placeholder="<?php echo $field->getPlaceholder(); ?>">
             </textarea>
            </div>
           </div>
          </div>
          <?php
          $field->SetSpace();
    }
}
/*StrategySubmit class
*method = public ShowFieldHtml
*/
class StrategySubmit
{
/*ShowFieldHtml method
*param = (object) field
*description:shows the html of the submit field
*/
   public function ShowFieldHtml($field){
       ?><input type="submit"
         value="<?php echo $field->getValue();
         ?>"name="<?php echo $field->getName();
         ?>"class='<?php  echo $field->getInputclass(); ?>'/><?php
         $field->SetSpace();
   }
}
/*StrategySelect class
*method = public ShowFieldHtml
*/
class StrategySelect
{
/*ShowFieldHtml method
*param = (object) field
*description:shows the html of the select field
*/
    public function ShowFieldHtml($field){
       ?><div class=<?php echo $field->getDivclass(); ?>>
          <div class="row">
           <div class=<?php echo $field->getDivSizeclass() ?>>
            <label class=<?php echo $field->getLabelclass(); ?>
            for=<?php echo $field->getName();?>>
            <?php echo $field->getLabel(); ?>
            </label>
            <select <?php echo  
            $field->params['multiple'] === true?"multiple":""; ?>
            class=<?php echo $field->getInputclass(); ?>
            name=<?php echo $field->getName();?>>
           <?php
         for($count = 0;$count<$field->getSelectnum();$count++)
         {
           ?>
            <option value=<?php echo
            $field->params['text'][$count]?>>
            <?php echo $field->params['text'][$count];?></option>
            <?php }
            ?>
            </select>
           </div>
          </div>
         </div>
          <?php
     }
}

//End of file
?>