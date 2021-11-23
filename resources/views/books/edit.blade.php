@extends('layouts.main')

@section('content')



        <div class="card">
        </div>
        <div class="card-body">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Update Book') }} <a href="{{route('books.index')}}" class="float-right">Retour</a></div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('books.update',$book->id) }}">
                                   @csrf
                                   @method('PUT')

                                    <div class="form-group row">
                                        <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>

                                        <div class="col-md-6">
                                            <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author',$book->author) }}" required autocomplete="author" autofocus>

                                            @error('author')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title',$book->title) }}" required autocomplete="title" autofocus>

                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="copies" class="col-md-4 col-form-label text-md-right">{{ __('Number of Copies') }}</label>

                                        <div class="col-md-6">
                                            <input id="copies" type="text" class="form-control @error('copies') is-invalid @enderror" name="copies" value="{{ old('copies',$book->copies) }}" required autocomplete="copies" autofocus>

                                            @error('copies')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="points" class="col-md-4 col-form-label text-md-right">{{ __('Bonus points') }}</label>

                                        <div class="col-md-6">
                                            <input id="points" type="text" class="form-control @error('points') is-invalid @enderror" name="points" value="{{ old('points',$book->points) }}" required autocomplete="points" autofocus>

                                            @error('points')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>





                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Modify') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
    </div>



@endsection

