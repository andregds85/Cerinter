@extends('layouts4.app')
@section('content')


<style>

.progress {
    width: 150px!important;
    height: 150px!important;
    line-height: 150px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position: relative;
  }
  
  .progress:after {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
  }
  
  .progress>span {
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
  }
  
  .progress .progress-left {
    left: 0;
  }
  
  .progress .progress-bar {
    width: 100%;
    height: 100%;
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0;
  }
  
  .progress .progress-left .progress-bar {
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
  }
  
  .progress .progress-right {
    right: 0;
  }
  
  .progress .progress-right .progress-bar {
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
  }
  
  .progress .progress-value {
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #44484b;
    font-size: 24px;
    color: #fff;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 5%;
  }
  
  .progress.blue .progress-bar {
    border-color: #049dff;
  }
  
  .progress.blue .progress-left .progress-bar {
    animation: loading-2 1.5s linear forwards 1.8s;
  }
  
  .progress.yellow .progress-bar {
    border-color: #fdba04;
  }
  
  .progress.yellow .progress-left .progress-bar {
    animation: loading-3 1s linear forwards 1.8s;
  }
  
  .progress.pink .progress-bar {
    border-color: #ed687c;
  }
  
  .progress.pink .progress-left .progress-bar {
    animation: loading-4 0.4s linear forwards 1.8s;
  }
  
  .progress.green .progress-bar {
    border-color: #1abc9c;
  }
  
  .progress.green .progress-left .progress-bar {
    animation: loading-5 1.2s linear forwards 1.8s;
  }
  
  @keyframes loading-1 {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg);
    }
  }
  
  @keyframes loading-2 {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(144deg);
      transform: rotate(144deg);
    }
  }
  
  @keyframes loading-3 {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg);
    }
  }
  
  @keyframes loading-4 {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(36deg);
      transform: rotate(36deg);
    }
  }
  
  @keyframes loading-5 {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(126deg);
      transform: rotate(126deg);
    }
  }
  
  @media only screen and (max-width: 990px) {
    .progress {
      margin-bottom: 20px;
    }
  }


</style>






@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <?php
    use App\Models\Checklist;
    use App\Http\Controllers\PainelController;

    $tabela = Checklist::all()->count();
?>


<!-- DataTales  -->
<div class="card shadow mb-4">

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Painel de Solicitações de Checklist Transporte Seguro</th>
       
 
        </tr>
      </thead>

      <tbody>
         <tr>
           
           <td>
        


<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" />



    <div class="col-md-3 col-sm-6">
      <div class="progress yellow">
        <span class="progress-left">
          <span class="progress-bar"></span>
        </span>
        <span class="progress-right">
          <span class="progress-bar"></span>
        </span>
        <div class="progress-value"><?php echo   $tabela ?>  </div>
      </div>
    </div>
  </div>
</div>


<div class="col-md-3 col-sm-6">

        <div >Total de Solicitações de Checklist Transporte Seguro</div>  
</div>



<script src="//qiao.github.io/ProgressCircle.js/ProgressCircle.min.js"></script>
<canvas id="my_canvas" width="400" height="160"></canvas>


        
</td>
        
        
  
      

           
        </tr>
      </tbody>
  </table>






        





















</div>
</div>
</div>





<p class="text-center text-primary"><small>CheckList Seguro</small></p>
@endsection


