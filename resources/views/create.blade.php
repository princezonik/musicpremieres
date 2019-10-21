
<div class="col-8">

    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf

        @include('form')
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>   
</div>
