 @if($errors->any())
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
        @endif
        
                Edit category
            </div>
            
                <form action="{{ route('category.update', $category->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <br>
                            <input type="text" name="category" id="title"  value="{{ $category->category }}">
                        
                            <br>
                    
                 
                            <input type="submit"  value="Update category" />
                             <br><a href="{{ route('category.show') }}" ">Back</a>
                      
                
                </form>
            