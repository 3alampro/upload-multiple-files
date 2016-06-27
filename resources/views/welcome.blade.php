<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}

                    <label class="control-label" for="name">name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}">
                    <div>{{$errors->has('name') ? $errors->first('name') : 'insert name here'}}</div>

                    <label class="control-label" for="content">name</label>
                    <input type="text" id="content" name="content" value="{{ old('content') }}">
                    <div>{{$errors->has('content') ? $errors->first('content') : 'insert content here'}}</div>

                    <label class="control-label" for="images">upload images</label>
                    <input type="file" id="images" name="images[]" multiple="">
                    <div>{{$errors->has('images') ? $errors->first('images') : 'select images to upload'}}</div>

                    <button type="submit">upload</button>
                </form>
            </div>
        </div>
    </body>
</html>
