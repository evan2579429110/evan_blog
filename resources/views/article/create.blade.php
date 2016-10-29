@extends('layouts.app')

@section('content')


<div class="row" >
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-8">
        <form id="formid">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" id="title"  class="form-control" placeholder="Plase echo title">
            </div>
            <div class="form-group">

                <textarea rows="30" cols="50" name="text" id="textarea"></textarea>
                <script type="text/javascript">CKEDITOR.replace('text');</script>


            </div>
            <button class="btn btn-default">Submit</button>

        </form>


    </div>
    <div class="col-md-2">&nbsp;</div>

</div>



@endsection

<script src="L{url('ckeditor/ckeditor.js')}L"></script>
<script src="L{url('angular/jquery.min.js')}L"></script>
<script src="L{url('js/article.js')}L"></script>

