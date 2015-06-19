<!DOCTYPE html>
<html>
  <head>
    <title>
        @yield('title')
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @section('stylesheet')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
    @show
    <link rel="shortcut icon" href="{{ URL::asset('images/favico.ico') }}  " />
  </head>
  <body>
    <div id="container">
      <div id="header">
        <div class="content">
          <h1><a href="{{ URL::action('Job\JobController@index') }}">
            <img src="{{ URL::asset('images/logo.jpg') }} " alt="Jobeet Job Board" />
          </a></h1>
 
          <div id="sub_header">
            <div class="post">
              <h2>Ask for people</h2>
              <div>
                <a href="{{ URL::action('Job\JobController@create') }}">Post a Job</a>
              </div>
            </div>
 
            <div class="search">
              <h2>Ask for a job</h2>
              <form action="" method="get">
                <input type="text" name="keywords" id="search_keywords" />
                <input type="submit" value="search" />
                <div class="help">
                  Enter some keywords (city, country, position, ...)
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
 
      <div id="content">
        <div class="content">
            @yield('content')
        </div>
      </div>
 
      <div id="footer">
        <div class="content">
          <span class="symfony">
            <img src="{{ URL::asset('images/jobeet-mini.png') }}" />
            powered by <a href="http://www.symfony.com/">
              <img src="{{ URL::asset('images/symfony.gif') }}" alt="symfony framework" />
            </a>
          </span>
          <ul>
            <li><a href="">About Jobeet</a></li>
            <li class="feed"><a href="">Full feed</a></li>
            <li><a href="">Jobeet API</a></li>
            <li class="last"><a href="">Affiliates</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>