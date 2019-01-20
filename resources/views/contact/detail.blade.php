@extends('layout.layout')



@section('body')

    <div class="row" style="background-color: #e7e7e7">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Contact Details</h3>
                @if(isset($show))
                    <div class="box-action pull-right">
                        <a href="{{url('/contacts/'.$contact->id.'/delete')}}" class="btn btn-sm btn-default"><i class="fas fa-trash"></i></a>
                        <a href="{{url('/contacts/'.$contact->id.'/edit')}}" class="btn btn-sm btn-default"><i class="fas fa-pencil-alt"></i></a>
                        <a href="{{url('/contacts/'.$contact->id.'/download')}}" class="btn btn-sm btn-default"><i class="fas fa-download"></i></a>
                    </div>
                @endif
            </div>

            @if(isset($add))
                {!! Form::open(['url' => url('/contacts'), 'method' => 'post']) !!}
            @elseif(isset($edit))
                {!! Form::model($contact, ['url' => url('/contacts/'.$contact->id), 'method' => 'put']) !!}
            @else
                {!! Form::model($contact, []) !!}
            @endif
            @include('contact.form')
            {!! Form::close() !!}

        </div>
        </div>

    </div>


@endsection



@section('script')

    {!! Html::script('./js/main.js') !!}

    <script>
        @if(isset($show))
            $("input").prop('disabled', true);
        @endif
    </script>


@endsection