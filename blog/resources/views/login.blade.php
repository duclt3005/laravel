<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Todo - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 1px;
        }
        .task-table tbody tr td:nth-child(2){
            width: 120px;
        }
        .task-table tbody tr td:nth-child(3){
            width: 100px;
        }
        .flex-ct{
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default">
    <div class=" container   ">
        <div class="flex-ct">
        <div class="navbar-header">

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ route('task') }}">
                Task
            </a>
        </div>

        <div class="navbar-header">
            <a href="/auth/login">Login</a>
            <a href="/auth/signin">Signin</a>
        </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Login
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->
                @if (isset($error))
            <p style="color:red">{{ $error }}</p>
                @endif
           
                <!-- New Task Form -->
                <form action="" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                    
                <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">User name</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Password</label>

                        <div class="col-sm-6">
                            <input type="password" name="password" id="task-name" class="form-control" value="">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Login
                            </button>
                        </div>
                    </div>
                </form>
           
            </div>
        </div>

       
    </div>
</div>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>