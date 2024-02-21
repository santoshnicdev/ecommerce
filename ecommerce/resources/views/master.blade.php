<html>
    <head>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    
    <div class="card">
  <div class="card-header">
  {{View::make('header')}}
  </div>
  <div class="card-body">
    
        
    
  @yield('content')
  
  </div>
      <div class="card-footer">
       {{View::make('footer')}}
  </div>
</div>
    </div>
        
            
   
    <script>
    $(document).ready(function(){
            $("button").click(function(){
                alert("Hello Santosh");
            });
        });
        </script>
        <style>
        /* Custom styles */
        .login-form {
            margin-top: 50px;
        }
    </style>
    <style>
    /* Custom CSS for margins */
    .bc{
      margin-top: 20px; /* Adjust top margin */
      margin-bottom: 10px;  /*Adjust bottom margin */
      min-height: 100vh;
    }
    .footer {
      background-color: #f8f9fa; /* Footer background color */
      padding: 20px 0; /* Adjust footer padding */
      text-align: center;
      margin-top: auto; /* Push the footer to the bottom */
    }
  </style>
</html>