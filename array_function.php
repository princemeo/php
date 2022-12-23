<?php
# count function use for arrays count 
$name = ['prince','rahul','monu','aman',"sahil"];
$age=[ 20,33,43,54,23];
print_r(count($name)); 
echo '<br>' ;
#implode use for conversion string to arrys
print_r(implode(' =>, ',$name));
echo '<br>';

#explode use for string to arrys
$name_ex = implode("?",$name);
echo '<pre>';
print_r(explode('?',$name_ex));
echo '</pre>';
echo '<pre>';
# range function print 1to 10 number as a arrays and a to z also;
print_r(range('a','z'));
echo '</pre>';
echo '<pre>';
# arrays slice function use for slice the arrays
print_r(array_slice($name,3,4));
echo '</pre>';

echo '<pre>';
# arrays chunk divide 2 arrays 
print_r(array_chunk($name,2));
echo '</pre>';
# arrays merge function join two arrays = 1 
echo '<pre>';
print_r(array_merge($name,$age));
echo "</pre>" ;
# arrays combin like (key => values) form example
echo '<pre>';
print_r(array_combine($name,$age));
echo '</pre>';
# push add data is arrays end
array_push($name,'half_blood','samar');
echo '<pre>';
print_r($name);
echo '</pre>';
# pop delete the data of ent the arrays like =>
array_pop($name);
echo "<pre>";
print_r($name);
echo '</pre>';
array_pop($name);

$find = [
    'prince' => 'meo',
    'sid' => 'khan',
    'half' => 'blood',
    'prince' => 'hacker',
    'wife' => 'husband'
];

# find the key in arrays 
echo "<pre>";
print_r(array_key_exists('wife',$find));
echo '</pre>';

# find the values in arrays 
echo '<br>';

print_r(array_search('blood',$find));

?>