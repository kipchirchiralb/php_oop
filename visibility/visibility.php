<?php 
// visisbility - public(accessible anywhere in the code), protected(accessible in the declaring class and from a a subclass), private(accessible only in declaring class)
require_once 'BaseClass.php';
require_once 'SubClass.php';

$baseObj = new BaseClass();
$subClassObj = new SubClass();

// print $baseObj->publicProp;
// print $subClassObj->publicProp;

// print $subClassObj->getProtectedProp() . '<br>';
print $subClassObj->getParentProtectedProp()  . '<br>';
print $baseObj -> getPrivateProp();
// print $subClassObj -> getParentPrivateProp();
print $subClassObj->getParentProtectedProp() . '<br>';