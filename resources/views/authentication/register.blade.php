<!DOCTYPE html>
<html>
<head>
  <title>Testing</title>
  <link rel="stylesheet" type="text/css" href="{{asset('frontendTemplate/bootstrap/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontendTemplate/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontendTemplate/fontawesome/css/all.min.css')}}">
  <script type="text/javascript" src="{{asset('frontendTemplate/bootstrap/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontendTemplate/bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body style="background-color: brown;">

<div class="container mt-5 text-center"  style="width: 500px;margin: 0 auto;float:none;margin-bottom: 30px;">
<div class="row">
<form method="post" action="{{route('registerUser')}}">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="text" class="form-control" name="password" id="inputPassword4" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone</label>
    <input type="text" class="form-control" name="phone" id="inputAddress2" placeholder="Enter Your Phone">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity" placeholder="Enter your city">
    </div>
   

    <div class="form-group col-md-3">
      <label for="inputState1">Age</label>
      <select id="inputState1" name="age" class="form-control">
        <option selected>Choose...</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        
       </select>
    </div>
     
    
  </div>
 
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
</div>

</body>
</html>