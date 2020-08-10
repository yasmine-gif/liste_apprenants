@include('include.header')
                              
     <div class=""><h4 class="titre_soustitre">ENREGISTRER UN APPRENANT</h4></div>
   </DIv>

       <!-- Le formulaire -->
   
   
   <div class="le-div-general-du-formulaire">   
   
 <form action="{{route('apprenant.modifier',['id'=>$apprenant->id])}}" method="POST" class="formulaire" enctype="multipart/form-data">
 @csrf

 @method('PUT')
   <div class="div-du-sous-titre-parent-et-des-tirest">
   <div class="row la-ligne-blanche">
  <div class=" col les-tirest"></div>
  </div>
                                                 <!-- Partie du formulaire sur les apprénants -->
  <div class="row">
  <div class="col-6 partie-sur-information-apprenant " > INFORMATION SUR L'APPRENANT</div>
  </div>
  </div>


  <div class="formualire-apprenant"> 
     <div class="les-champs-du-formulaire"> 
      <div class="row champ">
     <div class="col ">
     <input id="nomApprenant" type="text" value="{{$apprenant->nomApprenant}}" class="form-control {{ $errors->has('nomApprenant')?' is-invalid' : ''}}" placeholder="Nom" name="nomApprenant" >
     @if($errors->has('nomApprenant'))
<span class="invalid-feedback" role="alert">
    <strong>{{$errors->first('nomApprenant')}}</strong>
</span>
  @endif
    </div>
     <div class="col">
     <input id="ville" type="text" value="{{$apprenant->ville}}" class="form-control {{ $errors->has('ville')?' is-invalid' : ''}}" placeholder="Ville d'origine" name="ville" >
     @if($errors->has('ville'))
<span class="invalid-feedback" role="alert">
    <strong>{{$errors->first('ville')}}</strong>
</span>
  @endif
    </div>
    </div>
    <div class="row champ">
    <div class="col">
      <input id="prenomApprenant" type="text" value="{{$apprenant->prenomApprenant}}" class="form-control {{ $errors->has('prenomApprenant')?' is-invalid' : ''}}" placeholder="Prenom" name="prenomApprenant" >
      @if($errors->has('prenomApprenant'))
<span class="invalid-feedback" role="alert">
    <strong>{{$errors->first('prenomApprenant')}}</strong>
</span>
  @endif
    </div>
      <div class="col">
      <div class="form-group ">
                            
                            <select name="tuteur_id" class="form-control {{ $errors->has('tuteur_id')?' is-invalid' : ''}}">
                            <option  >chosir un tuteur</option>
                            <?php $i=0; ?>
                           @foreach($tuteurs as $tuteur)
                           <?php $i++; ?>
                            <option {{$tuteur->id == $apprenant->tuteur_id ?'selected' :''}} value="{{$tuteur->id}}">{{$i}}. {{$tuteur->nomTuteur}} {{$tuteur->prenomTuteur}}</option>
                            @endforeach
                            </select>
                        
                                @if ($errors->has('tuteut_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tuteur_id') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
    </div>
    </div>
    <div class="row champ">
      <div class="col">
      <input id="dateDeNaissance" type="date" value="{{$apprenant->dateDeNaissance}}" class="form-control {{ $errors->has('dateDeNaissance')?' is-invalid' : ''}}" placeholder="Date de naissance" name="dateDeNaissance" >
      @if($errors->has('dateDeNaissance'))
<span class="invalid-feedback" role="alert">
    <strong>{{$errors->first('dateDeNaissance')}}</strong>
</span>
  @endif
    </div>
      <div class="col">
       <input id="formation" type="text" value="{{$apprenant->formation}}" class="form-control {{ $errors->has('formation')?' is-invalid' : ''}}" placeholder="Formation d'origine" name="formation" >
       @if($errors->has('formation'))
<span class="invalid-feedback" role="alert">
    <strong>{{$errors->first('formation')}}</strong>
</span>
  @endif
      </div>
      </div>
    <div class="row champ">
      <div class="col">
       <input id="lieuDeNaissance" type="text" value="{{$apprenant->lieuDeNaissance}}" class="form-control {{ $errors->has('lieuDeNaissance')?' is-invalid' : ''}}" placeholder="Lieu de naisance" name="lieuDeNaissance">
       @if($errors->has('lieuDeNaissance'))
<span class="invalid-feedback" role="alert">
    <strong>{{$errors->first('lieuDeNaissance')}}</strong>
</span>
  @endif
      </div>
        <div class="col">
        <input id="etablissement" type="tel" value="{{$apprenant->etablissement}}" class="form-control {{ $errors->has('etablissement')?' is-invalid' : ''}}" placeholder="Etablissement precedent" name="etablissement">
        @if($errors->has('etablissement'))
<span class="invalid-feedback" role="alert">
    <strong>{{$errors->first('etablissement')}}</strong>
</span>
  @endif
      </div>
     </div>
    <div class="row champ">
       <div class="col-6">
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="genre" required >
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
        </select>
     </div>
        
      <div class="col-6 custom-file">
                                <input type="file" name="photo"  class="custom-file-input {{ $errors->has('photo') ? ' is-invalid': ' ' }}" id="validatedCustomFile">
                                <label class="custom-file-label" for="validatedCustomFile">Choisir une photo...</label>
                                @if ($errors->has('photo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
    
         </div>

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
</div>
</div>
</div>
</form>
</div>

@include('include.footer')