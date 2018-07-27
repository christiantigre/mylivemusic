<div class="col-md-3">
    <div class="panel panel-success">
        <div class="panel-heading">
            
            @if(isset($title))
            {{ $title }}
        @else
            EXTRAS
        @endif
        </div>

        <div class="panel-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin') }}">
                        
                        @if(isset($cont))
            {!! $cont !!}
        @else
            Detalles
        @endif
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
