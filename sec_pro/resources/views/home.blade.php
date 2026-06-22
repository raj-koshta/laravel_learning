<div>
    <h3>Home Page</h3>

    <h4>
        {{-- Return till routes --}}
        {{-- {{ URL::current() }} --}}
        {{ url()->current() }}
    </h4>
    <h4>
        {{-- Return all and full URl even it have parameters and value it also return --}}
        {{ URL::full() }}
    </h4>
    <h4>
        {{ url()->full() }}
    </h4>
    <a href="/">Welcome page</a>
    <h4> Previous URL
        {{ url()->previous() }}
    </h4>
    <h4> Dynamic parameter
        <a href="{{ URL::to('home', ['raj']) }}">Home {{ URL::full() }}</a>
    </h4>
</div>

