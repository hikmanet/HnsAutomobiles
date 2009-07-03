<?php
/**
* Autocomplete Helper
*
* @author  Nik Chankov
* @website http://nik.chankov.net
* @version 1.0.0
*/

uses('view/helpers/Form');
class DatePickerHelper extends FormHelper {
   
    var $format = '%Y-%m-%d';
   
    /**
     *Setup the format if exist in Configure class
     */
    function _setup(){
        $format = Configure::read('DatePicker.format');
        if($format != null){
            $this->format = $format;
        }
    }
   
    /**
    * The Main Function - picker
    *
    * @param string $field Name of the database field. Possible usage with Model.
    * @param array $options Optional Array. Options are the same as in the usual text input field.
    */    
    function picker($fieldName, $options = array()) {
        $this->_setup();
        $this->setEntity($fieldName);
        $htmlAttributes = $this->domId($options);        
        $divOptions['class'] = 'date';
        $options['type'] = 'text';
        $options['div']['class'] = 'date';
        $options['after'] = $this->Html->link($this->Html->image('../js/jscalendar/img.gif'), '#', array('onClick'=>"return showCalendar('".$htmlAttributes['id']."', '".$this->format."'); return false;"), null, false);
       
        $output = $this->input($fieldName, $options);
       
        return $output;
    }
   
    function flat($fieldName, $options = array()){
        $this->_setup();
        $this->setEntity($fieldName);
        $htmlAttributes = $this->domId($options);        
        $divOptions['class'] = 'date';
        $options['type'] = 'hidden';
        $options['div']['class'] = 'date';
        $hoder = '<div id="'.$htmlAttributes['id'].'_cal'.'"></div><script type="text/javascript">showFlatCalendar("'.$htmlAttributes['id'].'", "'.$htmlAttributes['id'].'_cal'.'", "'.$this->format.'", function(cal, date){document.getElementById(\''.$htmlAttributes['id'].''.'\').value = date});</script>';
        $output = $this->input($fieldName, $options).$hoder;
       
        return $output;
    }
}
?>