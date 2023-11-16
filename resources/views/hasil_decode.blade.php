<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hash Encode dan Decode</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>body{
        height: 100vh;
    }
    .container{
        height: 100%;
    }</style>
  </head>
  <body>

    <div class="container d-flex align-items-center justify-content-center">
        <div>
            <h4>Hasil Encodenya</h4>
            <div class="table-responsive">
                <table class="table table-primary table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Model id</th>
                            <th scope="col">Hashslug</th>
                            <th scope="col">Data</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="">
                            <td scope="row">{{ $example_return['id'] }}</td>
                            <td>{{ $example_return['hash'] }}</td>
                            <td>{{ $example_return['data'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <a href="http://teshash.test/" class="btn btn-info">Back encode</a>
            {{-- <a href="http://teshash.test/decode?hash={{ $example_return['hashslug'] }}" class="btn btn-success">Decode this hashslug</a> --}}

        </div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
