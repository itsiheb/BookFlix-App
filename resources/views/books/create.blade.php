@extends('layouts.main')

@section('content')



        <div class="card">


        </div>
        <div class="card-body">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Add a new Book') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('books.store') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="author" class="col-md-4 col-form-label text-md-left">{{ __('Author') }}</label>

                                        <div class="col-md-6">
                                            <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author') }}" required autocomplete="author" autofocus>

                                            @error('author')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="title" class="col-md-4 col-form-label text-md-left">{{ __('Title') }}</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="copies" class="col-md-4 col-form-label text-md-left">{{ __('Number of Copies') }}</label>

                                        <div class="col-md-6">
                                            <input id="copies" type="text" class="form-control @error('copies') is-invalid @enderror" name="copies" value="{{ old('copies') }}" required autocomplete="copies" autofocus>

                                            @error('copies')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="points" class="col-md-4 col-form-label text-md-left">{{ __('Bonus Points') }}</label>

                                        <div class="col-md-6">
                                            <input id="points" type="text" class="form-control @error('points') is-invalid @enderror" name="points" value="{{ old('points') }}" required autocomplete="points" autofocus>

                                            @error('points')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-6">
                                        <label for="category" class="col-md-8 col-form-label text-md-left">{{ __('Category') }}</label>
                                        <select class="form-control" name="categories">
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" name="category" id="category">{{ $category->description }}</option>
                                        @endforeach
                                        </select>
                                            @error('category')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>




                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Save') }}
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
