@extends('master')
@section("content")
    <div class="col-4">
        <img src="/img/logo.png" alt="LOGO" class="img img-fluid">
    </div>
    <div class="container custom-login">
    <div class="row">
    <div class="col-sm-4 col-sm-offset-6">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email cím</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email cím megadása">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Jelszó</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Jelszó megadása">
            </div>

        <button type="submit" class="btn btn-primary">Beküldés</button>
        </form>

    </div>
    </div>
    </div>
@endsection

