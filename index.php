<?php

include "Model/Model.php";
include "Model/Customer.php";
include "Model/Product.php";
include "Model/Contact.php";
include "Model/Categories.php";
include "Model/Photos.php";
include "Model/States.php";
include "Model/Cities.php";
include "Model/Address.php";

echo "<pre>";

$categories = new Categories([
    'id'       => "1",
    'name'     => "GPU",
    'products' => ["RTX 4090" , "RX 7900XT"],
]);

print_r($categories->get());
echo "<br />";

$product = new Product([
    'id'          => '111',
    'name'        => "RTX 4090 24GB HOF",
    'description' => "Placa de Vídeo, Galax Geforce 24GB GDDR6X",
]);

print_r($product->get());
echo "<br />";

$product = new Product([
    'id'          => '222',
    'name'        => "RX 7900XT 20GB SAPPHIRE",
    'description' => "Placa de Vídeo, SAPPHIRE PULSE RX 7900XT 20GB GDDR6",
]);

print_r($product->get());
echo "<br />";

$photos = new Photos([
    'id'          =>'222',
    'name'        => "7900xtpulse.png",
    'path'        => "AMD",
]);

print_r($photos->get());
echo "<br />";

$customer = new Customer([
    'name'      => "Rafael",
    'birthdate' => "0000-00-00",
    'cpf'       => "054515151-11",
    'status'    => true
]);

echo "<pre>";
var_dump($customer->set([
    'name' => 'Rafael Teles'
]));

$contact = new Contact([
    'type' => "email",
    'data' => "rafaelteles@gmail.com",
]);

var_dump($contact->get());
echo "<br />";

$address = new Address([
    'id'       => "1",
    'street'   => "São Salvador",
    'number'   => "70",
    'district' => "Center",
]);

var_dump($address->get());
echo "<br />";

$cities = new Cities([
    'id'      => "1",
    'name'    => "Jacobina",
]);

var_dump($cities->get());
echo "<br />";

$states = new States([
    'id'      => "1",
    'name'    => "Bahia",
    'code'    => "44700-000"
]);

var_dump($states->get());
echo "<br />";

