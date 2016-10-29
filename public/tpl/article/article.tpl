<div class="row" ng-controller="ArticleListController">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-8">
        <a type="button" class="btn btn-info" href="/article/create">Add Title</a>
        <br><br>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>NO</th>
                <th>title</th>
                <th>date</th>
                <th>author</th>
            </tr>
            <tbody>

            <tr ng-repeat="x in content">
                <td>{{$index+1}}</td>
                <td>{{ x.title }}</td>
                <td>{{ x.author}}</td>
                <td>{{ x.create_at}}</td>
            </tr>
            </tbody>

        </table>


    </div>
    <div class="col-md-2">&nbsp;</div>

</div>