@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div> -->

                @include('navBar')

                <template v-if="menu==0">
                    <compras></compras->  
                </template>

                <template v-if="menu==1">
                    <historial-compras></historial-compras-> 
                </template>

                <template v-if="menu==2">
                    <editar-informacion></editar-informacion-> 
                </template>


                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> -->
            <!-- </div>
        </div>
    </div>
</div> -->
@endsection
