@include('include.header')

<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
 <h3 class="titre">LISTE DES APPRENANTS SIMPLON BURKINA</h3> <br> 
 <div class="container">
  <input class="form-control mb-4" id="tableSearch" type="text"
    placeholder="RECHERCHER UN APPRENANT">

  <table class="table table-bordered table-striped">
      
<thead class="entete">   
<tr>
    <th>N°</th>
    <th>NOM</th>
    <th>PRENOM</th>
    <th>DATE DE NAISSANCE</th>
    <th>VILLE</th>
    <th>FORMATION D'ORIGINE</th>
    <th>LIEU DE NAISSANCE</th>
    <th>ETABLISSEMENT PRECEDENT</th>
    <th>TUTEUR</th>
    <th>DETAILS</th>
    <th>MODIFIER</th>
    <th>SUPPRIMER</th>
</tr>
</thead>
<tbody id="myTable">
    @foreach($apprenants as $apprenant)
    <tr>
        <td>{{$apprenant->id}}</td>
        <td>{{$apprenant->nomApprenant}}</td>
        <td>{{$apprenant->prenomApprenant}}</td>
        <td>{{$apprenant->dateDeNaissance}}</td>
        <td>{{$apprenant->ville}}</td>
        <td>{{$apprenant->formation}}</td>
        <td>{{$apprenant->lieuDeNaissance}}</td>
        <td>{{$apprenant->etablissement}}</td>
        <td>{{$apprenant->tuteur->nomTuteur}}   {{$apprenant->tuteur->prenomTuteur}}</td>  
        <td><a href="{{route('apprenants.details',['id'=>$apprenant->id])}}" class="btn btn-primary">DETAILS</a></td>  
        <td><a href="{{route('apprenant.modifier',['id'=>$apprenant->id])}}" class="btn btn-info">MODIFIER</a></td> 
        <td>
            <form onsubmit="return confirm('Voulez-vous vraiment supprimer?')" action="
            {{route('apprenant.delete',['id'=>$apprenant->id])}}" method="post">
            @csrf
            {{method_field('DELETE')}}
    
            <input class="btn btn-danger" type="submit" value="supprimer"></td> 
</form>

        </tr>
    @endforeach

    
</tbody>
          </table>
        
      </div>   
      
      <script>// Filter table

$(document).ready(function(){
  $("#tableSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});</script>
      @include('include.footer')