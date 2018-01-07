<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Mentora - Login</title>

    <!-- Styles -->
    <link href="{{asset('Front/css/core.min.css')}}" rel="stylesheet">
    <link href="{{asset('Front/css/thesaas.min.css')}}" rel="stylesheet">
    <link href="{{asset('Front/css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('Front/img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset('Front/img/favicon.png')}}">
  </head>

  <body class="mh-fullscreen bg-img center-vh p-20" style="background-image: url(assets/img/bg-girl.jpg);">




    <div class="card card-shadowed p-50 w-400 mb-0" style="max-width: 100%">
      <h5 class="text-uppercase text-center">Login</h5>
      <br><br>

      <form action="{{ route('login') }}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <input type="email" name="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" placeholder="email">
            @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
        </div>

        <div class="form-group">
          <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' has-error' : '' }}" placeholder="Password">
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        </div>



        <div class="form-group">
          <button class="btn btn-bold btn-block btn-primary" type="submit">Login</button>
        </div>
      </form>


      <hr class="w-30">

    </div>




    <!-- Scripts -->
     <script src="{{asset('Front/js/core.min.js')}}"></script>
     <script src="{{asset('Front/js/thesaas.min.js')}}"></script>
     <script src="{{asset('Front/js/script.js')}}"></script>

  </body>
</html>
