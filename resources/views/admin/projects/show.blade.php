@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<section class="products">
    <div class="container">
        <div class="row">
            <div class="row mb-3 justify-content-center">
                <div class="col-7 p-3">
                    <div class="card p-4 text-center">
                        <h1>
                            {{ $project->name }}
                        </h1>
                        <p>
                            Status: {{ $project->status }}
                        </p>
                        <p>
                            Priority: {{ $project->priority }}
                        </p>
                        <p>
                            start_date: {{ $project->start_date }}
                        </p>
                        <p>
                            end_date: {{ $project->end_date }}
                        </p>
                        <p>
                            Budget: {{ $project->budget }} &euro;
                        </p>
                        <div class="card-image">
                            <img class="w-50" src="{{  $project->view }}" alt="{{ $project->name }} ">
                        </div>
                        <div class="card-body">
                            <h2>
                                Descrizione
                            </h2>
                            <p>
                                {{ $project->description }}
                            </p>
                        </div>

                        <div class="actions mb-3 pt-3">
                            <a href="{{ route('admin.projects.edit', $project->id) }}">
                                <button class="btn btn-primary">
                                    Modifica  project
                                </button>
                            </a>
                        </div>

                        {{-- Delete --}}
                        <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-sm btn-warning" type="submit">
                                Delete
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection