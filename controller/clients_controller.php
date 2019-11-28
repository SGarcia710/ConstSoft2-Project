<?php
include("../model/clients_model.php");
$clients = new clients_model();
$clientsMatrix = $clients->get_clients();
