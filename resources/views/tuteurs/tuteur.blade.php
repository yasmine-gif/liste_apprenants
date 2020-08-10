@include('include.header')          
 @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
      </button>
     {{session()->get('message')}} 
    </div>
    
    
@endif

     <div class=""><h4 class="titre_soustitre">ENREGISTRER UN TUTEUR</h4></div>
   </DIv>
 <!-- la partie du formulaire sur le tuteur -->
 <form action="{{route('tuteur.valider')}}" method="POST" class="formulaire" enctype="multipart/form-data">
 @csrf
 <div class="formulaire-parent">
   <div class="div-du-sous-titre-apprenats-et-des-tirest">
    <div class="les-tirest-infos-tuteur"></div>
    <div class="row">
          <div class="col-6 partie-sur-information-tuteur" > INFORMATION SUR LE TUTEUR</div>
     </div>
      
    <div class="les-champs-du-formulaire">
   <div class="row champ">
   <div class="col ">
  <input id="nomTuteur" type="text" class="form-control {{ $errors->has('nomTuteur')?' is-invalid' : ''}}" placeholder="NOM" name="nomTuteur" >
  @if($errors->has('nomTuteur'))
<span class="invalid-feedback" role="alert">
    <strong>{{$errors->first('nomTuteur')}}</strong>
</span>
  @endif
</div>
  <div class="col">
  <input id="profession" type="text" class="form-control {{ $errors->has('profession')?' is-invalid' : ''}}" placeholder="PROFESSION" name="profession">
  @if($errors->has('profession'))
<span class="invalid-feedback" role="alert">
    <strong>{{$errors->first('profession')}}</strong>
</span>
  @endif
</div>
   </div>
 
   <div class="row champ">
     <div class="col">
    <input id="prenomTuteur" type="text" class="form-control{{ $errors->has('prenomTuteur')?' is-invalid' : ''}}" placeholder="PRENOM" name="prenomTuteur" >
    @if($errors->has('prenomTuteur'))
<span class="invalid-feedback" role="alert">
    <strong>{{$errors->first('prenomTuteur')}}</strong>
</span>
  @endif
</div>
    <div class="col">
    <input id="telephoneTuteur" type="text" class="form-control {{ $errors->has('telephoneTuteur')?' is-invalid' : ''}}" placeholder="TELEPHONE" name="telephoneTuteur" >
    @if($errors->has('telephoneTuteur'))
<span class="invalid-feedback" role="alert">
    <strong>{{$errors->first('telephoneTuteur')}}</strong>
</span>
  @endif
</div>
    </div>
    <div class="row la-classe-de-enregistrer-et-de-annuler">
   <div class="col">
   <input class="btn btn-primary Enregistrer" type="submit" value="Enregistrer" ></div>
   <div class="col">
  <input class="btn btn-primary Annuler" type="reset" value="Annuler">
</div>
 </div>
 </div>
</form>
@include('include.footer')