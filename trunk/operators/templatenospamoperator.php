<?php

include_once("extension/nmnospam/classes/nospam.php");

class TemplateNoSpamOperator
{
    /*!
      constructor - does nothing
    */
    function TemplateNoSpamOperator()
    {
    }

    /*!
     
eturn an array with the template operator name.
    */
 	function operatorList()
    {
        return array( 'nospam' );
    }
    /*!
     \return true to tell the template engine that the parameter list exists per operator type,
             this is needed for operator classes that have multiple operators.
    */
    function namedParameterPerOperator()
    {
        return true;
    }    /*!
     See eZTemplateOperator::namedParameterList
    */
	function namedParameterList()
    {
        return array( 'nospam' => array( 'type' 			=> array(  'type' => 'string',
                                                                       'required' => false,
                                                                       'default' => 'normal' ) ) );
    }
    /*!
     Eksekverer PHP-funksjonen for operatoren cleanup og modifiserer \a $operatorValue.
    */
    function modify( &$tpl, &$operatorName, &$operatorParameters, &$rootNamespace, &$currentNamespace, &$operatorValue, &$namedParameters )
    {
		// get params
        $mail			= $operatorValue;
		$nospam			= new nospam();
		$new_mail		= $nospam->formatemail( $mail );
		$operatorValue	= $new_mail;
    }
}

?>
