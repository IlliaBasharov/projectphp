@extends('layouts.app')
@section('content')
    <div class="container main">
        <div id="accordion">
            @foreach($cities as $city)
                <div class="card">
                    <div class="card-header" id="heading_{{$city->id}}">
                        <h5 class="mb-0">
                            <button class="btn btn-link btn-city" data-toggle="collapse"
                                    data-target="#collapse_{{$city->id}}" aria-expanded="true"
                                    aria-controls="collapseOne">
                            <span class="city_name">{{$city->name}}
                                @if ($city->old_name !== '') ({{$city->old_name}})@endif
                            </span>
                            </button>
                        </h5>
                    </div>

                    <div id="collapse_{{$city->id}}" class="collapse" aria-labelledby="heading_{{$city->id}}"
                         data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
