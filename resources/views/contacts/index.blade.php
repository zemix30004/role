@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Contacts</h2>
            </div>
            <div class="pull-right">
                @can('contact-create')
                <a class="btn btn-success" href="{{ route('contacts.create') }}">Create New Contact</a>
                @endcan
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Message</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($contacts as $contact)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $contact->name }}</td>
	        <td>{{ $contact->phone }}</td>
            <td>{{ $contact->email }}</td>
	        <td>{{ $contact->message }}</td>
	        <td>
                <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('contacts.show',$contact->id) }}">Show</a>
                    @can('contact-edit')
                    <a class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}">Edit</a>
                    @endcan
                    @csrf
                    @method('DELETE')
                    @can('contact-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>
    {!! $contacts->links() !!}

<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection
