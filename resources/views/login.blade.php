<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-image: linear-gradient(to right, #757de8, #002984);
            background-repeat: no-repeat
        }

        input,
        textarea {
            background-color: #F3E5F5;
            border-radius: 50px !important;
            padding: 12px 15px 12px 15px !important;
            width: 100%;
            box-sizing: border-box;
            border: none !important;
            border: 1px solid #002984 !important;
            font-size: 16px !important;
            color: #000 !important;
            font-weight: 400
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #D500F9 !important;
            outline-width: 0;
            font-weight: 400
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        .card {
            border-radius: 0;
            border: none
        }

        .card1 {
            width: 50%;
            padding: 40px 30px 10px 30px
        }

        .card2 {
            width: 50%;
            background-image: linear-gradient(to right, #002984, #757de8)
        }

        #logo {
            width: 70px;
            height: 60px
        }

        .heading {
            margin-bottom: 60px !important
        }

        ::placeholder {
            color: #000 !important;
            opacity: 1
        }

        :-ms-input-placeholder {
            color: #000 !important
        }

        ::-ms-input-placeholder {
            color: #000 !important
        }

        .form-control-label {
            font-size: 12px;
            margin-left: 15px
        }

        .msg-info {
            padding-left: 15px;
            margin-bottom: 30px
        }

        .btn-color {
            border-radius: 50px;
            color: #fff;
            background-image: linear-gradient(to right, #002984, #002984);
            padding: 15px;
            cursor: pointer;
            border: none !important;
            margin-top: 40px
        }

        .btn-color:hover {
            color: #fff;
            background-image: linear-gradient(to right, #002984, #757de8)
        }

        .btn-white {
            border-radius: 50px;
            color: #002984;
            background-color: #fff;
            padding: 8px 40px;
            cursor: pointer;
            border: 2px solid #002984 !important
        }

        .btn-white:hover {
            color: #fff;
            background-image: linear-gradient(to right, #002984, #757de8)
        }

        a {
            color: #000
        }

        a:hover {
            color: #000
        }

        .bottom {
            width: 100%;
            margin-top: 50px !important
        }

        .sm-text {
            font-size: 15px
        }

        @media screen and (max-width: 992px) {
            .card1 {
                width: 100%;
                padding: 40px 30px 10px 30px
            }

            .card2 {
                width: 100%
            }

            .right {
                margin-top: 100px !important;
                margin-bottom: 100px !important
            }
        }

        @media screen and (max-width: 768px) {
            .container {
                padding: 10px !important
            }

            .card2 {
                padding: 50px
            }

            .right {
                margin-top: 50px !important;
                margin-bottom: 50px !important
            }
        }


    </style>


</head>

<body  >
<div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">

                        <h3 class="mb-5 text-center heading">MEDICAL RECORD</h3>

                        <div class="form-group"> <label class="form-control-label text-muted">Usuario</label>
                            <input type="text" id="email" name="email" placeholder="" class="form-control">
                        </div>

                        <div class="form-group"> <label class="form-control-label text-muted">Contraseña</label>
                            <input type="password" id="psw" name="psw" placeholder="" class="form-control">
                        </div>

                        <div class="row justify-content-center my-3 px-3">
                            <button class="btn-block btn-color">Ingresar</button>
                        </div>

                    </div>
                </div>
                <div class="bottom text-center mb-3">
                    <p href="#" class="sm-text mx-auto mb-3">¿No tienes una cuenta? <button class="btn btn-white ml-2">Crear nueva</button></p>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">

                    <img src="/images/imagen_clinica.jpg" alt="Ejemplo" width="420" height="420">

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

</script>

</body>
</html>

