<div class="row">
@foreach($faculty as $f)

    <div class="col-lg-12">
        <h1>{{{ $f->full }}}</h1>
        <p>
            <a class="btn btn-primary" href="/faculty/{{ $f->id }}" role="button">View</a>
            <a class="btn btn-primary" href="/faculty/{{ $f->id }}/edit" role="button">Edit</a>
        </p>
    </div>

@endforeach
</div>
