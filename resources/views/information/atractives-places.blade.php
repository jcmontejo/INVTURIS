@extends('layouts.master')
@section('content')
<?php 
   $atractive = DB::select('select * from atractives');      
?>
    <!-- Page Content -->
    <div class="container">
<br><br><br><br>
        <?php
            foreach($atractive as $atractive):
        ?>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ $atractive->name }}  
                <small>{{ $atractive->region }}</small>                  
                </h1>                
            </div>
        </div>
       
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="<?php echo url('/atractives', [$atractive->image]); ?>" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Descripción</h3>
                <p>{{ $atractive->description}}</p>
                <h3>Particularidades</h3>
                <ul>
                    <li>{{ $atractive->particularities}}</li>                    
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Modo de Acceso</h3>                
                <ul>
                    <li>{{ $atractive->land}}</li>
                    <li>{{ $atractive->aereal}}</li>
                    <li>{{ $atractive->maritime}}</li> 
                    <li>{{ $atractive->river}}</li>                
                </ul>
            </div>

        </div>
        <!-- /.row -->

       
<hr>
        <?php
            endforeach
        ?>
    </div>
    <!-- /.container -->

@endsection