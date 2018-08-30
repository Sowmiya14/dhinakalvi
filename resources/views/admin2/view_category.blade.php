

    @if(!empty($categorys))
       
                    <h2>Category List </h2>
      
                <table >
                    <!-- Table Headings -->
                    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($categorys as $category)
                        <tr>
                            <td ">
                                {{$category->category}}
                            </td>
                           <td>
                                <a href="{{ route('category.edit', $category->id) }}"  ">edit</a>
                               
                            </td>
                            <td>
                                <a href="{{ route('category.delete', $category->id) }}"  ">delete</a>
                               
                            </td>
                          
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
 
