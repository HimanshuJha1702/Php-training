<?php

$input = "{\"players\":[{\"name\":\"Ganguly\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dravid\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dhoni\",\"age\":37,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Virat\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}}]}";

$obj = json_decode($input);

print_r($obj);

//names, age, city

$names = [];
$age = [];
$city = [];

foreach ($obj->{'players'} as $item) {
    array_push($names,$item->name);
}
print_r($names);

foreach ($obj->{'players'} as $item) {
    array_push($age,$item->age);
}
print_r($age);

foreach ($obj->{'players'} as $item) {
    array_push($city,$item->address->city);
}
print_r($city);


//Unique names

$unique = array_unique($names);
print_r($unique);

//Name of persons with max age

$max_age_names = [];
$maximum_age = max($age);

foreach ($obj->{'players'} as $item) {
    if($item->age == $maximum_age) {
        array_push($max_age_names, $item->name);
    }
}
print_r($max_age_names)





?>
