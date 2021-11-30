<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
<script type='text/javascript' src='https://code.jquery.com/jquery-1.12.4.min.js' crossorigin="anonymous"></script>
<script>
 $(document).ready(function(){
  $('input[name="EDTextbox"]').on('click',function(){
   if($(this).val() === 'enabled'){
        $('.text').show();
   }else{
        $('.text').val('').hide();
   }
  });
 });
</script>