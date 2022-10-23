What is meant by ‘passing the variable by value and reference' in PHP?
--->When the variable is passed as a reference then it is called pass variable by reference. 

Here, both the main variable and the passed variable share the same memory location and & is used for reference.

So, if one variable changes then the other will also change.

Sample code:

function test(&$n) {
    $n=$n+10;
}
$m=5;
test($m);
echo $m;