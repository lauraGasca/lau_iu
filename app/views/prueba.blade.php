<!DOCTYPE html>
<html>
<head>
    <!-- BEGIN META SECTION -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <title>
        @section('titulo')

            Iuark

        @show
    </title>
    <!-- END META SECTION -->


    @section('css')


    @show

</head>

<body class="login fade-in" data-page="login">

<!-- BEGIN LOGIN BOX -->
<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- END LOGIN BOX -->
{{ HTML::script('/bower_components/jquery/dist/jquery.min.js') }}
{{ HTML::script('/bower_components/moment/min/moment.min.js') }}
{{ HTML::script('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}
{{ HTML::script('/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}
{{ HTML::style('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}
{{ HTML::style('/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>
</body>

</html>
