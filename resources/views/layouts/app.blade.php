
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">   

</head>
<body>
  <div class="content is-normal">
    <div class="columns is-vcentered">
      <div class="column is-narrow">
        
        <img src="/assets/logo.png" class="custom-image">
        <style>
          .custom-image {
            height: 100px;
            width: 99px;
          }
        </style>
        
  
        
      </div>
      <div class="column">
        <h1 class="has-text-primary is-size-1 has-text-centered">RFPAP Hospital Management System</h1>
      </div>
    </div>
  </div>
  
    <nav class="na  vbar" role="navigation" aria-label="main navigation">              
               
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="{{ route('patients.index') }}">
              Home
            </a>
            <a class="navbar-item" href="{{ route('patients.index') }}">Patient</a>
            
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                More
              </a>
      
              <div class="navbar-dropdown">
                <a class="navbar-item">
                  About
                </a>
                
                <hr class="navbar-divider">
                <a class="navbar-item">
                  Report an issue
                </a>
              </div>
            </div>
          </div>
      
          
        </div>
      </nav>

<div><p><br></div>




    @yield('content')
    
</body>
</html>
