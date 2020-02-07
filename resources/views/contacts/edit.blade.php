@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Modification du contact <b><!-- TODO Afficher le nom du contact --></b></h3>
                    <!-- TODO mise en place de la form pour modifier un contact -->
                    <form action="{{route('form')}}" method="post">
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
                    <input type="tel" name="tel" value="{{old('tel', '')}}">
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
