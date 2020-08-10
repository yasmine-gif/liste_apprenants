@include('include.header')

<br>
<br>
<br>
<br>
        <div class="section-title"  style="max-width: 740px;">
 
          <h7><strong>{{$apprenant->nomApprenant}} </strong></strong></h7>
          <h7><strong>{{$apprenant->prenomApprenant}}</strong></strong></h7>
        </div>
        
        <div class="card md-4" style="max-width: 860px;">
        <div class="col-lg-4  align-items-center" data-aos="fade-left">
            
        <img src="{{asset('storage').'/'.$apprenant->photo}}" style="width:200px;height:200px;" class="bf5 border rounded-circle"> 
                        
          </div>
          <div class="col-lg-8 col-md-8  pt-8 pt-lg-8" data-aos="fade-right">
              <h7><p class="card-text"><strong>NOM :     </strong>{{$apprenant->nomApprenant}}</p></h7>
              <h7><p class="card-text"><strong>PRENOM:      </strong>{{$apprenant->prenomApprenant}}</p></h7>
              <h7><p class="card-text"><strong>DATE DE NAISSANCE:        </strong>{{$apprenant->dateDeNaissance}}</p></h7>
              <h7><p class="card-text"><strong>VILLE :       </strong>{{$apprenant->ville}}</p></h7>
              <h7><p class="card-text"><strong>FORMATION D'ORIGINE:   </strong>{{$apprenant->formation}}</p></h7>
              <h7><p class="card-text"><strong>LIEU DE NAISSANCE:         </strong>{{$apprenant->lieuDeNaissance}}</p></h7>
              <h7><p class="card-text"><strong>ETABLISSEMENT PRECEDENT:    </strong>{{$apprenant->etablissement}}</p></h7>
              <h7><p class="card-text"><strong>TUTEUR : </strong>{{$apprenant->tuteur->nomTuteur}}  {{$apprenant->tuteur->prenomTuteur}}</p></h7>
            </div>                    
        </div>
    </div>
    <br>
    @include('include.footer') 