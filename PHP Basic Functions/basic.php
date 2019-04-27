php
class Hallo { 
private $name = ;
private $haus = ;

function __construct($name, $haus) {
     $this-name = $name;
     $this-haus = $haus;
}

function call() { 
    print Hallo $this-name; 
    print Hallo $this-haus; 
} 
} 

$hallo1 = new Hallo(Hans, Haus1);
$hallo2 = new Hallo(Georg, Haus2);

$hallo2-call();
$hallo1-call();