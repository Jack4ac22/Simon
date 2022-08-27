<?php

/*
    interfaces 
    
    it cantains only static proprties and abstracct methods.
    
    it can be used when there are commone things but they are not related through an ancestor class. 
    
    onr example would be similiar to abstract method, where all the objects will be doing the same thing.
    
    interfaces keep people on trac, that means that it is a rule that all the objects that must have.

    interfaces are not unique, so the objects can have multiple interfaces.

    best practice is to use capital letter prefixed with "I" and sjhould have the same name of the interface such as IExample.

*/

interface Isit
{
    function sit();
}

// if I want to impliment Interface to a class that is extended from another class, then 

/* 
    abstract class vs interfaces

    abstract class 
*/