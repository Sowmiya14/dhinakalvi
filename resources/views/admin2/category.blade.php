</!DOCTYPE html>
<html>
<head>
	<title>category</title>
</head>
<body>
	<form action="{{ route('category.create') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    
                            <input type="text" placeholder="Title" name="category"  ">

                            <input type="submit"  value="Add category" />
                        
                </form>


</body>
</html>