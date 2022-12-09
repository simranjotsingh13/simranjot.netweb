<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>

    <style>
        *{
            margin;0;
            padding:0;
            box-sizzing:border-box;
        }

        html{
            font-size:10px;
            font-family: 'Poppins' ,sans-serif;
        }
        body{
            font-size: 1.6rem;
            background-color:#f6c9ff; 
        }

        .form{
            position: relative;
            max-width: 40rem;
            padding: 10rem 0;
            color: #fff;
            background-color: #fff;
            border-radius: 1rem;
            box-shadow: 0 1px 1rem rgba(0,0, 0, .1);
            isolation: isolate; 
        }
        .form::before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10rem;
            background: linear-gradient(to left, #fc6767,
            #ec008c
            );
            border-radius:1rem 1rem 100% 100%;
            z-index: -1; 
        }

        .form_title{
            position: absolute;
            top :3.5rem;
            left: 50%;
            transform: translatex(-50%);
            font-size:2.5rem;

        }

        .form>form{
            padding: 2.5rem;

            background-color:inherit;

        }

        .form_input{
            position: relative;
            display: flex;
            align-items: baseline;
            margin: 0 auto;
        }

        .form_input>i{
            font-size: 2rem;
            margin-right:1rem;
            color:#fc6767;


        }

        .form_input input{
       position: relative;
       width: 100%;
       font: inherit;
       padding: 1rem  0;
       margin-top:.5rem;
       border: none;
       outline: none;
     }

     .form_input  .bar::before'{
        content:"";
        position :absolute;
        background-color:#fc6767;
        width:100%;
        height:2px;
        transform:scalex(0);
        transform-origin:left;
        transition:transform .5s;
}
.form_input >input:focus+.bar::before{
    transform: scaleX(1);
}
.form_button{
    display:block;
    margin:2.5rem auto 3rem;
    padding :1rem 5rem;
    background:linea-gradient(to left, #fc6767,#ec008c);
    color: rgb(222, 26, 26);
    font: inherit;
    border:.5rem solid #fff;
    outline: none;
    cursor: pointer;
    border-radius:3rem;
}

.form_button:hover{
    background:linear-gradient(to right , #fcc6767,#ec008c);
}
.form_switch{
    display: block;
    text-align: center;
    font-size:1.5rem;
    color:#a1a1a1;
}
.form_switch a{
    text-decoration: none;
    color:#fc6767;
}

.form_switch a:hover{
    text-decoration: underline;

}
@media screen and (min-width:43.75em){
    .form::before{
        height:30rem;
    }
    .form_title{
        left: 10rem;
        transform;none;
    }
    .form>form{
        transform:translex(10rem);
        border-radius:inherit;
        box-shadow;inherit;
    }
}

    </style>
</head>
<body>
    
<div class="form">
    <span class="form_title">Sign up</span>
    <form action="{{url('/')}}/login" method="POST">
        @csrf
    
        <div class="form_input">

            <i class="ri-mail-line"></i>

            <input type="text" name="email" placeholder="Email" id="">

            <span class="bar"></span>
        </div>
        <div class="form_input">
            <i class="ri-lock-line"></i>
            <input type="text" name="password" id="" placeholder="Password">
            <span class="bar"></span>

        </div>
 <button type="submit" class='form_button'>Sign up</button>
 {{-- <span class="form_switch">Already have an account
    <a href="#">login</a>
 </span> --}}
    </form>
</div>
</body>
</html>