@extends('shell')

@section('content')
    <div class="container">
        <div class="col-sm-offset-0 col-sm-16">
            <div class="panel panel-default">
                <div class="panel-heading">
                    File Edit Field
                </div>

                <!-- File Edit Form -->
                    <form action="{{ url('/')}}" method="POST" class="form-horizontal">
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
                                <button type="submit" class="btn btn-danger" formaction="{{ url('/')}}" formmethod="GET">
                                    <i class="fa fa-btn fa-plus"></i>Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
