@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Melo Express</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card"> 
                        <div class="card-body">

                            <h3 class="text-center"></h3>

                            <a href="/comercio/listado" class="btn btn-warning" style="color:white;"><i class="fas fa-truck"></i> Ver mis envios</a>

                            
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>    
@endsection

