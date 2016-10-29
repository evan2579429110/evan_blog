
angular.module('routingDemoApp', ['ngRoute'])
    .controller('HomeController', function ($scope, $route) { $scope.$route = $route;})
    //文章列表
    .controller('ArticleListController', function ($scope, $http,$element) {
        $http({
            method: 'GET',
            url: '/article',
            headers : {
                'Content-Type': 'application/x-www-form-urlencoded',
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
        })
            .success(function (data) {
                    $scope.content=data;
                    console.log(data);

                })
                .error(function (data) {
                    console.log(data);

                })

    })
    //创建文章
    .controller('ArticleController', function ($scope, $http,$element) {
        $scope.formData={};
        $scope.saveTpl= function () {
            $scope.formData={title:$scope.title,content:$scope.content}
            $http({
                method  : 'POST',
                url     : '/article',
                data    : $.param($scope.formData),
                headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
            })
            .success(function(data) {
                console.log(data);
            })
            .error(function(data, status) {
                console.log('status: ' + status);
            });

        }
    })

    .controller('UserController', function ($scope, $http,$element) {
        $scope.formData={};
        $scope.addRegister = function() {

            if($('#op').val()=='login'){
                url='/login';
            }else if($('#op').val()=='register'){
                url='/register';
            }
            $scope.formData={name:$scope.name,password:$scope.password,password_confirmation:$scope.confirmation}
            console.log( $scope.formData);

            $http({
                method  : 'POST',
                url     : url,
                data    :  $.param($scope.formData),
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }  // set the headers so angular passing info as form data (not request payload)
            })
                .success(function(data) {
                    //console.log(data);
                    $scope.formData={};
                    location.href = "#/article";
                })
                .error(function(data) {
                    console.log(data);

                    $scope.error=data.password[0];
                });

        }
    })



    .config(function ($routeProvider) {
        $routeProvider
            .when('/article', {
                templateUrl:'/tpl/article/article.tpl'
            })
            .when('/login',{
                templateUrl:'/tpl/user/login.tpl'
            })
            .when('/register',{
                templateUrl:'/tpl/user/register.tpl'
            })



    });



//var pData = {authData:$scope.authData,reqData:$scope.reqData};
//$http({method:'POST',url:'testKeep',params:pData}).
//success(function(response) {
//    $scope.ansInfo = response.a;});