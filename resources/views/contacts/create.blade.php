@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Créer un contact</h3>
                    <!-- TODO mise en place de la form pour créer un contact -->
                    <form action="{{route('createcontact')}}" method="post">
                    <!-- Protection CSRF -->
                    @csrf
                    <!-- Methode HTTP pour la route -->
                    @method('put')
                    @method('patch')
                    @method('delete')
                    <!-- Fonction old('nomdelinput') récupère la valeur du formulaire après validation -->
                    <input type="text" name="name" value="{{old('name', '')}}">
                    <input type="email" name="email"
                                       class="form-control @error('email') is-invalid @enderror" id="email"
                                       placeholder="Entrer votre email"
                                       value="{{  old('email', '') }}"
                                >
                    <input type="password" name="password" value="{{old('password', '')}}">

                    @error('title')
                    Message d'erreur pour l'input title OU {{$message}}
                    @enderror

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
