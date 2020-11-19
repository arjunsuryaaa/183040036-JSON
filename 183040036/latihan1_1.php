<?php

$mahasiswa = [[
    "nama" => "Arjun Surya Atmaja",
    "nrp" => "183040036",
    'email' => "atmaja.183040036@mail.unpas.ac.id"
], [
    "nama" => "Arif Turmuji",
    "nrp" => "183040006",
    'email' => "turmuji.183040006@mail.unpas.ac.id"
]];

$data = json_encode($mahasiswa);
echo $data;
