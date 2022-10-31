@extends('layouts.master')
@section('title',"Vezetéknév")
  
@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <form method="POST">
                @csrf
                <div class="my-3">
                    <label for="vezeteknev">Vezetéknév:</label>
                    <input type="text" id="vezetéknév" name="vezetéknév" class="form-control">
                    @error('vezetéknév')
                      <div class="alert alert-danger">
                        {{$message}}
                     </div>  
                    @enderror
                </div>
                    <div class="my-3">
                        <label for="keresztnev">Keresztnév:</label>
                        <input type="text" id="keresztnév" name="keresztnév" class="form-control">
                        @error('keresztnév')
                        <div class="alert alert-danger">
                          {{$message}}
                       </div>  
                      @enderror
                    </div>
                        <div class="my-3">
                            <label for="szuletesi_datum">Születési dátum:</label>
                            <input type="date" name="szul_ev" id="szul_ev" class="form-control">
                            @error('szul_ev')
                            <div class="alert alert-danger">
                              {{$message}}
                           </div>  
                          @enderror
                        </div>
                            <div class="my-3">
                                <button type="submit" class="btn btn-dark rounded-5 form-control">Rögzítés</button>
                             </div>
            </form> 
        </div>
    </div>
</div>


    

@endsection