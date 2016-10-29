    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body"  ng-controller="UserController">
                    <form class="form-horizontal" role="form">
                        <div class="text-center">{{error}}</div>
                        <input type="hidden" id="op" ng-model="op" name="op" value="login">
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">User</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" ng-model="name" value="">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" ng-model="password">


                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                               <button type="submit" class="btn btn-info" ng-click="addRegister()">login</button>

                                <a class="btn btn-link">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

