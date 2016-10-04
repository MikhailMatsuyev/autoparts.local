<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Autoparts</title>

    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- content -->
<div class="container">
    {!! Form::open(['route' => ['parts.index'], 'method' => 'get']) !!}


    <div class="row">
        <div class="col-md-3">
            <div class="list-group">

                <div style="clear:both "></div>
                    <div class="form-group">

                        <label for="producer_name" class="control-label col-md-3">Producer</label>

                            <div class="col-md-8">
                                {!! Form::select("producer_id", $producer_arr, $p_id,  ['placeholder' => 'Pick a producer...'],['class' => 'form-control'] ) !!}
                            </div>
                    </div>
                    <br>
                <div style="clear:both "></div>
                    <div class="form-group">

                        <label for="group_name" class="control-label col-md-3">Groups</label>

                        <div class="col-md-8">
                            {!! Form::select("groups_id", $groups_arr, $g_id, ['placeholder' => 'Pick a group...'],['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <br>
                    <div class="form-group">
                        <label class="control-label col-md-3">Weight</label>
                        <div style="clear:both "></div>
                        <label for="weight_from" class="control-label col-md-3" >from</label>
                        <div class="col-md-5" >
                            {!! Form::text("weight_from", $min_weight, null, ['class' => 'form-control']) !!}
                        </div>

                        <div style="clear:both "></div>
                        <label for="weight_to" class="control-label col-md-3">to</label>
                        <div class="col-md-5" >
                            {!! Form::text("weight_to", $max_weight, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div style="clear:both "></div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Price</label>
                        <div style="clear:both "></div>
                        <label for="weight_from" class="control-label col-md-3" >from</label>
                        <div class="col-md-5" >
                            {!! Form::text("price_from", $min_price, null, ['class' => 'form-control']) !!}
                        </div>

                        <div style="clear:both "></div>
                        <label for="weight_to" class="control-label col-md-3">to</label>
                        <div class="col-md-5" >
                            {!! Form::text("price_to", $max_price, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-offset-3 col-md-8">

                        <button type="submit" class="btn btn-primary">Find</button>

                    </div>

            </div>

        </div><!-- /.col-md-3 -->

        <div class="col-md-9">
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>
    {!! Form::close() !!}
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jasny-bootstrap.min.js"></script>
<script src="/assets/jqueryui/jquery-ui.min.js"></script>

@yield('form-script')
</body>
</html>