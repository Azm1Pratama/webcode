<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      html,
      body {
        height: 100%;
        background-color: #2F4F4F;
      }
      .global-container {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color:  #2F4F4F;
      }
      @media (min-width: 992px){
      .login-form {
        width: 380px;
        height: 400px;
        background-color: #D3D3D3;
        padding: 10px;
      }
      }
      @media (max-width: 575.98px){
      .card-body {
        width: 200px;
        height: 110px;
        background-color: #D3D3D3;
      }
      .card-text {
        width: 200px;
        height: 150px;
        padding: 5px;
        background-color: #D3D3D3;
      }
      .global-container {
        height: 170%;
        display: flex;
        align-items: center;
        justify-content: center;
        color:  #2F4F4F;
      }
      } 
      #logo{
          width: 20%;
          display: block;
          margin-left: auto;
          margin-right: auto;
          padding:auto;
          padding-bottom: 20px;
          padding-top: 10px;
      }
      .btn {
        background: #696969;
        border-color: #696969;
        color: #ffffff;
        border-radius: 5px;
      }
    </style>
    
    <title>LOGIN || ADMIN</title>
  </head>
  <body>
   
    <div class="global-container">
      <div class="card login-form">
        <div class="card-body">
          <img src="../user/img/logoheader.png" width="70px" id="logo">
          <h2 class="card-title text-center"> FORM LOGIN </h2>
        </div>

        <div class="card-text">
          
          <form action="" method="post">

          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username">
          
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="login">Submit</button>
          </div>
       
        </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>