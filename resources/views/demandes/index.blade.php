@extends('layouts.main')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h2 mb-0 text-gray-800">Request History </h1>
    </div>

        <div class="card">
          <form>
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search for a Request here..." aria-label="Search" name="search" id="search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
          <div>
            @if (session()->has('message'))
            <div class="alert alert-info">
              {{  session('message') }}
          </div>
          @endif
          </div>


        </div>
        <div class="card-body">
    <table class="table  table-striped"  id="category_table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Member</th>
      <th scope="col">Book</th>
      <th scope="col">Return Date </th>
      <th scope="col">Copies reserved </th>

    </tr>
  </thead>
  <tbody>

      @foreach ($demandes as $demande)
      @foreach ($members as $member)
    <tr>
    @if ($member->id == $demande->member_id)
      <th scope="row">{{$demande->id}}</th>

      <td>  {{$member->nom}} {{$member->prenom}}</td>

      <td> Becomming </td>
      <td>{{$demande->date_retour}}</td>
      <td>{{$demande->nbr_copies_cmd}}</td>

      <td>

        <th>   <form method="POST" action="{{route('demandes.destroy',$demande->id)}}">
            @csrf
            @method('DELETE')
            <button class="btn-sm btn-danger">Delete</button>
            </form> </th>
      </td>
      @endif
    </tr>
    @endforeach
    @endforeach
  </tbody>
</table>
</div>
    </div>

    <script>
      $(document).ready(function()
      { $('#search').keyup(function(){
          search_table($(this).val());  });
      function search_table(value){
          $('#category_table tr').each(function()
          { var found = 'false';
          $(this).each(function(){
              if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
              { found = 'true';  } });
          if(found == 'true') { $(this).show();  }
          else  { $(this).hide();  }
          });  }
      });
  </script>

@endsection
