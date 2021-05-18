<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel= "stylesheet" href= "{{asset('bootstrap-5.0.0-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

</head>
<body>


   <div class="full-height row col-md-12" style="background:#fff;">
        <div class=" col-md-4  align-self-center" style = "background-color:#fff">
                <h4 style="text-align:center">Login Sacco Member</h4>
                <hr>

                <form action ="{{ route('auth.check') }}" method = "post">
                    @csrf

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type = "msisdn" class = "form-control" name= "phonenumber" placeholder="Enter phone no:" value="{{old('phonenumber')}}">
                        <span class="text-danger">@error('phonenumber'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Pin</label>
                        <input type = "password" class = "form-control" name= "pin" placeholder="Enter pin">
                        <span class="text-danger">@error('pin'){{$message}}@enderror</span>

                
                    </div>
                
                    <br>
                    <div style="text-align:center"><button type="submit" class= "btn btn-block" style="background-color:#ec6532;color:white;border-radius: 12px;"><span class="las la-sign-in-alt"></span>
                <span>Login</span></button></div>
                    <br>

                
                </form>
                
           
        </div>
        <div class="col-md-4 align-self-center" style = "background-color:#fff">
            <h4 style="text-align:center">Buy Airtime</h4>
            <hr>

            <form action ="{{ route('auth.check') }}" method = "post">
                @csrf

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type = "msisdn" class = "form-control" name= "phonenumber" placeholder="Enter phone no:" value="{{old('phonenumber')}}">
                    <span class="text-danger">@error('phonenumber'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label>Amount</label>
                    <input type = "number" class = "form-control" name= "amount" placeholder="Ksh.">
                    <span class="text-danger">@error('amount'){{$message}}@enderror</span>

            
                </div>
            
                <br>
                <div style="text-align:center"><button type="submit" class= "btn btn-block" style="background-color:#ec6532;color:white;border-radius: 12px;"><span class="las la-phone"></span>
                <span>Buy</span></button></div>
                
                <br>

            
            </form>

        </div>
        <div class="col-md-4 align-self-center " style = "background-color:#fff;">
                
            <h4 style="text-align:center">Loan Airtime</h4>
            <hr>

            <form action ="{{ route('auth.check') }}" method = "post">
                @csrf

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type = "msisdn" class = "form-control" name= "phonenumber" placeholder="Enter phone no:" value="{{old('phonenumber')}}">
                    <span class="text-danger">@error('phonenumber'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                <label>Amount</label>
                    <input type = "number" class = "form-control" name= "amount" placeholder="Ksh.">
                    <span class="text-danger">@error('amount'){{$message}}@enderror</span>

            
                </div>
            
                <br>
                <div style="text-align:center"><button type="submit" class= "btn btn-block" style="background-color:#ec6532;color:white;border-radius: 12px;"><span class="las la-phone"></span>
                <span>Get loan</span></button></div>
                <br>

            
            </form>
        </div>
   </div>





    
</body>
</html>