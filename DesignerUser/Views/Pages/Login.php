
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" style="color:#000;">

            <!-- Modal content-->
            <div class="modal-content" style="background-color: #edecf4">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="modal-title" style="text-align: center"><span class="glyphicon glyphicon-user"></span></h1>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="user" type="text" class="form-control" name="user" placeholder="User Name" required>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                        </div><br>
                        <div class="input-group">
                            <input type="checkbox" name="remember" id="remember" style="margin-left: 50px;"> Remember
                        </div><br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default"name="btnlogin" style="width:48%;margin-left: 5px; background-color: #c5d023">Login</button>
                            <button type="reset" class="btn btn-default" style="width:48%; background-color: #bbd6c4">Reset</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

