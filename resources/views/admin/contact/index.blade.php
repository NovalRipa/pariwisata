<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .mainContent {
    width: 35%;
    margin: 2.5em auto;
    background: #fff;
    padding: 2.5em;
}
.contactFrm h4 {
    font-size: 1em;
    color: #252525;
    margin-bottom: 0.5em;
    font-weight: 300;
    letter-spacing: 5px;
}
.contactFrm input[type="text"], .contactFrm input[type="email"] {
    width: 70%;
    outline: none;
    font-size: 0.9em;
    padding: .7em 1em;
    border: 1px solid #000;
    -webkit-appearance: none;
    display: block;
    margin-bottom: 1.2em;
}
.contactFrm textarea {
    resize: none;
    width: 93.5%;
    font-size: 0.9em;
    outline: none;
    padding: .6em 1em;
    border: 1px solid #000;
    min-height: 10em;
    -webkit-appearance: none;
}
.contactFrm input[type="submit"] {
    outline: none;
    color: #FFFFFF;
    padding: 0.5em 0;
    font-size: 1em;
    margin: 1em 0 0 0;
    -webkit-appearance: none;
    background: #006faa;
    transition: 0.5s all;
    border: 2px solid #006faa;
    -webkit-transition: 0.5s all;
    transition: 0.5s all;
    -moz-transition: 0.5s all;
    width: 47%;
    cursor: pointer;
}
.contactFrm input[type="submit"]:hover {
    background: none;
    color: #006faa;
}

p.statusMsg{font-size:18px;}
p.succdiv{color: #008000;}
p.errordiv{color:#E80000;}
    </style>
</head>
<body>
    <main class="mb-4">
        <div class="mainContent">
            <h2>Kontak Form PHP / <small><a href="http://www.jurnalweb.com">Jurnalweb.com</a></small></h2>
            <div class="contactFrm">
                <form action="" method="post">
                    <h4>Name</h4>
                    <input type="text" name="name" placeholder="Nama Anda" required="">
                    <h4>Email </h4>
                    <input type="email" name="email" placeholder="email@example.com" required="">
                    <h4>Subject</h4>
                    <input type="text" name="subject" placeholder="Tulis subject" required="">
                    <h4>Message</h4>
                    <textarea name="message" placeholder="Tulis pesan Anda disini" required=""> </textarea>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-dark btn-block">
                                {{ __('Login') }}
                            </button>
                    <div class="clear"> </div>
                </form>
            </div>
        </div>
    </main>

</body>
</html>
