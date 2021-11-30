<ul>
        @foreach (\App\Models\Contact::all() as $contact)

            <li>
                
                <form action="{{route('destroy',$contact->id)}}" method="post" style="display: inline-block;">
                    @csrf
                    @method('delete')
                    <button>Delete</button>
                </form>

                <a href="{{route('edit',$contact->id)}}">Edit</a>

                {{$contact->name}}  -  {{$contact->phone}}

            </li>
        
        @endforeach
    </ul>