<?php 
/**
* Autocomplete Helper
*
* @author  Nik Chankov
* @website http://nik.chankov.net
* @version 1.0.0
*/

class StrictAutocompleteHelper extends AjaxHelper {
   
   // var $helpers =  new Array('Form');
   var $helpers = array('Form','Html','Javascript');
    /**
    * The Main Function for autocomplete
    *
    * @param string $field Name of the database field. Possible usage with Model.
    * @param string $url Url of the Ajax Request. Possible null. Then the Ajax will get the current URL.
    * @param array $options Optional Array. Potions are the same as in the usual text input field.
    * Additional option is to determine autocomplete as ID or not - boolean $options['strict'].
    */
    function autoComplete($field, $url = null, $options = array()){

        $var = '';
        $idField = '';
        $checkField = '';
        $strict = true;
       
        //Get Ajax.Autocomplete in a var /if the variable name is set/
       
        if (isset($options['var'])) {
            $var = 'var ' . $options['var'] . ' = ';
            unset($options['var']);
        }
       
        if (isset($options['strict'])) {
            $strict = $options['strict'];
            unset($options['strict']);
        }
       
        //Equalize the URL if empty to current URL
        if($url === null){
            $url = $this->Html->params['url']['url'];
        }
       
        //Camelize the ID
        if (!isset($options['id'])) {
            $options['id'] = Inflector::camelize(r("/", "_", $field));
        }
       
        //Add id and check fields ids
        $options_id = Inflector::camelize(r("/", "_", $field.'_id'));
        $options_check = Inflector::camelize(r("/", "_", $field.'_check'));
       
        $divOptions = array('id' => $options['id'] . "_autoComplete", 'class' => isset($options['class']) ? $options['class'] : 'auto_complete');
        if (isset($options['div_id'])) {
            $divOptions['id'] = $options['div_id'];
            unset($options['div_id']);
        }

        $htmlOptions = $this->__getHtmlOptions($options);
        $htmlOptions['autocomplete'] = "off";
        if($strict == true){
            $options['afterUpdateElement'] = "function(text, li){\$('".$options_id."').value = li.id;\$('".$options_check."').value = text.value;}";
        }
       
        foreach ($this->autoCompleteOptions as $opt) {
            unset($htmlOptions[$opt]);
        }

        if (isset($options['tokens'])) {
            if (is_array($options['tokens'])) {
                $options['tokens'] = $this->Javascript->object($options['tokens']);
            } else {
                $options['tokens'] = '"' . $options['tokens'] . '"';
            }
        }

        $options = $this->_optionsToString($options, array('paramName', 'indicator'));
        $options = $this->_buildOptions($options, $this->autoCompleteOptions);
       
        //preparing Fields
        if($strict == true){
            $idField    = $this->Form->input($field.'_id', array('label'=>'autocomplete_auto', 'id'=>$options_id, 'type'=>'hidden'));
            $checkField = $this->Form->input($field.'_check', array('label'=>'field check', 'id'=>$options_check, 'type'=>'hidden'));
        }
       
        $oriField   = $this->Form->input($field, $htmlOptions);
       
        //prepare the output
        $return = "";
       
        $return .=
            $oriField.
            $idField.
            $checkField.
            $this->Html->div(null, '', $divOptions) . "\n" .
            $this->Javascript->codeBlock("{$var}new Ajax.Autocompleter('" . $htmlOptions['id']
                . "', '" . $divOptions['id'] . "', '" . $this->Html->url($url) . "', " .
                        $options . ");"). "\n";
           
        if($strict == true){
            $return .= $this->Javascript->codeBlock("
                    Event.observe(\"".$htmlOptions['id']."\", \"blur\", function (event){
                            var element = Event.element(event);
                            if($(element.id).value != $('".$options_check."').value){
                                $(element.id).value = '';
                                $('".$options_id."').value = '';
                                $('".$options_check."').value = '';
                            }
                        }
                    );
                    //Clean the ID and Check if there is change in the Autocomplete Field
                    Event.observe(\"".$htmlOptions['id']."\", \"keyup\", function (event){
                            var element = Event.element(event);
                            if($(element.id).value != $('".$options_check."').value){
                                //$(element.id).value = '';
                                $('".$options_id."').value = '';
                                $('".$options_check."').value = '';
                            }
                        }
                    );
            ");
        }
        return $return;
    }
}
?>