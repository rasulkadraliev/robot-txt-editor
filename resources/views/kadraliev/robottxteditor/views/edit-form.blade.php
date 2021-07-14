<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Robots.txt Editor</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <style>
        td {
            word-break: break-all;
        }

        body {
            font-family: 'Lato', serif;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>

<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/edit-form') }}">
                    Robots.txt Editor
                </a>
            </div>

        </div>
    </nav>

    <div class="container">
        <div class="col-sm-offset-0 col-sm-16">
            <div class="panel panel-default">
                <div class="panel-heading">
                    File Edit Field
                </div>

                <!-- File Edit Form -->
                <form action="{{ url('/edit-form')}}" method="POST" class="form-horizontal">
                    @csrf()

                    <!-- File Edit Area -->
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea name="text" id="text" class="form-control" style="height:600px; resize: none">{{ $file_content }}</textarea>
                        </div>
                    </div>

                    <!-- Save Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-0 col-sm-9">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-plus"></i>Save
                            </button>
                            <button type="submit" class="btn btn-danger" formaction="{{ url('/edit-form')}}" formmethod="GET">
                                <i class="fa fa-btn fa-plus"></i>Cancel
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
</body>

</html>