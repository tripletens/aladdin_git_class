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

    $testClassObject = new TestClass();

    $anothertestClassObject = new AnotherTestClass();
?>