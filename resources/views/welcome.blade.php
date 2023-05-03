<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .container{
                border: 2px solid black;
            }
            .row{
                border: 2px solid red;
            }
            .col-4{
                border: 2px solid green;
                justify-content: center;
            }
            .col-8{
                border: 2px solid blue;
            }
        </style>
        <title>Insert Data</title>
    </head>
    <body>
        
        <div class="container">
           <div class="text-center">
           <div class="row">
                <div class="col-4">
                    <h1>
                        Registration Form
                    </h1>
                </div>
            </div>
            <form action="{{url('/')}}/insert" method="post">
                @csrf
                <div class="row">    
                    <div class="col-4">
                        <Label>First Name:</Label>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <input type="text" name="first_name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <Label>Last Name:</Label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <input type="text" name="last_name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <Label>Date Of Birth:</Label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <input type="text" name="dob">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <Label>Email Address:</Label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <input type="email" name="email">
                    </div>
                </div>
                <Button class="btn btn-primary">
                        Submit
                </Button>
            </form>
           </div>
        </div>
    </body>
</html>
