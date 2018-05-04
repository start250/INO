<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/INOGIT'.'/DBfiles/connectDB.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_header.php');
?>

<title>INO - Quiz</title>
</head>

<body>

    <?php
 require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_nav.php');
?>
        <div class="container">

            <div class="row">
                <div class="col-lg-8">

                    <p>
                        <strong>
                            <h3>Quiz</h3>
                        </strong>
                    </p>
                    <?php if(!@$_GET['c'] && !@$_GET['msg'] && !@$_GET['cheat']){?>
                    <div style="margin-left: 120px;">
                        <p>
                            <h3>
                                <a href="?c=General knowledge">General knowledge</a>
                            </h3>
                        </p><hr style="border-width:10px;">
                        <p>
                            <h3>
                                <a href="?c=Science">Science</a>
                            </h3>
                        </p><hr style="border-width:10px;">
                        <p>
                            <h3>
                                <a href="?c=Umuco nyarwanda">Umuco nyarwanda</a>
                            </h3>
                        </p>
                    </div>
                    <?php
}
else if(@$_GET['c'] && !@$_GET['quiz']){
	include('displayQuizzes.php');}
else if(@$_GET['quiz'] && @$_GET['c'])
	include('takequiz.php');
else if(@$_GET['msg'])
    include('doneQuiz.php');
else if(@$_GET['cheat']=="t")
    include('cheat.php');
?>
                </div>
                <div class="col-lg-4">
                    <ul id="menu">
                        <li>
                            <a href="/INOGIT/?s=Academic">
                                <img class="logo" src="/INOGIT/Resources/Storage/Logos/<?php $query=" SELECT * FROM logos WHERE position='Academic' ";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Academic</a>
                        </li>
                        <li>
                            <a href="/INOGIT/?s=Business">
                                <img class="logo" src="/INOGIT/Resources/Storage/Logos/<?php $query=" SELECT * FROM logos WHERE position='Business' ";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business</a>
                        </li>
                        <li>
                            <a href="/INOGIT/?s=Road">
                                <img class="logo" src="/INOGIT/Resources/Storage/Logos/<?php $query=" SELECT * FROM logos WHERE position='Road' ";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Rules of road</a>
                        </li>
                        <li>
                            <a href="/INOGIT/?s=Health">
                                <img class="logo" src="/INOGIT/Resources/Storage/Logos/<?php $query=" SELECT * FROM logos WHERE position='Health' ";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Health</a>
                        </li>
                        <li>
                            <a href="/INOGIT/?s=English">
                                <img class="logo" src="/INOGIT/Resources/Storage/Logos/<?php $query=" SELECT * FROM logos WHERE position='English' ";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">English</a>
                        </li>
                        <li>
                            <a href="/INOGIT/?s=Culture">
                                <img class="logo" src="/INOGIT/Resources/Storage/Logos/<?php $query=" SELECT * FROM logos WHERE position='Culture' ";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Umuco w'i Rwanda</a>
                        </li>
                        <li>
                            <a href="/INOGIT/Quiz/">
                                <img class="logo" src="/INOGIT/Resources/Storage/Logos/<?php $query=" SELECT * FROM logos WHERE position='Quiz' ";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Quiz</a>
                        </li>
                    </ul>
                </div>
            </div>

            <?php include('../Public/views/_footer.php'); ?>
            <style>
                .logo {
                    height: 60px;
                    width: 60px;
                    border: 2px solid blue;
                    border-radius: 100%;
                }

                #menu li {
                    list-style-type: none;
                    padding: 8px;
                }
            </style>

      