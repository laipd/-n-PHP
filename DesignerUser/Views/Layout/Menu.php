<?php session_start(); ?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Home.php" style="margin-top: -30px"><span class="glyphicon"> <h1>&#xe021; </h1></span></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form method="post">
                        <table>
                            <tr>
                                <td><input type="text" class="form-control" id="search" name="timkiem" style="margin-top: 7px;height: 35px" required></td>
                                <td>
                                    <button type="submit" class="btn btn-default btn-sm" style="margin-top: 7px;height: 35px; margin-left: -4px;">
                                        <span class="glyphicon glyphicon-search"></span> Search
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>

                </li>
                <li>
                    <a href="khuyenmai.php">Khuyến Mại</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thời Trang Nữ <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="sominu.php">Áo Sơ Mi</a>
                        </li>
                        <li>
                            <a href="aophongnu.php">Áo Phông</a>
                        </li>
                        <li>
                            <a href="quanthunnu.php">Quần Thun</a>
                        </li>
                        <li>
                            <a href="quanbonu.php">Quần Bò</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thời Trang Nam<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="sominam.php">Áo Sơ Mi</a>
                        </li>
                        <li>
                            <a href="aophongnam.php">Áo Phông</a>
                        </li>
                        <li>
                            <a href="quanthunnam.php">Quần Thun</a>
                        </li>
                        <li>
                            <a href="quanbonam.php">Quần Bò</a>
                        </li>
                    </ul>
                </li>
                <?php require_once ("../../Controller/ctr_dangnhap.php"); ?>
                <?php
                    if(isset($_SESSION["user"]) && $_SESSION["role"] != 1 ){
                        echo ' <li><a href="#">
                                 <span class="glyphicon">&#xe008;</span> <span>'.$_SESSION["user"].'</span>
                                </a></li>';
                    }
                ?>
                <li>
                    <?php  if(!isset($_SESSION["user"]))
                        echo '<a href="#" data-toggle="modal" data-target="#myModal" style="height: 40px;"> <span class="glyphicon">&#xe161;</span> Login </a>';
                    else
                        echo '<a href="Home.php?logout" style="height: 40px;"> <span class="glyphicon glyphicon-log-out"></span> Logout </a>';
                    ?>

                </li>
                <?php
                if(isset($_SESSION["role"])){
                    if($_SESSION["role"] == 1)
                        echo '<li><a href="../../../Admin" class="btn btn-app btn-lg">
                                  <span class="glyphicon glyphicon-user"></span> Admin
                                </a> </li>';
                }
                ?>
                <li>
                    <a href="dangky.php"> Đăng Ký</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
