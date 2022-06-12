<!DOCTYPE html>
<html>

<head>
    <title>How to Extract/Unzip a Zip File in Laravel- readerstacks.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>How to Extract/Unzip a Zip File in Laravel -readerstacks.com</h2>
            </div>
            <div class="panel-body">

                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong></strong>
                </div>

                @endif
                <br><br>
                <form action="{{ url('extract-zip') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                       
                        <div class="col-md-4">
                            <label>Zip</label>
                            <input type="file" placeholder="ZIP" name="zip">
                        </div>
                    </div>
                    <div class="row">



                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>

                    </div>
                </form>
                

                @if ($message)
                <ul>
                    @foreach($message as $ms)
                        <li><a href="{{route('download',$ms)}}">{{$ms}}</a></li>
                    @endforeach
                </ul>
                @endif

            </div>
        </div>
    </div>
</body>

</html>