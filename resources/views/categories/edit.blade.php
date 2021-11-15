@extends('layouts.main')

@section('content')



        <div class="card">
        </div>
        <div class="card-body">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Update Category') }} <a href="{{route('categories.index')}}" class="float-right">Retour</a></div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('categories.update',$category->id) }}">
                                   @csrf
                                   @method('PUT')

                                    <div class="form-group row">
                                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                        <div class="col-md-6">
                                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description',$category->description) }}" required autocomplete="description" autofocus>

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
                                            <input id="sous_category" type="text" class="form-control @error('sous_category') is-invalid @enderror" name="sous_category" value="{{ old('sous_category',$category->sous_category) }}" required autocomplete="sous_category" autofocus>

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

