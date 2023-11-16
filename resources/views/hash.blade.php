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
                <div class="row">
                    <h4>Encode by Model id ke hashslug</h4>
                    <form action="/encode" method="post">
                        @csrf
                        <div class="mb-3">
                          <label for="" class="form-label">Model Id</label>
                          <input  class="form-control" name="id" id="" required type="number" aria-describedby="helpId" placeholder="Input model id">
                          {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                        </div>
                        <button type="submit" class="btn btn-primary">Encode</button>
                    </form>
                </div>
                <div class="row mt-5">
                    <h4>Decode HashSlug</h4>
                    <form action="/decode" method="post">
                        @csrf
                        <div class="mb-3">
                          <label for="" class="form-label">Hash Code</label>
                          <input  class="form-control" name="hash" id="" required type="text" aria-describedby="helpId" placeholder="Input hasil hash">
                          {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                        </div>
                        <button type="submit" class="btn btn-success">Decode</button>
                    </form>
                </div>

            </div>


</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
