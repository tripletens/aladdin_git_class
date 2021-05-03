<?php 
    class TestClass {
        function __construct(){
            echo "TestClass";
        }
    }

    
    class AnotherTestClass {
        function __construct()
        {
            echo "AnotherTestClass";
        }
    }

    // create an object of Test Class 
    $testClassObject = new TestClass();
    // create an object of AnotherTest Class
    $anothertestClassObject = new AnotherTestClass();
    
?>