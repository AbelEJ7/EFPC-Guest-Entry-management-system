 <!-- success message-->
<div>
    @if(session()->has('message'))
<div class="alert alert-success" id="alertjs">
 {{session()->get('message')}}
 </div>

    @endif
</div>

<!-- end of success message-->


 <!-- error message-->
 <div>
    @if(session()->has('errorr'))
<div class="alert alert-errorr" id="alertjs">
 {{session()->get('errorr')}}
 </div>

    @endif
</div>

<!-- end of error message-->

 <!-- update alert  message-->
 <div>
    @if(session()->has('updatt'))
<div class="alert alert-updatt" id="alertjs">
 {{session()->get('updatt')}}
 </div>

    @endif
</div>

<!-- end of update alert message-->

<script>
    function hidedivs(){
        document.getElementById("alertjs").remove();

    }
    setTimeout("hidedivs()",3000);

</script>