

{{ Form::open(array('url'=>'', 'files'=>true)) }}


  @foreach($categories as $category)

<option value="{{ $category->id }}"> {{$category->category_name}}</option>

           @endforeach

<div class="form-group">
    <select class="form-control input-sm" name="category" id="category">

</select>
</div>
    <div class="form-group">
@foreach ($categories as $category)
                     <select class="form-control input-sm" name="subcategory" id="subcategory">
                        <option value="{{ $categories->id }}">{{ $categories->title }}</option>
@endforeach
                    </select>
    </div>

{{ Form::close() }}


    <script type="text/javascript">
   $('#category_id').on('change', function(e){

    var cat_id = e.target.value;

       //ajax

       $.get('/api/category-dropdown?cat+id=' + cat_id, function(data){

           //success data
           $('#subcategory_id').empty();

           $('#subcategory_id').append(' Please choose one');

           $.each(data, function(index, subcatObj){

               $('#subcategory_id').append(''
               + subcatObj.subcategory_name + '</option');


           });



       });


   });

</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
