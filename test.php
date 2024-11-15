<?php
//namen in einem array speichern
$name = [
    "1" => "Basty",
    "2" => "Kenndy",
    "3" => "Pilou"
];


//alle namen ausgeben
foreach ($name as $item){ ?>
    <span>Welcome to my Website:</span>
    <strong><?php echo $item; ?></strong><br>
<?php }

phpinfo();



