@extends('enduser.shortnav')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azkar Page1</title>

    <style>

        .space{
            margin: 0;
            padding: 0;
            background-color: white;
            padding-top: 100px;
            background-color: #34495E
        }
        
        .headazkar{
            padding-bottom: 60%;
            display: flex;
            justify-content: center;
            background-color: #34495E
        }

        .headazkar .button{
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 20px 40px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 15px;
        }
        .headazkar .button1{
        background-color: #34495E; 
        color: white; 
        border: 2px solid #283747;
        }

        .headazkar .button1:hover {
        background-color: #85929E;
        color: black;
        }
    </style>
</head>
<body>
    <div class="space"></div>
    <div class="headazkar">
    <button class="button button1">Azkar Nabawi</button>
    </div>

</body>
</html>