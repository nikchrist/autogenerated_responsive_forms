<?php
/*File field_class.php
*
*
*Author:Nikolaos Christomanos
*
*
*Content:Field
*Description:Methods that returns
*the field data and strategy
*/

/*Field class
*methods = public:
*construct,getName,getType
*getLabel,getRadionum,getCheckboxnum,
*getSpace,getValue,getSelectnum,
*getInputclass,getPlaceholder,
*getDivclass,getLabelclass,
*getDivSizeclass,ChooseStrategy
*/
class Field
{
/*method public  function __construct
*param 1:params = asociative array
*description:sets the values of params array keys
*params keys:string name,string value,
*string label,string text,integer radionum,
*integer checkboxnum,integer space,
*string type,integer selectnum,
*string inputclass,string placeholder,
*boolean multiple,string divclass,
*string labelclass,string dicsizeclass
*/
    public function __construct($params){
        $this->params['name'] = $params['name'] ;
        $this->params['value'] = $params['value'];
        $this->params['label'] = $params['label'];
        $this->params['text'] = $params['text'];
        $this->params['radionum'] = $params['radionum'];
        $this->params['checkboxnum'] = $params['checkboxnum'];
        $this->params['space'] = $params['space'];
        $this->params['type'] = $params['type'];
        $this->params['selectnum'] = $params['selectnum'];
        $this->params['inputclass'] = $params['inputclass'];
        $this->params['placeholder']=$params['placeholder'];
        $this->params['multiple'] = $params['multiple'];
        $this->params['divclass'] = $params['divclass'];
        $this->params['labelclass'] = $params['labelclass'];
        $this->params['divsizeclass'] = $params['divsizeclass'];
    }
/*getType function
*description:returns params['type'] value
*/
    public function getType(){
        return $this->params['type'];
    }
/*getName function
*description:returns params['name'] value
*/
    public function getName(){
        return $this->params['name'];
    }
/*getValue function
*description:returns params['value'] value
*/
    public function getValue(){
        return $this->params['value'];
    }
/*getLabel function
*description:returns params['label'] value
*/
    public function getLabel(){
        return $this->params['label'];
    }
/*getRadionum function
*description:returns params['radionum'] value
*/
    public function getRadionum(){
        return $this->params['radionum'];
   }
/*getCheckboxnum function
*description:returns params['checkboxnum'] value
*/
    public function getCheckboxnum(){
        return $this->params['checkboxnum'];
    }
/*getSpace function
*description:returns params['space'] value
*/
    public function getSpace(){
        return $this->params['space'];
   }
/*getSelectnum function
*description:returns params['selectnum'] value
*/
    public function getSelectnum(){
        return $this->params['selectnum'];
    }
/*getInputclassfunction
*description:returns params['inputclass'] value
*/
    public function getInputclass(){
        return $this->params['inputclass'];
    }
/*getPlaceholder function
*description:returns params['placeholder'] value
*/
    public function getPlaceholder(){
        return $this->params['placeholder'];
    }
/*getDivclass function
*description:returns params['divclass'] value
*/
    public function getDivclass(){
        return $this->params['divclass'];
   }
/* getLabelclass function
*description:returns params['labelclass'] value
*/
    public function getLabelclass(){
        return $this->params['labelclass'];
   }
/*getDivSizeclass function
*description:returns params['divsizeclass'] value
*/
    public function getDivSizeclass(){
        return $this->params['divsizeclass'];
   }
/*public function ChooseStrategy
*param = string strategy_id
*description:returns a new instance of StrategyContext
*/
    public function ChooseStrategy($strategy_id){
        return new StrategyContext($strategy_id);
    }
/*public SetSpace function
*sets thes space between fields
*/
    public function SetSpace(){
        for($count=0;$count<$this->getSpace();$count++)
   	    {
          ?> </br><?php
        }
    }
}
//End of file
?>