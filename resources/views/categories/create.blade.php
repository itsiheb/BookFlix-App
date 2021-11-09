@extends('layouts.main')

@section('content')



        <div class="card">


        </div>
        <div class="card-body">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Add a new Category') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('categories.store') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                        <div class="col-md-6">
                                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="sous_category" class="col-md-4 col-form-label text-md-right">{{ __('Sub Category') }}</label>

                                        <div class="col-md-6">
                                            <input id="sous_category" type="text" class="form-control @error('sous_category') is-invalid @enderror" name="sous_category" value="{{ old('sous_category') }}" required autocomplete="sous_category" autofocus>

                                            @error('sous_category')
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
