@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    @include('layouts.footers.auth')
    
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
<!-- <script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-messaging.js"></script> -->
<!-- <script src="{{ asset('app.js') }}"></script> -->
<script type="text/javascript">
    //initServiceWorker();
    initFirebase();  
    notification()
    .then(token => {
        $.ajax({
            url:'/usuario/store-token/',
            type:'POST',
            data:{token:token},
            dataType:'json',
            headers:{
                'X-CSRF-Token':'{{ csrf_token() }}'
            },
            beforeSend:function(){
                console.log('sending..');
            }
        })
        .done(function(data){
            console.log('done:',data);
        })
        .fail(function(jqXHR,textStatus){

        })  
    });
</script>
@endpush