<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
    <style>
        .dropdown-menu {
            background-color: LightSlateGray;
        }
        .table {
            word-wrap: break-word;
        }
        #profileImg {
        }
    </style>
<script language="javascript">
function getCookie(cname){
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        window.onload = function() {
            algo = getCookie('algo');
            console.log(algo);
            if( algo == "md5" || algo == "sha1" || algo == "sha256" || algo == "sha512" ) 
            {
                document.getElementById("algo").textContent = algo.toUpperCase();
            }
            else
            {   
                algo = "sha512";
                document.cookie = "algo=sha512";
                document.getElementById("algo").textContent="SHA512";
            }
        }
        function changeHashAlgo(algo) {
            console.log("change navbar hash algo to: ", algo);

            if( algo != "md5" && algo != "sha1" && algo != "sha256" && algo != "sha512"  ) {
                algo = "sha512";
            }

            document.cookie = "algo=".concat(algo);
            document.getElementById("algo").textContent = algo.toUpperCase();
        }
    </script>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">
            <h4>Noobie Bank</h4>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggleItem">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="toggleItem">
            <ul class="navbar-nav mr-auto">
<?php
if ($this->is_login()) {
    ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" >Bank Service</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/?action=bank&op=buy">Buy Stock</a>
                        <a class="dropdown-item" href="/?action=bank&op=verify">Verify Receipt</a>
                        <a class="dropdown-item" href="/?action=bank&op=cash_out">Withdrawal</a>
                        <a class="dropdown-item" href="/?action=bank&op=send_cash">Transfer</a>
                    </div>
                </li>
<?php
}
?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" >Cookie HMAC (<span id="algo"></span>)</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)" onclick="changeHashAlgo('md5')">MD5</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="changeHashAlgo('sha1')">SHA1</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="changeHashAlgo('sha256')">SHA256</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="changeHashAlgo('sha512')">SHA512</a>
                    </div>
                </li>

            </ul>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
<?php
if ($this->is_login()) {?>
                            <a class="nav-link" href="/?action=user&op=profile">
                                <?=$this->user->username?>: <?=$this->user->cash?>
                            </a>
<?php
} else {?>
                            <a class="nav-link" href="#">
                                <?=$this->user->username?>
                            </a>
<?php
}?>
                </li>
<?php
if (!$this->is_login()) {
    ?>
                <li class="nav-item">
                    <a class="nav-link" href="/?action=user&op=login">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/?action=user&op=register">Register</a>
                </li>
<?php
} else {
        ?>
                <li class="nav-item">
                    <a class="nav-link" href="/?action=user&op=logout">Log out</a>
                </li>
<?php
    }
?>
            </ul>
        </div>
    </nav>
</header>

<main role="main" class="container mt-5 mb-5">
<?php
if (!is_null($this->status)) {
    ?>
    <div class="alert alert-<?=$this->status ? "success" : "danger"?>" role="alert">
        <?=$this->message?>
    </div>
<?php
}
?>
